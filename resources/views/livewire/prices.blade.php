<div>
<!-- Prices section start -->
<div class="mx-auto max-w-screen-xl px-4 py-8 lg:py-16">

    <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
        <h1 class="col-span-2 mb-8 text-5xl font-extrabold text-gray-900 dark:text-white">Mes Tarifs</h1>
        <h2 class="mb-5 font-light text-gray-500 dark:text-gray-400 sm:text-xl">Je propose à mes clients de
            choisir entre l'achat et un abonnement sans engagement avec support et hébergement inclus.</h2>

        <div class="mt-6 inline-flex">
            <p class="@if ($subscription_prices == true) text-gray-500 dark:text-gray-400 @else text-indigo-500 font-medium @endif mr-3 sm:text-xl">
                Achat</p>
            <label class="relative inline-flex cursor-pointer items-center">
                <input wire:model.live="subscription_prices" type="checkbox" class="peer sr-only">
                <div class="peer h-7 w-14 rounded-full bg-gray-200 after:absolute after:left-[4px] after:top-0.5 after:h-6 after:w-6 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-indigo-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-indigo-800">
                </div>
            </label>
            <p class="@if ($subscription_prices == false) text-gray-500 dark:text-gray-400 @else text-indigo-500 font-medium @endif ml-3 sm:text-xl">Abonnement</p>
        </div>
    </div>

    <div class="space-y-8 sm:gap-6 lg:grid lg:grid-cols-3 lg:space-y-0 xl:gap-10">
        <!-- Pricing Card -->
        <div class="mx-auto flex max-w-lg flex-col rounded-lg border border-gray-100 bg-white p-6 text-center text-gray-900 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white xl:p-8">
            <h3 class="mb-4 text-2xl font-semibold">Site Vitrine</h3>
            <p class="font-light text-gray-500 dark:text-gray-400 sm:text-lg">Incontournable : c'est "La
                vitrine
                en ligne de votre succès".</p>
            <div class="my-8 flex items-baseline justify-center">

                @if ($subscription_prices == true)
                <span class="mr-2 text-5xl font-extrabold">19€</span>
                <span class="text-gray-500 dark:text-gray-400">/mois</span>
                @else
                <span class="mr-2 text-5xl font-extrabold">249€</span>
                @endif

            </div>
            <!-- List -->
            <ul role="list" class="mb-8 space-y-4 text-left">
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Livraison en 72h</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Modification illimité</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Référencement</span>
                </li>

                <li class="flex items-center space-x-3">

                    @if ($subscription_prices == true)
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Hébergement inclus</span>
                    @else
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-red-500 dark:text-red-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000 /svg">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg> <span class="line-through">Hébergement en option</span>
                    @endif

                </li>
                <li class="flex items-center space-x-3">

                    @if ($subscription_prices == true)
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Support 7j/7j inclus</span>
                    @else
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-red-500 dark:text-red-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000 /svg">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg> <span class="line-through">Support 7j/7j en option</span>
                    @endif

                </li>
            </ul>
            <button type="button" wire:click="$set('content', 'estimate')" class="rounded-lg bg-indigo-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-200 dark:text-white dark:focus:ring-indigo-900">Commander</button>
        </div>
        <!-- Pricing Card -->
        <div class="mx-auto flex max-w-lg flex-col rounded-lg border border-gray-100 bg-white p-6 text-center text-gray-900 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white xl:p-8">
            <h3 class="mb-4 text-2xl font-semibold">Site E-commerce</h3>
            <p class="font-light text-gray-500 dark:text-gray-400 sm:text-lg">Votre boutique en ligne,
                ouverte
                au monde entier 24h/24h.</p>
            <div class="my-8 flex items-baseline justify-center">

                @if ($subscription_prices == true)
                <span class="mr-2 text-5xl font-extrabold">34€</span>
                <span class="text-gray-500 dark:text-gray-400">/mois</span>
                @else
                <span class="mr-2 text-5xl font-extrabold">639€</span>
                @endif

            </div>
            <!-- List -->
            <ul role="list" class="mb-8 space-y-4 text-left">
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Livraison en 72h</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Modification illimité</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Référencement</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Interface de gestion e-commerce</span>
                </li>
                <li class="@if ($show_price_card == 'show') flex @else hidden @endif items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Gestion des stocks</span>
                </li>

                @if ($show_price_card == 'hidden')
                <p wire:click="$set('show_price_card', 'show')" class="text-center font-medium text-indigo-600 hover:underline dark:text-indigo-500">
                    Lire plus <svg class="ml-2 h-3 w-3 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                    </svg></p>
                @endif

                <li class="@if ($show_price_card == 'show') flex @else hidden @endif items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Système de promotion et de réduction</span>
                </li>
                <li class="@if ($show_price_card == 'show') flex @else hidden @endif items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Suivi des commandes</span>
                </li>
                <li class="@if ($show_price_card == 'show') flex @else hidden @endif items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Recommandations de produits</span>
                </li>
                <li class="@if ($show_price_card == 'show') flex @else hidden @endif items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Livraison et options d'expédition</span>
                </li>
                <li class="@if ($show_price_card == 'show') flex @else hidden @endif items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Relance pannier abandonnée</span>
                </li>
                <li class="@if ($show_price_card == 'show') flex @else hidden @endif items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Outils d'analyse des ventes</span>
                </li>

                <li class="@if ($show_price_card == 'show') flex @else hidden @endif items-center space-x-3">

                    @if ($subscription_prices == true)
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Hébergement inclus</span>
                    @else
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-red-500 dark:text-red-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000 /svg">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg> <span class="line-through">Hébergement en option</span>
                    @endif

                </li>
                <li class="@if ($show_price_card == 'show') flex @else hidden @endif items-center space-x-3">

                    @if ($subscription_prices == true)
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Support 7j/7j inclus</span>
                    @else
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-red-500 dark:text-red-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000 /svg">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg> <span class="line-through">Support 7j/7j en option</span>
                    @endif

                </li>

                @if ($show_price_card == 'show')
                <p wire:click="$set('show_price_card', 'hidden')" class="text-center font-medium text-indigo-600 hover:underline dark:text-indigo-500">
                    Lire moins
                    <svg class="ml-2 h-3 w-3 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                    </svg>
                </p>
                @endif

            </ul>
            <button type="button" wire:click="$set('content', 'estimate')" class="rounded-lg bg-indigo-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-200 dark:text-white dark:focus:ring-indigo-900">Commander</button>
        </div>
        <!-- Pricing Card -->
        <div class="mx-auto flex max-w-lg flex-col rounded-lg border border-gray-100 bg-white p-6 text-center text-gray-900 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white xl:p-8">
            <h3 class="mb-4 text-2xl font-semibold">Autre</h3>
            <p class="font-light text-gray-500 dark:text-gray-400 sm:text-lg">Toute autre prestation se
                faite
                sur devis gratuit.</p>
            <div class="my-8 flex items-baseline justify-center">
                <span class="mr-2 text-5xl font-extrabold">30€</span>
                <span class="text-gray-500 dark:text-gray-400">/heure</span>
            </div>
            <!-- List -->
            <ul role="list" class="mb-8 space-y-4 text-left">
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>J'usqua 12h par jours</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Disponnible 7j/7j</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Rapport journalier</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Prix négociable selon projet</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="h-5 w-5 flex-shrink-0 text-indigo-500 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Devis gratuit</span>
                </li>
            </ul>
            <button type="button" wire:click="$set('content', 'estimate')" class="rounded-lg bg-indigo-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-200 dark:text-white dark:focus:ring-indigo-900">Devis</button>
        </div>
    </div>
</div>
<!-- Prices section end -->
</div>
