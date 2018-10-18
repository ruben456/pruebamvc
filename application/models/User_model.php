<?php
class User_model extends CI_model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function getUsuarioNombre($nombre) {
        
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('nombreUsuario',$nombre);
        
        $query=$this->db->get();
        return $query->row_array();
               
    }
    
    public function getUltimoProceso() {
        $last = $this->db->order_by('numeroProceso',"desc")
		->limit(1)
		->get('formulario1')
		->row();
        $array = json_decode(json_encode($last), True);
        return $array['numeroProceso'];
    }
    
    public function setProceso($proceso) {
        $this->db->insert('formulario1', $proceso);
    }
    
    public function getProcesos() {
        $this->db->select('*');
        $this->db->from('formulario1');
        $this->db->order_by("fechaCreacion", "asc");
        $query=$this->db->get();
        return $query->result_array();
    }
    
    public function getProceso($numero) {
        $this->db->select('*');
        $this->db->from('formulario1');
        $this->db->where('numeroProceso',$numero);
        
        $query=$this->db->get();
        return $query->row_array();
    }
}
