<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function Usuario(){
        parent::__construct();
        $this->load->model('Usuarios_model','usuarios_model');
        $this->load->library('session');
        $this->load->library('String');
    }
       
    public function index($id){
        if($this->session->userdata('tipo') != 3){
            if($this->session->userdata('uid') != $id){
                return 0;
            }
        }
        $data = array(
               'usuario' => $this->cargarUsuario($id),
                'tipo' => $this->session->userdata('tipo')
        );
        $this->load->view('panel_header_page',$this->session->all_userdata());
        $this->load->view('usuarios/usuario_view',$data);
        $this->load->view('panel_footer_page');
    }    
    
    public function agregarUsuario(){
        if($this->session->userdata('tipo') == 3){
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('usuarios/agregar_usuario_view');
            $this->load->view('panel_footer_page');
        }
    } 
    
    public function guardarUsuario(){
        if($this->session->userdata('tipo') == 3){
                $data = array( 	
                    'unique_id' => uniqid('', true),
                    'primer_nombre' => $this->input->get_post('primer_nombre'),
                    'segundo_nombre' => $this->input->get_post('segundo_nombre'),
                    'primer_apellido' => $this->input->get_post('primer_apellido'),
                    'segundo_apellido' => $this->input->get_post('segundo_apellido'),
                    'tipo' => $this->input->get_post('tipo'),
                    'email' => $this->string->blankToNull($this->input->get_post('email')),
                    'encrypted_password' => $this->string->blankToNull($this->input->get_post('password')),
                    'created_at' => date('Y-m-d H:i:s') 
                );
                $result = $this->usuarios_model->guardarUsuario($data);
                if($result){ 
                    echo '{"estatus":"success","resultado":"'.$result.'"}';
                 }else{
                    echo '{"estatus":"fail","msg":"Ocurrio un error al guardar."}';
                 }
        }
    }
    
    private function cargarUsuario($id){     
        return $this->usuarios_model->cargarUsuario($id);
    }
    
    public function buscarUsuarios(){     
        if($this->session->userdata('tipo') != 2){
            echo json_encode($this->usuarios_model->buscarUsuarios($this->input->get_post('key')));
        }
    }
    
    public function editarUsuario($id){
        if($this->session->userdata('tipo') == 3){
            $data = array(
                   'usuario' => $this->cargarUsuario($id)
            );
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('usuarios/editar_usuario_view',$data);
            $this->load->view('panel_footer_page');
        }
    } 
    
    public function actualizarUsuario(){
        if($this->session->userdata('tipo') != 3){
            if($this->session->userdata('uid')!= $this->input->get_post('uid')){
                    return 0;
            }
        }
            $data = array( 	
                'primer_nombre' => $this->string->blankToNull($this->input->get_post('primer_nombre')),
                'segundo_nombre' => $this->input->get_post('segundo_nombre'),
                'primer_apellido' => $this->string->blankToNull($this->input->get_post('primer_apellido')),
                'segundo_apellido' => $this->input->get_post('segundo_apellido'),
                'email' => $this->string->blankToNull($this->input->get_post('email')),
                'tipo' => $this->string->blankToNull($this->input->get_post('tipo')),
                'encrypted_password' => $this->string->blankToNull($this->input->get_post('password')),
                'updated_at' => date('Y-m-d H:i:s') 
            );
            $where = array('uid' => $this->input->get_post('uid'));
            $result = $this->usuarios_model->actualizarUsuario($data,$where);
            if($result){ 
                echo '{"estatus":"success","resultado":"'.$result.'"}';
             }else{
                echo '{"estatus":"fail","msg":"Ocurrio un error al guardar los cambios."}';
             }
    }
    
    public function eliminarUsuario(){
        if($this->session->userdata('tipo') == 3){
            $where = array('uid' => $this->input->get_post('uid'));
            $result = $this->usuarios_model->eliminarUsuario($where);
            if($result){ 
                echo '{"estatus":"success","resultado":"'.$result.'"}';
             }else{
                echo '{"estatus":"fail","msg":"Ocurrio un error al eliminar usuario."}';
             }
        }
    }
    
    public function cambiarContrasena($id){
        if($this->session->userdata('tipo') != 3){
            if($this->session->userdata('uid')!= $id){
                    return 0;
            }
        }
            $data = array(
                   'usuario' => $this->cargarUsuario($id)
            );
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('usuarios/cambiar_contrasena_view',$data);
            $this->load->view('panel_footer_page');
    } 
    
    public function actualizarContrasena(){
        if($this->session->userdata('tipo') != 3){
            if($this->session->userdata('uid')!= $this->input->get_post('uid')){
                    return 0;
            }
        }
            $data = array( 	
                'encrypted_password' => $this->string->blankToNull($this->input->get_post('password')),
                'updated_at' => date('Y-m-d H:i:s') 
            );
            $where = array('uid' => $this->input->get_post('uid'));
            $result = $this->usuarios_model->actualizarUsuario($data,$where);
            if($result){ 
                echo '{"estatus":"success","resultado":"'.$result.'"}';
             }else{
                echo '{"estatus":"fail","msg":"Ocurrio un error al guardar los cambios."}';
             }
    }
}
?>
