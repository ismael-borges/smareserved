<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="block rounded-lg shadow-lg bg-white max-w-sm text-center">
                        <div class="py-3 px-6 border-b border-gray-300">
                            Assinatura #123456789
                        </div>
                        <div class="p-6">
                            <h5 class="text-gray-900 text-xl font-medium mb-2">Assinatura ativada</h5>
                            <div class="flex justify-between">
                                <div>
                                    <p>Próxima entrega</p>
                                    <small>10/08/2022</small>
                                </div>
                                <div>
                                    <p>Próxima cobrança</p>
                                    <small>10/08/2022</small>
                                </div>
                            </div>
                            <button type="button" class="py-2.5 px-5 mr-2 text-sm font-medium text-gray-900 bg-white
                             rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10
                              focus:ring-4 focus:outline-none focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800
                               dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 inline-flex items-center">
                                Editar assinatura
                            </button>
                        </div>
                        <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                            2 itens
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
