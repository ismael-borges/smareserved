<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Minhas assinaturas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
                        <div class="mb-6">
                            <label for="countries"
                                   class="block mb-2 text-sm font-medium
                                   text-gray-900 dark:text-gray-400">Produtos</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Selecione seus produtos</option>
                                <option>Manga</option>
                                <option>Goiaba</option>
                                <option>Maça</option>
                                <option>Uva</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="quantity" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">
                                Quantidade
                            </label>
                            <input type="text" id="quantity"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                     dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="mb-6">
                            <fieldset>
                                <label for="countries"
                                       class="block mb-2 text-sm font-medium
                                   text-gray-900 dark:text-gray-400">Peridiocidade</label>

                                <div class="flex items-center mb-4">
                                    <input id="checkbox-1" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300
                                            focus:ring-blue-500 dark:focus:ring-blue-600
                                            dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Semanalmente</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="checkbox-1" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300
                                            focus:ring-blue-500 dark:focus:ring-blue-600
                                            dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Mensalmente</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="checkbox-1" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300
                                            focus:ring-blue-500 dark:focus:ring-blue-600
                                            dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Quinzenalmente</label>
                                </div>

                            </fieldset>
                        </div>
                        <div class="mb-6">
                            <label for="signaturepayment"
                                   class="block mb-2 text-sm font-medium
                                   text-gray-900 dark:text-gray-400">Forma de pagamento</label>
                            <select id="signaturepayment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Selecione...</option>
                                <option>Cartão 1</option>
                                <option>Cartão 2</option>
                                <option>Cartão 3</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="signatureaddress"
                                   class="block mb-2 text-sm font-medium
                                   text-gray-900 dark:text-gray-400">Endereço</label>
                            <select id="signatureaddress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Selecione...</option>
                                <option>Endereço 1</option>
                                <option>Endereço 2</option>
                                <option>Endereço 3</option>
                            </select>
                        </div>
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                                focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
                                text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Assinar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
