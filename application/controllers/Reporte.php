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

    function muestraDatos() {
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $variable1 = $_POST['nombreVariable'];
            $variable2 = json_decode($variable1);
            // $variable1 = $_POST['nombreVariable'];
            // $variable1 = $_POST['nombreVariable'];
            // $variable1 = $_POST['nombreVariable'];
        }
        catch (Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}