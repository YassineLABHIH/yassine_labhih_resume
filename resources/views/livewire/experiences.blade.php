<div>
     <!-- Experiences section start -->
     <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-16 lg:px-6">
         <div class="mb-8 max-w-screen-md lg:mb-16">
             <h1 class="col-span-2 mb-8 text-5xl font-extrabold text-gray-900 dark:text-white">Mon
                 Éxperience
             </h1>
             <h2 class="font-light text-gray-500 dark:text-gray-400 sm:text-xl">Voici des exemples des postes
                 importants que j'ai pu occuper dans ma vie professionnelle. Certes les études m'ont formé et
                 l'expérience m'a forgée.</h2>
         </div>

         <div class="mx-auto grid max-w-screen-xl grid-cols-1 gap-4 px-4 md:grid-cols-2 lg:grid-cols-3 lg:px-6">

             <div class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow-lg hover:bg-indigo-100 hover:ring-1 hover:ring-indigo-200 dark:border-gray-700 dark:bg-gray-800">
                 <a href="https://app123.fr/" target="blank">

                     <img class="h-20 w-20" src="{{ asset('assets/img/experiences/app123.svg') }}" alt="">
                 </a>
                 <h3 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                     Directeur
                     D'agence Web</h3>
                 <h4 class="mb-4 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">App123</span> - 2020 à Aujourd'hui </h4>

                 <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Création de site internet,
                     Création
                     d'application mobile @if ($experience_card1 == 'hidden')...@endif <span class=" @if ($experience_card1 == 'hidden') hidden @endif ">Référencement web SEO, Publicité sur les réseaux sociaux, Publicité via Google Ads, Publicité Youtube, Conception de spots publicitaires, Marketing papier (Flyer, carte de visite...).</span></p>

                 @if ($experience_card1 == 'hidden')
                 <button wire:click="$set('experience_card1', 'show')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire plus

                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                     </svg>
                 </button>
                 @endif

                 @if ($experience_card1 == 'show')
                 <button wire:click="$set('experience_card1', 'hidden')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire moins
                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                     </svg>
                 </button>
                 @endif

             </div>

             <div class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow-lg hover:bg-indigo-100 hover:ring-1 hover:ring-indigo-200 dark:border-gray-700 dark:bg-gray-800">
                 <a href="https://untravailadomicile.com/" target="blank">

                     <img class="h-20 w-20" src="{{ asset('assets/img/experiences/untravailadomicile.svg') }}" alt="">
                 </a>
                 <h3 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                     Développeur
                     Php
                 </h3>
                 <h4 class="mb-4 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">untravailadomicile.com</span> - 2020 à 2023</h4>

                 <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Développement de CRM,
                     Développement
                     de
                     solutions de recrutement en ligne @if ($experience_card2 == 'hidden')...@endif <span class=" @if ($experience_card2 == 'hidden') hidden @endif ">Campagne publicitaire vidéo, Management d'équipe, Formations en visioconférence.</span></p>
                 @if ($experience_card2 == 'hidden')
                 <button wire:click="$set('experience_card2', 'show')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire plus

                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                     </svg>
                 </button>
                 @endif

                 @if ($experience_card2 == 'show')
                 <button wire:click="$set('experience_card2', 'hidden')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire moins
                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                     </svg>
                 </button>
                 @endif

             </div>
             <div class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow-lg hover:bg-indigo-100 hover:ring-1 hover:ring-indigo-200 dark:border-gray-700 dark:bg-gray-800">
                 <a href="https://alloservicepro.com/" target="blank">
                     <img class="h-20 w-20" src="{{ asset('assets/img/experiences/alloservicepro.svg') }}" alt="">
                 </a>

                 <h3 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                     Directeur De
                     Centre d'Appel
                 </h3>
                 <h4 class="mb-4 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">AlloServiePro</span> - 2018 à 2020</h4>

                 <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Mise en place de
                     stratégies
                     commerciales, Management d'équipe @if ($experience_card3 == 'hidden')...@endif <span class=" @if ($experience_card3 == 'hidden') hidden @endif ">Démarchage client

                         Recrutement, Formation.</span></p>
                 @if ($experience_card3 == 'hidden')
                 <button wire:click="$set('experience_card3', 'show')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire plus

                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                     </svg>
                 </button>
                 @endif

                 @if ($experience_card3 == 'show')
                 <button wire:click="$set('experience_card3', 'hidden')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire moins
                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                     </svg>
                 </button>
                 @endif

             </div>
             <div class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow-lg hover:bg-indigo-100 hover:ring-1 hover:ring-indigo-200 dark:border-gray-700 dark:bg-gray-800">
                 <a href="https://www.proxydomi.com/" target="blank">

                     <img class="h-20 w-20" src="{{ asset('assets/img/experiences/proxydomi.svg') }}" alt="">
                 </a>
                 <h3 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                     Responsable
                     Des
                     Ventes</h3>
                 <h4 class="mb-4 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Proxydomi</span> - 2020 à 2021</h4>

                 <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Etudes produits,
                     Elaboration de
                     stratégies commerciales, Formation, Vente, SAV @if ($experience_card4 == 'hidden')...@endif <span class=" @if ($experience_card4 == 'hidden') hidden @endif ">Recrutement.</span></p>
                 @if ($experience_card4 == 'hidden')
                 <button wire:click="$set('experience_card4', 'show')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire plus

                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                     </svg>
                 </button>
                 @endif

                 @if ($experience_card4 == 'show')
                 <button wire:click="$set('experience_card4', 'hidden')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire moins
                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                     </svg>
                 </button>
                 @endif

             </div>
             <div class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow-lg hover:bg-indigo-100 hover:ring-1 hover:ring-indigo-200 dark:border-gray-700 dark:bg-gray-800">
                 <a>

                     <img class="h-20 w-20" src="{{ asset('assets/img/experiences/qcf.svg') }}" alt="">
                 </a>
                 <h3 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                     Téléconseiller
                 </h3>
                 <h4 class="mb-4 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Quality
                         Call French</span> - 2017 à 2018</h4>

                 <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Vente de divers produits
                     par
                     téléphone, Stratégies commerciales @if ($experience_card5 == 'hidden')...@endif <span class=" @if ($experience_card5 == 'hidden') hidden @endif ">, Formation autonome.</span></p>
                 @if ($experience_card5 == 'hidden')
                 <button wire:click="$set('experience_card5', 'show')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire plus

                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                     </svg>
                 </button>
                 @endif

                 @if ($experience_card5 == 'show')
                 <button wire:click="$set('experience_card5', 'hidden')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire moins
                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                     </svg>
                 </button>
                 @endif

             </div>
             <div class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow-lg hover:bg-indigo-100 hover:ring-1 hover:ring-indigo-200 dark:border-gray-700 dark:bg-gray-800">
                 <a href="https://www.google.com/search?q=labelec76&rlz=1C1SQJL_frMA1023MA1023&oq=labele&gs_lcrp=EgZjaHJvbWUqBggCECMYJzIGCAAQRRg5MgYIARBFGEAyBggCECMYJzIHCAMQABiABDIHCAQQABiABDIHCAUQABiABDIHCAYQABiABDIJCAcQABgKGIAE0gEJMzQyN2owajE1qAIAsAIA&sourceid=chrome&ie=UTF-8" target="blank">

                     <img class="h-20 w-20" src="{{ asset('assets/img/experiences/labelec.svg') }}" alt="">
                 </a>
                 <h3 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Gérant
                     De Société</h3>
                 <h4 class="mb-4 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Labelec</span> - 2011 à 2023</h4>

                 <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Installation électrique,
                     Installation
                     domotique, Gestion de chantier @if ($experience_card6 == 'hidden')...@endif <span class=" @if ($experience_card6 == 'hidden') hidden @endif ">Gestion du personnel, Gestion budgétaire, Recrutement.</span></p>
                 @if ($experience_card6 == 'hidden')
                 <button wire:click="$set('experience_card6', 'show')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire plus

                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                     </svg>
                 </button>
                 @endif

                 @if ($experience_card6 == 'show')
                 <button wire:click="$set('experience_card6', 'hidden')" class="inline-flex items-center text-indigo-600 hover:underline">
                     Lire moins
                     <svg class="ml-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                     </svg>
                 </button>
                 @endif

             </div>

         </div>
     </div>
     <!-- Experiences section end -->
</div>
