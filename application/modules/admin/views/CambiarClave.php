<div class="panel panel-primary" >
    <div class="panel-heading">ACTUALIZACION DE CLAVE</div>

  <div class="container">
    <div class="row">
         <!-- Perfil -->
      <div class="col-md-6 col-sm-4 col-xs-12">
        <div class="form-group form-group-sm">                
        <label class="control-label required" for="">Ingrese Nueva Clave<span class="required"> * </span></label> 
        <?php foreach ($pasusario as $array) 
            {?>
              <input type='text' value="<?php echo $array['USUARIO_ID'];?>"" id="id" /> 
          <?php } ?>
            
            <input type="text"  min="0" max="30" maxlength="30" class="form-control"  value="" id="clave" />
        
    
    <div class="panel-footer">  
    <div class="form-group form-group-sm">
    <br>                  
                <button class="btn btn-primary btn-sm" onclick="cambiarClave()">Cambiar Clave</button>
                </div> 
    </div>
    </div>    
  </div>
</div>
<div class="container">
      <div id="tabla" class="table-responsive" style="font-size:11px; text-align:center;"></div>
</div>
<script src="<?php echo base_url() ?>assets/librerias/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/js/dataTables.tableTools.min.js"/></script>
<script type="text/javascript">

    //INICIALIZO DATEPICKER
    $('.dp').datepicker({format: "yyyy-mm-dd",
            language: 'es',
            autoclose: true,
            forceParse: true,
               zIndexOffset: 1040 
    });

    //CONFIGURO EL ALERT
    var data=null;
    var params = 
    {                
       onInit: function(data) {},
       onCreate: function(notification, data) {},
       onClose: function(notification, data) {}
    };                                
     
    params.heading = 'Notificación';     
    params.theme = 'ruby';      
    params.life = '4000';//4segundos
  
    function cambiarClave(){
    
      var id = $("#id").val().trim();
      var nuevaClave=$("#clave").val().trim();

        if(nuevaClave=="")
      {
            var text = 'Falta campo Nueva Clave';
            $.notific8(text, params); 
            return;
      }
       
        $.isLoading({
                      text: "Cargando",
                      position: "overlay"
                });
            
          $.ajax({
                   type: 'POST',
                   async:false,
                   dataType: 'json',
                   data: {id:id,nuevaClave:nuevaClave},
                   url: '<?php echo base_url(); ?>index.php/admin/Usuarios/editarClaveUsuario',
                   success: function (data) 
                   {                    
                      $.isLoading("hide");
                      $("#clave").val(""); 
                      //$("#id").val("");                     
                   }

          });  
      }
        
  function GuardarAcceso(med_cod,acceso){
    
    var perfil   = $("#c_PERFIL_ID").val().trim();
    var med_cod  = med_cod;
    
    if(acceso=='N'){
      var acceso   = 'S';
    }else{
      var acceso   = 'N';
    }
    
    //alert(acceso);        
    $.ajax({
             type: 'POST',
             async:false,
             dataType: 'json',
             data: {perfil:perfil,med_cod:med_cod,acceso:acceso},
             url: '<?php echo base_url(); ?>index.php/admin/menu/GuardarAcceso',
             success: function (data) 
             {     
                alert(data);
          constultarPedidos();              
          
             }
        
    });  
    
  }
</script>