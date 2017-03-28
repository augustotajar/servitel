<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tarea extends CI_Controller {

    public function Tarea(){
        parent::__construct();
        $this->load->model('Tareas_model','tareas_model');
        $this->load->library('session');
        $this->load->library('String');
        $this->load->helper(array('form', 'url','file'));
    }
       
    public function index($id){
        $userData = $this->session->all_userdata();
        $data = array(
               'tarea' => $this->cargarTarea($id),
                'tipo_usuario' => $userData['tipo']
        );
        $this->load->view('panel_header_page',$userData);
        if($userData['tipo'] == 2){
            if($userData['id_cliente']!=$data['tarea'][0]->cid ){
                return 0;   // PEND agregar vista de acceso denegado
            }            
        }
        $this->load->view('tareas/tarea_view',$data);
        $archivos = array(
               'tarea' => $id,
               'archivos'=> $this->listarArchivos($id)
        );
        $this->load->view('tareas/archivos_view',$archivos);
        $this->load->view('panel_footer_page');
    } 
    
    public function agregarTarea(){
        if($this->session->userdata('tipo')!= 2){
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('tareas/agregar_tarea_view');
            $this->load->view('panel_footer_page');
        }
    }
    
    public function guardarTarea(){
        if($this->session->userdata('tipo')!= 2){
            $data = array( 	
                'titulo' => $this->string->blankToNull($this->input->get_post('titulo')),
                'cliente' => $this->string->blankToNull($this->input->get_post('cliente')),
                'descripcion' => $this->string->blankToNull($this->input->get_post('descripcion')),
                'prioridad' => $this->string->blankToNull($this->input->get_post('prioridad')),
                'estatus' => $this->string->blankToNull($this->input->get_post('estatus')),
                'progreso' => $this->input->get_post('progreso'),
                'responsable' => $this->input->get_post('responsable'),
                'fecha_inicio' => $this->string->blankToNull($this->input->get_post('fecha_inicio')),
                'fecha_fin' => $this->string->blankToNull($this->input->get_post('fecha_fin')),
            );
            $result = $this->tareas_model->guardarTarea($data);
            if($result){ 
                echo '{"estatus":"success","resultado":"'.$result.'"}';
             }else{
                echo '{"estatus":"fail","msg":"Ocurrio un error al guardar."}';
             }
        }
    }
    
    private function cargarTarea($id){     
        return $this->tareas_model->cargarTarea($id);
    }
    
    public function editarTarea($id){
        if($this->session->userdata('tipo')!= 2){
            $data = array(
                   'tarea' => $this->cargarTarea($id)
            );
            $this->load->view('panel_header_page',$this->session->all_userdata());
            $this->load->view('tareas/editar_tarea_view',$data);
            $this->load->view('panel_footer_page');
        }
    }
    public function actualizarTarea(){
        if($this->session->userdata('tipo')!= 2){
            $data = array( 	
                'titulo' => $this->string->blankToNull($this->input->get_post('titulo')),
                'cliente' => $this->string->blankToNull($this->input->get_post('cliente')),
                'descripcion' => $this->string->blankToNull($this->input->get_post('descripcion')),
                'prioridad' => $this->string->blankToNull($this->input->get_post('prioridad')),
                'estatus' => $this->string->blankToNull($this->input->get_post('estatus')),
                'progreso' => $this->input->get_post('progreso'),
                'responsable' => $this->string->blankToNull($this->input->get_post('responsable')),
                'fecha_inicio' => $this->string->blankToNull($this->input->get_post('fecha_inicio')),
                'fecha_fin' => $this->string->blankToNull($this->input->get_post('fecha_fin')),
            );
            $where = array('id' => $this->input->get_post('id'));
            $result = $this->tareas_model->actualizarTarea($data,$where);
            if($result){ 
                echo '{"estatus":"success","resultado":"'.$result.'"}';
             }else{
                echo '{"estatus":"fail","msg":"Ocurrio un error al guardar los cambios."}';
             }
        }
    }
    
    public function eliminarTarea(){
        if($this->session->userdata('tipo')!= 2){
            $where = array('id' => $this->input->get_post('id'));
            $result = $this->tareas_model->eliminarTarea($where);
            if($result){ 
                echo '{"estatus":"success","resultado":"'.$result.'"}';
             }else{
                echo '{"estatus":"fail","msg":"Ocurrio un error al eliminar tarea."}';
             }
        }
    }
    
    
    private function listarArchivos($id){     
        return $this->tareas_model->listarArchivos($id);
    }
    
    public function allowFile(){ //PEND condicionar la funcion depende del tipo de usuario
        $id = $this->input->get_post('archivo');
        $result = $this->tareas_model->getArchivo($id);
        if($result){ 
            chmod($result[0]->ruta, 0777);
            echo '{"estatus":"success","ruta":"'.$result[0]->ruta.'","enlace":"'.'/uploads/'.$result[0]->tarea.'/'.$result[0]->nombre.'"}';
           // chmod($result[0]->ruta, 0000);
        }else{
           echo '{"estatus":"fail","msg":"Ocurrio un error inesperado."}';
        }
    }
    
    public function unAllowFile(){
        $ruta = $this->input->get_post('ruta');
        sleep(2);
        if(chmod($ruta, 0000)){ 
            echo '{"estatus":"success"}';
        }else{
           echo '{"estatus":"fail","msg":"Ocurrio un error inesperado."}';
        }
    }

    public function cargarArchivo($tarea) //PEND que el usuario no pueda subir archivos en otras tareas que no le correspondan
    {
        $config['upload_path'] = './uploads/'.$tarea.'/';
        echo './uploads/'.$tarea.'/';
        if(!file_exists('./uploads/'.$tarea.'/')){
            mkdir('./uploads/'.$tarea.'/', 0777);
        }
        $config['allowed_types']        = '*';
        $config['encrypt_name']        = TRUE;         
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('archivo'))
        {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
            return json_encode($error);
        }
        else
        {
            $data = $this->upload->data();
            $archivo = array (
                "tarea" => $tarea,
                "ruta" => $data['full_path'],
                "nombre" => $data['file_name'],
                "nombre_orig" => $data['orig_name'],
                "extension" => $data['file_ext'],
                "fecha" =>  date('Y-m-d H:i:s'),
                "usuario" => $this->session->userdata('uid')
            );
            $result =  $this->tareas_model->cargarArchivo($archivo);
            chmod($data['full_path'], 0000);
            if($result){ 
                echo '{"estatus":"success","resultado":"'.$result.'"}';
             }else{
                echo '{"estatus":"fail","msg":"Ocurrio un error al subir el archivo."}';
             }
            redirect("tarea/index/".$tarea);
        }
    }
}

?>
