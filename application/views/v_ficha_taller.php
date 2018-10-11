<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="MLink">
        <meta name="keywords"               content="MLink">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="Agosto 13, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#000000">
    	<title>M-link - FICHA</title>
    	<link rel="shortcut icon" href="<?php echo RUTA_IMG?>favicon.png">
    	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>opensans.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <section id="principal" class="js-section">
            <div class="js-container">
                <div class="js-logo text-right">
                    <img src="<?php echo RUTA_IMG?>logo-imagenti.png">
                </div>
                <div class="js-flex">
                    <div class="js-flex__left">
                        <strong><?php echo $preoferta ?></strong>
                    </div>
                    <div class="js-flex__right">
                        <h2><?php echo $nentregable?></h2>
                        <p>ENTREGABLE: <?php echo $entregable ?> </p>
                        <p>CLIENTE: <?php echo $cliente ?> </p>
                        <p>CAMPA&Ntilde;A: <?php echo $campana ?> </p>
                    </div>
                </div>
                <ul class="nav nav-tabs js-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#amanecida" aria-controls="amanecida" role="tab" data-toggle="tab"><span>1</span><span>AMANECIDAS</span></a></li>
                    <li><a href="#gastos" aria-controls="gastos" role="tab" data-toggle="tab"><span>2</span><span>GASTOS</span></a></li>
                    <li><a href="#sinComprobante" aria-controls="sinComprobante" role="tab" data-toggle="tab"><span>3</span><span>GASTOS SIN COMPROB.</span></a></li>
                    <li><a href="#materiales" aria-controls="materiales" role="tab" data-toggle="tab"><span>4</span><span>MATERIALES</span></a></li>
                    <li><a href="#ferreteria" aria-controls="ferreteria" role="tab" data-toggle="tab"><span>5</span><span>MAT. FERRETERIA</span></a></li>
                    <li><a href="#overtimes" aria-controls="overtimes" role="tab" data-toggle="tab"><span>6</span><span>OVERTIMES</span></a></li>
                    <li><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab"><span>7</span><span>PERSONAL</span></a></li>
                    <li><a href="#proveedores" aria-controls="proveedores" role="tab" data-toggle="tab"><span>8</span><span>PROVEEDORES</span></a></li>
                    <li><a href="#sustrato" aria-controls="sustrato" role="tab" data-toggle="tab"><span>9</span><span>SUSTRATOS</span></a></li>
                </ul>
                <div class="tab-content js-panel">
                    <div role="tabpanel" class="tab-pane active" id="amanecida">
                        <div class="table-responsive">
                            <table class="table" id="tbAmanecida">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>SUSTRATO</th>
                                        <th>DETALLE</th>
                                        <th>VALOR</th>
                                        <th>UNIDAD</th>
                                        <th>CANTIDAD</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyAmanecida">
                                    <?php echo $amanecida?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="gastos">
                        <div class="table-responsive">
                            <table class="table" id="tbGastos">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>SUSTRATO</th>
                                        <th>DETALLE</th>
                                        <th>UNIDAD</th>
                                        <th>CANTIDAD</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyGastos">
                                    <?php echo $gastos?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="sinComprobante">
                        <div class="table-responsive">
                            <table class="table" id="tbSinComprobante">
                                <thead>
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody id="bodySinComprobante">
                                    <?php echo $sinComprobante?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="materiales">
                        <div class="table-responsive">
                            <table class="table" id="tbMateriales">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>NOMBRE</th>
                                        <th>DETALLE</th>
                                        <th>VALOR</th>
                                        <th>CANTIDAD</th>
                                        <th>CONSUMO</th>
                                        <th>UNIDAD</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyMateriales">
                                    <?php echo $materiales?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ferreteria">
                        <div class="table-responsive">
                            <table class="table" id="tbFerreteria">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>NOMBRE</th>
                                        <th>DETALLE</th>
                                        <th>UNIDAD</th>
                                        <th>CANTIDAD</th>
                                        <th>CONSUMO</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyFerreteria">
                                    <?php echo $ferreteria?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="overtimes">
                        <div class="table-responsive">
                            <table class="table" id="tbOvertimes">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>CANTIDAD</th>
                                        <th>IMPORTE</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyOvertimes">
                                    <?php echo $overtimes?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="personal">
                        <div class="table-responsive">
                            <table class="table" id="tbPersonal">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>NOMBRE</th>
                                        <th>RESPONSABLE</th>
                                        <th>HORAS</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyPersonal">
                                    <?php echo $personal?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="proveedores">
                        <div class="table-responsive">
                            <table class="table" id="tbProveedores">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>NOMBRE</th>
                                        <th>CANTIDAD</th>
                                        <th>SOLES</th>
                                        <th>DOLARES</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyProveedores">
                                    <?php echo $proveedores?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="sustrato">
                        <div class="table-responsive">
                            <table class="table" id="tbSustrato">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>NOMBRE</th>
                                        <th>CANTIDAD</th>
                                    </tr>
                                </thead>
                                <tbody id="bodySustrato">
                                    <?php echo $sustrato?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script> 
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>reporte.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
        </script>
    </body>
</html>