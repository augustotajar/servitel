<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function Welcome(){
        parent::__construct();
        $this->load->model('Blog_model','blog_model');
        $this->load->library('session');
    }
    
    public function index()
    {
        $data = array(
          'ultimas_noticias' =>   $this->blog_model->get_ultimas_noticias()
        );
        $this->load->view('welcome_message',$data);
    }
        
    function login(){
        $this->load->model('Usuarios_model','model');
        $email = $this->input->get_post('email', TRUE);
        $pass = $this->input->get_post('pass', TRUE);
        
        $result = $this->model->login($email,$pass);                              
        
        if($result){
            $this->session->set_userdata($result);
            $this->session->unset_userdata("encrypted_password");
            $this->session->unset_userdata("salt");
            $this->session->set_userdata( 'logged_in',TRUE);
            echo '{"login":"succes"}';
        }else{
           echo '{"login":"fail","msg":"Correo o Contrase&ntilde;a incorrectos."}';
        }
    }
     
    function disconect(){
        $this->session->sess_destroy();
    }
}