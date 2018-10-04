<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Ficha extends CI_Controller {
	
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
        $variable1 = '[[[{"nombre":"Sumistros","codigo":"","area":0.00,"unidades":0.00,"longitud":0.00,"tiempo":0.00},{"nombre":"Sumistros","codigo":"IMASUST00006","area":30.00,"unidades":5.00,"longitud":0.00,"tiempo":0.00},{"nombre":"Sumistros","codigo":"IMASUST00010","area":80.00,"unidades":30.00,"longitud":0.00,"tiempo":0.00},{"nombre":"Sumistros","codigo":"IMASUST00015","area":20.00,"unidades":30.00,"longitud":0.00,"tiempo":0.00}],[{"nombre":"Acabados","codigo":"","area":0.00,"unidades":0.00,"longitud":0.00,"tiempo":0.00},{"nombre":"Acabados","codigo":"IMACABA00002","area":30.00,"unidades":10.00,"longitud":20.00,"tiempo":12.00},{"nombre":"Acabados","codigo":"IMACABA00003","area":30.00,"unidades":20.00,"longitud":80.00,"tiempo":82.00},{"nombre":"Acabados","codigo":"IMACABA00004","area":30.00,"unidades":10.00,"longitud":5.00,"tiempo":10.00},{"nombre":"Acabados","codigo":"IMACABA00005","area":30.00,"unidades":20.00,"longitud":10.00,"tiempo":40.00}],[{"nombre":"Impresoras","codigo":"IMAIMPR00008","area":30.00,"unidades":20.00,"longitud":0.00,"tiempo":0.00},{"nombre":"Impresoras","codigo":"IMAIMPR00009","area":30.00,"unidades":10.00,"longitud":0.00,"tiempo":0.00},{"nombre":"Impresoras","codigo":"IMAIMPR00011","area":30.00,"unidades":10.00,"longitud":0.00,"tiempo":0.00}],[{"nombre":"Materiales","codigo":"OUTCDIR00001","cantidad":50.00,"total":54.00},{"nombre":"Materiales","codigo":"OUTCDIR00002","cantidad":80.00,"total":12.00}],[{"nombre":"Personal","codigo":"OUTCDIR00008","cantidad":300.00,"importe":24000.00},{"nombre":"Personal","codigo":"OUTCDIR00009","cantidad":110.00,"importe":10400.00}],[{"nombre":"Proveedores","codigo":"OUTARQU00002","cantidad":90.00,"soles":30.00,"dolares":80.00},{"nombre":"Proveedores","codigo":"OUTARQU00005","cantidad":80.00,"soles":30.00,"dolares":20.00},{"nombre":"Proveedores","codigo":"OUTCDIR00002","cantidad":30.00,"soles":80.00,"dolares":0.00}],[{"nombre":"Recursos","codigo":"IMAPROD00003","cantidad":30.00,"horas":3.00},{"nombre":"Recursos","codigo":"IMATALL00001","cantidad":50.00,"horas":20.00}]],[[{"nombre":"Amanecidas","codsap":"IMATALL00001","numero":2}],[{"nombre":"Materiales","codsap":"OUTCDIR00005","valor":800.00,"cantidad":1.00,"consumo":90.00,"total":720.00}],[{"nombre":"Gastos","codsap":"OUTCDIR00007","unitario":60.00,"cantidad":10.00,"total":600.00}],[{"nombre1":"Gastos sin Declarar","nombre":"pruba","total":90.00}],[{"nombre":"Materiales","codsap":"OUTCDIR00002","valor":30.00,"cantidad":50.00,"consumo":30.00,"total":9.00}],[{"nombre":"Overtimes","codsap":"IMATALL00003","horas":30.00}],[{"nombre":"Personal","codsap":"IMATALL00001","horas":30.00}],[{"nombre":"Proveedores","codsap":"","cantidad":0.00,"soles":0.00,"dolares":0.00}],[{"nombre":"Sustratos","codsap":"IMASUST00010","cantidad":90.00}]]]'; //$_POST['nombreVariable'];
        $variable2 = json_decode($variable1);
        $suministros = '';
        $acabados    = '';
        $impresoras  = '';
        $materiales  = '';
        $personal    = '';
        $proveedores = '';
        $recursos    = '';
        foreach ($variable2[0] as $key) {
            foreach ($key as $value) {
                if($value->nombre == 'Sumistros'){  
                    $suministros .= '<tr>
                                         <td>'.$value->codigo.'</td>
                                         <td>'.$value->unidades.'</td>
                                         <td>'.$value->longitud.'</td>
                                         <td>'.$value->tiempo.'</td>
                                         <td>'.$value->area.'</td>
                                     </tr>';
                } else if ($value->nombre == 'Acabados') {
                    $acabados .= '<tr>
                                     <td>'.$value->codigo.'</td>
                                     <td>'.$value->unidades.'</td>
                                     <td>'.$value->longitud.'</td>
                                     <td>'.$value->tiempo.'</td>
                                     <td>'.$value->area.'</td>
                                  </tr>';
                } else if ($value->nombre == 'Impresoras') {
                    $impresoras .= '<tr>
                                        <td>'.$value->codigo.'</td>
                                        <td>'.$value->unidades.'</td>
                                        <td>'.$value->longitud.'</td>
                                        <td>'.$value->tiempo.'</td>
                                        <td>'.$value->area.'</td>
                                    </tr>';
                } else if ($value->nombre == 'Materiales') {
                    $materiales .= '<tr>
                                      <td>'.$value->codigo.'</td>
                                      <td>'.$value->cantidad.'</td>
                                      <td>'.$value->total.'</td>
                                  </tr>';
                } else if ($value->nombre == 'Personal') {
                    $personal .= '<tr>
                                      <td>'.$value->codigo.'</td>
                                      <td>'.$value->cantidad.'</td>
                                      <td>'.$value->importe.'</td>
                                  </tr>';
                } else if ($value->nombre == 'Proveedores') {
                    $proveedores .= '<tr>
                                         <td>'.$value->codigo.'</td>
                                         <td>'.$value->cantidad.'</td>
                                         <td>'.$value->soles.'</td>
                                         <td>'.$value->dolares.'</td>
                                     </tr>';
                }else if ($value->nombre == 'Recursos') {
                    $recursos .= '<tr>
                                      <td>'.$value->codigo.'</td>
                                      <td>'.$value->cantidad.'</td>
                                      <td>'.$value->horas.'</td>
                                  </tr>';
                }
            }
        }
        $data['suministros'] = $suministros;
        $data['acabados']    = $acabados;
        $data['impresoras']  = $impresoras;
        $data['materiales']  = $materiales;
        $data['personal']    = $personal;
        $data['proveedores'] = $proveedores;
        $data['recursos']    = $recursos;
		$this->load->view('v_ficha_taller', $data);
	}

    function muestraDatos() {
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
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