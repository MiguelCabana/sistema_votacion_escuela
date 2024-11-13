<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Centro de votación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2 text-gray-900 flex flex-wrap justify-around">


                    <div class="w-full flex justify-between flex-wrap items-center text-center mb-8">
                        <div>
                        @if (session('success'))
                            <div style="background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);" class=" w-96 flex justify-center items-center mb-4 rounded-sm  h-16 text-black" id="success-alert">
                                {{ session('success') }}
                            </div>
                        @endif
    

                        
                        </div>

                        <p>Lista de candidatos <span class="text-black font-bold">2024</span></p>



                    </div>
                    

                    
                    @foreach ($candidatos as $candidato)
                   <form action="{{ route('votos.store')}}" class="w-96 py-4 px-4 border rounded-sm flex flex-wrap hover:scale-105 transition-all cursor-pointer  z-10" method="post" >

                        @csrf
                        <input type="hidden" value="{{$candidato->id}}" name="candidato_id" >
                        <label for="" class="w-full mb-4 capitalize">{{$candidato->partido_candidato}}</label>
                        <label class="w-full mb-4 text-1xl font-bold uppercase" for="">{{$candidato->apellido_candidato}} {{$candidato->nombre_candidato}}</label>
                        <img class="w-40 h-40 mx-auto my-8 " src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/congreso-2020-alianza-para-el-progreso-1024x1024.png" alt="" srcset="">



                        @if ($user_voto_current >= 1)
                            <p  class="w-full mt-4 h-16 rounded-m cursor-not-allowed flex justify-center items-center  text-black uppercase transition-all" style="background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);">Ya has votado!</p>
                        @else
                            <button  style="background-image: linear-gradient(-225deg, #22E1FF 0%, #1D8FE1 48%, #625EB1 100%);" class="botonvotar uppercase w-full mt-4 h-16 border rounded-sm   text-white  transition-all" type="submit">Votar</button>

                        @endif
                        
                   </form>
                   @endforeach

                </div>
            </div>

            @if ($search_candidato) 

            <div class="w-full flex justify-start p-4">
                @foreach ($search_candidato as $candidato)
                <div class="m-2 p-2 flex items-center justify-center">
                    <i class="open-eyes" style="display: none; color: #1D8FE1"><i class="text-2xl  cursor-pointer bi bi-eye-fill"></i></i>
                    <p class="close-eyes" style="color: #1D8FE1;" ><i class="text-2xl cursor-pointer bi bi-eye-slash-fill"></i></p>
                </div>
                <div id="show-current-voto" class="m-2 p-4 opacity-0 transition-all">
                    <ul class="flex justify-between items-center">
                        <li class="mr-2">Mi voto personal: </li>
                        <li class="mr-2 font-semibold uppercase">{{$candidato->apellido_candidato}}</li>
                        <li class="mr-2 ">{{$candidato->nombre_candidato}}</li>
                    </ul>
                </div>
            @endforeach
            </div>
                
            @else
                <p class="my-8  uppercase">Aun no has realizado ningun voto!</p>
            @endif



        </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {

            let botonvotar = document.querySelectorAll('.botonvotar');
            let successAlert = document.querySelector('#success-alert');

            let openEyes = document.querySelector('.open-eyes');
            let closeEyes = document.querySelector('.close-eyes');

            let showCurrentVoto = document.querySelector('#show-current-voto');

            if(closeEyes) {
                closeEyes.addEventListener('click', (event) => {
                    showCurrentVoto.style.opacity = 1;
                    closeEyes.style.display = 'none';
                    openEyes.style.display = 'block';
                })
            } 

            if(openEyes) {
                openEyes.addEventListener('click', (event) => {
                    showCurrentVoto.style.opacity = 0;
                    openEyes.style.display = 'none'
                    closeEyes.style.display = 'block';
                })
            }


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