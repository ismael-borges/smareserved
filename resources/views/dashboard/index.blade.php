<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Minhas Assinaturas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" id="form-signature">
                    @method('PUT') @csrf
                    <input type="hidden" name="fgstatus" id="fgstatus"/>
                </form>
                <div class="flex justify-between flex-wrap p-6 bg-white border-b border-gray-200">
                    @if(empty($signatures['data']))
                        <p class="text-lg font-medium text-gray-900 dark:text-black">
                            Você não possui assinaturas.
                        </p>
                    @endif
                    @foreach($signatures['data'] as $signature)
                        <div style="background-color: #f9f9f9;" class="mt-5 mr-2 block rounded-lg shadow-lg bg-white max-w-sm text-center">
                            <div class="flex justify-center py-3 px-6 border-b border-gray-300">
                                <div>
                                    Assinatura #{{$signature->id}}
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex justify-center">
                                    <div>
                                        <h5 class="text-gray-900 text-xl font-medium mb-2">
                                            {{$signature->fgstatus === 1 ? 'Assinatura ativada' : 'Assinatura desativada'}}
                                        </h5>
                                    </div>
                                    <div class="ml-3">
                                        @if($signature->fgstatus === 1)
                                            <svg class="w-6 h-6" fill="green" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        @else
                                            <svg class="w-6 h-6" fill="red" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                                        @endif
                                    </div>
                                </div>
                                <div>
                                    <p>Próxima entrega</p>
                                    <small>{{$signature->dtnextexecution}}</small>
                                </div>
                            </div>
                            <div class="flex justify-between py-3 px-6 border-t border-gray-300 text-gray-600">
                                <div>
                                    <a href="{{route('signature.edit', $signature->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        Editar assinatura
                                    </a>
                                </div>
                                <div>
                                    {{$signatures['itens'][$signature->id]}} itens
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <script>
        function handleChangeToggle(event, obj, id, status) {
            event.preventDefault();

            console.log(obj, id, status);

            if(status === 1) {
                document.getElementById('fgstatus').value = 2;
            } else {
                document.getElementById('fgstatus').value = 1;
            }

            let form = document.getElementById('form-signature');
            form.action = `signature/${id}`;
            form.submit();
        }
    </script>

</x-app-layout>
