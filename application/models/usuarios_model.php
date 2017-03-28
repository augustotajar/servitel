<?php

class Usuarios_model extends CI_Model {

    public function Usuarios_model(){
        parent::__construct();
        date_default_timezone_set("America/Caracas");
        $this->load->database();
        $this->load->library('encrypt');
    }

    public function cargarUsuarios($search,$order,$offset = 0){
        $this->db->select('uid,primer_nombre,segundo_nombre,'
                        . 'primer_apellido,segundo_apellido,tipo,'
                        . 'email,created_at');
        if (!empty ($search)){
            $this->db->like('nombre', $search);
            $this->db->or_like('email', $search);
        }
        $query = $this->db->get('usuarios',25,$offset);
        return array(
            'result' => $query->result()
        );
    }
    
    public function buscarUsuarios($key=""){
        $this->db->select("uid as id,concat_ws((' '),(primer_nombre),(segundo_nombre),(primer_apellido),(segundo_apellido)) as text");
        $this->db->like("concat_ws((' '),(primer_nombre),(segundo_nombre),(primer_apellido),(segundo_apellido)) ",$key);
        $this->db->or_like('email', $key);
        $query = $this->db->get('usuarios');
        return  $query->result(); 
    }
    
    public function cargarUsuario($id){
        $this->db->where('uid',$id);
        $query = $this->db->get('usuarios');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
    public function guardarUsuario($data) {
        $salt = substr(sha1(rand()), 0, 10);
        $pass = $data['encrypted_password'];
        $pass = $this->encrypt->encode(sha1($pass . $salt),$salt);
        $data['encrypted_password'] = $pass;
        $data['salt'] = $salt;
        return $this->db->insert('usuarios', $data);
        //$uid = mysql_insert_id(); // last inserted id
    }
    public function actualizarUsuario($data,$where) {
        if($data['encrypted_password']!= '' && !is_null($data['encrypted_password'])){
            $salt = substr(sha1(rand()), 0, 10);
            $pass = $data['encrypted_password'];
            $pass = $this->encrypt->encode(sha1($pass . $salt),$salt);
            $data['encrypted_password'] = $pass;
            $data['salt'] = $salt;
        }else{
            unset($data['encrypted_password']);
        }
        return $this->db->update('usuarios',$data,$where);
        //$uid = mysql_insert_id(); // last inserted id
    }
    
    public function eliminarUsuario($where){
        return $this->db->delete('usuarios',$where);
    }
    
    public function login($email, $password) {
        $this->db->where('email',$email);
        $query = $this->db->get('usuarios');
        if($query->num_rows() > 0){
            $row = $query->row();
            $encrypted_password = $row->encrypted_password;
            $salt = $row->salt;
            $decrypted_pass = $this->encrypt->decode($encrypted_password,$salt);
            if( $decrypted_pass == sha1($password . $salt)){
                return $row;
            }else {
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }
    
    public function existeUsuario($email) {
        $this->db->where('email',$email);
        $query = $this->db->get('usuarios');
        if($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
}
?>