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
                    <form action="{{ $payment ? route('payment.update', $payment->id) : route('payment.store') }}" method="POST">
                        @csrf
                        @if($payment) @method('PUT') @endif

                        <div class="grid grid-cols-3">
                            <div class="mb-6">
                                <label for="nickname" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">
                                    Apelido <span style="color: red">*</span>
                                </label>
                                <input type="text" id="nickname" name="nickname" value="{{ old('nickname', optional($payment)->nickname) }}"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                         dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="ml-3 mb-6">
                                <label for="digit" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">
                                    Número <span style="color: red">*</span>
                                </label>
                                <input type="number" id="digit" name="digit" value="{{ old('digit', optional($payment)->digit) }}"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                         dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    Somente números
                                </p>
                            </div>
                            <div class="ml-3 mb-6">
                                <label for="mounth" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">
                                    Mês <span style="color: red">*</span>
                                </label>
                                <input type="number" id="mounth" name="mounth" value="{{ old('mounth', optional($payment)->mounth) }}"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                       rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                       dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                        dark:focus:border-blue-500" required="">
                                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    Somente dois digitos
                                </p>
                            </div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="mb-6">
                                <label for="yearcard" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">
                                    Ano <span style="color: red">*</span>
                                </label>
                                <input type="number" id="yearcard" name="yearcard" value="{{ old('yearcard', optional($payment)->yearcard) }}"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                       rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                       dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                        dark:focus:border-blue-500" required="">
                                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    Somente dois digitos
                                </p>
                            </div>
                            <div class="ml-3 mb-6">
                                <label for="nameprinted" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">
                                    Nome impresso <span style="color: red">*</span>
                                </label>
                                <input type="text" id="nameprinted" name="nameprinted" value="{{ old('nameprinted', optional($payment)->nameprinted) }}"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                       rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                       dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                        dark:focus:border-blue-500" required="">
                            </div>
                            <div class="ml-3 mb-6">
                                <label for="cvv" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">
                                    CVV <span style="color: red">*</span>
                                </label>
                                <input type="number" id="cvv" name="cvv" value="{{ old('cvv', optional($payment)->cvv) }}"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                       rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                                       dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                        dark:focus:border-blue-500" required="">
                            </div>
                        </div>
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                                focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
                                text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
