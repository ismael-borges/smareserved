<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Endereço') }}
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
                    @foreach($address as $value)
                        <div class="block">
                            <div class="m-3 p-6 bg-white rounded-lg border border-gray-200 shadow-md gray:bg-gray-800 gray:border-gray-700">
                                <p>{{$value->nickname}}</p>
                                <p>{{$value->superscription .' - '. $value->digit}}</p>
                                <p>{{$value->complement}}</p>
                                <p>{{$value->district .' '. $value->city .' - '. $value->state}}</p>
                                <a href="{{route('address.edit', $value->id)}}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                                    bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700
                                    focus:z-10 focus:ring-4 focus:ring-gray-200 gray:focus:ring-gray-700 gray:bg-gray-800
                                    gray:text-gray-400 gray:border-gray-600 gray:hover:text-white gray:hover:bg-gray-700">
                                    Editar
                                </a>
                                <a onclick="submitFormDelete(event, {{$value->id}})" class="cursor-pointer py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                                    bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700
                                    focus:z-10 focus:ring-4 focus:ring-gray-200 gray:focus:ring-gray-700 gray:bg-gray-800
                                    gray:text-gray-400 gray:border-gray-600 gray:hover:text-white gray:hover:bg-gray-700">
                                    Excluir
                                </a>
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
