<!--     <div id="mySidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
        <img class="logo" src="/img/logo-verde.svg" alt="">
        <div class="mt-5">
            <a href="#">
                <span><i class="material-icons">verified</i><span class="icon-text">Avisos</span>
            </a>
            <a href="#">
                <i class="material-icons">assessment</i>
                <span class="icon-text"></span>Bases de Datos
            </a>
            <a href="#" class="mb-4">
                <i class="material-icons">payments</i>
                <span class="icon-text">Salarios</span>
            </a>
            <hr>
            <a href="#" class="btnAdd bg-gradient-wortika text-white mt-4">
                <i class="material-icons">add_circle_outline</i>
                <span class="icon-text"></span>Crear Aviso</a></span>
            </a>
            <br>
            <a href="#">
                <i class="material-icons">people</i>
                <span class="icon-text">Procter and Gamble</span>
            </a>
            <hr>
            <a href="#" class="mt-3">
                <i class="material-icons">help_outline</i>
                <span class="icon-text">Ayuda</span>
            </a>
            <a href="#"><i class="material-icons">logout</i><span class="icon-text"></span>Cerrar Sesión<span></a>
        </div>
    </div> -->
    <div id="mySidebar" class="sidebar">
        <div style="padding-left: 8px; padding-right: 8px;">
            <img class="logo" src="img/logo-verde.svg">
            <a href="#" class="btnmenu" id="btnmenu">
                <i class='bx bx-chevron-right' onclick="changeIcon(this)" id="icon"></i>
            </a>

            <a href="#" class="mt-4">
                <span><i class="material-icons">celebration</i></span>
                <span class="icon-text">Avisos</span>
            </a>

            <a href="#" class="mt-4">
                <i class="material-icons">assessment</i>
                <span class="icon-text"></span>Bases de Datos
            </a>

            <a href="#" class="mt-4">
                <i class="material-icons">payments</i>
                <span class="icon-text">Salarios</span>
            </a>

            <hr class="mt-3">

            <a href="{{ config('app.url_port') . '/jobs/create' }}" class="btnAdd bg-gradient-wortika text-white mt-4 py-3">
                <i class="material-icons">add_circle_outline</i>
                <span class="icon-text">Crear Aviso</span>
            </a>

            <a href="#">
               <div class="contenedor">
                <div class="perfil">
                    <span style="margin-top: 40px;">P</span>
                </div>
                <div class="nombre-empresa">
                    <span class="icon-text"> Procter and Gamble </span>
                    <p class="perfilEmpresa">Perfil empresa</p>
                </div>
               </div>
            </a>

            <!-- <hr> -->

            <a href="#" class="mt-5">
                <i class="material-icons">help_outline</i>
                <span class="icon-text">Ayuda</span>
            </a>

            <a href="#" class="mt-4">
                <i class="material-icons">logout</i>
                <span class="icon-text">Cerrar Sesión</span>
            </a>            
        </div>

    </div>


    <div class="main" id="main">

<!--         <nav class="navbar-create-ad grid-container">
            <a class="active" href="">Publicaciones
                <span class="contador">12</span>
            </a>
            <a href="">Cerrados
                <span class="contador">200</span>
            </a>
            <a href="">Borradores</a>            
            <a class="bag" href="">
                <i class='bx bx-shopping-bag'></i> Paquetes disponibles
            </a>
            <div class="search-box">
                <input type="text" class="input-text" placeholder="Buscar empleo">
                <button type="button" href="" class="search-btn">
                    <i class='bx bx-search'></i>
                </button>
            </div>

            <div class="item-3">
                <a href="">
                    <i class="bx bx-bell" id="bell" style="font-size: 30px; color: #B8B8B8;"></i>
                    <span class="contador-bell">06</span>
                </a>
                <a href="javascript:void(0);">
                    <div class="perfil-c" style="padding-top: 30px;">
                        <span>C</span> <i class='bx bx-chevron-down'></i>
                    </div>
                </a>
            </div>
        </nav> -->

        <nav class="navbar-create-ad grid-container mt-4">

            <div class="item-1">
<!--                 <a href=" {{ config('app.url_port') . '/jobs' }} " >
                    <h4 class="creacionAviso">
                        <i class='bx bx-left-arrow-alt'></i> Creación de Aviso
                    </h4>
                </a> -->
                <a class="active px-3 py-2 publicaciones" href="">Publicaciones
                    <span class="contador">12</span>
                </a>

                <a class="ml-5" href="">Cerrados
                    <span class="contador">200</span>
                </a>

                <a class="ml-5" href="">Borradores</a>            
                
                <a class="bag ml-5 disponibles" href="">
                    <i class='bx bx-shopping-bag'></i> Paquetes disponibles
                </a>

            </div>
    
            <div class="item-2">
                <div class="search-box">
                    <input type="text" class="input-text" placeholder="Buscar empleo">
                    <button type="button" href="" class="search-btn">
                        <i class='bx bx-search'></i>
                    </button>
                </div>
            </div>
    
            <div class="item-3">

                <div class="row" style="width:90%;">
                    <div class="col-md-6">
                        <!-- <a href="" title=""> -->
                            <i class="bx bx-bell" id="bell"></i>
                            <span class="contador-bell">12</span>
                        <!-- </a> -->
                    </div>
                    <div class="col-md-6">
                        <div class="perfil-c">
                            <span>C</span> <i class='bx bx-chevron-down'></i>
                        </div>                        
                    </div>                    
                </div>
<!--                 <a href="">
                      
                    <span class="contador-bell">12</span>
                </a>
                <a href="">
                    <div class="perfil-c">
                        <span>C</span> <i class='bx bx-chevron-down'></i>
                    </div>
                    
                </a> -->
            </div>
        </nav>

        <div class="table-area px-3">
            <table>
                <thead>
                    <tr>
                        <th width="5%"></th>
                        <th width="20%">Aviso</th>
                        <th width="20%">Responsable(s)</th>
                        <th>Estadisticas</th>
                        <th>Tipo <i class='bx bxs-chevron-down'></i></th>
                        <th>Caducidad <i class='bx bxs-chevron-down'></i></th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                            @foreach ($jobs as $item)

                            <?php 
                                if ( strlen($item->name) > 27 ) {
                                   $titulo_vacante = substr($item->name, 0, -22) . "...";
                                }else{
                                   $titulo_vacante = $item->name;
                                }
                                // agregado por Pedro Bernal 28/03/2022
                                $originalDate = $item->created_at;
                                $newDate = date("d/m/Y", strtotime($originalDate));
                            ?>
                                <tr>
                                    <td><span>28</span> </td>
                                    <td style="text-align: left;">
                                        <a href="{{ config('app.url_port') . '/jobs/job/' . $item->id }}" style="text-decoration: none;">
                                            <h5 class="titulo-vacante">{{$titulo_vacante == null ? 'Borrador' : $titulo_vacante}}</h5>
                                        </a>
                                        <p>Lima - {{$item->distrito}}</p>
                                        <p>Creado {{$newDate}}</p>
                                        <p>Oferta confidencial</p>
                                    </td>
                                    <td>
                                        <div class="imagen">
                                            <img src="http://via.placeholder.com/10" alt="">
                                        </div>
                                        <div class="nombre text-left">
                                            <h5>Normeño Raimondi</h5>
                                            <p>Especialista de Selección</p>
                                        </div>
                                    </td>
                                    <td class="text-left">
                                        <p>Visualizaciones: 958</p>
                                        <p>Total candidatos: 900</p>
                                        <p>Activos: 30</p>
                                        <p>Descartados: 47</p>
                                    </td>
                                    <td>
                                        <p>Superdestacado</p>
                                    </td>
                                    <td>28 dias</td>
                                    <td>
                                        <select name="optEstado" id="optEstado" class="customDropbtn">
                                            <option value="1">Publicado (Abierto)</option>
                                            <option value="2">Publicado (privado)</option>

                                        </select>
                                    </td>
                                    <td><i class='bx bx-group'></i> <i class='bx bxs-file-plus'></i> <i class='bx bx-user-plus'></i></td>
                                    <td class="config"><i class='bx bx-dots-vertical-rounded'></i></td>
                                </tr>
                            @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination-content">
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a class="active" href="#">1</a>
<!--                 <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a> -->
                <a href="#">&raquo;</a>
              </div>
        </div>
    </div>

<script src="js/custom.js"></script>    