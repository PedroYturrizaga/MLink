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
        $url = 'http://192.168.200.93/controladores/ImagentiFicha/1';
        $json = file_get_contents($url);
        $variable1 = json_decode($json, true);

        $amanecida      = '';
        $gastos         = '';
        $sinComprobante = '';
        $materiales     = '';
        $ferreteria     = '';
        $overtimes      = '';
        $personal       = '';
        $proveedores    = '';
        $sustrato       = '';

        $preoferta      = '';
        $entregable     = '';
        $cliente        = '';
        $campana        = '';
        $j=0;
        foreach ($variable1[0] as $value) {
            foreach ($value as $key) {
                if ($j == 0) {
                    $preoferta  = $key['preoferta'];
                    $entregable = $key['entregable'];
                    $cliente    = $key['cliente'];
                    $campana    = $key['campana'];
                    $j++;
                } else {
A = Amanecida
G =  Gastos
D =   Gastos sin comprobante
O =  Overtimes
P  = Personal
R =  Proveedores
S = Sustrato
                    print_r($key);
                    switch ($key['tipo']) {
                        case 'M':
                            $materiales .= '<tr>
                                                <td>'.$key['codsap'].'</td>
                                                <td>'.$key['nombre'].'</td>
                                                <td>'.$key['detalle'].'</td>
                                                <td>'.$key['valor'].'</td>
                                                <td>'.$key['unidad'].'</td>
                                                <td>'.$key['cantidad'].'</td>
                                                <td>'.$key['total'].'</td>
                                            </tr>';
                            break;
                        case 'F':
                            $ferreteria .= '<tr>
                                                <td>'.$key['codsap'].'</td>
                                                <td>'.$key['nombre'].'</td>
                                                <td>'.$key['detalle'].'</td>
                                                <td>'.$key['unidad'].'</td>
                                                <td>'.$key['cantidad'].'</td>
                                                <td>'.$key['total'].'</td>
                                            </tr>';
                            break;
                        case 'I':
                            $impresoras .= '<tr>
                                                <td>'.$key['codsap'].'</td>
                                                <td>'.$key['unidades'].'</td>
                                                <td>'.$key['longitud'].'</td>
                                                <td>'.$key['tiempo'].'</td>
                                                <td>'.$key['area'].'</td>
                                            </tr>';
                            break;
                        case 'M':
                            $suministros .= '<tr>
                                              <td>'.$key['codsap'].'</td>
                                              <td>'.$key['cantidad'].'</td>
                                              <td>'.$key['total'].'</td>
                                          </tr>';
                            break;
                        case 'M':
                            $materiales .= '<tr>
                                                <td>'.$key['codsap'].'</td>
                                                <td>'.$key['nombre'].'</td>
                                                <td>'.$key['detalle'].'</td>
                                                <td>'.$key['valor'].'</td>
                                                <td>'.$key['unidad'].'</td>
                                                <td>'.$key['cantidad'].'</td>
                                                <td>'.$key['total'].'</td>
                                            </tr>';
                            break;
                        case 'F':
                            $ferreteria .= '<tr>
                                                <td>'.$key['codsap'].'</td>
                                                <td>'.$key['nombre'].'</td>
                                                <td>'.$key['detalle'].'</td>
                                                <td>'.$key['unidad'].'</td>
                                                <td>'.$key['cantidad'].'</td>
                                                <td>'.$key['total'].'</td>
                                            </tr>';
                            break;
                        case 'I':
                            $impresoras .= '<tr>
                                                <td>'.$key['codsap'].'</td>
                                                <td>'.$key['unidades'].'</td>
                                                <td>'.$key['longitud'].'</td>
                                                <td>'.$key['tiempo'].'</td>
                                                <td>'.$key['area'].'</td>
                                            </tr>';
                            break;
                        case 'M':
                            $suministros .= '<tr>
                                              <td>'.$key['codsap'].'</td>
                                              <td>'.$key['cantidad'].'</td>
                                              <td>'.$key['total'].'</td>
                                          </tr>';
                            break;
                    }
                }
            }
        }
        $data['materiales']  = $materiales;
        $data['ferreteria']  = $ferreteria;

        $data['suministros'] = $suministros;
        $data['acabados']    = $acabados;
        $data['impresoras']  = $impresoras;
        $data['personal']    = $personal;
        $data['proveedores'] = $proveedores;
        $data['recursos']    = $recursos;

        $data ['preoferta']  = $preoferta;
        $data ['entregable'] = $entregable;
        $data ['cliente']    = $cliente;
        $data ['campana']    = $campana;
		$this->load->view('v_ficha_taller', $data);
	}
}