<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formas de pagamentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <form method="POST" id="form-destroy">
            @method('DELETE') @csrf
        </form>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                       href="{{route('payment.create')}}">
                        Inserir forma de pagamento
                    </a>

                    @if(count($payments) === 0)
                        <p class="mt-7 text-lg font-medium text-gray-900 dark:text-black">
                            Você não possui formas de pagamentos cadastradas.
                        </p>
                    @endif

                    @foreach($payments as $payment)
                        <div class="block">
                            <div class="m-3 p-6 bg-white rounded-lg border border-gray-200 shadow-md gray:bg-gray-800 gray:border-gray-700">
                                <p class="mb-1">
                                    <svg style="float: left; margin-right: 4px;" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
                                    {{$payment->nickname}}
                                </p>
                                <p class="mb-1">Numero: {{substr_replace($payment->digit, '************', 0, -4)}}</p>
                                <p class="mb-1">Mês de vencimento: {{$payment->mounth}}</p>
                                <p class="mb-1">Ano de vencimento: {{$payment->yearcard}}</p>
                                <p class="mt-3">
                                    <a href="{{route('payment.edit', $payment->id)}}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                                    bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700
                                    focus:z-10 focus:ring-4 focus:ring-gray-200 gray:focus:ring-gray-700 gray:bg-gray-800
                                    gray:text-gray-400 gray:border-gray-600 gray:hover:text-white gray:hover:bg-gray-700">
                                        Editar
                                    </a>
                                    <a onclick="submitFormDelete(event, {{$payment->id}})"
                                       class="cursor-pointer py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                                    bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700
                                    focus:z-10 focus:ring-4 focus:ring-gray-200 gray:focus:ring-gray-700 gray:bg-gray-800
                                    gray:text-gray-400 gray:border-gray-600 gray:hover:text-white gray:hover:bg-gray-700">
                                        Excluir
                                    </a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<script>
    function submitFormDelete(event, id) {
        event.preventDefault();

        if (confirm("Deseja excluir o registro ?")) {
            let form = document.getElementById('form-destroy');
            form.action = `payment/${id}`;
            form.submit();
        }
    }
</script>
