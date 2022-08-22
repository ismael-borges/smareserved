<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Endereços') }}
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
                       href="{{route('address.create')}}">
                        Inserir novo endereço
                    </a>

                    @if(count($addresses) === 0)
                        <p class="mt-7 text-lg font-medium text-gray-900 dark:text-black">
                            Você não possui endereços cadastrados.
                        </p>
                    @endif
                    @foreach($addresses as $address)
                        <div class="block">
                            <div class="m-3 p-6 bg-white rounded-lg border border-gray-200 shadow-md gray:bg-gray-800 gray:border-gray-700">
                                <p class="mb-1">
                                    <svg style="float: left; margin-right: 4px;" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                    {{$address->nickname}}
                                </p>
                                <p class="mb-1">{{$address->superscription .' - '. $address->digit}}</p>
                                <p class="mb-1">{{$address->complement}}</p>
                                <p class="mb-1">{{$address->district .' '. $address->city .' - '. $address->state}}</p>
                                <p class="mt-3">
                                    <a href="{{route('address.edit', $address->id)}}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                                    bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700
                                    focus:z-10 focus:ring-4 focus:ring-gray-200 gray:focus:ring-gray-700 gray:bg-gray-800
                                    gray:text-gray-400 gray:border-gray-600 gray:hover:text-white gray:hover:bg-gray-700">
                                        Editar
                                    </a>
                                    <a onclick="submitFormDelete(event, {{$address->id}})" class="cursor-pointer py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
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
            form.action = `address/${id}`;
            form.submit();
        }
    }
</script>
