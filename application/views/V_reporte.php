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
    	<title>M-lini - OPI</title>
    	<link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <div class="col-md-12" style="padding-top: 2%">
            <div class="col-md-6 text-left">
                <p>AREA DE IMPRESION Y ACABADOS</p>
                <p>Jueves 8 de Agosto</p>
            </div>
            <div class="col-md-6 text-right">
                <p>IMAGENTI</p>
            </div>
        </div>
        <div class="col-md-12" style="padding-top: 2%">
            <div class="col-md-6 text-left">
                <h6>1882018236</h6>
            </div>
            <div class="col-md-6 text-right">
                <h6>Reporte de Liquidación</h6>
            </div>
        </div>
        <div class="row-fluid col-md-12" style="background: #d6d5d5">
            <h4> COLUMNA impresión panel ranurado - RIPLEY MEGAPLAZA </h4>
        </div>
        <div class="col-md-12" style="padding-top: 15px">
            <div class="tab" >
                <button class="tablinks" onclick="openTab(event, 'Sustratos')" >Sustratos</button>
                <button class="tablinks" onclick="openTab(event, 'Acabados')" >Acabados</button>
                <button class="tablinks" onclick="openTab(event, 'Impresoras')" >Impresoras</button>
                <button class="tablinks" onclick="openTab(event, 'Materiales')" >Materiales</button>
                <button class="tablinks" onclick="openTab(event, 'Proveedores')" >Proveedores</button>
                <button class="tablinks" onclick="openTab(event, 'Personales')" >Personales</button>
                <button class="tablinks" onclick="openTab(event, 'Recursos')" >Recursos</button>
            </div>
        </div>
        <div>
            <div id="Sustratos" class="tabcontent" style="display:none">
                <div style="padding-left: 20px; padding-right: 20px">
                    <h3>Sustratos</h3>
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
            </div>
            <div id="Acabados" class="tabcontent" style="display:none">
                <div style="padding-left: 20px; padding-right: 20px">
                    <h3>Acabados</h3>
                    <div class="table-responsive">
                        <table class="table" id="tbAcabados">
                            <thead>
                                <tr>
                                    <th>CÓDIGO</th>
                                    <th>UNIDADES</th>
                                    <th>LONGITUD</th>
                                    <th>TIEMPO</th>
                                    <th>ÁREA</th>
                                </tr>
                            </thead>
                            <tbody id="bodyAcabados">
                                <?php echo $acabados?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Impresoras" class="tabcontent" style="display:none">
                <div style="padding-left: 20px; padding-right: 20px">
                    <h3>Impresoras</h3>
                    <div class="table-responsive">
                        <table class="table" id="tbImpresoras">
                            <thead>
                                <tr>
                                    <th>CÓDIGO</th>
                                    <th>UNIDADES</th>
                                    <th>LONGITUD</th>
                                    <th>TIEMPO</th>
                                    <th>ÁREA</th>
                                </tr>
                            </thead>
                            <tbody id="bodyImpresoras">
                                <?php echo $impresoras?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Materiales" class="tabcontent" style="display:none">
                <div style="padding-left: 20px; padding-right: 20px">
                    <h3>Materiales</h3>
                    <div class="table-responsive">
                        <table class="table" id="tbMateriales">
                            <thead>
                                <tr>
                                    <th>CÓDIGO</th>
                                    <th>CANTIDAD</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody id="bodyMateriales">
                                <?php echo $materiales?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Proveedores" class="tabcontent" style="display:none">
                <div style="padding-left: 20px; padding-right: 20px">
                    <h3>Proveedores</h3>
                    <div class="table-responsive">
                        <table class="table" id="tbProveedores">
                            <thead>
                                <tr>
                                    <th>CÓDIGO</th>
                                    <th>CANTIDAD</th>
                                    <th>SOLES</th>
                                    <th>DÓLATES</th>
                                </tr>
                            </thead>
                            <tbody id="bodyProveedores">
                                <?php echo $proveedores?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Personales" class="tabcontent" style="display:none">
                <div style="padding-left: 20px; padding-right: 20px">
                    <h3>Personales</h3>
                    <div class="table-responsive">
                        <table class="table" id="tbPersonales">
                            <thead>
                                <tr>
                                    <th>CÓDIGO</th>
                                    <th>CANTIDAD</th>
                                    <th>IMPORTE</th>
                                </tr>
                            </thead>
                            <tbody id="bodyPersonales">
                                <?php echo $personal?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Recursos" class="tabcontent" style="display:none">
                <div style="padding-left: 20px; padding-right: 20px">
                    <h3>Recursos</h3>
                    <div class="table-responsive">
                        <table class="table" id="tbRecursos">
                            <thead>
                                <tr>
                                    <th>CÓDIGO</th>
                                    <th>CANTIDAD</th>
                                    <th>HORAS</th>
                                </tr>
                            </thead>
                            <tbody id="bodyRecursos">
                                <?php echo $recursos?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <button type="button" name="boton" id="boton1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" style="display:none">GRABAR Y CERRAR</button>
            </div>
        </div>
        <!-- MODAL RECUPERAR CONTRASEÑA -->
        <!-- <div class="modal fade" id="recuperaContrasena" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="mdl-card">
                        <div class="mdl-card__title">
                            <h2>Recuperar Contrase&ntilde;a</h2>
                            <p>Comp&aacute;rtenos tu correo y en breve te enviaremos un correo con tu contrase&ntilde;a</p>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="col-xs-12 js-input">
                                <label for="usuarioRecupera">Usuario</label>
                                <input type="text" id="usuarioRecupera" onkeyup="verificarDatos(event);">
                            </div>
                        </div> 
                        <div class="mdl-card__actions text-right">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--default" data-dismiss="modal">Cancelar</button>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="recuperar()" >Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
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