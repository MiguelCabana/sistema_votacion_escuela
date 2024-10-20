<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" p-6 text-gray-900">
                    <div>
                        @if (session('success'))
                        <div class="bg-green-300 w-96 flex justify-center items-center mb-4 rounded-sm  h-16 text-black" id="success-alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <script>
                        setTimeout(() => {
                            var successAlert = document.getElementById('success-alert');
                            if(successAlert) {
                                successAlert.style.display = "none";
                            }
                        }, 3000);
                    </script>
                    
                    </div>
                    <form action="{{ route('candidatos.store')}}" method="post">
                        @csrf
                        <div class="flex flex-wrap">
                            <label class="w-full mt-4" for="">Apellido candidato</label>
                            <input class="w-full" type="text" name="apellido_candidato" >
                            <label class="w-full mt-4" for="">Nombre candidato</label>
                            <input class="w-full mt-4" type="text" name="nombre_candidato">
                            <label class="w-full mt-4"  for="">Nombre partido político</label>
                            <input class="w-full mt-4" type="text" name="partido_candidato">
                            <!--
                            <select class="w-full rounded-sm mt-4"   name="partido_id" id="">
                                <option value="1">Fuerza popular</option>
                                <option value="2">Apristas</option>
                                <option value="3">Fonabi</option>
                            </select>
                            -->
                            <button  type="submit" class="bg-black text-white rounded-sm w-96 mt-4 h-16 border  hover:bg-gray-200 hover:text-black transition-all">Registrar candidato</button>
                        </div>

                        <div class="mt-8">
                            <p class="mb-4">Candidatos registrados</p>
                            @foreach ($candidato as $candidatos)
                            <ul>
                                <li class="capitalize">{{$candidatos->apellido_candidato}} {{$candidatos->nombre_candidato}}</li>
                                <li class="mb-4 font-bold capitalize">{{$candidatos->partido_candidato}}</li>
                            </ul>
                            @endforeach
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    


</x-app-layout>