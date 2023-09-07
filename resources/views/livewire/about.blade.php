<div>
    <!-- About section start -->

    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-16 lg:px-6">
        <div class="mb-8 max-w-screen-md lg:mb-16">
            <h1 class="col-span-2 mb-8 text-5xl font-extrabold text-gray-900 dark:text-white">Á Propos</h1>
        </div>

        <div class="mx-auto max-w-screen-xl items-center gap-16 px-4 lg:grid lg:grid-cols-2">

            <div class="font-light text-gray-500 dark:text-gray-400 sm:text-lg">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                    Commençons
                    par
                    les présentations !
                </h2>
                <p class="mb-4">Je suis un développeur web passionné de 31 ans avec une forte autonomie
                    et une
                    vaste
                    expérience en marketing. Cela me permet de comprendre les besoins des clients et de
                    créer
                    des
                    sites et des applications qui répondent à leurs attentes, tout en optimisant leur
                    visibilité
                    et
                    leur attractivité sur le marché.

                </p>
                <p class="mb-10">Je suis constamment à la recherche de nouveaux défis et de projets
                    innovants
                    qui me
                    permettent de
                    mettre en pratique mes compétences techniques et ma créativité. J'aime travailler des
                    heures
                    pour atteindre les objectifs fixés et obtenir les meilleurs résultats possibles. Si vous
                    cherchez un professionnel compétent, passionné et dévoué, je suis la personne qu'il vous
                    faut.
                </p>

                <p class="font-semibold text-indigo-500">Yassine Labhih</p>
                <p>Développeur full-stack</p>
                <p class="my-6 font-['Herr_Von_Muellerhoff'] text-6xl text-black dark:text-white">Yassine
                    Labhih
                </p>

                <div class="my-6 space-y-3">
                    <a href="{{ asset('assets/docs/resume_french.pdf') }}" download target="blank" class="mr-3 inline-flex items-center justify-center rounded-lg bg-indigo-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 dark:focus:ring-indigo-900">
                        Télécharger mon CV

                        <svg class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3" />
                        </svg>

                    </a>
                    <button type="button" wire:click="$set('content', 'contact')" class="inline-flex items-center justify-center rounded-lg border border-gray-300 px-5 py-3 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Contactez moi
                    </button>
                </div>
            </div>

            <div class="relative">

                <img class="shadow-b h-[500px] w-[500px] rounded-lg bg-indigo-200 shadow-lg dark:bg-gray-700 md:h-[700px] md:w-[600px]" src="{{ asset('assets/img/about_img.svg') }}" alt="Avatar de Yassine Labhih">

                <div class="@if ($about_description == 'hidden') hidden @endif absolute bottom-0 left-0 text-sm transition">
                    <div class="h-[500px] w-full rounded-lg bg-black p-6 text-white opacity-80 md:h-[700px]">
                        <p class="text-lg font-bold text-indigo-500">Yassine Labhih</p>

                        <p>Développeur full-stack</p>

                        <hr class="mb-8 mt-4 h-px w-60 border-0 bg-indigo-300 dark:bg-gray-700">

                        <div class="mt-6 grid grid-cols-2 gap-4">
                            <div class="font-semibold text-indigo-300">Âge :</div>

                            <div>{{ $age }} ans</div>

                            <div class="font-semibold text-indigo-300">Adresse :</div>

                            <div>Saint-Etienne-du-Rouvray (France)</div>

                            <div class="font-semibold text-indigo-300">Mail :</div>

                            <div>contact@yassinelabhih.com</div>

                            <div class="font-semibold text-indigo-300">Téléphone :</div>

                            <div>+33 7 49 91 12 11</div>

                            <div class="font-semibold text-indigo-300">Disponiblité :</div>

                            <div>Disponible</div>
                        </div>

                        <div class="mt-6">
                            <a href="https://www.linkedin.com/in/yassine-labhih-841a571b4/" target="blank" class="mr-2 inline-flex items-center rounded-full bg-indigo-700 p-2.5 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
                                    <path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd" />
                                    <path d="M3 5.012H0V15h3V5.012Z" />
                                </svg>

                                <span class="sr-only">Icone Linkedin</span>
                            </a>
                            <a href="https://wa.me/+33749911211" target="blank" class="mr-2 inline-flex items-center rounded-full bg-indigo-700 p-2.5 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                                <svg class="h-4 w-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 308 308" xml:space="preserve">
                                    <g id="XMLID_468_">
                                        <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
C233.168,179.508,230.845,178.393,227.904,176.981z" />
                                        <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
 M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
C276.546,215.678,222.799,268.994,156.734,268.994z" />
                                    </g>
                                </svg>
                                <span class="sr-only">Icone Whatsapp</span>
                            </a>
                            <a href="https://github.com/YassineLABHIH" target="blank" class="mr-2 inline-flex items-center rounded-full bg-indigo-700 p-2.5 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                                    <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Icone Github</span>
                            </a>
                        </div>

                    </div>

                </div>

                <div class="absolute bottom-0 left-0">
                    @if ($about_description == 'hidden')
                    <button wire:click="$set('about_description', 'show')" type="button" class="mr-2 inline-flex items-center rounded-lg bg-indigo-700 p-2.5 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 1v16M1 9h16" />
                        </svg>
                        <span class="sr-only">Icon description</span>
                    </button>
                    @endif

                    @if ($about_description == 'show')
                    <button wire:click="$set('about_description', 'hidden')" type="button" class="mr-2 inline-flex items-center rounded-lg bg-indigo-700 p-2.5 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Icon description</span>
                    </button>
                    @endif
                </div>
            </div>

            <!-- About section end -->
</div>
