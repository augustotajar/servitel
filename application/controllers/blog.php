<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
    
    public function Blog(){
        parent::__construct();
        $this->load->model('Blog_model','model');
        $this->load->library('session');
    }
    
    public function index()
    {
        $data = array(
            'sess' =>  $this->session->all_userdata(),
            'noticias' => $this->get_noticias()
        );
        $this->load->view('blog_view',$data);
    }
    
    public function post($id)
    {
        $data = array(
            'sess' =>  $this->session->all_userdata(),
            'post' => $this->get_post($id)
        );
        $this->load->view('post_view',$data);
    }
    
    function publicar(){
       $result = FALSE; 
       $is_logged_in = $this->session->userdata('logged_in');
        if(isset($is_logged_in)){
            if($this->session->userdata('permissions')==777){
                $titulo = $this->input->get_post('titulo', TRUE);
                $texto = $this->input->get_post('texto', TRUE);
                $fecha = date('Y-m-d H:i:s');

                $result = $this->model->publicar($titulo,$texto,$fecha);    
            }
        }
        if($result){
            echo '{"publicar":"succes"}';
         }else{
            echo '{"publicar":"fail","msg":"Ocurrio un error al publicar."}';
         }
    }    
    
    function get_noticias(){
        return $this->model->get_noticias();    
    }    
    
    function get_post($id){
        return $this->model->get_post($id);    
    }   
    
    function eliminar_post($id){
        $is_logged_in = $this->session->userdata('logged_in');
        if(isset($is_logged_in)){
            if($this->session->userdata('permissions')==777){
                $this->model->eliminar_post($id);    
            }
        }
        redirect("../blog");
    }
}