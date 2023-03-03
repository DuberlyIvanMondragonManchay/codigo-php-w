    <div id="mySidebar" class="sidebar">
        <div style="padding-left: 8px; padding-right: 8px;">
            <!-- <img class="logo" src="http://localhost:8000/img/logo-verde.svg" alt="wortika"> -->
            <img class="logo" id="logo" src=" {{ config('app.url_port') . '/img/logo-verde.svg' }} " style="display: none;" alt="wortika">

            <img class="logo" id="logo_w" src="{{ config('app.url_port') . '/img/logo.png' }}" style="width: 60%; height: 60%;" alt="wortika">

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

            <a href="#" class="btnAdd bg-gradient-wortika text-white mt-4 py-3">
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

             


            <a class="dropdown-item mt-4" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                <i class="material-icons">logout</i>
                <span class="icon-text">{{ __('Logout') }}</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>



       </div>

    </div>
    <div class="main">

        <nav class="navbar-create-ad grid-container" style="border: none;">
            <div class="item-1 pt-4">
                <a href="javascript:void(0);">
                    <h1 class="jobDetail">
                        <i class='bx bx-left-arrow-alt'></i> 
                        {{ $jobs[3]["name"] }}
                    </h1>
                </a>
            </div>
            <div style="border: none; width:98%;">

                <div class="row mr-4">
                    <div class="col-md-12 text-right">
                        <div class="row">
                            <div class="col-md-6">
                                &nbsp;                                
                            </div>
                            <div class="col-md-5">
                                <a href="">
                                    <i class="bx bx-bell" style="font-size: 25px; margin-top: 8px;"></i>
                                    <span class="contador-bell" style="font-size: 8px;">12</span>
                                </a>
                            </div>
                            <div class="col-md-1">
                                <a href="">
                                    <div class="perfil-c">
                                        <span>C</span> 
                                        <i class='bx bx-chevron-down'></i>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>

<!--                 <a href="">
                    <i class="bx bx-bell"></i>
                    <span class="contador-bell">12</span>
                </a>
                <a href="">
                    <div class="perfil-c">
                        <span>C</span> <i class='bx bx-chevron-down'></i>
                    </div>
                </a> -->
            </div>
        </nav>

        <div class="tabs">
            <!-- Tab links -->
            <div class="tab" style="border-bottom: 2px solid #DADADA; padding-bottom: 15px; width: 98%;">
                    
                    <button class="tablinks active" onclick="openOpcionPerfil(event, 'postulaciones')">
                        <span class="tab-name">
                            Postulaciones
                            <span class="contador">12</span>
                        </span>
                    </button>
                    <button class="tablinks" onclick="openOpcionPerfil(event, 'screenning')" style="margin-left: 2.08em;" >
                        <span class="tab-name">
                            Screenning
                            <span class="contador">12</span>
                        </span>
                    </button>
                    <button class="tablinks" onclick="openOpcionPerfil(event, 'entrevistaR')" style="margin-left: 2.08em;">
                        <span class="tab-name">
                            Entrevista Reclutador
                        <span class="contador">12</span>
                        </span>
                    </button>
                    <button class="tablinks" onclick="openOpcionPerfil(event, 'retoTecnico')" style="margin-left: 2.08em;">
                       <div class="tab-name">
                        Reto Técnico
                        <span class="contador">12</span>
                       </div>
                    </button>
                    <button class="tablinks" onclick="openOpcionPerfil(event, 'entrevistaT')" style="margin-left: 2.08em;">
                       <div class="tab-name">
                        Entrevista Técnica
                        <span class="contador">12</span>
                       </div>
                    </button>
                    <button class="tablinks" onclick="openOpcionPerfil(event, 'referenciasL')" style="margin-left: 2.08em;">
                        <div class="tab-name">
                            Referencias L
                        <span class="contador">12</span>
                        </div>
                    </button>
                    <button class="tablinks" onclick="openOpcionPerfil(event, 'entrevistaC')" style="margin-left: 2.08em;">
                        <div class="tab-name">
                            Entrevista Cliente
                        <span class="contador">12</span>
                        </div>
                    </button>
                    <button class="tablinks" onclick="openOpcionPerfil(event, 'contratados')" style="margin-left: 2.08em;">
                        <div class="tab-name">
                            Contratados
                        <span class="contador">12</span>
                        </div>
                    </button>

            </div>

            <!-- Tab content -->
            <div id="postulaciones" class="tabcontent mt-3">

                <div class="grid-container-cont-tab1">
                    <div class="col-01-pj">
                        <div class="btn-botones">
                            <button class="candidatosDisponibles active" id="button-col1">
                                Candidatos disponibles
                                <span class="contador">12</span>
                            </button>
                            <button class="candidatosDescartados" id="button-col1">
                                Candidatos descartados
                                <span class="contador">12</span>
                            </button>
                            <button class="search">
                                <i class='bx bx-search'></i>
                            </button>
                        </div>
                        <div class="btn-filtro">
                            <input type="checkbox">
                            <div class="select">
                                <select name="cv">
                                    <option value="primero">Cv</option>
                                    <option value="adecuado">Adecuado</option>
                                    <option value="promedio">Promedio</option>
                                    <option value="no_adecuado">No adecuado</option>
                                    <option value="sin_valorar">Sin valorar</option>
                                </select>
                                <select name="formulario">
                                    <option value="primero">Formulario</option>
                                    <option value="adecuado">Adecuado</option>
                                    <option value="promedio">Promedio</option>
                                    <option value="no_adecuado">No adecuado</option>
                                    <option value="sin_valorar">Sin valorar</option>
                                </select>
                                <select name="ordenarPor">
                                    <option value="primero">Ordenar por</option>
                                    <option value="fecha_ant">Fecha antigua</option>
                                    <option value="fecha_rec">fecha reciente</option>
                                    <option value="mayor_salario">Mayor salario</option>
                                    <option value="menor_salario">Menor salario</option>
                                </select>
                                <select name="leidos">
                                    <option value="leidos">Leidos</option>
                                    <option value="no_leidos">No Leidos</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        @foreach ($postulantes as $postulante)     
                        <div class="grid-container-infoPerfil">
                            <div class="col-perfil-1">
                                <input type="checkbox">
                            </div>
                            <div class="col-perfil-2">
                                <ul>
                                    <li>
                                        <div class="imagenPerfil">
                                            <img src=" {{ config('app.url_port') . '/img/postulante/' . $postulante->image }} " alt=""> <i class='bx bx-star'></i>
                                        </div>
                                        <h4 class="namePerfil">
                                            {{ $postulante->name . " " . $postulante->surnames }}
                                        </h4>
                                        <p>
                                            IT Recruiter | Analista digital | Proye...
                                        </p>
                                    </li>
                                    <li>
                                        <strong>
                                            <p>
                                                Hace 1 día - Colombia - Postulante - S/ 
                                            </p>
                                        </strong>
                                        <p>
                                            Programadora fullstack en ABBOT
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-perfil-3">
                                <ul>
                                    <li>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                        <div class="container">
                                            <div class="ui-widgets">
                                                <div class="ui-values">100%</div>

                                            </div>
                                            <div class="ui-widgets">
                                                <div class="ui-values">100%</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>CV</p>
                                        <p>Form</p>
                                    </li>
                                </ul>
                            </div>
                        </div>                        
                        @endforeach                   
                    </div>
                    <div class="col-02-pj">
                        <div class="btn-botones-col2">

                            <button class="btn-perfil">
                                Perfil <i class='bx bx-user'></i>
                            </button>
                            <button class="btn-mnesaje" id="button">
                                Mensaje <i class='bx bx-envelope'></i>
                            </button>
                            <button class="btn-notas" id="button">
                                Notas <i class='bx bx-edit-alt'></i>
                            </button>
                            <button class="btn-descartar" id="button" style="margin-left: 450px;">
                                Descartar <i class='bx bx-x'></i>
                            </button>
                            <div class="dropdown" style="margin-right: 50px;">
                                <button onclick="btnMovorA()" class="dropbtn bg-gradient-wortika">
                                    Mover a <i class='bx bxs-chevron-down'></i>
                                </button>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="#">Screenning</a>
                                    <a href="#">Entrevista reclutador</a>
                                    <a href="#">Reto Técnico</a>
                                    <a href="#">Entrevista Técnica</a>
                                    <a href="#">Referencias L</a>
                                    <a href="#">Entrevista Cliente</a>
                                    <a href="#">Contratados</a>
                                </div>
                            </div>



                        </div>
                        <div class="contenidoPerfil" style>
                            <div class="grid-container-contPerfil mt-4">
                                <div class="list-infoPerfil" >
                                    <ul>
                                        <li>
                                            <div class="imagen-contPerfil">
                                                <img src="{{ config('app.url_port') . '/img/postulante/user8-128x128.jpg' }}" alt="image profile" style="width: 400px;">
                                            </div>
                                        </li>
                                        <br>
                                        <li>
                                            <h4 class="name-contPerfil">
                                                Raúl Edward Salinas Mondragón
                                            </h4>
                                            <p>
                                                IT Recluiter | Analista digital | Proyectos digitales
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="datos-perfil">
                                    <ul>
                                        <li>
                                            <p>24 años</p>
                                            <p>Soltera</p>
                                            <p>
                                               <a href="http://wa.me/51956585632" target="blank_"> 
                                                956 585 632 <i class='bx bxl-whatsapp'></i>
                                               </a> 
                                            </p>
                                            <p> Usuario45@gmail.com </p>
                                            <p> Lima, Lima, Perú</p>
                                        </li>
                                        <br>
                                        <li>
                                            <i class='bx bxl-facebook'></i>
                                            <i class='bx bxl-instagram'></i>
                                            <i class='bx bxl-twitter'></i>
                                            <i class='bx bxl-linkedin'></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="resumen">
                                    <h4>
                                        Resumen laboral
                                    </h4>
                                    <p style="border-bottom: 1px solid #848888; padding: 10px 0px;">
                                        Bachiller en Psiocologia Organizacional con experiencia en procesos de
                                        selección, análisis de clima organizacional, elaboración de bandas salariales y
                                        generación de contenido
                                        estructurado para soluciones tecnológicas en reclutamiento digital. Amante del
                                        mundo digital.
                                    </p>
                                    <!-- <hr> -->
                                </div>
                            </div>
                            <div class="experienciaTitulo pt-4">
                                <h4 class="tituiloE">
                                    Experiencia laboral
                                    <!-- <i class='bx bxs-chevron-left'></i> -->
                                    <!-- <i class='bx bxs-chevron-right'></i> -->
                                </h4>
                            </div>
                            <div class="grid-container-contExperienca" >
                                <div class="contE-1">
                                    <strong>
                                        <p>
                                            Reclutador TI - Junior - Full
                                        </p>
                                    </strong>
                                    <p>
                                        BBVA (Banco) - San Isidro, Lima Perú
                                    </p>
                                    <p>
                                        Ene 2019 - Ago 2019 (7 meses)
                                    </p>
                                    <ul class="listExperiencia">
                                        <li>Análisis de los requerimiento y funcionalidades del proyecto</li>
                                        <li> Implementación y soporte del proyecto.</li>
                                        <li>Elaboración de la estructura y elementos necesarios para la base de datos
                                        </li>
                                        <li>Elaboración de reportes.</li>
 
                                    </ul>

                                </div><br>
                                <div class="contE-1">
                                    <strong>
                                        <p>
                                            Reclutador TI - Junior - Full
                                        </p>
                                    </strong>
                                    <p>
                                        BBVA (Banco) - San Isidro, Lima Perú
                                    </p>
                                    <p>
                                        Ene 2019 - Ago 2019 (7 meses)
                                    </p>
                                    <ul class="listExperiencia">
                                        <li>Análisis de los requerimiento y funcionalidades del proyecto</li>
                                        <li> Implementación y soporte del proyecto.</li>
                                        <li>Elaboración de la estructura y elementos necesarios para la base de datos
                                        </li>
                                        <li>Elaboración de reportes.</li>
                                    </ul>
                                </div><br>

                                <div class="contE-1">
                                    <strong>
                                        <p>
                                            Reclutador TI - Junior - Full
                                        </p>
                                    </strong>
                                    <p>
                                        BBVA (Banco) - San Isidro, Lima Perú
                                    </p>
                                    <p>
                                        Ene 2019 - Ago 2019 (7 meses)
                                    </p>
                                    <ul class="listExperiencia">
                                        <li>Análisis de los requerimiento y funcionalidades del proyecto</li>
                                        <li> Implementación y soporte del proyecto.</li>
                                        <li>Elaboración de la estructura y elementos necesarios para la base de datos
                                        </li>
                                        <li>Elaboración de reportes.</li>
                                    </ul>
                                </div>                                
                            </div>
                            <hr>
                            <div class="preferenciaE pt-4">
                                <h4>
                                    Formación académica
                                </h4>
                                <div class="grid-container-preferencia ml-4">
                                    <div>
                                        <ul class="tituloList">
                                            <li>
                                                <p>Ingeniería de Sistemas - Culminado - Décimo superior</p>
                                                <span class="subtituloList" >Pontificia Universidad Católica del Perú</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="tituloList2">
                                            <li>
                                                <p>Marzo 2014 - Agosto 2019</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="preferenciaE pt-4">
                                <h4>
                                    Idiomas
                                </h4>                                
                                <div class="grid-container-preferencia ml-4">
                                    <div class="idioma_badge">
                                        Inglés - <span class="idiomaNivel">Intermedio</span>
                                    </div>
                                    <div class="idioma_badge">
                                        Portugues - <span class="idiomaNivel">Intermedio</span>
                                    </div>
                                </div>
                                <hr>                                
                            </div>

                            <div class="preferenciaE pt-4">
                                <h4>
                                    Aptitudes
                                </h4>
                                <div class="grid-container-preferencia ml-4">
                                    <div>
                                        <ul class="tituloList">
                                            <li>
                                                <p>Lenguajes de programación</p>

                                                <div class="grid-container-preferencia" style="margin-left: -10px;">
                                                    <div class="idioma_badge">
                                                        Inglés - <span class="idiomaNivel">Intermedio</span>
                                                    </div>
                                                    <div class="idioma_badge">
                                                        Portugues - <span class="idiomaNivel">Intermedio</span>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid-container-preferencia ml-4">
                                    <div>
                                        <ul class="tituloList">
                                            <li>
                                                <p>Lenguajes de programación</p>

                                                <div class="grid-container-preferencia" style="margin-left: -10px;">
                                                    <div class="idioma_badge">
                                                        Python<span class="idiomaNivel">/ Básico</span>
                                                    </div>
                                                    <div class="idioma_badge">
                                                        PHP<span class="idiomaNivel">/ Básico</span>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>                                
                                <hr>
                            </div>

                            <div class="preferenciaE pt-4">
                                <h4>
                                    Cursos y certificaciones
                                </h4>
                                <div class="grid-container-preferencia ml-4">
                                    <div>
                                        <ul class="tituloList">
                                            <li>
                                                <p>Fundamentos de Design Thinking</p>
                                                <span class="subtituloList">{{ " dato->instituto " }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="tituloList2">
                                            <li>
                                                <p>Ago 2014 - Dic 2019</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                            </div>                            

<!--                             <div class="preferenciaE pt-4">
                                <h4>
                                    Aptitudes
                                </h4>      


                                    <div class="mr-4">
                                        <ul class="tituloList">
                                            <li>
                                                <p>Ingeniería de Sistemas - Culminado - Décimo superior</p>
                                                <span class="subtituloList" >Pontificia Universidad Católica del Perú</span>
                                            </li>
                                        </ul>
                                    </div>



                                <div class="grid-container-preferencia ml-4">
                                    <div class="idioma_badge">
                                        Inglés - <span class="idiomaNivel">Intermedio</span>
                                    </div>
                                    <div class="idioma_badge">
                                        Portugues - <span class="idiomaNivel">Intermedio</span>
                                    </div>
                                </div>
                                <hr>                                
                            </div> -->

                            <div class="preferenciaE mt-4">
                                <h4>
                                    Preferencia de empleo
                                </h4>
                                <div class="grid-container-preferencia ml-4">
                                    <div>
                                        <ul class="tituloList">
                                            <li>
                                                <p>Puesto deseado:</p>
                                                <p>Categoria:</p>
                                                <p>Nivel:</p>
                                                <p>Salario mensual deseada:</p>
                                            </li>
                                            <li>
                                                <p>Puesto deseado:</p>
                                                <p>Categoria:</p>
                                                <p>Nivel:</p>
                                                <p>Salario mensual deseada:</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="tituloList2">
                                            <li>
                                                <p>Desarrollador Full Satack</p>
                                                <p>Programación</p>
                                                <p>Junior</p>
                                                <p>$ 2000</p>
                                            </li>
                                            <li>
                                                <p>Desarrollador Full Satack</p>
                                                <p>Programación</p>
                                                <p>Junior</p>
                                                <p>$ 2000</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="preferenciaCol3">
                                        <p>No</p>
                                        <p>No</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="preferenciaE mt-4">
                                <h4>
                                    Referencia laboral
                                </h4>
                                <div class="grid-container-referencia">
                                    <div>
                                        <ul>
                                            <li>
                                                <p class="tituloReferencia">
                                                    Mateo Porras Delgado
                                                </p>
                                                <p>Gerente de Sistemas en TALENT QR SAC</p>
                                                <p>Mateogonzales@talentpe</p>
                                                <p>985656521</p>
                                            </li>
                                        </ul>
                                    </div><br>
                                    <div>
                                        <ul>
                                            <li>
                                                <p class="tituloReferencia">
                                                    Mateo Porras Delgado
                                                </p>
                                                <p>Gerente de Sistemas en TALENT QR SAC</p>
                                                <p>Mateogonzales@talentpe</p>
                                                <p>985656521</p>
                                            </li>
                                        </ul>
                                    </div>
<!--                                     <br>
                                    <div>
                                        <ul>
                                            <li>
                                                <p class="tituloReferencia">
                                                    Mateo Porras Delgado
                                                </p>
                                                <p>Gerente de Sistemas en TALENT QR SAC</p>
                                                <p>Mateogonzales@talentpe</p>
                                                <p>985656521</p>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                                <hr>
                                <div class="experienciaTitulo">
                                    <div class="tituloFormulario">
                                      <h4 class="tituiloE">
                                          Formulario
                                          <div class="containerFormulario">
                                              <div class="ui-widgets">
                                                  <div class="ui-values">88%</div>
                                              </div>
                                          </div>
                                      </h4>
                                    </div>
                                    <div class="acordion">
                                        <button class="accordion">
                                            Habilidad tecnica / <strong>80%</strong> 
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </button>
                                        <div class="panel">
                                          <div class="grid-container-habilidad">
                                              <div>
                                                  <ul>
                                                      <li class="tituloEncabezado">Habilidad</li>
                                                      <li>Javascript</li>
                                                      <li>Mongo DB</li>
                                                      <li>Node js</li>
                                                      <li>NoSQL</li>
                                                  </ul>
                                              </div>
                                              <div>
                                                <ul>
                                                    <li class="tituloEncabezado">Nivel</li>
                                                    <li>Intermedio</li>
                                                    <li>Basico</li>
                                                    <li>Experto</li>
                                                    <li>Avanzado</li>
                                                </ul>
                                              </div>
                                              <div>
                                                <ul>
                                                    <li class="tituloEncabezado">Experiencia</li>
                                                    <li>1 año</li>
                                                    <li>4 año</li>
                                                    <li>2 año</li>
                                                    <li>3 añoL</li>
                                                </ul>
                                              </div>
                        
                                          </div>
                                        </div>
                                        <button class="accordion">
                                            Conocimiento / <strong>80%</strong>
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </button>
                                        <div class="panel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <button class="accordion">
                                            Preguntas adicionales
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </button>
                                        <div class="panel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="archivoAdjunto">
                                    <h4>
                                        Archivo adjunto
                                    </h4>
                                    <div class="archivopdf px-4">
                                        <div class="grid-container-btnfunciones">
<!--                                             <div class="btn-firstLine">
                                                <button>
                                                    <i class='bx bxs-chevron-down' ></i>
                                                </button>
                                                <button>
                                                    <i class='bx bxs-chevron-up'></i>
                                                </button>
                                            </div> -->
<!--                                             <div class="btn-secondLine">
                                                <button>
                                                    <i class='bx bxs-download'></i>
                                                </button>
                                                <button>
                                                    <i class='bx bx-fullscreen' ></i>
                                                </button>
                                            </div> -->

                                        </div>

                                        <div style="margin: 0px auto; text-align: center; border: none; padding-left: 10px;">
            

            <embed src="{{ config('app.url_port') . '/img/cv.pdf#toolbar=1&navpanes=0' }}" type="application/pdf" width="95%" height="600px" />
                                            
                                        </div>



                                        <!-- <img src=" {{ config('app.url_port') . '/img/cv.png' }} " alt=""> -->
<!--                                         <div class="thirdLine">
                                            <button>
                                                <i class='bx bxs-chevron-down' ></i>
                                            </button>
                                            <button>
                                                <i class='bx bxs-chevron-up'></i>
                                            </button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div id="screenning" class="tabcontent">
                <h3>Screenning</h3>
                <p>En espera de información</p>
            </div>
            <div id="entrevistaR" class="tabcontent">
                <h3>Entrevista Reclutador</h3>
                <p>En espera de información</p>
            </div>
            <div id="retoTecnico" class="tabcontent">
                <h3>Reto Técnico</h3>
                <p>En espera de información</p>
            </div>
            <div id="entrevistaT" class="tabcontent">
                <h3>Entrevista Tecnica</h3>
                <p>En espera de información</p>
            </div>
            <div id="referenciasL" class="tabcontent">
                <h3>Referencias L</h3>
                <p>En espera de información</p>
            </div>
            <div id="entrevistaC" class="tabcontent">
                <h3>Entrevista Cliente</h3>
                <p>En espera de información</p>
            </div>
            <div id="contratados" class="tabcontent">
                <h3>Contratados</h3>
                <p>En espera de información</p>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src=" {{ config('app.url_port') . '/js/aviso.js' }} "></script>
    <script src=" {{ config('app.url_port') . '/js/custom.js' }} "></script>  
    <script src=" {{ config('app.url_port') . '/js/programadorfull.js' }} "></script>