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
        $nentregable    = '';
        $j=0;
        foreach ($variable1[0] as $value) {
            foreach ($value as $key) {
                if ($j == 0) {
                    $nentregable= $key['nentregable'];
                    $preoferta  = $key['preoferta'];
                    $entregable = $key['entregable'];
                    $cliente    = $key['cliente'];
                    $campana    = $key['campana'];
                    $j++;
                } else {
                    switch ($key['tipo']) {
                        case 'M':
                            $materiales .= '<tr>
                                                <td>'.$key['codsap'].'</td>
                                                <td>'.$key['nombre'].'</td>
                                                <td>'.$key['detalle'].'</td>
                                                <td>'.$key['valor'].'</td>
                                                <td>'.$key['cantidad'].'</td>
                                                <td>'.$key['consumo'].'</td>
                                                <td>'.$key['unidad'].'</td>
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
                                                <td>'.$key['consumo'].'</td>
                                                <td>'.$key['total'].'</td>
                                            </tr>';
                            break;
                        case 'A':
                            $amanecida .= '<tr>
                                               <td>'.$key['codsap'].'</td>
                                               <td>'.$key['nombre'].'</td>
                                               <td>'.$key['personal'].'</td>
                                               <td>'.$key['numero'].'</td>
                                           </tr>';
                            break;
                        case 'G':
                            $gastos .= '<tr>
                                            <td>'.$key['codsap'].'</td>
                                            <td>'.$key['nombre'].'</td>
                                            <td>'.$key['detalle'].'</td>
                                            <td>'.$key['unitario'].'</td>
                                            <td>'.$key['cantidad'].'</td>
                                            <td>'.$key['total'].'</td>
                                        </tr>';
                            break;
                        case 'D':
                            $sinComprobante .= '<tr>
                                                    <td>'.$key['nombre'].'</td>
                                                    <td>'.$key['total'].'</td>
                                                </tr>';
                            break;
                        case 'O':
                            $overtimes .= '<tr>
                                               <td>'.$key['codsap'].'</td>
                                               <td>'.$key['nombre'].'</td>
                                               <td>'.$key['personal'].'</td>
                                               <td>'.$key['horas'].'</td>
                                               <td>'.$key['inicio'].' - '.$key['fin'].'</td>
                                           </tr>';
                            break;
                        case 'P':
                            $personal .= '<tr>
                                              <td>'.$key['codsap'].'</td>
                                              <td>'.$key['nombre'].'</td>
                                              <td>'.$key['responsable'].'</td>
                                              <td>'.$key['horas'].'</td>
                                          </tr>';
                            break;
                        case 'R':
                            $proveedores .= '<tr>
                                                 <td>'.$key['codproveedor'].'</td>
                                                 <td>'.$key['nombre'].'</td>
                                                 <td>'.$key['cantidad'].'</td>
                                                 <td>'.$key['soles'].'</td>
                                                 <td>'.$key['dolares'].'</td>
                                             </tr>';
                            break;
                        case 'S':
                            $sustrato .= '<tr>
                                              <td>'.$key['codsap'].'</td>
                                              <td>'.$key['nombre'].'</td>
                                              <td>'.$key['cantidad'].'</td>
                                          </tr>';
                            break;
                    }
                }
            }
        }
        $data['amanecida']      = $amanecida;
        $data['gastos']         = $gastos;
        $data['sinComprobante'] = $sinComprobante;
        $data['materiales']     = $materiales;
        $data['ferreteria']     = $ferreteria;
        $data['overtimes']      = $overtimes;
        $data['personal']       = $personal;
        $data['proveedores']    = $proveedores;
        $data['sustrato']       = $sustrato;

        $data ['nentregable']   = $nentregable;
        $data ['preoferta']     = $preoferta;
        $data ['entregable']    = $entregable;
        $data ['cliente']       = $cliente;
        $data ['campana']       = $campana;
		$this->load->view('v_ficha_taller', $data);
	}
}