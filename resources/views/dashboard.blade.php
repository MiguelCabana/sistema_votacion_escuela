<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("") }}
                    <p class="italic"> Institución Educativa Emblematica</p>
                    <h1 class="uppercase mb-8">"Inmaculada de la merced"</h1>

                    <p>Bienvenido al sistema de votación en línea diseñado exclusivamente para los estudiantes del Colegio Inmaculada La Merced. Esta plataforma ha sido creada para facilitar un proceso de votación rápido, seguro y transparente. Los estudiantes podrán participar en la elección de sus representantes estudiantiles de manera sencilla, a través de cualquier dispositivo con acceso a internet. Nuestro objetivo es promover la participación activa y democrática, asegurando que cada voto cuente y sea registrado con total confidencialidad. Esta plataforma ofrece una interfaz intuitiva, diseñada para que los usuarios puedan navegar fácilmente por las distintas secciones y realizar su voto en pocos pasos. ¡Participa, vota y elige a tus representantes de manera digital!</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
