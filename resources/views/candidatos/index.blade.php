<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                            <button  type="submit" style="background-image: linear-gradient(-225deg, #22E1FF 0%, #1D8FE1 48%, #625EB1 100%);" class=" text-white rounded-sm w-96 mt-4 h-16 border   uppercase transition-all">Registrar candidato</button>
                        </div>
                        
                        <div class="w-full mt-8">
                            @if ($candidatoGanador && $candidatoGanador->votos_count > 0) 
                            <p class="w-full text-left text-xl">El candidato ganador actual: <span class="uppercase font-bold">{{ $candidatoGanador->apellido_candidato }} {{$candidatoGanador->nombre_candidato}}</span> con {{ $candidatoGanador->votos_count }} votos.</p>
                        
                            @else
                                <p class="w-full text-left">Aun no hay votos.</p>
                            @endif
                        </div>

                        <div class="mt-8">
                            <p class="mb-4">Candidatos registrados</p>
                            @foreach ($candidato as $candidatos)
                            <ul>
                                <li class="capitalize">{{$candidatos->apellido_candidato}} {{$candidatos->nombre_candidato}}</li>
                                <li class="font-bold capitalize">{{$candidatos->partido_candidato}}</li>
                                <li class="mb-4 capitalize">Votos obtenido: <span class="font-bold">{{$candidatos->votos_count}}</span></li>
                                
                            </ul>
                            @endforeach
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    


</x-app-layout>