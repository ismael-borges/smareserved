<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Forma de pagamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
                        <div class="mb-6">
                            <label for="numbercard" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">
                                Número
                            </label>
                            <input type="text" id="numbercard"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                     dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="mounthcard" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Mês</label>
                            <input type="text" id="mounthcard"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="yearcard" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Ano</label>
                            <input type="text" id="yearcard"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="printedname" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Nome impresso</label>
                            <input type="text" id="printedname"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="cvv" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">CVV</label>
                            <input type="text" id="cvv"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                                focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
                                text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
