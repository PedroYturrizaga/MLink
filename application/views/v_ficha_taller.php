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
                        <strong>1882018236</strong>
                    </div>
                    <div class="js-flex__right">
                        <h2>ORDEN DE IMPRESI&Oacute;N IMAGENTI (OPI)</h2>
                        <p>ENTREGABLE: COLUMNA impresi&oacute;N panel ranurado - RIPLEY MEGAPLAZA</p>
                        <p>CLIENTE: HP INC PERU</p>
                        <p>CAMPA&Ntilde;A: COLUMNA RIPLEY MEGAPLAZA</p>
                    </div>
                </div>
                <ul class="nav nav-tabs js-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#materiales" aria-controls="materiales" role="tab" data-toggle="tab"><span>1</span><span>MATERIALES</span></a></li>
                    <li><a href="#ferreteria" aria-controls="ferreteria" role="tab" data-toggle="tab"><span>2</span><span>MAT. FERRETERIA</span></a></li>
                    <li><a href="#proveedores" aria-controls="proveedores" role="tab" data-toggle="tab"><span>3</span><span>PROVEEDORES</span></a></li>
                    <li><a href="#gastos" aria-controls="gastos" role="tab" data-toggle="tab"><span>4</span><span>GASTOS LIMA/PROV</span></a></li>
                    <li><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab"><span>5</span><span>PERSONAL LIMA/PROV</span></a></li>
                    <li><a href="#horario" aria-controls="horario" role="tab" data-toggle="tab"><span>6</span><span>HORARIOS</span></a></li>
                    <li><a href="#turno" aria-controls="recursos" role="tab" data-toggle="tab"><span>7</span><span>TURNO</span></a></li>
                    <li><a href="#adicional" aria-controls="recursos" role="tab" data-toggle="tab"><span>8</span><span>ADICIONAL</span></a></li>
                    <li><a href="#recursos" aria-controls="recursos" role="tab" data-toggle="tab"><span>9</span><span>RECURSOS</span></a></li>
                </ul>
                <div class="tab-content js-panel">
                    <div role="tabpanel" class="tab-pane active" id="materiales">
                        <div class="table-responsive">
                            <table class="table" id="tbSustratos">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>UNIDADES</th>
                                        <th>LONGITUD</th>
                                        <th>TIEMPO</th>
                                        <th>ÁREA</th>
                                    </tr>
                                </thead>
                                <tbody id="bodySustratos">
                                    <?php echo $suministros?>
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
                                        <th>UNIDADES</th>
                                        <th>LONGITUD</th>
                                        <th>TIEMPO</th>
                                        <th>ÁREA</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyFerreteria">
                                    <?php echo $acabados?>
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
                                        <th>UNIDADES</th>
                                        <th>LONGITUD</th>
                                        <th>TIEMPO</th>
                                        <th>ÁREA</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyProveedores">
                                    <?php echo $impresoras?>
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
                                        <th>CANTIDAD</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyGastos">
                                    <?php echo $materiales?>
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
                                        <th>CANTIDAD</th>
                                        <th>SOLES</th>
                                        <th>DÓLATES</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyPersonal">
                                    <?php echo $proveedores?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="horario">
                        <div class="table-responsive">
                            <table class="table" id="tbHorario">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>CANTIDAD</th>
                                        <th>IMPORTE</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyHorario">
                                    <?php echo $personal?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="turno">
                        <div class="table-responsive">
                            <table class="table" id="tbTurno">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>CANTIDAD</th>
                                        <th>HORAS</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyTurno">
                                    <?php echo $recursos?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="adicional">
                        <div class="table-responsive">
                            <table class="table" id="tbAdicional">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>CANTIDAD</th>
                                        <th>HORAS</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyAdicional">
                                    <?php echo $recursos?>
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