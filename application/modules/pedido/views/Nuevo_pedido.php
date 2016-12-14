<title>Pedido</title>

<!--ventana modal para adicionar productos-->
    <div id="modal-adicionar-producto" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" style="width:95%">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Adicionar Producto</h4>
          </div>
          <div class="modal-body">
            <div class="row" style="margin-top:3px">
                <!-- contenedor 2 -->
                <div class="col-md-1 col-sm-1 col-xs-4">
                        <div class="btn-group-vertical" id="contenedor2" style="text-align:center; border:2px solid gray; ">
                                <div class="form-horizontal"> 
                                    <button style="width:100%" type="button" class="btn btn-primary btn-xs"  id="btn-scroll-arriba" onclick="scrollDiv(100,100)">
                                        <span class="glyphicon glyphicon-triangle-bottom"></span>
                                    </button>
                                </div>
                            <div id="contenedor2_1" style="margin-top:3px; margin-bottom:3px; font-size: 10px">
                                <center><button nombre="crown" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-corona" style="width:43px; height:43px; border:none;"></button></center>
                                <label>CORONA </label>

                                <center><button nombre="bridge" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-puente" style="width:45px; height:45px; border:none"></button></center>
                                <label>BRIDGE </label>

                                <center><button nombre="removable" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-removible" style="width:45px; height:45px; border:none"></button></center>
                                <label>REMOVABLE </label>

                                <center><button nombre="implant" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-implant" style="width:45px; height:45px; border:none"></button></center>
                                <label>IMPLANT </label>

                                <center><button nombre="appliance" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-appliance" style="width:45px; height:45px; border:none"></button></center>
                                <label>APPLIANCE </label>

                                <center><button nombre="1" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-protesis" style="width:45px; height:45px; border:none"></button></center>
                                <label>IMPLANT PROSTHETICS </label>

                                <center><button nombre="add" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-add" style="width:45px; height:45px; border:none"></button></center>
                                <label>ADDITIONAL </label>

                                <center><button nombre="add" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-add" style="width:45px; height:45px; border:none"></button></center>
                                <label>8 </label>

                                <center><button nombre="add" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-add" style="width:45px; height:45px; border:none"></button></center>
                                <label>9 </label>

                                <center><button nombre="add" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-add" style="width:45px; height:45px; border:none"></button></center>
                                <label>10 </label>                            
                            </div>
                                <div class="form-horizontal"> 
                                    <button style="width:100%" type="button" class="btn btn-primary btn-xs"  id="btn-scroll-arriba" onclick="scrollDiv(-100,-100)">
                                        <span class="glyphicon glyphicon-triangle-top"></span>
                                    </button>
                                </div>

                        </div>
                </div><!-- fin contenedor 2 -->

                <!-- contenedor 3 -->
                <div class="col-md-3 col-sm-3 col-xs-7" id="contenedor3" style="border: 2px solid gray">
                    <div align="center">
                        <div class="table-responsive">
                            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash4/cabs/swflash.cab#version=4,0,0,0"> 
                            <param name="MOVIE" value="formulario.swf">
                            <param name="PLAY" value="true">
                            <param name="LOOP" value="true">
                            <param name="QUALITY" value="high">
                            <param name="wmode" value="transparent">

                            <embed src="<?= base_url('assets/librerias/images/swf/formulario.swf')?>" loop="true"  play="true" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi? P1_Prod_Version=ShockwaveFlash" width="313" height="529" wmode="transparent"/>
                            </object>                    
                        </div>

                    </div>
                </div><!-- fin contenedor 3 -->

                <!-- contenedor 4 -->
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12" id="contenedor4" style="border: 2px solid gray">
                         
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="row">
                                <!--  campo PRODUCTO O ITEM -->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-group-sm"> 
                                        <label class="control-label required" for="formulario_pedido_item">Producto<span class="required"> * </span></label>
                                        <select id="formulario_pedido_item" 
                                                <?php if(form_error('formulario_pedido[ARTICULO]') != '' ){?>
                                                    aria-describedby="formulario_pedido_item-error"
                                                <?php } ?>
                                                 name="formulario_pedido[ARTICULO]" class="form-control">  
                                                 <option value="">Seleccione...</option>
                                                <?php 
                                                    $titulos =array();
                                                    for($i=0; $i<count($productos); $i++)
                                                    {
                                                        $usuario = $productos[$i]['USUARIO_NOMBRE'];
                                                        $perfil  = $productos[$i]['PERFIL_NOMBRE'];

                                                        if(!in_array($perfil, $titulos))
                                                        {
                                                            array_push($titulos, $perfil);
                                                 ?>
                                                        <option disabled='' style="text-align:center" class="alert-danger"><?php echo $perfil; ?></option>
                                                        <?php
                                                            for($j=0; $j<count($productos); $j++)
                                                            {
                                                                if($productos[$j]['PERFIL_NOMBRE']== $perfil)
                                                                {    
                                                        ?>
                                                                    <option value="<?php echo $productos[$j]['USUARIO_NOMBRE']; ?>">
                                                                        <?php echo $productos[$j]['USUARIO_NOMBRE']; ?>
                                                                    </option>
                                                        <?php
                                                                }
                                                            }
                                                        }
                                                    }
                                                        ?>                              
                                        </select>

                                        <?php if(form_error('formulario_pedido[ARTICULO]') != '' ){?>
                                                    <span id="formulario_pedido_item-error" class="help-block">
                                                        <?= form_error('formulario_pedido[ARTICULO]') ?>
                                                    </span>
                                        <?php } ?>
                                    </div>
                                </div>  

                            <!-- campo cantidad -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label required" for="formulario_pedido_cantidad">Cantidad<span class="required"> * </span></label>                            
                                    <input type="text" id="formulario_pedido_cantidad" name="formulario_pedido[CANTIDAD]" autocomplete="off"
                                            <?php if(form_error('formulario_pedido[CANTIDAD]') != '' ){?>
                                            aria-describedby="formulario_pedido_cantidad-error"
                                           <?php } ?>
                                           required="required" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" 
                                           />
                                            <?php if(form_error('formulario_pedido[CANTIDAD]') != '' ){?>
                                                <span id="formulario_pedido_cantidad-error" class="help-block">
                                                    <?= form_error('formulario_pedido[CANTIDAD]') ?>
                                                </span>
                                            <?php } ?>
                                </div>
                            </div>



                                <!--  campo guia colores -->
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm"> 
                                        <label class="control-label required" for="formulario_pedido_guiacolores">Guía de Colores<span class="required"> * </span></label>
                                        <select id="formulario_pedido_guiacolores" 
                                                <?php if(form_error('formulario_pedido[GUIACOLORES]') != '' ){?>
                                                    aria-describedby="formulario_pedido_guiacolores-error"
                                                <?php } ?>
                                                 name="formulario_pedido[GUIACOLORES]" class="form-control">  
                                            <option value="clasico">VITA Clásico</option>        
                                            <option value="master">VITA 3D Máster</option>  
                                            <option value="chromascop">Chromascop</option>  
                                            <option value="trubite">Trubite Bioforme</option>                               
                                        </select>

                                        <?php if(form_error('formulario_pedido[GUIACOLORES]') != '' ){?>
                                                    <span id="formulario_pedido_guiacolores-error" class="help-block">
                                                        <?= form_error('formulario_pedido[GUIACOLORES]') ?>
                                                    </span>
                                        <?php } ?>
                                    </div>
                                </div>

                                <!-- campo radio colores -->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-group-sm">                
                                        <label class="control-label required">Color<span class="required"> * </span></label> 
                                        <div class='input-group'>
                                            <label class="checkbox-inline" onclick="mostrarColor1()">
                                                <input type="radio" value="c1" checked="checked" id="formulario_pedido_rc1" name="formulario_pedido[COLOR]" > 1
                                            </label>
                                            <label class="checkbox-inline" onclick="mostrarColor12()">
                                                <input type="radio" value="c2" id="formulario_pedido_rc2" name="formulario_pedido[COLOR]"> 2
                                            </label>
                                            <label class="checkbox-inline" onclick="mostrarColor123()">
                                                <input type="radio" value="c3" id="formulario_pedido_rc3" name="formulario_pedido[COLOR]"> 3
                                            </label>
                                            <label class="checkbox-inline" onclick="ocultarColores()">
                                                <input type="radio" value="sc" id="formulario_pedido_rsc" name="formulario_pedido[COLOR]"> S/C
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!--  campo color 1 -->
                                <div class="col-md-4 col-sm-4 col-xs-4" id="div_color1">
                                        
                                        <select id="formulario_pedido_c1" name="formulario_pedido[COLOR1]" class="form-control" style="height:30px; padding-left:1px">   
                                            <option value=''>N/A</option>                
                                            <option value='A1'>A1</option>
                                            <option value='A2'>A2</option>
                                            <option value='A2.5'>A2.5</option>
                                            <option value='A3'>A3</option>
                                            <option value='A3.5'>A3.5</option>
                                            <option value='A4'>A4</option>
                                            <option value='B1'>B1</option>
                                            <option value='B1.5'>B1.5</option>
                                            <option value='B2'>B2</option>
                                            <option value='B3'>B3</option>
                                            <option value='B4'>B4</option>
                                            <option value='C1'>C1</option>
                                            <option value='C1.5'>C1.5</option>
                                            <option value='C2'>C2</option>
                                            <option value='C3'>C3</option>
                                            <option value='C4'>C4</option>
                                            <option value='D2'>D2</option>
                                            <option value='D3'>D3</option>
                                            <option value='D4'>D4</option>                           
                                        </select>
                                </div>

                                <!--  campo color 2 -->
                                <div class="col-md-4 col-sm-4 col-xs-4" id="div_color2" style="display:none">
                                        
                                        <select id="formulario_pedido_c2" name="formulario_pedido[COLOR2]" class="form-control" style="height:30px; padding-left:1px">
                                            <option value=''>N/A</option>                
                                            <option value='A1'>A1</option>
                                            <option value='A2'>A2</option>
                                            <option value='A2.5'>A2.5</option>
                                            <option value='A3'>A3</option>
                                            <option value='A3.5'>A3.5</option>
                                            <option value='A4'>A4</option>
                                            <option value='B1'>B1</option>
                                            <option value='B1.5'>B1.5</option>
                                            <option value='B2'>B2</option>
                                            <option value='B3'>B3</option>
                                            <option value='B4'>B4</option>
                                            <option value='C1'>C1</option>
                                            <option value='C1.5'>C1.5</option>
                                            <option value='C2'>C2</option>
                                            <option value='C3'>C3</option>
                                            <option value='C4'>C4</option>
                                            <option value='D2'>D2</option>
                                            <option value='D3'>D3</option>
                                            <option value='D4'>D4</option>                         
                                        </select>
                                </div>

                                <!--  campo color 3 -->
                                <div class="col-md-4 col-sm-4 col-xs-4" id="div_color3" style="display:none">
                                        
                                        <select id="formulario_pedido_c3" name="formulario_pedido[COLOR1]" class="form-control" style="height:30px; padding-left:1px">   
                                            <option value=''>N/A</option>                
                                            <option value='A1'>A1</option>
                                            <option value='A2'>A2</option>
                                            <option value='A2.5'>A2.5</option>
                                            <option value='A3'>A3</option>
                                            <option value='A3.5'>A3.5</option>
                                            <option value='A4'>A4</option>
                                            <option value='B1'>B1</option>
                                            <option value='B1.5'>B1.5</option>
                                            <option value='B2'>B2</option>
                                            <option value='B3'>B3</option>
                                            <option value='B4'>B4</option>
                                            <option value='C1'>C1</option>
                                            <option value='C1.5'>C1.5</option>
                                            <option value='C2'>C2</option>
                                            <option value='C3'>C3</option>
                                            <option value='C4'>C4</option>
                                            <option value='D2'>D2</option>
                                            <option value='D3'>D3</option>
                                            <option value='D4'>D4</option>
                                        </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-5 col-xs-12" style="margin-top:3px">
                             <center><img src="<?= base_url('assets/librerias/images/pedido/uncolor.png') ?>" class="img-responsive img-rounded" id="imagen_cant_colores"></center>
                        </div>   
                        
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px">
                            <div class="row">
                                    <!--  campo observaciones -->                        
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                         <div class="control-label" class="form-group form-group-sm">
                                          <label for="formulario_pedido_tipoanticipo">Actividades:</label>
                                          <textarea class="form-control" rows="3" id="observaciones"  name="formulario_pedido[OBSERVACIONES]" class="form-control"></textarea><br><br>
                                        </div>
                                    </div>
                            </div>                
                        </div> 

                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px">
                            <div class="row">
                                <div class="form-group form-group-sm">
                                    <button id="btn-modal-producto" type="button" class="btn btn-primary pull-right" onclick="adicionarProducto();">
                                          <span class="glyphicon glyphicon-plus"></span> <span id="nombre-btn-modal-producto">Adicionar</span> 
                                    </button>   <br><br>             
                                </div>
                            </div>                
                        </div>                          
                    </div>
                </div>
            </div>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <input type='button' class='btn btn-primary' value='Adicionar Producto' onclick="adicionarProducto()" /> -->
          </div>
        </div>

      </div>
    </div>
<!--fin ventana modal para adicionar productos-->


<!--ventana modal para productos-->
        <div class="modal fade" id="modal-producto">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Seleccione un producto</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        <?php 
                            $titulos =array();
                            for($i=0; $i<count($productos); $i++)
                            {
                                $usuario = $productos[$i]['USUARIO_NOMBRE'];
                                $perfil  = $productos[$i]['PERFIL_NOMBRE'];

                                if(!in_array($perfil, $titulos))
                                {
                                    array_push($titulos, $perfil);
                         ?>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <h5 class="form-section"><?php echo $perfil; ?></h5>
                                        <?php
                                            for($j=0; $j<count($productos); $j++)
                                            {
                                                if($productos[$j]['PERFIL_NOMBRE']== $perfil)
                                                {    
                                        ?>
                                                    <label>
                                                        <input type="radio" value="<?php echo $productos[$j]['USUARIO_NOMBRE']; ?>" name="r_item" style="margin-top: -10px">
                                                        <?php echo $productos[$j]['USUARIO_NOMBRE']; ?>
                                                    </label><br>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>                               
                        <?php
                                }
                            }
                        ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="seleccionarProducto()" >Seleccionar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para productos-->

<!--ventana modal para observaciones-->
        <div class="modal fade" id="modal-observaciones">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Observaciones</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                         <p id="cuerpo-modal-observaciones" style="text-align:justify"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para productos-->

<!--ventana modal para pruebas-->
        <div class="modal fade" id="modal-adicionar-pruebas">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Adicionar Prueba</h4>
                    </div>
                    <div class="modal-body" style="height:auto">
                    <br>
                    <!-- campo select de pruebas-->
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12"> 
                                        <label for="formulario_pedido_prueba" style="padding-top:5px">Prueba: </label>
                                </div>                            
                                <div class="col-md-8 col-sm-8 col-xs-12">                                        
                                        <select id="formulario_pedido_prueba" class="form-control" style="height:30px">
                                            <option value="" dias="" fecha="">Seleccione...</option>
                                            <?php 
                                                for ($i=0; $i < count($pruebas); $i++) 
                                                { 
                                             ?>
                                                    <option fechaEntrega="<?php echo $pruebas[$i]['FECHA_ENTREGA']; ?>" nombre="<?php echo $pruebas[$i]['NOMBRE_PRUEBA']; ?>" value="<?php echo $pruebas[$i]['ID_TIPO_PRUEBA']; ?>" fecha="<?php echo $pruebas[$i]['FECHA_CALCULADA']; ?>" dias="<?php echo $pruebas[$i]['DIAS']; ?>">
                                                        <?php echo $pruebas[$i]['NOMBRE_PRUEBA']; ?> 
                                                    </option>
                                            <?php 
                                                }
                                             ?>
                                        </select>
                                </div>
                            </div><br>
                    <!-- campo select de pruebas-->

                    <!-- campo duracion de prueba-->
                            <div class="row" style="margin-top:4px">
                                <div class="col-md-2 col-sm-2 col-xs-12"> 
                                    <label for="" style="padding-top:5px">Duración(días): </label>
                                </div>  
                                <div class="col-md-4 col-sm-4 col-xs-12">                                        
                                        <input readonly="" type="text"  maxlength="2" class="form-control" value="" id="duracion_prueba" style="height:30px">
                                </div>
                            </div><br>
                    <!-- campo duracion de prueba-->

                    <!--campo fecha calculada de prueba-->
                            <div class="row" style="margin-top:4px">
                                <div class="col-md-2 col-sm-2 col-xs-12"> 
                                    <label for=""  style="padding-top:5px">Fecha: </label>
                                </div>  
                                <div class="col-md-4 col-sm-4 col-xs-12">                                        
                                    <div class='input-group'>
                                        <span class="input-group-addon left">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        <input readonly="" value="<?php $fecha = date("Y-m-d"); echo $fecha; ?>" type="text" id="fecha_calculada" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px; "/>
                                    </div>
                                </div>
                            </div> 
                    <!-- campo fecha calculada de prueba-->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="adicionarPrueba()" id="btn-modal-prueba"><span id="nombre-btn-modal-prueba">Seleccionar</span></button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para pruebas-->




<!--ESTILOS-->
    <style type="text/css">
        #btn-corona
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/crown.png') ?>");
        }
        #btn-puente
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/bridge.png') ?>");
        }
        #btn-removible
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/removable.png') ?>");
        }
        #btn-implant
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/implant.png') ?>");
        }
        #btn-appliance
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/appliance.png') ?>");
        }
        #btn-protesis
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/1.png') ?>");
        }
        #btn-add
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/add.png') ?>");
        }

        #contenedor2_1
        {
            height: 458px !important;
            overflow-y: hidden;
            direction: rtl;
        }

        .no-seleccionable
        {
         -webkit-user-select: none;
         -khtml-user-select: none;
         -moz-user-select: none;
         -o-user-select: none;
         -ms-user-select: none;
         user-select: none;
        }

        /*.modal-dialog
        {
            overflow-y: initial !important
        }
        .modal-body
        {
            overflow-y: auto;
        }*/
    </style>
<!-- FIN ESTILOS-->


<form  id="form_pedido" name="formulario_pedido" method="post" action="<?php echo base_url(); ?>index.php/pedido/pedidos/procesarPedido/<?php echo $tipo ?>" enctype="multipart/form-data">

<div class="panel panel-primary" >
    <div class="panel-heading">DATOS DEL <?php if($tipo=='9'){echo 'PRE-PEDIDO';}else{echo 'PEDIDO';}?></div>

        <!-- contenedor 1 -->
            <div id="contenedor1" style="border: 2px solid #018CF1;">
                <div class="row container">
                            <!-- campo cliente -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label required" for="formulario_pedido_cliente">Cliente<span class="required"> * </span></label>                            
                                    <input type="text" id="formulario_pedido_cliente" name="formulario_pedido[CLIENTE]" onblur="validarDatosCont1()" autocomplete="off"
                                            <?php if(form_error('formulario_pedido[CLIENTE]') != '' ){?>
                                            aria-describedby="formulario_pedido_cliente-error"
                                           <?php } ?>
                                           required="required" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" 
                                           />
                                            <?php if(form_error('formulario_pedido[CLIENTE]') != '' ){?>
                                                <span id="formulario_pedido_cliente-error" class="help-block">
                                                    <?= form_error('formulario_pedido[CLIENTE]') ?>
                                                </span>
                                            <?php } ?>
                                </div>
                            </div>

                            <!-- campo nombre paciente -->
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label required" for="formulario_pedido_paciente_nombre">Nombre Paciente<span class="required"> * </span></label>                            
                                    <input type="text" id="formulario_pedido_paciente_nombre" name="formulario_pedido[NOMBREPACIENTE]" onblur="validarDatosCont1()" autocomplete="off"
                                            <?php if(form_error('formulario_pedido[NOMBREPACIENTE]') != '' ){?>
                                            aria-describedby="formulario_pedido_paciente_nombre-error"
                                           <?php } ?>
                                           required="required" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" 
                                           />
                                            <?php if(form_error('formulario_pedido[NOMBREPACIENTE]') != '' ){?>
                                                <span id="formulario_pedido_paciente_nombre-error" class="help-block">
                                                    <?= form_error('formulario_pedido[NOMBREPACIENTE]') ?>
                                                </span>
                                            <?php } ?>
                                </div>
                            </div>

                            <!-- campo nombre paciente -->
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label required" for="formulario_pedido_paciente_apellido">Apellido Paciente<span class="required"> * </span></label>                            
                                    <input type="text" id="formulario_pedido_paciente_apellido" name="formulario_pedido[APELLIDOPACIENTE]" onblur="validarDatosCont1() " autocomplete="off"
                                            <?php if(form_error('formulario_pedido[APELLIDOPACIENTE]') != '' ){?>
                                            aria-describedby="formulario_pedido_paciente_apellido-error"
                                           <?php } ?>
                                           required="required" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" 
                                           />
                                            <?php if(form_error('formulario_pedido[APELLIDOPACIENTE]') != '' ){?>
                                                <span id="formulario_pedido_paciente_apellido-error" class="help-block">
                                                    <?= form_error('formulario_pedido[APELLIDOPACIENTE]') ?>
                                                </span>
                                            <?php } ?>
                                </div>
                            </div>

                            <!-- campo medico tratante -->
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label required" for="formulario_pedido_medicotratante">Medico Tratante<span class="required"> * </span></label>                            
                                    <input type="text" id="formulario_pedido_medicotratante" name="formulario_pedido[MEDICOTRATANTE]" onblur="validarDatosCont1()" onkeyup="validarDatosCont1()" autocomplete="off"
                                            <?php if(form_error('formulario_pedido[MEDICOTRATANTE]') != '' ){?>
                                            aria-describedby="formulario_pedido_medicotratante-error"
                                           <?php } ?>
                                           required="required" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" 
                                           />
                                            <?php if(form_error('formulario_pedido[MEDICOTRATANTE]') != '' ){?>
                                                <span id="formulario_pedido_medicotratante-error" class="help-block">
                                                    <?= form_error('formulario_pedido[MEDICOTRATANTE]') ?>
                                                </span>
                                            <?php } ?>
                                </div>
                            </div>

                            <!-- campo foto paciente -->
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label" for="formulario_pedido_fotopaciente">Foto Paciente</label>                   
                                    <input style="font-size:12px; max-width:95px" type="file" id="formulario_pedido_fotopaciente" name="formulario_pedido[FOTOPACIENTE]" />
                                </div>
                            </div>

                            <!-- campo prioridad -->
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label required">Prioridad<span class="required"> * </span></label> 
                                    <div class='input-group-vertical'>
                                        <label class="checkbox-inline">
                                          <input type="radio" value="NORMAL" checked="checked" id="formulario_pedido_prioridadn" name="formulario_pedido[PRIORIDAD]" > Normal
                                        </label>
                                        <label class="checkbox-inline">
                                          <input type="radio" value="URGENTE" id="formulario_pedido_prioridadu" name="formulario_pedido[PRIORIDAD]"> Urgente
                                        </label>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        <!-- fin contenedor 1 -->

</div><!-- cierre panel -->


<div class="panel panel-primary" id="contenedor-productos-principal">
    <div class="panel-heading">ADICIONAR PRODUCTOS</div>

    <div>
        <div class="row" style="margin-top:3px">
            <!-- contenedor de dientes principal -->
                <div class="col-md-4 col-sm-4 col-xs-12" id="contenedor-dientes-principal">
                    <div align="center">
                        <div class="table-responsive" style="border-right: 1px solid #018CF1;">
                            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash4/cabs/swflash.cab#version=4,0,0,0"> 
                            <param name="MOVIE" value="formulario.swf">
                            <param name="PLAY" value="true">
                            <param name="LOOP" value="true">
                            <param name="QUALITY" value="high">
                            <param name="wmode" value="transparent"></param>

                            <embed src="<?= base_url('assets/librerias/images/swf/formulario.swf')?>" loop="true"  play="true" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi? P1_Prod_Version=ShockwaveFlash" width="313" height="400" wmode="transparent"/>
                            <!-- 313 529-->
                            </object>                        
                        </div>
                    </div>
                </div>
            <!-- fin contenedor de dientes principal -->

            <!-- contenedor de productos -->
                <div class="col-md-8 col-sm-8 col-xs-12" style="margin-left:-15px" id="ajustar-contenedor-productos">
                <div class="table table-responsive" id="div-filas-producto">
                    <table class="table table-condensed table-hover table-striped" id="filas_producto">
                        <tr style="font-weight: bold" >
                            <td>
                                
                            </td>
                            <td>
                                Tipo
                            </td>
                            <td>
                                Diente
                            </td>
                            <td>
                                Producto
                            </td>
                            <td>
                                Cantidad
                            </td>
                            <td>
                                Guía de Color
                            </td>
                            <td>
                                Color
                            </td>
                            <td style="text-align: center">
                                Actv
                            </td>
                            <td style="text-align: center">
                                Editar
                            </td>
                            <td style="text-align: center">
                                Eliminar
                            </td>
                        </tr>
                        <tr class="alert-danger" id="mensaje-tabla-vacia">
                            <td colspan="10">No se ha agregado ningún producto...</td>
                        </tr>
                    </table>
                                <button type="button" class="btn btn-primary pull-left" onclick="mostrarModalProd();" style="margin-top:2px">
                                      <span class="glyphicon glyphicon-plus"></span> Nuevo Producto
                                </button> <br>                 
                </div>

                </div>
            <!-- fin contenedor de productos -->
        </div>
    </div>
</div><!-- cierre panel -->



<!-- FILA DE INVENTARIO, PRUEBAS Y FECHA -->
<div>
    <div class="row">

        <!-- PANEL DE INVENTARIO -->
            <div class="col-md-3 col-sm-3 col-xs-12" id="contenedor-inventario">
                <div class="panel panel-primary">
                <div class="panel-heading">INVENTARIO RECIBIDO</div>
                <div class="panel-body" style="min-height: 365px" id="cuerpo-modal-inventario"> 
                    <div class="row" id="contenido-inventario-pc" style="display:none">
                        <?php 
                            for ($i=0; $i < count($inventario) ; $i++) 
                            { 
                         ?>
                             <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: -7px">   
                                 <div class="form-inline"> 
                                    <input onclick="decrementarInventario('<?php echo $inventario[$i]['id_inventario']; ?>');" type="text" style="height: 16px; width:20px; border:none; cursor:pointer; text-align:center; margin-right: -5px" value="-" class="no-seleccionable btn-primary" onfocus="this.blur()">
                                    <input name="formulario_pedido[INVENTARIO][<?php echo $inventario[$i]['id_inventario']; ?>]" id="<?php echo $inventario[$i]['id_inventario']; ?>"  value="0" style="text-align:center; width:30px; height:16px" readonly="true"/>
                                    <input onclick="incrementarInventario('<?php echo $inventario[$i]['id_inventario']; ?>'); " type="text" style="height: 16px; width:20px; border:none; cursor:pointer; text-align:center; margin-left: -5px" value="+" class="no-seleccionable btn-primary" onfocus="this.blur()">
                                    <label  style="font-size:12px"> &nbsp;&nbsp;&nbsp;<?php echo $inventario[$i]['nombre_inventario']; ?></label> 
                                </div>
                            </div> 
                        <?php 
                            } 
                         ?>
                    </div>

                   <div class="row" id="contenido-inventario-cel" style="display:none">
                        <div class="container">
                            <!--<div class="col-md-2 col-sm-2 col-xs-12">
                                            <div class="form-group form-group-sm">                
                                                <label for="antagonista" >Antagonista</label> 
                                                <div class="input-group">  
                                                    <span class="input-group-addon btn btn-primary btn-sm"  onclick="decrementarInventario('antagonista');">
                                                        <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                                    </span>
                                                    <input name="formulario_pedido[ANTAGONISTA]" id="antagonista" type="text" class="form-control" value="0" style="text-align:center" readonly="true" />
                                                    <span class="input-group-addon btn btn-primary btn-sm"  onclick="incrementarInventario('antagonista');">
                                                        <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                                    </span>
                                                </div>                   
                                            </div>
                            </div>-->
                        <?php 
                            for ($i=0; $i < count($inventario) ; $i++) 
                            { 
                         ?>
                             <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">
                                    <label><?php echo $inventario[$i]['nombre_inventario']; ?></label> 
                                    <div class="input-group">
                                        <span class="input-group-addon btn btn-primary btn-sm"  onclick="decrementarInventario('<?php echo $inventario[$i]['id_inventario']; ?>');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input name="formulario_pedido[INVENTARIO][<?php echo $inventario[$i]['id_inventario']; ?>]" id="<?php echo $inventario[$i]['id_inventario']; ?>" type="text" class="form-control" value="0" style="text-align:center" readonly="true" />
                                        <span class="input-group-addon btn btn-primary btn-sm"  onclick="incrementarInventario('<?php echo $inventario[$i]['id_inventario']; ?>');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>
                                </div>
                            </div> 
                        <?php 
                            } 
                         ?>
                        </div>
                   </div>

                </div>
                </div>
            </div>
        <!-- FIN PANEL DE INVENTARIO -->

        <!-- PANEL DE PRUEBAS -->
            <div class="col-md-6 col-sm-6 col-xs-12" id="contenedor-pruebas">
                <div class="panel panel-primary">
                <div class="panel-heading">PRUEBAS</div>
                <div class="panel-body" style="min-height: 365px"> 

                <div class="table table-responsive">
                    <table class="table table-condensed table-hover table-striped" id="filas_pruebas">
                        <tr style="font-weight: bold" >
                            <td>
                                Prueba
                            </td>
                            <td style="text-align:center">
                                Días
                            </td>
                            <td style="text-align:center">
                                Fecha
                            </td>
                            <td style="text-align:center">
                                Editar
                            </td>
                            <td style="text-align:center">
                                Eliminar
                            </td>
                        </tr>
                        <tr class="alert-danger" id="mensaje-tabla-vacia-pruebas">
                            <td colspan="5">No se ha agregado ninguna prueba...</td>
                        </tr>
                    </table>
                                <button type="button" class="btn btn-primary pull-left" onclick="mostrarModalPrueba();" style="margin-top:2px">
                                      <span class="glyphicon glyphicon-plus"></span> Nueva Prueba
                                </button> <br>                 
                </div>







                </div>
                </div>
            </div>
        <!-- FIN PANEL DE PRUEBAS -->

        <!-- PANEL DE FECHAS -->
            <div class="col-md-3 col-sm-3 col-xs-12" id="contenedor-fechas">
                <div class="panel panel-primary">
                <div class="panel-heading">FECHAS</div>
                <div class="panel-body" style="min-height: 365px"> 

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label">Fecha de Recepción</label>
                        <div class='input-group'>
                            <span  class="input-group-addon left" style="cursor:pointer">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input name="formulario_pedido[FECHA_RECEPCION]" value="<?php $fecha = date("Y-m-d"); echo $fecha; ?>" type="text" id="fecha_recepcion" placeholder="yyyy-mm-dd" class="form-control" style="height:30px; cursor:not-allowed" readonly />   
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label">Fecha de Producción</label>
                        <div class='input-group'>
                            <span class="input-group-addon left" style="cursor:pointer">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input name="formulario_pedido[FECHA_PRODUCCION]" value="" type="text" id="fecha_produccion" placeholder="yyyy-mm-dd" class="form-control" style="height:30px; cursor:not-allowed" readonly/>   
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label">Fecha de Entrega</label>
                        <div class='input-group'>
                            <span onclick="limpiarFecha('fecha_envio')" class="input-group-addon left" style="cursor:pointer">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input name="formulario_pedido[FECHA_ENTREGA]" value="" type="text" id="fecha_envio" placeholder="yyyy-mm-dd" class="form-control" style="height:30px; cursor: not-allowed" readonly/>   
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label">Fecha de Cita</label>
                        <div class='input-group'>
                            <span onclick="limpiarFecha('fecha_cita')" class="input-group-addon left" style="cursor:pointer">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input name="formulario_pedido[FECHA_CITA]" value="" type="text" id="fecha_cita" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly/>   
                        </div>
                    </div>
                </div>

                </div>
                </div>
            </div>
        <!-- FIN PANEL DE FECHAS -->

    </div>
</div>


<!-- INVENTARIO RECIBIDO PARA RESOLUCION DE TELEFONO

    <div class="panel panel-primary" id="contenedor-inventario">
    <div class="panel-heading">INVENTARIO RECIBIDO</div>
    <div class="panel-body">

        <div class="row">
            <div class="container">
                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="antagonista" >Antagonista</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm"  onclick="decrementarInventario('antagonista');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="antagonista" type="text" class="form-control" value="0" style="text-align:center" readonly="true" />
                                        <span class="input-group-addon btn btn-primary btn-sm"  onclick="incrementarInventario('antagonista');">
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="registromordida" >Registro de Mordida</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('registromordida');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="registromordida" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('registromordida');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="modeloprovicionales" >Modelo de Provicionales</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('modeloprovicionales');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="modeloprovicionales" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('modeloprovicionales');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="impresiondefinitiva" >Impresión Definitiva</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('impresiondefinitiva');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="impresiondefinitiva" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('impresiondefinitiva');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="cubetas" >Cubetas</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('cubetas');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="cubetas" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('cubetas');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="articulador" >Articulador</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('articulador');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="articulador" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('articulador');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="arcofacial" >Arco Facial</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('arcofacial');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="arcofacial" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('arcofacial');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="analogos" >Análogos</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('analogos');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="analogos" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('analogos');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="abutment" >Abutment</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('abutment');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="abutment" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('abutment');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="transfer" >Transfer</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('transfer');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="transfer" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('transfer');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="tpasantes" >Tornillos Pasantes</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('tpasantes');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="tpasantes" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('tpasantes');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="fdigital" >Fotografía Digital</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('fdigital');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="fdigital" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('fdigital');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="colorimetro" >Colorímetro</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('colorimetro');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="colorimetro" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('colorimetro');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="mduralay" >Matriz en Duralay</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('mduralay');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="mduralay" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('mduralay');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="cajaarticulador" >Caja del Articulador</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('cajaarticulador');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="cajaarticulador" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('cajaarticulador');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="ucla" >UCLA</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('ucla');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="ucla" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('ucla');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="tibase" >TI Base</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('tibase');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="tibase" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('tibase');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="dsd" >DSD <span style="font-size:12px">(Digital Smile Design)</span></label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('dsd');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="dsd" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('dsd');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label for="multiunit" >Multi Unit</label> 
                                    <div class="input-group">  
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="decrementarInventario('multiunit');">
                                            <span style="color: white" class=" glyphicon glyphicon-minus"></span> 
                                        </span>
                                        <input id="multiunit" type="text" class="form-control" value="0" style="text-align:center" readonly="true"/>
                                        <span class="input-group-addon btn btn-primary btn-sm" onclick="incrementarInventario('multiunit');" >
                                            <span style="color: white" class=" glyphicon glyphicon-plus"></span> 
                                        </span>
                                    </div>                   
                                </div>
                </div>

                </div>
            </div>
        </div>

    </div>
    </div>
-->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" >
        <div  class="modal-footer">
            <button type="button" class="btn btn-primary btn-sm" onclick="$(location).attr('href','<?php echo base_url(); ?>index.php/index');">CANCELAR</button>
            <button type="button" class="formulario_pedido btn-primary btn btn-sm" onclick="guardarPedido()">GUARDAR PEDIDO</button>
        </div>

  
    </div>
</div>

<input name="formulario_pedido[PRODUCTOS]" type="hidden" id="campo_productos" /> 
<input name="formulario_pedido[PRUEBAS]" type="hidden" id="campo_pruebas" />   

</form>

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

    function limpiarFecha(id){ $("#"+id).val("");}

    function getSize() 
    {
              var myWidth = 0, myHeight = 0;
              if( typeof( window.innerWidth ) == 'number' ) 
              {
                //No-IE
                myWidth = window.innerWidth;
                myHeight = window.innerHeight;
              } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) 
              {
                //IE 6+
                myWidth = document.documentElement.clientWidth;
                myHeight = document.documentElement.clientHeight;
              } 
              else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
                //IE 4 compatible
                myWidth = document.body.clientWidth;
                myHeight = document.body.clientHeight;
              }
              return myWidth;
    } 

    function ajustarContenidoSegunResolucion()
    {
        if (getSize()<768) 
        {
            $("#ajustar-contenedor-productos").attr("style","");
        }
        else
        {
            $("#ajustar-contenedor-productos").attr("style","margin-left:-15px");
        }
    }

    function ajustarContenidoInventarioSegunResolucion()
    {
        if (getSize()<768) 
        {
            $("#contenido-inventario-cel").attr("style","display:block");
            $("#contenido-inventario-pc").remove();
        }
        else
        {
            $("#contenido-inventario-pc").attr("style","display:block");
            $("#contenido-inventario-cel").remove();
        }
    }

    $( window ).resize(function() 
    {
      ajustarContenidoSegunResolucion();
    });

    window.onload=function alcargar()
    {
        //deshabilito los contenedores
        deshabilitarContenedor("contenedor2");  //categorias
        deshabilitarContenedor("contenedor3");  //dientes
        deshabilitarContenedor("contenedor4");  //prod-colores

        deshabilitarContenedor("contenedor-productos-principal");  //prod-principal



        deshabilitarContenedor("contenedor-inventario");
        deshabilitarContenedor("contenedor-pruebas");
        deshabilitarContenedor("contenedor-fechas");

        activarContenedor("contenedor1");
        ajustarContenidoSegunResolucion();
        ajustarContenidoInventarioSegunResolucion();
    }


    function incrementarInventario(inv)
    {
       var valor_actual = $("#"+inv).val().trim();

       //si no hay un numero entonces pongo cero
       if(isNaN(valor_actual))
          $("#"+inv).val("0");
      else
      {
        valor_actual= parseInt(valor_actual)+1;
        $("#"+inv).val(valor_actual);
      }
    }

    function decrementarInventario(inv)
    {
       var valor_actual = $("#"+inv).val().trim();

       //si no hay un numero entonces pongo cero
       if(isNaN(valor_actual))
          $("#"+inv).val("0");
      else if(parseInt(valor_actual)>0)
      {
        valor_actual= parseInt(valor_actual)-1;
        $("#"+inv).val(valor_actual);
      }
    }

    function deshabilitarContenedor(cont)
    {      
        if(cont=="contenedor4")
        {
            $("#formulario_pedido_item").attr("disabled", true);
            $("#formulario_pedido_guiacolores").attr("disabled", true);

            $("#formulario_pedido_rc1").attr("disabled", true);
            $("#formulario_pedido_rc2").attr("disabled", true);
            $("#formulario_pedido_rc3").attr("disabled", true);

            $("#formulario_pedido_c1").attr("disabled", true);
            $("#formulario_pedido_c1").attr("disabled", true);
            $("#formulario_pedido_c1").attr("disabled", true);

            $("#observaciones").attr("disabled", true);
        }
        else
        {
            //deshabilito todos los hijos
            var nodes = document.getElementById(cont).getElementsByTagName('*');
            for(var i = 0; i < nodes.length; i++)
            {
                 nodes[i].disabled = true;
            }            
        }



        //pongo el borde gris
        if(cont=="contenedor1" || cont=="contenedor2" || cont=="contenedor3" || cont=="contenedor4")
        {
            if(cont=="contenedor2")
                $("#"+cont).attr("style","border: 2px solid gray; background-color: transparent; text-align:center; opacity:0.2");
            else if(cont=="contenedor3")
                $("#"+cont).attr("style","border: 2px solid gray; background-color: transparent; opacity:0.2;visibility:hidden");
            else
                $("#"+cont).attr("style","border: 2px solid gray; background-color: transparent; opacity:0.2");
        }
        else
        {
           $("#"+cont).attr("style","opacity:0.2");  
        }
    }

    function activarContenedor(cont)
    {
        if(cont=="contenedor4")
        {
            $("#formulario_pedido_item").attr("disabled", false);
            $("#formulario_pedido_guiacolores").attr("disabled", false);

            $("#formulario_pedido_rc1").attr("disabled", false);
            $("#formulario_pedido_rc2").attr("disabled", false);
            $("#formulario_pedido_rc3").attr("disabled", false);

            $("#formulario_pedido_c1").attr("disabled", false);
            $("#formulario_pedido_c1").attr("disabled", false);
            $("#formulario_pedido_c1").attr("disabled", false);

            $("#observaciones").attr("disabled", false);
        }
        else
        {
            //habilito todos los hijos
            var nodes = document.getElementById(cont).getElementsByTagName('*');
            for(var i = 0; i < nodes.length; i++)
            {
                 nodes[i].disabled = false;
            }
           
        }

        //aplico el borde para dejar seleccionada el area
        if(cont=="contenedor1" || cont=="contenedor2" || cont=="contenedor3" || cont=="contenedor4")
        {
            if(cont=="contenedor2")
                $("#"+cont).attr("style","border: 2px solid #018CF1; background-color: #CDECFF; text-align:center; opacity:1");
            else if(cont=="contenedor3")
                $("#"+cont).attr("style","border: 2px solid #018CF1; background-color: #CDECFF; opacity:1;visibility:visible");
            else
                $("#"+cont).attr("style","border: 2px solid #018CF1; background-color: #CDECFF; opacity:1");
        }
        else
        {
           $("#"+cont).attr("style","opacity:1");  
        }
    }

    function validarDatosCont1()
    {
        var clte = $("#formulario_pedido_cliente").val().trim();
        var pac_nom=$("#formulario_pedido_paciente_nombre").val().trim();
        var pac_ape=$("#formulario_pedido_paciente_apellido").val().trim();
        var med_tra=$("#formulario_pedido_medicotratante").val().trim();

        if(clte!="" && pac_nom!="" && pac_ape!="" && med_tra!="")
        {
            activarContenedor("contenedor-productos-principal"); //border: 2px solid #018CF1; background-color: #CDECFF;
            $("#contenedor1").attr("style","");
            $("#contenedor-productos-principal").attr("style","border: 2px solid #018CF1;background-color: #CDECFF");
        }
    }





    //TRABAJANDO CON MODAL DE PRODUCTO
    function mostrarModalProd()
    {
        $("#contenedor-dientes-principal").attr("style","visibility:hidden");

        //DESHABILITO CONT3-4
        deshabilitarContenedor("contenedor3");
        deshabilitarContenedor("contenedor4");

        activarContenedor("contenedor2");


        $("#modal-adicionar-producto").modal('show');
    }

    //ONHIDDEN modal adicionar producto
    $("#modal-adicionar-producto").on('hidden.bs.modal', function () 
    {
        //muestro el swf
        $("#contenedor-dientes-principal").attr("style","visibility:visible");

        limpiarModalAdicionarPro();
        activarCategorias();

        //cambio el nombre del boton ACTUALIZAR por ADICIONAR 
        $("#nombre-btn-modal-producto").html(" Adicionar");

        //cambio el evento del boton por actualizarPedido(), esta funcion borra la fila y adiciona el pedido
        $("#btn-modal-producto").attr("onclick","adicionarProducto();");

        cargarColores("clasico");

    });

    //MANIPULO SCROLL DE CATEGORIAS
    function scrollDiv(x, y) 
    {
        document.getElementById("contenedor2_1").scrollTop += x;
        document.getElementById("contenedor2_1").scrollLeft += y;
    }

    //ACTIVAR UNA CATEGORIA
    function activarCategoria(id)
    {
        var nombre = $('#'+id).attr("nombre");
        desactivarCategorias(nombre);

        //si no esta activado el swf lo activo
        activarContenedor("contenedor3");
        activarContenedor("contenedor4");

        //quito borde contenedor 2 y tres
         $("#contenedor2").attr("style","background-color: transparent; opacity:1; border:none; text-align:center");
         $("#contenedor3").attr("style","background-color: transparent; opacity:1; border:none;");
    }

    //ACTIVAR TODAS LAS CATEGORIA
    function activarCategorias(id)
    {
        var btn_catego = $('.categ');
        var base = '<?= base_url('assets/librerias/images/pedido/') ?>'; 

        var base = '<?= base_url('assets/librerias/images/pedido/') ?>'; 
        btn_catego.each(function()
        {
            var nombre = $(this).attr("nombre");
                var url = base+'/'+nombre+'.png';
                $(this).css("background-image", "url("+url+")");  
        });
    }


    //DESACTIVO LAS CATEGORIAS EXCEPTO LA PASADA POR PARAMETRO
    function desactivarCategorias(pnombre)
    {
        var btn_catego = $('.categ');

        var base = '<?= base_url('assets/librerias/images/pedido/') ?>'; 
        btn_catego.each(function()
        {
            var nombre = $(this).attr("nombre");

            if(nombre!=pnombre)
            {
                var url = base+'/'+nombre+'sc.png';
                $(this).css("background-image", "url("+url+")");  
            }
            else
            {
                var url = base+'/'+nombre+'.png';
                $(this).css("background-image", "url("+url+")");  
            }
        });

    }

    //mustro el modal de selecccion de item sobre el modal actual
    function buscarItems()
    {
        //oculto el swf(sin ocupar su espacio), porque se superpone en el modal;
        $("#contenedor3").attr("style","visibility:hidden");
        $("#modal-producto").modal('show');
    }

    //onhidden modal producto
    $("#modal-producto").on('hidden.bs.modal', function () 
    {
        //muestro el swf
        $("#contenedor3").attr("style","visibility:visible");
    });

    //TOMO EL ITEM SELECCIONADO
    function seleccionarProducto()
    {
        var item = $("input[name='r_item']:checked").val(); 

        if(item==null)
        {
            var text = 'NO ha seleccionado el producto';
            $.notific8(text, params); 
            return;
        }
        else
        {
            $("#formulario_pedido_item").val(item);
            $('#modal-producto').modal('hide');
        }       
    }


    function ocultarColores()
    {
        $("#div_color1").attr("style","display:none");
        $("#div_color2").attr("style","display:none");
        $("#div_color3").attr("style","display:none");

         $("#imagen_cant_colores").attr("style","display:none");
    }

    function mostrarColor1()
    {
        ocultarColores();
        $("#div_color1").attr("style","display:block");

        //pongo la imagen de un color
        $("#imagen_cant_colores").attr("src","<?= base_url('assets/librerias/images/pedido/uncolor.png') ?>");
        $("#imagen_cant_colores").attr("style","display:block");
    }

    function mostrarColor12()
    {
        ocultarColores();
        $("#div_color1").attr("style","display:block");
        $("#div_color2").attr("style","display:block");

        //pongo la imagen de un color
        $("#imagen_cant_colores").attr("src","<?= base_url('assets/librerias/images/pedido/doscolores.png') ?>");
        $("#imagen_cant_colores").attr("style","display:block");
    }

    function mostrarColor123()
    {
        ocultarColores();
        $("#div_color1").attr("style","display:block");
        $("#div_color2").attr("style","display:block");
        $("#div_color3").attr("style","display:block");

        //pongo la imagen de un color
        $("#imagen_cant_colores").attr("src","<?= base_url('assets/librerias/images/pedido/trescolores.png') ?>");
        $("#imagen_cant_colores").attr("style","display:block");
    }

    $("#formulario_pedido_guiacolores").change(function()
    {
        var guiaColores = $("#formulario_pedido_guiacolores").val();
        cargarColores(guiaColores);  
    });

    function cargarColores(guiaColores)
    {
        if(guiaColores== "clasico" )
        {           
            var cadena_html="<option value=''>N/A</option>"                
                            +"<option value='A1'>A1</option>"
                            +"<option value='A2'>A2</option>"
                            +"<option value='A2.5'>A2.5</option>"
                            +"<option value='A3'>A3</option>"
                            +"<option value='A3.5'>A3.5</option>"
                            +"<option value='A4'>A4</option>"
                            +"<option value='B1'>B1</option>"
                            +"<option value='B1.5'>B1.5</option>"
                            +"<option value='B2'>B2</option>"
                            +"<option value='B3'>B3</option>"
                            +"<option value='B4'>B4</option>"
                            +"<option value='C1'>C1</option>"
                            +"<option value='C1.5'>C1.5</option>"
                            +"<option value='C2'>C2</option>"
                            +"<option value='C3'>C3</option>"
                            +"<option value='C4'>C4</option>"
                            +"<option value='D2'>D2</option>"
                            +"<option value='D3'>D3</option>"
                            +"<option value='D4'>D4</option>";
            $("#formulario_pedido_c1").html(cadena_html);
            $("#formulario_pedido_c2").html(cadena_html);
            $("#formulario_pedido_c3").html(cadena_html);
        }
        else if(guiaColores=="master" )
        {           
            var cadena_html="<option value=''>N/A</option>"
                            +"<option value='1M1'>1M1</option>"
                            +"<option value='1M2'>1M2</option>"
                            +"<option value='2L1.5'>2L1.5</option>"
                            +"<option value='2L2.5'>2L2.5</option>"
                            +"<option value='2M1'>2M1</option>"
                            +"<option value='2M2'>2M2</option>"
                            +"<option value='2M3'>2M3</option>"
                            +"<option value='2R1.5'>2R1.5</option>"
                            +"<option value='2R2.5'>2R2.5</option>"
                            +"<option value='3L1.5'>3L1.5</option>"
                            +"<option value='3L2.5'>3L2.5</option>"
                            +"<option value='3M1'>3M1</option>"
                            +"<option value='3M2'>3M2</option>"
                            +"<option value='3M3'>3M3</option>"
                            +"<option value='3R1.5'>3R1.5</option>"
                            +"<option value='3R2.5'>3R2.5</option>"
                            +"<option value='4L1.5'>4L1.5</option>"
                            +"<option value='4L2.5'>4L2.5</option>"
                            +"<option value='4M1'>4M1</option>"
                            +"<option value='4M2'>4M2</option>"
                            +"<option value='4M3'>4M3</option>"
                            +"<option value='4R1.5'>4R1.5</option>"
                            +"<option value='4R2.5'>4R2.5</option>"
                            +"<option value='5M1'>5M1</option>"
                            +"<option value='5M2'>5M2</option>"
                            +"<option value='5M3'>5M3</option>";             

            $("#formulario_pedido_c1").html(cadena_html);
            $("#formulario_pedido_c2").html(cadena_html);
            $("#formulario_pedido_c3").html(cadena_html);
        }
        else if(guiaColores=="chromascop" )
        {           
            var cadena_html="<option value=''>N/A</option>"
                            +"<option disabled='' value='-1'>== Bleach Shade Group ==</option>"
                            +"<option value='8'>-8</option>"
                            +"<option value='16'>-16</option>"
                            +"<option value='24'>-24</option>"
                            +"<option value='32'>-32</option>"
                            +"<option disabled='' value='-1'>== Shade Group 100 ==</option>"
                            +"<option value='01/110'>- 01/110</option>"
                            +"<option value='1A/120'>- 1A/120</option>"
                            +"<option value='2A/130'>- 2A/130</option>"
                            +"<option value='1C/140'>- 1C/140</option>"
                            +"<option disabled='' value='-1'>== Shade Group 200 ==</option>"
                            +"<option value='2B/210'>- 2B/210</option>"
                            +"<option value='1D/220'>- 1D/220</option>"
                            +"<option value='1E/230'>- 1E/230</option>"
                            +"<option value='2C/240'>- 2C/240</option>"
                            +"<option disabled='' value='-1'>== Shade Group 300 ==</option>"
                            +"<option value='3A/310'>- 3A/310</option>"
                            +"<option value='5B/320'>- 5B/320</option>"
                            +"<option value='2E/330'>- 2E/330</option>"
                            +"<option value='3E/340'>- 3E/340</option>"
                            +"<option disabled='' value='-1'>== Shade Group 400 ==</option>"
                            +"<option value='4A/410'>- 4A/410</option>"
                            +"<option value='6B/420'>- 6B/420</option>"
                            +"<option value='4B/430'>- 4B/430</option>"
                            +"<option value='6C/440'>- 6C/440</option>"
                            +"<option disabled='' value='-1'>== Shade Group 500 ==</option>"
                            +"<option value='6D/510'>- 6D/510</option>"
                            +"<option value='4C/520'>- 4C/520</option>"
                            +"<option value='3C/530'>- 3C/530</option>"
                            +"<option value='4D/540'>- 4D/540</option>";

            $("#formulario_pedido_c1").html(cadena_html);
            $("#formulario_pedido_c2").html(cadena_html);
            $("#formulario_pedido_c3").html(cadena_html);
        }
        else if(guiaColores=="trubite" )
        {           
            var cadena_html="<option value=''>N/A</option>"
                            +"<option value='B-51'>B-51</option>"
                            +"<option value='B-52'>B-52</option>"
                            +"<option value='B-53'>B-53</option>"
                            +"<option value='B-54'>B-54</option>"
                            +"<option value='B-55'>B-55</option>"
                            +"<option value='B-56'>B-56</option>"
                            +"<option value='B-59'>B-59</option>"
                            +"<option value='B-62'>B-62</option>"
                            +"<option value='B-63'>B-63</option>"
                            +"<option value='B-65'>B-65</option>"
                            +"<option value='B-66'>B-66</option>"
                            +"<option value='B-67'>B-67</option>"
                            +"<option value='B-69'>B-69</option>"
                            +"<option value='B-77'>B-77</option>"
                            +"<option value='B-81'>B-81</option>"
                            +"<option value='B-83'>B-83</option>"
                            +"<option value='B-84'>B-84</option>"
                            +"<option value='B-85'>B-85</option>"
                            +"<option value='B-91'>B-91</option>"
                            +"<option value='B-92'>B-92</option>"
                            +"<option value='B-93'>B-93</option>"
                            +"<option value='B-94'>B-94</option>"
                            +"<option value='B-95'>B-95</option>"
                            +"<option value='B-96'>B-96</option>";

            $("#formulario_pedido_c1").html(cadena_html);
            $("#formulario_pedido_c2").html(cadena_html);
            $("#formulario_pedido_c3").html(cadena_html);
        }
    }

    var identificador_filas=0;
    var arreglo_identificadores_filas = [];
    function adicionarProducto()
    {
        var dientes ="1,2,3";
        var categoria = "corona";
        var producto_seleccionado =$("#formulario_pedido_item").val();
        var cantidad=$("#formulario_pedido_cantidad").val().trim();
        var guia_colores = $("#formulario_pedido_guiacolores").val();
        var cant_corlores = $("input[name='formulario_pedido[COLOR]']:checked").val();
        var actividades = $("#observaciones").val().trim();


        var colores = "";

        if(producto_seleccionado=="")
        {
            var text = 'Seleccione un PRODUCTO';
            $.notific8(text, params); 
            return;
        }
        else if(cantidad=="")
        {
            var text = 'El campo Cantidad es obligatorio';
            $.notific8(text, params); 
            return; 
        }
        else if(isNaN(cantidad))
        {
            var text = 'El campo Cantidad debe ser numérico';
            $.notific8(text, params); 
            return; 
        }
        else if(guia_colores=="")
        {
            var text = 'Seleccione una GUIA DE COLOR';
            $.notific8(text, params); 
            return; 
        }
        else if(cant_corlores=="c1")
        {
            colores = $("#formulario_pedido_c1").val();
            if($("#formulario_pedido_c1").val()=="")
            {
                var text = 'Seleccione COLOR UNO';
                $.notific8(text, params); 
                return; 
            }
        }
        else if(cant_corlores=="c2")
        {
            colores += $("#formulario_pedido_c1").val()+','+ $("#formulario_pedido_c2").val();
            if($("#formulario_pedido_c1").val()=="")
            {
                var text = 'Seleccione COLOR UNO';
                $.notific8(text, params); 
                return; 
            }
            else if($("#formulario_pedido_c2").val()=="")            
            {
                var text = 'Seleccione COLOR DOS';
                $.notific8(text, params); 
                return; 
            }
        }
        else if(cant_corlores=="c3")
        {
            colores += $("#formulario_pedido_c1").val()+','+ $("#formulario_pedido_c2").val()+','+ $("#formulario_pedido_c3").val();
            if($("#formulario_pedido_c1").val()=="")
            {
                var text = 'Seleccione COLOR UNO';
                $.notific8(text, params); 
                return; 
            }
            else if($("#formulario_pedido_c2").val()=="")            
            {
                var text = 'Seleccione COLOR DOS';
                $.notific8(text, params); 
                return; 
            }
            else if($("#formulario_pedido_c3").val()=="")            
            {
                var text = 'Seleccione COLOR TRES';
                $.notific8(text, params); 
                return; 
            }
        }

        //ADICIONO UNA LINEA DE PRODUCTO
         $("#contenedor-productos-principal").attr("style","");
        activarContenedor("contenedor-inventario");
        activarContenedor("contenedor-pruebas");
        activarContenedor("contenedor-fechas");

        var cadena_html='<tr class="filas_producto" id="'+'f'+identificador_filas+'">'
                            +'<td>'
                                 +'img'
                            +'</td>'
                            +'<td  id="'+'catf'+identificador_filas+'">'
                                +categoria
                            +'</td>'
                            +'<td  id="'+'dief'+identificador_filas+'">'
                                +dientes
                            +'</td>'
                            +'<td  id="'+'prof'+identificador_filas+'">'
                                +producto_seleccionado
                            +'</td>'
                            +'<td  id="'+'canf'+identificador_filas+'">'
                                +cantidad
                            +'</td>'
                            +'<td  id="'+'guif'+identificador_filas+'">'
                                +guia_colores
                            +'</td>'
                            +'<td  id="'+'colf'+identificador_filas+'">'
                                +colores
                            +'</td>'
                            +'<td>'
                                +'<center><button type="button" class="btn btn-primary btn-xs" style="width:50px" onclick="verObsFila(this.id)" id="'+'obsf'+identificador_filas+'" observaciones="'+actividades+'">'
                                      +'<span class="glyphicon glyphicon-comment"></span>'
                                +'</button></center>'
                            +'</td>'
                            +'<td>'
                                +'<center><button type="button" class="btn btn-primary btn-xs" style="width:50px" onclick="editarFila(this.id)" id="'+'editarf'+identificador_filas+'" >'
                                      +'<span class="glyphicon glyphicon-pencil"></span>'
                                +'</button></center>'
                            +'</td>'
                            +'<td>'
                                +'<center><button type="button" class="btn btn-danger btn-xs" style="width:50px" onclick="eliminarFila(this.id)" id="'+'eliminarf'+identificador_filas+'" >'
                                      +'<span class="glyphicon glyphicon-trash"></span>'
                                +'</button></center>'
                            +'</td>'
                        +'</tr>';        
        arreglo_identificadores_filas.push(identificador_filas);
        identificador_filas++;

        $("#mensaje-tabla-vacia").remove();
        $("#filas_producto").append(cadena_html);
        $('#modal-adicionar-producto').modal('hide');
    }

    function editarFila(id)
    {
        var fila = id.substring(6, id.length);

        //tomo los datos de la fila
        var dientes = $("#die"+fila).html().trim();
        var categoria = $("#cat"+fila).html().trim();
        var producto_seleccionado =$("#pro"+fila).html().trim();
        var cantidad =$("#can"+fila).html().trim();
        var guia_colores =$("#gui"+fila).html().trim();
        var colores = $("#col"+fila).html().trim();
        var actividades = $("#obs"+fila).attr("observaciones").trim();


        //cargo los datos en el modal
        $("#formulario_pedido_cantidad").val(cantidad);
        $("#formulario_pedido_item option[value='"+producto_seleccionado+"']").prop('selected', true);
        $("#formulario_pedido_guiacolores option[value='"+guia_colores+"']").prop('selected', true);

        //cargo los colores segun la guia
        cargarColores(guia_colores);

        if(colores.trim()=="")//marco el radio sc
        {
            $("#formulario_pedido_rsc").prop('checked', true);
        }
        else
        {
             var arreglo_colores = colores.split(",");

             if(arreglo_colores.length==1)
             {
                var col = arreglo_colores[0];
                 $("#formulario_pedido_rc1").prop('checked', true);
                 $("#formulario_pedido_c1 option[value='"+col+"']").prop('selected', true);                 
             }
             else if(arreglo_colores.length==2)
             {
                var col1 = arreglo_colores[0];
                var col2 = arreglo_colores[1];
                 $("#formulario_pedido_rc2").prop('checked', true);
                 $("#formulario_pedido_c1 option[value='"+col1+"']").prop('selected', true); 
                 $("#formulario_pedido_c2 option[value='"+col2+"']").prop('selected', true);  

                 $("#div_color2").attr('style', "display:block"); 
             }
             else if(arreglo_colores.length==3)
             {
                var col1 = arreglo_colores[0];
                var col2 = arreglo_colores[1];
                var col3 = arreglo_colores[2];
                 $("#formulario_pedido_rc3").prop('checked', true);
                 $("#formulario_pedido_c1 option[value='"+col1+"']").prop('selected', true); 
                 $("#formulario_pedido_c2 option[value='"+col2+"']").prop('selected', true);  
                 $("#formulario_pedido_c3 option[value='"+col3+"']").prop('selected', true);

                 $("#div_color2").attr('style', "display:block"); 
                 $("#div_color3").attr('style', "display:block");
             }

        }
        $("#observaciones").val(actividades);


        //cambio el nombre del boton ADICIONAR por ACTUALIZAR
        $("#nombre-btn-modal-producto").html("Actualizar");

        //cambio el evento del boton por actualizarProducto(), esta funcion borra la fila y adiciona el pedido
        $("#btn-modal-producto").attr("onclick","actualizarProducto('"+fila+"')");

        //muestro el modal de edicion con la data cargada
        $("#modal-adicionar-producto").modal('show');
    }

     function editarFilaP(id)
    {
        var fila = id.substring(6, id.length);

        //tomo los datos de la fila
        var prueba = $("#pru"+fila).html().trim();
        var id = $("#pru"+fila).attr("ide").trim();
        var duracion =$("#dur"+fila).html().trim();
        var fecha =$("#fec"+fila).html().trim();

        //cargo los datos en el modal
        $("#formulario_pedido_prueba option[value='"+id+"']").prop('selected', true);
        $("#duracion_prueba").val(duracion);
        $("#fecha_calculada").val(fecha);



        //cambio el nombre del boton ADICIONAR por ACTUALIZAR
        $("#nombre-btn-modal-prueba").html("Actualizar");

        //cambio el evento del boton por actualizarProducto(), esta funcion borra la fila y adiciona el pedido
        $("#btn-modal-prueba").attr("onclick","actualizarPrueba('"+fila+"')");

        //muestro el modal de edicion con la data cargada
        $("#modal-adicionar-pruebas").modal('show');
    }

    function eliminarFila(id)
    {
        var fila = id.substring(8, id.length);
        var identificador_fila = id.substring(9, id.length);

        $("#"+fila).remove();

        var cant_filas=$("#filas_producto tr").length;

        if(cant_filas==1)
        {
            var cadena_html='<tr class="alert-danger" id="mensaje-tabla-vacia">'
                            +'<td colspan="10">No se ha agregado ningún producto...</td>'
                        +'</tr>';  
             $("#filas_producto").append(cadena_html);  
        }

        //busco el indicador de fila y lo elimino
        for(var i=0;i<arreglo_identificadores_filas.length;i++)
        {
            if(arreglo_identificadores_filas[i]==identificador_fila)
            {
                arreglo_identificadores_filas.splice(i,1);
                break;
            }
        }
    }

    function eliminarFilaP(id)//fp0
    {
        var fila = id.substring(8, id.length);
        var identificador_filap = id.substring(10, id.length);

        $("#"+fila).remove();

        var cant_filas=$("#filas_pruebas tr").length;


        if(cant_filas==1)
        {
            var cadena_html='<tr class="alert-danger" id="mensaje-tabla-vacia-pruebas">'
                            +'<td colspan="5">No se ha agregado ninguna prueba...</td>'
                        +'</tr>';  
             $("#filas_pruebas").append(cadena_html);  
        }

        actualizarFechaProd();
        //busco el indicador de fila y lo elimino
        for(var i=0;i<arreglo_identificadores_filasp.length;i++)
        {
            if(arreglo_identificadores_filasp[i]==identificador_filap)
            {
                arreglo_identificadores_filasp.splice(i,1);
                break;
            }
        }


    }
    function limpiarModalAdicionarPro()
    {
        $("#formulario_pedido_cantidad").val("");
        $("#formulario_pedido_item option[value='']").prop('selected', true);
        $("#formulario_pedido_guiacolores option[value='clasico']").prop('selected', true);

        $("#formulario_pedido_c1 option[value='']").prop('selected', true);
        $("#formulario_pedido_c2 option[value='']").prop('selected', true);
        $("#formulario_pedido_c3 option[value='']").prop('selected', true);

        $("#formulario_pedido_rc1").prop('checked', true);
        $("#div_color2").attr('style', "display:none");
        $("#div_color3").attr('style', "display:none");

        $("#observaciones").val("");
    }

    function limpiarModalAdicionarPru()
    {
        $("#formulario_pedido_prueba option[value='']").prop('selected', true);
        $("#duracion_prueba").val("");
        $("#fecha_calculada").val("");
    }

    function verObsFila(id)
    {
        var obs =$("#"+id).attr("observaciones");
        $("#cuerpo-modal-observaciones").html(obs);
        $("#modal-observaciones").modal('show');
    }

    function actualizarProducto(id)//f9
    {
        //busco el indicador de fila y lo elimino
        var identificador_fila = id.substring(1);
        for(var i=0;i<arreglo_identificadores_filas.length;i++)
        {
            if(arreglo_identificadores_filas[i]==identificador_fila)
            {
                arreglo_identificadores_filas.splice(i,1);
                break;
            }
        }

        //BORRO LA FILA
        $("#"+id).remove();

        //ADICIONO EL PRODUCTO
        adicionarProducto();
    }

    function actualizarPrueba(id) //fp0
    {
        //busco el indicador de fila y lo elimino
        var identificador_filap = id.substring(2);
        for(var i=0;i<arreglo_identificadores_filasp.length;i++)
        {
            if(arreglo_identificadores_filasp[i]==identificador_filap)
            {
                arreglo_identificadores_filasp.splice(i,1);
                break;
            }
        }

        //BORRO LA FILA
        $("#"+id).remove();

        //ADICIONO EL PRODUCTO
        adicionarPrueba();
    }

    //TRABAJANDO CON MODAL DE PRUEBAS
    function mostrarModalPrueba()
    {
        $("#contenedor-dientes-principal").attr("style","visibility:hidden");
        $("#modal-adicionar-pruebas").modal('show');
    }

    //onhidden modal prueba
    $("#modal-adicionar-pruebas").on('hidden.bs.modal', function () 
    {
        $("#contenedor-dientes-principal").attr("style","visibility:visible");
        limpiarModalAdicionarPru();

        //cambio el nombre del boton ACTUALIZAR por ADICIONAR 
        $("#nombre-btn-modal-prueba").html(" Adicionar");

        //cambio el evento del boton por actualizarPedido(), esta funcion borra la fila y adiciona el pedido
        $("#btn-modal-prueba").attr("onclick","adicionarPrueba();");
    });

    $("#formulario_pedido_prueba").change(function()
    {
        var valor = $("#formulario_pedido_prueba").val();
        var dias = $("#formulario_pedido_prueba option[value='"+valor+"']").attr("dias");
        var fecha =$("#formulario_pedido_prueba option[value='"+valor+"']").attr("fecha");;

        $("#duracion_prueba").val(dias);
        $("#fecha_calculada").val(fecha);
    });

    identificador_filasp=0;
    arreglo_identificadores_filasp=[];
    function adicionarPrueba()
    {
        var valor =$("#formulario_pedido_prueba").val().trim();
        var prueba = $("#formulario_pedido_prueba option[value='"+valor+"']").attr("nombre");
        var fecha_entrega = $("#formulario_pedido_prueba option[value='"+valor+"']").attr("fechaentrega");
        var duracion = $("#duracion_prueba").val().trim();
        var fecha =$("#fecha_calculada").val().trim();


        if(prueba=="" || duracion =="" || fecha=="" )
        {
            var text = 'Seleccione una PRUEBA';
            $.notific8(text, params); 
            return;
        }
        else
        {
            //ADICIONO UNA LINEA DE PRUEBA
            var cadena_html='<tr id="'+'fp'+identificador_filasp+'">'
                                +'<td ide='+valor+' id="'+'prufp'+identificador_filasp+'">'
                                    +prueba
                                +'</td>'
                                +'<td style="text-align:center" id="'+'durfp'+identificador_filasp+'">'
                                    +duracion
                                +'</td>'
                                +'<td style="text-align:center" id="'+'fecfp'+identificador_filasp+'"  fe="'+fecha_entrega+'">'
                                    +fecha
                                +'</td>'
                                +'<td>'
                                    +'<center><button type="button" class="btn btn-primary btn-xs" style="width:50px" onclick="editarFilaP(this.id)" id="'+'editarfp'+identificador_filasp+'" >'
                                          +'<span class="glyphicon glyphicon-pencil"></span>'
                                    +'</button></center>'
                                +'</td>'
                                +'<td>'
                                    +'<center><button type="button" class="btn btn-danger btn-xs" style="width:50px" onclick="eliminarFilaP(this.id)" id="'+'eliminarfp'+identificador_filasp+'" >'
                                          +'<span class="glyphicon glyphicon-trash"></span>'
                                    +'</button></center>'
                                +'</td>'
                            +'</tr>';
            arreglo_identificadores_filasp.push(identificador_filasp);
            identificador_filasp++;


            $("#mensaje-tabla-vacia-pruebas").remove();
            $("#filas_pruebas").append(cadena_html);
            actualizarFechaProd();
            $('#modal-adicionar-pruebas').modal('hide');
        }
    }

    function actualizarFechaProd()
    {
            //actualizo la fecha de produccion
            var fecha_entrega="";
            var fecha_mayor= "2000-01-01";
            var fechas = $("[id^='fecfp']");
            fechas.each(function()
            {
                var fecha = new Date( $(this).html().trim() );
                var fecha_act = new Date(fecha_mayor);
                if(fecha>fecha_act )
                {   
                    fecha_mayor=$(this).html().trim();
                    fecha_entrega= $(this).attr("fe").trim();
                }
            });
            if(fecha_mayor!="2000-01-01")
            {
                $("#fecha_produccion").val(fecha_mayor);
                $("#fecha_envio").val(fecha_entrega);
            }
            else
            {
                $("#fecha_produccion").val("");
                $("#fecha_envio").val("");
            }
    }


    function guardarPedido()
    {
        //VALIDAR DATOS DEL CLIENTE
        if( $("#formulario_pedido_cliente").val().trim()=="")
        {
            var text = 'El campo CLIENTE es obligatorio';
            $.notific8(text, params); 
            return;
        }
        else if($("#formulario_pedido_paciente_nombre").val().trim()=="")
        {
            var text = 'El campo NOMBRE PACIENTE es obligatorio';
            $.notific8(text, params); 
            return;
        }
        else if($("#formulario_pedido_paciente_apellido").val().trim()=="")
        {
            var text = 'El campo APELLIDO PACIENTE es obligatorio';
            $.notific8(text, params); 
            return;
        }
        else if($("#formulario_pedido_medicotratante").val().trim()=="")
        {
            var text = 'El campo MEDICO TRATANTE es obligatorio';
            $.notific8(text, params); 
            return;
        } 

        //VALIDAR CANT DE PROD
        var filas_producto = $("tr[class=filas_producto]"); //tomo las filas de producto 
        if(filas_producto.length==0)
        {
            var text = 'Debe adicionar al menos un producto';
            $.notific8(text, params); 
            return; 
        }
        else
        {
            //recorro las filas de pedido
            var cadena_producto="";            
            var iterador_arreglo_identificadores_filas=0;
            filas_producto.each(function()
            {
                var iterador =arreglo_identificadores_filas[iterador_arreglo_identificadores_filas];
                var categoria = $("#catf"+iterador).html().trim();
                var dientes = $("#dief"+iterador).html().trim(); 
                var producto = $("#prof"+iterador).html().trim(); 
                var guia_colores = $("#guif"+iterador).html().trim(); 
                var colores = $("#colf"+iterador).html().trim();
                var actividades = $("#obsf"+iterador).attr("observaciones").trim();
                var cantidad = $("#canf"+iterador).html().trim();

                cadena_producto += categoria+"|||"+dientes+"|||"+producto+"|||"+guia_colores+"|||"+colores+"|||"+actividades+"|||"+cantidad+"&&&";
                iterador_arreglo_identificadores_filas++;
            });
            cadena_producto=cadena_producto.substring(0,cadena_producto.length-3);
            $("#campo_productos").val(cadena_producto);
        }     


        //VALIDAR CANT DE PRUEBAS
        var filas_prueba = $("tr[id^='fp']"); //tomo las filas de pruebas 
        if(filas_prueba.length==0)
        {
            var text = 'Debe adicionar al menos una prueba';
            $.notific8(text, params); 
            return; 
        }
        else
        {
            //recorro las filas de prueba
            var cadena_prueba="";
            var iterador_arreglo_identificadores_filasp=0;
            filas_prueba.each(function()
            {
                var iterador =arreglo_identificadores_filasp[iterador_arreglo_identificadores_filasp];
                var prueba = $("#prufp"+iterador).html().trim();
                var dias = $("#durfp"+iterador).html().trim(); 
                var fecha = $("#fecfp"+iterador).html().trim(); //salida de produccion
                var fecha_ent = $("#fecfp"+iterador).attr("fe").trim(); //entrega al cliente
                var id= $("#prufp"+iterador).attr("ide").trim();

                cadena_prueba += prueba+"|||"+dias+"|||"+fecha+"|||"+id+"|||"+fecha_ent+"&&&";
                iterador_arreglo_identificadores_filasp++;
            });
            cadena_prueba=cadena_prueba.substring(0,cadena_prueba.length-3);
            $("#campo_pruebas").val(cadena_prueba);
        }

        $("#form_pedido").submit();
    }





</script>
