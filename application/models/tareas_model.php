<?php

class Tareas_model extends CI_Model {

    public function Tareas_model(){
        parent::__construct();
        date_default_timezone_set("America/Caracas");
        $this->load->database();
    }

    public function guardarTarea($data){
        return $this->db->insert('tareas', $data);  
    }

    public function actualizarTarea($data,$where){
        $this->db->where($where);
        return $this->db->update('tareas', $data);
    }
    
    public function eliminarTarea($where){
        return $this->db->delete('tareas',$where);
    }
    
    public function cargarTareas($filtro,$search,$order,$offset=0){
        $this->db->select('tareas.id as id,clientes.id as cid,nombre,titulo,cliente,descripcion,prioridad,'
                . 'estatus,progreso,responsable,fecha_inicio,fecha_fin,'
                . 'uid,primer_nombre,primer_apellido');
        $this->db->join('usuarios','tareas.responsable = usuarios.uid');
        $this->db->join('clientes','tareas.cliente = clientes.id');
        $this->db->where($filtro);
        if (!empty ($search)){
            $this->db->like('cliente', $search);
            $this->db->or_like('responsable', $search);
        }
        $this->db->order_by($order);
        $query = $this->db->get('tareas',30,$offset);

        return array(
            'count' => $query->num_rows(),
            'result' => $query->result()
        );
    }
    
    public function cargarTarea($id){
        
        $this->db->select('tareas.id as id,clientes.id as cid,titulo,cliente,nombre,descripcion,prioridad,'
                . 'estatus,progreso,responsable,fecha_inicio,fecha_fin,'
                . 'uid,primer_nombre,primer_apellido');
        $this->db->join('usuarios','tareas.responsable = usuarios.uid');
        $this->db->join('clientes','tareas.cliente = clientes.id');
        $this->db->where('tareas.id', $id);
        $query = $this->db->get('tareas');
        return $query->result();
    }
    
     public function cargarArchivo($data){
        return $this->db->insert('archivos', $data);  
    }
    
    public function listarArchivos($tarea){
        $this->db->select('archivos.id as id,archivos.fecha as fecha,'
                . 'archivos.nombre_orig as nombre_orig,archivos.extension as extension,'
                . 'primer_nombre,primer_apellido');
        $this->db->join('usuarios','archivos.usuario = usuarios.uid');
        $this->db->where('archivos.tarea', $tarea);
        $this->db->order_by('fecha');
        $query = $this->db->get('archivos');
        $result = $query->result();
      //  echo var_dump($result);
        return  $result;
    }
    
    public function getArchivo($id){
        $this->db->join('usuarios','archivos.usuario = usuarios.uid');
        $this->db->where('archivos.id', $id);
        $query = $this->db->get('archivos');
        $result = $query->result();
       // echo var_dump($result);
        return  $result;
    }
    
}
?>
