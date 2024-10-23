<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Centro de votación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-wrap justify-around">


                    <div class="w-full flex justify-between flex-wrap items-center text-center mb-8">
                        <div>
                        @if (session('success'))
                            <div class="bg-green-300 w-96 flex justify-center items-center mb-4 rounded-sm  h-16 text-black" id="success-alert">
                                {{ session('success') }}
                            </div>
                        @endif
    

                        
                        </div>

                        <p>Lista de candidatos <span class="text-black font-bold">2024</span></p>



                    </div>
                    

                    
                    @foreach ($candidatos as $candidato)
                   <form action="{{ route('votos.store')}}" class="w-96 py-4 px-4 border rounded-sm flex flex-wrap" method="post">

                        @csrf
                        <input type="hidden" value="{{$candidato->id}}" name="candidato_id" >
                        <label for="" class="w-full mb-4 capitalize">{{$candidato->partido_candidato}}</label>
                        <label class="w-full mb-4 text-1xl font-bold uppercase" for="">{{$candidato->apellido_candidato}} {{$candidato->nombre_candidato}}</label>
                        <img class="w-40 h-40 mx-auto my-8 " src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/congreso-2020-alianza-para-el-progreso-1024x1024.png" alt="" srcset="">

                        <button  class="botonvotar w-full mt-4 h-16 border rounded-sm  bg-black text-white hover:bg-gray-200 hover:text-black transition-all" type="submit">Votar</button>
                   </form>
                   @endforeach

                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {

            let botonvotar = document.querySelectorAll('.botonvotar');
            let successAlert = document.querySelector('#success-alert');


            if(successAlert) {

                if(botonvotar) {
                        botonvotar.forEach(element => {
                            element.disabled = true;
                            element.style.cursor = 'not-allowed';
                        });
                    }


                setTimeout(() => {
                    successAlert.style.display = 'none';
                    if(botonvotar) {
                        botonvotar.forEach(element => {
                            element.disabled = false;
                            element.style.cursor = 'pointer';
                        })
                    }
                }, 2500);
            }
        })
    
    </script>

</x-app-layout>