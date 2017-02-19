<style type="text/css">
  
ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {background-color: #ddd;}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {background-color: #ccc;}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
<?php

  $usuario=$this->session->userdata['loggeado']['ID_USUARIO'];
  
  $query=$this->db->query("SELECT PERFIL_ID FROM usuario WHERE USUARIO_ID='$usuario'");
    $ds = $query->row_array();
    $perfil = $ds['PERFIL_ID'];
  
  $query=$this->db->query("SELECT usu_login, men_cod, acceso FROM accesosni as a  WHERE a.men_cod>999 AND usu_login='$perfil'");
    //$ds = $query->row_array();
    //$men_cod = $ds['men_cod'];
  //$acceso  = $ds['acceso'];
  $panel =$query->result();

?>


<div class="panel panel-primary" >
    <div class="panel-heading">GESTIONAR LOGISTICA (0)</div>

	<div class="container12">
   <ul class="tab">
   <?php
    if ($perfil=='2') {
      
    
  ?>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTabs('container1');">Coordinación (<?php echo count($entregas_retiros)?>)</a></li>


  <?php
}
    if ($perfil=='9' || $perfil=='2') {
      
    
  ?>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTabs('container2');">Rutas (<?php echo  count($rutas_sin_asignar)?>)</a></li>
<?php
}
?>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTabs('container4');">Retiros y Entregas (0)</a></li>
  </ul>

  <!--
		<div class="row">
	        <?php foreach ($panel AS $items){?>
           
                     
          <?php if($items->men_cod=='1004' and $items->acceso=='S'){ ?>
          <button type="button" class="btn btn-info btn-lg btn-block" style="max-width: 300px;" onclick="openTabs('container1');">
            <span class="badge pull-left" id="indicador_retiros_pendientes"> 0 </span> Coordinación 
          </button>
          <?php } ?>
          <?php if($items->men_cod=='1005' and $items->acceso=='S'){ ?>
          <button type="button" class="btn btn-info btn-lg btn-block" style="max-width: 300px;" onclick="openTabs('container2');">
            <span class="badge pull-left" id="indicador_retiros_asignados"> 0 </span>
            <span class="badge pull-right" id="indicador_ruta_motorizado"> 0 </span> 
             Retiros y Entregas
          </button>
          <?php } ?>
          <?php if($items->men_cod=='1006' and $items->acceso=='S'){ ?>
          <button type="button" class="btn btn-info btn-lg btn-block" style="max-width: 300px;" onclick="openTabs('container3');">
            <span class="badge pull-left" id="indicador_empacados"> 0 </span> Consultar Rutas
          </button>
          <?php } ?>                        
        <?php }?>

	        
		</div>	
  -->	
	</div>
</div>


<!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> -->
<!-- FORM RECIBE -->
<form  id="form_retiro" name="formulario_retiro" method="post" action="<?php echo base_url(); ?>index.php/pedido/pedidos/editarRetiro" enctype="multipart/form-data">
<div class="modal fade" tabindex="-1" role="dialog" id="modal-asignar-recibe">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Retiro/Entrega</h4>
      </div>
      <div class="modal-body" id="modal-body">
          


        <div class="panel panel-primary">
            <div class="panel-heading">Detalle</div>
            <div class="panel-body">
             <div id="pd_pruebas" class="table table-responsive"></div>
            </div>

          <div class="table table-responsive">
            <table class="table table-responsive table-hover table-condensed" style="border:none">
              <tr>
                <td style="font-weight:bold">
                  Nº Pedido: 
                </td>
                <td>
                  <div id="n_pedido" style="text-align: left"></div>
                </td>
                <td style="font-weight:bold">
                  Nº cliente:
                </td>
                <td>
                  <div id="n_cliente" style="text-align: left"></div>
                </td>
                <td style="font-weight:bold">
                  Pruebas:
                </td>
                <td>
                  <div id="n_prueba" style="text-align: left"></div>
                </td>
                <td style="font-weight:bold">
                  Tipo:
                </td>
                <td>
                  <div id="n_tipo"  style="text-align: left"></div>
                </td>
              </tr>
            </table>
          </div>


            <div class="col-md- col-sm-7 col-xs-12">
              <div class="form-group form-group-sm">     
              <label  class="control-label required" for="">Recibe Conforme<span class="required"> * </span></label> 
                  <input type='text' id='id_entrega' value="" name="formulario_retiro[IDRECIBE]" />
                  <input type="text" id="c_nombre" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" value="" name="formulario_retiro[NOMBRERECIBE]" />
              </div>
            </div>

            <div class="col-md- col-sm-4 col-xs-12">
              <div class="form-group form-group-sm">     
              <label class="control-label" for="formulario_pedido_fotopaciente">Foto Paciente</label>         
                <input style="font-size:12px; max-width:95px" type="file" id="fotoparecibe" name="formulario_retiro[FOTORECIBE]" />
              </div>
            </div>


            </div>

        

      
      </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="realizarEdicion()">
                            <span class="glyphicon glyphicon-pencil"></span> Actualizar
                        </button>
                    </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</form>
<!-- MODAL -->

<!-- DETALLE DE PEDIDO -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_detalle_pedido" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detalles del pedido</h4>
      </div>
      <div class="modal-body" id="modal-body">
          <div class="table table-responsive">
            <table class="table table-responsive table-hover table-condensed" style="border:none">
              <tr>
                <td style="font-weight:bold">
                  Paciente: 
                </td>
                <td>
                  <div id="dp_paciente" style="text-align: left"></div>
                </td>
                <td style="font-weight:bold">
                  Nº Pedido:
                </td>
                <td>
                  <div id="dp_pedido"  style="text-align: left"></div>
                </td>
              </tr>
            </table>
          </div>

        <div class="panel panel-primary">
            <div class="panel-heading">PRUEBAS</div>
            <div class="panel-body">
              
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">PROCESOS</div>
            <div class="panel-body">
          <div id="pd_procesos" class="table table-responsive"></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--ventana modal para despachar pruebas-->
        <div class="modal fade" id="modal-despacho-pruebas">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Despachar Pruebas</h4>
                    </div>
                    <div class="modal-body" id="cuerpo-modal-despacho-prueba">
                      <div class="table-responsive">
                        <table class="table table-condensed table-striped table-bordered">
                          <tr style="font-weight: bold">
                            <td colspan="2" class="bg-primary" style="text-align: center">
                              DESPACHO
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Despacho: 
                            </td>
                            <td>
                                                  <select onchange="toggleDespacho()" id="s_despacho" class="form-control" style="height:30px">  
                                                      <option value="">Seleccione...</option>      
                                                       <option value="1">Courier</option> 
                                                       <option value="2">Mensajería Interna</option> 
                                                  </select>
                            </td>
                          </tr>

                          <tr style="display: none" id="fila-mensajeros">
                            <td>
                              Mensajero: 
                            </td>
                            <td>
                                    <select id="s_mensajero" class="form-control" style="height:30px">
                                      <option value="">Seleccione...</option> 
                                <?php 
                                      for ($i=0; $i < count($mensajeros); $i++) 
                                      { 
                                  ?> 
                                        <option value="<?php echo $mensajeros[$i]['USUARIO_ID'];?>"><?php echo $mensajeros[$i]['NOMBRE_MENSAJERO'] ;?>                                          
                                        </option>
                                <?php 
                                      }
                                 ?>
                                      </select>
                            </td>
                          </tr>

                          <tr style="display: none" id="fila-courier">
                            <td>
                              Courier: 
                            </td>
                            <td>
                                    <select id="s_courier" class="form-control" style="height:30px">
                                      <option value="">Seleccione...</option> 
                                <?php 
                                      for ($i=0; $i < count($courier); $i++) 
                                      { 
                                  ?> 
                                        <option value="<?php echo $courier[$i]['ID_COURIER'];?>">
                                        <?php echo $courier[$i]['NOMBRE_COURIER']; ?> 
                                        </option>
                                <?php 
                                      }
                                 ?>
                                      </select>
                            </td>
                          </tr>

                          <tr style="display: none" id="fila-recibe">
                            <td>
                              Tracking
                            </td>
                            <td>
                              <input id="c_recibe" type="text" class="form-control">
                            </td>
                          </tr>

                          <tr style="display: none" id="fila-flete">
                            <td>
                              Flete:
                            </td>
                            <td>
                              <input id="c_flete" type="text" class="form-control" style="max-width:200px">
                            </td>
                          </tr>
                        </table>

                      </div>
                    </div><!-- fin body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="realizarDespacho();" >
              <span class="glyphicon glyphicon-"></span> Despachar
                </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para despachar pruebas-->





    <style type="text/css">
        #fila_cabecera
        {
            font-weight: bold;
        }


    </style>


<div id="container1" class="panel1" style="display:none;">
<!--retiros por asignar-->
    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Pedidos en Ruta</div>
    </div>

    <div class="container">
            <div class="row" >
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <label class="control-label">Tipo de Ruta</label>
                    <div class='input-group'>
                        <select id="s_filtro_tipo" class="form-control" style="height:30px">
                            <option value="">TODAS</option>
                            <option value="1">Por Entregar</option>
                            <option value="2">Por Retirar</optio>
                        </select>
                    </div>      
                </div>
            </div>  
              
             <br>


              <div class="panel-footer">                    
                <div class="pull-right">  
                    <button class="btn btn-primary btn-sm" onclick="constultar()">Buscar</button>
                </div>
                <div class="clearfix"> </div>
              </div>       
    </div>

    <br>

<!--Ruta de Retiro -->

<center>
  <button class="btn btn-primary btn-sm" type="button" onclick="despacharPruebas();">
        <span class="glyphicon glyphicon-"></span>
            DESPACHAR
  </button>
</center>
<?php 

  $cli=array();
  $prue=array();
        for($k=0;$k<count($entregas_retiros);$k++){

          $cli[$k]=$entregas_retiros[$k]['cliente'];
          $prue[$k]=$entregas_retiros[$k]['ID_PRUEBAS'];

        }
      $objJason=json_encode($cli); 
      $objJasonPruebas=json_encode($prue);                              

     // $num=count($clientesRetiros);



     

     
      //print_r($clientesRetiros);
      

        for($j=0;$j<(count($clientes));$j++)
          {
                       
            ?>

      <div class="container" >
            <div id="tabla" class="table-responsive" style="font-size:12px; overflow:hidden;">
                     
                    <hr style="border: 0; height: 2px; border-top: 1px dashed black; border-bottom: 1px dashed black" />
                     
                    
                      <div class="row">
                      <div class="col-xs-12">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <table class="table table-condensed table-striped table-responsive" id="tablaGenerada">
                                      <thead>
                                      <tr>
                                        <td colspan="11">
                                                                      
                                        </td>
                                     </tr>
                                     <tr style="font-weight:bold">
                                         <td>
                                            CLIENTE
                                         </td>

                                         <td>
                                             DIRECCION
                                         </td>
                                         
                                     </tr>
                                     </thead>
                                     </table>
                              <button style="float: right;" class="btn btn-success" onclick="toggleOnByInput(<?php  echo $clientes[$j]['cliente']; ?>)">On</button>
                            </div>
                              <div class="panel-body">
                              <?php  echo $clientes[$j]['cliente']; ?>
                                
                              </div> 
                        </div>
                       
                      </div>
                      </div>

                      <div class="container" id="panel-entrega">
                            <div id="tabla" class="table-responsive" style="font-size:12px;">
                                    <table class="table table-condensed table-striped table-responsive" id="tablaGenerada">
                                      <thead>
                                      <tr>
                                        <td colspan="11">
                                                                      
                                        </td>
                                     </tr>
                                     <tr style="font-weight:bold">
                                         <td>
                                            Nº  
                                         </td>
                                         <td>
                                            PEDIDO 
                                         </td>

                                         <td>
                                             FECHA DE PEDIDO
                                         </td>
                                         <td>
                                             PACIENTE
                                         </td>
                                         <td>
                                             PRUEBA
                                         </td>
                                         <td>
                                             FECHA EMPAQUE
                                         </td>
                                         <td>
                                             ENTREGA/RETIRO
                                         </td>
                                         <td>
                                             USUARIO
                                         </td>
                                         <td>
                                             TIPO
                                         </td>
                                         <td>
                                             DIAS
                                         </td>
                                         <td>
                                              DESPACHAR
                                         </td>
                                     </tr>
                                     </thead>
                                    
                                    <?php    
                                    $con=1; 

                                        for($i=0;$i<count($entregas_retiros);$i++)
                                        {
                                          if($clientes[$j]['cliente']==$entregas_retiros[$i]['cliente']){
                                    ?>  
                                        <tr >
                                            <td style="text-align:center; cursor:pointer" onclick="detallePedido('<?php echo $entregas_retiros[$i]['numero'] ?>')">
                                                  <?php echo $con++; ?>
                                             </td>
                                             <td style="cursor:pointer" onclick="detallePedido('<?php echo $entregas_retiros[$i]['numero'] ?>')">
                                                  <?php echo $entregas_retiros[$i]['numero'] ?>
                                             </td>
                                             <td style="cursor:pointer"  onclick="detallePedido('<?php echo $entregas_retiros[$i]['numero'] ?>')">
                                                 <?php echo $entregas_retiros[$i]['fing'] ?>
                                             </td>
                                             

                                             <td style="cursor:pointer"  onclick="detallePedido('<?php echo $entregas_retiros[$i]['numero'] ?>')">
                                                  <?php echo $entregas_retiros[$i]['cliente'] ?>
                                             </td>
                                             
                                             <td style="cursor:pointer"  onclick="detallePedido('<?php echo $entregas_retiros[$i]['numero'] ?>')">
                                                 <?php echo $entregas_retiros[$i]['ID_PRUEBAS'] ?>
                                             </td>
                                             <td style="cursor:pointer"  onclick="detallePedido('<?php echo $entregas_retiros[$i]['numero'] ?>')">
                                                 <?php echo $entregas_retiros[$i]['fecha']?>
                                             </td>
                                             <td style="cursor:pointer"  onclick="detallePedido('<?php echo $entregas_retiros[$i]['numero'] ?>')">
                                                 ENTREGA/RETIRO
                                             </td>
                                             <td style="cursor:pointer"  onclick="detallePedido('<?php echo $entregas_retiros[$i]['numero'] ?>')">
                                                 USUARIO REGISTRA
                                             </td>
                                             <td style="cursor:pointer"  onclick="detallePedido('<?php echo $entregas_retiros[$i]['numero'] ?>')">
                                                 <?php echo $entregas_retiros[$i]['tipo']?>
                                             </td>
                                             <td style="cursor:pointer"  onclick="detallePedido('<?php echo $entregas_retiros[$i]['numero'] ?>')">
                                                 <?php echo $entregas_retiros[$i]['DIAS']; ?>
                                             </td>
                                             <td style="cursor:pointer" style="text-align:center">
                                               <center>
                                                <input  id="<?php echo $entregas_retiros[$i]['ID_PRUEBAS']; ?>" data-toggle="toggle" data-on="Si" data-off="No" type="checkbox" data-size="small" data-offstyle="danger" class="dt" >
                                               </center>
                                             </td>
                                        </tr>
                                    <?php                 
                                    
                                        }
                                    
                                   }
                                    ?>
                                 </table>

                                </div>
                            </div>
            </div>   
          </div>
              
        <?php 
          }             
            ?>
</div>
<!--tab CONSULTAR RUTAS MENSAJERO CLIENTE -->
<div class="panel1" id="container2" style="display: none;">
 <div class="container" >


        <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Consultar Rutas</div>
        <div class="panel-body">
            <div class="row" >   

                <!-- campo Cliente -->
                
        <!-- campo Tipo -->
                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="form-group form-group-sm">                
                        <label>Despacho</label>                            
                        <select id="activo" class="form-control" style="height:30px" onchange="seleccionarDespacho(this.value)">
            <option value="0">Seleccione una Ocpión</option>
            <option value="1">Mensajeria Interna</option>
            <option value="2">Courier</option>
            </select>
                    </div>
                </div>
        <!-- campo Mensajero -->
                <div id="men" style="display: none;" class="col-md-4 col-sm-2 col-xs-12">
                    <div class="form-group form-group-sm">                

          <label class="control-label required" for="">Mensajero<span class="required"> * </span></label>           
          <select id="mensajero" class="form-control" style="height:30px">
            <option value="">TODOS</option>
              <?php foreach ($mensajeros as $array) 
                {?>
                  <option value="<?php echo $array['ID_MENSAJERO']; ?>" ><?php echo $array['NOMBRE_MENSAJERO']; ?></option>  
              <?php } ?>
          </select>
           
          </div>
                </div>
        <!-- campo Courier -->
        <div id="cou" style="display: none;"   class="col-md-4 col-sm-4 col-xs-12">
          <div class="form-group form-group-sm">                
            <label class="control-label required" for="">Courier<span class="required"> * </span></label> 
            <select id="ID_COURIER" class="form-control" style="height:30px">
            <option value="">TODOS</option>
              <?php foreach ($courier as $array) 
                {?>
                  <option value="<?php echo $array['ID_COURIER']; ?>" ><?php echo $array['NOMBRE_COURIER']; ?></option>  
              <?php } ?>
            </select>
          </div>
        </div>
            </div>

        </div>
        <div class="panel-footer">                    
      <div class="pull-right">  
                <button class="btn btn-primary btn-sm" onclick="constultarPedidos()">Consultar</button>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

        <?php                              

        for($j=0;$j<(count($rutas));$j++)
          {

                      
            ?>

 
    <div id="tabla" class="table-responsive" style="font-size:12px; overflow:hidden;">
           
                     
                    
                      <div class="row">
                      <div class="col-xs-12">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <table class="table table-condensed table-striped table-responsive" id="tablaGenerada">
                                      <thead>
                                      <tr>
                                        <td colspan="11">
                                                                      
                                        </td>
                                     </tr>
                                     <tr style="font-weight:bold">
                                         <td>
                                            RUTA #<?php echo $rutas[$j]['ruta']; ?>
                                         </td>
                                         
                                     </tr>
                                     </thead>
                                     
                                     </table>
                                </div>

                             </div>
                       
                          </div>
                      </div>
    </div>
      <div class="container" >
        <div id="tabla" class="table-responsive" style="font-size:12px; overflow:hidden;" >
         <table class="table table-condensed table-striped table-responsive tablaGenerada" id="tablaGenerada2">
            <thead>
             <tr style="font-weight:bold">
                 <td>
                    Nº  
                 </td>
                 <td>
                    PEDIDO  
                 </td>
                 <td>
                     FECHA DE PEDIDO
                 </td>
                 <td>
                     CIUDAD
                 </td>
                 <td>
                     CLIENTE
                 </td>
                 <td>
                     PACIENTE
                 </td>
                 <td>
                     PRUEBA
                 </td>
                 <td>
                     MENSAJERO/ COURIER
                 </td>
                 <td>
                     FECHA DESPACHO
                 </td>
                 <td>
                     TIPO
                 </td>
                 <td>
                     MODIFICAR
                 </td>
             </tr>
             </thead>
            
            <?php     
            $c=1;         
                for($i=0;$i<count($pedidos_ruta);$i++)
                {
                  if($rutas[$j]['ruta']==$pedidos_ruta[$i]['ID_RUTA']){
            ?>
                <tr>   
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $c++; ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $pedidos_ruta[$i]['numero'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                         <?php echo $pedidos_ruta[$i]['fing'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $pedidos_ruta[$i]['ciudad'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $pedidos_ruta[$i]['cliente'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $pedidos_ruta[$i]['paciente'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                         <?php echo $pedidos_ruta[$i]['NOMBRE_PRUEBA'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                     <?php echo $pedidos_ruta[$i]['mensajerocourirer'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                        <?php echo $pedidos_ruta[$i]['FECHA_SALIDA'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                        <?php echo $pedidos_ruta[$i]['tipo'] ?>
                     </td>
                     <td style="text-align:center">
                          
                          <center>
                                    <button

                                    <?php

                                    if($pedidos_ruta[$i]['tipo']=='ENTREGA'){
                                    
                                    ?>
                                     id="<?php echo $pedidos_ruta[$i]['ID_PEDIDO']; ?>"
                                     <?php
                                   }else{
                                    ?>
                                    id="<?php echo $pedidos_ruta[$i]['retiro']; ?>"
                                    <?php
                                   }
                                     ?>

                                      type="button" class="btn btn-primary btn-sm" style="width:50px" onclick="mostrarModalEntrega(this.id)">
                                          <span class="glyphicon glyphicon-share-alt"></span>
                                      </button>
                            </center>
                     </td>

                </tr>
            <?php                 
               }
             }
            ?>
         </table>
        </div>
        </div>

            <?php 
                } 
                            
            ?>
            </div>
      
  </div>

        
  <!-- tab CONSULTAR RUTA PEDIDOS ENTREGADOS-->      
<div class="panel1" id="container4" style="display: none;">

      
  <div style="min-height:500px">
    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Consultar Pedidos Entregados</div>
        <div class="panel-body">
            <div class="row" >   
        <div class="col-md-4 col-sm-2 col-xs-12">
                  <label class="control-label">Fecha de inicio</label>
                    <div class='input-group'>
                        <span onclick="limpiarFecha('fecha_inicio')" class="input-group-addon left" style="cursor:pointer">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <input value="<?php $fecha = date("Y-m-d"); echo $fecha; ?>" type="text" id="fecha_inicio" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly/>   
                    </div>
                </div>   
                <div class="col-md-4 col-sm-2 col-xs-12">
                  <label class="control-label">Fecha de fin</label>
                    <div class='input-group'>
                        <span onclick="limpiarFecha('fecha_fin')" class="input-group-addon left" style="cursor:pointer">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <input value="<?php $fecha = date("Y-m-d"); echo $fecha; ?>" type="text" id="fecha_fin" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly/>   
                    </div>
                </div>
                <!-- campo Cliente -->
                <div class="col-md-4 col-sm-2 col-xs-12">
                    <div class="form-group form-group-sm">                
                        <label>Cliente</label>                            
                        <input type="text" id="cliente" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" />
                    </div>
                </div>
        <!-- campo Tipo -->
                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="form-group form-group-sm">                
                        <label>Despacho</label>                            
                        <select id="activo" class="form-control" style="height:30px" onchange="seleccionarDespacho(this.value)">
            <option value="0">Seleccione una Ocpión</option>
            <option value="1">Mensajeria Interna</option>
            <option value="2">Courier</option>
            </select>
                    </div>
                </div>
        <!-- campo Mensajero -->
                <div id="men" style="display: none;" class="col-md-4 col-sm-2 col-xs-12">
                    <div class="form-group form-group-sm">                

          <label class="control-label required" for="">Mensajero<span class="required"> * </span></label>           
          <select id="mensajero" class="form-control" style="height:30px">
            <option value="">TODOS</option>
              <?php foreach ($mensajeros as $array) 
                {?>
                  <option value="<?php echo $array['ID_MENSAJERO']; ?>" ><?php echo $array['NOMBRE_MENSAJERO']; ?></option>  
              <?php } ?>
          </select>
           
          </div>
                </div>
        <!-- campo Courier -->
        <div id="cou" style="display: none;"   class="col-md-4 col-sm-4 col-xs-12">
          <div class="form-group form-group-sm">                
            <label class="control-label required" for="">Courier<span class="required"> * </span></label> 
            <select id="ID_COURIER" class="form-control" style="height:30px">
            <option value="">TODOS</option>
              <?php foreach ($courier as $array) 
                {?>
                  <option value="<?php echo $array['ID_COURIER']; ?>" ><?php echo $array['NOMBRE_COURIER']; ?></option>  
              <?php } ?>
            </select>
          </div>
        </div>
            </div>

        </div>
        <div class="panel-footer">                    
      <div class="pull-right">  
                <button class="btn btn-primary btn-sm" onclick="constultarPedidos3()">Consultar</button>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container">
      <div id="tabla2" class="table-responsive" style="font-size:11px; text-align:center; cursor: pointer"></div>
    </div>
</div>
</div>


    <script src="<?php echo base_url() ?>assets/librerias/js/jquery.dataTables.min.js"></script>
     <script src="<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/js/dataTables.tableTools.min.js"/></script>
    <!-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->

<script type="text/javascript">
 
   function toggleOnByInput(id) {

    var arrayCli=eval(<?php echo $objJason;?>);
    var p=eval(<?php echo $objJasonPruebas;?>);
    for(var i=0;i<arrayCli.length;i++)
    {
        if (id==arrayCli[i]) {
         $('#'+p[i]).bootstrapToggle('on');
       }
    }
    
    
  }
  

</script>
<script type="text/javascript">
        
    //INICIALIZO DATEPICKER
    $('.dp').datepicker({format: "yyyy-mm-dd",
            language: 'es',
            autoclose: true,
            forceParse: true
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
               params.theme = 'ruby'; //ruby
               params.life = '4000';//4segundos 

                //var text = 'Debe abrir la caja.';
                //$.notific8(text, params);

    function constultarPedidos3()
      {
        var f_inicio  = $("#fecha_inicio").val().trim();
        var f_fin     = $("#fecha_fin").val().trim();
      var cliente   = $("#cliente").val().trim();
      var courier   = $("#ID_COURIER").val().trim();
      var mensajero = $("#mensajero").val().trim();

      
        if(f_inicio!="")
        var f1 = new Date(f_inicio);

      if(f_fin!="")
        var f2 = new Date(f_fin);

      //valido fechas
      if(f1>f2)
      {
            var text = 'Intervalo de fechas incorrecto';
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
                        data: {f_inicio:f_inicio,f_fin:f_fin,cliente:cliente,mensajero:mensajero,courier:courier},
                        url: '<?php echo base_url(); ?>index.php/pedido/pedidos/obtenerPedidosEntregados',
                        success: function (data) 
                        {     
                           generarTablaDinamica3(data);   
                           $.isLoading("hide");                     
                        }
            
               });  
      }


    window.onload=function alcargar()
    {
        aplicarPaginado();
    }   

    function aplicarPaginado() 
    {
          
          var table = $('#').dataTable(
          {
              language: {
                  processing: "Procesando...",
                  search: "Filtro",
                  lengthMenu: "Mostrar _MENU_ registros",
                  info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                  infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                  infoFiltered: "(filtrado de un total de _MAX_ registros)",
                  infoPostFix: "",
                  loadingRecords: "Cargando...",
                  zeroRecords: "No se encontraron resultados",
                  emptyTable: "Ningún dato disponible en esta tabla",
                  paginate: {
                      first: "Primero",
                      previous: "Anterior",
                      next: "Siguiente",
                      last: "&uacute;ltimo"
                  }
              },
              aLengthMenu: [
                            [20, 100, 200, -1],    //valor q utilizo en la propiedad iDisplayLength para asociar a una opcion
                            [20, 100, 200, "Todo"]  //opciones del select para la cant de registros a mostrar
                            ],
              iDisplayLength: -1,
              "bSort": true, //habilito el ordenar para todas las columnas
              "order": [],  //para que no ordene la primera columna por default
              "columnDefs": [{
                                    "targets"  : 'no-sort',
                                    "orderable": false,
                            }],


              "aoColumnDefs": [  //habilito la opcion de ordenar en la columna deseada
                                { "aTargets": [ 0 ],"bSortable": true },
                                { "aTargets": [ 1 ],"bSortable": true },
                                { "aTargets": [ 2 ],"bSortable": true },
                                { "aTargets": [ 3 ],"bSortable": true },
                                { "aTargets": [ 4 ],"bSortable": true },

                                { "aTargets": [ 5 ],"bSortable": true },
                                { "aTargets": [ 6 ],"bSortable": true },
                                { "aTargets": [ 7 ],"bSortable": true },
                                { "aTargets": [ 8 ],"bSortable": true },
                                { "aTargets": [ 9 ],"bSortable": true },
                                { "aTargets": [ 10 ],"bSortable": false }

                              ] 
          });

            var tableTools = new $.fn.dataTable.TableTools(table, {
                'aButtons': [
                      {
                          'sExtends': 'xls',
                          'sButtonText': 'Exportar a Excel',
                          'sFileName': 'Reporte de Pedidos Empacados.xls'
                      }/*,
                      {
                          'sExtends': 'print',
                          'bShowAll': true,
                          'sButtonText': 'Imprimir'
                      }*/,
                      {
                          'sExtends': 'pdf',
                          'bFooter': false,
                          'sButtonText': 'Imprimir desde PDF',
                          'sFileName': 'Reporte de Pedidos Empacados.pdf'
                      }
                ],
                'sSwfPath': '<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf'
            });
            $(tableTools.fnContainer()).insertBefore('#tablaGenerada_wrapper');
    }

    function openTabs(seccion) {
        var i;
        var x = document.getElementsByClassName("panel1");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(seccion).style.display = "block";
    }
    function detallePedido(nro_pedido)
    {

                //busco las pruebas para el detalle del pedido
                $.isLoading({
                              text: "Cargando",
                              position: "overlay"
                           });
                $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {nro_pedido:nro_pedido},
                         url: '<?php echo base_url(); ?>index.php/pedido/pedidos/pruebasDetallePedido',
                         success: function (data) 
                         {    
                            var paciente = data[0]['NOMBRE_APELLIDO'];
                            $("#dp_paciente").html(paciente);
                            $("#dp_pedido").html(nro_pedido);

                                var html=''
                                    +'<table class="table table-condensed table-hover">'
                                    +'  <tr style="font-weight: bold">'
                                    +'      <td>'
                                    +'          Prueba'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Fecha de Salida'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Fecha de Retorno'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Estado'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Despachado'
                                    +'      </td>'
                                    +'  </tr>'

                            //TOMO LAS PRUEBAS DEL PRODUCTO DETALLE Y LAS PONGO EN UNA TABLA
                            for (var i = 0; i < data.length; i++)
                            {
                                var nombre_prueba = data[i]['NOMBRE_PRUEBA'];
                                var fecha_salida = data[i]['FECHA_SALIDA'];
                                var fecha_regreso = data[i]['FECHA_REGRESO'];

                                var nombre_estado = data[i]['NOMBRE_ESTADO'];
                                var despachado = data[i]['DESPACHADO'];
                                if(despachado=='S') despachado="Si";

                                if(nombre_estado=="TERMINADO")
                                    var estilo =" class='alert alert-success' ";
                                else
                                    var estilo="";

                                html+=' <tr '+estilo+' >';
                                html+='     <td>';
                                html+=          nombre_prueba;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          fecha_salida;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          fecha_regreso;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          nombre_estado;
                                html+='     </td>';
                                html+='     <td style="text-align:center">';
                                html+=          despachado;
                                html+='     </td>';
                                html+=' </tr>';
                            }
                            html+=' </table>';
                            $('#pd_pruebas').html("");
                            $('#pd_pruebas').append(html);                       
                  
                         }
                });  
        
                $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {nro_pedido:nro_pedido},
                         url: '<?php echo base_url(); ?>index.php/pedido/pedidos/procesosDetallePedido',
                         success: function (data) 
                         {    
                                var html=''
                                    +'<table class="table table-condensed table-hover">'
                                    +'  <tr style="font-weight: bold">'
                                    +'      <td>'
                                    +'          Producto'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Código'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Proceso'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Fecha'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Estado'
                                    +'      </td>'
                                    +'  </tr>'

                            //TOMO LOS PROCESOS DEL PRODUCTO DETALLE Y LAS PONGO EN UNA TABLA
                            var producto_iteracion_anterior="";
                            for (var i = 0; i < data.length; i++)
                            {
                              var producto = data[i]['PROD_NOM_PROD'];
                              if(i!=0)//aqui controlo que se muestre solo una celda con el nombre del producto
                              {
                                if(producto==producto_iteracion_anterior)
                                {
                                  producto_iteracion_anterior=producto;
                                  producto="";
                                }
                                else
                                {
                                  producto_iteracion_anterior=producto;
                                }
                              }
                              else
                                producto_iteracion_anterior=producto;

                                var codigo = data[i]['PROD_COD_PROD'];
                                var proceso = data[i]['NOMBRE_PROCESO'];
                                var fecha = data[i]['FECHA'];
                                    if(fecha==null)
                                        fecha="";
                                var estado = data[i]['NOMBRE_ESTADO'];

                                if(estado=="TERMINADO")
                                    var estilo =" class='alert alert-success' ";
                                else
                                    var estilo="";

                                html+=' <tr '+estilo+' >';
                                html+='     <td>';
                                html+=          producto;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          codigo;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          proceso;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          fecha;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          estado;
                                html+='     </td>';
                                html+=' </tr>';
                            }
                            html+=' </table>';
                            $('#pd_procesos').html("");
                            $('#pd_procesos').append(html);                      

                            $.isLoading("hide") ;  
                            $('#modal_detalle_pedido').modal('show');                   
                         }
                });  
    }

    function despacharPruebas()
    {
        var btns_desp = $(".dt");
        var cadena ="";
        btns_desp.each(function()
        {
            if( $(this).prop('checked') )
            {
              var id_btn_desp = $(this).attr("id");
              cadena+=id_btn_desp+"&&";
            }
        }); 

      if(cadena!="")
      {
          $('#modal-despacho-pruebas').modal('show');
      }
      else
      {
            var text = 'Seleccione al menos una PRUEBA';
            $.notific8(text, params); 
            return;  
      }
         
    }

    function toggleDespacho()
    {
      var despacho = $("#s_despacho").val().trim();

      if(despacho==1)
      {
        $("#fila-courier").attr("style","display:table-row");
        $("#fila-recibe").attr("style","display:table-row");
        $("#fila-flete").attr("style","display:table-row");

        $("#fila-mensajeros").attr("style","display:none");
      }
      else if(despacho==2)
      {
        $("#fila-mensajeros").attr("style","display:table-row");
        $("#fila-flete").attr("style","display:none");

        $("#fila-courier").attr("style","display:none");
        $("#fila-recibe").attr("style","display:none");
      }   
      else
      {
        $("#fila-mensajeros").attr("style","display:none");
        $("#fila-flete").attr("style","display:none");
        $("#fila-courier").attr("style","display:none");
        $("#fila-recibe").attr("style","display:none");
      } 
    }

    function realizarDespacho()
    {
          var btns_desp = $(".dt");
          var cadena ="";
          btns_desp.each(function()
          {
              if( $(this).prop('checked') )
              {
                var id_btn_desp = $(this).attr("id");
                cadena+=id_btn_desp+"&&";
              }
          }); 

        if(cadena!="")
        {
          cadena=cadena.substring(0,cadena.length-2);         
        }

        //realizo validaciones
        var despacho =$("#s_despacho").val().trim();
        if(despacho=="")
        {
            var text = 'Seleccione DESPACHO';
            $.notific8(text, params); 
            return; 
        }
        else if(despacho==1)
        {
          if($("#s_courier").val().trim()=="")
          {
              var text = 'Seleccione COURIER';
              $.notific8(text, params); 
              return; 
          }
          else if($("#c_recibe").val().trim()=="")
          {
              var text = 'Campo RECIBE está vacío';
              $.notific8(text, params); 
              return;   
          }
          else if($("#c_flete").val().trim()=="")
          {
              var text = 'Campo FLETE está vacío';
              $.notific8(text, params); 
              return;   
          }
        }
        else if(despacho==2)
        {
            if($("#s_mensajero").val().trim()=="")
            {
                var text = 'Seleccione MENSAJERO';
                $.notific8(text, params); 
                return; 
            }
        }

        //obtengo los datos
        var courier = $("#s_courier").val().trim();
        var recibe = $("#c_recibe").val().trim();
        var flete = $("#c_flete").val().trim();
        var mensajero = $("#s_mensajero").val().trim();

        var tipoMensajeria = $("#s_despacho").val().trim();
        if(tipoMensajeria==1)
          tipoMensajeria="Courier";
        else
          tipoMensajeria="Interna";

                $.isLoading({
                              text: "Cargando",
                              position: "overlay"
                           });
                $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {cadena:cadena,courier:courier,recibe:recibe,flete:flete,mensajero:mensajero,tipoMensajeria:tipoMensajeria},
                         url: '<?php echo base_url(); ?>index.php/pedido/pedidos/DespacharPruebas',
                         success: function (data) 
                         {                           
                            $.isLoading("hide") ;   
                            window.location.reload();
                         }
                });            
 

    }
    function aplicarPaginado2() 
    {
           var table = $('.tablaGenerada').dataTable(
          {
              language: {
                  processing: "Procesando...",
                  search: "Filtro",
                  lengthMenu: "Mostrar _MENU_ registros",
                  info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                  infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                  infoFiltered: "(filtrado de un total de _MAX_ registros)",
                  infoPostFix: "",
                  loadingRecords: "Cargando...",
                  zeroRecords: "No se encontraron resultados",
                  emptyTable: "Ningún dato disponible en esta tabla",
                  paginate: {
                      first: "Primero",
                      previous: "Anterior",
                      next: "Siguiente",
                      last: "&uacute;ltimo"
                  }
              },
              aLengthMenu: [
                            [20, 100, 200, -1],    //valor q utilizo en la propiedad iDisplayLength para asociar a una opcion
                            [20, 100, 200, "Todo"]  //opciones del select para la cant de registros a mostrar
                            ],
              iDisplayLength: -1,
              "bSort": true, //habilito el ordenar para todas las columnas
              "order": [],  //para que no ordene la primera columna por default
              "columnDefs": [{
                                    "targets"  : 'no-sort',
                                    "orderable": false,
                            }],


              "aoColumnDefs": [  //habilito la opcion de ordenar en la columna deseada
                                { "aTargets": [ 0 ],"bSortable": true },
                                { "aTargets": [ 1 ],"bSortable": true },
                                { "aTargets": [ 2 ],"bSortable": true },
                                { "aTargets": [ 3 ],"bSortable": true },
                                { "aTargets": [ 4 ],"bSortable": true },
                                { "aTargets": [ 5 ],"bSortable": true },
                                { "aTargets": [ 6 ],"bSortable": false }
                              ] 
          });

            var tableTools = new $.fn.dataTable.TableTools(table, {
                'aButtons': [
                    {
                        'sExtends': 'xls',
                        'sButtonText': 'Exportar a Excel',
                        'sFileName': 'Reporte de Retiros Pendientes.xls'
                    }/*,
                    {
                        'sExtends': 'print',
                        'bShowAll': true,
                        'sButtonText': 'Imprimir'
                    }*/,
                    {
                        'sExtends': 'pdf',
                        'bFooter': false,
                        'sButtonText': 'Imprimir desde PDF',
                        'sFileName': 'Reporte de Retiros Pendientes.pdf'
                    }
                ],
                'sSwfPath': '<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf'
            });
            $(tableTools.fnContainer()).insertBefore('#tablaGenerada_wrapper');
          
    }
    //funcion para Consultar y filtrar 
    function constultar()
    {
      var filtro = $("#s_filtro_tipo").val();

      if(filtro=="")
      {
        $("#panel-entrega").attr("style","display:block");
        $("#panel-retiro").attr("style","display:block");
      }
      else if(filtro==1)
      {
         $("#panel-entrega").attr("style","display:block");
         $("#panel-retiro").attr("style","display:none");
      }
      else if(filtro==2)
      {
        $("#panel-entrega").attr("style","display:none");
         $("#panel-retiro").attr("style","display:block");
      }

    }

function mostrarModalEntrega(id){
    
    idr=id;

    $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                data: {id:id},
                url: '<?php echo base_url(); ?>index.php/admin/usuarios/editarUsuario',
                success: function (data) 
                {  

          var USUARIO_ID = data[0]['USUARIO_ID']; 
          var USUARIO_NOMBRE = data[0]['USUARIO_NOMBRE']; 
          var USUARIO_APELLIDO = data[0]['USUARIO_APELLIDO']; 
          var USUARIO_ACTIVO = data[0]['USUARIO_ACTIVO']; 
          var USUARIO_FECHA_REGISTRO = data[0]['USUARIO_FECHA_REGISTRO']; 
          var USUARIO_MOVIL = data[0]['USUARIO_MOVIL']; 
          var USUARIO_TELEFONO = data[0]['USUARIO_TELEFONO'];
          var USUARIO_EMAIL = data[0]['USUARIO_EMAIL'];
          var USUARIO_FECHA_CADUCA = data[0]['USUARIO_FECHA_CADUCA'];
          var USUARIO_TIEMPO_SESION = data[0]['USUARIO_TIEMPO_SESION'];
          var USUARIO_USER = data[0]['USUARIO_USER'];
          

          $("#c_USUARIO_ID").val(USUARIO_ID); 
          $("#c_USUARIO_NOMBRE").val(USUARIO_NOMBRE); 
          $("#c_USUARIO_APELLIDO").val(USUARIO_APELLIDO); 
          $("#c_USUARIO_ACTIVO").val(USUARIO_ACTIVO); 
          $("#c_USUARIO_FECHA_REGISTRO").val(USUARIO_FECHA_REGISTRO); 
          $("#c_USUARIO_MOVIL").val(USUARIO_MOVIL); 
          $("#c_USUARIO_TELEFONO").val(USUARIO_TELEFONO); 
          $("#c_USUARIO_EMAIL").val(USUARIO_EMAIL); 
          $("#c_USUARIO_FECHA_CADUCA").val(USUARIO_FECHA_CADUCA); 
          $("#c_USUARIO_TIEMPO_SESION").val(USUARIO_TIEMPO_SESION); 
          $("#c_USUARIO_USER").val(USUARIO_USER);
    
                }

       });

    $("#modal-asignar-recibe").modal('show');
    $("#id_entrega").val(idr);


  }


  function realizarEdicion()
    {
      var nombre=$("#c_nombre").val().trim();
        
        if(nombre=="")
        {
            var text = 'Seleccione un Nombre';
            $.notific8(text, params); 
            return;
        }
        else
        {
          $("#form_retiro").submit();
          //$("#modal-asignar-recibe").modal('hide');
                    
        }
    }
    function editar(USUARIO_ID)
    {
    
     
    }
function generarTablaDinamica3(pedidos)
        {
            $("#tabla2").html(""); // limpio el div que contiene la tabla generaada

            //tabla
            var tabla = document.createElement("table");
            var thead = document.createElement("thead");
            var tbody = document.createElement("tbody");

            //cabecera
            var filaCabecera = document.createElement("tr");
                  var celda0 = document.createElement("td");
                  var celda1 = document.createElement("td");
                  var celda2 = document.createElement("td");
                  var celda3 = document.createElement("td");
                  var celda4 = document.createElement("td");
                  var celda6 = document.createElement("td");
                  var celda7 = document.createElement("td");
                  var celda8 = document.createElement("td");
                  var celda9 = document.createElement("td");
                  var celda10 = document.createElement("td");
                  var celda11 = document.createElement("td");
                  var celda12 = document.createElement("td");
                  var celda13 = document.createElement("td");

                  var textoCelda0 = document.createTextNode("Nº");
                  var textoCelda1 = document.createTextNode("PEDIDO");
                  var textoCelda2 = document.createTextNode("FECHA");
                  var textoCelda3 = document.createTextNode("CIUDAD");
                  var textoCelda4 = document.createTextNode("CLIENTE");
                  var textoCelda6 = document.createTextNode("PACIENTE");
                  var textoCelda7 = document.createTextNode("MÉDICO TRATANTE");
                  var textoCelda8 = document.createTextNode("PRUEBA");
                  var textoCelda9 = document.createTextNode("FECHA EMPAQUE");
                  var textoCelda10 = document.createTextNode("MENSAJERO/ COURIER");
                  var textoCelda11 = document.createTextNode("FECHA DESPACHO");
                  var textoCelda12 = document.createTextNode("FECHA ENTREGA");
                  var textoCelda13 = document.createTextNode("RECIBE");


                  celda0.appendChild(textoCelda0);
                  celda1.appendChild(textoCelda1);
                  celda2.appendChild(textoCelda2);
                  celda3.appendChild(textoCelda3);
                  celda4.appendChild(textoCelda4);
                  celda6.appendChild(textoCelda6);
                  celda7.appendChild(textoCelda7);
                  celda8.appendChild(textoCelda8);
                  celda9.appendChild(textoCelda9);
                  celda10.appendChild(textoCelda10);
                  celda11.appendChild(textoCelda11);
                  celda12.appendChild(textoCelda12);
                  celda13.appendChild(textoCelda13);


                  filaCabecera.appendChild(celda0);
                  filaCabecera.appendChild(celda1);
                  filaCabecera.appendChild(celda2);
                  filaCabecera.appendChild(celda3);
                  filaCabecera.appendChild(celda4);
                  filaCabecera.appendChild(celda6);
                  filaCabecera.appendChild(celda7);
                  filaCabecera.appendChild(celda8);
                  filaCabecera.appendChild(celda9);
                  filaCabecera.appendChild(celda10);
                  filaCabecera.appendChild(celda11);
                  filaCabecera.appendChild(celda12);
                  filaCabecera.appendChild(celda13);

                  filaCabecera.setAttribute("id","fila_cabecera");
                  thead.appendChild(filaCabecera);

                  //CUERPO
                  for (var i = 0; i < pedidos.length; i++)
                  {
                      var numero = pedidos[i]['numero']; 
                      var f_ing = pedidos[i]['fing'];
                      var ciudad = pedidos[i]['ciudad'];

                      var cliente = pedidos[i]['cliente']; 
                      var paciente = pedidos[i]['paciente']; 
                      var medico = pedidos[i]['medico']; 
                      

                      var prueba = pedidos[i]['NOMBRE_PRUEBA']; 
                      var fecha_empaque = pedidos[i]['FECHA_EMPAQUE']; 
                      var mensajero = pedidos[i]['mensajerocourirer']; 
                      var fecha_despacho = pedidos[i]['FECHA_SALIDA']; 
                      var fecha_entrega = pedidos[i]['FEC_HOR_ENTR']; 
                      var recibe = pedidos[i]['PERSO_RECIBE'];

                      var fila = document.createElement("tr");

                      var celda0 = document.createElement("td");
                      var celda1 = document.createElement("td");
                      var celda2 = document.createElement("td");
                      var celda3 = document.createElement("td");
                      var celda4 = document.createElement("td");
                      var celda5 = document.createElement("td");
                      var celda6 = document.createElement("td");
                      var celda7 = document.createElement("td");
                      var celda8 = document.createElement("td");
                      var celda9 = document.createElement("td");
                      var celda10 = document.createElement("td");
                      var celda11 = document.createElement("td");
                      var celda12 = document.createElement("td");

                      var textoCelda0 = document.createTextNode(i+1);
                      var textoCelda1 = document.createTextNode(numero);
                      var textoCelda2 = document.createTextNode(f_ing);
                      var textoCelda3 = document.createTextNode(ciudad);
                      var textoCelda4 = document.createTextNode(cliente);
                      var textoCelda5 = document.createTextNode(paciente);
                      var textoCelda6 = document.createTextNode(medico);
                      var textoCelda7 = document.createTextNode(prueba);
                      var textoCelda8 = document.createTextNode(fecha_empaque);
                      var textoCelda9 = document.createTextNode(mensajero);
                      var textoCelda10 = document.createTextNode(fecha_despacho);
                      var textoCelda11 = document.createTextNode(fecha_entrega);
                      var textoCelda12 = document.createTextNode(recibe);

              celda0.appendChild(textoCelda0);
                      celda1.appendChild(textoCelda1);   
                      celda2.appendChild(textoCelda2); 
                      celda3.appendChild(textoCelda3); 
                      celda4.appendChild(textoCelda4); 
                      celda5.appendChild(textoCelda5); 
                      celda6.appendChild(textoCelda6); 
                      celda7.appendChild(textoCelda7); 
                      celda8.appendChild(textoCelda8); 
                      celda9.appendChild(textoCelda9); 
                      celda10.appendChild(textoCelda10); 
                      celda11.appendChild(textoCelda11); 
                      celda12.appendChild(textoCelda12); 

                      fila.appendChild(celda0);
                      fila.appendChild(celda1);
                      fila.appendChild(celda2);
                      fila.appendChild(celda3);
                      fila.appendChild(celda4);
                      fila.appendChild(celda5);
                      fila.appendChild(celda6);
                      fila.appendChild(celda7);
                      fila.appendChild(celda8);
                      fila.appendChild(celda9);
                      fila.appendChild(celda10);
                      fila.appendChild(celda11);
                      fila.appendChild(celda12);

                      fila.setAttribute("onclick","detallePedido('"+numero+"')");

                      tbody.appendChild(fila);
                  }

            tabla.appendChild(thead);
            tabla.appendChild(tbody);

            var contenedor = document.getElementById("tabla");
            contenedor.appendChild(tabla);

            tabla.setAttribute("class","table table-condensed table-striped table-responsive");
            tabla.setAttribute("id","tablaGenerada");

            aplicarPaginado3();
        }

        function aplicarPaginado3() 
        {
          
          var table = $('#tablaGenerada').dataTable(
          {
              language: {
                  processing: "Procesando...",
                  search: "Filtro",
                  lengthMenu: "Mostrar _MENU_ registros",
                  info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                  infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                  infoFiltered: "(filtrado de un total de _MAX_ registros)",
                  infoPostFix: "",
                  loadingRecords: "Cargando...",
                  zeroRecords: "No se encontraron resultados",
                  emptyTable: "Ningún dato disponible en esta tabla",
                  paginate: {
                      first: "Primero",
                      previous: "Anterior",
                      next: "Siguiente",
                      last: "&uacute;ltimo"
                  }
              },
              aLengthMenu: [
                            [20, 100, 200, -1],    //valor q utilizo en la propiedad iDisplayLength para asociar a una opcion
                            [20, 100, 200, "Todo"]  //opciones del select para la cant de registros a mostrar
                            ],
              iDisplayLength: -1,
              "bSort": true, //habilito el ordenar para todas las columnas
              "order": [],  //para que no ordene la primera columna por default
              "columnDefs": [{
                                    "targets"  : 'no-sort',
                                    "orderable": false,
                            }],


              "aoColumnDefs": [  //habilito la opcion de ordenar en la columna deseada
                                { "aTargets": [ 0 ],"bSortable": true },
                                { "aTargets": [ 1 ],"bSortable": true },
                                { "aTargets": [ 2 ],"bSortable": true },
                                { "aTargets": [ 3 ],"bSortable": true },
                                { "aTargets": [ 4 ],"bSortable": true },

                                { "aTargets": [ 5 ],"bSortable": true },
                                { "aTargets": [ 6 ],"bSortable": true },
                                { "aTargets": [ 7 ],"bSortable": true },
                                { "aTargets": [ 8 ],"bSortable": true },
                                { "aTargets": [ 9 ],"bSortable": true },

                                { "aTargets": [ 10 ],"bSortable": true },
                                { "aTargets": [ 11 ],"bSortable": true }
                              ] 
          });

            var tableTools = new $.fn.dataTable.TableTools(table, {
                'aButtons': [
                    {
                        'sExtends': 'xls',
                        'sButtonText': 'Exportar a Excel',
                        'sFileName': 'Reporte de Pedidos Entregados.xls'
                    }/*,
                    {
                        'sExtends': 'print',
                        'bShowAll': true,
                        'sButtonText': 'Imprimir'
                    }*/,
                    {
                        'sExtends': 'pdf',
                        'bFooter': false,
                        'sButtonText': 'Imprimir desde PDF',
                        'sFileName': 'Reporte de Pedidos Entregados.pdf'
                    }
                ],
                'sSwfPath': '<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf'
            });
            $(tableTools.fnContainer()).insertBefore('#tablaGenerada_wrapper');
        }


</script>