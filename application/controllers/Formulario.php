<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('User_model');
    }
    
    public function index() {
        $this->load->view('plantillas/header');
        $this->load->view('formulario/index');
        $this->load->view('plantillas/footer');
    }
    
    public function crear() {
        $this->session->unset_userdata('consecutivo');
        $ultimo = $this->User_model->getUltimoProceso();

        if($ultimo != NULL){
            $consecutivo = intval($ultimo);
            $consecutivo++;
            $this->session->set_userdata('consecutivo', $consecutivo);
        }else{
            $this->session->set_userdata('consecutivo', '1');
        }
       
        $this->load->view('plantillas/header');
        $this->load->view('formulario/formulario');
        $this->load->view('plantillas/footer');
    }
    
    public function guardar() {
        $proceso['numeroProceso'] = $this->session->userdata('consecutivo');
        $proceso['descripcion'] = $this->input->post('descp');
        date_default_timezone_set('America/Bogota');
        $hoy = getdate();
        $proceso['fechaCreacion'] = $hoy['year']."/".$hoy['mon']."/".$hoy['mday']." ".$hoy['hours'].":".$hoy['minutes'].":".$hoy['seconds'];
        $proceso['sede'] = $this->input->post('sede');
        $presupuesto = $this->input->post('presu');
        $presupuesto = str_replace(".", "", $presupuesto);
        $presupuesto = str_replace(",", ".", $presupuesto);
        $proceso['presupuesto'] = floatval($presupuesto);
        
        $this->User_model->setProceso($proceso);
        $this->session->unset_userdata('consecutivo');
        
        redirect('/Formulario', 'refresh');
    }
    
    public function listar() {
        $data['procesos'] = $this->User_model->getProcesos();
        $this->load->view('plantillas/header');
        $this->load->view('formulario/listado',$data);
        $this->load->view('plantillas/footer');
    }
    
    public function detalle($numero){
        $data = $this->User_model->getProceso($numero);
        
        $this->load->view('plantillas/header');
        $this->load->view('formulario/detalle',$data);
        $this->load->view('plantillas/footer');
    }
}

