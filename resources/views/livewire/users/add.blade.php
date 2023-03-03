<div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                
                <div 

                wire:loading.inline wire:target="add_user"

                class="alert alert-warning" role="alert">
                    Se está enviado la invitación
                </div>
            </div>

            <div class="card col-md-12">
                <div class="card-body">
                    <h4 class="card-title">Usuarios autorizados</h4>
                    <h6 class="card-subtitle text-muted">Registra un máximo de 2 usuarios de manera gratuita. Si tienes
                        el servicio Premium Puedes agregar todos los usuarios que necesites, sin límite.
                    </h6>
                    <h6 class="card-subtitle text-muted">Invita a un usuario mediante correo electrónico.</h6>

                    <div class="form-inline mt-3">

                        <div class="input-group mb-2 mr-sm-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                            wire:model.lazy="email"
                            >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-2 mr-sm-2">
                            <select class="form-control" 
                            wire:model="role"
                            >
                                <option value="choose" selected disabled>Tipo de usuario</option>
                                <option>Súper usuario</option>
                                <option>Usuario</option>
                                <option>Solo lectura</option>
                                <option>Invitado</option>
                            </select>
                        </div>
                        <button type="button"
                        wire:click.prevent="add_user()"
                        class="btn btn-info mb-2">
                            Enviar invitación
                        </button>
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <div class="input-group rounded">
                    <input type="search"
                    wire:model="search"
                    class="form-control rounded" placeholder="Search" aria-label="Search"
                      aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                      <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <table class="table table-bordered">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Rol</th>
                            <th>Email</th>
                            <th>Fecha de registro</th>
                            <th>Estado</th>
                          
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td>{{$item->getRoleNames()[0]}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{ $item->welcome_valid_until == null ? 'Pendiente' : $item->welcome_valid_until }}</td>
                           
                            <td>
                                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.livewire.on('invitation_sent', Msg => {
                window.alert('Invitación enviada correctamente.');
            });
        });
    </script>
@endpush