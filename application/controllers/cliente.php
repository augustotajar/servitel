<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function Cliente(){
        parent::__construct();
        $this->load->model('Clientes_model','clientes_model');
        $this->load->library('session');
        $this->load->library('String');
    }
       
    public function index($id){
        if($this->session->userdata('tipo') != 2){
            $data = array(
                   'cliente' => $this->cargarCliente($id)
            );
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('clientes/cliente_view',$data);
            $this->load->view('panel_footer_page');
        }
    }    
    
    public function agregarCliente(){
         if($this->session->userdata('tipo') != 2){                              
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('clientes/agregar_cliente_view');
            $this->load->view('panel_footer_page');               
         }
    } 
    
    public function guardarCliente(){
        if($this->session->userdata('tipo') != 2){
                $data_cliente = array( 	
                    'nombre' => $this->input->get_post('nombre'),
                    'rif' => $this->input->get_post('rif'),
                    'email' => $this->input->get_post('email'),
                    'telefono1' => $this->input->get_post('telefono1'),
                    'telefono2' => $this->input->get_post('telefono2'),
                    'direccion' => $this->input->get_post('direccion')
                );
                $result_cliente = $this->clientes_model->guardarCliente($data_cliente); 
                if($result_cliente){ 
                    $data_usuario = array( 	
                    'unique_id' => uniqid('', true),
                    'id_cliente' => $result_cliente,
                    'primer_nombre' => $this->input->get_post('nombre'),
                    'tipo' => 2,
                    'email' => $this->input->get_post('email'),
                    'encrypted_password' => '',
                    'created_at' => date('Y-m-d H:i:s') 
                    );
                    $this->load->model('Usuarios_model','usuarios_model');
                    $result_usuario = $this->usuarios_model->guardarUsuario($data_usuario);
                    if($result_usuario){ 
                        echo '{"estatus":"success","resultado":"'.$result_usuario.'"}';
                     }else{
                        echo '{"estatus":"fail","msg":"Ocurrio un error al crear el usuario del cliente."}';
                     }
                 }else{
                    echo '{"estatus":"fail","msg":"Ocurrio un error al crear el cliente"}';
                 }       
        }
    }
    
    private function cargarCliente($id){     
        return $this->clientes_model->cargarCliente($id);
    }
    
    public function buscarClientes(){
        if($this->session->userdata('tipo') != 2){
                echo json_encode($this->clientes_model->buscarClientes($this->input->get_post('key')));
        }
    }
    
    public function editarCliente($id){
        if($this->session->userdata('tipo') != 2){
            $data = array(
                   'cliente' => $this->cargarCliente($id)
            );
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('clientes/editar_cliente_view',$data);
            $this->load->view('panel_footer_page');
        }
    } 
    
    public function actualizarCliente(){
        if($this->session->userdata('tipo') != 2){
            $data = array( 	 	
                'nombre' => $this->input->get_post('nombre'),
                'rif' => $this->input->get_post('rif'),
                'email' => $this->input->get_post('email'),
                'telefono1' => $this->input->get_post('telefono1'),
                'telefono2' => $this->input->get_post('telefono2'),
                'direccion' => $this->input->get_post('direccion')
            );
            $where = array('id' => $this->input->get_post('id'));
            $result = $this->clientes_model->actualizarCliente($data,$where);
            if($result){ 
                echo '{"estatus":"success","resultado":"'.$result.'"}';
             }else{
                echo '{"estatus":"fail","msg":"Ocurrio un error al guardar los cambios."}';
             }
        }
    }
    public function eliminarCliente(){
        if($this->session->userdata('tipo') != 2){
            $where = array('id' => $this->input->get_post('id'));
            $result = $this->clientes_model->eliminarCliente($where);
            if($result){ 
                echo '{"estatus":"success","resultado":"'.$result.'"}';
             }else{
                echo '{"estatus":"fail","msg":"Ocurrio un error al eliminar cliente."}';
             }
        }
    }
   
}
?>
