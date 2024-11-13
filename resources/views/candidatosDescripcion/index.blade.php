<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Descripción de los candidatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                    

                    <!-- DESCRIPCION CANDIDATO 1 -->
                   <form action="" class="w-96 py-4 px-4 border rounded-sm flex flex-wrap" method="post">
                        @csrf
                        <input type="hidden" value="" name="candidato_id" >
                        <label for="" class="w-full mb-4 capitalize">PARTIDO POLITICO NOMBRE</label>
                        <label class="w-full mb-4 text-1xl font-bold uppercase" for="">Jose Rodriguez</label>
                        <label class="w-full mb-4 text-sm " for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae culpa dolore nulla quod officiis nisi architecto eius hic quo ullam quas a expedita corrupti est ipsam, nostrum facilis! Pariatur, quidem?</label>
                        <label class="w-full mb-4 text-sm " for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae culpa dolore nulla quod officiis nisi architecto eius hic quo ullam quas a expedita corrupti est ipsam, nostrum facilis! Pariatur, quidem?</label>
                        <label class="w-full mb-4 text-sm " for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae culpa dolore nulla quod officiis nisi architecto eius hic quo ullam quas a expedita corrupti est ipsam, nostrum facilis! Pariatur, quidem?</label>
                        <img class="w-40 h-40 mx-auto my-8 " src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/congreso-2020-alianza-para-el-progreso-1024x1024.png" alt="" srcset="">
                        <p  class=" border-neutral-50 w-full mt-4 h-16 flex justify-center items-center rounded-sm  bg-gray-200 transition-all back" type="text">EL PERU AVANZA !</p>                   
                    </form>

                    <!-- DESCRIPCION CANDIDATO 2 -->
                    <form action="" class="w-96 py-4 px-4 border rounded-sm flex flex-wrap" method="post">
                        @csrf
                        <input type="hidden" value="" name="candidato_id" >
                        <label for="" class="w-full mb-4 capitalize">PARTIDO POLITICO NOMBRE</label>
                        <label class="w-full mb-4 text-1xl font-bold uppercase" for="">Jose Rodriguez</label>
                        <label class="w-full mb-4 text-sm " for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae culpa dolore nulla quod officiis nisi architecto eius hic quo ullam quas a expedita corrupti est ipsam, nostrum facilis! Pariatur, quidem?</label>
                        <label class="w-full mb-4 text-sm " for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae culpa dolore nulla quod officiis nisi architecto eius hic quo ullam quas a expedita corrupti est ipsam, nostrum facilis! Pariatur, quidem?</label>
                        <label class="w-full mb-4 text-sm " for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae culpa dolore nulla quod officiis nisi architecto eius hic quo ullam quas a expedita corrupti est ipsam, nostrum facilis! Pariatur, quidem?</label>
                        <img class="w-40 h-40 mx-auto my-8 " src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/congreso-2020-alianza-para-el-progreso-1024x1024.png" alt="" srcset="">
                        <p  class=" border-neutral-50 w-full mt-4 h-16 flex justify-center items-center rounded-sm  bg-gray-200 transition-all back" type="text">EL PERU AVANZA !</p>                   
                    </form>


                    <!-- DESCRIPCION CANDIDATO 3 -->

                    <form action="" class="w-96 py-4 px-4 border rounded-sm flex flex-wrap" method="post">
                        @csrf
                        <input type="hidden" value="" name="candidato_id" >
                        <label for="" class="w-full mb-4 capitalize">PARTIDO POLITICO NOMBRE</label>
                        <label class="w-full mb-4 text-1xl font-bold uppercase" for="">Jose Rodriguez</label>
                        <label class="w-full mb-4 text-sm " for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae culpa dolore nulla quod officiis nisi architecto eius hic quo ullam quas a expedita corrupti est ipsam, nostrum facilis! Pariatur, quidem?</label>
                        <label class="w-full mb-4 text-sm " for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae culpa dolore nulla quod officiis nisi architecto eius hic quo ullam quas a expedita corrupti est ipsam, nostrum facilis! Pariatur, quidem?</label>
                        <label class="w-full mb-4 text-sm " for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae culpa dolore nulla quod officiis nisi architecto eius hic quo ullam quas a expedita corrupti est ipsam, nostrum facilis! Pariatur, quidem?</label>
                        <img class="w-40 h-40 mx-auto my-8 " src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/congreso-2020-alianza-para-el-progreso-1024x1024.png" alt="" srcset="">
                        <p  class=" border-neutral-50 w-full mt-4 h-16 flex justify-center items-center rounded-sm  bg-gray-200 transition-all back" type="text">EL PERU AVANZA !</p>                   
                    </form>

       

                </div>
            </div>
        </div>


</x-app-layout>