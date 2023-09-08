<div>
    <!-- Navigation start -->
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="ml-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden">
        <span class="sr-only">Ouvrir le menu</span>
        <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>


    <aside id="logo-sidebar" class="fixed left-0 top-0 z-40 h-screen w-80 -translate-x-full shadow-md shadow-black transition-transform sm:translate-x-0" aria-label="Sidebar">

        <div class="h-full overflow-y-auto bg-indigo-950 px-3 py-10 dark:bg-gray-800">
            <a href="{{ route('home') }}">
                <div>
                    <div id="header-content" class="pl-4">
                        <img src="{{ asset('assets/img/avatar_yassine_labhih.svg') }}" alt="Avatar de Yassine Labhih" class="mb-4 h-auto rounded-full bg-indigo-300 align-middle shadow-lg" style="max-width: 120px;" />

                        <h4 class="mb-2 text-2xl font-semibold leading-[1.2] text-indigo-100">Yassine Labhih</h4>
                        <p class="mb-4 text-indigo-200 dark:text-indigo-200">contact@yassinelabhih.com</p>
                    </div>
                </div>

            </a>

            @dump($color)

            <div class="grid grid-cols-3 justify-center gap-4">

                <div>


                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="inline-flex justify-center rounded-lg p-2.5 text-sm text-white hover:bg-indigo-100 hover:text-indigo-900 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700" type="button"><svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z" />
                        </svg></button>


                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHelperRadioButton">
                            <li>
                              <div wire:click="$refresh" class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <div  wire:click="changeColor" class="flex items-center h-5">
                                    <input checked id="helper-radio-4" name="color" wire:click="$set('color', 'indigo')" type="radio" value="indigo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-radio-4" class="font-medium text-gray-900 dark:text-gray-300">
                                      <div>Indigo</div>
                                    </label>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <div wire:click="changeColor" class="flex items-center h-5">
                                    <input id="helper-radio-5"  type="radio" name="color" wire:click="$set('color', 'blue')" value="blue" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-radio-5" class="font-medium text-gray-900 dark:text-gray-300">
                                      <div>Company</div>
                                    </label>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <div class="flex items-center h-5">
                                    <input id="helper-radio-6"  type="radio" name="color" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-radio-6" class="font-medium text-gray-900 dark:text-gray-300">
                                      <div>Non profit</div>
                                    </label>
                                </div>
                              </div>
                            </li>
                          </ul>
                    </div>


                </div>

                <div>
                    <button id="theme-toggle" type="button" class="inline-flex justify-center rounded-lg p-2.5 text-sm text-white hover:bg-indigo-100 hover:text-indigo-900 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700">

                        <svg id="theme-toggle-dark-icon" class="block h-6 w-6 dark:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8.509 5.75c0-1.493.394-2.96 1.144-4.25h-.081a8.5 8.5 0 1 0 7.356 12.746A8.5 8.5 0 0 1 8.509 5.75Z" />
                        </svg>

                        <svg id="theme-toggle-light-icon" class="hidden h-6 w-6 dark:block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 3V1m0 18v-2M5.05 5.05 3.636 3.636m12.728 12.728L14.95 14.95M3 10H1m18 0h-2M5.05 14.95l-1.414 1.414M16.364 3.636 14.95 5.05M14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" />
                        </svg>
                    </button>
                </div>

                <div>
                    <button type="button" data-dropdown-toggle="language-dropdown" class="inline-flex justify-center rounded-lg p-2.5 text-sm text-white hover:bg-indigo-100 hover:text-indigo-900 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                        </svg>

                    </button>
                    <!-- Dropdown -->
                    <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white text-base shadow dark:bg-gray-700" id="language-dropdown">
                        <ul class="py-1" role="none">
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg aria-hidden="true" class="mr-2 h-4 w-4 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icons-fr" viewBox="0 0 512 512">
                                            <path fill="#fff" d="M0 0h512v512H0z"/>
                                            <path fill="#002654" d="M0 0h170.7v512H0z"/>
                                            <path fill="#ce1126" d="M341.3 0H512v512H341.3z"/>
                                          </svg>
                                          Francais
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg  aria-hidden="true" class="mr-2 h-4 w-4 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icons-us" viewBox="0 0 512 512">
                                            <path fill="#bd3d44" d="M0 0h512v512H0"/>
                                            <path stroke="#fff" stroke-width="40" d="M0 58h512M0 137h512M0 216h512M0 295h512M0 374h512M0 453h512"/>
                                            <path fill="#192f5d" d="M0 0h390v275H0z"/>
                                            <marker id="us-a" markerHeight="30" markerWidth="30">
                                              <path fill="#fff" d="m15 0 9.3 28.6L0 11h30L5.7 28.6"/>
                                            </marker>
                                            <path fill="none" marker-mid="url(#us-a)" d="m0 0 18 11h65 65 65 65 66L51 39h65 65 65 65L18 66h65 65 65 65 66L51 94h65 65 65 65L18 121h65 65 65 65 66L51 149h65 65 65 65L18 177h65 65 65 65 66L51 205h65 65 65 65L18 232h65 65 65 65 66L0 0"/>
                                          </svg>

                                        English
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg aria-hidden="true" class="mr-2 h-4 w-4 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icons-sa" viewBox="0 0 512 512">
                                            <defs>
                                              <clipPath id="sa-a">
                                                <path fill-opacity=".7" d="M124 0h496v496H124z"/>
                                              </clipPath>
                                            </defs>
                                            <g fill-rule="evenodd" clip-path="url(#sa-a)" transform="translate(-128) scale(1.0321)">
                                              <path fill="#165d31" d="M0 0h744v496H0z"/>
                                              <path fill="#fff" d="M187.5 140.6c-.8 11.6-1.9 32 8 34.1 11.9 1.1 5.3-20.2 9.6-24 .9-2 2.4-2 2.5.5v18c-.1 6 3.7 7.6 6.7 8.9 3.2-.3 5.2-.2 6.5 2.8l1.4 31.3s7.3 2 7.6-17.6c.4-11.5-2.3-21.2-.7-23.4 0-2.2 2.8-2.3 4.8-1.3 3.1 2.2 4.5 5 9.3 3.8 7.4-2 11.8-5.6 12-11.2a51 51 0 0 0-3.4-16.1c.3-1-1.5-3.5-1.1-4.5 1.3 2 3.3 1.9 3.8 0-1.3-4.2-3.2-8.1-6.4-9.8-2.6-2.3-6.4-1.8-7.8 3a26 26 0 0 0 6 17.3 17 17 0 0 1 1.5 8.7c-2.1 1.3-4.2.7-6-1.1 0 0-5.9-4.5-5.9-5.4 1.6-10 .4-11.1-.5-13.9-.6-3.8-2.4-5-3.9-7.6-1.5-1.6-3.4-1.6-4.4 0-2.6 4.5-1.4 14.1.5 18.4 1.4 4 3.4 6.5 2.4 6.5-.8 2.2-2.4 1.7-3.6-.9a61.2 61.2 0 0 1-2.1-16.9c-.5-4.5-1-14-4-16.4-1.8-2.4-4.5-1.2-5.4 1a80 80 0 0 0 .3 13c2 7 2.6 13.4 3.6 20.7.3 9.8-5.7 4.3-5.4-.6 1.4-6.3 1-16.3-.2-18.8-1-2.5-2.1-3.1-4.4-2.7-2-.2-6.7 5-8 13.8 0 0-1.2 4.5-1.7 8.4-.7 4.5-3.6 7.7-5.7-.6-1.8-6-2.9-20.9-5.9-17.4z"/>
                                              <path fill="#fff" d="m219.9 188.2-31 14.9c.3-7 14.7-19.8 24.5-20 6.4.2 4.8 2.5 6.5 5z"/>
                                              <path fill="#fff" d="M214.5 197.9c-16.4 42.1 38.2 48 44.3 1.7.6-1.9 3-3.8 3.3-.7-1.3 42-42.2 44.8-49.2 31.6-1.7-3-2.2-10-2.4-14.2-1-8.2-5.4-5-6 3.2-.7 4.5-.6 5.8-.6 10.2 2.2 33 55 18.8 63.6-8.5 4.5-15.1-.8-26.3 1.7-26.3 5.2 5.7 12.6.8 14.2-1.2.7-1 2.4-1.6 3.6-.3 4 3 11.3 1.5 12.8-3.6.8-5.1 1.5-10.3 1.7-15.7-3.3 1-5.8 1.7-6 3l-.7 4.6c-.3 1.4-3.2 1.5-3.3-.4-1.3-5.7-6.5-6.5-9.7 2.4-2.1 1.8-6 2-6.4-.5.5-6-1.9-6.8-6.7-4l-4.7-35c2 0 3.9 1.4 5.7-.9-2-6.3-6.3-19-8.6-20-1.2-1.4-2.1-.5-3.6-.2-2.6.8-5 3-4.2 7.3l8 50.2c.4 2.1-1.4 5-3.7 4.7-3.9-2.7-4.9-8-11.5-7.8-4.9 0-10.4 5.3-11 10.4-.9 4-1.2 8.4 0 11.9 3.3 4 7.4 3.7 11 2.7 2.9-1.2 5.3-4.1 6.4-3.4.7.9.1 10.5-13.9 18-8.4 3.8-15.2 4.6-18.8-2.3-2.2-4.3.2-20.7-5.3-17z"/>
                                              <path fill="#fff" d="M283.8 155c3.3-1.1 18.8-19 18.8-19l-2.3-1.8c-.9-.8-.8-1.5 0-2.3 3.8-2.2 2.6-7.2.6-9.4a9.4 9.4 0 0 0-8.4 0c-2.7 2.7-3.3 6.8-1.2 9.4 2 1 4.2 3 2.8 4.2-6.4 6.8-23.8 18.5-21.8 19 .4.5 11.2.5 11.5 0zm-93.9 63c-5.8 9.3-6.3 23.2-3 27.3 1.6 2 4.4 2.8 6.5 2.2 3.7-1.6 5.3-9 4.4-11.7-1.2-2-2.2-2.2-3.4-.6-2.6 5.2-3.7 1.6-3.9-1.3-.4-5.5.1-10.7.7-14.7.7-4.1 0-2.9-1.3-1.2zM439 203c-5.6-12.1-13.4-24.1-15.9-28.7a541 541 0 0 0-24-34.9c-6-7.2 9.9 3-2-11.3-4.5-4-4.8-4.1-8.6-7.3-1.9-1.4-6.5-3.8-7.3.2a23.5 23.5 0 0 0 .4 8.6c.4 2 3.3 5.3 4.8 7.3 19 25.5 35.9 51.4 52.1 83.8 2.6-1.2 2-15.6.5-17.7z"/>
                                              <path fill="#fff" d="M414.3 243.7c-1.1 1.3 2.7 6.6 7.7 6.6 8.4-1 15.7-5.7 22.5-18 1.8-3 5-9 5.1-13.9.7-28-1.4-49.8-5.6-70-.2-2 0-4.4.3-5 .5-.6 2.3 0 3.3-1.5 1.4-1.5-3.8-13.6-6.7-18.2-1.1-2.1-1.5-3.5-3.2.2-1.9 3-3 8.3-3 13.2 4 27.6 5.3 51.8 7.9 79.3.2 2.7-.2 6.6-2 8.1a77.8 77.8 0 0 1-26.3 19.2zm112.8-.1c-6 3.4-6 7.4-1.1 7.6 8.3-1 18.2-1.7 25-12 1.8-2.9 4-10.7 4.1-15.4.6-28-.4-49-4.6-69.2-.2-2-1.1-6.5-.8-7.1.6-1.4 3.3.1 4.3-1.5 1.4-1.4-7-12.3-10-17-1.1-2-1.5-3.4-3.2.3-1.9 3-2.5 8.4-1.8 13.1 4.5 30 7.8 52.5 8.4 79-.3 2.6-.4 4-1.6 7.1-2.6 3.4-5.5 7.6-8.3 9.6-2.7 2-8.5 4-10.4 5.5z"/>
                                              <path fill="#fff" d="M531.6 216.7v-18.3a33 33 0 0 0-3-13.2c-1.8-4-.7-7.1-1.5-11.4-.8-4.2-.6-10.6-1.8-15.6-.4-2-1.4-8.2-1-8.8.4-1.4 2.3 0 3.2-1.6 1.4-1.5-4.8-17.5-7.9-22-1.1-2-3.1-1.4-5.7 2-2.3 2.1-1.4 7.1-.5 11.8 6 31.3 10.4 59.7 9.5 89.4-.3 2.6 8.8-7.5 8.7-12.3zm-44.3-38.8c-3.7 0-11.6-7.4-14-11.6a7.8 7.8 0 0 1 .5-6.2c1.4-1 3.6-2 5.2-1 0 0 1.6 2.4 1.3 2.7 2 1 3 .4 3.2-.5.1-1.4-.7-2.3-.7-4 1-4.3 6-5 7.8-2.2 1.4 1.7 1.9 5.3 2.1 7.8 0 1.2-2-.3-3.2 0-1.1.4-1.4 1.7-1.5 2.9-.2 3.2-.6 8.3-.7 12zm-69.6 46.6c1-9.6-.3-26.5-.4-32.1-.4-13.3-2.6-39-3.6-43.2-1.2-8.1 3.3.9 2.7-3.8-1.5-8-6-13.6-11.2-21-1.7-2.3-1.6-2.8-4.3.6-2.8 6.6-.3 11.1.4 16.2 3.8 16.7 6 32 7 47.2a381.2 381.2 0 0 1 .4 47.5c2.9.2 7.5-4.6 9-11.4z"/>
                                              <path fill="#fff" d="M544.5 209.2c-6.7-11.1-16.7-23.2-19.4-27.7a639.2 639.2 0 0 0-28.2-36.7c-8.3-8.7 3.8-1.4-1.6-8.1-4.6-5-6-6.6-9.8-9.6-2-1.3-3.2-3.7-3.8.4-.3 3.6-.5 7.8-.3 10.9 0 1.7 1.8 4.8 3.3 6.7 20 24.7 42 50 59.7 81.7 2.5-1.4 1.7-15.6 0-17.6z"/>
                                              <path fill="#165d31" d="M242.8 188.6c-.5.9-1.6 2-1.2 3 .8 1 1.4 1.3 2.6 1.4 1 0 2.6.2 2.9-.4a3.2 3.2 0 0 0 .5-3.2c-1-2.8-4.2-1.8-4.8-.8z"/>
                                              <path fill="#fff" d="M467.2 351.3c8.9.3 14.7.4 22.6 1.3l9.2-1c10.3-1 10.8 14.7 10.8 14.7-.1 9.2-3.7 9.6-8.2 10.6-2.6.4-4-1.5-5.3-3.5-1.7.7-4 .8-6.9.4-3.7-.2-7.4-.2-11-.5-4-.3-6.1.5-10 .1-.9 1.3-2 3-4.3 2.5-2-.2-4.4-5.9-3.7-10.1 1.4-3.1 1-2.1.9-3.5-36.4-.9-73-2.5-108.7-2-28 0-55.5 1.2-83 2.4-14.7-.2-26-2.6-33.7-14 .7 0 37.5 2.2 48.2 1.5 20-.3 38.1-1.9 58.4-2.5 40 .7 79.5.7 119.5 3.5-3.8-2.6-4-8.8 2-10.3.4-.3.7 3 1.6 3 4.6-.3 2.6 6 1.6 7.4zM306.8 131c-6 17.3 3.4 36.2 10 34.4 4.8 2 7.8-7.1 9.8-17 1.3-2.8 2.3-3.1 3-1.7-.2 13.2 1 16.1 4.4 20.1a11 11 0 0 0 14.3.3l5.9-6c1.3-1.3 3-1.4 4.9-.2 1.8 1.7 1.5 4.5 5.4 6.5 3.2 1.3 10.2.3 11.8-2.5 2.1-3.7 2.7-5 3.7-6.4 1.5-2 4.1-1.2 4.1-.5-.2 1.1-1.7 2.3-.7 4.3 1.8 1.4 2.3.5 3.4.2 3.8-1.8 6.7-10.2 6.7-10.2.1-3-1.6-2.8-2.7-2.2l-3 2.1c-2 .3-5.6 1.5-7.4-1.3-1.8-3.3-1.9-8-3.3-11.4 0-.2-2.4-5.3-.1-5.6 1.1.2 3.6.8 4-1.2 1.2-2-2.6-7.7-5.2-10.6-2.2-2.4-5.4-2.7-8.4-.2-2 2-1.8 4-2.2 6.1a9.6 9.6 0 0 0 2 8.4c2.1 4.1 6 9.4 4.7 17 0 0-2.3 3.5-6.2 3-1.6-.4-4.2-1-5.6-11.4-1-7.9.2-18.9-3.1-24-1.2-3.2-2-6.2-5-.8-.8 2-4.2 5.2-1.8 11.8a35 35 0 0 1 2 18.3c-1.4 2.1-1.7 2.9-3.6 5-2.5 2.7-5.3 2-7.4 1-2-1.3-3.6-2-4.5-6.3.2-6.8.5-17.9-.7-20.3-1.8-3.6-4.8-2.3-6.1-1.2a46.3 46.3 0 0 0-11.2 22.9c-1.7 5.5-3.5 4-4.8 1.7-3.1-3-3.3-25.9-7.1-22.1z"/>
                                              <path fill="#fff" d="M325 168.7c2.8-2 1.5-3.3 5.6.8a69.8 69.8 0 0 1 9 30.3c-.3 2.5 1.5 4 2.3 3.5.4-5.8 14.7-14 27.7-15.2 2-.4 1-4.2 1.3-6.2-.8-7.2 4-13.8 10.9-14.3 9.2 1.4 12.3 6.3 12.5 13.8-1 14.5-16.1 17-24.6 18-1.3.6-1.8 1.2 0 1.9l35.5.1 1.8 1c.2 1-.5.2-2 2.5s-3.4 7.7-3.5 11.2a173 173 0 0 1-32.6 6.2c-3.8 2-5.7 4.6-5 7.5 1.3 3.3 9.9 6.5 9.9 6.7 1.6 1 3.5 3.4-.5 8.2-17.3-.7-30.7-8.1-35.3-18.5-1.4-1-3 0-3.9 1.4a54.7 54.7 0 0 1-24.9 20.7c-6.9 1.7-13.9-1-17.2-5.5-2.2-2.6-2.1-5.4-3-6-3.7 1.6-35.6 15.2-31.5 8.9 7.7-8.4 21.2-14.5 33-22.7 1-2.7 2.5-12 7.2-15 .2 0-.8 5.4-.7 7.7 0 1.9-.1 2.6.3 2.1.8-.5 15.2-11.8 16.3-15.3 1.4-2 .4-7 .4-7.2-2.6-7-6.4-7.5-7.8-11-1.3-4.6-.7-9.8 1.9-11.3 2.3-2.1 5-1.9 7.6.4 3 2.6 5.5 7.7 6.3 11.5-.5 1.5-3.8-1-5-.2 2 2 3 4.5 3.7 7.5 2 8 1.3 11-.5 16.2-6.4 13.4-14.6 17.5-21.8 22.4-.2.1-.3 3.5 2.4 5.3 1 1 4.7 1.4 9 0a52.8 52.8 0 0 0 21.7-22.6c1.3-7.2-.5-14.8-2.4-21.4a252.7 252.7 0 0 1-6-16c-.2-4 .1-5.4 2-7.4zm-92.8-37.4c4 1.9 11.7 1 11.4-5.5l-.2-3.1c-.8-2-3.1-1.5-3.6.6-.2.6.3 1.7-.3 2-.4.3-1.7.1-1.6-1.7 0-.6-.4-1.2-.7-1.6-.3-.1-.4-.2-.9-.2-.6 0-.5.2-.9.7l-.3 1.5c0 .7-.3.9-.8 1-.5 0-.4 0-.8-.2-.3-.3-.6-.4-.6-.9l-.2-1.6a2 2 0 0 0-1-.6c-2.3 0-2.4 2.6-2.3 3.6-.2.1-.3 4.7 2.8 6z"/>
                                              <path fill="#fff" d="M351.8 181.9c4 2 13.8.8 11.4-5.5l-.2-3c-.8-2-3-1.5-3.6.5-.1.6.3 1.7-.3 2-.3.4-1.6.2-1.6-1.6 0-.6-.4-1.2-.7-1.6-.2-.2-.4-.2-.9-.2s-.5.1-.8.6l-.3 1.5c-.1.7-.4 1-.8 1-.6 0-.4 0-.9-.2-.2-.3-.6-.4-.6-.9s0-1.3-.2-1.6c-.2-.3-.6-.4-1-.5-2.2 0-2.4 2.5-2.3 3.5-.1.2-.2 4.7 2.8 6zm69.8-21c4 2 11.7 1.1 11.4-5.4l-.2-3.1c-.8-2-3.1-1.5-3.6.5-.2.7.3 1.7-.3 2-.4.4-1.7.2-1.6-1.6 0-.6-.5-1.2-.7-1.6-.3-.1-.4-.2-1-.2-.5 0-.5.2-.8.7l-.3 1.5c0 .6-.3.9-.8 1-.5 0-.4 0-.8-.3-.3-.2-.6-.4-.6-.8 0-.5-.1-1.3-.3-1.7-.2-.3-.5-.4-1-.5-2.2 0-2.3 2.6-2.2 3.5-.2.2-.3 4.8 2.8 6zm36 52.7c-7 8-3.9 21.2-2.3 24 2.4 4.8 4.2 7.8 8.8 10.1 4.2 3 7.4 1.1 9.2-1 4.2-4.3 4.2-15.4 6.2-17.6 1.4-4 4.8-3.3 6.5-1.5a16 16 0 0 0 6 5.1c3.9 3.4 8.5 4 13.1 1 3.1-1.8 5.2-4.1 7-8.6 2-5.5 1-30.7.5-45.6-.1-1.2-4-20.6-4-20.8 0-.2-.6-9.9-1-12.2 0-.9-.3-1.2.7-1 1 .8 1.2.9 1.8 1.2 1 .2 2-1.6 1.4-3.3l-9.8-18c-.7-.7-1.7-1.5-3 .3a7 7 0 0 0-2.4 5.3c.3 4.3 1 8.6 1.3 12.9l4 21.8c1.2 15.6 1.5 28.3 2.7 44-.2 6.5-2.2 12.3-4.2 13 0 0-2.9 1.8-4.8 0-1.5-.7-7.2-9.6-7.2-9.6-3-2.7-4.8-2-7 0-5.6 5.5-8.2 15.9-12.1 23-1 1.6-3.9 3-7-.1-8-11-3.3-26.4-4.3-22.4zm-34.2-90.9c3.7 1.5 6.2 9 5.4 12.6-.7 4.4-2.7 9.3-4 8.6-1.6-.5 1-4.4-.5-8.5-.8-2.6-5.8-7.5-5.3-8.9-1-3 2.2-4.3 4.4-3.8z"/>
                                              <path fill="#fff" d="M469.5 218c.7-9-.6-14.4-.8-19.6-.2-5.2-6-45-7-49-1.5-7.5 5.5-1 4.7-5.4-2.4-5.5-8.3-13.5-10.2-18.2-1.1-2-.7-3.9-3.2-.6a41 41 0 0 0-2.2 18.6c6 31.3 12.1 57.3 11.1 87.1 2.9 0 6.2-6.5 7.6-13zm62.4-82.7c3.4 1.7 5.3 11 5 13.6-.7 4.9-2.5 10-3.8 9.4-1.3-.6.3-7.2-.4-9.2-.7-2.9-5.2-8.1-4.8-9.7-.9-3.2 2-4.6 4-4zm-247.7 65.8c3.2 1.3 5 8 4.7 10-.6 3.6-2.3 7.4-3.5 7-1.3-.5.2-5.3-.4-6.8-.3-3.7-4.7-5.6-4.6-7.1-.8-3 1.9-3.5 3.8-3z"/>
                                              <path fill="#165d31" d="M361.3 211.4c4 .2 6.1 3.5 2.3 4.8-3.8 1.3-7.5 2.3-7.5 7.8 1.4 7.7-2 5-4 4-2.3-1.7-8.9-5.7-9.8-14.5-.1-2 1.5-3.8 4.1-3.8 4 1 9.8 1.2 14.8 1.7z"/>
                                              <path fill="#fff" d="M199 120.5c4.7 1.4 5 8.3 4.6 10.4-.6 3.7-2.3 7.6-3.5 7.1-1.3-.4 0-5.4-.6-7-.7-2.2-4.7-6.2-4.2-7.4-1-2.4 1.8-3.5 3.7-3zm92.9 32.6c-3.6 2-5 7.8-2.8 11.2 2.1 3 5.4 1.9 5.9 1.9 3.5.4 5.6-6.7 5.6-6.7s.1-2-4 1.8c-1.8.3-2-.3-2.5-1.3a8.7 8.7 0 0 1 .6-5.6c.6-1.7-.8-2.5-2.8-1.3zm27-35.3c-1.7 1.3-5.4 5-5.5 9.3 0 2.4-.5 2.4 1 4 1.2 1.6 2.4 1.5 4.7.3a5 5 0 0 0 2.2-3.3c.6-2.8-2.9 1.3-3.3-1.8-.8-2.8 1.4-4 3.5-6.8 0-1.9 0-3.2-2.5-1.7zm21.9 4a56.9 56.9 0 0 0-1.6 10.7c-.6 2.7 2.8 3.8 4.4.3 2.3-6.3 2.3-9 2.5-11.7-.7-4-3.5-4-5.3.6zm137.5 69.9c.4-.5 19.4-14 19.4-14 1.9-.6 1.5 7 .6 7a75.3 75.3 0 0 1-20 13.9c-1 .6-1.9-5.2 0-7zm17.2-.1c3.3 1.6 4.7 11.4 4.3 14 .1 5.2-3.2 9.3-4.5 8.6-1.4-.6.1-6.4-.5-8.4-.7-2.9-3.6-8.3-3.1-9.8-1-3.3 1.8-5 3.8-4.4zm-112.4 42c1.3-2 5.3-4.7 5.4-4.7 1.9-1 3.7.7 3.6.6.3 1.9-1.2 3.6-.7 6.1.4 1 .7 2.1 2.6 1.7 3-2.3 5.8-2.5 8.8-2.7 2.3.2 2.3 4 .9 4.1-5.6 1.2-8 2.7-12 4.2-1.9 1.1-3.5-.3-3.5-.4s-1-1.1-.3-3.6c.1-2-.7-3-2.3-2.8-1.3.6-2.4 1-3-.4-.3-1-.3-1.5.5-2.1zm132.3 5.2c.8 1 1.4 2 0 3.7l-3.6 3c-.7 1.2-1 2.8.9 3.3 3.5 1 11.7-4.3 11.7-4.4 1.3-1 .9-2.9.7-2.9-.7-.9-2.5-.4-3.6-.5-.6 0-2.4-.3-1.6-1.9.8-1 1-1.6 1.5-2.9.6-1.2.1-2-1.9-2.7-2-.3-2.8-.1-5 0-1.3.3-1.7.8-2 2.3.2 2.2 1.5 2.1 3 3z"/>
                                              <path fill="#165d31" d="M383.8 183.8c-.5 1-2.3.9-4 0s-2.5-2.5-2-3.4 2.3-.9 4 0 2.5 2.5 2 3.4zM297.5 132c-1 .3-2.3-.6-2.9-2s-.3-2.5.7-2.8 2.3.7 2.9 2 .3 2.6-.7 2.8zm170.7 231.3c9 .4 17.6.1 26.6.6 1.7 1.3.5 4.8-.6 4.5l-7.6-.2c0-2.9-7.5-2.4-7.2.1-4 .5-7.6-.1-11.6-.3-1.2-1.5-1-4.1.4-4.7z"/>
                                            </g>
                                          </svg>
                                        العربية
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="mx-4 mb-8 mt-4 h-px border-0 bg-indigo-300 dark:bg-gray-700">

            <ul class="space-y-2 pb-20 text-indigo-50 dark:text-indigo-200">

                <li class="py-2">
                    <a href="{{ route('about') }}" class="group cursor-pointer rounded-lg p-3 transition duration-75 hover:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>

                        <span class="ml-1">À Propos</span>
                    </a>
                </li>

                <li class="py-2">
                    <span class="group cursor-pointer rounded-lg p-3 transition duration-75 hover:text-indigo-500" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                        </svg>

                        <span class="mx-1">CV</span>
                        <svg class="inline-block h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m1 1 4 4 4-4" />
                        </svg>
                    </span>

                    <ul id="dropdown-example" class="hidden space-y-2 pt-2">
                        <li>
                            <a href="{{ route('studies') }}" class="group ml-12 flex w-full cursor-pointer rounded-lg py-3 transition duration-75 hover:text-indigo-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-1 inline-block h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                </svg>Études</a>
                        </li>
                        <li>
                            <a href="{{ route('experiences') }}" class="group ml-12 flex w-full cursor-pointer rounded-lg py-3 transition duration-75 hover:text-indigo-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-1 inline-block h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                </svg>

                                Éxpériences</a>
                        </li>
                        <li>
                            <a href="{{ route('skills') }}" class="group ml-12 flex w-full cursor-pointer rounded-lg pt-3 transition duration-75 hover:text-indigo-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-1 inline-block h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                </svg>
                                Compétences</a>
                        </li>

                    </ul>
                </li>

                <li class="py-2">
                    <a href="{{ route('services') }}" class="group cursor-pointer rounded-lg p-3 transition duration-75 hover:text-indigo-500">
                        <svg class="inline-block h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="M4.5 19A3.5 3.5 0 0 1 1 15.5V2a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v13.5A3.5 3.5 0 0 1 4.5 19Zm0 0H18a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-4.938a1 1 0 0 0-.697.283l-4.238 4.124a1.046 1.046 0 0 0-.164.208C6.986 18.228 6.184 18.705 4.5 19Zm0-4h.01m8.925-12.293 3.536 3.536a1 1 0 0 1 0 1.414L8 16.627v-9.9l4.02-4.02a1 1 0 0 1 1.415 0Z" />
                        </svg>
                        <span class="ml-1">Services</span>
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{ route('prices') }}" class="group cursor-pointer rounded-lg p-3 transition duration-75 hover:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>

                        <span class="ml-1">Tarifs</span>
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{ route('portfolio') }}" class="group cursor-pointer rounded-lg p-3 transition duration-75 hover:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                        </svg>

                        <span class="ml-1">Portfolio</span>
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{ route('contact') }}" class="group cursor-pointer rounded-lg p-3 transition duration-75 hover:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>

                        <span class="ml-1">Contact</span>
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{ route('estimate') }}" class="group cursor-pointer rounded-lg p-3 transition duration-75 hover:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                        </svg>

                        <span class="ml-1">Devis</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="absolute bottom-0 left-0 z-20 w-full justify-center bg-indigo-950 p-4 dark:bg-gray-800">

            <a href="{{ route('login') }}" class="mb-4 flex justify-center">
                <button type="button" class="mb-2 mr-2 rounded-lg border border-indigo-100 px-5 py-2.5 text-center text-sm font-medium text-indigo-100 hover:bg-indigo-100 hover:text-indigo-900 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:border-indigo-200 dark:text-indigo-200 dark:hover:text-white dark:focus:ring-indigo-800"><svg class="mr-1 inline-block h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                    </svg>Espace client</button>
            </a>

            <p class="text-center text-xs text-gray-100">© 2023 Yassine.L All Rights Reserved.</p>
        </div>

    </aside>
    <!-- Navigation end -->

    <div class="hidden lg:block">
        <!-- Show tooltip on left -->
        <a href="{{ route('estimate') }}" data-tooltip-target="tooltip-left" data-tooltip-placement="left" type="button" class="fixed right-0 top-1/2  mb-2 md:mb-0 text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg rounded-r-none text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Devis</a>
        <div id="tooltip-left" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Réaliser un devis gratuit
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>


</div>
