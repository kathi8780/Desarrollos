    <title>Admin</title>
<form name="itca_admin_buscar_rol" method="post" action="">
    <div class="panel panel-success">

        <div class="panel-heading">Buscar roles existentes</div>
        <div class="panel-body">
            <div class="row" >                     
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group form-group-sm">
                        <input type="text" id="itca_admin_buscar_rol_rol" name="itca_admin_buscar_rol[rol]" class="form-control form-control" placeholder="INGRESE UN ROL PARA BUSCAR" tabindex="2" />
                    </div>
                </div>
            </div>


        </div>
        <div class="panel-footer">                    
            <div class="pull-right">  
                <button type="submit" id="btn_buscar_rol" class="btn btn-success btn-sm">BUSCAR</button>

            </div>
            <div class="clearfix"> </div>

        </div>

    </div>
</form>



<div id="respuesta"></div>

<script type="text/javascript">

    $(function () {

        function enviarFormulario() {
            $.isLoading({
                text: "Cargando",
                position: "overlay"
            });
            var url = '<?php echo base_url(); ?>index.php/admin/rol/busquedaAvanzada'; // El script a dónde se realizará la petición.
            $.ajax({
                type: "POST",
                url: url,
                data: $("form[name=itca_admin_buscar_rol]").serialize(), // Adjuntar los campos del formulario enviado.
                success: function (data)
                {
                    $.isLoading("hide");
                    $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
                }

            });

            return false;

        }
        /*------------------------------------SUBMIT DEL FORMULARIO DE BUSQUEDA--------------------*/
        $("#btn_buscar_rol").click(enviarFormulario);

        $(document).keypress(function (e) {
            //13 es el código de la tecla
            if (e.which == 13) {
                enviarFormulario();
            }

        });

        
    });

</script>