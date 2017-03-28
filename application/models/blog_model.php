<?php

class Blog_model extends CI_Model {

    public function Login_model(){
        parent::__construct();
        $this->load->database();
    }

    function publicar($titulo,$texto,$fecha){
        $data = array(
        'titulo' => $titulo ,
        'contenido' => $texto ,
        'fecha_creacion' => $fecha
        );
        $this->db->insert('noticias', $data);
        return TRUE;
    }
    
    function get_noticias(){
        $this->db->order_by("fecha_creacion", "desc"); 
        $query = $this->db->get('noticias');
	return $query->result_array();
    }    
    
    function get_ultimas_noticias(){
        $this->db->order_by("fecha_creacion", "desc"); 
        $query = $this->db->get('noticias',3);
	return $query->result_array();
    }    
    
    function get_post($id){
        $this->db->where("id",$id); 
        $query = $this->db->get('noticias');
	return $query->row_array();
    } 
    
    function eliminar_post($id){
        $this->db->where("id",$id); 
        $this->db->delete('noticias');
    } 
}
?>