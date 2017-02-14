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
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTabs('container1');">Coordinación (<?php echo $contador_cordinacion[0]['cordinacion']+$contador_r_p[0]['c_retiros'];?>)</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTabs('container2');">Rutas (<?php echo  count($rutas_sin_asignar)?>)</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTabs('container3');">Retiros y Entregas (0)</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTabs('container3');">Pedidos Entregados(0)</a></li>
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
          <div id="pd_pruebas" class="table table-responsive"></div>
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
            </div> <br>
        <div class="panel-footer">                    
            <div class="pull-right">  
                <button class="btn btn-primary btn-sm" onclick="constultar()">Buscar</button>
            </div>
            <div class="clearfix"> </div>
        </div>       
    </div><br>

<!--Ruta de Retiro -->

                  <div class="col-xs-20 text-right">
                    <h1><small>RETIROS</small></h1>
                    </div>
                     
                    <hr style="border: 0; height: 2px; border-top: 1px dashed black; border-bottom: 1px dashed black" />
                     
                    
                      <div class="row">
                      <div class="col-xs-5">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4>Para : <a href="#">Nombre del Cliente</a></h4>
                            </div>
                              <div class="panel-body">Dirección
                                  detalles
                                  más detalles
                              </div>
                          </div>
                        </div>
                        <div class="col-xs-5 col-xs-offset-2 text-right">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                              <h4><a href="#">Asignar Ruta</a></h4>
                              </div>
                              <div class="panel-body"><button type="button" class="btn btn-primary" data-dismiss="modal">Asignar</button>
                              </div>
                            </div>
                        </div>
                      </div>
                      <table class="table table-bordered">
                      <thead >
                      <tr style="font-weight:bold" >
                            <th>
                              Nº
                            </th>
                            <th>
                                PEDIDO
                            </th>
                            <th>
                                FECHA PEDIDO
                            </th>
                            <th>
                                CIUDAD
                            </th>
                            <th>
                                CLIENTE
                            </th>
                             <th>
                                DIRECCION
                            </th>
                             <th>
                                MEDIDO TRATANTE
                            </th>
                            <th>
                                PRUEBA
                            </th>
                            <th>
                                FECHA RETIRO
                            </th>
                            <th style="text-align:center">
                              ASIGNAR
                            </th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      </table>

<div id="" style="display:block">
    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Retiros Pendientes</div>
    </div>

    <div class="container" id="panel-retiro"">
      <div class="table-responsive">
        <table id="tablaGenerada2" class="table table-condensed table-hover table-striped tablaGenerada">
              <thead>
                        <tr style="font-weight: bold" >
                            <th>
                              Nº
                            </th>
                            <th>
                                PEDIDO
                            </th>
                            <th>
                                FECHA PEDIDO
                            </th>
                            <th>
                                CIUDAD
                            </th>
                            <th>
                                CLIENTE
                            </th>
                             <th>
                                DIRECCION
                            </th>
                             <th>
                                MEDIDO TRATANTE
                            </th>
                            <th>
                                PRUEBA
                            </th>
                            <th>
                                FECHA RETIRO
                            </th>
                            <th style="text-align:center">
                              ASIGNAR
                            </th>
                        </tr>
              </thead>
                        <?php 
                          $cliente_iteracion_anterior="";
                          for ($i=0; $i < count($retiros_pendientes); $i++) 
                          { 
                            $cliente= $retiros_pendientes[$i]['CLIENTE'];

                              /*if($i!=0)//aqui controlo que se muestre solo una celda con el nombre
                              {
                                if($cliente==$cliente_iteracion_anterior)
                                {
                                  $cliente_iteracion_anterior=$cliente;
                                  $cliente="";
                                }
                                else
                                {
                                  $cliente_iteracion_anterior=$cliente;
                                }
                              }
                              else
                                $cliente_iteracion_anterior=$cliente;*/

                         ?>
                          <tr id="<?php echo  'r'.$retiros_pendientes[$i]['ID_RETIRO']; ?>" >
                              <td>
                                  <?php echo $i+1; ?>
                              </td>
                              <td>
                                    <?php echo $retiros_pendientes[$i]['PEDF_NUM_PREIMP'];  ?>
                              </td>
                              <td>
                                  <?php echo $retiros_pendientes[$i]['FECHA_COTIZACION'];  ?>
                                  <!--<?php //echo $cliente; ?>-->
                              </td>
                              
                              <td>
                                  <?php echo $retiros_pendientes[$i]['CIUDAD'];  ?>
                              </td >
                              
                              <td>
                                  <?php echo $retiros_pendientes[$i]['USUARIO_NOMBRE']." ".$retiros_pendientes[$i]['USUARIO_APELLIDO'];  ?>
                              </td>
                              <td>
                                  <?php echo $retiros_pendientes[$i]['DIRECCION_RETIRO']; ?>
                              </td>
                              <td>
                                  medico
                              </td>
                              <td>
                                   <?php echo $retiros_pendientes[$i]['ID_PRUEBA']; ?>
                              </td>
                              <td>
                                  <?php echo $retiros_pendientes[$i]['FECHA']; ?>
                              </td>
                              <td style="text-align:center">
                                  <!--<center>
                                    <button id="<?php //echo $retiros_pendientes[$i]['ID_RETIRO']; ?>" type="button" class="btn btn-primary btn-sm" style="width:50px" onclick="asignarRetiro(this.id)">
                                          <span class="glyphicon glyphicon-share-alt"></span>
                                      </button>
                                  </center>-->
                                  <center>
                                  <input id="<?php echo $retiros_pendientes[$i]['ID_PRUEBA']; ?>" data-toggle="toggle" data-on="Si" data-off="No" type="checkbox" data-size="small" data-offstyle="danger" class="dt" >
                                 </center>
                              </td>
                          </tr>
                        <?php     
                          }
                         ?>

        </table>
      </div>
    </div>
    </div>
  <!--pedidos por despachar-->
  <div style="min-height:500px">
    <div class="panel panel-primary">
        <div class="panel-heading">Pedidos Empacados</div>
    </div>

    <div class="container" id="panel-entrega">
        <div id="tabla" class="table-responsive" style="font-size:12px;">
         <table class="table table-condensed table-striped table-responsive" id="tablaGenerada">
            <thead>
             <tr>
                <td colspan="11">
                            <center>
                                <button class="btn btn-primary btn-sm" type="button" onclick="realizarDespacho();">
                                    <span class="glyphicon glyphicon-"></span>
                                    DESPACHAR
                                </button>
                            </center>                   
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
                     CIUDAD
                 </td>
                 <td>
                     CLIENTE
                 </td>
                 <td>
                     PACIENTE
                 </td>
                 <td>
                     MEDICO TRATANTE
                 </td>
                 <td>
                     PRUEBA
                 </td>
                 <td>
                     FECHA EMPAQUE
                 </td>
                 <td>
                     DIAS
                 </td>
                 <td>
                      ASIGNAR
                 </td>
             </tr>
             </thead>
            
            <?php              
                for($i=0;$i<count($pedidos_empacados);$i++)
                {
            ?>
                <tr >
                    <td style="text-align:center; cursor:pointer" onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $i+1; ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $pedidos_empacados[$i]['numero'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                         <?php echo $pedidos_empacados[$i]['fing'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $pedidos_empacados[$i]['ciudad'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $pedidos_empacados[$i]['cliente'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $pedidos_empacados[$i]['paciente'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $pedidos_empacados[$i]['medico'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                         <?php echo $pedidos_empacados[$i]['ID_PRUEBAS'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                         <?php echo $pedidos_empacados[$i]['FECHA_EMPAQUE']." ".$pedidos_empacados[$i]['HORA_EMPAQUE']?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                         <?php echo $pedidos_empacados[$i]['DIAS']; ?>
                     </td>
                     <td style="cursor:pointer" style="text-align:center">
                       <center>
                        <input id="<?php echo $pedidos_empacados[$i]['ID_PRUEBAS']; ?>" data-toggle="toggle" data-on="Si" data-off="No" type="checkbox" data-size="small" data-offstyle="danger" class="dt" >
                       </center>
                     </td>
                </tr>
            <?php                 
               }
            ?>
              <tfoot>
               <tr>
                  <td colspan="11">
                              <center>
                                  <button class="btn btn-primary btn-sm" type="button" onclick="despacharPruebas();">
                                      <span class="glyphicon glyphicon-"></span>
                                      DESPACHAR
                                  </button>
                              </center>                   
                  </td>
               </tr>
             </tfoot> 
         </table>

        </div>
    </div>
</div>

</div>
<!--tab asignar rutas-->
<div class="panel1" id="container2" style="display: none;">

       <div class="panel panel-primary" style="border:none">
            <div class="panel-heading">RUTAS SIN ASIGNAR</div>
        </div>
        <?php 
        $cont=0;

        for($j=0;$j<count($rutas_sin_asignar);$j++)
          {
                       
            ?>
        <div class="row">
          <div class="container" >
                <div id="tabla" class="table-responsive" style="font-size:12px; overflow:hidden;" >
                 
                 
                    
                    <div class="col-xs-20 text-right">
                    <h1><small>RUTA #<?php echo $rutas_sin_asignar[$j]['rutassn']?></small></h1>
                    </div>
                     
                    <hr style="border: 0; height: 2px; border-top: 1px dashed black; border-bottom: 1px dashed black" />
                     
                    
                      <div class="row">
                      <div class="col-xs-5">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4>Para : <a href="#">Nombre del Cliente</a></h4>
                            </div>
                              <div class="panel-body">Dirección
                                  detalles
                                  más detalles
                              </div>
                          </div>
                        </div>
                        <div class="col-xs-5 col-xs-offset-2 text-right">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                              <h4><a href="#">Asignar Ruta</a></h4>
                              </div>
                              <div class="panel-body"><button type="button" class="btn btn-primary" data-dismiss="modal">Asignar</button>
                              </div>
                            </div>
                        </div>
                      </div>

                      <table class="table table-bordered">
                      <thead >
                      <tr>
                      <th>
                      <h4>No</h4>
                      </th>
                      <th>
                      <h4>PEDIDO</h4>
                      </th>
                      <th>
                      <h4>FECHA PEDIDO</h4>
                      </th>
                      <th>
                      <h4>CIUDAD</h4>
                      </th>
                      <th>
                      <h4>PACIENTE</h4>
                      </th>
                      <th>
                      <h4>MEDICO TRATANTE</h4>
                      </th>
                      <th>
                      <h4>FECHA DE EMPAQUE</h4>
                      </th>
                      <th>
                      <h4>PRUEBA</h4>
                      </th>
                      <th>
                      <h4>ENTREGA/RETIRO</h4>
                      </th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                $con=1;  
                for($i=0;$i<count($pedidos_ruta);$i++)
                {
                  if($rutas_sin_asignar[$j]['rutassn']==$pedidos_ruta[$i]['ruta']){


                  
            ?>
                <tr>   
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $con++; ?>
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
                          <?php echo $pedidos_ruta[$i]['paciente'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $pedidos_ruta[$i]['medico'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                         <?php echo $pedidos_ruta[$i]['NOMBRE_PRUEBA'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                        <?php echo $pedidos_ruta[$i]['FECHA_SALIDA'] ?>
                     </td>

                     <td>ENTREGA</td>
                     

                </tr>
            <?php                 
               }
             }
            ?>

                      </tbody>
                      </table>
                        
                        

                </div>
            </div>
            
          <?php                 
               }
             
            ?>
    <div class="panel1" id="container3" style="display: none;">

      <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">CONSULTAR RUTAS</div>
    </div>
      
   <?php foreach ($panel AS $items){?>
           
                     
          <?php if($items->men_cod=='1004' and $items->acceso=='S'){ ?>
          <div class="panel-heading">RUTAS ASIGNADAS</div>

          <?php } ?>
          <?php if($items->men_cod=='1005' and $items->acceso=='S'){ ?>
          <div class="panel-heading">RUTAS ASIGNADAS</div>
          <?php } ?>
          <?php if($items->men_cod=='1006' and $items->acceso=='S'){ ?>
          <div class="panel-heading">RUTAS ASIGNADAS</div>
          <?php } ?>                        
        <?php }?>

    </div>


    <script src="<?php echo base_url() ?>assets/librerias/js/jquery.dataTables.min.js"></script>
     <script src="<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/js/dataTables.tableTools.min.js"/></script>
    <!-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
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

    function constultarPedidos()
    {}

    window.onload=function alcargar()
    {
        aplicarPaginado();
    }   

    function aplicarPaginado() 
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
          alert(cadena);        
        }

        
          
        //obtengo los datos
        

                $.isLoading({
                              text: "Cargando",
                              position: "overlay"
                           });
                $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {cadena:cadena},
                         url: '<?php echo base_url(); ?>index.php/pedido/rutas/crearRutas',
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

    </script>