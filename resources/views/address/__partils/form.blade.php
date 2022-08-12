@csrf
<div class="mb-6">
    <label for="nickname" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">
        Apelido do endereço
    </label>
    <input type="text" id="nickname" name="nickname" value="{{ $address->nickname ?? old('nickname') }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
</div>
<div class="mb-6">
    <label for="cep" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">CEP</label>
    <input type="text" id="cep" name="cep" value="{{ $address->cep ?? old('cep') }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
           rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
           dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
            dark:focus:border-blue-500" required="">
</div>
<div class="mb-6">
    <label for="number" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Número</label>
    <input type="text" id="number" name="digit" value="{{ $address->digit ?? old('digit') }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
           rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
           dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
            dark:focus:border-blue-500" required="">
</div>
<div class="mb-6">
    <label for="complement" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Complemento</label>
    <input type="text" id="complement" name="complement" value="{{ $address->complement ?? old('complement') }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
           rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
           dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
            dark:focus:border-blue-500" required="">
</div>
<div class="mb-6">
    <label for="superscription" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Endereço</label>
    <input type="text" id="superscription" name="superscription" value="{{ $address->superscription ?? old('superscription') }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
           rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
           dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
            dark:focus:border-blue-500" required="">
</div>
<div class="mb-6">
    <label for="district" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Bairro</label>
    <input type="text" id="district" name="district" value="{{ $address->district ?? old('district') }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
           rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
           dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
            dark:focus:border-blue-500" required="">
</div>
<div class="mb-6">
    <label for="city" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Cidade</label>
    <input type="text" id="city" name="city" value="{{ $address->city ?? old('city') }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
           rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
           dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
            dark:focus:border-blue-500" required="">
</div>
<div class="mb-6">
    <label for="state" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Estado</label>
    <input type="text" id="state" name="state" value="{{ $address->state ?? old('state') }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
           rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
           dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
            dark:focus:border-blue-500" required="">
</div>
<div class="mb-6">
    <label for="reference" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Referência</label>
    <input type="text" id="reference" name="reference" value="{{ $address->reference ?? old('reference') }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
           rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
           dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
            dark:focus:border-blue-500" required="">
</div>
