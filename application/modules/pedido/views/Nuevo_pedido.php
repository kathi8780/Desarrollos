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
                                            <path fill="#D68D90" d="M313.745,233.826c0,0,13.422-194.066-105.951-228.061c0,0-133.853-41.762-178.704,99.507
                                                c0,0-19.777,44.303-22.604,132.695c0,0,4.239,15.638,33.905,14.931h245.102C285.493,252.898,314.452,249.365,313.745,233.826z"/>
                                            <path fill="#D48889" d="M236.76,161.672c0,0-14.416-51.489-44.397-73.891c0,0-33.382-18.034-30.819,47.244
                                                c0,0-4.929-60.185-29.147-44.158c0,0-25.451,14.859-44.522,72.86c0,0-3.848-111.034,71.942-111.034
                                                C159.815,52.694,236.76,44.045,236.76,161.672z"/>
                                            <path fill="#CC6654" d="M16.406,237.967c0,0-3.816-226.724,143.935-231.979c0,0,147.049-6.668,145.637,231.979
                                                c0,0-21.898,21.994-50.15-11.911l-19.779-47.855c0,0,3.525-115.098-73.109-109.906c0,0-67.378-3.322-73.419,111.477
                                                c0,0-13.812,56.587-49.129,65.21C40.391,244.981,19.609,249.836,16.406,237.967z"/>
                                        </g>
                                        <g id="mandibula_x5F_inferior">
                                            <path fill="#D68D90" d="M4.015,286.545c0,0-13.421,194.066,105.951,228.061c0,0,133.853,41.762,178.705-99.507
                                                c0,0,19.777-44.303,22.604-132.695c0,0-4.238-15.638-33.904-14.931H32.268C32.268,267.473,3.308,271.006,4.015,286.545z"/>
                                            <path fill="#D48889" d="M80.882,349.153c0,0,14.416,51.489,44.397,73.892c0,0,33.381,18.034,30.819-47.245
                                                c0,0,4.93,60.186,29.148,44.159c0,0,25.451-14.86,44.521-72.86c0,0,3.848,111.033-71.941,111.033
                                                C157.827,458.131,80.882,466.78,80.882,349.153z"/>
                                            <path fill="#CC6654" d="M301.354,282.404c0,0,3.816,226.724-143.936,231.979c0,0-147.047,6.668-145.635-231.979
                                                c0,0,21.897-21.994,50.15,11.911l19.779,47.855c0,0-3.526,115.098,73.107,109.906c0,0,67.379,3.322,73.42-111.477
                                                c0,0,13.812-56.587,49.129-65.21C277.37,275.39,298.151,270.535,301.354,282.404z"/>
                                        </g>
                                        <g id="dientes_x5F_superiores">
                                            
                                                <path id="d11" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M158.514,26.742c-0.101,4.566-0.714,6.308-1.601,8.483c-3.59,8.809-14.78,7.296-18.5,4.667c-5.833-4.333-6.255-14.839-6.671-16.438
                                                c-0.423-3.819-2.664-8.66,7.288-13.232c3.945-1.345,11.028-2.421,14.704-0.717c5.379,3.138,4.792,8.357,4.792,8.357
                                                S158.249,21.208,158.514,26.742z"/>
                                            
                                                <path id="d12" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M109.282,20.523c4.936-2.703,11.676-5.07,14.493-4.43c2.356,0.654,6.682,2.517,7.086,5.641c0.118,1.63,0.873,4.964,1.298,7.146
                                                c1.285,5.676,3.724,8.721,2.423,13.588c-3.956,7.223-4.611,7.53-13.679,6.368c-2.1-0.86-5.995-3.386-9.018-7.056
                                                c-2.763-3.354-4.711-7.852-5.651-9.119C103.392,25.082,103.895,23.964,109.282,20.523z"/>
                                            
                                                <path id="d13" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M112.516,61.198c-2.69,3.212-6.332,3.777-10.214,3.684c-1.941,0.031-10.66-6.637-14.701-8.896c-8.946-5.667-8.671-6.1-9.077-11.169
                                                c0.925-4.431,3.851-7.146,7.663-9.23c2.849-1.561,8.639-5.61,9-5.587c4.343-2.778,7.758-1.934,10.474,2.477
                                                c3.439,5.578,7.869,12.306,8.854,17.462C114.847,53.154,114.912,57.752,112.516,61.198z"/>
                                            
                                                <path id="d14" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M88.108,82.819c-6.339,3.231-14.664-1.381-20.877-6.696s-4.719-11.918-4.719-11.918s2.958-11.13,10.866-11.686
                                                c3.754-0.678,7.348,0.076,10.9,1.226c3.229,2.451,7.774,4.814,10.801,10.319C97.905,72.261,95.234,78.354,88.108,82.819z"/>
                                            
                                                <path id="d15" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M46.371,98.548c-1.792-2.657-0.074-9.001,0.334-10.46C48.851,80.432,55.447,77.244,62.999,76c1.091-0.233,8.091,2.478,15.705,8.141
                                                c4.99,4.629,4.398,4.304,5.637,10.402s-2.884,13.715-12.16,18.496c-3.354,0.137-16.401-4.614-19.422-7.311
                                                C49.847,103.194,48.615,101.538,46.371,98.548z"/>
                                            
                                                <path id="d16" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M76.746,122.391c1.667,5.833-2.696,19.679-3.154,22.994c-1.657,3.155-3.855,4.852-7.013,5.84
                                                c-10.689,3.436-16.138,0.896-24.781-3.192c-2.135-1.752-4.672-2.219-6.074-5.723c-1.791-2.395,0.355-11.585,1.762-23.131
                                                c2.438-10.729,6.135-13.145,19.945-13.029c4.602,1.003,8.272,4.165,12.729,5.517C74.741,114.081,76.751,121.871,76.746,122.391z"/>
                                            
                                                <path id="d17" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M27.261,179.022c-1.632-4.696-1.545-9.503-1.124-14.38c0.605-7.042,4.247-11.835,10.442-14.897
                                                c7.309-0.606,13.953,2.325,20.85,3.906c3.68,0.846,7.886,3.131,11.339,5.25s3.453,14.078,2.75,18.533
                                                c-1.993,9.848-5.862,21.455-16.215,18.981C29.397,188.364,29.403,181.354,27.261,179.022z"/>
                                            
                                                <path id="d18" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M64.888,216.447c-2.792,6.393-2.475,13.977-8.645,19.126c-4.965,4.144-12.388,3.546-21.206,2.677
                                                c-0.261-0.01-7.28-3.836-10.188-6.173c-4.472-3.592-7.425-8.141-6.825-14.271c1.884-8.41,2.662-17.173,8.769-24.11
                                                c1.807-2.056,3.49-4.008,6.132-4.908c2.513-0.134,4.962-0.824,7.487-0.842c7.689,1.98,14.312,6.406,21.575,9.378
                                                C69.161,205.185,65.928,213.037,64.888,216.447z"/>
                                            
                                                <path id="d21" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M158.514,26.742c0.004-2.96,0.006-5.925,0.011-8.881c-0.174-5.515,6.619-9.785,13.211-8.419s7.479,2.588,8.192,2.962
                                                c8.817,5.154,3.967,15.78,3.967,15.78s-0.697,2.688-1.209,3.445c-3.945,7.635-5.635,7.611-10.055,9.43
                                                c-6.004,2.469-11.717-4.345-12.206-6.471C159.819,32.782,159.429,30.459,158.514,26.742z"/>
                                            
                                                <path id="d22" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M210.002,22.172c0,0,2.577,4.219,0.343,8.257c-2.916,5.654-6.055,11.144-10.891,15.087c-1.425,1.161-3.023,2.256-5.438,2.875
                                                c-6,0.438-10.383-6.818-10.383-6.818s-2.93-5.369,0.548-14.109c0.457-1.247,6.114-11.67,12.229-10.933
                                                C207.136,17.822,210.002,22.172,210.002,22.172z"/>
                                            
                                                <path id="d23" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M204.075,49.097c-0.012-0.247-0.023-0.495-0.033-0.743c2.172-6.39,2.459-13.448,7.826-18.653c3.379-3.275,6.605-4.979,11.092-2.758
                                                c-0.047,0.317,10.557,6.142,14.598,10.365c1.586,3.516,1.814,7.035,0.053,10.564c-0.377,2.003-1.146,3.836-2.346,5.491
                                                c-2.73,2.308-5.826,4.085-8.768,6.1c-2.846,1.211-5.945,1.312-8.906,2.248C208.95,64.438,204.12,59.676,204.075,49.097z"/>
                                            
                                                <path id="d24" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M239.603,78.761c-10.389-0.415-11.854-1.479-14.92-10.836c-0.488-6.829,3.734-8.247,8.682-12.045
                                                c2.068-1.645,7.184-4.657,9.246-6.295c9.174,0.659,12.555,3.47,16.842,11.607c0.311,10.401-0.547,11.529-12.795,15.871
                                                C244.388,77.868,241.958,78.207,239.603,78.761z"/>
                                            
                                                <path id="d25" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M264.183,72.736c10.396,6.016,12.828,14.803,7.025,25.409c-2.82,6.283-8.656,8.173-14.539,9.984
                                                c-1.668,0.06-7.487,1.368-9.922,1.178c-10.115-0.685-16.732-10.221-13.166-19.25c0.77-2.294,2.25-4.5,4.037-6.694
                                                c5.781-5.091,14.48-9.36,20.617-10.851C261.043,71.831,262.193,71.984,264.183,72.736z"/>
                                            
                                                <path id="d26" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M246.194,124.591c0.004-3.396,0.406-6.672,2.863-9.314c5.9-4.888,12.404-8.672,19.816-10.81
                                                c9.205-1.701,15.913-1.034,18.906,17.538c0.299,3.886,1.088,8.174-2.826,14.636c-4.694,5.617-3.541,4.216-11.428,7.969
                                                c-1.887,1.261-16.645,3.087-17.188,2.63C246.468,141.57,246.567,134.87,246.194,124.591z"/>
                                            
                                                <path id="d27" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M275.663,190.637c-4.455,0.562-17.049,7.873-21.756-10.034c-6.17-10.966-6.314-21.339,2.188-29.889
                                                c2.227-1.516,6.741-2.495,9.243-3.386c7.56-1.408,8.883-1.389,15.013-0.915c7.812,0.33,10.736,3.979,12.576,11.786
                                                c0,0,2.215,10.868,1.973,16.231c-1.439,4.732-5.076,8.07-7.701,12.051c-1.945,1.635-4.514,2.095-6.59,3.484
                                                C279.804,189.945,280.118,190.075,275.663,190.637z"/>
                                            
                                                <path id="d28" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M303.731,216.063c-1.428,8.851-5.143,13.315-14.035,19.069l-0.35,0.223c-1.721,0.315-17.934,12.203-27.437-5.639
                                                c0,0-3.943-11.327-5.554-15.555s-6.11-16.77,7.902-21.282c7.541-2.562,11.656-2.922,11.656-2.922
                                                c4.467-0.423,8.93-0.846,13.393-1.269c0,0,7.938-0.297,12.104,10.536C301.412,199.224,305.144,207.318,303.731,216.063z"/>
                                        </g>
                                        <g id="circulos_x5F_superiores">
                                            
                                                <circle id="c30" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="307.046" cy="183.729" r="2.941"/>
                                            
                                                <circle id="c29" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="298.313" cy="139.1" r="2.941"/>
                                            
                                                <circle id="c28" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="286.079" cy="93.438" r="2.941"/>
                                            
                                                <circle id="c27" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="270.933" cy="64.833" r="2.941"/>
                                            
                                                <circle id="c26" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="251.472" cy="39.703" r="2.941"/>
                                            
                                                <circle id="c25" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="219.519" cy="17.384" r="2.941"/>
                                            
                                                <circle id="c24" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="189.218" cy="7.238" r="2.941"/>
                                            
                                                <circle id="c23" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="157.4" cy="4.296" r="2.941"/>
                                            
                                                <circle id="c22" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="126.234" cy="8.501" r="2.941"/>
                                            
                                                <circle id="c21" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="99.585" cy="19.384" r="2.941"/>
                                            
                                                <circle id="c20" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="69.011" cy="46.823" r="2.941"/>
                                            
                                                <circle id="c19" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="52.46" cy="68.125" r="2.941"/>
                                            
                                                <circle id="c18" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="39.915" cy="97.433" r="2.941"/>
                                            
                                                <circle id="c17" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="24.233" cy="142.864" r="2.941"/>
                                            
                                                <circle id="c16" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="16.576" cy="183.384" r="2.941"/>
                                        </g>
                                        <g id="circulos_x5F_inferiores">
                                            
                                            <circle id="c15" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="301.185" cy="336.987" r="2.941"/>
                                        
                                            <circle id="c14" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="292.526" cy="380.507" r="2.941"/>
                                        
                                            <circle id="c13" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="280.845" cy="419.939" r="2.941"/>
                                        
                                            <circle id="c12" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="265.3" cy="450.247" r="2.941"/>
                                        
                                            <circle id="c11" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="247.749" cy="473.548" r="2.941"/>
                                        
                                            <circle id="c10" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="220.175" cy="499.987" r="2.941"/>
                                        
                                            <circle id="c9" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="190.526" cy="511.87" r="2.941"/>
                                        
                                            <circle id="c8" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="158.36" cy="517.075" r="2.942"/>
                                        
                                            <circle id="c7" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="125.543" cy="513.133" r="2.941"/>
                                        
                                            <circle id="c6" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="97.243" cy="501.987" r="2.941"/>
                                        
                                            <circle id="c5" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="68.288" cy="480.668" r="2.941"/>
                                        
                                            <circle id="c4" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="48.886" cy="455.48" r="2.941"/>
                                        
                                            <circle id="c3" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="30.623" cy="423.992" r="2.941"/>
                                        
                                            <circle id="c2" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="18.447" cy="381.271" r="2.941"/>
                                        
                                            <circle id="c1" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="10.773" cy="332.583" r="2.941"/>
                                    </g>
                                        <g id="dientes_x5F_inferiores">
                                            
                                                <path id="d38" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M252.53,302.034c2.792-6.393,2.475-13.977,8.645-19.126c4.965-4.144,12.388-3.546,21.206-2.677c0.261,0.01,7.28,3.836,10.188,6.173
                                                c4.472,3.592,7.425,8.141,6.825,14.271c-1.884,8.41-2.662,17.173-8.769,24.11c-1.807,2.056-3.49,4.008-6.132,4.908
                                                c-2.513,0.134-4.962,0.824-7.487,0.842c-7.689-1.98-14.312-6.406-21.575-9.378C248.257,313.295,251.49,305.444,252.53,302.034z"/>
                                            
                                                <path id="d37" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M292.157,340.458c1.632,4.696,1.545,9.503,1.124,14.381c-0.605,7.041-4.247,11.834-10.442,14.896
                                                c-7.309,0.607-13.953-2.324-20.85-3.906c-3.68-0.846-7.886-3.131-11.339-5.25c-3.453-2.118-3.453-14.077-2.75-18.532
                                                c1.993-9.849,5.862-21.455,16.215-18.981C290.021,331.117,290.015,338.126,292.157,340.458z"/>
                                            
                                                <path id="d36" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M243.672,396.089c-1.666-5.834,2.696-19.68,3.154-22.994c1.657-3.154,3.855-4.852,7.013-5.84
                                                c10.689-3.436,16.139-0.896,24.781,3.191c2.135,1.753,4.672,2.22,6.074,5.724c1.791,2.396-0.355,11.585-1.763,23.132
                                                c-2.438,10.729-6.135,13.145-19.945,13.029c-4.602-1.004-8.272-4.166-12.729-5.518C245.677,404.4,243.667,396.61,243.672,396.089z"
                                                />
                                            
                                                <path id="d35" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M271.047,419.932c1.792,2.657,0.074,9.001-0.334,10.46c-2.146,7.656-8.742,10.845-16.294,12.088
                                                c-1.091,0.233-8.091-2.478-15.705-8.141c-4.99-4.629-4.398-4.304-5.637-10.402c-1.238-6.098,2.884-13.715,12.16-18.496
                                                c3.354-0.137,16.401,4.615,19.422,7.311C267.571,415.287,268.803,416.943,271.047,419.932z"/>
                                            
                                                <path id="d34" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M229.31,435.662c6.34-3.231,14.664,1.381,20.877,6.696c6.214,5.315,4.719,11.918,4.719,11.918s-2.957,11.13-10.866,11.686
                                                c-3.754,0.678-7.348-0.076-10.9-1.226c-3.229-2.451-7.774-4.814-10.801-10.319C219.513,446.219,222.184,440.126,229.31,435.662z"/>
                                            
                                                <path id="d33" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M205.902,459.283c2.69-3.212,6.332-3.777,10.214-3.684c1.941-0.031,10.66,6.637,14.701,8.896c8.946,5.667,8.671,6.1,9.077,11.169
                                                c-0.925,4.431-3.851,7.146-7.663,9.23c-2.849,1.561-8.639,5.61-9,5.587c-4.343,2.778-7.758,1.934-10.474-2.477
                                                c-3.439-5.578-7.869-12.306-8.854-17.462C203.571,467.327,203.506,462.728,205.902,459.283z"/>
                                            
                                                <path id="d32" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M208.136,497.958c-4.936,2.703-11.676,5.07-14.492,4.43c-2.356-0.654-6.683-2.517-7.087-5.641c-0.118-1.63-0.873-4.964-1.298-7.146
                                                c-1.285-5.676-3.724-8.721-2.423-13.588c3.956-7.223,4.611-7.53,13.679-6.368c2.1,0.86,5.995,3.386,9.018,7.057
                                                c2.764,3.354,4.711,7.852,5.651,9.118C214.026,493.399,213.523,494.516,208.136,497.958z"/>
                                            
                                                <path id="d31" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M158.904,491.739c0.101-4.566,0.714-6.308,1.601-8.482c3.59-8.809,14.78-7.296,18.5-4.667c5.833,4.333,6.255,14.839,6.671,16.438
                                                c0.423,3.819,2.664,8.66-7.287,13.232c-3.945,1.345-11.028,2.421-14.704,0.718c-5.379-3.138-4.791-8.357-4.791-8.357
                                                S159.17,497.272,158.904,491.739z"/>
                                            
                                                <path id="d41" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M157.904,494.739c-0.004,2.96-0.006,5.925-0.011,8.881c0.174,5.516-6.619,9.785-13.211,8.419c-6.593-1.365-7.479-2.588-8.192-2.962
                                                c-8.817-5.153-3.967-15.78-3.967-15.78s0.697-2.688,1.209-3.445c3.945-7.635,5.635-7.611,10.055-9.43
                                                c6.004-2.469,11.717,4.346,12.206,6.472C156.599,488.699,156.989,491.022,157.904,494.739z"/>
                                            
                                                <path id="d42" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M105.417,499.308c0,0-2.577-4.219-0.343-8.257c2.916-5.654,6.055-11.144,10.891-15.087c1.425-1.161,3.023-2.256,5.438-2.875
                                                c6-0.438,10.383,6.818,10.383,6.818s2.93,5.369-0.548,14.109c-0.457,1.247-6.114,11.67-12.229,10.933
                                                C108.283,503.659,105.417,499.308,105.417,499.308z"/>
                                            
                                                <path id="d43" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M111.343,470.383c0.012,0.247,0.023,0.495,0.033,0.743c-2.172,6.39-2.459,13.448-7.826,18.653
                                                c-3.379,3.275-6.605,4.979-11.092,2.758c0.047-0.317-10.557-6.142-14.598-10.365c-1.586-3.516-1.814-7.035-0.053-10.564
                                                c0.377-2.003,1.146-3.836,2.346-5.491c2.73-2.308,5.826-4.085,8.768-6.1c2.846-1.211,5.945-1.312,8.906-2.248
                                                C106.468,455.042,111.298,459.804,111.343,470.383z"/>
                                            
                                                <path id="d44" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M77.816,439.719c10.389,0.415,11.854,1.479,14.92,10.836c0.488,6.829-3.734,8.247-8.682,12.045
                                                c-2.068,1.645-7.184,4.657-9.246,6.295c-9.174-0.659-12.555-3.47-16.842-11.607c-0.311-10.401,0.547-11.529,12.795-15.871
                                                C73.031,440.613,75.46,440.274,77.816,439.719z"/>
                                            
                                                <path id="d45" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M53.236,445.745c-10.396-6.016-12.828-14.803-7.025-25.409c2.82-6.283,8.656-8.173,14.539-9.984
                                                c1.668-0.06,7.487-1.367,9.922-1.178c10.115,0.685,16.732,10.221,13.166,19.25c-0.77,2.294-2.25,4.5-4.037,6.694
                                                c-5.781,5.091-14.48,9.36-20.617,10.851C56.375,446.65,55.225,446.497,53.236,445.745z"/>
                                            
                                                <path id="d46" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M69.224,394.889c-0.004,3.396-0.406,6.672-2.863,9.314c-5.9,4.888-12.404,8.672-19.816,10.81
                                                c-9.205,1.701-15.913,1.034-18.906-17.538c-0.299-3.886-1.088-8.174,2.826-14.636c4.694-5.617,3.541-4.216,11.428-7.969
                                                c1.887-1.261,16.645-3.087,17.188-2.63C68.951,377.911,68.851,384.611,69.224,394.889z"/>
                                            
                                                <path id="d47" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M35.755,329.843c4.455-0.562,17.049-7.873,21.756,10.034c6.17,10.966,6.314,21.339-2.188,29.889
                                                c-2.227,1.516-6.741,2.495-9.243,3.386c-7.56,1.408-8.883,1.389-15.013,0.915c-7.812-0.33-10.736-3.979-12.576-11.786
                                                c0,0-2.215-10.868-1.973-16.231c1.439-4.732,5.076-8.07,7.701-12.051c1.945-1.635,4.514-2.095,6.59-3.484
                                                C31.615,330.536,31.3,330.406,35.755,329.843z"/>
                                            
                                                <path id="d48" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                                M13.687,302.417c1.428-8.851,5.143-13.315,14.035-19.069l0.35-0.223c1.721-0.315,17.934-12.202,27.437,5.64
                                                c0,0,3.943,11.326,5.554,15.555s6.11,16.77-7.902,21.282c-7.541,2.562-11.656,2.922-11.656,2.922
                                                c-4.467,0.423-8.93,0.846-13.393,1.269c0,0-7.938,0.297-12.104-10.536C16.006,319.256,12.275,311.163,13.687,302.417z"/>
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
                                        <div class="col-md-4"><div class="circle-base" id="op_3"></div> Fertilizado</div>
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
                                        <path fill="#D68D90" d="M313.745,233.826c0,0,13.422-194.066-105.951-228.061c0,0-133.853-41.762-178.704,99.507
                                            c0,0-19.777,44.303-22.604,132.695c0,0,4.239,15.638,33.905,14.931h245.102C285.493,252.898,314.452,249.365,313.745,233.826z"/>
                                        <path fill="#D48889" d="M236.76,161.672c0,0-14.416-51.489-44.397-73.891c0,0-33.382-18.034-30.819,47.244
                                            c0,0-4.929-60.185-29.147-44.158c0,0-25.451,14.859-44.522,72.86c0,0-3.848-111.034,71.942-111.034
                                            C159.815,52.694,236.76,44.045,236.76,161.672z"/>
                                        <path fill="#CC6654" d="M16.406,237.967c0,0-3.816-226.724,143.935-231.979c0,0,147.049-6.668,145.637,231.979
                                            c0,0-21.898,21.994-50.15-11.911l-19.779-47.855c0,0,3.525-115.098-73.109-109.906c0,0-67.378-3.322-73.419,111.477
                                            c0,0-13.812,56.587-49.129,65.21C40.391,244.981,19.609,249.836,16.406,237.967z"/>
                                    </g>
                                    <g id="mandibula_x5F_inferior">
                                        <path fill="#D68D90" d="M4.015,286.545c0,0-13.421,194.066,105.951,228.061c0,0,133.853,41.762,178.705-99.507
                                            c0,0,19.777-44.303,22.604-132.695c0,0-4.238-15.638-33.904-14.931H32.268C32.268,267.473,3.308,271.006,4.015,286.545z"/>
                                        <path fill="#D48889" d="M80.882,349.153c0,0,14.416,51.489,44.397,73.892c0,0,33.381,18.034,30.819-47.245
                                            c0,0,4.93,60.186,29.148,44.159c0,0,25.451-14.86,44.521-72.86c0,0,3.848,111.033-71.941,111.033
                                            C157.827,458.131,80.882,466.78,80.882,349.153z"/>
                                        <path fill="#CC6654" d="M301.354,282.404c0,0,3.816,226.724-143.936,231.979c0,0-147.047,6.668-145.635-231.979
                                            c0,0,21.897-21.994,50.15,11.911l19.779,47.855c0,0-3.526,115.098,73.107,109.906c0,0,67.379,3.322,73.42-111.477
                                            c0,0,13.812-56.587,49.129-65.21C277.37,275.39,298.151,270.535,301.354,282.404z"/>
                                    </g>
                                    <g id="dientes_x5F_superiores">
                                        
                                            <path id="d11" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M158.514,26.742c-0.101,4.566-0.714,6.308-1.601,8.483c-3.59,8.809-14.78,7.296-18.5,4.667c-5.833-4.333-6.255-14.839-6.671-16.438
                                            c-0.423-3.819-2.664-8.66,7.288-13.232c3.945-1.345,11.028-2.421,14.704-0.717c5.379,3.138,4.792,8.357,4.792,8.357
                                            S158.249,21.208,158.514,26.742z"/>
                                        
                                            <path id="d12" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M109.282,20.523c4.936-2.703,11.676-5.07,14.493-4.43c2.356,0.654,6.682,2.517,7.086,5.641c0.118,1.63,0.873,4.964,1.298,7.146
                                            c1.285,5.676,3.724,8.721,2.423,13.588c-3.956,7.223-4.611,7.53-13.679,6.368c-2.1-0.86-5.995-3.386-9.018-7.056
                                            c-2.763-3.354-4.711-7.852-5.651-9.119C103.392,25.082,103.895,23.964,109.282,20.523z"/>
                                        
                                            <path id="d13" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M112.516,61.198c-2.69,3.212-6.332,3.777-10.214,3.684c-1.941,0.031-10.66-6.637-14.701-8.896c-8.946-5.667-8.671-6.1-9.077-11.169
                                            c0.925-4.431,3.851-7.146,7.663-9.23c2.849-1.561,8.639-5.61,9-5.587c4.343-2.778,7.758-1.934,10.474,2.477
                                            c3.439,5.578,7.869,12.306,8.854,17.462C114.847,53.154,114.912,57.752,112.516,61.198z"/>
                                        
                                            <path id="d14" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M88.108,82.819c-6.339,3.231-14.664-1.381-20.877-6.696s-4.719-11.918-4.719-11.918s2.958-11.13,10.866-11.686
                                            c3.754-0.678,7.348,0.076,10.9,1.226c3.229,2.451,7.774,4.814,10.801,10.319C97.905,72.261,95.234,78.354,88.108,82.819z"/>
                                        
                                            <path id="d15" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M46.371,98.548c-1.792-2.657-0.074-9.001,0.334-10.46C48.851,80.432,55.447,77.244,62.999,76c1.091-0.233,8.091,2.478,15.705,8.141
                                            c4.99,4.629,4.398,4.304,5.637,10.402s-2.884,13.715-12.16,18.496c-3.354,0.137-16.401-4.614-19.422-7.311
                                            C49.847,103.194,48.615,101.538,46.371,98.548z"/>
                                        
                                            <path id="d16" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M76.746,122.391c1.667,5.833-2.696,19.679-3.154,22.994c-1.657,3.155-3.855,4.852-7.013,5.84
                                            c-10.689,3.436-16.138,0.896-24.781-3.192c-2.135-1.752-4.672-2.219-6.074-5.723c-1.791-2.395,0.355-11.585,1.762-23.131
                                            c2.438-10.729,6.135-13.145,19.945-13.029c4.602,1.003,8.272,4.165,12.729,5.517C74.741,114.081,76.751,121.871,76.746,122.391z"/>
                                        
                                            <path id="d17" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M27.261,179.022c-1.632-4.696-1.545-9.503-1.124-14.38c0.605-7.042,4.247-11.835,10.442-14.897
                                            c7.309-0.606,13.953,2.325,20.85,3.906c3.68,0.846,7.886,3.131,11.339,5.25s3.453,14.078,2.75,18.533
                                            c-1.993,9.848-5.862,21.455-16.215,18.981C29.397,188.364,29.403,181.354,27.261,179.022z"/>
                                        
                                            <path id="d18" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M64.888,216.447c-2.792,6.393-2.475,13.977-8.645,19.126c-4.965,4.144-12.388,3.546-21.206,2.677
                                            c-0.261-0.01-7.28-3.836-10.188-6.173c-4.472-3.592-7.425-8.141-6.825-14.271c1.884-8.41,2.662-17.173,8.769-24.11
                                            c1.807-2.056,3.49-4.008,6.132-4.908c2.513-0.134,4.962-0.824,7.487-0.842c7.689,1.98,14.312,6.406,21.575,9.378
                                            C69.161,205.185,65.928,213.037,64.888,216.447z"/>
                                        
                                            <path id="d21" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M158.514,26.742c0.004-2.96,0.006-5.925,0.011-8.881c-0.174-5.515,6.619-9.785,13.211-8.419s7.479,2.588,8.192,2.962
                                            c8.817,5.154,3.967,15.78,3.967,15.78s-0.697,2.688-1.209,3.445c-3.945,7.635-5.635,7.611-10.055,9.43
                                            c-6.004,2.469-11.717-4.345-12.206-6.471C159.819,32.782,159.429,30.459,158.514,26.742z"/>
                                        
                                            <path id="d22" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M210.002,22.172c0,0,2.577,4.219,0.343,8.257c-2.916,5.654-6.055,11.144-10.891,15.087c-1.425,1.161-3.023,2.256-5.438,2.875
                                            c-6,0.438-10.383-6.818-10.383-6.818s-2.93-5.369,0.548-14.109c0.457-1.247,6.114-11.67,12.229-10.933
                                            C207.136,17.822,210.002,22.172,210.002,22.172z"/>
                                        
                                            <path id="d23" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M204.075,49.097c-0.012-0.247-0.023-0.495-0.033-0.743c2.172-6.39,2.459-13.448,7.826-18.653c3.379-3.275,6.605-4.979,11.092-2.758
                                            c-0.047,0.317,10.557,6.142,14.598,10.365c1.586,3.516,1.814,7.035,0.053,10.564c-0.377,2.003-1.146,3.836-2.346,5.491
                                            c-2.73,2.308-5.826,4.085-8.768,6.1c-2.846,1.211-5.945,1.312-8.906,2.248C208.95,64.438,204.12,59.676,204.075,49.097z"/>
                                        
                                            <path id="d24" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M239.603,78.761c-10.389-0.415-11.854-1.479-14.92-10.836c-0.488-6.829,3.734-8.247,8.682-12.045
                                            c2.068-1.645,7.184-4.657,9.246-6.295c9.174,0.659,12.555,3.47,16.842,11.607c0.311,10.401-0.547,11.529-12.795,15.871
                                            C244.388,77.868,241.958,78.207,239.603,78.761z"/>
                                        
                                            <path id="d25" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M264.183,72.736c10.396,6.016,12.828,14.803,7.025,25.409c-2.82,6.283-8.656,8.173-14.539,9.984
                                            c-1.668,0.06-7.487,1.368-9.922,1.178c-10.115-0.685-16.732-10.221-13.166-19.25c0.77-2.294,2.25-4.5,4.037-6.694
                                            c5.781-5.091,14.48-9.36,20.617-10.851C261.043,71.831,262.193,71.984,264.183,72.736z"/>
                                        
                                            <path id="d26" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M246.194,124.591c0.004-3.396,0.406-6.672,2.863-9.314c5.9-4.888,12.404-8.672,19.816-10.81
                                            c9.205-1.701,15.913-1.034,18.906,17.538c0.299,3.886,1.088,8.174-2.826,14.636c-4.694,5.617-3.541,4.216-11.428,7.969
                                            c-1.887,1.261-16.645,3.087-17.188,2.63C246.468,141.57,246.567,134.87,246.194,124.591z"/>
                                        
                                            <path id="d27" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M275.663,190.637c-4.455,0.562-17.049,7.873-21.756-10.034c-6.17-10.966-6.314-21.339,2.188-29.889
                                            c2.227-1.516,6.741-2.495,9.243-3.386c7.56-1.408,8.883-1.389,15.013-0.915c7.812,0.33,10.736,3.979,12.576,11.786
                                            c0,0,2.215,10.868,1.973,16.231c-1.439,4.732-5.076,8.07-7.701,12.051c-1.945,1.635-4.514,2.095-6.59,3.484
                                            C279.804,189.945,280.118,190.075,275.663,190.637z"/>
                                        
                                            <path id="d28" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M303.731,216.063c-1.428,8.851-5.143,13.315-14.035,19.069l-0.35,0.223c-1.721,0.315-17.934,12.203-27.437-5.639
                                            c0,0-3.943-11.327-5.554-15.555s-6.11-16.77,7.902-21.282c7.541-2.562,11.656-2.922,11.656-2.922
                                            c4.467-0.423,8.93-0.846,13.393-1.269c0,0,7.938-0.297,12.104,10.536C301.412,199.224,305.144,207.318,303.731,216.063z"/>
                                    </g>
                                    <g id="circulos_x5F_superiores">
                                        
                                            <circle id="c30" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="307.046" cy="183.729" r="2.941"/>
                                        
                                            <circle id="c29" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="298.313" cy="139.1" r="2.941"/>
                                        
                                            <circle id="c28" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="286.079" cy="93.438" r="2.941"/>
                                        
                                            <circle id="c27" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="270.933" cy="64.833" r="2.941"/>
                                        
                                            <circle id="c26" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="251.472" cy="39.703" r="2.941"/>
                                        
                                            <circle id="c25" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="219.519" cy="17.384" r="2.941"/>
                                        
                                            <circle id="c24" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="189.218" cy="7.238" r="2.941"/>
                                        
                                            <circle id="c23" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="157.4" cy="4.296" r="2.941"/>
                                        
                                            <circle id="c22" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="126.234" cy="8.501" r="2.941"/>
                                        
                                            <circle id="c21" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="99.585" cy="19.384" r="2.941"/>
                                        
                                            <circle id="c20" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="69.011" cy="46.823" r="2.941"/>
                                        
                                            <circle id="c19" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="52.46" cy="68.125" r="2.941"/>
                                        
                                            <circle id="c18" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="39.915" cy="97.433" r="2.941"/>
                                        
                                            <circle id="c17" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="24.233" cy="142.864" r="2.941"/>
                                        
                                            <circle id="c16" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="16.576" cy="183.384" r="2.941"/>
                                    </g>
                                    <g id="circulos_x5F_inferiores">
                                        
                                            <circle id="c15" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="301.185" cy="336.987" r="2.941"/>
                                        
                                            <circle id="c14" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="292.526" cy="380.507" r="2.941"/>
                                        
                                            <circle id="c13" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="280.845" cy="419.939" r="2.941"/>
                                        
                                            <circle id="c12" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="265.3" cy="450.247" r="2.941"/>
                                        
                                            <circle id="c11" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="247.749" cy="473.548" r="2.941"/>
                                        
                                            <circle id="c10" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="220.175" cy="499.987" r="2.941"/>
                                        
                                            <circle id="c9" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="190.526" cy="511.87" r="2.941"/>
                                        
                                            <circle id="c8" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="158.36" cy="517.075" r="2.942"/>
                                        
                                            <circle id="c7" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="125.543" cy="513.133" r="2.941"/>
                                        
                                            <circle id="c6" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="97.243" cy="501.987" r="2.941"/>
                                        
                                            <circle id="c5" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="68.288" cy="480.668" r="2.941"/>
                                        
                                            <circle id="c4" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="48.886" cy="455.48" r="2.941"/>
                                        
                                            <circle id="c3" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="30.623" cy="423.992" r="2.941"/>
                                        
                                            <circle id="c2" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="18.447" cy="381.271" r="2.941"/>
                                        
                                            <circle id="c1" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.5973" stroke-miterlimit="10" cx="10.773" cy="332.583" r="2.941"/>
                                    </g>
                                    <g id="dientes_x5F_inferiores">
                                        
                                            <path id="d38" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M252.53,302.034c2.792-6.393,2.475-13.977,8.645-19.126c4.965-4.144,12.388-3.546,21.206-2.677c0.261,0.01,7.28,3.836,10.188,6.173
                                            c4.472,3.592,7.425,8.141,6.825,14.271c-1.884,8.41-2.662,17.173-8.769,24.11c-1.807,2.056-3.49,4.008-6.132,4.908
                                            c-2.513,0.134-4.962,0.824-7.487,0.842c-7.689-1.98-14.312-6.406-21.575-9.378C248.257,313.295,251.49,305.444,252.53,302.034z"/>
                                        
                                            <path id="d37" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M292.157,340.458c1.632,4.696,1.545,9.503,1.124,14.381c-0.605,7.041-4.247,11.834-10.442,14.896
                                            c-7.309,0.607-13.953-2.324-20.85-3.906c-3.68-0.846-7.886-3.131-11.339-5.25c-3.453-2.118-3.453-14.077-2.75-18.532
                                            c1.993-9.849,5.862-21.455,16.215-18.981C290.021,331.117,290.015,338.126,292.157,340.458z"/>
                                        
                                            <path id="d36" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M243.672,396.089c-1.666-5.834,2.696-19.68,3.154-22.994c1.657-3.154,3.855-4.852,7.013-5.84
                                            c10.689-3.436,16.139-0.896,24.781,3.191c2.135,1.753,4.672,2.22,6.074,5.724c1.791,2.396-0.355,11.585-1.763,23.132
                                            c-2.438,10.729-6.135,13.145-19.945,13.029c-4.602-1.004-8.272-4.166-12.729-5.518C245.677,404.4,243.667,396.61,243.672,396.089z"
                                            />
                                        
                                            <path id="d35" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M271.047,419.932c1.792,2.657,0.074,9.001-0.334,10.46c-2.146,7.656-8.742,10.845-16.294,12.088
                                            c-1.091,0.233-8.091-2.478-15.705-8.141c-4.99-4.629-4.398-4.304-5.637-10.402c-1.238-6.098,2.884-13.715,12.16-18.496
                                            c3.354-0.137,16.401,4.615,19.422,7.311C267.571,415.287,268.803,416.943,271.047,419.932z"/>
                                        
                                            <path id="d34" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M229.31,435.662c6.34-3.231,14.664,1.381,20.877,6.696c6.214,5.315,4.719,11.918,4.719,11.918s-2.957,11.13-10.866,11.686
                                            c-3.754,0.678-7.348-0.076-10.9-1.226c-3.229-2.451-7.774-4.814-10.801-10.319C219.513,446.219,222.184,440.126,229.31,435.662z"/>
                                        
                                            <path id="d33" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M205.902,459.283c2.69-3.212,6.332-3.777,10.214-3.684c1.941-0.031,10.66,6.637,14.701,8.896c8.946,5.667,8.671,6.1,9.077,11.169
                                            c-0.925,4.431-3.851,7.146-7.663,9.23c-2.849,1.561-8.639,5.61-9,5.587c-4.343,2.778-7.758,1.934-10.474-2.477
                                            c-3.439-5.578-7.869-12.306-8.854-17.462C203.571,467.327,203.506,462.728,205.902,459.283z"/>
                                        
                                            <path id="d32" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M208.136,497.958c-4.936,2.703-11.676,5.07-14.492,4.43c-2.356-0.654-6.683-2.517-7.087-5.641c-0.118-1.63-0.873-4.964-1.298-7.146
                                            c-1.285-5.676-3.724-8.721-2.423-13.588c3.956-7.223,4.611-7.53,13.679-6.368c2.1,0.86,5.995,3.386,9.018,7.057
                                            c2.764,3.354,4.711,7.852,5.651,9.118C214.026,493.399,213.523,494.516,208.136,497.958z"/>
                                        
                                            <path id="d31" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M158.904,491.739c0.101-4.566,0.714-6.308,1.601-8.482c3.59-8.809,14.78-7.296,18.5-4.667c5.833,4.333,6.255,14.839,6.671,16.438
                                            c0.423,3.819,2.664,8.66-7.287,13.232c-3.945,1.345-11.028,2.421-14.704,0.718c-5.379-3.138-4.791-8.357-4.791-8.357
                                            S159.17,497.272,158.904,491.739z"/>
                                        
                                            <path id="d41" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M157.904,494.739c-0.004,2.96-0.006,5.925-0.011,8.881c0.174,5.516-6.619,9.785-13.211,8.419c-6.593-1.365-7.479-2.588-8.192-2.962
                                            c-8.817-5.153-3.967-15.78-3.967-15.78s0.697-2.688,1.209-3.445c3.945-7.635,5.635-7.611,10.055-9.43
                                            c6.004-2.469,11.717,4.346,12.206,6.472C156.599,488.699,156.989,491.022,157.904,494.739z"/>
                                        
                                            <path id="d42" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M105.417,499.308c0,0-2.577-4.219-0.343-8.257c2.916-5.654,6.055-11.144,10.891-15.087c1.425-1.161,3.023-2.256,5.438-2.875
                                            c6-0.438,10.383,6.818,10.383,6.818s2.93,5.369-0.548,14.109c-0.457,1.247-6.114,11.67-12.229,10.933
                                            C108.283,503.659,105.417,499.308,105.417,499.308z"/>
                                        
                                            <path id="d43" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M111.343,470.383c0.012,0.247,0.023,0.495,0.033,0.743c-2.172,6.39-2.459,13.448-7.826,18.653
                                            c-3.379,3.275-6.605,4.979-11.092,2.758c0.047-0.317-10.557-6.142-14.598-10.365c-1.586-3.516-1.814-7.035-0.053-10.564
                                            c0.377-2.003,1.146-3.836,2.346-5.491c2.73-2.308,5.826-4.085,8.768-6.1c2.846-1.211,5.945-1.312,8.906-2.248
                                            C106.468,455.042,111.298,459.804,111.343,470.383z"/>
                                        
                                            <path id="d44" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M77.816,439.719c10.389,0.415,11.854,1.479,14.92,10.836c0.488,6.829-3.734,8.247-8.682,12.045
                                            c-2.068,1.645-7.184,4.657-9.246,6.295c-9.174-0.659-12.555-3.47-16.842-11.607c-0.311-10.401,0.547-11.529,12.795-15.871
                                            C73.031,440.613,75.46,440.274,77.816,439.719z"/>
                                        
                                            <path id="d45" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M53.236,445.745c-10.396-6.016-12.828-14.803-7.025-25.409c2.82-6.283,8.656-8.173,14.539-9.984
                                            c1.668-0.06,7.487-1.367,9.922-1.178c10.115,0.685,16.732,10.221,13.166,19.25c-0.77,2.294-2.25,4.5-4.037,6.694
                                            c-5.781,5.091-14.48,9.36-20.617,10.851C56.375,446.65,55.225,446.497,53.236,445.745z"/>
                                        
                                            <path id="d46" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M69.224,394.889c-0.004,3.396-0.406,6.672-2.863,9.314c-5.9,4.888-12.404,8.672-19.816,10.81
                                            c-9.205,1.701-15.913,1.034-18.906-17.538c-0.299-3.886-1.088-8.174,2.826-14.636c4.694-5.617,3.541-4.216,11.428-7.969
                                            c1.887-1.261,16.645-3.087,17.188-2.63C68.951,377.911,68.851,384.611,69.224,394.889z"/>
                                        
                                            <path id="d47" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M35.755,329.843c4.455-0.562,17.049-7.873,21.756,10.034c6.17,10.966,6.314,21.339-2.188,29.889
                                            c-2.227,1.516-6.741,2.495-9.243,3.386c-7.56,1.408-8.883,1.389-15.013,0.915c-7.812-0.33-10.736-3.979-12.576-11.786
                                            c0,0-2.215-10.868-1.973-16.231c1.439-4.732,5.076-8.07,7.701-12.051c1.945-1.635,4.514-2.095,6.59-3.484
                                            C31.615,330.536,31.3,330.406,35.755,329.843z"/>
                                        
                                            <path id="d48" fill-rule="evenodd" clip-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" fill-opacity="1" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M13.687,302.417c1.428-8.851,5.143-13.315,14.035-19.069l0.35-0.223c1.721-0.315,17.934-12.202,27.437,5.64
                                            c0,0,3.943,11.326,5.554,15.555s6.11,16.77-7.902,21.282c-7.541,2.562-11.656,2.922-11.656,2.922
                                            c-4.467,0.423-8.93,0.846-13.393,1.269c0,0-7.938,0.297-12.104-10.536C16.006,319.256,12.275,311.163,13.687,302.417z"/>
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
                        //console.log(data);
                        //var data2 = {"data": [{"tipo": 2,"dientes": "22,23"},{"tipo": 3,"dientes": "22,23"}]};                        
                        //paint_all_tooth(data2);
						//cadena_producto += categoria + s + data;					
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
