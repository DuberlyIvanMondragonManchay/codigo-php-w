<div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="form-group col">
                        <select class="form-control bg-gray-100 text-blue-ligth rounded-2xl border-0">
                            <option>Fecha de publicación</option>
                            <option>Hoy</option>
                            <option>Desde ayer</option>
                            <option>Desde hace 3 años</option>
                            <option>Desde hace 4 años</option>
                            <option>Desde hace 5 años</option>
                            <option>Desde hace 6 años</option>
                            <option>Desde hace 1 semana</option>
                            <option>Desde hace 2 semanas</option>
                            <option>Desde hace 1 mes</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <select wire:model="experience_level" class="form-control bg-gray-100 text-blue-ligth rounded-2xl border-0">
                            <option value="0">Nivel de experiencia</option>
                            @foreach ($experience_levels as $experience_level)
                                <option value="{{ $experience_level }}">{{ $experience_level }}</option>
                            @endforeach
                        </select>
                    </div>                    
                    <div class="form-group col">
                        <select class="form-control bg-gray-100 text-blue-ligth rounded-2xl border-0">
                            <option>Distrito</option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <select wire:model="category" class="form-control bg-gray-100 text-blue-ligth rounded-2xl border-0">
                            <option value="0">Categoría</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col">
                        <h1 class="form-control text-black rounded-2xl border-0">Más filtros</h1>
                        <div class="relative mt-1 rounded ml-5">
                            <input placeholder="Buscar empleo" class="bg-gray-100 border-0 rounded-3xl py-2 px-4 w-full focus: border-gray-400 focus: outline-none text-gray-500">
                            <div class="absolute inset-y-0 right-0 flex items-center">
                                <a href="#" title="buscar"> <i class="fa fa-search h-4 w-4 mx-3 text-blue-ligth"></i> </a>
                            </div>
                        </div>                        
                    </div>


                    {{-- Verificar filtrado --}}

<!--                <div class="form-group col">
                        <select wire:model="workday" class="form-control bg-gray-100 text-blue-ligth rounded-2xl border-0">
                            <option value="0">Jornada laboral</option>
                            @foreach ($workdays as $workday)
                                <option value="{{ $workday }}">{{ $workday }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col">
                        <select class="form-control">
                            <option>Disponibilidad de viajar</option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <select wire:model="modality" class="form-control">
                            <option value="0">Modalidad de trabajo</option>
                            @foreach ($modalities as $modality)
                                <option value="{{ $modality }}">{{ $modality }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col">
                        <select wire:model="contrac" class="form-control">
                            <option value="0">Tipo de contrato</option>
                            @foreach ($contracts as $contrac)
                                <option value="{{ $contrac }}">{{ $contrac }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col">
                        <select wire:model="study" class="form-control">
                            <option value="0">Nivel mínimo de estudios</option>
                            @foreach ($studies as $study)
                                <option value="{{ $study }}">{{ $study }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col">
                        <select wire:model="education_status" class="form-control">
                            <option value="0">Estado de educación</option>
                            @foreach ($education_statuses as $education_status)
                                <option value="{{ $education_status }}">{{ $education_status }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col">
                        <select wire:model="hierarchy" class="form-control">
                            <option value="0">Jerarquía del puesto</option>
                            @foreach ($hierarchies as $hierarchy)
                                <option value="{{ $hierarchy }}">{{ $hierarchy }}</option>
                            @endforeach
                        </select>
                    </div> -->
                </div>
            </div>

            <div class="col-md-12">
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <p>{{$jobs->count()}} Resultados</p>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Alerta de empleos</label>
                                </div>
                            </div>
                        </div>

                        @foreach ($jobs as $job)
                            <div class="card p-2 mt-3" style="border: none; border-bottom: 1px solid gray;">
                                <button
                                wire:click="preview({{$job->id}})"
                                class="card-block stretched-link text-decoration-none">
                                    <!-- <img class="card-img-top" data-src="holder.js/100x180/" alt="Card image cap"> -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                        <img class="card-img-top rounded-3xl h-12" src="{{ asset( 'img/companies/'.$job->third_party_name ) }}">
                                            </div>
                                            <div class="col-md-10">
                                                <h4 class="card-title text-left">{{ $job->name }}</h4>
                                                <div class="p-2 text-left">
                                                    <!-- <h4 class="card-title">{{ $job->id }}</h4> -->
                                                    <!-- <p class="card-text">Text</p> -->
                                                    <span style="font-size: 15px">Samsung</span><br>
                                                    <span style="font-size: 15px">San Isidro, Lima</span><br>
                                                    <span style="font-size: 13px">{{ $job->type_of_contract }}</span><br>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        @endforeach

                        <div class="mt-2">
                            {{$jobs->links()}}
                        </div>

                    </div>
                    <div class="col-md-8 shadow p-3 mb-5 bg-white rounded">
                        @if ($job_preview == null)
                            <h1 class="text-center" >Más de {{$jobs->count()}} empleos encontrados</h1>
                        @else
                            <h1 class="text-2xl active-wortika font-semibold">{{$job_preview->name}}</h1>
                            <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="card-title">Empresa: </h4>
                                            <p class="card-text"></p>
                                            <h4>{{ $job_preview->type_of_contract }}</h4>
                                            <h4>{{ $job_preview->Company_description }}</h4>
                                            <h4>{{ $job_preview->job_description }}</h4>                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    <h1>Recomendar</h1>
                                                    <h1>Recomienda a alguien para este puesto</h1>
                                                </div>
                                                <div class="col-md-6">
                                                    <button class="bg-gradient-wortika rounded-3xl px-4 py-2 w-40 text-white">
                                                        Postular
                                                    </button>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>                                    
                            <div class="card text-center" style="border:none;">
                                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                <div class="card-body text-left">



                                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                            <h2 class="font-semibold active-wortika ">Sobre nosotros</h2>
                            <p>Presencial &nbsp;&nbsp;&nbsp;&nbsp;  Planilla &nbsp;&nbsp;&nbsp;&nbsp; Diseño &nbsp;&nbsp;&nbsp;&nbsp; Diseñ UI &nbsp;&nbsp;&nbsp;&nbsp; Junior &nbsp;&nbsp;&nbsp;&nbsp;Universitario &nbsp;&nbsp;&nbsp;&nbsp; Egresado</p>
                            <hr>
                            <br>
                            <h2 class="font-semibold active-wortika ">Sobre nosotros</h2>
                            <p>Si eres desarrollador Full Stack y estás en búsqueda de un rol desafiante en el que puedas aprender mucho más y mejorar tus habilidades. Entonces eres del tipo de persona que estamos buscando</p>
                            <br>
                            <h2 class="font-semibold active-wortika ">Te encargarías de:</h2>
                            <ul>
                                <li>Atender en forma oportuna la necesidad de nuevas soluciones informáticas que requiera el cliente interno.</li>
                                <li>Brindar soporte al Help Desk.</li>
                                <li>Gestionar, dar soporte y administrar los servidores.</li>
                                <li>Crear y asignar usuarios y permisos para los diferentes usuarios.</li>
                                <li>Diseña, elabora y mantiene los sistemas informáticos que le sean solicitados por los usuarios.</li>
                            </ul>
                            <br>
                            <h2 class="font-semibold active-wortika ">Beneficios</h2>
                            <ul>
                                <li>Remuneración en planilla con todos las condiciones de ley.</li>
                                <li>Línea de carrera, descuentos corporativos.</li>
                            </ul>     

                            <br>
                            <h2 class="font-semibold active-wortika ">Eres la persona que buscamos si...</h2>
                            <ul>
                                <li>Remuneración en planilla con todos las condiciones de ley.</li>
                                <li>Línea de carrera, descuentos corporativos.</li>
                            </ul> 

                            <br>
                            <h2 class="font-semibold active-wortika ">Te amaremos si...</h2>
                            <ul>
                                <li>Remuneración en planilla con todos las condiciones de ley.</li>
                                <li>Línea de carrera, descuentos corporativos.</li>
                            </ul> 

                            <h3 class="mt-3 text-center">
                                <button class="bg-gradient-wortika rounded-3xl px-4 py-3 w-60 text-white">Postular al empleo</button>
                            </h3>


                        @endif



                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        alert("454621");
    });

</script>