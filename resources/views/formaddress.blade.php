<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Endereço') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
                        <div class="mb-6">
                            <label for="nickname" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">
                                Apelido do endereço
                            </label>
                            <input type="text" id="nickname"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                     dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="cep" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">CEP</label>
                            <input type="text" id="cep"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="number" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Número</label>
                            <input type="text" id="number"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="complement" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Complemento</label>
                            <input type="text" id="complement"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="superscription" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Endereço</label>
                            <input type="text" id="superscription"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="district" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Bairro</label>
                            <input type="text" id="district"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="city" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Cidade</label>
                            <input type="text" id="city"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="state" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Estado</label>
                            <input type="text" id="state"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                   dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                    dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <label for="reference" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Referência</label>
                            <input type="text" id="reference"
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
