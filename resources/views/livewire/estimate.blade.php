<div>
<!-- Estimate section start -->
<div class="mx-auto max-w-screen-md px-4 py-8 lg:py-16">
    <h1 class="mb-4 text-center text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white">
        Devis
    </h1>
    <h2 class="mb-8 text-center font-light text-gray-500 dark:text-gray-400 sm:text-xl lg:mb-16">Besoin d'un devis ? Remplissez ce formulaire et recevez-le par mail dans les 24h.
    </h2>

    <ol class="items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 mb-12">
        <li class="flex items-center @if ($estimate_page_number == 1) text-indigo-600 dark:text-indigo-500 @else text-gray-500 dark:text-gray-400 @endif space-x-2.5">
            <span class="flex items-center justify-center w-8 h-8 border @if ($estimate_page_number == 1) border-indigo-600 dark:border-indigo-500 @else border-gray-500 dark:border-gray-400 @endif  rounded-full shrink-0">
                1
            </span>
            <span>
                <h3 class="font-medium leading-tight">Client</h3>
                <p class="text-sm">Vos informations</p>
            </span>
        </li>
        <li class="flex items-center @if ($estimate_page_number == 2) text-indigo-600 dark:text-indigo-500 @else text-gray-500 dark:text-gray-400 @endif space-x-2.5">
            <span class="flex items-center justify-center w-8 h-8 border @if ($estimate_page_number == 2) border-indigo-600 dark:border-indigo-500 @else border-gray-500 dark:border-gray-400 @endif rounded-full shrink-0">
                2
            </span>
            <span>
                <h3 class="font-medium leading-tight">Prestation</h3>
                <p class="text-sm">Choisissez les prestations souhaitez</p>
            </span>
        </li>
        <li class="flex items-center @if ($estimate_page_number == 3) text-indigo-600 dark:text-indigo-500 @else text-gray-500 dark:text-gray-400 @endif space-x-2.5">
            <span class="flex items-center justify-center w-8 h-8 border @if ($estimate_page_number == 3) border-indigo-600 dark:border-indigo-500 @else border-gray-500 dark:border-gray-400 @endif rounded-full shrink-0">
                3
            </span>
            <span>
                <h3 class="font-medium leading-tight">Détails</h3>
                <p class="text-sm">Décrivez votre besoin</p>
            </span>
        </li>
    </ol>

    <form wire:submit.prevent="estimate" class="space-y-8">
        @csrf

        @if ($estimate_page_number == 1)





        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Votre
                    nom</label>
                <input type="text" name="name" wire:model.blur="name_estimate" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="Doe">
                <div>
                    @error('name_estimate') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
                </div>
            </div>
            <div>
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Votre
                    prénom</label>
                <input type="text" name="first_name" wire:model.blur="first_name_estimate" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="John">
                <div>
                    @error('first_name_estimate') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
                </div>
            </div>
            <div>
                <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Votre
                    mail</label>
                <input type="email" name="email" wire:model.blur="email_estimate" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="nom@votremail.com">
                <div>
                    @error('email_estimate') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
                </div>
            </div>
            <div>
                <label for="tel" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Votre
                    Téléphone</label>
                <input type="tel" name="tel" wire:model.blur="tel_estimate" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="0607080910">
                <div>
                    @error('tel_estimate') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
                </div>
            </div>
            <div>
                <label for="company" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Votre
                    Société (facultatif)</label>
                <input type="text" name="company" wire:model.blur="company_estimate" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="Société">
                <div>
                    @error('company_estimate') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
                </div>
            </div>



            <div>
                <label for="activity" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Secteur d'activité (facultatif)</label>

                <select name="activity" wire:model.blur="activity_estimate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
                    <option value="" selected>Choisissez un secteur</option>
                    <option value="Agriculture et Agroalimentaire">Agriculture et Agroalimentaire</option>
                    <option value="Agences de Publicité et de Marketing">Agences de Publicité et de Marketing</option>
                    <option value="Artisanat et Métiers d'Art">Artisanat et Métiers d'Art</option>
                    <option value="Commerce de Détail et de Gros">Commerce de Détail et de Gros</option>
                    <option value="Construction et Bâtiment">Construction et Bâtiment</option>
                    <option value="Énergie et Environnement">Énergie et Environnement</option>
                    <option value="Éducation et Formation">Éducation et Formation</option>
                    <option value="Finance et Services Financiers">Finance et Services Financiers</option>
                    <option value="Industrie Manufacturière">Industrie Manufacturière</option>
                    <option value="Ingénierie et Architecture">Ingénierie et Architecture</option>
                    <option value="Médias et Divertissement">Médias et Divertissement</option>
                    <option value="Santé et Sciences de la Vie">Santé et Sciences de la Vie</option>
                    <option value="Secteur Associatif et ONG">Secteur Associatif et ONG</option>
                    <option value="Secteur Culturel et Créatif">Secteur Culturel et Créatif</option>
                    <option value="Secteur Pharmaceutique et Cosmétique">Secteur Pharmaceutique et Cosmétique</option>
                    <option value="Secteur Public et Administration">Secteur Public et Administration</option>
                    <option value="Sport et Loisirs">Sport et Loisirs</option>
                    <option value="Technologies de l'Information et de la Communication (TIC)">Technologies de l'Information et de la Communication (TIC)</option>
                    <option value="Télécommunications">Télécommunications</option>
                    <option value="Tourisme et Hôtellerie">Tourisme et Hôtellerie</option>
                    <option value="Transport et Logistique">Transport et Logistique</option>
                    <option value="Autre">Autre</option>
                </select>
                <div>
                    @error('activity_estimate') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
        @endif

        @if ($estimate_page_number == 2)
        <div>
            <label for="subject" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">De quel(s) service(s) avez vous besoin ?</label>
            <ul class="grid w-full gap-6 md:grid-cols-3">
                <li>
                    <input type="checkbox" id="showcase_site" name="showcase_site" wire:model="showcase_site" class="hidden peer">
                    <label for="showcase_site" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-indigo-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <svg class="mb-2 w-7 h-7 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="none" viewBox="0 0 21 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.308 9a2.257 2.257 0 0 0 2.25-2.264 2.25 2.25 0 0 0 4.5 0 2.25 2.25 0 0 0 4.5 0 2.25 2.25 0 1 0 4.5 0C19.058 5.471 16.956 1 16.956 1H3.045S1.058 5.654 1.058 6.736A2.373 2.373 0 0 0 3.308 9Zm0 0a2.243 2.243 0 0 0 1.866-1h.767a2.242 2.242 0 0 0 3.733 0h.767a2.242 2.242 0 0 0 3.733 0h.767a2.247 2.247 0 0 0 1.867 1A2.22 2.22 0 0 0 18 8.649V19H9v-7H5v7H2V8.524c.37.301.83.469 1.308.476ZM12 12h3v3h-3v-3Z" />
                            </svg>
                            <div class="w-full text-lg font-semibold">Site vitrine</div>
                            <div class="w-full text-sm">Présente les produits et services de votre activité, sans vendre en ligne.</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="e_commerce" name="e_commerce" wire:model="e_commerce" class="hidden peer">
                    <label for="e_commerce" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-indigo-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <svg class="mb-2 w-7 h-7 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                            </svg>
                            <div class="w-full text-lg font-semibold">Site e-commerce</div>
                            <div class="w-full text-sm">Site ou application qui permet de réaliser des ventes en ligne.</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="web_app" name="web_app" wire:model="web_app" class="hidden peer">
                    <label for="web_app" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-indigo-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <svg class="mb-2 w-7 h-7 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14v4m-4 1h8M1 10h18M2 1h16a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                            </svg>
                            <div class="w-full text-lg font-semibold">Application web</div>
                            <div class="w-full text-sm">Application accesible depuis un navigateur web (CRM, Logiciel...).</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="mobile_app" name="mobile_app" wire:model="mobile_app" class="hidden peer">
                    <label for="mobile_app" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-indigo-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <svg class="mb-2 w-7 h-7 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 14h12M1 4h12M6.5 16.5h1M2 1h10a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                            </svg>
                            <div class="w-full text-lg font-semibold">Application mobile</div>
                            <div class="w-full text-sm">Application accesible en la télechergeant (Google play, App store...).</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="seo" name="seo" wire:model="seo" class="hidden peer">
                    <label for="seo" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-indigo-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <svg class="mb-2 w-7 h-7 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="2" viewBox="0 0 18 19">
                                <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd" />
                            </svg>
                            <div class="w-full text-lg font-semibold">Référencement</div>
                            <div class="w-full text-sm">Prestation visant à ameliorer votre visibilité sur le web.</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="other" name="other" wire:model="other" class="hidden peer">
                    <label for="other" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-indigo-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <svg class="mb-2 w-7 h-7 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 1v5h-5M2 19v-5h5m10-4a8 8 0 0 1-14.947 3.97M1 10a8 8 0 0 1 14.947-3.97" />
                            </svg>
                            <div class="w-full text-lg font-semibold">Autre</div>
                            <div class="w-full text-sm">Choissisez cette option pour toutes prestation ne figurant pas dans la liste.</div>
                        </div>
                    </label>
                </li>
            </ul>
            <div>
            </div>
        </div>
        @endif

        @if ($estimate_page_number == 3)
        <div>
            <label for="decription_estimate" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-400">Décrivez votre besoin</label>
            <textarea name="decription" wire:model="decription_estimate" rows="6" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="Déscription..."></textarea>
            <div>
                @error('decription_estimate') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
            </div>
        </div>
        <div class="w-1/2">
            <label for="promo_code" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Code promo</label>
            <input type="text" name="promo_code" wire:model="promo_code" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="CODE123">
            <div>
                @error('promo_code_upper') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
            </div>
        </div>



        <ul class="space-y-1 text-sm font-medium text-red-600 dark:text-red-500 list-disc list-inside">
            @error('name_estimate')<li>{{ $message }}</li>@enderror
            @error('first_name_estimate')<li>{{ $message }}</li>@enderror
            @error('email_estimate')<li>{{ $message }}</li>@enderror
            @error('tel_estimate')<li>{{ $message }}</li>@enderror
            @error('company_estimate')<li>{{ $message }}</li>@enderror
            @error('activity_estimate')<li>{{ $message }}</li>@enderror
            @error('decription_estimate')<li>{{ $message }}</li>@enderror
            @error('promo_code_upper')<li>{{ $message }}</li>@enderror
        </ul>
        @endif







        @if ($estimate_page_number == 1)
        <button wire:click="$set('estimate_page_number', 2)" type="button" class="rounded-lg bg-indigo-700 px-5 py-3 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 sm:w-fit">Suivant <svg class="w-5 h-5 ml-1 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg></button>
        @endif


        @if ($estimate_page_number == 2)

        <button wire:click="$set('estimate_page_number', 1)" type="button" class="rounded-lg bg-indigo-700 px-5 py-3 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 sm:w-fit"><svg class="w-5 h-5 mr-1 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 5H1m0 0 4 4M1 5l4-4" />
            </svg> Précédent</button>

        <button wire:click="$set('estimate_page_number', 3)" type="button" class="rounded-lg bg-indigo-700 px-5 py-3 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 sm:w-fit">Suivant <svg class="w-5 h-5 ml-1 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg></button>

        @endif



        @if ($estimate_page_number == 3)

        <button wire:click="$set('estimate_page_number', 2)" type="button" class="rounded-lg bg-indigo-700 px-5 py-3 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 sm:w-fit"><svg class="w-5 h-5 mr-1 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 5H1m0 0 4 4M1 5l4-4" />
            </svg> Précédent</button>


        <button type="submit" class="rounded-lg bg-indigo-700 px-5 py-3 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 sm:w-fit">Envoyer</button>
        @endif


    </form>


</div>
<!-- Estimate section end -->
</div>
