<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assinatura') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($errors->any())
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                            <span class="font-medium">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                            </span>
                        </div>
                    @endif
                    <form action="{{isset($signature) ? route('signature.update', $signature->id) : route('signature.store')}}" method="POST">
                        @csrf
                        @if(isset($signature)) @method('PUT') @endif
                        <div class="grid grid-cols-3 mb-6 products">
                            <div>
                                <label for="products" class="block mb-2 text-sm
                                font-medium text-black-900 dark:black-gray-400">
                                    Produtos <span style="color: red">*</span>
                                </label>
                                <select {{!isset($productsSelected) ? 'required' : ''}} id="products"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                        rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                         dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                         dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Selecione...</option>
                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="ml-6">
                                <label for="quantity" class="block mb-2 text-sm font-medium
                                   text-black-900 dark:text-black-400">
                                    Quantidade <span style="color: red">*</span>
                                </label>
                                <input type="number" id="quantity"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                     dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" {{!isset($productsSelected) ? 'required' : ''}}>
                            </div>
                            <div class="ml-6 mt-9">
                                <a href="#" class="btn-add-product text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                                focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
                                text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">+</a>
                            </div>

                            @if(isset($productsSelected))
                                @foreach($productsSelected as $productSelected)
                                <div class="mt-4 mr-3">
                                    <label for="products" class="block mb-2 text-sm
                                font-medium text-black-900 dark:text-black-400">
                                        Produto <span style="color: red">*</span>
                                    </label>
                                    <input value="{{$productSelected['products']['name']}}" type="text" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                     dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <input name="products[]" value="{{$productSelected['products']['id']}}" type="hidden">
                                    <label class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">
                                        Quantidade <span style="color: red">*</span>
                                    </label>
                                    <input type="number" name="quantity[{{$productSelected['products']['id']}}]" value="{{$productSelected['quantity']}}"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                     dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                        <a href="#" class="remove_field font-medium text-blue-600 dark:text-blue-500 hover:underline">Remover item</a>
                                    </label>
                                </div>
                                @endforeach
                            @endif
                        </div>

                        <div class="mb-6">

                            <label for="quantity" class="block mb-2 text-sm font-medium
                                   text-black-900 dark:text-black-400">
                                Peridiocidade <span style="color: red">*</span>
                            </label>

                            <div class="flex items-center mb-4">
                                <input id="recurrence-weekly" type="radio" name="recurrence_type" value="1"
                                       class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600
                                        dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                    {{ isset($signature) && $signature->recurrence_type === 1 ? 'checked' : '' }}>
                                <label for="recurrence-weekly" class="block ml-2 text-sm font-medium text-black-900 dark:text-black-300">
                                    Semanalmente
                                </label>
                            </div>

                            <div class="flex items-center mb-4">
                                <input id="recurrence-mounth" type="radio" name="recurrence_type" value="2"
                                       class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600
                                       dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                    {{ isset($signature) && $signature->recurrence_type === 2 ? 'checked' : '' }}>
                                <label for="recurrence-mounth" class="block ml-2 text-sm font-medium text-black-900 dark:text-black-300">
                                    Mensalmente
                                </label>
                            </div>

                            <div class="flex items-center mb-4">
                                <input id="recurrence-biweekly" type="radio" name="recurrence_type" value="3"
                                       class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600
                                        dark:bg-gray-700 dark:border-gray-600"
                                    {{ isset($signature) && $signature->recurrence_type === 3 ? 'checked' : '' }}>
                                <label for="recurrence-biweekly" class="block ml-2 text-sm font-medium text-black-900 dark:text-black-300">
                                    Quinzenalmente
                                </label>
                            </div>

                        </div>

                        <div class="grid grid-cols-3 mb-6">
                            <div>
                                <label for="payment"
                                       class="block mb-2 text-sm font-medium
                                   text-black-900 dark:text-black-400">Forma de pagamento <span style="color: red">*</span></label>
                                <select required id="payment" name="payment_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Selecione...</option>
                                    @foreach($payments as $payment)
                                        <option value="{{$payment->id}}" {{ isset($paymentSelected) && $paymentSelected['id'] === $payment->id ? 'selected' : ''}}>{{$payment->nickname}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="ml-6">
                                <label for="address"
                                       class="block mb-2 text-sm font-medium
                                   text-black-900 dark:text-black-400">Endereço <span style="color: red">*</span></label>
                                <select required id="address" name="address_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Selecione...</option>
                                    @foreach($addresses as $address)
                                        <option value="{{$address->id}}" {{isset($addressSelected) && $addressSelected['id'] === $address->id ? 'selected' : ''}}>{{$address->nickname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button id="btn-save" type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                                focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
                                text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Assinar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            let wrapper = $(".products");
            let add_button = $(".btn-add-product");

            $(add_button).on("click", function(e){
                e.preventDefault();

                if (!$('#products').val()) {
                    alert("Favor selecionar um produto");
                    $('#products').focus();
                    return;
                }
                if (!$('#quantity').val()) {
                    alert("Favor inserir a quantidade desejada");
                    $('#quantity').focus();
                    return;
                }

                $(wrapper).append('<div class="mt-4">' +
                    `<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Produto <span style="color: red">*</span></label>` +
                    '<input name="products[]" value="'+$('#products').val()+'" type="hidden">' +
                    '<input value="'+$('#products option:selected').text()+'" type="text" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">' +
                    `<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Quantidade <span style="color: red">*</span></label>` +
                    '<input type="text" name="quantity['+$('#products').val()+']" value="'+$('#quantity').val()+'" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>' +
                    `<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"><a href="#" class="remove_field font-medium text-blue-600 dark:text-blue-500 hover:underline">Remover item</a></label>` +
                    '</div>');
            });
            $(wrapper).on("click",".remove_field", function(e){
                e.preventDefault();
                $(this).parent().parent('div').remove();
            });

        });
    </script>

</x-app-layout>
