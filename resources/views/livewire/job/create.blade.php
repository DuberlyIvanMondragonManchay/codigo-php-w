    <div id="mySidebar" class="sidebar">
        <div style="padding-left: 8px; padding-right: 8px;">
            <!-- <img class="logo" src="http://localhost:8000/img/logo-verde.svg" alt="wortika"> -->
            <img class="logo" src=" {{ config('app.url_port') . '/img/logo-verde.svg' }} " alt="wortika">

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

            <a href="#" class="mt-4">
                <i class="material-icons">logout</i>
                <span class="icon-text">Cerrar Sesión</span>
            </a>            
        </div>

    </div>


    <div class="main" style="background-color: #F5F5F5;">

        <nav class="navbar-create-ad grid-container">
            <div class="item-1">
                <a href=" {{ config('app.url_port') . '/jobs' }} " >
                    <h4 class="creacionAviso">
                        <i class='bx bx-left-arrow-alt'></i> Creación de Aviso
                    </h4>
                </a>
            </div>
    
            <div class="item-2">
                <div class="step-group">
                    <span class="step active step-active"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
                <h3 class="title-section">
                    Detalles del Aviso
                </h3>
            </div>
    
            <div class="item-3">
                <a href="">
                    <i class="bx bx-bell"></i>  
                    <span class="contador-bell">12</span>
                </a>
                <a href="">
                    <div class="perfil-c">
                        <span>C</span> <i class='bx bx-chevron-down'></i>
                    </div>
                    
                </a>
            </div>
        </nav>

        <button class="btn-icon" id="btnAviso">
            <i class='bx bx-show'></i>
        </button>
        
        <form action="" style="height: 750px; overflow-y: scroll;">

            <div class="form-container">
                <p class="text-label">Nombre del Empleo

                    <i class="bx bx-info-circle"></i>
                </p>
                <div class="form-card my-4" style="border: 1px solid #CCCCCC; background-color: #fff; border-radius: 30px;">
                    <div class="left-side">
                        <label class="label-1" for="">
                            <strong>{{$company_name}}</strong> busca
                        </label>
                        <!-- <input type="text" placeholder="Nombre del Puesto" class="input-form"> -->
                        <input type="text" placeholder="Nombre del Puesto"
                        wire:model.lazy="name"
                        class="input-form
                        @error('name') is-invalid @enderror
                        ">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        <br>
                        <div class="radio-input">
                            <label class="container">Estoy reclutando a nombre de otra empresa
                                <input type="radio">
                                <span class="checkmark"></span>
                            </label>
                            <input type="text" name="" id="input-1" value="Nombre de la empresa que constará este cargo">
                        </div>
                    </div>
                    <div class="botones">
                        <div class="right-side"> 
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                            <i class='bx bx-info-circle' id="icon-1"></i>
                            <div class="p-1">
                                <p>
                                    Confidencial
                                </p>
                            </div>
                        </div>
                        <div class="right-side">
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                            <i class='bx bx-info-circle' id="icon-2"></i>
                            <div class="p-2">
                                <p>
                                    Confidencial <br> de uso interno
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <p class="text-label">Detalla la oferta laboral
                    <i class="bx bx-info-circle"></i>
                </p>
                <div class="form-card my-4" style="border: 1px solid #CCCCCC; background-color: #fff; border-radius: 30px;">
                    <div class="container-custom">
                        <div class="container-item">
                            <!-- <select name="" id="" class="select-form"> -->
                            <select 
                            wire:model="workday"
                            class="select-form
                            @error('workday') is-invalid @enderror
                            ">                                
                            <option value="choose">Jornada Laboral</option>
                            @foreach ($data_workday as $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach                            
                            </select>
                        </div>
                        <div class="container-item">
                            <select 
                            wire:model="type_of_contract"
                            class="select-form
                            @error('type_of_contract') is-invalid @enderror
                            ">
                              <option value="choose">Tipo de Contrato</option>
                              @foreach ($data_type_of_contract as $item)
                              <option value="{{$item}}">{{$item}}</option>
                              @endforeach
                            </select>
                            @error('type_of_contract')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                        </div>
                        <div class="container-item">
                            <select 
                            wire:model="working_modality"
                            class="select-form
                            @error('working_modality') is-invalid @enderror
                            ">
                              <option value="choose">Modalidad</option>
                              @foreach ($data_working_modality as $item)
                                <option value="{{$item}}">{{$item}}</option>
                              @endforeach
                            </select>
                            @error('working_modality')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                        </div>
                        <div class="container-item">
                            <select name="" id="" class="select-form">
                                <option value="">Área</option>
                                <option value="">Área #1</option>
                                <option value="">Área #2</option>
                                <option value="">Área #3</option>
                                <option value="">Área #4</option>
                            </select>
                        </div>
                    </div>

                    <div class="container-custom">
                        <div class="container-item">
                            <select name="" id="" class="select-form">
                                <option value="">Sub área</option>
                                <option value="">Sub área #1</option>
                                <option value="">Sub área #2</option>
                                <option value="">Sub área #3</option>
                                <option value="">Sub área #4</option>
                            </select>
                        </div>
                        <div class="container-item">
                                <select 
                                wire:model="seniority"
                                class="select-form
                                @error('seniority') is-invalid @enderror
                                ">
                                  <option value="choose">Seniority</option>
                                  @foreach ($data_seniority as $item)
                                  <option value="{{$item}}">{{$item}}</option>
                                  @endforeach
                                </select>
                                @error('seniority')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="container-item">
                            <select 
                            wire:model="minimum_level_of_education"
                            class="select-form grid-item-custom
                            @error('minimum_level_of_education') is-invalid @enderror
                            ">
                              <option value="choose">Nivel minimo de educación</option>
                              @foreach ($data_minimum_level_of_education as $item)
                              <option value="{{$item}}">{{$item}}</option>
                              @endforeach
                            </select>
                            @error('minimum_level_of_education')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                        </div>
                    </div>

                    <div class="container-custom">
                        <div class="container-item">
                            <select 
                            wire:model="education_status"
                            class="select-form
                            @error('education_status') is-invalid @enderror
                            ">
                              <option value="choose">Estado de Educación</option>
                              @foreach ($data_education_status as $item)
                              <option value="{{$item}}">{{$item}}</option>
                              @endforeach
                            </select>
                            @error('education_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                        </div>
                        <div class="container-item">
                                <select 
                                wire:model="country"
                                wire:change="get_departments"
                                class="select-form 
                                @error('country') is-invalid @enderror">
                                    <option value="choose">País</option>
                                    @forelse ($data_country as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @empty
                                    <option value="choose">No hay datos</option>
                                    @endforelse
                                </select>

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror                            
                        </div>
                        <div class="container-item">
                            <!-- <input type="text" class="other_name-offer" placeholder="Región o Ciudad"> -->

                                <select 
                                wire:model="department"
                                wire:change="get_provinces"
                                class="select-form @error('department') is-invalid @enderror">
                                    <option value="choose">Región o Ciudad</option>
                                    @forelse ($data_department as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @empty
                                    <option value="choose">No hay datos</option>
                                    @endforelse
                                </select>

                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <p class="text-label">
                    Describa brevemente la empresa y el equipo
                     <i class="bx bx-info-circle"></i>
                </p>
                <div class="form-card my-4" style="border: 1px solid #CCCCCC; background-color: #fff; border-radius: 30px;">
                    <div class="left-side">
                       <label class="label-2" for="">
                           Titulo de la sección
                       </label>
                       <br>
                        <input class="input-2" type="text" placeholder="Sobre nosotros...">
                    </div>
                    <div>
                        <div class="mdl-wrap">
                            <div class="mdl-toolbar">
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="bold" title="Bold (Ctrl+B)">
                                    <i class="material-icons">format_bold</i>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="list-ul" title="Unordered List">
                                    <i class="material-icons">format_list_bulleted</i>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="list-ol" title="Ordered List">
                                    <i class="material-icons">format_list_numbered</i>
                                </button>
                            </div>
                                <div id="editor" class="editor" contenteditable="true">
                                </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <p class="text-label">
                    Detalla las funciones del cargo
                     <i class="bx bx-info-circle"></i>
                </p>
                <div class="form-card my-4" style="border: 1px solid #CCCCCC; background-color: #fff; border-radius: 30px;">
                    <div class="left-side">
                       <label class="label-2" for="">
                           Titulo de la sección
                       </label>
                       <br>
                        <input class="input-2" type="text" placeholder="Te encargarás de...">
                    </div>
                    <div>
                        <div class="mdl-wrap">
                            <div class="mdl-toolbar">
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="bold" title="Bold (Ctrl+B)">
                                    <i class="material-icons">format_bold</i>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="list-ul" title="Unordered List">
                                    <i class="material-icons">format_list_bulleted</i>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="list-ol" title="Ordered List">
                                    <i class="material-icons">format_list_numbered</i>
                                </button>
                            </div>
                                <div id="editor" class="editor" contenteditable="true">
                                </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <p class="text-label">
                    Requerimientos indispensables
                     <i class="bx bx-info-circle"></i>
                </p>
                <div class="form-card my-4" style="border: 1px solid #CCCCCC; background-color: #fff; border-radius: 30px;">
                    <div class="left-side">
                       <label class="label-2" for="">
                           Titulo de la sección
                       </label>
                       <br>
                        <input class="input-2" type="text" placeholder="Eres la persona que buscamos si...">
                    </div>
                    <div>
                        <div class="mdl-wrap">
                            <div class="mdl-toolbar">
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="bold" title="Bold (Ctrl+B)">
                                    <i class="material-icons">format_bold</i>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="list-ul" title="Unordered List">
                                    <i class="material-icons">format_list_bulleted</i>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="list-ol" title="Ordered List">
                                    <i class="material-icons">format_list_numbered</i>
                                </button>
                            </div>
                                <div id="editor" class="editor" contenteditable="true">
                                </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <p class="text-label">
                    Requerimientos opcionales
                     <i class="bx bx-info-circle"></i>
                </p>
                <div class="form-card my-4" style="border: 1px solid #CCCCCC; background-color: #fff; border-radius: 30px;">
                    <div class="left-side">
                       <label class="label-2" for="">
                           Titulo de la sección
                       </label>
                       <br>
                        <input class="input-2" type="text" placeholder="Eres la persona que buscamos si...">
                    </div>
                    <div>
                        <div class="mdl-wrap">
                            <div class="mdl-toolbar">
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="bold" title="Bold (Ctrl+B)">
                                    <i class="material-icons">format_bold</i>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="list-ul" title="Unordered List">
                                    <i class="material-icons">format_list_bulleted</i>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-button--icon" id="list-ol" title="Ordered List">
                                    <i class="material-icons">format_list_numbered</i>
                                </button>
                            </div>
                                <div id="editor" class="editor" contenteditable="true">
                                </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <div class="row">
                    <div class="custom-column">
                        <p class="text-label">Especifica la remuneracion ofrecida 
                            <i class="bx bx-info-circle"></i>
                        </p>
                    </div>
                    <div class="custom-column">
                        <div class="radio-input">
                            <label class="container">No mostrar el salario en el aviso
                                <input type="radio">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-card">
                    <div class="row">
                        <div class="custom-column">
                                  <select class="select-form" 
                                  wire:model="currency"
                                  >
                                    <option value="choose">Tipo de Moneda</option>
                                    @foreach ($currencies as $item)
                                    <option value="{{$item}}">{{$item}}</option>
                                    @endforeach
                                  </select>                            
                        </div>
                        <div class="custom-column">
                            <select name="" id="" class="select-form">
                                <option value="">Salario Exacto</option>
                            </select>
                        </div>
                        <div class="custom-column">
                            <select name="" id="" class="select-form">
                                <option value="">Mensual</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="custom-column">
                            <div class="radio-input">
                                <label class="container">Prefiero colocar un rango salarial
                                    <input type="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="custom-column">
                        <p class="text-label">Agregar Keywords
                            <i class="bx bx-info-circle"></i>
                        </p>
                    </div>
                </div>

                <div class="form-card">
                    <div class="row">
                        <div class="custom-column">
                            <p class="escribe">
                                Escribe
                            </p>
                            
                            <input type="text" value="JavaScript" class="input-form-custom">
                        </div>
                        <div class="custom-column">
                            <p class="tag">
                                <button class="btnDel">
                                    X
                                </button> Javascript</p>
                        </div>
                    </div>
                </div>

                <button class="siguiente bg-gradient-wortika px-4 mb-4">Siguiente</button>
            </div>
        </form>       
    </div>  
    <div id="myModalAvisos" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>
                    Previsualización de datos
                </h2>
            </div>
            <div class="modal-body">
                <p style="height: 300px;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quas beatae amet distinctio ex
                    voluptates odit aliquam eos reiciendis cupiditate, corrupti natus sunt sapiente. Aspernatur velit
                    eaque modi fugit hic? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quas beatae amet
                    distinctio ex
                    voluptates odit aliquam eos reiciendis cupiditate, corrupti natus sunt sapiente. Aspernatur velit
                    eaque modi fugit hic?
                </p>
            </div>
            <!-- <div class="modal-footer">
                <h3>Modal Footer</h3>
            </div> -->
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src=" {{ config('app.url_port') . '/js/aviso.js' }} "></script>

    <script src=" {{ config('app.url_port') . '/js/custom.js' }} "></script>    