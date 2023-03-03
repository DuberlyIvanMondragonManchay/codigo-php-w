@extends('layouts.app')

@section('content')


<section class="bg-login-empresa  h-screen flex flex-col items-center justify-center ">
    <div class="max-w-screen-2xl	">
        <div class="flex items-center justify-center mb-5 pt-3  md:hidden">
            <img src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/logo.svg?alt=media&token=0312baf3-2bef-4608-a58c-0393190cf81f"
                alt="logo-wortika" class="w-2/5 md:w-1/12">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 md:my-20">
            <div class="hidden md:flex md:flex-col md:items-center md:h-full md:justify-between  ">
                <div class="md:block pl-5 ">
                    <img src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/logo.svg?alt=media&token=0312baf3-2bef-4608-a58c-0393190cf81f"
                        alt="logo-wortika" class="md:w-6/12">
                </div>
                <div class="flex items-center justify-center ">
                    <p class="text-white font-semibold text-2xl ">“Cada vez más
                        profesionales del sector TI, <br>
                        forman parte de Wortika”.</p>
                </div>
            </div>
            <div class=" md:pl-20 flex items-center  ">
                <div class="bg-white mx-3 rounded-lg py-8 px-10 md:px-11 md:pb-20 md:pt-10 md:rounded-3xl w-100 flex flex-col gap-8">

                   <div>
                        <div class="text-blue-ligth text-center font-medium block md:hidden  ">¡Te damos la Bienvenida!</div>
                        <div class="text-blue-ligth text-center font-bold text-3xl  md:block hidden md:mb-10">¡Hola, te damos
                            la <br> Bienvenida!</div>

                    </div>
                    <div class="pb-3">
                        <form method="POST" action="{{ route('login') }}" autocomplete="off" >
                            @csrf
                        <div class="mt-3">
                            <div class="flex flex-col">
                                <input id="email" type="email"
                                    class="w-full py-2  px-2 rounded-xl border-2 placeholder-gray-w-4 text-basefont-normal text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none   focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('email') is-invalid @enderror "
                                    name="email"  placeholder="Usuario" required
                                    >

                                @error('email')
                                <span class="text-red-500 text-xs px-5" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                    </div>

                    <div class="flex flex-col mt-6 mb-4 ">
                        <input id="password" type="password"
                            class=" w-full rounded-xl border-2  py-2  px-2 border-gray-w-3 text-gray-w-9 text-base font-normal  focus:outline-none  focus:placeholder-blue-ligth focus:bg-gray-w-7 focus:ring-transparent focus:border-transparent @error('password') is-invalid @enderror"
                            placeholder="Contraseña" name="password" required>

                        @error('password')
                        <span class=" text-red-500 text-xs px-5" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                        <div class="flex flex-col justify-center items-center ">
                            <div class="hidden md:flex md:grid-row md:justify-center md:items-center mb-4 gap-5">
                                <div>
                                    @if (Route::has('password.request'))
                                    <a class="text-gray-w-5 font-light text-sm hover:text-green-lemon hover:no-underline	"
                                        href="{{ route('password.request') }}">
                                        Olvidaste Contraseña
                                    </a>
                                    @endif
                                </div>
                                <div>
                                    <p class="text-sm text-gray-w-5 font-norma"> <a
                                            href="{{route('applicant_registration')}}"
                                            class="text-blue-ligth font-medium hover:no-underline hover:text-blue-dark">¡Registrate</a>
                                        en Wortika!</p>
                                </div>
                            </div>
                            <button type="submit"
                                class=" w-40 py-2  bg-green-ligth text-white rounded-3xl md:rounded-xl md:w-full">
                                Iniciar Sesión
                            </button>

                            <div class="flex flex-row items-center justify-center mt-3">
                                <hr class="bg-gray-w-3 inline-block w-10"> <span
                                    class="text-black font-semibold px-2">O</span>
                                <hr class="bg-gray-w-3 inline-block w-10">
                            </div>
                            <div class="mt-3 ">
                                <a href="#!"
                                    class="bg-gray-w-6 text-blue-dark p-2 px-4 rounded-2xl flex flex-row items-center justify-center md:w-full lg:w-60 md:px-6">Acceder
                                    con <img
                                        src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/logo-google.png?alt=media&token=0b7ccefe-863a-4993-9e25-4dae26f9c73b"
                                        alt="inline-block" class=" pl-1 w-5 "></a>
                            </div>
                            <div class="mt-3 md:hidden">
                                @if (Route::has('password.request'))
                                <a class="text-gray-w-5 font-light text-sm hover:text-green-lemon hover:no-underline	"
                                    href="{{ route('password.request') }}">
                                    Olvidaste Contraseña
                                </a>
                                @endif
                            </div>
                            <div class="mt-3 md:hidden">
                                <p class="text-sm text-gray-w-5 font-normal">¿No tienes una cuenta? <a href=""
                                        class="text-blue-dark font-medium hover:no-underline hover:text-blue-dark">Regístrate</a>
                                </p>
                            </div>

                        </div>

                    </form>
                    </div>



                </div>
            </div>


        </div>

    </div>


</section>

@endsection

