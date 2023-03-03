<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-transparent" x-data="{ open : false ,dropdownOpen: false}" x-cloak>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                <!-- Mobile menu button-->
                <button x-on:click="open = true" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

<!--                     <svg x-show="!open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="#fff"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg x-show="open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="#fff"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg> -->
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

                <div class="hidden md:block sm:ml-6">
                    <div class="flex space-x-4">

                        <a href="#"
                            class="text-gray-300 hover:font-bold  hover:text-white px-3 py-2 rounded-md text-sm font-medium">Blog</a>

                        <a href="{{route('busco-talento')}}"
                            class="text-gray-300 hover:font-bold  hover:text-white px-3 py-2 rounded-md text-sm font-medium">Soy Empresa</a>

                        <a href="/"
                            class="text-gray-300 hover:font-bold  hover:text-white px-3 py-2 rounded-md text-sm font-medium">Soy
                            Postulante</a>

                    </div>
                </div>
            </div>
            <div
                class="absolute inset-y-0 right-0 md:flex items-center pr-2 hidden sm:static sm:inset-auto sm:ml-6 sm:pr-0 ">
                <button
                    class="text-gray-300 hover:font-bold  hover:text-white px-3 py-2 rounded-md text-sm font-medium ">
                    Publicar Empleo
                </button>

                {{-- <button
                    class="bg-white p-2 rounded-full text-blue-dark border-2 font-medium border-solid border-white hover:bg-transparent hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    Inicar Sesión
                </button> --}}
                <div @click.away="dropdownOpen = false" class="relative">

                    <button @click="dropdownOpen = !dropdownOpen"
                        class="flex flex-row text-white  bg-transparent border-2 border-white items-center w-full px-4 py-2 mt-2 text-sm font-medium text-left  rounded-lg   md:w-auto md:inline md:mt-0 md:ml-2 hover:text-blue-ligth focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Iniciar Sesión</span>
                        <svg fill="currentColor" viewBox="0 0 20 20"
                            :class="{'rotate-180': dropdownOpen, 'rotate-0':  !dropdownOpen}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="dropdownOpen" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full md:max-w-screen-sm md:w-auto mt-2 origin-top-right">
                        <div class="w-50 px-2 pt-2 pb-4 bg-white rounded-md shadow-lg ">
                            <div class="grid grid-cols-1 w-auto  gap-4">
                                <a class="flex w-36 flex-col items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-blue-ligth focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">

                                    <div class="">
                                        <p class="font-normal text-base">Soy reclutador</p>
                                    </div>
                                </a>

                                <a class="flex w-36 flex-col  items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-blue-ligth focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">

                                    <div class="">
                                        <p class="font-normal text-base">Soy Candidato</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
<!--                 <a href="{{ route('record_type') }}"
                    class="bg-white px-3 p-2 md:ml-4 rounded-lg text-blue-ligth text-sm border-2 font-medium border-solid border-white hover:bg-transparent hover:text-white ">
                    Regístrater
                </a> -->
                <a href="{{ route('company_registration') }}"
                    class="bg-white px-3 p-2 md:ml-4 rounded-lg text-blue-ligth text-sm border-2 font-medium border-solid border-white hover:bg-transparent hover:text-white ">
                    Regístrate
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden relative  bg-white " id="mobile-menu" x-show="open" x-on:click.away="open=false">
        <div class="px-2 pt-2 pb-3 space-y-1 text-center">
            <h3 class="text-center text-blue-dark">Wortika</h3>
            <a href="#"
                class="text-blue-dark hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Blog</a>

            <a href="{{route('busco-talento')}}"
                class="text-blue-dark hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Busco
                Talento</a>

            <a href="/"
                class="text-blue-dark hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Soy
                Postulante</a>

            <div class="flex flex-col  items-center justify-center md:hidden">
                <a href="#"
                    class="text-blue-dark hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Publicar
                    Empleo</a>

                <div @click.away="dropdownOpen = false" class="relative">

                    <button @click="dropdownOpen = !dropdownOpen"
                        class="flex flex-row text-gray-900  bg-gray-200 items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Iniciar Sesión</span>
                        <svg fill="currentColor" viewBox="0 0 20 20"
                            :class="{'rotate-180': dropdownOpen, 'rotate-0':  !dropdownOpen}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="dropdownOpen" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full md:max-w-screen-sm md:w-auto mt-2 origin-top-right">
                        <div class="w-50 px-2 pt-2 pb-4 bg-white rounded-md shadow-lg ">
                            <div class="grid grid-cols-1 w-auto  gap-4">
                                <a class="flex w-36 flex-col items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">

                                    <div class="">
                                        <p class="font-normal text-base">Soy reclutador</p>
                                    </div>
                                </a>

                                <a class="flex w-36 flex-col  items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">

                                    <div class="">
                                        <p class="font-normal text-base">Soy Candidato</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</nav>
