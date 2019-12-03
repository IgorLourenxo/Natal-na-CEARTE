@extends('layouts.app')

@section('content')

{{-- Main Content --}}
<main id="messagesContainer" class="h-screen flex justify-center items-center | bg-image">
    {{-- Message --}}
    <div id="1" class="hidden message | container | w-full rounded-lg | mx-4 sm:mx-12 lg:mx-24 xl:mx-32 p-4 | bg-light">
        {{-- Informations --}}
        <div class="flex">
            {{-- Photo --}}
            <div class="w-1/3 sm:w-1/6 mr-4">
                <img src="/img/static/Avatar 1.png" class="h-full w-full rounded-full">
            </div>

            {{-- Name and Course --}}
            <div class="flex-grow">
                <p class="text-left font-bold text-sm sm:text-lg lg:text-2xl leading-loose">Igor Lourenço</p>
                <p class="text-right text-sm sm:text-lg lg:text-2xl leading-loose">Marketing Digital - Projeto de
                    webdesign</p>
            </div>
        </div>

        {{-- Divider --}}
        <hr class="my-2 h-1 bg-primary">

        {{-- Message --}}
        <p class="my-2 sm:text-xl lg:text-2xl p-2 sm:p-4 md:p-6 lg:p-12">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum sed orci a commodo. Aenean    
            ultrices ornare sem sed ultrices. Proin amet.
        </p>

        {{-- Divider --}}
        <hr class="my-2 h-1 bg-primary">

        {{-- Counter --}}
        <p class="text-xs text-center lg:text-base mt-2">
            <strong>37</strong> membros da família <strong class="font-bold text-primary">CEARTE</strong> desejam-lhe <strong class="text-green-500">Feliz Natal</strong>!
        </p>

    </div>
</main>

{{-- Footer --}}
<footer class="fixed bottom-0 inset-x-0 bg-dark">
    <p class="text-sm sm:text-lg lg:text-2xl text-center text-light py-2">
        Participa em <a class="font-bold" href="/mensagem">www.natalnacearte.pt/mensagem</a>!
    </p>
</footer>

@endsection