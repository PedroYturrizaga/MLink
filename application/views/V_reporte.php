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
                                    <th>Cantidad</th>
                                    <th>Alto</th>
                                    <th>Ancho</th>
                                    <th>Medida</th>
                                    <th>Codigo</th>
                                    <th>Sustrato</th>
                                    <th>Area</th>
                                </tr>
                            </thead>
                            <tbody id="bodySustratos">
                                <!-- <?php echo $bodyCanales?> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Acabados" class="tabcontent" style="display:none">
                <h3>Acabados</h3>
            </div>
            <div id="Impresoras" class="tabcontent" style="display:none">
                <h3>Impresoras</h3>
            </div>
            <div id="Materiales" class="tabcontent" style="display:none">
                <h3>Materiales</h3>
            </div>
            <div id="Proveedores" class="tabcontent" style="display:none">
                <h3>Proveedores</h3>
            </div>
            <div id="Personales" class="tabcontent" style="display:none">
                <h3>Personales</h3>
            </div>
            <div id="Recursos" class="tabcontent" style="display:none">
                <h3>Recursos</h3>
            </div>
        </div>  

        <!-- <div class="js-header js-header--login">
            <div class="js-header--left">
                <img class="js-partner" src="<?php echo RUTA_IMG?>logo/hpe-logo.svg">
                <img src="<?php echo RUTA_IMG?>logo/microsoft-logo.png">
            </div>
            <div class="js-header--right">
                <p>IMAGENTI</p>
            </div>
        </div>
        <section class="js-section js-height">
            <div class="js-fondo--login"></div>
            <div class="js-container js-flex">
                <div class="js-login">
                    <h2>Acceso a la Herramienta</h2>
                    <div class="col-xs-12 js-input m-0">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" onkeyup="verificarDatos(event);">
                    </div>
                    <div class="col-xs-12 js-input m-0">
                        <label for="password">Contrase&ntilde;a</label>
                        <input type="password" id="password" onkeyup="verificarDatos(event);">
                    </div>
                    <div class="col-xs-12 p-0">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--login" onclick="ingresar()">Login</button>
                    </div>
                    <div class="col-xs-12 js-middle">
                        <div class="js-middle--left">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
                                <input type="checkbox" id="remember" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Remember me</span>
                            </label>
                        </div>
                        <div class="js-middle--right">
                            <a onclick="openModalRecuperar()">¿Olvidaste tu contrase&ntilde;a?</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

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
        
        <!--MODAL CAMBIO CONTRASEÑA -->
        <!-- <div class="modal fade" id="cambioContrasena" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm text-center">
                <div class="modal-content">
                    <div class="mdl-card">
                        <div class="mdl-card__supporting-text">
                            <h2>CAMBIAR CONTRASE&Ntilde;A</h2>
                            <div class="col-xs-12 form-group js-input">
                                <label for="usuario">Usuario</label>
                                <input type="text" id="usuarioCambio" onkeyup="verificarDatos(event);">
                            </div>
                            <div class="col-xs-12 form-group js-input">
                                <label for="password">Nueva contrase&ntilde;a</label>
                                <input type="password" id="newPassword" onkeyup="verificarDatos(event);">
                            </div>
                            <div class="col-xs-12 form-group js-input">
                                <label for="confirmPassword">Confirmar contrase&ntilde;a</label>
                                <input type="confirmPassword" id="confirmPassword" onkeyup="verificarDatos(event);">
                            </div>
                        </div> 
                        <div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-dismiss="modal">Cancelar</button>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="cambiar()">Aceptar</button>
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
            $(document).ready(function(){
            let CHECK = sessionStorage.getItem('CHECK');
            let USERNAME = sessionStorage.getItem('USERNAME');
            let PASS = sessionStorage.getItem('PASS');
           if(CHECK == 1) {
                $('#remember').prop('checked', true);
                $('#usuario').val(USERNAME);
                $('#password').val(PASS);
           }else {
                $('#remember').prop('checked', false);
                $('#usuario').val('');
                $('#password').val('');
           }
        });
        </script>
    </body>
</html>