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
    <div class="grid grid-cols-2 max-w-7xl shadow-xl m-10 py-20 pr-16 rounded-2xl " x-show="step != 'complete' ">
        <div class="flex flex-col items-center justify-center gap-16 w-full my-20 px-10">
            <img src={{ asset('img/logo-verde.svg') }} class="w-36 text-left" alt="logo-wortika">
            <img src={{asset('img/image-login-candidato.jpg')}} class="w-4/12 rounded-full" alt="">
            <p class="text-2xl text-center font-semibold  text-blue-ligth">¡Resgístrate e inicia <br> ahora!</p>
        </div>
        <div class="flex items-center justify-center w-full">
            <div class="min-w-full">
                <div x-show="step != 'complete' " class="flex flex-col items-center gap-2 justify-center  my-5">
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
                        <p class="text-base font-medium text-blue-ligth" x-show="step === 2">Datos de la Empresa</p>
                    </div>
                </div>

                {{-- step 1 --}}
                <div x-show="step === 1" class="overflow-auto h-96  form-login "  >
                    <div class="w-full grid grid-cols-2 gap-6">
                        <div class="w-72 ">
                            <label for="name" class="text-sm mb-1 text-gray-w-8 block">Nombres</label>
<input type="text" id="name" class="text-left 
                                    w-full 
                                    placeholder-gray-w-4 
                                    font-normal 
                                    py-2 
                                    pl-3 
                                    text-gray-w-9 
                                    focus:placeholder-blue-ligth 
                                    focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7  @error('name') is-invalid @enderror "
                                placeholder="Nombres" style="border-bottom: 1px solid #E4E4E4;">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="w-72">
                            <label for="surnames" class="text-sm mb-1 text-gray-w-8 block ">Apellidos</label>
                            <input type="text" id="surnames"
                                class="w-full text-left placeholder-gray-w-4  font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7  @error('surnames') is-invalid @enderror"
                                placeholder="Apellidos" style="border-bottom: 1px solid #E4E4E4;">

                            @error('surnames')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="w-full grid grid-cols-2 gap-6 mt-4">
                        <div class="w-72 ">
                            <label for="cargo" class="text-sm mb-1 text-gray-w-8 block">Cargo</label>
                            <input type="text" id="cargo"
                                class=" text-left w-full placeholder-gray-w-4 font-normal py-2 pl-3 text-gray-w-4  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7  @error('cargo') is-invalid @enderror "
                                placeholder="cargo" style="border-bottom: 1px solid #E4E4E4;">
                            @error('cargo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="w-72">
                            <label for="email" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <input type="text" id="email"
                                class="w-full text-left placeholder-gray-w-4  font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7  @error('email') is-invalid @enderror"
                                placeholder="Correo electrónico" style="border-bottom: 1px solid #E4E4E4;">

                            @error('surnames')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-6 mt-4">
                        <div class="w-72">
                            <label for="contraseña" class="text-sm mb-1 text-gray-w-8 block  ">Contraseña</label>
                            <div class="relative">
                                <input :type="togglePassword ? 'text' : 'password'" @keydown="checkPasswordStrength()"
                                    x-model="password"
                                    class="w-full placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('password') is-invalid @enderror "
                                    placeholder="Contraseña" style="border-bottom: 1px solid #E4E4E4;">
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
                        </div>
                        </div>
                        <div class="w-72">
                            <label for="email" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <div class="text-sm text-gray-w-9">
                                <i class="fas fa-info-circle text-blue-ligth"></i> Usa ocho o más caracteres con una combinación de letras, números y símbolos.
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



<!--                     <div class="col my-4">
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
                    </div> -->
<!--                     <div class="w-100 grid grid-cols-2 gap-6">
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
                    </div> -->
                </div>
                {{-- step 2 --}}
                <div x-show="step === 2" class="overflow-auto h-96 pr-3 form-login">

                    <div class="w-full grid grid-cols-2 gap-6">
                        <div class="w-72">
                            <label for="ruc" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <input type="text" id="ruc"
                                class="w-full text-left  placeholder-gray-w-4  font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('ruc') is-invalid @enderror "
                                placeholder="RUC" style="border-bottom: 1px solid #E4E4E4;">
                            @error('ruc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="w-72">
                            <label for="razon_social" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <div class="relative">
                                <input type="text" id="razon_social"
                                class="w-full text-left placeholder-gray-w-4  font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('razon_social') is-invalid @enderror "
                                placeholder="Razón social" style="border-bottom: 1px solid #E4E4E4;">
                                @error('razon_social')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-6 mt-4">
                        <div class="w-72">
                            <label for="sector" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <input type="text" id="sector"
                                class="w-full text-left  placeholder-gray-w-4  font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('email') is-invalid @enderror "
                                placeholder="Sector/Industria" style="border-bottom: 1px solid #E4E4E4;">
                            @error('sector')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="w-72">
                            <label for="tamanio" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <div class="relative">
                                <input type="text" id="tamanio"
                                class="w-full text-left placeholder-gray-w-4  font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('tamanio') is-invalid @enderror "
                                placeholder="Tamaño de Empresa" style="border-bottom: 1px solid #E4E4E4;">
                                @error('tamanio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-6 mt-4">
                        <div class="w-72">
                            <label for="telefono" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <input type="text" id="telefono"
                                class="w-full text-left placeholder-gray-w-4  font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('telefono') is-invalid @enderror "
                                placeholder="Teléfono" style="border-bottom: 1px solid #E4E4E4;">
                            @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="w-72">
                            <label for="pais" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <select
                                class="w-full text-left placeholder-gray-w-4 font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7"
                                form="carform" style="border-bottom: 1px solid #E4E4E4;" id="pais">
                                <option value="0">Pais</option>
                                <option value="Afganistán" id="AF">Afganistán</option>
                                <option value="Albania" id="AL">Albania</option>
                                <option value="Alemania" id="DE">Alemania</option>
                                <option value="Andorra" id="AD">Andorra</option>
                                <option value="Angola" id="AO">Angola</option>
                                <option value="Anguila" id="AI">Anguila</option>
                                <option value="Antártida" id="AQ">Antártida</option>
                                <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                <option value="Argelia" id="DZ">Argelia</option>
                                <option value="Argentina" id="AR">Argentina</option>
                                <option value="Armenia" id="AM">Armenia</option>
                                <option value="Aruba" id="AW">Aruba</option>
                                <option value="Australia" id="AU">Australia</option>
                                <option value="Austria" id="AT">Austria</option>
                                <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                <option value="Bahamas" id="BS">Bahamas</option>
                                <option value="Bahrein" id="BH">Bahrein</option>
                                <option value="Bangladesh" id="BD">Bangladesh</option>
                                <option value="Barbados" id="BB">Barbados</option>
                                <option value="Bélgica" id="BE">Bélgica</option>
                                <option value="Belice" id="BZ">Belice</option>
                                <option value="Benín" id="BJ">Benín</option>
                                <option value="Bermudas" id="BM">Bermudas</option>
                                <option value="Bhután" id="BT">Bhután</option>
                                <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                <option value="Birmania" id="MM">Birmania</option>
                                <option value="Bolivia" id="BO">Bolivia</option>
                                <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                <option value="Botsuana" id="BW">Botsuana</option>
                                <option value="Brasil" id="BR">Brasil</option>
                                <option value="Brunei" id="BN">Brunei</option>
                                <option value="Bulgaria" id="BG">Bulgaria</option>
                                <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                <option value="Burundi" id="BI">Burundi</option>
                                <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                <option value="Camboya" id="KH">Camboya</option>
                                <option value="Camerún" id="CM">Camerún</option>
                                <option value="Canadá" id="CA">Canadá</option>
                                <option value="Chad" id="TD">Chad</option>
                                <option value="Chile" id="CL">Chile</option>
                                <option value="China" id="CN">China</option>
                                <option value="Chipre" id="CY">Chipre</option>
                                <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                <option value="Colombia" id="CO">Colombia</option>
                                <option value="Comores" id="KM">Comores</option>
                                <option value="Congo" id="CG">Congo</option>
                                <option value="Corea" id="KR">Corea</option>
                                <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                <option value="Costa Rica" id="CR">Costa Rica</option>
                                <option value="Croacia" id="HR">Croacia</option>
                                <option value="Cuba" id="CU">Cuba</option>
                                <option value="Dinamarca" id="DK">Dinamarca</option>
                                <option value="Djibouri" id="DJ">Djibouri</option>
                                <option value="Dominica" id="DM">Dominica</option>
                                <option value="Ecuador" id="EC">Ecuador</option>
                                <option value="Egipto" id="EG">Egipto</option>
                                <option value="El Salvador" id="SV">El Salvador</option>
                                <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                <option value="Eritrea" id="ER">Eritrea</option>
                                <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                <option value="Eslovenia" id="SI">Eslovenia</option>
                                <option value="España" id="ES">España</option>
                                <option value="Estados Unidos" id="US">Estados Unidos</option>
                                <option value="Estonia" id="EE">Estonia</option>
                                <option value="c" id="ET">Etiopía</option>
                                <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                <option value="Filipinas" id="PH">Filipinas</option>
                                <option value="Finlandia" id="FI">Finlandia</option>
                                <option value="Francia" id="FR">Francia</option>
                                <option value="Gabón" id="GA">Gabón</option>
                                <option value="Gambia" id="GM">Gambia</option>
                                <option value="Georgia" id="GE">Georgia</option>
                                <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                <option value="Ghana" id="GH">Ghana</option>
                                <option value="Gibraltar" id="GI">Gibraltar</option>
                                <option value="Granada" id="GD">Granada</option>
                                <option value="Grecia" id="GR">Grecia</option>
                                <option value="Groenlandia" id="GL">Groenlandia</option>
                                <option value="Guadalupe" id="GP">Guadalupe</option>
                                <option value="Guam" id="GU">Guam</option>
                                <option value="Guatemala" id="GT">Guatemala</option>
                                <option value="Guayana" id="GY">Guayana</option>
                                <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                <option value="Guinea" id="GN">Guinea</option>
                                <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                <option value="Haití" id="HT">Haití</option>
                                <option value="Holanda" id="NL">Holanda</option>
                                <option value="Honduras" id="HN">Honduras</option>
                                <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                <option value="Hungría" id="HU">Hungría</option>
                                <option value="India" id="IN">India</option>
                                <option value="Indonesia" id="ID">Indonesia</option>
                                <option value="Irak" id="IQ">Irak</option>
                                <option value="Irán" id="IR">Irán</option>
                                <option value="Irlanda" id="IE">Irlanda</option>
                                <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                <option value="Islandia" id="IS">Islandia</option>
                                <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                <option value="Islas Cook" id="CK">Islas Cook</option>
                                <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                <option value="Islas Palau" id="PW">Islas Palau</option>
                                <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                <option value="Israel" id="IL">Israel</option>
                                <option value="Italia" id="IT">Italia</option>
                                <option value="Jamaica" id="JM">Jamaica</option>
                                <option value="Japón" id="JP">Japón</option>
                                <option value="Jordania" id="JO">Jordania</option>
                                <option value="Kazajistán" id="KZ">Kazajistán</option>
                                <option value="Kenia" id="KE">Kenia</option>
                                <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                <option value="Kiribati" id="KI">Kiribati</option>
                                <option value="Kuwait" id="KW">Kuwait</option>
                                <option value="Laos" id="LA">Laos</option>
                                <option value="Lesoto" id="LS">Lesoto</option>
                                <option value="Letonia" id="LV">Letonia</option>
                                <option value="Líbano" id="LB">Líbano</option>
                                <option value="Liberia" id="LR">Liberia</option>
                                <option value="Libia" id="LY">Libia</option>
                                <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                <option value="Lituania" id="LT">Lituania</option>
                                <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                <option value="Madagascar" id="MG">Madagascar</option>
                                <option value="Malasia" id="MY">Malasia</option>
                                <option value="Malawi" id="MW">Malawi</option>
                                <option value="Maldivas" id="MV">Maldivas</option>
                                <option value="Malí" id="ML">Malí</option>
                                <option value="Malta" id="MT">Malta</option>
                                <option value="Marruecos" id="MA">Marruecos</option>
                                <option value="Martinica" id="MQ">Martinica</option>
                                <option value="Mauricio" id="MU">Mauricio</option>
                                <option value="Mauritania" id="MR">Mauritania</option>
                                <option value="Mayotte" id="YT">Mayotte</option>
                                <option value="México" id="MX">México</option>
                                <option value="Micronesia" id="FM">Micronesia</option>
                                <option value="Moldavia" id="MD">Moldavia</option>
                                <option value="Mónaco" id="MC">Mónaco</option>
                                <option value="Mongolia" id="MN">Mongolia</option>
                                <option value="Montserrat" id="MS">Montserrat</option>
                                <option value="Mozambique" id="MZ">Mozambique</option>
                                <option value="Namibia" id="NA">Namibia</option>
                                <option value="Nauru" id="NR">Nauru</option>
                                <option value="Nepal" id="NP">Nepal</option>
                                <option value="Nicaragua" id="NI">Nicaragua</option>
                                <option value="Níger" id="NE">Níger</option>
                                <option value="Nigeria" id="NG">Nigeria</option>
                                <option value="Niue" id="NU">Niue</option>
                                <option value="Norfolk" id="NF">Norfolk</option>
                                <option value="Noruega" id="NO">Noruega</option>
                                <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                <option value="Omán" id="OM">Omán</option>
                                <option value="Panamá" id="PA">Panamá</option>
                                <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                <option value="Paquistán" id="PK">Paquistán</option>
                                <option value="Paraguay" id="PY">Paraguay</option>
                                <option value="Perú" id="PE">Perú</option>
                                <option value="Pitcairn" id="PN">Pitcairn</option>
                                <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                <option value="Polonia" id="PL">Polonia</option>
                                <option value="Portugal" id="PT">Portugal</option>
                                <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                <option value="Qatar" id="QA">Qatar</option>
                                <option value="Reino Unido" id="UK">Reino Unido</option>
                                <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                <option value="República Checa" id="CZ">República Checa</option>
                                <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                <option value="República Dominicana" id="DO">República Dominicana</option>
                                <option value="Reunión" id="RE">Reunión</option>
                                <option value="Ruanda" id="RW">Ruanda</option>
                                <option value="Rumania" id="RO">Rumania</option>
                                <option value="Rusia" id="RU">Rusia</option>
                                <option value="Samoa" id="WS">Samoa</option>
                                <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                <option value="San Marino" id="SM">San Marino</option>
                                <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                <option value="Santa Helena" id="SH">Santa Helena</option>
                                <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                <option value="Senegal" id="SN">Senegal</option>
                                <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                <option value="Sychelles" id="SC">Seychelles</option>
                                <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                <option value="Singapur" id="SG">Singapur</option>
                                <option value="Siria" id="SY">Siria</option>
                                <option value="Somalia" id="SO">Somalia</option>
                                <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                <option value="Suazilandia" id="SZ">Suazilandia</option>
                                <option value="Sudán" id="SD">Sudán</option>
                                <option value="Suecia" id="SE">Suecia</option>
                                <option value="Suiza" id="CH">Suiza</option>
                                <option value="Surinam" id="SR">Surinam</option>
                                <option value="Svalbard" id="SJ">Svalbard</option>
                                <option value="Tailandia" id="TH">Tailandia</option>
                                <option value="Taiwán" id="TW">Taiwán</option>
                                <option value="Tanzania" id="TZ">Tanzania</option>
                                <option value="Tayikistán" id="TJ">Tayikistán</option>
                                <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                <option value="Togo" id="TG">Togo</option>
                                <option value="Tonga" id="TO">Tonga</option>
                                <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                <option value="Túnez" id="TN">Túnez</option>
                                <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                <option value="Turquía" id="TR">Turquía</option>
                                <option value="Tuvalu" id="TV">Tuvalu</option>
                                <option value="Ucrania" id="UA">Ucrania</option>
                                <option value="Uganda" id="UG">Uganda</option>
                                <option value="Uruguay" id="UY">Uruguay</option>
                                <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                <option value="Vanuatu" id="VU">Vanuatu</option>
                                <option value="Venezuela" id="VE">Venezuela</option>
                                <option value="Vietnam" id="VN">Vietnam</option>
                                <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                <option value="Yemen" id="YE">Yemen</option>
                                <option value="Zambia" id="ZM">Zambia</option>
                                <option value="Zimbabue" id="ZW">Zimbabue</option>
                            </select>
                        </div>
                    </div> 

                    <div class="w-full grid grid-cols-2 gap-6 mt-4">
                        <div class="w-72">
                            <label for="provincia" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <select
                                class="w-full text-left placeholder-gray-w-4 font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7"
                                form="carform" style="border-bottom: 1px solid #E4E4E4;" id="provincia">
                                <option value="0">Provincia</option>
                            </select>
                        </div>
                        <div class="w-72">
                            <label for="ciudad" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <select
                                class="w-full text-left placeholder-gray-w-4 font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7"
                                form="carform" style="border-bottom: 1px solid #E4E4E4;" id="ciudad">
                                <option value="0">Ciudad/Distrito</option>
                            </select>
                        </div>                        
                    </div> 

                    <div class="w-full grid grid-cols-1 gap-6 mt-4">
                        <div class="w-full">
                            <label for="direccion" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <input type="text" id="direccion"
                                class="w-full text-left placeholder-gray-w-4  font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('direccion') is-invalid @enderror "
                                placeholder="Dirección (opcional)" style="border-bottom: 1px solid #E4E4E4;">
                            @error('direccion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> 

                    <div class="w-full grid grid-cols-1 gap-6 mt-4 pb-3">
                        <div class="w-full">
                            <label for="sitio_web" class="text-sm mb-1 text-gray-w-8 block">&nbsp;</label>
                            <input type="text" id="sitio_web"
                                class="w-full text-left placeholder-gray-w-4  font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('direccion') is-invalid @enderror "
                                placeholder="Sitio web" style="border-bottom: 1px solid #E4E4E4;">
                            @error('direccion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> 

                    <div class="w-full grid grid-cols-1 gap-6 mt-4 pb-3">
                        <div class="w-full">
 <!--                            <input type="text" id="sitio_web"
                                class="w-full text-left placeholder-gray-w-4  font-normal py-2 pl-3 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('direccion') is-invalid @enderror "
                                placeholder="Descripción Breve de la Empresa" style="border-bottom: 1px solid #E4E4E4;"> -->
                            <div class="relative">
                                <input type="text" class="w-full placeholder-gray-w-4  font-normal  py-2 text-gray-w-9  border-gray-w-3 focus:placeholder-blue-ligth focus:outline-none focus:ring-2 focus:ring-transparent focus:border-transparent focus:bg-gray-w-7 @error('password') is-invalid @enderror "
                                    placeholder="Descripción Breve de la Empresa" style="border-bottom: 1px solid #E4E4E4; padding-left: 25px;">
                                @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="absolute left-0 bottom-0 top-0 px-0 py-2">
                                    <i class="fas fa-info-circle text-blue-ligth"></i> 

                                </div>
                            </div>                          
                            @error('direccion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div> 



<!--                     <div class="w-full grid grid-cols-2 gap-6">
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
                            <div class="relative">
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
                    </div> -->

<!--                     <div class="mt-16 col">
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
                    </div> -->
<!--                     <div class="col mt-5">
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
                    </div> -->
                </div>



                <!-- Navegacion Inferior -->
                <div class="relative inset-x-0 bottom-0 py-2 px-1 mt-5 bg-white" x-show="step != 'complete' ">
                    <div class=" px-4">
                        <div class="flex justify-between">
                            <div class="w-1/2">
                                <button x-show="step > 1" @click="step--"
                                    class=" focus:outline-none py-2 px-5 rounded-lg  text-center text-gray-w-9 bg-transparent hover:bg-gray-100 font-medium">
                                    <i class="fas fa-arrow-left text-blue-ligth pr-1"></i>Atrás</button>
                            </div>

                    <div class="w-1/2 text-right">
                    <!-- <div class="w-1/2 text-right" @foo="step++"> -->
<!--                                 <button x-show="step < 2" @click="step++"
                                    class=" focus:outline-none border  border-transparent py-3 px-4 rounded-2xl shadow-sm text-center text-white bg-gradient-wortika hover:to-blue-ligth font-medium" style="background-color: gray;">Siguiente</button> -->

                    <button x-show="step < 2" @click="step++" class="focus:outline-none border border-transparent py-3 px-4 rounded-2xl shadow-sm text-center text-white bg-gradient-wortika hover:to-blue-ligth font-medium" id="btnSiguiente">Siguiente</button>                                    

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

    const hannfuncion = () => {
        step 
    }

    const registerApplicant = () => {
        return {
            step: 2,
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
