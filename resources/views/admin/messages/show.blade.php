<x-app-layout>
    <x-slot name="header">
        Message de {{ $message->name }} {{ $message->first_name }}
    </x-slot>


    <div class="mx-auto">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="p-8">
                <h3 class="text-xl mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">{{ $message->subject }}</a>
                </h3>
                <div class="lg:flex justify-between mb-6">
                    <p class="text-gray-500 dark:text-gray-400">De : {{ $message->email }}</p>
                    <p class="text-gray-500 dark:text-gray-400">Recu le {{ $message->created_at->format('d/m/Y') }} à {{ $message->created_at->format('H:i:s') }} </p>
                </div>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">{{ $message->message }}</p>

                <div class="flex sm:justify-end">
                    <a href="mailto:{{ $message->email }}?subject=Réponse de Yassine Labhih à votre message." target="blank" class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 focus:outline-none dark:focus:ring-indigo-800">Répondre</a>

                    <button data-modal-target="delete-message-{{ $message->id }}-modal" data-modal-toggle="delete-message-{{ $message->id }}-modal" type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Supprimer</button>

                </div>
            </div>

            <div id="delete-message-{{ $message->id }}-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-message-{{ $message->id }}-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Êtes-vous sure de vouloir supprimer le message de {{ $message->email }} ?</h3>
                            <form method="POST" action="{{ route('message.delete', $message->id) }}">
                                @csrf

                                <button data-modal-hide="delete-message-{{ $message->id }}-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Oui, je suis sûr
                                </button>

                                <button data-modal-hide="delete-message-{{ $message->id }}-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Non, annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</x-app-layout>
