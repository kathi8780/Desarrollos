    <title>LOGIN</title>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

        <link rel="icon" href="<?= base_url('assets/librerias/images/favicon.png') ?>" type="image/gif">

        <link href="<?= base_url('assets/librerias/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/bootstrap-theme.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/select2.css') ?>"  rel="stylesheet" type="text/css"/>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
        <link href="<?= base_url('assets/librerias/css/style-is-loading.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/bootstrap-datepicker3.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/prettify.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/jquery.notific8.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/dataTables.bootstrap.css') ?>" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            
            .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
                background-color: #fff;
                opacity: 1;
            }
            
            
            .image-itca-vector
            {
                background-image:url("<?= base_url('assets/librerias/images/login-academos.jpg') ?>");
                background-position: center top;
                background-size: 1170px 700px;
                max-width: 1170px; 
                height: 700px; 
                margin: 0 auto;
            }
/*            .row{
                margin: 0;
            }*/
             #contenido{                
                max-width: 1170px;
                margin: 0 auto;
            } 
            .shadow-gris{
                
               box-shadow: 3px 3px 12px #333;
            }
            
         
           

            .pull-right *
            {
                display: inline-block;
            }
            
            span.required{
                color: #a94442;
                font-weight: 700;
            }
           
            span.input-group-addon.left{
                border-right: 0px;
                color: grey;
            }
            span.input-group-addon.left + input{
                border-left: 0px;
            }        

            label {
                font-weight: 300;
            }

            form li a {
                background-color: #fff;  
            }

        *::after, *::before {
            box-sizing: border-box;
        }
        *::after, *::before {
            box-sizing: border-box;
        }
       .form-control:not(textarea) {
           height: 25px;
       }
       
       div#button{
           margin: 0 auto;
       }

       .logo_mini
       {
            background-image:url("<?= base_url('assets/librerias/images/logo_academos_mini.png') ?>");
            background-position: center top;
            margin: 0 auto;
            width: 220px;
            height: 167px
       }
       
            
        </style>

        <script src="<?= base_url('assets/librerias/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.isloading.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.validate.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/additional-methods.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/idiomas/jqueryValidator/messages_es.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/idiomas/jqueryValidator/methods_es_CL.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.mask.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/bootstrap-datepicker.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/idiomas/datepicker/bootstrap-datepicker.es.min.js') ?>"  charset="UTF-8" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.bootstrap.wizard.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/prettify.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.notific8.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/dataTables.bootstrap.js') ?>" type="text/javascript"></script>
       
    </head>
    <body  onresize="mostrarLogoMini()">
        <div id="contenido" class="shadow-gris image-itca-vector" style="padding-top: 120px; ">
            <div class="panel panel-primary" style='max-width:400px; margin:0 auto;'>
                <div class="panel-heading" style="text-align: center; "> <!--background-color: #26a139; color: #fff"-->
                    <h3 class="panel-title">BADENT</h3>
                </div>
                <div class="panel-body">
                    <form name="login" method="post" action="<?php echo base_url(); ?>index.php/admin/login/index">
                        <span style="color: #a94442;"> <?php if(isset($error)) {echo $error;} ?></span>

                        <div class="form-group form-group-sm">
                            <label for="usuario">Usuario</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required autofocus>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="clave">Clave</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" name="clave" id="clave" class="form-control" placeholder="Clave" required>
                            </div>
                        </div>
                        <div id="button" style="max-width: 80px;">
                            <button id="enviar" class="btn btn-sm btn-primary" type="submit">ENTRAR</button>
                        </div>

                   </form>
               </div>
           </div>

            <div class="logo_mini" id="logo_mini" style="display: none">
                
            </div>  
        </div>

<div style=" text-align:center; font-family:Verdana, Geneva, sans-serif; position:relative; top:25px; font-size:10px;">.:: BADENT ::. &copy; Todos los derechos reservados</div>

 <script src="<?= base_url('assets/application/js/validation-extended.js') ?>" type="text/javascript"></script>
            <script type="text/javascript">  
            $(function(){            
            var params = {
                
                onInit: function(data) {
                },
                onCreate: function(notification, data) {
                },
                onClose: function(notification, data) {
                }
                };
               <?php if(isset($mostrarMensajeConfirmacion)) {?>
                var text = 'La operación ha sido realizada con éxito.';
                params.heading = 'Confirmación';
                params.theme = 'lime';
                // show notification
                $.notific8(text, params);
                <?php } ?>
                <?php if(isset($mostrarMensajeErrorValidacion)) {?>
                var text = 'Hay algunos campos de entrada con errores. Por favor rectífiquelos.';
                params.heading = 'Error';
                params.theme = 'ruby';
                // show notification
                $.notific8(text, params);
                <?php } ?>
                  
                  function chequearValidacionYEnviarFormulario() {

                            var form = $("form[name=login]");
                            form.validate();
                            if (form.valid() == true)
                            {
                               
                                form.submit();
                            }

                        }
                        $("#enviar").click(chequearValidacionYEnviarFormulario);
                    
            });


            function mostrarLogoMini()
            {
                      if (getSize()<768) 
                      {
                        document.getElementById("logo_mini").setAttribute("style","display:block");
                      }
                      else
                      {
                        document.getElementById("logo_mini").setAttribute("style","display:none");
                      }
            }

            function getSize() 
            {
              var myWidth = 0, myHeight = 0;
              if( typeof( window.innerWidth ) == 'number' ) {
                //No-IE
                myWidth = window.innerWidth;
                myHeight = window.innerHeight;
              } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
                //IE 6+
                myWidth = document.documentElement.clientWidth;
                myHeight = document.documentElement.clientHeight;
              } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
                //IE 4 compatible
                myWidth = document.body.clientWidth;
                myHeight = document.body.clientHeight;
              }
              return myWidth;
            } 

            window.onload = function alcargar()
            {
                mostrarLogoMini();
            };
            </script>
      </body>
</html>
