<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->library('encryption');
    }
        
    public function index()
    {
        $this->session->sess_destroy();
        $this->load->view('login/login');
    }
        
    public function login() {
        $usuario=array(
                'nombre'=>$this->input->post('usuario'),
                'clave'=>$this->input->post('clave')
        );
        
        $user_data = $this->User_model->getUsuarioNombre($usuario['nombre']);
        $claveUsuario = $this->encryption->decrypt($user_data['clave']);
              
        if($user_data != NULL && $usuario['clave'] == $claveUsuario){
            $this->session->set_userdata('ID',$user_data['ID']);
            $this->session->set_userdata('estado',$user_data['estado']);
            redirect('/Formulario/index', 'refresh');
            echo('valido');
        }else{
            redirect('/login', 'refresh');
        }
        
    }

    public function salir(){
        $this->session->sess_destroy();
        redirect('', 'refresh');
    }
}
