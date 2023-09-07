<div>
     <!-- Promo banner start -->
    <div id="sticky-banner" tabindex="-1" class="fixed top-0 left-0 z-50 flex justify-between w-full p-4 border-b border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <div class="flex items-center mx-auto">
            <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
                <span class="inline-flex p-1 mr-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center">
                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                        <path d="M15 1.943v12.114a1 1 0 0 1-1.581.814L8 11V5l5.419-3.871A1 1 0 0 1 15 1.943ZM7 4H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2v5a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V4ZM4 17v-5h1v5H4ZM16 5.183v5.634a2.984 2.984 0 0 0 0-5.634Z" />
                    </svg>
                    <span class="sr-only">Light bulb</span>
                </span>
                <span>30% de réduction sur toutes mes prestations jusqu'au 31 Septembre 2023 avec le code <span class="font-medium border-2 rounded-md lg:p-1">SUMMER2023</span></span>
            </p>
            <a href="{{ route('estimate') }}" class="ml-2 px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                Commander
            </a>
        </div>
        <div class="flex items-center">
            <button data-dismiss-target="#sticky-banner" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close banner</span>
            </button>
        </div>
    </div>
    <!-- Promo banner end -->

         <!-- Hero section start -->
         <div class="mx-auto grid min-h-screen max-w-screen-xl px-4 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-0">
             <div class="mr-auto place-self-center lg:col-span-7">
                 <h1 class="mb-4 max-w-2xl text-4xl font-bold tracking-tight dark:text-white md:text-5xl xl:text-6xl">
                     <p class="inline-flex leading-[50px] sm:leading-[70px]"> <span class="bg-gradient-to-r from-indigo-950 to-indigo-600 bg-clip-text text-transparent">Je
                             suis</span>
                         <div class="ml-1 inline-block" id="typed-strings">
                             <p class="hidden">Développeur</p>
                             <p class="hidden">Designer</p>
                             <p class="hidden">Freelance</p>
                             <p class="hidden">Yassine Labhih</p>
                         </div>
                         <span id="typed"></span>
                     </p>
                 </h1>
                 <h2 class="mb-6 max-w-2xl font-light text-gray-500 dark:text-gray-400 md:text-lg lg:mb-8 lg:text-xl">
                     Je suis développeur web full-stack passionné, autonome et trés à cheval sur les moindre
                     détails
                     ! <span class="font-semibold"> I work with <svg class="inline-block h-5 w-5 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                             <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                         </svg></span>.</h2>

                 <button wire:click="$set('content', 'about')" class="mr-3 inline-flex items-center justify-center rounded-lg bg-indigo-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 dark:focus:ring-indigo-900">
                     En savoir plus
                     <svg class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                 </button>
                 <button wire:click="$set('content', 'contact')" class="inline-flex items-center justify-center rounded-lg border border-gray-300 px-5 py-3 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                     Contactez moi
                 </button>

                 <div class="mt-10 border-l-2 border-indigo-900 sm:flex sm:items-center sm:justify-between">

                     <div class="ml-4 mr-12 mt-4 flex space-x-6 sm:mt-0 sm:justify-center">
                         <a href="https://www.linkedin.com/in/yassine-labhih-841a571b4/" target="blank" class="rounded-lg border border-indigo-800 p-2 text-center text-sm font-medium text-indigo-900 hover:bg-indigo-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:border-indigo-600 dark:text-indigo-600 dark:hover:bg-indigo-600 dark:hover:text-white dark:focus:ring-indigo-800">
                             <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
                                 <path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd" />
                                 <path d="M3 5.012H0V15h3V5.012Z" />
                             </svg>
                         </a>

                         <a href="https://github.com/YassineLABHIH" target="blank" class="rounded-lg border border-indigo-800 p-2 text-center text-sm font-medium text-indigo-900 hover:bg-indigo-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:border-indigo-600 dark:text-indigo-600 dark:hover:bg-indigo-600 dark:hover:text-white dark:focus:ring-indigo-800">
                             <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                 <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd" />
                             </svg>
                         </a>

                         <a href="https://www.google.com/search?q=yassine+labhih&rlz=1C1SQJL_frMA1023MA1023&oq=&gs_lcrp=EgZjaHJvbWUqBggBEEUYOzIGCAAQRRg5MgYIARBFGDsyBggCECMYJzIHCAMQABiABDIPCAQQABgKGIMBGLEDGIAEMgcIBRAuGIAEMgcIBhAAGIAEMg0IBxAuGMcBGNEDGIAEMgcICBAAGIAEMgcICRAAGIAE0gEJMzc1MWowajE1qAIAsAIA&sourceid=chrome&ie=UTF-8" target="blank" class="rounded-lg border border-indigo-800 p-2 text-center text-sm font-medium text-indigo-900 hover:bg-indigo-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:border-indigo-600 dark:text-indigo-600 dark:hover:bg-indigo-600 dark:hover:text-white dark:focus:ring-indigo-800">
                             <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                                 <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd" />
                             </svg> </a>

                     </div>
                 </div>

             </div>
             <div class="inline-flex justify-center lg:col-span-5 lg:mt-0 lg:flex">
                 <img src="{{ asset('assets/img/avatar_yassine_labhih.svg') }}" alt="Avatar de Yassine Labhih">
             </div>

         </div>

         <!-- Hero section end -->
</div>
