<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Opi extends CI_Controller {
	
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
        $url = 'http://192.168.200.93/controladores/ImagentiOPI/1';
        $json = file_get_contents($url);
        $variable2 = json_decode($json, true);
        $sustrato   = '';
        $acabado    = '';
        $impresoras = '';
        $materiales = '';
        $personal   = '';
        $proveedores= '';
        $recursos   = '';

        $preoferta   = '';
        $entregable  = '';
        $cliente     = '';
        $campana     = '';
        $nentregable = '';
        $j = 0;
        foreach ($variable2[0] as $value) {
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
                        case 'S':
                            $sustrato .= '<tr>
                                             <td>'.$key['codsap'].'</td>
                                             <td>'.$key['nombre'].'</td>
                                             <td>'.$key['unidades'].'</td>
                                             <td>'.$key['longitud'].'</td>
                                             <td>'.$key['medida'].'</td>
                                             <td>'.$key['area'].'</td>
                                         </tr>';
                            break;
                        case 'A':
                            $acabado .= '<tr>
                                             <td>'.$key['codsap'].'</td>
                                             <td>'.$key['nombre'].'</td>
                                             <td>'.$key['unidades'].'</td>
                                             <td>'.$key['longitud'].'</td>
                                             <td>'.$key['medida'].'</td>
                                             <td>'.$key['area'].'</td>
                                         </tr>';
                            break;
                        case 'I':
                            $impresoras .= '<tr>
                                                <td>'.$key['codsap'].'</td>
                                                <td>'.$key['nombre'].'</td>
                                                <td>'.$key['unidades'].'</td>
                                                <td>'.$key['medida'].'</td>
                                            </tr>';
                            break;
                        case 'M':
                            $materiales .= '<tr>
                                                <td>'.$key['codsap'].'</td>
                                                <td>'.$key['nombre'].'</td>
                                                <td>'.$key['detallar'].'</td>
                                                <td>'.$key['cantidad'].'</td>
                                                <td>'.$key['consumo'].'</td>
                                                <td>'.$key['total'].'</td>
                                            </tr>';
                            break;
                        case 'P':
                            $personal .= '<tr>
                                              <td>'.$key['codsap'].'</td>
                                              <td>'.$key['nombre'].'</td>
                                              <td>'.$key['detalle'].'</td>
                                              <td>'.$key['unitario'].'</td>
                                              <td>'.$key['cantidad'].'</td>
                                              <td>'.$key['importe'].'</td>
                                          </tr>';
                            break;
                        case 'V':
                            $proveedores .= '<tr>
                                                 <td>'.$key['codsap'].'</td>
                                                 <td>'.$key['nombre'].'</td>
                                                 <td>'.$key['cantidad'].'</td>
                                                 <td>'.$key['soles'].'</td>
                                                 <td>'.$key['dolares'].'</td>
                                             </tr>';
                            break;
                        case 'R':
                            $recursos .= '<tr>
                                              <td>'.$key['codsap'].'</td>
                                              <td>'.$key['nombre'].'</td>
                                              <td>'.$key['cantidad'].'</td>
                                              <td>'.$key['personas'].'</td>
                                              <td>'.$key['horas'].'</td>
                                              <td>'.$key['tarea'].'</td>
                                          </tr>';
                            break;
                    }
                }
            }
        }
        $data['sustrato']    = $sustrato;
        $data['acabado']     = $acabado;
        $data['impresoras']  = $impresoras;
        $data['materiales']  = $materiales;
        $data['personal']    = $personal;
        $data['proveedores'] = $proveedores;
        $data['recursos']    = $recursos;
        
        $data ['nentregable']= $nentregable;
        $data ['preoferta']  = $preoferta;
        $data ['entregable'] = $entregable;
        $data ['cliente']    = $cliente;
        $data ['campana']    = $campana;
		$this->load->view('v_opi', $data);
	}
}