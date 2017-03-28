<?php

class Clientes_model extends CI_Model {

    public function Clientes_model(){
        parent::__construct();
        date_default_timezone_set("America/Caracas");
        $this->load->database();
        $this->load->library('encrypt');
    }

    public function cargarClientes($search,$order,$offset = 0){
        if (!empty ($search)){
            $this->db->like('nombre', $search);
            $this->db->or_like('email', $search);
        }
        $query = $this->db->get('clientes',25,$offset);
        return array(
            'result' => $query->result()
        );
    }
    
    public function buscarClientes($key=""){
        $this->db->select("id,nombre as text");
        $this->db->like("nombre",$key);
        $this->db->or_like('rif', $key);
        $this->db->or_like('email', $key);
        $query = $this->db->get('clientes');
        return  $query->result(); 
    }
    
    public function cargarCliente($id){
        $this->db->where('id',$id);
        $query = $this->db->get('clientes');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
    public function guardarCliente($data) {
        $this->db->insert('clientes', $data);
        return $this->db->insert_id();
    }
    public function actualizarCliente($data,$where) {
        return $this->db->update('clientes',$data,$where);
    }
    
    public function eliminarCliente($where){
        return $this->db->delete('clientes',$where);
    }
        
    public function existeCliente($email) {
        $this->db->where('email',$email);
        $query = $this->db->get('clientes');
        if($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
}
?>