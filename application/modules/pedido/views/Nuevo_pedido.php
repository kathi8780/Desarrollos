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
                                <!--<input type="button" value="" id="corona" class="corona_on"/>
                                <input type="button" value="" id="implante" class="implante_off"/>
                                <input type="button" value="" id="puente" class="puente_off"/>
                                <input type="button" value="" id="removible" class="removible_off"/>-->
                                <center><button nombre="crown" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-estetica" style="width:43px; height:43px; border:none;"></button></center>
                                <label>ESTETICA </label>

                                <center><button nombre="bridge" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-metal" style="width:45px; height:45px; border:none"></button></center>
                                <label>METAL / CERAMICA </label>

                                <center><button nombre="removable" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-removible" style="width:45px; height:45px; border:none"></button></center>
                                <label>REMOVABLE </label>

                                <center><button nombre="implant" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-implant" style="width:45px; height:45px; border:none"></button></center>
                                <label>IMPLANTES Y ATACHES </label>

                                <center><button nombre="ferula" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-ferula" style="width:45px; height:45px; border:none"></button></center>
                                <label>FERULA PREVENTIVA </label>

                                <center><button nombre="virtual" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-virtual" style="width:45px; height:45px; border:none"></button></center>
                                <label>VIRTUAL LAB </label>

                                <center><button nombre="impresion" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-print" style="width:45px; height:45px; border:none"></button></center>
                                <label>IMPRESION 3D </label>

                                <center><button nombre="zfx" onclick="activarCategoria(this.id)" type="button" class="btn categ" id="btn-zfx" style="width:45px; height:45px; border:none"></button></center>
                                <label>CENTRO DE FRESADO ZFX</label>
                            </div>
                                <div class="form-horizontal"> 
                                    <button style="width:100%" type="button" class="btn btn-primary btn-xs"  id="btn-scroll-arriba" onclick="scrollDiv(-100,-100)">
                                        <span class="glyphicon glyphicon-triangle-top"></span>
                                    </button>
                                </div>

                        </div>
                </div><!-- fin contenedor 2 -->

                <!-- contenedor 3 -->
                <div class="col-md-4 col-sm-4 col-xs-7" id="contenedor3" style="border: 2px solid gray">
                    <div align="center">
                        <div class="table-responsive">
                            <div id="dientes_all">
                                <div id="svgload" style="width:320px;">
                                    <svg version="1.1" id="sistema_x5F_dental" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="320.097px" height="521.372px" viewBox="0 0 320.097 521.372" enable-background="new 0 0 320.097 521.372" xml:space="preserve">
                                        <g id="mandibula_x5F_superior">
                                            <path fill="#D68D90" d="M301.885,235.844c0,0,12.395-179.204-97.837-210.595c0,0-123.602-38.563-165.019,91.887
                                                c0,0-18.263,40.91-20.872,122.533c0,0,3.914,14.44,31.308,13.787h226.332C275.797,253.456,302.538,250.193,301.885,235.844z"/>
                                            <path fill="#D48889" d="M230.796,169.216c0,0-13.312-47.546-40.998-68.232c0,0-30.825-16.653-28.459,43.626
                                                c0,0-4.551-55.576-26.915-40.776c0,0-23.502,13.721-41.112,67.28c0,0-3.553-102.53,66.432-102.53
                                                C159.744,68.584,230.796,60.598,230.796,169.216z"/>
                                            <path fill="#CC6654" d="M27.317,239.669c0,0-3.524-209.361,132.912-214.214c0,0,135.788-6.157,134.484,214.214
                                                c0,0-20.222,20.31-46.311-10.999l-18.265-44.191c0,0,3.256-106.283-67.51-101.489c0,0-62.218-3.068-67.797,102.939
                                                c0,0-12.754,52.253-45.366,60.216C49.465,246.146,30.275,250.629,27.317,239.669z"/>
                                        </g>
                                        <g id="mandibula_x5F_inferior">
                                            <path fill="#D68D90" d="M15.875,284.527c0,0-12.393,179.204,97.837,210.595c0,0,123.602,38.563,165.019-91.886
                                                c0,0,18.263-40.91,20.872-122.533c0,0-3.913-14.44-31.308-13.788H41.964C41.964,266.915,15.222,270.177,15.875,284.527z"/>
                                            <path fill="#D48889" d="M86.855,342.339c0,0,13.312,47.546,40.998,68.233c0,0,30.825,16.652,28.458-43.627
                                                c0,0,4.552,55.576,26.916,40.777c0,0,23.502-13.723,41.112-67.281c0,0,3.553,102.53-66.432,102.53
                                                C157.908,442.972,86.855,450.958,86.855,342.339z"/>
                                            <path fill="#CC6654" d="M290.443,280.703c0,0,3.524,209.36-132.913,214.214c0,0-135.786,6.157-134.481-214.214
                                                c0,0,20.22-20.31,46.31,10.999l18.265,44.19c0,0-3.256,106.283,67.509,101.489c0,0,62.219,3.067,67.798-102.939
                                                c0,0,12.755-52.254,45.366-60.216C268.296,274.226,287.485,269.742,290.443,280.703z"/>
                                        </g>
                                        <g id="circulos_x5F_superiores">
                                            
                                                <circle id="c30" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="309.597" cy="204.729" r="6.5"/>
                                            
                                                <circle id="c29" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="305.597" cy="163.188" r="6.5"/>
                                            
                                                <circle id="c28" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="295.079" cy="116.438" r="6.5"/>
                                            
                                                <circle id="c27" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="283.933" cy="87.833" r="6.5"/>
                                            
                                                <path id="c26" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" d="
                                                M256.972,55.703c0-3.589,2.913-6.5,6.5-6.5c3.591,0,6.5,2.911,6.5,6.5s-2.909,6.5-6.5,6.5
                                                C259.885,62.203,256.972,59.292,256.972,55.703z"/>
                                            
                                                <path id="c25" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" d="
                                                M224.019,28.5c0-3.589,2.909-6.5,6.5-6.5c3.587,0,6.5,2.911,6.5,6.5s-2.913,6.5-6.5,6.5C226.928,35,224.019,32.089,224.019,28.5z"
                                                />
                                            
                                                <circle id="c24" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="192.218" cy="14.238" r="6.5"/>
                                            
                                                <circle id="c23" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="151.4" cy="12.499" r="6.5"/>
                                            
                                                <circle id="c22" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="111.234" cy="21.501" r="6.5"/>
                                            
                                                <circle id="c21" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="82.585" cy="37.384" r="6.5"/>
                                            
                                                <circle id="c20" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="60.011" cy="58.823" r="6.5"/>
                                            
                                                <circle id="c19" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="40.46" cy="92.125" r="6.5"/>
                                            
                                                <circle id="c18" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="27.915" cy="124.433" r="6.5"/>
                                            
                                                <circle id="c17" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="18.5" cy="161.864" r="6.5"/>
                                            
                                                <circle id="c16" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="12.5" cy="209.384" r="6.5"/>
                                        </g>
                                        <g id="circulos_x5F_inferiores">
                                            
                                                <circle id="c15" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="304.185" cy="322.032" r="6.5"/>
                                            
                                                <circle id="c14" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="296.685" cy="365.007" r="6.5"/>
                                            
                                                <circle id="c13" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="285.526" cy="405.939" r="6.5"/>
                                            
                                                <circle id="c12" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="271.3" cy="438.523" r="6.5"/>
                                            
                                                <circle id="c11" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="247.749" cy="471.548" r="6.5"/>
                                            
                                                <circle id="c10" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="222.175" cy="489.987" r="6.5"/>
                                            
                                                <circle id="c9" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="195.526" cy="501.872" r="6.5"/>
                                            
                                                <circle id="c8" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="163.36" cy="506.872" r="6.5"/>
                                            
                                                <circle id="c7" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="129.543" cy="505.872" r="6.5"/>
                                            
                                                <circle id="c6" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="97.243" cy="496.872" r="6.5"/>
                                            
                                                <circle id="c5" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="65.288" cy="476.668" r="6.5"/>
                                            
                                                <circle id="c4" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="40.886" cy="446.48" r="6.5"/>
                                            
                                                <circle id="c3" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="25.623" cy="412.992" r="6.5"/>
                                            
                                                <circle id="c2" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="13.5" cy="365.271" r="6.5"/>
                                            
                                                <circle id="c1" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="8.5" cy="322.632" r="6.5"/>
                                        </g>
                                        <g id="dientes_x5F_superiores">
                                            <path id="d18" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M41.552,212.457
                                                c4.19-1.549,22.675,7.559,22.675,7.559s11.337,7.085,0,18.896c0,0-4.252,2.834-22.675,4.251c0,0-10.865-0.472-7.086-11.81
                                                C34.466,231.352,24.229,218.247,41.552,212.457z"/>
                                            <path id="d17" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M45.709,172.056
                                                c0,0,13.406,0.547,32.695,17.1c0,0,6.84,15.185-16.348,24.761c0,0-11.559-0.137-23.461-5.198c0,0-11.354-5.609-1.778-16.553
                                                C36.817,192.165,24.779,177.665,45.709,172.056z"/>
                                            <path id="d16" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M53.232,132.656
                                                c0,0,17.647-1.642,33.242,16.416c0,0,1.368,2.873,1.094,6.292c0,0-2.188,15.048-16.279,20.931c0,0-16.963-0.411-29.275-11.765
                                                c0,0-6.155-7.798,2.189-14.364C44.204,150.167,37.911,134.845,53.232,132.656z"/>
                                            <path id="d15" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M74.372,112.012
                                                c0,0,11.383-2.217,17.592,16.115c0,0,0.592,6.504-6.208,7.391c0,0-23.802,2.071-34.151-9.609c0,0-8.722-14.488,10.201-19.515
                                                C61.806,106.395,68.163,105.064,74.372,112.012z"/>
                                            <path id="d14" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M85.891,86.292
                                                c0,0,13.978-0.621,16.929,15.531c0,0,1.087,9.785-11.493,9.63c0,0-24.073,3.417-29.509-13.667c0,0-2.33-10.095,6.212-13.512
                                                C68.03,84.274,73.932,75.11,85.891,86.292z"/>
                                            <path id="d13" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M95.438,57.553
                                                c0,0,14.228,11.491,17.1,30.233c0,0,0.547,4.514-6.019,3.693c0,0-17.647-1.642-23.667-8.481c0,0-5.061-7.114,0.547-21.614
                                                C83.399,61.384,87.505,52.081,95.438,57.553z"/>
                                            <path id="d12" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M116.499,38.454
                                                c0,0,8.68,11.592,6.944,35.453c0,0-1.301,5.343-6.22,2.45c0,0-6.442-5.695-11.573-8.246c0,0-6.655-4.948-9.258-13.106
                                                c0,0-1.88-6.277,1.591-8.592l12.594-9.548C110.577,36.864,114.33,34.602,116.499,38.454z"/>
                                            <path id="d11" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M150.878,34.98
                                                c0,0,0.685,5.335,0,12.449c0,0-4.924,16.416-7.797,21.614c0,0-2.599,5.062-6.019,1.368c0,0-3.694-2.326-7.114-9.302
                                                c0,0-2.735-4.515-4.651-6.566c0,0-2.189-1.642-4.377-10.944l-1.231-5.548c0,0-1.778-4.301,6.566-7.858
                                                c0,0,13.132-3.147,19.562-1.642C145.817,28.551,149.785,29.098,150.878,34.98z"/>
                                            <path id="d21" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M175.126,67.676
                                                c0,0,7.115-10.943,10.397-19.699c0,0,2.188-5.609,1.094-11.902c0,0-1.095-5.061-7.25-6.566c0,0-17.1-2.321-19.425-1.366
                                                c0,0-7.113-0.292-5.335,9.907c0,0,0.957,6.825,2.188,9.744c0,0,5.2,7.433,6.294,11.126c0,0,2.189,8.071,5.813,10.397
                                                C168.902,69.317,172.41,72.091,175.126,67.676z"/>
                                            <path id="d22" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M197.182,33.509
                                                c0,0,16.764,8.438,17.518,14.109c0,0,1.963,8.994-3.171,13.977L195.37,76.242c0,0-5.062,2.718-6.457-1.208
                                                c0,0-2.279-19.453-1.244-27.415c0,0,0.907-6.56,3.624-11.844C191.293,35.774,192.652,32,197.182,33.509z"/>
                                            <path id="d23" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M228.478,52.319
                                                c0,0,11.903,4.104,8.756,24.898c0,0-1.916,3.967-6.704,6.292c0,0-13.542,5.608-19.698,4.104c0,0-5.883-0.548-3.42-9.439
                                                c0,0,6.689-15.595,10.595-21.751C218.006,56.423,221.912,49.173,228.478,52.319z"/>
                                            <path id="d24" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M252.898,79.987
                                                c0,0,11.354,4.788,5.472,17.784c0,0-3.967,5.199-12.723,6.43l-15.185,1.094c0,0-7.935-1.779-6.978-9.85c0,0,0.104-5.572,6.02-10.26
                                                C229.505,85.185,243.597,74.925,252.898,79.987z"/>
                                            <path id="d25" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M268.149,104.339
                                                c0,0,10.123,10.67,0,19.973c0,0-11.217,6.429-26.675,6.019c0,0-8.345-2.052-5.199-11.354c0,0,3.01-8.895,14.501-13.681
                                                C250.776,105.295,261.857,98.457,268.149,104.339z"/>
                                            <path id="d26" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M280.905,144.524
                                                c0,0,12.996,9.576-0.82,20.383c0,0-6.978,3.009-9.576,2.599c0,0-2.052,6.156-15.731,5.882c0,0-12.038-1.778-12.585-13.406
                                                c0,0-9.712-9.301-3.42-15.458c0,0,13.954-12.176,19.152-13.817c0,0,9.438-7.114,17.1-2.462
                                                C275.024,128.245,285.555,134.265,280.905,144.524z"/>
                                            <path id="d27" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M288.253,187.994
                                                c0,0,11.218,7.661-1.368,18.194c0,0-6.293,3.283-10.67,3.694c0,0-6.978,6.566-15.869,3.694c0,0-11.08-5.746-16.689-17.374
                                                c0,0-3.967-7.797,5.198-15.047c9.029-5.746,8.482-5.336,12.586-5.883c0,0,8.617-9.439,18.878-5.608
                                                C280.318,169.663,292.22,174.724,288.253,187.994z"/>
                                            <path id="d28" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M291.934,227.905
                                                c0,0,5.653,9.986-8.026,11.217c0,0-2.188,2.873-9.028,2.462c0,0-5.473,4.515-8.755,1.916c0,0-7.387-5.199-8.892-11.081
                                                c0,0-2.19-7.387,4.377-10.807l14.911-9.576c0,0,8.48-6.566,13.68,2.052C290.2,214.088,296.128,219.423,291.934,227.905z"/>
                                        </g>
                                        <g id="dientes_x5F_inferiores">
                                            <path id="d38" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M282.193,280.204
                                                c0,0,6.844,1.811,6.643,15.497l0.004,12.277c0,0-2.62,8.855-10.872,8.855c-8.253,0-16.705-1.812-16.705-1.812
                                                s-9.661-4.024-5.837-16.102l2.616-3.421c0,0-3.455-10.869,10.348-13.082C268.39,282.417,272.331,279.197,282.193,280.204z"/>
                                            <path id="d37" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M274.666,319.249
                                                c0,0,13.082,3.822,10.063,21.133c0,0-1.408,14.289-13.283,16.1c0,0-17.51,0.202-22.541-4.226c0,0-6.44-6.038,0-16.102
                                                c0,0-6.24-12.881,7.849-18.113C256.754,318.041,262.389,315.625,274.666,319.249z"/>
                                            <path id="d36" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M269.233,362.118
                                                c0,0,6.643,3.422,6.038,12.479c0,0-0.201,18.917-10.868,21.132c0,0-9.861,2.012-14.088-2.817c0,0-13.083,0.806-14.895-7.245
                                                c0,0-2.616-6.238,1.007-11.673c0,0-3.22-10.464,7.245-17.51C243.673,356.483,260.58,350.244,269.233,362.118z"/>
                                            <path id="d35" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M256.07,397.338
                                                c0,0,10.065,4.026,5.837,19.322c0,0-4.025,10.062-16.302,5.635c0,0-11.875-5.717-14.29-11.915c0,0-4.025-6.576,7.85-14.236
                                                C239.165,396.144,242.184,390.697,256.07,397.338z"/>
                                            <path id="d34" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M240.947,420.595
                                                c0,0,9.565,4.306,6.456,20.091c0,0-4.783,13.394-18.416,9.327c0,0-14.591-5.979-14.351-22.721
                                                C214.637,427.292,217.985,408.398,240.947,420.595z"/>
                                            <path id="d33" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M205.31,442.252
                                                c0,0,21.602,0.644,22.508,10.954c0,0,2.193,10.525-3.605,17.398l-5.801,3.867c0,0-6.442,2.576-11.168-6.015l-8.807-19.93
                                                C198.437,448.528,194.354,442.039,205.31,442.252z"/>
                                            <path id="d32" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M191.279,454.349l9.628,9.2
                                                c0,0,9.455,2.568,10.825,11.126c0,0,0.727,3.638-2.696,5.776l-12.509,7.273c0,0-4.821,3.425-8.458-5.348l-1.711-26.997
                                                C186.358,455.38,186.783,450.053,191.279,454.349z"/>
                                            <path id="d31" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M174.797,458.981l9.864,18.524
                                                c0,0,10.586,13.716,0,14.678l-17.805,1.685c0,0-4.09,0.479-2.887-11.79c0,0,0.962-16.12,4.812-24.3
                                                C168.781,457.778,172.275,454.245,174.797,458.981z"/>
                                            <path id="d41" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M155.048,459.037
                                                c0,0,6.274,10.282,7.205,24.225c0,0,3.02,9.992-3.603,9.76l-17.543-0.929c0,0-6.507-2.324-2.091-10.457l10.224-22.599
                                                C149.24,459.037,152.231,453.236,155.048,459.037z"/>
                                            <path id="d42" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M135.844,454.125
                                                c0,0,1.436,24.392-1.17,31.341c0,0-1.085,4.777-6.297,3.908c0,0-13.245-3.039-17.372-7.383c0,0-3.474-3.086,1.737-8.599
                                                l16.719-19.268C129.462,454.125,133.975,447.755,135.844,454.125z"/>
                                            <path id="d43" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M117.053,449.526
                                                c0,0-0.416,24.588-11.876,28.546c0,0-15.835,1.25-16.876-16.668c0,0-0.834-5.626,4.167-8.334c0,0,10.418-7.294,18.543-8.752
                                                C111.011,444.318,117.723,442.002,117.053,449.526z"/>
                                            <path id="d44" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M100.836,436.946
                                                c0,0-2.375,18.562-17.712,21.052c0,0-15.79,1.583-15.337-14.714c0,0,0.905-12.224,11.771-17.657
                                                C79.558,425.626,102.194,419.063,100.836,436.946z"/>
                                            <path id="d45" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M85.595,411.247
                                                c0,0-1.667,16.67-19.794,18.336c0,0-11.876,1.251-12.918-9.167c0,0-3.977-11.669,7.493-18.129
                                                C60.375,402.287,83.88,392.498,85.595,411.247z"/>
                                            <path id="d46" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M79.053,377.491
                                                c0,0,6.459,14.795-8.126,19.17c0,0-10.92,7.502-20.67,4.585c0,0-9.125-2.501-11-17.711c0,0-5.001-11.043,5.208-16.878
                                                c0,0-2.936-8.543,13.951-8.334C58.416,358.323,80.303,355.196,79.053,377.491z"/>
                                            <path id="d47" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M68.696,334.151
                                                c0,0,11.876,18.129-9.168,22.921c0,0-18.336,3.543-23.754,0c0,0-8.334-2.502-7.292-22.921c0,0,0.208-12.709,16.877-15.21
                                                C45.359,318.941,70.988,311.648,68.696,334.151z"/>
                                            <path id="d48" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M26.292,297.896
                                                c0,0-4.792-15.21,10.626-18.127c0,0,17.085-3.334,20.003,14.585c0,0,7.968,18.105-5.834,21.67c0,0-10.156,4.168-18.934,0
                                                C32.153,316.024,20.041,312.273,26.292,297.896z"/>
                                        </g>
                                        <g id="numeros_x5F_superiores">
                                            <text transform="matrix(1 0 0 1 45.8408 230.5142)" font-family="'Arial-BoldMT'" font-size="8">18</text>
                                            <text transform="matrix(0.9997 0.0241 -0.0241 0.9997 50.1992 195.6274)" font-family="'Arial-BoldMT'" font-size="8">17</text>
                                            <text transform="matrix(1 -0.0058 0.0058 1 59.4136 157.8311)" font-family="'Arial-BoldMT'" font-size="8">16</text>
                                            <text transform="matrix(1 0.0026 -0.0026 1 67.0898 124.2495)" font-family="'Arial-BoldMT'" font-size="8">15</text>
                                            <text transform="matrix(1 -0.0051 0.0051 1 76.8545 99.563)" font-family="'Arial-BoldMT'" font-size="8">14</text>
                                            <text transform="matrix(0.9982 0.0607 -0.0607 0.9982 91.8857 78.0894)" font-family="'Arial-BoldMT'" font-size="8">13</text>
                                            <text transform="matrix(0.9995 0.0324 -0.0324 0.9995 107.0522 59.1382)" font-family="'Arial-BoldMT'" font-size="8">12</text>
                                            <text transform="matrix(0.9978 -0.0663 0.0663 0.9978 133.2158 49.4468)" font-family="'Arial-BoldMT'" font-size="8">11</text>
                                            <text transform="matrix(0.9978 -0.0663 0.0663 0.9978 167.7158 46.9468)" font-family="'Arial-BoldMT'" font-size="8">21</text>
                                            <text transform="matrix(0.9993 0.0361 -0.0361 0.9993 195.7451 55.5601)" font-family="'Arial-BoldMT'" font-size="8">22</text>
                                            <text transform="matrix(0.9998 -0.021 0.021 0.9998 217.7842 73.5957)" font-family="'Arial-BoldMT'" font-size="8">23</text>
                                            <text transform="matrix(0.9993 -0.0373 0.0373 0.9993 235.833 95.4429)" font-family="'Arial-BoldMT'" font-size="8">24</text>
                                            <text transform="matrix(0.9997 -0.0227 0.0227 0.9997 247.9326 120.2554)" font-family="'Arial-BoldMT'" font-size="8">25</text>
                                            <text transform="matrix(0.9997 -0.0252 0.0252 0.9997 257.1113 152.9746)" font-family="'Arial-BoldMT'" font-size="8">26</text>
                                            <text transform="matrix(0.9992 -0.0401 0.0401 0.9992 264.7246 191.1865)" font-family="'Arial-BoldMT'" font-size="8">27</text>
                                            <text transform="matrix(1 -0.0051 0.0051 1 270.7393 229.2651)" font-family="'Arial-BoldMT'" font-size="8">28</text>
                                        </g>
                                        <g id="numeros_x5F_inferiores">
                                            <text transform="matrix(1 0 0 1 37.8486 299.9644)" font-family="'Arial-BoldMT'" font-size="8">48</text>
                                            <text transform="matrix(1 0 0 1 45.8408 341.2866)" font-family="'Arial-BoldMT'" font-size="8">47</text>
                                            <text transform="matrix(1 0 0 1 55.3525 381.144)" font-family="'Arial-BoldMT'" font-size="8">46</text>
                                            <text transform="matrix(1 0 0 1 62.8896 413.9692)" font-family="'Arial-BoldMT'" font-size="8">45</text>
                                            <text transform="matrix(1 0 0 1 79.2197 442.4995)" font-family="'Arial-BoldMT'" font-size="8">44</text>
                                            <text transform="matrix(1 0 0 1 97.2427 463.0903)" font-family="'Arial-BoldMT'" font-size="8">43</text>
                                            <text transform="matrix(1 0 0 1 119.8154 475.1909)" font-family="'Arial-BoldMT'" font-size="8">42</text>
                                            <text transform="matrix(1 0 0 1 145.9717 481.2583)" font-family="'Arial-BoldMT'" font-size="8">41</text>
                                            <text transform="matrix(1 0 0 1 169.8604 481.2583)" font-family="'Arial-BoldMT'" font-size="8">31</text>
                                            <text transform="matrix(1 0 0 1 192.4512 475.1909)" font-family="'Arial-BoldMT'" font-size="8">32</text>
                                            <text transform="matrix(1 0 0 1 208.3887 456.5112)" font-family="'Arial-BoldMT'" font-size="8">33</text>
                                            <text transform="matrix(1 0 0 1 228.2246 433.6382)" font-family="'Arial-BoldMT'" font-size="8">34</text>
                                            <text transform="matrix(1 0 0 1 241.249 410.3843)" font-family="'Arial-BoldMT'" font-size="8">35</text>
                                            <text transform="matrix(1 0 0 1 250.7383 375.4946)" font-family="'Arial-BoldMT'" font-size="8">36</text>
                                            <text transform="matrix(1 0 0 1 259.8457 340.4419)" font-family="'Arial-BoldMT'" font-size="8">37</text>
                                            <text transform="matrix(1 0 0 1 268.043 299.9644)" font-family="'Arial-BoldMT'" font-size="8">38</text>
                                        </g>
                                    </svg>
                                </div>
                                <div id="op_puente" >
                                    <input type="button" value="" id="btn_puente2" class="puente_op_off"/>
                                </div>
                                <div id="op_removible" style="display: none;">
                                    <div class="color_txt">
                                        <label><b>SUPERIOR</b></label>
                                        <input type="button" value="" id="up_rmv" class="rmv_off"/>
                                    </div> 
                                    <div class="color_txt" id="box_down_rmv">
                                        <input type="button" value="" id="down_rmv" class="rmv_off"/>
                                        <label><b>INFERIOR</b></label>
                                    </div>    
                                </div>
                                <div id="text_001" style="margin-bottom:10px;">
                                    <div class="row">
                                        <div class="col-md-4"><div class="circle-base" id="op_1"></div> Pilar</div>
                                        <div class="col-md-4"><div class="circle-base" id="op_2"></div> Póntico</div>
                                        <div class="col-md-4"><div class="circle-base" id="op_3"></div> Ferulizado</div>
                                    </div>    
                                </div>
                                <label>DIENTES SELECCIONADOS</label>
                                <label id="dientes_label"></label>
                            </div>                   
                        </div>

                    </div>
                </div><!-- fin contenedor 3 -->

                <!-- contenedor 4 -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12" id="contenedor4" style="border: 2px solid gray">
                         
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
        #btn-estetica
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/crown.png') ?>");
        }
        #btn-metal
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
        #btn-ferula
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/ferula.png') ?>");
        }
        #btn-virtual
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/virtual.png') ?>");
        }
        #btn-print
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/impresion.png') ?>");
        }
        #btn-zfx
        {
            background-image:url("<?= base_url('assets/librerias/images/pedido/zfx.png') ?>");
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
                            <div id="svgload2" style="width:320px;">
                                <svg version="1.1" id="sistema_x5F_dental" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="320.097px" height="521.372px" viewBox="0 0 320.097 521.372" enable-background="new 0 0 320.097 521.372" xml:space="preserve">
                                    <g id="mandibula_x5F_superior">
                                        <path fill="#D68D90" d="M301.885,235.844c0,0,12.395-179.204-97.837-210.595c0,0-123.602-38.563-165.019,91.887
                                            c0,0-18.263,40.91-20.872,122.533c0,0,3.914,14.44,31.308,13.787h226.332C275.797,253.456,302.538,250.193,301.885,235.844z"/>
                                        <path fill="#D48889" d="M230.796,169.216c0,0-13.312-47.546-40.998-68.232c0,0-30.825-16.653-28.459,43.626
                                            c0,0-4.551-55.576-26.915-40.776c0,0-23.502,13.721-41.112,67.28c0,0-3.553-102.53,66.432-102.53
                                            C159.744,68.584,230.796,60.598,230.796,169.216z"/>
                                        <path fill="#CC6654" d="M27.317,239.669c0,0-3.524-209.361,132.912-214.214c0,0,135.788-6.157,134.484,214.214
                                            c0,0-20.222,20.31-46.311-10.999l-18.265-44.191c0,0,3.256-106.283-67.51-101.489c0,0-62.218-3.068-67.797,102.939
                                            c0,0-12.754,52.253-45.366,60.216C49.465,246.146,30.275,250.629,27.317,239.669z"/>
                                    </g>
                                    <g id="mandibula_x5F_inferior">
                                        <path fill="#D68D90" d="M15.875,284.527c0,0-12.393,179.204,97.837,210.595c0,0,123.602,38.563,165.019-91.886
                                            c0,0,18.263-40.91,20.872-122.533c0,0-3.913-14.44-31.308-13.788H41.964C41.964,266.915,15.222,270.177,15.875,284.527z"/>
                                        <path fill="#D48889" d="M86.855,342.339c0,0,13.312,47.546,40.998,68.233c0,0,30.825,16.652,28.458-43.627
                                            c0,0,4.552,55.576,26.916,40.777c0,0,23.502-13.723,41.112-67.281c0,0,3.553,102.53-66.432,102.53
                                            C157.908,442.972,86.855,450.958,86.855,342.339z"/>
                                        <path fill="#CC6654" d="M290.443,280.703c0,0,3.524,209.36-132.913,214.214c0,0-135.786,6.157-134.481-214.214
                                            c0,0,20.22-20.31,46.31,10.999l18.265,44.19c0,0-3.256,106.283,67.509,101.489c0,0,62.219,3.067,67.798-102.939
                                            c0,0,12.755-52.254,45.366-60.216C268.296,274.226,287.485,269.742,290.443,280.703z"/>
                                    </g>
                                    <g id="circulos_x5F_superiores">
                                        
                                            <circle id="c30" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="309.597" cy="204.729" r="6.5"/>
                                        
                                            <circle id="c29" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="305.597" cy="163.188" r="6.5"/>
                                        
                                            <circle id="c28" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="295.079" cy="116.438" r="6.5"/>
                                        
                                            <circle id="c27" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="283.933" cy="87.833" r="6.5"/>
                                        
                                            <path id="c26" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" d="
                                            M256.972,55.703c0-3.589,2.913-6.5,6.5-6.5c3.591,0,6.5,2.911,6.5,6.5s-2.909,6.5-6.5,6.5
                                            C259.885,62.203,256.972,59.292,256.972,55.703z"/>
                                        
                                            <path id="c25" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" d="
                                            M224.019,28.5c0-3.589,2.909-6.5,6.5-6.5c3.587,0,6.5,2.911,6.5,6.5s-2.913,6.5-6.5,6.5C226.928,35,224.019,32.089,224.019,28.5z"
                                            />
                                        
                                            <circle id="c24" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="192.218" cy="14.238" r="6.5"/>
                                        
                                            <circle id="c23" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="151.4" cy="12.499" r="6.5"/>
                                        
                                            <circle id="c22" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="111.234" cy="21.501" r="6.5"/>
                                        
                                            <circle id="c21" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="82.585" cy="37.384" r="6.5"/>
                                        
                                            <circle id="c20" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="60.011" cy="58.823" r="6.5"/>
                                        
                                            <circle id="c19" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="40.46" cy="92.125" r="6.5"/>
                                        
                                            <circle id="c18" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="27.915" cy="124.433" r="6.5"/>
                                        
                                            <circle id="c17" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="18.5" cy="161.864" r="6.5"/>
                                        
                                            <circle id="c16" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="12.5" cy="209.384" r="6.5"/>
                                    </g>
                                    <g id="circulos_x5F_inferiores">
                                        
                                            <circle id="c15" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="304.185" cy="322.032" r="6.5"/>
                                        
                                            <circle id="c14" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="296.685" cy="365.007" r="6.5"/>
                                        
                                            <circle id="c13" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="285.526" cy="405.939" r="6.5"/>
                                        
                                            <circle id="c12" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="271.3" cy="438.523" r="6.5"/>
                                        
                                            <circle id="c11" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="247.749" cy="471.548" r="6.5"/>
                                        
                                            <circle id="c10" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="222.175" cy="489.987" r="6.5"/>
                                        
                                            <circle id="c9" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="195.526" cy="501.872" r="6.5"/>
                                        
                                            <circle id="c8" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="163.36" cy="506.872" r="6.5"/>
                                        
                                            <circle id="c7" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="129.543" cy="505.872" r="6.5"/>
                                        
                                            <circle id="c6" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="97.243" cy="496.872" r="6.5"/>
                                        
                                            <circle id="c5" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="65.288" cy="476.668" r="6.5"/>
                                        
                                            <circle id="c4" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="40.886" cy="446.48" r="6.5"/>
                                        
                                            <circle id="c3" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="25.623" cy="412.992" r="6.5"/>
                                        
                                            <circle id="c2" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="13.5" cy="365.271" r="6.5"/>
                                        
                                            <circle id="c1" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.75" stroke-miterlimit="10" cx="8.5" cy="322.632" r="6.5"/>
                                    </g>
                                    <g id="dientes_x5F_superiores">
                                        <path id="d18" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M41.552,212.457
                                            c4.19-1.549,22.675,7.559,22.675,7.559s11.337,7.085,0,18.896c0,0-4.252,2.834-22.675,4.251c0,0-10.865-0.472-7.086-11.81
                                            C34.466,231.352,24.229,218.247,41.552,212.457z"/>
                                        <path id="d17" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M45.709,172.056
                                            c0,0,13.406,0.547,32.695,17.1c0,0,6.84,15.185-16.348,24.761c0,0-11.559-0.137-23.461-5.198c0,0-11.354-5.609-1.778-16.553
                                            C36.817,192.165,24.779,177.665,45.709,172.056z"/>
                                        <path id="d16" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M53.232,132.656
                                            c0,0,17.647-1.642,33.242,16.416c0,0,1.368,2.873,1.094,6.292c0,0-2.188,15.048-16.279,20.931c0,0-16.963-0.411-29.275-11.765
                                            c0,0-6.155-7.798,2.189-14.364C44.204,150.167,37.911,134.845,53.232,132.656z"/>
                                        <path id="d15" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M74.372,112.012
                                            c0,0,11.383-2.217,17.592,16.115c0,0,0.592,6.504-6.208,7.391c0,0-23.802,2.071-34.151-9.609c0,0-8.722-14.488,10.201-19.515
                                            C61.806,106.395,68.163,105.064,74.372,112.012z"/>
                                        <path id="d14" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M85.891,86.292
                                            c0,0,13.978-0.621,16.929,15.531c0,0,1.087,9.785-11.493,9.63c0,0-24.073,3.417-29.509-13.667c0,0-2.33-10.095,6.212-13.512
                                            C68.03,84.274,73.932,75.11,85.891,86.292z"/>
                                        <path id="d13" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M95.438,57.553
                                            c0,0,14.228,11.491,17.1,30.233c0,0,0.547,4.514-6.019,3.693c0,0-17.647-1.642-23.667-8.481c0,0-5.061-7.114,0.547-21.614
                                            C83.399,61.384,87.505,52.081,95.438,57.553z"/>
                                        <path id="d12" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M116.499,38.454
                                            c0,0,8.68,11.592,6.944,35.453c0,0-1.301,5.343-6.22,2.45c0,0-6.442-5.695-11.573-8.246c0,0-6.655-4.948-9.258-13.106
                                            c0,0-1.88-6.277,1.591-8.592l12.594-9.548C110.577,36.864,114.33,34.602,116.499,38.454z"/>
                                        <path id="d11" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M150.878,34.98
                                            c0,0,0.685,5.335,0,12.449c0,0-4.924,16.416-7.797,21.614c0,0-2.599,5.062-6.019,1.368c0,0-3.694-2.326-7.114-9.302
                                            c0,0-2.735-4.515-4.651-6.566c0,0-2.189-1.642-4.377-10.944l-1.231-5.548c0,0-1.778-4.301,6.566-7.858
                                            c0,0,13.132-3.147,19.562-1.642C145.817,28.551,149.785,29.098,150.878,34.98z"/>
                                        <path id="d21" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M175.126,67.676
                                            c0,0,7.115-10.943,10.397-19.699c0,0,2.188-5.609,1.094-11.902c0,0-1.095-5.061-7.25-6.566c0,0-17.1-2.321-19.425-1.366
                                            c0,0-7.113-0.292-5.335,9.907c0,0,0.957,6.825,2.188,9.744c0,0,5.2,7.433,6.294,11.126c0,0,2.189,8.071,5.813,10.397
                                            C168.902,69.317,172.41,72.091,175.126,67.676z"/>
                                        <path id="d22" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M197.182,33.509
                                            c0,0,16.764,8.438,17.518,14.109c0,0,1.963,8.994-3.171,13.977L195.37,76.242c0,0-5.062,2.718-6.457-1.208
                                            c0,0-2.279-19.453-1.244-27.415c0,0,0.907-6.56,3.624-11.844C191.293,35.774,192.652,32,197.182,33.509z"/>
                                        <path id="d23" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M228.478,52.319
                                            c0,0,11.903,4.104,8.756,24.898c0,0-1.916,3.967-6.704,6.292c0,0-13.542,5.608-19.698,4.104c0,0-5.883-0.548-3.42-9.439
                                            c0,0,6.689-15.595,10.595-21.751C218.006,56.423,221.912,49.173,228.478,52.319z"/>
                                        <path id="d24" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M252.898,79.987
                                            c0,0,11.354,4.788,5.472,17.784c0,0-3.967,5.199-12.723,6.43l-15.185,1.094c0,0-7.935-1.779-6.978-9.85c0,0,0.104-5.572,6.02-10.26
                                            C229.505,85.185,243.597,74.925,252.898,79.987z"/>
                                        <path id="d25" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M268.149,104.339
                                            c0,0,10.123,10.67,0,19.973c0,0-11.217,6.429-26.675,6.019c0,0-8.345-2.052-5.199-11.354c0,0,3.01-8.895,14.501-13.681
                                            C250.776,105.295,261.857,98.457,268.149,104.339z"/>
                                        <path id="d26" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M280.905,144.524
                                            c0,0,12.996,9.576-0.82,20.383c0,0-6.978,3.009-9.576,2.599c0,0-2.052,6.156-15.731,5.882c0,0-12.038-1.778-12.585-13.406
                                            c0,0-9.712-9.301-3.42-15.458c0,0,13.954-12.176,19.152-13.817c0,0,9.438-7.114,17.1-2.462
                                            C275.024,128.245,285.555,134.265,280.905,144.524z"/>
                                        <path id="d27" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M288.253,187.994
                                            c0,0,11.218,7.661-1.368,18.194c0,0-6.293,3.283-10.67,3.694c0,0-6.978,6.566-15.869,3.694c0,0-11.08-5.746-16.689-17.374
                                            c0,0-3.967-7.797,5.198-15.047c9.029-5.746,8.482-5.336,12.586-5.883c0,0,8.617-9.439,18.878-5.608
                                            C280.318,169.663,292.22,174.724,288.253,187.994z"/>
                                        <path id="d28" fill="#FFFFFF" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M291.934,227.905
                                            c0,0,5.653,9.986-8.026,11.217c0,0-2.188,2.873-9.028,2.462c0,0-5.473,4.515-8.755,1.916c0,0-7.387-5.199-8.892-11.081
                                            c0,0-2.19-7.387,4.377-10.807l14.911-9.576c0,0,8.48-6.566,13.68,2.052C290.2,214.088,296.128,219.423,291.934,227.905z"/>
                                    </g>
                                    <g id="dientes_x5F_inferiores">
                                        <path id="d38" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M282.193,280.204
                                            c0,0,6.844,1.811,6.643,15.497l0.004,12.277c0,0-2.62,8.855-10.872,8.855c-8.253,0-16.705-1.812-16.705-1.812
                                            s-9.661-4.024-5.837-16.102l2.616-3.421c0,0-3.455-10.869,10.348-13.082C268.39,282.417,272.331,279.197,282.193,280.204z"/>
                                        <path id="d37" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M274.666,319.249
                                            c0,0,13.082,3.822,10.063,21.133c0,0-1.408,14.289-13.283,16.1c0,0-17.51,0.202-22.541-4.226c0,0-6.44-6.038,0-16.102
                                            c0,0-6.24-12.881,7.849-18.113C256.754,318.041,262.389,315.625,274.666,319.249z"/>
                                        <path id="d36" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M269.233,362.118
                                            c0,0,6.643,3.422,6.038,12.479c0,0-0.201,18.917-10.868,21.132c0,0-9.861,2.012-14.088-2.817c0,0-13.083,0.806-14.895-7.245
                                            c0,0-2.616-6.238,1.007-11.673c0,0-3.22-10.464,7.245-17.51C243.673,356.483,260.58,350.244,269.233,362.118z"/>
                                        <path id="d35" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M256.07,397.338
                                            c0,0,10.065,4.026,5.837,19.322c0,0-4.025,10.062-16.302,5.635c0,0-11.875-5.717-14.29-11.915c0,0-4.025-6.576,7.85-14.236
                                            C239.165,396.144,242.184,390.697,256.07,397.338z"/>
                                        <path id="d34" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M240.947,420.595
                                            c0,0,9.565,4.306,6.456,20.091c0,0-4.783,13.394-18.416,9.327c0,0-14.591-5.979-14.351-22.721
                                            C214.637,427.292,217.985,408.398,240.947,420.595z"/>
                                        <path id="d33" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M205.31,442.252
                                            c0,0,21.602,0.644,22.508,10.954c0,0,2.193,10.525-3.605,17.398l-5.801,3.867c0,0-6.442,2.576-11.168-6.015l-8.807-19.93
                                            C198.437,448.528,194.354,442.039,205.31,442.252z"/>
                                        <path id="d32" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M191.279,454.349l9.628,9.2
                                            c0,0,9.455,2.568,10.825,11.126c0,0,0.727,3.638-2.696,5.776l-12.509,7.273c0,0-4.821,3.425-8.458-5.348l-1.711-26.997
                                            C186.358,455.38,186.783,450.053,191.279,454.349z"/>
                                        <path id="d31" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M174.797,458.981l9.864,18.524
                                            c0,0,10.586,13.716,0,14.678l-17.805,1.685c0,0-4.09,0.479-2.887-11.79c0,0,0.962-16.12,4.812-24.3
                                            C168.781,457.778,172.275,454.245,174.797,458.981z"/>
                                        <path id="d41" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M155.048,459.037
                                            c0,0,6.274,10.282,7.205,24.225c0,0,3.02,9.992-3.603,9.76l-17.543-0.929c0,0-6.507-2.324-2.091-10.457l10.224-22.599
                                            C149.24,459.037,152.231,453.236,155.048,459.037z"/>
                                        <path id="d42" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M135.844,454.125
                                            c0,0,1.436,24.392-1.17,31.341c0,0-1.085,4.777-6.297,3.908c0,0-13.245-3.039-17.372-7.383c0,0-3.474-3.086,1.737-8.599
                                            l16.719-19.268C129.462,454.125,133.975,447.755,135.844,454.125z"/>
                                        <path id="d43" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M117.053,449.526
                                            c0,0-0.416,24.588-11.876,28.546c0,0-15.835,1.25-16.876-16.668c0,0-0.834-5.626,4.167-8.334c0,0,10.418-7.294,18.543-8.752
                                            C111.011,444.318,117.723,442.002,117.053,449.526z"/>
                                        <path id="d44" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M100.836,436.946
                                            c0,0-2.375,18.562-17.712,21.052c0,0-15.79,1.583-15.337-14.714c0,0,0.905-12.224,11.771-17.657
                                            C79.558,425.626,102.194,419.063,100.836,436.946z"/>
                                        <path id="d45" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M85.595,411.247
                                            c0,0-1.667,16.67-19.794,18.336c0,0-11.876,1.251-12.918-9.167c0,0-3.977-11.669,7.493-18.129
                                            C60.375,402.287,83.88,392.498,85.595,411.247z"/>
                                        <path id="d46" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M79.053,377.491
                                            c0,0,6.459,14.795-8.126,19.17c0,0-10.92,7.502-20.67,4.585c0,0-9.125-2.501-11-17.711c0,0-5.001-11.043,5.208-16.878
                                            c0,0-2.936-8.543,13.951-8.334C58.416,358.323,80.303,355.196,79.053,377.491z"/>
                                        <path id="d47" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M68.696,334.151
                                            c0,0,11.876,18.129-9.168,22.921c0,0-18.336,3.543-23.754,0c0,0-8.334-2.502-7.292-22.921c0,0,0.208-12.709,16.877-15.21
                                            C45.359,318.941,70.988,311.648,68.696,334.151z"/>
                                        <path id="d48" fill="#FFFFFF" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" stroke="#030104" stroke-width="0.75" stroke-miterlimit="10" d="M26.292,297.896
                                            c0,0-4.792-15.21,10.626-18.127c0,0,17.085-3.334,20.003,14.585c0,0,7.968,18.105-5.834,21.67c0,0-10.156,4.168-18.934,0
                                            C32.153,316.024,20.041,312.273,26.292,297.896z"/>
                                    </g>
                                    <g id="numeros_x5F_superiores">
                                        <text transform="matrix(1 0 0 1 45.8408 230.5142)" font-family="'Arial-BoldMT'" font-size="8">18</text>
                                        <text transform="matrix(0.9997 0.0241 -0.0241 0.9997 50.1992 195.6274)" font-family="'Arial-BoldMT'" font-size="8">17</text>
                                        <text transform="matrix(1 -0.0058 0.0058 1 59.4136 157.8311)" font-family="'Arial-BoldMT'" font-size="8">16</text>
                                        <text transform="matrix(1 0.0026 -0.0026 1 67.0898 124.2495)" font-family="'Arial-BoldMT'" font-size="8">15</text>
                                        <text transform="matrix(1 -0.0051 0.0051 1 76.8545 99.563)" font-family="'Arial-BoldMT'" font-size="8">14</text>
                                        <text transform="matrix(0.9982 0.0607 -0.0607 0.9982 91.8857 78.0894)" font-family="'Arial-BoldMT'" font-size="8">13</text>
                                        <text transform="matrix(0.9995 0.0324 -0.0324 0.9995 107.0522 59.1382)" font-family="'Arial-BoldMT'" font-size="8">12</text>
                                        <text transform="matrix(0.9978 -0.0663 0.0663 0.9978 133.2158 49.4468)" font-family="'Arial-BoldMT'" font-size="8">11</text>
                                        <text transform="matrix(0.9978 -0.0663 0.0663 0.9978 167.7158 46.9468)" font-family="'Arial-BoldMT'" font-size="8">21</text>
                                        <text transform="matrix(0.9993 0.0361 -0.0361 0.9993 195.7451 55.5601)" font-family="'Arial-BoldMT'" font-size="8">22</text>
                                        <text transform="matrix(0.9998 -0.021 0.021 0.9998 217.7842 73.5957)" font-family="'Arial-BoldMT'" font-size="8">23</text>
                                        <text transform="matrix(0.9993 -0.0373 0.0373 0.9993 235.833 95.4429)" font-family="'Arial-BoldMT'" font-size="8">24</text>
                                        <text transform="matrix(0.9997 -0.0227 0.0227 0.9997 247.9326 120.2554)" font-family="'Arial-BoldMT'" font-size="8">25</text>
                                        <text transform="matrix(0.9997 -0.0252 0.0252 0.9997 257.1113 152.9746)" font-family="'Arial-BoldMT'" font-size="8">26</text>
                                        <text transform="matrix(0.9992 -0.0401 0.0401 0.9992 264.7246 191.1865)" font-family="'Arial-BoldMT'" font-size="8">27</text>
                                        <text transform="matrix(1 -0.0051 0.0051 1 270.7393 229.2651)" font-family="'Arial-BoldMT'" font-size="8">28</text>
                                    </g>
                                    <g id="numeros_x5F_inferiores">
                                        <text transform="matrix(1 0 0 1 37.8486 299.9644)" font-family="'Arial-BoldMT'" font-size="8">48</text>
                                        <text transform="matrix(1 0 0 1 45.8408 341.2866)" font-family="'Arial-BoldMT'" font-size="8">47</text>
                                        <text transform="matrix(1 0 0 1 55.3525 381.144)" font-family="'Arial-BoldMT'" font-size="8">46</text>
                                        <text transform="matrix(1 0 0 1 62.8896 413.9692)" font-family="'Arial-BoldMT'" font-size="8">45</text>
                                        <text transform="matrix(1 0 0 1 79.2197 442.4995)" font-family="'Arial-BoldMT'" font-size="8">44</text>
                                        <text transform="matrix(1 0 0 1 97.2427 463.0903)" font-family="'Arial-BoldMT'" font-size="8">43</text>
                                        <text transform="matrix(1 0 0 1 119.8154 475.1909)" font-family="'Arial-BoldMT'" font-size="8">42</text>
                                        <text transform="matrix(1 0 0 1 145.9717 481.2583)" font-family="'Arial-BoldMT'" font-size="8">41</text>
                                        <text transform="matrix(1 0 0 1 169.8604 481.2583)" font-family="'Arial-BoldMT'" font-size="8">31</text>
                                        <text transform="matrix(1 0 0 1 192.4512 475.1909)" font-family="'Arial-BoldMT'" font-size="8">32</text>
                                        <text transform="matrix(1 0 0 1 208.3887 456.5112)" font-family="'Arial-BoldMT'" font-size="8">33</text>
                                        <text transform="matrix(1 0 0 1 228.2246 433.6382)" font-family="'Arial-BoldMT'" font-size="8">34</text>
                                        <text transform="matrix(1 0 0 1 241.249 410.3843)" font-family="'Arial-BoldMT'" font-size="8">35</text>
                                        <text transform="matrix(1 0 0 1 250.7383 375.4946)" font-family="'Arial-BoldMT'" font-size="8">36</text>
                                        <text transform="matrix(1 0 0 1 259.8457 340.4419)" font-family="'Arial-BoldMT'" font-size="8">37</text>
                                        <text transform="matrix(1 0 0 1 268.043 299.9644)" font-family="'Arial-BoldMT'" font-size="8">38</text>
                                    </g>
                                </svg>
                            </div>                     
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
	
	function modelo(categoria,dientes){

		var s = dientes;

		s = s.replace("11", "#d11");
		s = s.replace("12", "#d12");
		s = s.replace("13", "#d13");
		s = s.replace("14", "#d14");
		s = s.replace("15", "#d15");
		s = s.replace("16", "#d16");
		s = s.replace("17", "#d17");
		s = s.replace("18", "#d18");

		s = s.replace("21", "#d21");
		s = s.replace("22", "#d22");
		s = s.replace("23", "#d23");
		s = s.replace("24", "#d24");
		s = s.replace("25", "#d25");
		s = s.replace("26", "#d26");
		s = s.replace("27", "#d27");
		s = s.replace("28", "#d28");
		
		s = s.replace("41", "#d41");
		s = s.replace("42", "#d42");
		s = s.replace("43", "#d43");
		s = s.replace("44", "#d44");
		s = s.replace("45", "#d45");
		s = s.replace("46", "#d46");
		s = s.replace("47", "#d47");
		s = s.replace("48", "#d48");
		
		s = s.replace("31", "#d31");
		s = s.replace("32", "#d32");
		s = s.replace("33", "#d33");
		s = s.replace("34", "#d34");
		s = s.replace("35", "#d35");
		s = s.replace("36", "#d36");
		s = s.replace("37", "#d37");
		s = s.replace("38", "#d38");
		
		$.ajax({
                 type: 'POST',
                 async:false,
                 dataType: 'json',
                 data: {categoria:categoria},
                 url: '<?php echo base_url(); ?>index.php/pedido/pedidos/ObtenerColor',
                 success: function (data) 
                 {    
                    //var data2 = {"data": [{"tipo": 2,"dientes": "22,23"},{"tipo": 3,"dientes": "22,23"}]};
						//alert(categoria + s + data);
                        //console.log("data"+data2);
                        //alert(data2);
                        //paint_tooth(categoria,s);   
                        paint_hover_tooth(categoria,s,0);  
                 }
        }); 
		
	}
	function modelo_todos(){
		
        //VALIDAR CANT DE PROD
        var filas_producto = $("tr[class=filas_producto]"); //tomo las filas de producto 
        //console.log(filas_producto.length);
		if(filas_producto.length >=0){
			
            //recorro las filas de pedido
            var cadena_producto="";            
            var iterador_arreglo_identificadores_filas=0;
            filas_producto.each(function(){
                var iterador =arreglo_identificadores_filas[iterador_arreglo_identificadores_filas];
                var categoria = $("#catf"+iterador).html().trim();
                var dientes = $("#dief"+iterador).html().trim(); 
				var s = dientes;

				s = s.replace("11", "#d11");
				s = s.replace("12", "#d12");
				s = s.replace("13", "#d13");
				s = s.replace("14", "#d14");
				s = s.replace("15", "#d15");
				s = s.replace("16", "#d16");
				s = s.replace("17", "#d17");
				s = s.replace("18", "#d18");
		
				s = s.replace("21", "#d21");
				s = s.replace("22", "#d22");
				s = s.replace("23", "#d23");
				s = s.replace("24", "#d24");
				s = s.replace("25", "#d25");
				s = s.replace("26", "#d26");
				s = s.replace("27", "#d27");
				s = s.replace("28", "#d28");
				
				s = s.replace("41", "#d41");
				s = s.replace("42", "#d42");
				s = s.replace("43", "#d43");
				s = s.replace("44", "#d44");
				s = s.replace("45", "#d45");
				s = s.replace("46", "#d46");
				s = s.replace("47", "#d47");
				s = s.replace("48", "#d48");
				
				s = s.replace("31", "#d31");
				s = s.replace("32", "#d32");
				s = s.replace("33", "#d33");
				s = s.replace("34", "#d34");
				s = s.replace("35", "#d35");
				s = s.replace("36", "#d36");
				s = s.replace("37", "#d37");
				s = s.replace("38", "#d38");
				$.ajax({
					
					type: 'POST',
					async:false,
					dataType: 'json',
					data: {categoria:categoria},
					url: '<?php echo base_url(); ?>index.php/pedido/pedidos/ObtenerColor',
					success: function (data) 
					{    
                        console.log(data);
                        //var data2 = {"data": [{"tipo": 2,"dientes": "22,23"},{"tipo": 3,"dientes": "22,23"}]};                        
                        //paint_all_tooth(data2);
						cadena_producto += categoria + s + data;					
                        paint_tooth(categoria,s); 
					}
				}); 

                //cadena_producto += categoria+s;
				
                iterador_arreglo_identificadores_filas++;
				
            });
			//console.log(cadena_producto);
			//alert(cadena_producto);
        }     
	}
	
    var identificador_filas=0;
    var arreglo_identificadores_filas = [];
	var arreglo_modelo_todos = [];
	
	function adicionarProducto()
    {
        var texto = document.getElementById('dientes_label').textContent;//$("#dientes_label").val();
        var dientes = texto.replace(" ","");
        var categoria = type;
        var producto_seleccionado =$("#formulario_pedido_item").val();
        var cantidad=$("#formulario_pedido_cantidad").val().trim();
        var guia_colores = $("#formulario_pedido_guiacolores").val();
        var cant_corlores = $("input[name='formulario_pedido[COLOR]']:checked").val();
        var actividades = $("#observaciones").val().trim();

		arreglo_modelo_todos[categoria,dientes];
		
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
                            +'<td><label onmouseover=modelo('+'"'+categoria+'"'+',"'+dientes+'") onmouseout="dientes_todos('+categoria+');">'
                                 +'img'
                            +'</label></td>'
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
        modelo_todos();
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
