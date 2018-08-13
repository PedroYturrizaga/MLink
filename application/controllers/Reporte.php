<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Reporte extends CI_Controller {
	
    function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('M_Reporte');
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
	}

	public function index() {
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('Id_user');
		$this->load->view('v_reporte');
	}

	function ingresar() {
		$data['error'] = EXIT_ERROR;
        $data['msj']   = null;
         try {
            $usuario  = $this->input->post('usuario');
            $password = $this->input->post('password');
            $username = $this->M_Reporte->verificaUsuario($usuario);
            if(count($username) != 0){
                if(strtolower($username[0]->usuario) == strtolower($usuario)){
                    if($password == $username[0]->pass){
                        $session = array('usuario' => $usuario,  
                                         'Id_user' => $username[0]->id_vendedor,
                                         'id_rol'  => $username[0]->id_rol,
                                         'pais'    => $username[0]->pais);
                        $this->session->set_userdata($session);
                        $data['rol'] = $username[0]->id_rol;
                        $data['error'] = EXIT_SUCCESS;
                    }else {
                        $data['pass'] = 'Contraseña incorrecta';
                    }
                }
            }
        }catch(Exception $e) {
           $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}

	function cerrarCesion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $this->session->unset_userdata('usuario');
            $this->session->unset_userdata('Id_user');
            $this->session->unset_userdata('id_rol');
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}