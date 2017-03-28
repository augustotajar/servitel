<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

    public function Panel(){
        parent::__construct();
        $this->load->model('Tareas_model','tareas_model');
        $this->load->model('Usuarios_model','usuarios_model');
        $this->load->model('Clientes_model','clientes_model');
        $this->load->library('session');
        $this->load->library('String');
    }

    public function index(){
        redirect("panel/listarTareas");
    }
    
    /*
     *  Metodos relacionados a Tareas
     */
    public function listarTareas(){
        
//        if($this->session->userdata('logged_in') == TRUE){
            $data = array(
                   'tareas' => $this->cargarTareas()
            );
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('tareas/panel_tareas_view',$data);
            $this->load->view('panel_footer_page');
//        }else{
//            redirect("sys_services_login");
//        }
    }
    private function cargarTareas($search="",$order='id asc',$offset=0){
        $filtro = [];
        if($this->session->userdata('tipo') == 2){
                $filtro['cliente'] = $this->session->userdata('id_cliente');
        }
        $result = $this->tareas_model->cargarTareas($filtro,$search,$order,$offset);     
        return $result['result'];
    }  
    
    /*
     *  Metodos relacionados a Usuarios
     */
    public function listarUsuarios(){
        if($this->session->userdata('tipo') == 3){
            $data = array(
                   'usuarios' => $this->cargarUsuarios()
            );
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('usuarios/panel_usuarios_view',$data);
            $this->load->view('panel_footer_page');
        }
    }
    private function cargarUsuarios($search="",$order='uid asc',$offset=0){
        $result = $this->usuarios_model->cargarUsuarios($search,$order,$offset);     
        return $result['result'];
    }    
    
    /*
     *  Metodos relacionados a Clientes
     */
    public function listarClientes(){
        if($this->session->userdata('tipo') != 2){
            $data = array(
                   'clientes' => $this->cargarClientes()
            );
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('clientes/panel_clientes_view',$data);
            $this->load->view('panel_footer_page');
        }
    }
    private function cargarClientes($search="",$order='id asc',$offset=0){
        $result = $this->clientes_model->cargarclientes($search,$order,$offset);     
        return $result['result'];
    }
    
    function logOut(){
        $this->session->sess_destroy();
        redirect("welcome");        
    }
   
}
?>
