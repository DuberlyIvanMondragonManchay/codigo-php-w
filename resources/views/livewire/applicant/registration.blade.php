<section class="bg-white w-screen h-screen flex items-center justify-center" x-data="registerApplicant()"
    @keydown.escape="showModal = false" @keydown.escape="showModal2 = false" x-cloak>
    {{-- seccion de completado --}}
    <div x-show="step === 'complete'">
        <div class="bg-white rounded-lg px-24 py-10 shadow-md w-100 ">
            <div class="flex flex-col  items-center justify-center">
                <img src={{ asset('img/logo-verde.svg') }} class="w-2/6 mb-10" alt="logo-wortika">

                <h2 class="text-2xl mb-4 text-blue-ligth text-center font-bold">¡Todo listo Sixto!</h2>

                <div class="text-gray-w-9 mb-8 text-center">
                    Te hemos enviado un mensaje de <br> confirmación a tu correo.
                </div>
                <div class="py-5">
                    <img src={{ asset('img/finish-postulante.svg')}} class="" alt="">
                </div>

                <div class="flex flex-row gap-10">
                    <a href="/"
                        class=" focus:outline-none border  border-transparent py-3 px-4 rounded-2xl shadow-sm text-center text-blue-ligth bg-gray-w-11  font-medium hover:no-underline hover:text-blue-ligth">Ir
                        al Inicio</a>
                    <a href="/login"
                        class=" focus:outline-none border  border-transparent py-3 px-4 rounded-2xl shadow-sm text-center text-white bg-gradient-wortika  font-medium hover:no-underline">Ir
                        a Login</a>
                </div>

            </div>
        </div>
    </div>
    {{--/ Fin seccion de completado --}}
    <div class="grid grid-cols-2 max-w-7xl shadow-2xl m-10 py-20 pr-16 rounded-lg " x-show="step != 'complete' ">
        <div class="flex flex-col  items-center  justify-center gap-16 w-full my-20 px-10">
            <img src={{ asset('img/logo-verde.svg') }} class="w-36 text-left" alt="logo-wortika">
            <img src={{asset('img/image-login-candidato.jpg')}} class="w-4/12 rounded-full" alt="">
            <p class="text-2xl text-center font-semibold  text-blue-ligth">¡Resgístrate e inicia <br> ahora!</p>
        </div>
        <div class="flex items-center justify-center w-full">
            <div class="min-w-full	">
                <div x-show="step != 'complete' "   class="flex flex-col items-center gap-2 justify-center  my-5">
                    <div x-show="step === 1"  class="  flex items-center justify-center gap-2 w-full bg-white rounded-full mr-2">
                       <div class="bg-blue-ligth rounded-full w-2 h-2">
                       </div>
                       <div class="bg-blue-ligth/30 rounded-full w-2 h-2">
                       </div>
                    </div>
                    <div x-show="step === 2"  class="flex items-center justify-center gap-2 w-full bg-white rounded-full mr-2">
                        <div class="bg-blue-ligth/30 rounded-full w-2 h-2">
                        </div>
                        <div class="bg-blue-ligth rounded-full w-2 h-2">
                        </div>
                     </div>
                    {{-- <div class="text-sm font-medium w-10 text-blue-ligth mt-1" x-text="parseInt(step / 2 * 100) +'%'">
                    </div> --}}
                    <div class="mb-4">
                        <p class="text-base font-medium text-blue-ligth" x-show="step === 1">Datos Personales</p>
                        <p class="text-base font-medium text-blue-ligth" x-show="step === 2">Datos de la Cuenta</p>
                    </div>
                </div>

                {{-- step 1 --}}
                <div x-show="step === 1" class="overflow-auto h-96  form-login "  >
                    <div class="w-full grid grid-cols-2 gap-6">
                        <div class="w-72 ">
                            <label for="name" class="text-sm mb-1 text-gray-w-8 block  ">Nombres</label>
                            <input type="text" id="name"
                                class=" text-center  w-full rounded-xl border-2 placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7  @error('name') is-invalid @enderror "
                                placeholder="Nombres">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="w-72">
                            <label for="surnames" class="text-sm mb-1 text-gray-w-8 block ">Apellidos</label>
                            <input type="text" id="surnames"
                                class="w-full text-center   rounded-xl border-2 placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7  @error('surnames') is-invalid @enderror"
                                placeholder="Apellidos" >

                            @error('surnames')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="col my-4">
                        <label for="nombres" class="text-sm mb-1 text-gray-w-8 block  ">Fecha de nacimiento</label>
                        <div class="flex gap-6 text-center">
                            <select
                                class="w-60  rounded-xl border-2 placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7"
                                form="carform">
                                <option value="volvo">1</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            <select
                                class="w-60  rounded-xl border-2 placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7"
                                form="carform">
                                <option value="volvo">Julio</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            <select
                                class="w-60  rounded-xl border-2 placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7"
                                form="carform">
                                <option value="volvo">2021</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-100 grid grid-cols-2 gap-6">
                        <div class="col">
                            <label for="ubication" class="text-sm mb-1 text-gray-w-8 block  ">Ubicación</label>
                            <select id=ubication
                                class="w-full  rounded-xl border-2 placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('ubication') is-invalid @enderror"
                                >
                                <option value="volvo">Lima,Peru</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            @error('ubication')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="phone" class="text-sm mb-1 text-gray-w-8 block ">Celular</label>

                                <input type="number" id="phone"
                                    class="col-span-1 w-full  rounded-xl border-2 placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7   @error('phone') is-invalid @enderror"
                                    placeholder=" Celular">

                        </div>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- step 2 --}}
                <div x-show="step === 2" class="overflow-auto h-96  form-login" >
                    <div class="w-full grid grid-cols-2 gap-6">
                        <div class="w-72">
                            <label for="email" class="text-sm mb-1 text-gray-w-8 block  ">Correo Electronico</label>
                            <input type="email" id="email"
                                class="w-full  rounded-xl border-2 placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('email') is-invalid @enderror "
                                placeholder="Correo Electronico">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="w-72">
                            <label for="nombres" class="text-sm mb-1 text-gray-w-8 block  ">Contraseña</label>


                            <div class="relative  ">
                                <input :type="togglePassword ? 'text' : 'password'" @keydown="checkPasswordStrength()"
                                    x-model="password"
                                    class="w-full  rounded-xl border-2 placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('password') is-invalid @enderror "
                                    placeholder="Contraseña" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="absolute right-0 bottom-0 top-0 px-3 py-2 cursor-pointer"
                                    @click="togglePassword = !togglePassword">
                                    <svg :class="{'hidden': !togglePassword, 'block': togglePassword }"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-gray-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 19c.946 0 1.81-.103 2.598-.281l-1.757-1.757C12.568 16.983 12.291 17 12 17c-5.351 0-7.424-3.846-7.926-5 .204-.47.674-1.381 1.508-2.297L4.184 8.305c-1.538 1.667-2.121 3.346-2.132 3.379-.069.205-.069.428 0 .633C2.073 12.383 4.367 19 12 19zM12 5c-1.837 0-3.346.396-4.604.981L3.707 2.293 2.293 3.707l18 18 1.414-1.414-3.319-3.319c2.614-1.951 3.547-4.615 3.561-4.657.069-.205.069-.428 0-.633C21.927 11.617 19.633 5 12 5zM16.972 15.558l-2.28-2.28C14.882 12.888 15 12.459 15 12c0-1.641-1.359-3-3-3-.459 0-.888.118-1.277.309L8.915 7.501C9.796 7.193 10.814 7 12 7c5.351 0 7.424 3.846 7.926 5C19.624 12.692 18.76 14.342 16.972 15.558z" />
                                    </svg>

                                    <svg :class="{'hidden': togglePassword, 'block': !togglePassword }"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-gray-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z" />
                                        <path
                                            d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z" />
                                    </svg>
                                </div>
                            </div>

                            <div class="flex flex-col col items-center mt-2  pr-3 h-3">
                                {{-- <div class="w-100 flex justify-between  h-2">
                                    <div :class="{ 'bg-red-500': passwordStrengthText == 'Muy debil' ||  passwordStrengthText == 'Podria ser mas fuerte' || passwordStrengthText == 'Contraseña Fuerte'  }"
                                        class="h-2 rounded-full mr-1 w-1/3 bg-gray-300"></div>
                                    <div :class="{ 'bg-yellow-600': passwordStrengthText == 'Podria ser mas fuerte' || passwordStrengthText == 'Contraseña Fuerte' }"
                                        class="h-2 rounded-full mr-1 w-1/3 bg-gray-300"></div>
                                    <div :class="{ 'bg-green-400': passwordStrengthText == 'Contraseña Fuerte' }"
                                        class="h-2 rounded-full w-1/3 bg-gray-300"></div>

                                </div> --}}
                                {{-- <div x-text="passwordStrengthText"
                                    class="text-gray-500 font-medium text-sm my-1 leading-none "></div> --}}
                                <div class="text-xs text-gray-w-9">
                                    <i class="fas fa-info-circle text-blue-ligth"></i> Usa ocho o más caracteres con una
                                    combinación de letras, números y símbolos.
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mt-16 col">
                        <label for="cv" class="text-sm mb-1 text-gray-w-8 block  ">Sube tu CV</label>
                        <div class="grid grid-cols-2 my-2  divide-x-1 divide-gray-w-10">
                            <div class="flex items-center justify-center text-sm text-gray-w-9">
                                <i class="fas fa-info-circle text-blue-ligth pr-2"></i>Tamaño mínimo de archivo: 15MB.
                                Se permiten formatos Doc, Doxs y Pdf.
                            </div>
                            <div class="pl-3 flex items-center justify-center col">
                                <label class="w-1/2 flex rounded-2xl  items-center px-4 py-3 bg-gray-w-11 tracking-wide  border border-blue cursor-pointer  text-blue-ligth ease-linear transition-all duration-150
                                    @error('cv') is-invalid @enderror">

                                    <span class=" text-base ">Subir </span>
                                    <i class="fas fa-arrow-up fa-1x  text-blue-ligth pl-2"></i>
                                    <input type="file" class="hidden"  />
                                </label>
                                @error('cv')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <label class="flex break-words justify-start items-center  py-3  mr-4">
                            <div class="text-teal-600 mr-3">
                                <input type="checkbox" x-model="terms" value="dato"
                                    class="form-radio rounded-full focus:outline-none checked:border-blue-ligth text-blue-ligth border-blue-ligth @error('accept') is-invalid @enderror"
                                     />
                            </div>
                            <div class="select-none text-xs text-gray-w-4 break-words">Acepto los <button
                                    @click="showModal = true"
                                    class="text-blue-ligth underline hover:text-blue-ligth">términos y
                                    condiciones</button>
                                del uso del sistema y la <button class="text-blue-ligth underline hover:text-blue-ligth"
                                    @click="showModal2 = true">política de privacidad</button>.</div>
                        </label>
                        @error('accept')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <!-- Navegacion Inferior -->
                <div class="relative inset-x-0 bottom-0 py-2 px-1 bg-white" x-show="step != 'complete' ">
                    <div class=" px-4">
                        <div class="flex justify-between">
                            <div class="w-1/2">
                                <button x-show="step > 1" @click="step--"
                                    class=" focus:outline-none py-2 px-5 rounded-lg  text-center text-gray-w-9 bg-transparent hover:bg-gray-100 font-medium">
                                    <i class="fas fa-arrow-left text-blue-ligth pr-1"></i>Atrás</button>
                            </div>

                            <div class="w-1/2 text-right">
                                <button x-show="step < 2" @click="step++"
                                    class=" focus:outline-none border  border-transparent py-3 px-4 rounded-2xl shadow-sm text-center text-white bg-gradient-wortika hover:to-blue-ligth font-medium">Siguiente</button>

                                <button x-show="step === 2" @click="step = 'complete' "
                                    class=" focus:outline-none border  border-transparent py-3 px-4 rounded-2xl shadow-sm text-center text-white bg-gradient-wortika hover:to-blue-ligth font-medium">¡Crear
                                    Cuenta!</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Navegacion Inferior --}}
            </div>
        </div>
    </div>

    <!--Modal Terminos y Condiciones-->
    <div class="overflow-auto" x-show="showModal"
        :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
        <!--Dialog-->
        <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal"
            @click.away="showModal = false">

            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Modal terminos y condiciones</p>
                <div class="cursor-pointer z-50" @click="showModal = false">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>

            <!-- content -->
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum nobis officia quia vel provident
                animi totam debitis. Eius consequatur non excepturi ab enim hic consequuntur aliquid iusto dolores
                perferendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dignissimos eius
                provident, error soluta aliquam tempore. Laboriosam nostrum quia tempora quisquam velit fugiat magnam,
                perferendis provident veritatis soluta totam hic? ipsum</p>
            <p>...</p>
            <p>...</p>
            <p>...</p>
            <p>...</p>

            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button
                    class="modal-close focus:outline-none border  border-transparent py-3 px-4 rounded-2xl shadow-sm text-center text-white bg-gradient-wortika hover:to-blue-ligth font-medium"
                    @click="showModal = false">Cerrar</button>
            </div>


        </div>
        <!--/Dialog -->
    </div><!-- /Modal Terminos y Condiciones -->



    <!--Modal Politicas y Privacidad-->
    <div class="overflow-auto" x-show="showModal2"
        :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal2 }">
        <!--Dialog-->
        <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal2"
            @click.away="showModal2 = false">

            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Modal Politicas y Privacidad</p>
                <div class="cursor-pointer z-50" @click="showModal2 = false">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>

            <!-- content -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, architecto cumque vero eligendi,
                praesentium quasi totam beatae quod rem suscipit blanditiis aut, repellendus sit reiciendis pariatur
                accusantium fuga tempora. Esse?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, accusamus alias? Adipisci, aut labore.
                Labore ratione totam sequi, a, quo minima eligendi eaque iste, aperiam doloribus repudiandae corrupti
                dolore unde!</p>
            <p>...</p>
            <p>...</p>
            <p>...</p>

            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button
                    class="modal-close focus:outline-none border  border-transparent py-3 px-4 rounded-2xl shadow-sm text-center text-white bg-gradient-wortika hover:to-blue-ligth font-medium"
                    @click="showModal2 = false">Cerrar</button>
            </div>


        </div>
        <!--/Dialog -->
    </div><!-- /Modal Politicas y Privacidad -->

</section>



{{-- JavaScript Alpine de registro --}}

<script>
    const registerApplicant = () => {
        return {
            step: 1,
            passwordStrengthText: '',
            togglePassword: false,
            password: '',
            terms: '',
            showModal: false,
            showModal2 : false,

            //funcion para checar complejidad de password
            checkPasswordStrength() {
                const strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                const mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

                let value = this.password;

                if (strongRegex.test(value)) {
                    this.passwordStrengthText = "Contraseña Fuerte";
                } else if(mediumRegex.test(value)) {
                    this.passwordStrengthText = "Podria ser mas fuerte";
                } else {
                    this.passwordStrengthText = "Muy debil";
                }
            }
        }
}
</script>
