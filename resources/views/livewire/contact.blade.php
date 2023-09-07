<div>
<!-- Contact section start -->
<div class="mx-auto max-w-screen-md px-4 py-8 lg:py-16">
    <h1 class="mb-4 text-center text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white">
        Contactez
        Moi
    </h1>
    <h2 class="mb-8 text-center font-light text-gray-500 dark:text-gray-400 sm:text-xl lg:mb-16">Pour toutes demandes n'hésitez pas à me contacter, je réponds rapidement !
    </h2>

    <form wire:submit.prevent="sendMessage" class="space-y-8">
        @csrf
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Votre
                    nom</label>
                <input type="text" name="name" wire:model="name" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="Doe">
                <div>
                    @error('name') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
                </div>
            </div>
            <div>
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Votre
                    Prénom</label>
                <input type="text" name="first_name" wire:model="first_name" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="John">
                <div>
                    @error('first_name') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Votre
                    mail</label>
                <input type="email" name="email" wire:model="email" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="nom@votremail.com">
                <div>
                    @error('email') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
                </div>
            </div>
            <div>
                <label for="tel" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Votre
                    Téléphone</label>
                <input type="tel" name="tel" wire:model="tel" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="0607080910">
                <div>
                    @error('tel') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
        <div>
            <label for="subject" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Sujet</label>

            <input type="text" name="subject" wire:model="subject" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-3 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:shadow-sm-light dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="Dites-moi comment je peux vous aider ?">
            <div>
                @error('subject') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="message" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-400">Votre
                message</label>
            <textarea name="message" wire:model="message" rows="6" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-indigo-500 dark:focus:ring-indigo-500" placeholder="Laissez un message..."></textarea>
            <div>
                @error('message') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p> @enderror
            </div>
        </div>
        <button type="submit" class="rounded-lg bg-indigo-700 px-5 py-3 text-center text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 sm:w-fit">Envoyer</button>
    </form>


    <div class="mt-12   space-y-12  lg:grid lg:grid-cols-3 md:gap-12 lg:space-y-0">

        <a href="tel:+33749911211" target="blank">
            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-700 text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 lg:h-12 lg:w-12">

                <svg class="h-5 w-5  lg:h-6 lg:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z" />
                </svg>

            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Téléphone</h3>
            <p class="text-gray-500 dark:text-gray-400">+33 7 49 91 12 11</p>
        </a>

        <a href="mailto:contact@yassinelabhih.com" target="blank">
            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-700 text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 lg:h-12 lg:w-12">
                <svg class="h-5 w-5  lg:h-6 lg:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 2-8.4 7.05a1 1 0 0 1-1.2 0L1 2m18 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1m18 0v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2" />
                </svg>

            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Mail</h3>
            <p class="text-gray-500  dark:text-gray-400">contact@yassinelabhih.com</p>
        </a>


        <a href="https://wa.me/+33749911211" target="blank" class="">
            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-700 text-white hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 lg:h-12 lg:w-12">
                <svg class="h-6 w-6 lg:h-6 lg:w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Whatsapp</h3>
            <p class="text-gray-500 dark:text-gray-400">+33 7 49 91 12 11</p>
        </a>

    </div>

</div>
</div>
<!-- Contact section end -->
</div>
