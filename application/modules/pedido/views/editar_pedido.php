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
                            <div id="svgload" style="width:320px;">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="320.097px" height="521.372px" viewBox="0 0 320.097 521.372" enable-background="new 0 0 320.097 521.372" xml:space="preserve">
                                    <g id="diente_x5F_sup16">
                                        <path  id="d28" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M311.254,218.104c-1.429,8.849-5.143,13.315-14.034,19.069l-0.352,0.224c-1.721,0.312-3.523,0.391-5.147,0.974
                                            c-12.674,4.551-19.196,1.757-24.055-10.431l-0.08-0.323c-0.789-3.313-0.761-6.954-3.706-11.415c0,0-9.931-20.265,7.902-21.282
                                            c7.541-2.565,11.655-2.922,11.655-2.922c4.466-0.424,8.929-0.847,13.393-1.269l0.119,0.012c5.348,2.31,5.957,8.985,10.592,11.989
                                            C307.541,202.728,312.666,209.358,311.254,218.104z"/>
                                    </g>
                                    <g id="diente_x5F_sup15">
                                        <path  id="d27" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M278.409,192.677c-4.455,0.562-17.048,7.873-21.756-10.036c-6.169-10.964-6.314-21.336,2.187-29.888
                                            c2.228-1.513,4.781-2.257,7.283-3.149c5.631,1.306,11.289-0.146,16.938,0.093c7.812,0.332,10.771,2.737,12.612,10.544l-0.021,0.483
                                            c2.184,5.057,2.234,10.383,1.992,15.745c-1.44,4.736-5.074,8.074-7.7,12.054c-1.946,1.632-4.514,2.093-6.59,3.482
                                            C282.549,191.984,282.863,192.115,278.409,192.677z"/>
                                    </g>
                                    <g id="diente_x5F_sup14">
                                        <path  id="d26" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M245.94,127.63c0.004-3.396,0.407-6.671,2.862-9.313c5.899-4.889,12.404-8.674,19.816-10.81
                                            c14.576,0.108,22.292,10.326,17.493,25.381c-0.869,1.256-1.73,3.561-2.123,4.954c-2.421,8.588-2.666,6.93-10.716,9.807
                                            c-1.887,1.262-16.645,3.088-17.189,2.628C246.213,144.608,246.314,137.91,245.94,127.63z"/>
                                    </g>
                                    <g id="diente_x5F_sup13">
                                        <path  id="d25" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M257.929,78.775c10.398,6.016,12.827,14.803,7.024,25.409c-2.818,6.283-8.654,8.171-14.539,9.985
                                            c-1.667,0.059-3.303-0.145-4.896-0.637c-4.148-0.532-3.2-0.267-4.836-0.005c-10.113-0.686-14.976-7.797-11.79-17.292
                                            c0.77-2.295,1.645-4.556,2.472-6.832c2.638,1.043,3.094-2.669,5.349-2.455C243.33,83.042,250.384,80.27,257.929,78.775z"/>
                                    </g>
                                    <g id="diente_x5F_sup12">
                                        <path  id="d24" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M235.349,84.8c-10.39-0.414-11.854-1.479-14.92-10.835c-0.487-6.831,3.733-8.246,8.682-12.046c2.069-1.643,7.184-4.656,9.247-6.294
                                            c9.173,0.659,12.554,3.47,16.839,11.61c0.313,10.4-0.545,11.526-12.792,15.869C240.134,83.906,237.705,84.245,235.349,84.8z"/>
                                    </g>
                                    <g id="diente_x5F_sup11">
                                        <path  id="d23" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M205.821,52.58c-0.013-0.248-0.022-0.496-0.033-0.744c2.171-6.389,2.46-13.45,7.827-18.655c3.378-3.275,6.605-4.977,11.092-2.756
                                            c-0.048,0.318-0.099,0.633-0.146,0.95c5.844,1.684,9.604,6.63,14.743,9.416c1.585,3.514,1.812,7.035,0.052,10.565
                                            c-0.376,2.002-1.145,3.837-2.346,5.491c-2.73,2.306-5.825,4.083-8.767,6.1c-2.846,1.209-5.945,1.311-8.906,2.247
                                            C210.696,67.919,205.866,63.157,205.821,52.58z"/>
                                    </g>
                                    <g id="diente_x5F_sup10">
                                        <path  id="d22" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M212.489,33.561c-4.195,8.257-9.955,15.129-17.828,20.134c-4.584-0.187-8.501-1.459-10.282-6.251
                                            c-0.771-4.634-3.417-9.487,1.566-13.45c0.457-1.247,0.916-2.49,1.372-3.736c1.689-4.605,3.725-8.592,9.84-7.855
                                            C207.882,23.693,211.718,26.376,212.489,33.561z"/>
                                    </g>
                                    <g id="diente_x5F_sup9">
                                        <path  id="d21" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M160.261,30.782c0.003-2.962,0.005-5.924,0.011-8.883c2.592-6.266,7.104-7.828,13.459-5.976c2.486,0.725,5.287,0.377,7.941,0.52
                                            c6.166,4.043,3.969,15.779,3.969,15.779s-0.695,2.688-1.209,3.445c-3.945,7.637-5.635,7.613-10.055,9.43
                                            c-6.004,2.468-9.027-2.641-11.469-7.335C163.063,35.043,161.981,32.789,160.261,30.782z"/>
                                    </g>
                                    <g id="diente_x5F_sup8">
                                        <path  id="d11" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M160.26,30.782c-2.526,1.364-2.176,4.08-3.065,6.256c-3.589,8.807-10.276,12.806-16.981,6.003c-5.28-1.824-3.657-7.16-5.469-10.749
                                            c-0.418-1.601-0.839-3.202-1.257-4.8c0.906-6.357,4.499-10.084,10.868-11.092c6.014-0.211,12.171-0.849,15.916,5.5
                                            C159.995,25.247,159.995,25.247,160.26,30.782z"/>
                                    </g>
                                    <g id="diente_x5F_sup7">
                                        <path  id="d12" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M112.029,25.562c4.935-2.702,10.287-3.729,15.842-3.941c2.161,2.226,3.899,2.253,5.735,5.151c0.119,1.633,0.875,4.965,1.299,7.148
                                            c1.285,5.677,3.724,8.72,2.423,13.588c-3.955,7.224-4.611,7.529-13.678,6.368c-4.019-1.647-7.562-2.706-9.581-7.219
                                            c-1.34-3.023-3.12-6.302-5.09-8.957C106.138,30.122,106.641,29.005,112.029,25.562z"/>
                                    </g>
                                    <g id="diente_x5F_sup6">
                                        <path  id="d13" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M113.262,62.236c-2.69,3.212-6.332,3.78-10.214,3.686c-1.941,0.029-10.66-6.639-14.702-8.896c-8.946-5.668-8.67-6.101-9.077-11.17
                                            c0.925-4.43,3.851-7.144,7.663-9.23c2.849-1.561,8.639-5.608,9-5.584c4.344-2.781,7.758-1.937,10.474,2.474
                                            c3.438,5.579,7.869,12.306,8.854,17.464C115.592,54.194,115.659,58.792,113.262,62.236z"/>
                                    </g>
                                    <g id="diente_x5F_sup5">
                                        <path  id="d14" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M91.855,85.859c-11.172,4.722-13.642-4.973-20.878-6.696c-0.651,0.054-6.455-6.708-4.718-11.921
                                            c0.965-6.365,7.321-7.719,10.866-11.684c3.753-0.679,7.348,0.075,10.9,1.224c3.229,2.453,7.775,4.816,10.802,10.32
                                            C101.651,75.302,98.981,81.394,91.855,85.859z"/>
                                    </g>
                                    <g id="diente_x5F_sup4">
                                        <path  id="d15" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M50.278,100.472c-1.025-1.625,2.06-7.241,2.468-8.698c2.146-7.657,7.447-11.492,14.999-12.733c1.091-0.235,2.161-0.058,3.232,0.123
                                            c5.265,1.052,8.005,5.511,11.692,8.696c1.532,3.611,5.952,5.061,6.417,9.723c0.761,7.647-2.885,13.713-12.16,18.497
                                            c-3.354,0.136-16.402-4.617-19.422-7.311C54.593,106.234,52.522,103.46,50.278,100.472z"/>
                                    </g>
                                    <g id="diente_x5F_sup3">
                                        <path  id="d16" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M75.757,124.846c-0.004,0.52-0.008,1.037-0.014,1.555c-1.348,3.91-1.191,8.028-1.67,12.061c-1.504,2.88-3.277,5.647-3.734,8.962
                                            c-0.473,3.435-2.617,5.345-5.774,6.331c-10.69,3.437-16.834,1.403-23.903-7.485c-1.786-2.247-3.31-4.678-5.181-6.852
                                            c-0.421-1.643-0.843-3.285-1.263-4.928c-0.198-4.425,0.089-8.849,0.016-13.272c2.438-10.728,6.134-13.144,19.945-13.029
                                            c4.602,1.002,8.272,4.166,12.729,5.515C71.487,116.122,73.632,120.477,75.757,124.846z"/>
                                    </g>
                                    <g id="diente_x5F_sup2">
                                        <path  id="d17" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M25.007,180.683c-1.632-4.695-1.545-9.503-1.124-14.38c0.605-7.042,4.247-11.833,10.442-14.895
                                            c7.309-0.607,13.953,2.324,20.85,3.907c3.68,0.845,6.352-1.084,11.182,1.327c1.6,2.041,0.896,8.76,1.343,13.139
                                            c-1.561,11.153-4.055,21.822-14.651,28.298C27.144,190.026,27.149,183.015,25.007,180.683z"/>
                                    </g>
                                    <g id="diente_x5F_sup1">
                                        <path  id="d18" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M55.314,218.613c-2.791,6.393-2.476,13.977-8.645,19.126c-4.965,4.144-12.389,3.547-21.206,2.677
                                            c-0.262-0.012-7.281-3.836-10.188-6.174c-4.472-3.592-7.425-8.141-6.825-14.272c1.884-8.41,2.663-17.171,8.769-24.11
                                            c1.806-2.056,3.489-4.008,6.132-4.907c2.511-0.134,4.96-0.824,7.486-0.843c7.69,1.979,14.312,6.407,21.574,9.377
                                            C59.587,207.352,56.355,215.203,55.314,218.613z"/>
                                    </g>
                                    <g id="diente_x5F_inf1">
                                        
                                            <path  id="d48" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M7.717,304.308c1.429-8.851,5.143-13.315,14.035-19.069l0.35-0.223c1.721-0.315,3.525-0.393,5.149-0.975
                                            c12.674-4.553,19.197-1.757,24.055,10.432l0.08,0.321c0.789,3.313,0.762,6.955,3.706,11.416c0,0,9.931,20.263-7.902,21.282
                                            c-7.541,2.562-11.655,2.922-11.655,2.922c-4.467,0.423-8.93,0.846-13.393,1.269l-0.119-0.011
                                            c-5.349-2.312-5.958-8.986-10.594-11.989C11.429,319.683,6.305,313.053,7.717,304.308z"/>
                                    </g>
                                    <g id="diente_x5F_inf2">
                                        <path  id="d47" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M41.786,329.734c4.455-0.562,17.047-7.873,21.755,10.034c6.169,10.966,6.314,21.339-2.187,29.889
                                            c-2.228,1.516-4.781,2.259-7.283,3.149c-5.631-1.306-11.289,0.146-16.938-0.092c-7.812-0.33-10.771-2.736-12.613-10.543
                                            l0.021-0.485c-2.182-5.055-2.235-10.383-1.992-15.746c1.439-4.732,5.075-8.07,7.7-12.051c1.946-1.635,4.515-2.095,6.59-3.484
                                            C37.646,330.426,37.331,330.296,41.786,329.734z"/>
                                    </g>
                                    <g id="diente_x5F_inf3">
                                        <path  id="d46" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M74.254,394.78c-0.003,3.396-0.406,6.672-2.862,9.314c-5.9,4.888-12.404,8.672-19.816,10.81
                                            C37,414.794,29.283,404.58,34.083,389.522c0.869-1.257,1.73-3.562,2.123-4.955c2.421-8.588,2.666-6.929,10.717-9.806
                                            c1.886-1.261,16.644-3.087,17.188-2.63C73.981,377.801,73.88,384.501,74.254,394.78z"/>
                                    </g>
                                    <g id="diente_x5F_inf4">
                                        <path  id="d45" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M62.265,443.635c-10.396-6.016-12.826-14.803-7.024-25.409c2.819-6.283,8.655-8.173,14.54-9.984
                                            c1.667-0.06,3.303,0.143,4.896,0.636c4.147,0.533,3.199,0.269,4.835,0.006c10.114,0.685,14.976,7.797,11.79,17.293
                                            c-0.77,2.294-1.645,4.556-2.472,6.832c-2.638-1.044-3.094,2.667-5.349,2.455C76.864,439.37,69.81,442.141,62.265,443.635z"/>
                                    </g>
                                    <g id="diente_x5F_inf5">
                                        <path  id="d44" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M84.847,437.61c10.388,0.415,11.853,1.479,14.92,10.836c0.486,6.829-3.734,8.247-8.683,12.045
                                            c-2.069,1.645-7.184,4.657-9.247,6.295c-9.173-0.659-12.554-3.47-16.84-11.607c-0.312-10.401,0.547-11.529,12.794-15.871
                                            C80.06,438.503,82.49,438.165,84.847,437.61z"/>
                                    </g>
                                    <g id="diente_x5F_inf6">
                                        <path  id="d43" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M114.374,469.833c0.012,0.247,0.022,0.495,0.033,0.743c-2.172,6.39-2.46,13.448-7.828,18.653
                                            c-3.378,3.275-6.605,4.979-11.092,2.758c0.048-0.317,0.098-0.635,0.146-0.949c-5.844-1.687-9.604-6.63-14.743-9.416
                                            c-1.585-3.516-1.814-7.035-0.053-10.564c0.377-2.003,1.146-3.836,2.346-5.491c2.73-2.308,5.825-4.085,8.767-6.1
                                            c2.845-1.211,5.945-1.312,8.906-2.248C109.498,454.492,114.328,459.253,114.374,469.833z"/>
                                    </g>
                                    <g id="diente_x5F_inf7">
                                        <path  id="d42" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M107.705,488.683c4.195-8.257,9.955-15.132,17.828-20.135c4.583,0.186,8.501,1.46,10.282,6.25
                                            c0.771,4.636,3.418,9.488-1.566,13.451c-0.457,1.247-0.916,2.49-1.372,3.735c-1.689,4.605-3.726,8.593-9.84,7.855
                                            C112.312,498.549,108.477,495.868,107.705,488.683z"/>
                                    </g>
                                    <g id="diente_x5F_inf8">
                                        <path  id="d41" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M159.934,491.63c-0.004,2.96-0.006,5.925-0.012,8.881c-2.592,6.268-7.104,7.828-13.46,5.978c-2.485-0.727-5.286-0.377-7.942-0.521
                                            c-6.166-4.043-3.968-15.78-3.968-15.78s0.697-2.688,1.21-3.445c3.945-7.635,5.635-7.611,10.055-9.43
                                            c6.003-2.469,9.026,2.643,11.469,7.335C157.132,487.368,158.212,489.623,159.934,491.63z"/>
                                    </g>
                                    <g id="diente_x5F_inf9">
                                        <path  id="d31" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M159.934,491.629c2.526-1.364,2.177-4.081,3.065-6.256c3.589-8.809,10.276-12.807,16.981-6.006c5.28,1.826,3.657,7.16,5.469,10.75
                                            c0.42,1.603,0.841,3.201,1.257,4.8c-0.905,6.358-4.498,10.087-10.868,11.093c-6.014,0.212-12.17,0.848-15.915-5.5
                                            C160.199,497.163,160.199,497.163,159.934,491.629z"/>
                                    </g>
                                    <g id="diente_x5F_inf10">
                                        <path  id="d32" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M208.166,496.68c-4.936,2.703-10.287,3.729-15.842,3.942c-2.162-2.228-3.9-2.256-5.737-5.153c-0.118-1.63-0.873-4.964-1.298-7.146
                                            c-1.285-5.676-3.724-8.721-2.423-13.588c3.956-7.223,4.611-7.53,13.679-6.368c4.019,1.647,7.562,2.706,9.58,7.221
                                            c1.34,3.022,3.12,6.301,5.089,8.954C214.057,492.122,213.554,493.239,208.166,496.68z"/>
                                    </g>
                                    <g id="diente_x5F_inf11">
                                        <path  id="d33" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M206.933,460.173c2.69-3.212,6.332-3.777,10.214-3.684c1.941-0.031,10.66,6.637,14.701,8.896c8.946,5.667,8.671,6.1,9.077,11.169
                                            c-0.925,4.431-3.851,7.146-7.663,9.23c-2.849,1.561-8.639,5.61-9,5.587c-4.343,2.778-7.758,1.934-10.474-2.477
                                            c-3.439-5.578-7.869-12.306-8.854-17.462C204.602,468.217,204.536,463.619,206.933,460.173z"/>
                                    </g>
                                    <g id="diente_x5F_inf12">
                                        <path  id="d34" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M228.34,436.552c11.172-4.725,13.642,4.971,20.877,6.696c0.651-0.057,6.456,6.706,4.719,11.918
                                            c-0.966,6.365-7.321,7.719-10.866,11.686c-3.754,0.678-7.348-0.076-10.9-1.226c-3.229-2.451-7.774-4.814-10.801-10.319
                                            C218.543,447.11,221.214,441.017,228.34,436.552z"/>
                                    </g>
                                    <g id="diente_x5F_inf13">
                                        <path  id="d35" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M269.916,421.938c1.025,1.626-2.06,7.24-2.468,8.699c-2.146,7.656-7.447,11.49-14.999,12.733c-1.091,0.233-2.16,0.056-3.232-0.122
                                            c-5.265-1.055-8.005-5.514-11.692-8.697c-1.532-3.613-5.952-5.062-6.417-9.723c-0.761-7.649,2.884-13.715,12.16-18.496
                                            c3.354-0.137,16.401,4.614,19.422,7.311C265.602,416.177,267.672,418.949,269.916,421.938z"/>
                                    </g>
                                    <g id="diente_x5F_inf14">
                                        <path id="d36" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M244.438,397.566c0.003-0.521,0.009-1.037,0.014-1.558c1.348-3.911,1.19-8.026,1.671-12.059c1.503-2.88,3.276-5.648,3.734-8.963
                                            c0.473-3.435,2.616-5.344,5.773-6.332c10.689-3.436,16.835-1.404,23.903,7.485c1.785,2.249,3.31,4.678,5.181,6.853
                                            c0.42,1.641,0.843,3.285,1.264,4.927c0.197,4.427-0.089,8.85-0.016,13.273c-2.438,10.729-6.135,13.145-19.945,13.029
                                            c-4.602-1.003-8.272-4.165-12.729-5.517C248.707,406.291,246.563,401.933,244.438,397.566z"/>
                                    </g>
                                    <g id="diente_x5F_inf15">
                                        <path id="d37" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M295.188,341.349c1.632,4.696,1.545,9.503,1.124,14.381c-0.605,7.042-4.247,11.835-10.442,14.897
                                            c-7.309,0.606-13.953-2.325-20.85-3.906c-3.68-0.846-6.353,1.082-11.183-1.327c-1.599-2.042-0.895-8.76-1.342-13.142
                                            c1.561-11.15,4.056-21.82,14.65-28.296C293.051,332.007,293.045,339.017,295.188,341.349z"/>
                                    </g>
                                    <g id="diente_x5F_inf16">
                                        <path  id="d38" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M264.561,303.797c2.792-6.393,2.475-13.977,8.645-19.126c4.965-4.144,12.388-3.546,21.206-2.677
                                            c0.261,0.01,7.28,3.836,10.188,6.173c4.472,3.592,7.425,8.141,6.825,14.271c-1.884,8.41-2.662,17.173-8.769,24.11
                                            c-1.807,2.056-3.49,4.008-6.132,4.908c-2.513,0.134-4.962,0.824-7.487,0.842c-7.689-1.98-14.312-6.406-21.575-9.378
                                            C260.287,315.059,263.521,307.208,264.561,303.797z"/>
                                    </g>
                                    </svg>
                            </div>                   
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


<form  id="form_pedido" name="formulario_pedido" method="post" action="<?php echo base_url(); ?>index.php/pedido/pedidos/procesarEdicionPedido/<?php echo $numero_de_pedido; ?>" enctype="multipart/form-data">

<div class="panel panel-primary" >
    <div class="panel-heading">DATOS DEL PEDIDO <b><?php echo $numero_de_pedido ?></b></div>

        <!-- contenedor 1 -->
            <div id="contenedor1" style="border: 2px solid #018CF1;">
                <div class="row container">
                            <!-- campo cliente -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label required" for="formulario_pedido_cliente">Cliente<span class="required"> * </span></label>                            
                                    <input type="text" id="formulario_pedido_cliente" name="formulario_pedido[CLIENTE]" autocomplete="off" readonly="" style="cursor:not-allowed"
                                            <?php if(form_error('formulario_pedido[CLIENTE]') != '' ){?>
                                            aria-describedby="formulario_pedido_cliente-error"
                                           <?php } ?>

                                           <?php 
                                           		if(isset($data_cliente_pedido[0]) )
                                           		{
                                           	?>
                                            	value='<?php echo $data_cliente_pedido[0]['cliente']; ?>';
                                           <?php 
                                           		}
                                            ?>
                                            
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

                                           <?php 
                                           		if(isset($data_cliente_pedido[0]) )
                                           		{
                                           	?>
                                            	value='<?php echo $data_cliente_pedido[0]['NOMBRE_PACIENTE']; ?>';
                                           <?php 
                                           		}
                                            ?>

                                           required="required" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" 
                                           />
                                            <?php if(form_error('formulario_pedido[NOMBREPACIENTE]') != '' ){?>
                                                <span id="formulario_pedido_paciente_nombre-error" class="help-block">
                                                    <?= form_error('formulario_pedido[NOMBREPACIENTE]') ?>
                                                </span>
                                            <?php } ?>
                                </div>
                            </div>

                            <!-- campo apellido paciente -->
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label required" for="formulario_pedido_paciente_apellido">Apellido Paciente<span class="required"> * </span></label>                            
                                    <input type="text" id="formulario_pedido_paciente_apellido" name="formulario_pedido[APELLIDOPACIENTE]" onblur="validarDatosCont1() " autocomplete="off"
                                            <?php if(form_error('formulario_pedido[APELLIDOPACIENTE]') != '' ){?>
                                            aria-describedby="formulario_pedido_paciente_apellido-error"
                                           <?php } ?>

                                           <?php 
                                           		if(isset($data_cliente_pedido[0]) )
                                           		{
                                           	?>
                                            	value='<?php echo $data_cliente_pedido[0]['APELLIDO_PACIENTE']; ?>';
                                           <?php 
                                           		}
                                            ?>

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

                                           <?php 
                                           		if(isset($data_cliente_pedido[0]) )
                                           		{
                                           	?>
                                            	value='<?php echo $data_cliente_pedido[0]['MEDICO_TRATANTE']; ?>';
                                           <?php 
                                           		}
                                            ?>

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
                                          <input type="radio" value="NORMAL" checked="checked" id="formulario_pedido_prioridadn" name="formulario_pedido[PRIORIDAD]" 

                                           <?php 
                                           		if(isset($data_cliente_pedido[0]) && $data_cliente_pedido[0]['PRIORIDAD']=='NORMAL' )
                                           		{
                                           	?>
                                            		checked="checked"
                                           <?php 
                                           		}
                                            ?>

                                          > Normal
                                        </label>
                                        <label class="checkbox-inline">
                                          <input type="radio" value="URGENTE" id="formulario_pedido_prioridadu" name="formulario_pedido[PRIORIDAD]"
                                           <?php 
                                           		if(isset($data_cliente_pedido[0]) && $data_cliente_pedido[0]['PRIORIDAD']=='URGENTE' )
                                           		{
                                           	?>
                                            		checked="checked"
                                           <?php 
                                           		}
                                            ?>
                                          > Urgente
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
                        <div id="svgload" style="width:320px;">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="320.097px" height="521.372px" viewBox="0 0 320.097 521.372" enable-background="new 0 0 320.097 521.372" xml:space="preserve">
                                    <g id="diente_x5F_sup16">
                                        <path  id="d28" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M311.254,218.104c-1.429,8.849-5.143,13.315-14.034,19.069l-0.352,0.224c-1.721,0.312-3.523,0.391-5.147,0.974
                                            c-12.674,4.551-19.196,1.757-24.055-10.431l-0.08-0.323c-0.789-3.313-0.761-6.954-3.706-11.415c0,0-9.931-20.265,7.902-21.282
                                            c7.541-2.565,11.655-2.922,11.655-2.922c4.466-0.424,8.929-0.847,13.393-1.269l0.119,0.012c5.348,2.31,5.957,8.985,10.592,11.989
                                            C307.541,202.728,312.666,209.358,311.254,218.104z"/>
                                    </g>
                                    <g id="diente_x5F_sup15">
                                        <path  id="d27" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M278.409,192.677c-4.455,0.562-17.048,7.873-21.756-10.036c-6.169-10.964-6.314-21.336,2.187-29.888
                                            c2.228-1.513,4.781-2.257,7.283-3.149c5.631,1.306,11.289-0.146,16.938,0.093c7.812,0.332,10.771,2.737,12.612,10.544l-0.021,0.483
                                            c2.184,5.057,2.234,10.383,1.992,15.745c-1.44,4.736-5.074,8.074-7.7,12.054c-1.946,1.632-4.514,2.093-6.59,3.482
                                            C282.549,191.984,282.863,192.115,278.409,192.677z"/>
                                    </g>
                                    <g id="diente_x5F_sup14">
                                        <path  id="d26" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M245.94,127.63c0.004-3.396,0.407-6.671,2.862-9.313c5.899-4.889,12.404-8.674,19.816-10.81
                                            c14.576,0.108,22.292,10.326,17.493,25.381c-0.869,1.256-1.73,3.561-2.123,4.954c-2.421,8.588-2.666,6.93-10.716,9.807
                                            c-1.887,1.262-16.645,3.088-17.189,2.628C246.213,144.608,246.314,137.91,245.94,127.63z"/>
                                    </g>
                                    <g id="diente_x5F_sup13">
                                        <path  id="d25" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M257.929,78.775c10.398,6.016,12.827,14.803,7.024,25.409c-2.818,6.283-8.654,8.171-14.539,9.985
                                            c-1.667,0.059-3.303-0.145-4.896-0.637c-4.148-0.532-3.2-0.267-4.836-0.005c-10.113-0.686-14.976-7.797-11.79-17.292
                                            c0.77-2.295,1.645-4.556,2.472-6.832c2.638,1.043,3.094-2.669,5.349-2.455C243.33,83.042,250.384,80.27,257.929,78.775z"/>
                                    </g>
                                    <g id="diente_x5F_sup12">
                                        <path  id="d24" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M235.349,84.8c-10.39-0.414-11.854-1.479-14.92-10.835c-0.487-6.831,3.733-8.246,8.682-12.046c2.069-1.643,7.184-4.656,9.247-6.294
                                            c9.173,0.659,12.554,3.47,16.839,11.61c0.313,10.4-0.545,11.526-12.792,15.869C240.134,83.906,237.705,84.245,235.349,84.8z"/>
                                    </g>
                                    <g id="diente_x5F_sup11">
                                        <path  id="d23" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M205.821,52.58c-0.013-0.248-0.022-0.496-0.033-0.744c2.171-6.389,2.46-13.45,7.827-18.655c3.378-3.275,6.605-4.977,11.092-2.756
                                            c-0.048,0.318-0.099,0.633-0.146,0.95c5.844,1.684,9.604,6.63,14.743,9.416c1.585,3.514,1.812,7.035,0.052,10.565
                                            c-0.376,2.002-1.145,3.837-2.346,5.491c-2.73,2.306-5.825,4.083-8.767,6.1c-2.846,1.209-5.945,1.311-8.906,2.247
                                            C210.696,67.919,205.866,63.157,205.821,52.58z"/>
                                    </g>
                                    <g id="diente_x5F_sup10">
                                        <path  id="d22" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M212.489,33.561c-4.195,8.257-9.955,15.129-17.828,20.134c-4.584-0.187-8.501-1.459-10.282-6.251
                                            c-0.771-4.634-3.417-9.487,1.566-13.45c0.457-1.247,0.916-2.49,1.372-3.736c1.689-4.605,3.725-8.592,9.84-7.855
                                            C207.882,23.693,211.718,26.376,212.489,33.561z"/>
                                    </g>
                                    <g id="diente_x5F_sup9">
                                        <path  id="d21" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M160.261,30.782c0.003-2.962,0.005-5.924,0.011-8.883c2.592-6.266,7.104-7.828,13.459-5.976c2.486,0.725,5.287,0.377,7.941,0.52
                                            c6.166,4.043,3.969,15.779,3.969,15.779s-0.695,2.688-1.209,3.445c-3.945,7.637-5.635,7.613-10.055,9.43
                                            c-6.004,2.468-9.027-2.641-11.469-7.335C163.063,35.043,161.981,32.789,160.261,30.782z"/>
                                    </g>
                                    <g id="diente_x5F_sup8">
                                        <path  id="d11" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M160.26,30.782c-2.526,1.364-2.176,4.08-3.065,6.256c-3.589,8.807-10.276,12.806-16.981,6.003c-5.28-1.824-3.657-7.16-5.469-10.749
                                            c-0.418-1.601-0.839-3.202-1.257-4.8c0.906-6.357,4.499-10.084,10.868-11.092c6.014-0.211,12.171-0.849,15.916,5.5
                                            C159.995,25.247,159.995,25.247,160.26,30.782z"/>
                                    </g>
                                    <g id="diente_x5F_sup7">
                                        <path  id="d12" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M112.029,25.562c4.935-2.702,10.287-3.729,15.842-3.941c2.161,2.226,3.899,2.253,5.735,5.151c0.119,1.633,0.875,4.965,1.299,7.148
                                            c1.285,5.677,3.724,8.72,2.423,13.588c-3.955,7.224-4.611,7.529-13.678,6.368c-4.019-1.647-7.562-2.706-9.581-7.219
                                            c-1.34-3.023-3.12-6.302-5.09-8.957C106.138,30.122,106.641,29.005,112.029,25.562z"/>
                                    </g>
                                    <g id="diente_x5F_sup6">
                                        <path  id="d13" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M113.262,62.236c-2.69,3.212-6.332,3.78-10.214,3.686c-1.941,0.029-10.66-6.639-14.702-8.896c-8.946-5.668-8.67-6.101-9.077-11.17
                                            c0.925-4.43,3.851-7.144,7.663-9.23c2.849-1.561,8.639-5.608,9-5.584c4.344-2.781,7.758-1.937,10.474,2.474
                                            c3.438,5.579,7.869,12.306,8.854,17.464C115.592,54.194,115.659,58.792,113.262,62.236z"/>
                                    </g>
                                    <g id="diente_x5F_sup5">
                                        <path  id="d14" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M91.855,85.859c-11.172,4.722-13.642-4.973-20.878-6.696c-0.651,0.054-6.455-6.708-4.718-11.921
                                            c0.965-6.365,7.321-7.719,10.866-11.684c3.753-0.679,7.348,0.075,10.9,1.224c3.229,2.453,7.775,4.816,10.802,10.32
                                            C101.651,75.302,98.981,81.394,91.855,85.859z"/>
                                    </g>
                                    <g id="diente_x5F_sup4">
                                        <path  id="d15" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M50.278,100.472c-1.025-1.625,2.06-7.241,2.468-8.698c2.146-7.657,7.447-11.492,14.999-12.733c1.091-0.235,2.161-0.058,3.232,0.123
                                            c5.265,1.052,8.005,5.511,11.692,8.696c1.532,3.611,5.952,5.061,6.417,9.723c0.761,7.647-2.885,13.713-12.16,18.497
                                            c-3.354,0.136-16.402-4.617-19.422-7.311C54.593,106.234,52.522,103.46,50.278,100.472z"/>
                                    </g>
                                    <g id="diente_x5F_sup3">
                                        <path  id="d16" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M75.757,124.846c-0.004,0.52-0.008,1.037-0.014,1.555c-1.348,3.91-1.191,8.028-1.67,12.061c-1.504,2.88-3.277,5.647-3.734,8.962
                                            c-0.473,3.435-2.617,5.345-5.774,6.331c-10.69,3.437-16.834,1.403-23.903-7.485c-1.786-2.247-3.31-4.678-5.181-6.852
                                            c-0.421-1.643-0.843-3.285-1.263-4.928c-0.198-4.425,0.089-8.849,0.016-13.272c2.438-10.728,6.134-13.144,19.945-13.029
                                            c4.602,1.002,8.272,4.166,12.729,5.515C71.487,116.122,73.632,120.477,75.757,124.846z"/>
                                    </g>
                                    <g id="diente_x5F_sup2">
                                        <path  id="d17" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M25.007,180.683c-1.632-4.695-1.545-9.503-1.124-14.38c0.605-7.042,4.247-11.833,10.442-14.895
                                            c7.309-0.607,13.953,2.324,20.85,3.907c3.68,0.845,6.352-1.084,11.182,1.327c1.6,2.041,0.896,8.76,1.343,13.139
                                            c-1.561,11.153-4.055,21.822-14.651,28.298C27.144,190.026,27.149,183.015,25.007,180.683z"/>
                                    </g>
                                    <g id="diente_x5F_sup1">
                                        <path  id="d18" fill-rule="evenodd" data-type="1" data-puente="false" data-removible="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M55.314,218.613c-2.791,6.393-2.476,13.977-8.645,19.126c-4.965,4.144-12.389,3.547-21.206,2.677
                                            c-0.262-0.012-7.281-3.836-10.188-6.174c-4.472-3.592-7.425-8.141-6.825-14.272c1.884-8.41,2.663-17.171,8.769-24.11
                                            c1.806-2.056,3.489-4.008,6.132-4.907c2.511-0.134,4.96-0.824,7.486-0.843c7.69,1.979,14.312,6.407,21.574,9.377
                                            C59.587,207.352,56.355,215.203,55.314,218.613z"/>
                                    </g>
                                    <g id="diente_x5F_inf1">
                                        
                                            <path  id="d48" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M7.717,304.308c1.429-8.851,5.143-13.315,14.035-19.069l0.35-0.223c1.721-0.315,3.525-0.393,5.149-0.975
                                            c12.674-4.553,19.197-1.757,24.055,10.432l0.08,0.321c0.789,3.313,0.762,6.955,3.706,11.416c0,0,9.931,20.263-7.902,21.282
                                            c-7.541,2.562-11.655,2.922-11.655,2.922c-4.467,0.423-8.93,0.846-13.393,1.269l-0.119-0.011
                                            c-5.349-2.312-5.958-8.986-10.594-11.989C11.429,319.683,6.305,313.053,7.717,304.308z"/>
                                    </g>
                                    <g id="diente_x5F_inf2">
                                        <path  id="d47" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M41.786,329.734c4.455-0.562,17.047-7.873,21.755,10.034c6.169,10.966,6.314,21.339-2.187,29.889
                                            c-2.228,1.516-4.781,2.259-7.283,3.149c-5.631-1.306-11.289,0.146-16.938-0.092c-7.812-0.33-10.771-2.736-12.613-10.543
                                            l0.021-0.485c-2.182-5.055-2.235-10.383-1.992-15.746c1.439-4.732,5.075-8.07,7.7-12.051c1.946-1.635,4.515-2.095,6.59-3.484
                                            C37.646,330.426,37.331,330.296,41.786,329.734z"/>
                                    </g>
                                    <g id="diente_x5F_inf3">
                                        <path  id="d46" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M74.254,394.78c-0.003,3.396-0.406,6.672-2.862,9.314c-5.9,4.888-12.404,8.672-19.816,10.81
                                            C37,414.794,29.283,404.58,34.083,389.522c0.869-1.257,1.73-3.562,2.123-4.955c2.421-8.588,2.666-6.929,10.717-9.806
                                            c1.886-1.261,16.644-3.087,17.188-2.63C73.981,377.801,73.88,384.501,74.254,394.78z"/>
                                    </g>
                                    <g id="diente_x5F_inf4">
                                        <path  id="d45" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M62.265,443.635c-10.396-6.016-12.826-14.803-7.024-25.409c2.819-6.283,8.655-8.173,14.54-9.984
                                            c1.667-0.06,3.303,0.143,4.896,0.636c4.147,0.533,3.199,0.269,4.835,0.006c10.114,0.685,14.976,7.797,11.79,17.293
                                            c-0.77,2.294-1.645,4.556-2.472,6.832c-2.638-1.044-3.094,2.667-5.349,2.455C76.864,439.37,69.81,442.141,62.265,443.635z"/>
                                    </g>
                                    <g id="diente_x5F_inf5">
                                        <path  id="d44" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M84.847,437.61c10.388,0.415,11.853,1.479,14.92,10.836c0.486,6.829-3.734,8.247-8.683,12.045
                                            c-2.069,1.645-7.184,4.657-9.247,6.295c-9.173-0.659-12.554-3.47-16.84-11.607c-0.312-10.401,0.547-11.529,12.794-15.871
                                            C80.06,438.503,82.49,438.165,84.847,437.61z"/>
                                    </g>
                                    <g id="diente_x5F_inf6">
                                        <path  id="d43" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M114.374,469.833c0.012,0.247,0.022,0.495,0.033,0.743c-2.172,6.39-2.46,13.448-7.828,18.653
                                            c-3.378,3.275-6.605,4.979-11.092,2.758c0.048-0.317,0.098-0.635,0.146-0.949c-5.844-1.687-9.604-6.63-14.743-9.416
                                            c-1.585-3.516-1.814-7.035-0.053-10.564c0.377-2.003,1.146-3.836,2.346-5.491c2.73-2.308,5.825-4.085,8.767-6.1
                                            c2.845-1.211,5.945-1.312,8.906-2.248C109.498,454.492,114.328,459.253,114.374,469.833z"/>
                                    </g>
                                    <g id="diente_x5F_inf7">
                                        <path  id="d42" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M107.705,488.683c4.195-8.257,9.955-15.132,17.828-20.135c4.583,0.186,8.501,1.46,10.282,6.25
                                            c0.771,4.636,3.418,9.488-1.566,13.451c-0.457,1.247-0.916,2.49-1.372,3.735c-1.689,4.605-3.726,8.593-9.84,7.855
                                            C112.312,498.549,108.477,495.868,107.705,488.683z"/>
                                    </g>
                                    <g id="diente_x5F_inf8">
                                        <path  id="d41" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M159.934,491.63c-0.004,2.96-0.006,5.925-0.012,8.881c-2.592,6.268-7.104,7.828-13.46,5.978c-2.485-0.727-5.286-0.377-7.942-0.521
                                            c-6.166-4.043-3.968-15.78-3.968-15.78s0.697-2.688,1.21-3.445c3.945-7.635,5.635-7.611,10.055-9.43
                                            c6.003-2.469,9.026,2.643,11.469,7.335C157.132,487.368,158.212,489.623,159.934,491.63z"/>
                                    </g>
                                    <g id="diente_x5F_inf9">
                                        <path  id="d31" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M159.934,491.629c2.526-1.364,2.177-4.081,3.065-6.256c3.589-8.809,10.276-12.807,16.981-6.006c5.28,1.826,3.657,7.16,5.469,10.75
                                            c0.42,1.603,0.841,3.201,1.257,4.8c-0.905,6.358-4.498,10.087-10.868,11.093c-6.014,0.212-12.17,0.848-15.915-5.5
                                            C160.199,497.163,160.199,497.163,159.934,491.629z"/>
                                    </g>
                                    <g id="diente_x5F_inf10">
                                        <path  id="d32" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M208.166,496.68c-4.936,2.703-10.287,3.729-15.842,3.942c-2.162-2.228-3.9-2.256-5.737-5.153c-0.118-1.63-0.873-4.964-1.298-7.146
                                            c-1.285-5.676-3.724-8.721-2.423-13.588c3.956-7.223,4.611-7.53,13.679-6.368c4.019,1.647,7.562,2.706,9.58,7.221
                                            c1.34,3.022,3.12,6.301,5.089,8.954C214.057,492.122,213.554,493.239,208.166,496.68z"/>
                                    </g>
                                    <g id="diente_x5F_inf11">
                                        <path  id="d33" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M206.933,460.173c2.69-3.212,6.332-3.777,10.214-3.684c1.941-0.031,10.66,6.637,14.701,8.896c8.946,5.667,8.671,6.1,9.077,11.169
                                            c-0.925,4.431-3.851,7.146-7.663,9.23c-2.849,1.561-8.639,5.61-9,5.587c-4.343,2.778-7.758,1.934-10.474-2.477
                                            c-3.439-5.578-7.869-12.306-8.854-17.462C204.602,468.217,204.536,463.619,206.933,460.173z"/>
                                    </g>
                                    <g id="diente_x5F_inf12">
                                        <path  id="d34" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M228.34,436.552c11.172-4.725,13.642,4.971,20.877,6.696c0.651-0.057,6.456,6.706,4.719,11.918
                                            c-0.966,6.365-7.321,7.719-10.866,11.686c-3.754,0.678-7.348-0.076-10.9-1.226c-3.229-2.451-7.774-4.814-10.801-10.319
                                            C218.543,447.11,221.214,441.017,228.34,436.552z"/>
                                    </g>
                                    <g id="diente_x5F_inf13">
                                        <path  id="d35" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M269.916,421.938c1.025,1.626-2.06,7.24-2.468,8.699c-2.146,7.656-7.447,11.49-14.999,12.733c-1.091,0.233-2.16,0.056-3.232-0.122
                                            c-5.265-1.055-8.005-5.514-11.692-8.697c-1.532-3.613-5.952-5.062-6.417-9.723c-0.761-7.649,2.884-13.715,12.16-18.496
                                            c3.354-0.137,16.401,4.614,19.422,7.311C265.602,416.177,267.672,418.949,269.916,421.938z"/>
                                    </g>
                                    <g id="diente_x5F_inf14">
                                        <path id="d36" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M244.438,397.566c0.003-0.521,0.009-1.037,0.014-1.558c1.348-3.911,1.19-8.026,1.671-12.059c1.503-2.88,3.276-5.648,3.734-8.963
                                            c0.473-3.435,2.616-5.344,5.773-6.332c10.689-3.436,16.835-1.404,23.903,7.485c1.785,2.249,3.31,4.678,5.181,6.853
                                            c0.42,1.641,0.843,3.285,1.264,4.927c0.197,4.427-0.089,8.85-0.016,13.273c-2.438,10.729-6.135,13.145-19.945,13.029
                                            c-4.602-1.003-8.272-4.165-12.729-5.517C248.707,406.291,246.563,401.933,244.438,397.566z"/>
                                    </g>
                                    <g id="diente_x5F_inf15">
                                        <path id="d37" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M295.188,341.349c1.632,4.696,1.545,9.503,1.124,14.381c-0.605,7.042-4.247,11.835-10.442,14.897
                                            c-7.309,0.606-13.953-2.325-20.85-3.906c-3.68-0.846-6.353,1.082-11.183-1.327c-1.599-2.042-0.895-8.76-1.342-13.142
                                            c1.561-11.15,4.056-21.82,14.65-28.296C293.051,332.007,293.045,339.017,295.188,341.349z"/>
                                    </g>
                                    <g id="diente_x5F_inf16">
                                        <path  id="d38" fill-rule="evenodd" data-type="1" data-puente="false" data-removible-down="false" clip-rule="evenodd" fill="#FFFFFF" stroke="#000000" stroke-width="0.8938" stroke-miterlimit="10" d="
                                            M264.561,303.797c2.792-6.393,2.475-13.977,8.645-19.126c4.965-4.144,12.388-3.546,21.206-2.677
                                            c0.261,0.01,7.28,3.836,10.188,6.173c4.472,3.592,7.425,8.141,6.825,14.271c-1.884,8.41-2.662,17.173-8.769,24.11
                                            c-1.807,2.056-3.49,4.008-6.132,4.908c-2.513,0.134-4.962,0.824-7.487,0.842c-7.689-1.98-14.312-6.406-21.575-9.378
                                            C260.287,315.059,263.521,307.208,264.561,303.797z"/>
                                    </g>
                                    </svg>
                            </div>
                    </div>
                </div>
            <!-- fin contenedor de dientes principal -->

            <!-- contenedor de productos -->
                <div class="col-md-8 col-sm-8 col-xs-12" style="margin-left:-15px" id="ajustar-contenedor-productos">
                <div class="table table-responsive" id="div-filas-producto">
                    <table class="table table-condensed table-hover table-striped" id="filas_producto" >
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
                                    <input name="formulario_pedido[INVENTARIO][<?php echo $inventario[$i]['id_inventario']; ?>]" id="<?php echo $inventario[$i]['id_inventario']; ?>" style="text-align:center; width:30px; height:16px" readonly="true"
                                           <?php 
                                                $inventario_encontrado=false;
                                           		if(isset($data_cliente_pedido[0]) && is_null($data_cliente_pedido[0]['id_inventario'])==false)
                                           		{
                                           			$inventario_encontrado=false;
                                           			for($k=0;$k<count($data_cliente_pedido); $k++)
                                           			{
                                           				if($data_cliente_pedido[$k]['id_inventario']== $inventario[$i]['id_inventario'])
                                           				{
                                           	?>
                                            				value="<?php echo $data_cliente_pedido[$k]['DESCRIPCION_INVENTARIO'] ?>"
                                           <?php 
                                           					$inventario_encontrado=true;
                                           					break;
                                           				}
                                            		}
                                           		} 
                                           		if($inventario_encontrado==false)
                                           			echo ' value="0"';
                                            ?>
                                    />
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
                            <span class="input-group-addon left" style="cursor:pointer">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input name="formulario_pedido[FECHA_RECEPCION]" type="text" id="fecha_recepcion" placeholder="yyyy-mm-dd" class="form-control" style="height:30px; cursor: not-allowed" readonly
                                           <?php 
                                           		if(isset($data_cliente_pedido[0]) && is_null($data_cliente_pedido[0]['FECHA_COTIZACION'])==false )
                                           		{
                                           	?>
                                            		value="<?php echo substr($data_cliente_pedido[0]['FECHA_COTIZACION'], 0,10); ?>"
                                           <?php 
                                           		}
                                            ?>
                            />   
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
                            <input name="formulario_pedido[FECHA_PRODUCCION]" type="text" id="fecha_produccion" placeholder="yyyy-mm-dd" class="form-control" style="height:30px; cursor:not-allowed" readonly
                                           <?php 
                                           		if(isset($data_cliente_pedido[0]) && is_null($data_cliente_pedido[0]['FECHA_VENCIMIENTO'])==false )
                                           		{
                                           	?>
                                            		value="<?php echo $data_cliente_pedido[0]['FECHA_VENCIMIENTO']; ?>"
                                           <?php 
                                           		}
                                            ?>
                            />   
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label">Fecha de Entrega</label>
                        <div class='input-group'>
                            <span class="input-group-addon left" style="cursor:pointer">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input name="formulario_pedido[FECHA_ENTREGA]" type="text" id="fecha_envio" placeholder="yyyy-mm-dd" class="form-control" style="height:30px; cursor:not-allowed" readonly
                                           <?php 
                                           		if(isset($data_cliente_pedido[0]) && is_null($data_cliente_pedido[0]['FECHA_ENTREGA'])==false )
                                           		{
                                           	?>
                                            		value="<?php echo $data_cliente_pedido[0]['FECHA_ENTREGA']; ?>"
                                           <?php 
                                           		}
                                            ?>
                            />   
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
                            <input name="formulario_pedido[FECHA_CITA]" type="text" id="fecha_cita" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly
                                           <?php 
                                           		if(isset($data_cliente_pedido[0]) && is_null($data_cliente_pedido[0]['FECHA_CITA'])==false )
                                           		{
                                           	?>
                                            		value="<?php echo $data_cliente_pedido[0]['FECHA_CITA']; ?>"
                                           <?php 
                                           		}
                                            ?>
                            />   
                        </div>
                    </div>
                </div>

                </div>
                </div>
            </div>
        <!-- FIN PANEL DE FECHAS -->

    </div>
</div>


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" >
        <div  class="modal-footer">
			<button type="button" class="btn btn-primary btn-sm" onclick="VerReporte(<?php echo $numero_de_pedido ?>)">IMPRIMIR</button>
            <button type="button" class="btn btn-primary btn-sm" onclick="$(location).attr('href','<?php echo base_url(); ?>index.php/index');">CANCELAR</button>
            <button type="button" class="formulario_pedido btn-primary btn btn-sm" onclick="guardarPedido()">ACTUALIZAR PEDIDO</button>
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
        //deshabilitarContenedor("contenedor2");  //categorias
        //deshabilitarContenedor("contenedor3");  //dientes
        //deshabilitarContenedor("contenedor4");  //prod-colores

        //deshabilitarContenedor("contenedor-productos-principal");  //prod-principal



        //deshabilitarContenedor("contenedor-inventario");
        //deshabilitarContenedor("contenedor-pruebas");
        //deshabilitarContenedor("contenedor-fechas");

        //activarContenedor("contenedor1");
        ajustarContenidoSegunResolucion();
        ajustarContenidoInventarioSegunResolucion();

        adicionarPruebaAlCargar();
        adicionarProductoAlCargar();
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

        var cadena_html='<tr style="font-size:12px" class="filas_producto" id="'+'f'+identificador_filas+'">'
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

    function adicionarProductoAlCargar()
    {
        <?php 
            for ($i=0; $i < count($data_productos_pedido); $i++) 
            { 
             $categoria_actual =$data_productos_pedido[$i]['CATEGORIA'] ;
             $dientes_actual =$data_productos_pedido[$i]['DETALLE'] ;
             $nombre_producto_actual =$data_productos_pedido[$i]['PROD_NOM_PROD'] ;
             $cantidad_actual =$data_productos_pedido[$i]['CANTIDAD'] ;
             $guiacolores_actual =$data_productos_pedido[$i]['GUIACOLORES'] ;
             $colores_actual =$data_productos_pedido[$i]['COLORES'] ;
             $observaciones_actual =$data_productos_pedido[$i]['OBSERVACIONES'] ;
          ?>
		        var cadena_html='<tr style="font-size:12px" class="filas_producto" id="'+'f'+identificador_filas+'">'
		                            +'<td>'
		                                 +'img'
		                            +'</td>'
		                            +'<td  id="'+'catf'+identificador_filas+'">'
		                                +'<?php echo $categoria_actual; ?>'
		                            +'</td>'
		                            +'<td  id="'+'dief'+identificador_filas+'">'
		                                +'<?php echo $dientes_actual; ?>'
		                            +'</td>'
		                            +'<td  id="'+'prof'+identificador_filas+'">'
		                                +'<?php echo $nombre_producto_actual; ?>'
		                            +'</td>'
		                            +'<td  id="'+'canf'+identificador_filas+'">'
		                                +'<?php echo $cantidad_actual; ?>'
		                            +'</td>'
		                            +'<td  id="'+'guif'+identificador_filas+'">'
		                                +'<?php echo $guiacolores_actual; ?>'
		                            +'</td>'
		                            +'<td  id="'+'colf'+identificador_filas+'">'
		                                +'<?php echo $colores_actual; ?>'
		                            +'</td>'
		                            +'<td>'
		                                +'<center><button type="button" class="btn btn-primary btn-xs" style="width:50px" onclick="verObsFila(this.id)" id="'+'obsf'+identificador_filas+'" observaciones="<?php echo $observaciones_actual; ?>">'
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
        <?php
    		}
		  ?>       
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
            var cadena_html='<tr style="font-size:12px" id="'+'fp'+identificador_filasp+'">'
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

    function adicionarPruebaAlCargar()
    {
        <?php 
            for ($i=0; $i < count($data_pruebas_pedido); $i++) 
            { 
             $id_tipo_prueba_actual =$data_pruebas_pedido[$i]['ID_TIPO_PRUEBA'] ;
             $nombre_prueba_actual=$data_pruebas_pedido[$i]['NOMBRE_PRUEBA'];
             $dias_actual =$data_pruebas_pedido[$i]['DIAS'] ;
             $fecha_salida_produccion_actual =substr($data_pruebas_pedido[$i]['FECHA_SALIDA_PRODUCCION'], 0,10);
             $fecha_entrega_cliente=substr($data_pruebas_pedido[$i]['FECHA_ENTREGA_CLIENTE'], 0,10);
          ?>
	            var cadena_html='<tr style="font-size:12px" id="'+'fp'+identificador_filasp+'">'
	                                +'<td ide="<?php echo $id_tipo_prueba_actual; ?>" id="'+'prufp'+identificador_filasp+'">'
	                                    +'<?php echo $nombre_prueba_actual; ?>'
	                                +'</td>'
	                                +'<td style="text-align:center" id="'+'durfp'+identificador_filasp+'">'
	                                     +'<?php echo $dias_actual; ?>'
	                                +'</td>'
	                                +'<td style="text-align:center" id="'+'fecfp'+identificador_filasp+'"  fe="<?php echo $fecha_entrega_cliente; ?>">'
	                                    +'<?php echo $fecha_salida_produccion_actual; ?>'
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
    	<?php	 	
      		}
     	  ?>
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
	function VerReporte(numped)
    {
       $(location).attr('href','<?php echo base_url(); ?>index.php/reportes/reportes/VerReporte/Pedido/'+numped);
			
    }

</script>
