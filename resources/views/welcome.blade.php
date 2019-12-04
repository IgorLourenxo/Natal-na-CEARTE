@extends('layouts.app')

@section('content')

{{-- Header --}}
@include('includes.header')

{{-- Main Content --}}
<main id="messagesContainer" class="h-screen flex justify-center items-center | bg-image">
    @if (count($messages) > 0)
    @php
    $i = 1;
    @endphp
    @foreach ($messages as $message)
    {{-- Message --}}
    <div id="{{$i}}"
        class="hidden message | container | w-full rounded-lg | mx-4 sm:mx-12 lg:mx-24 xl:mx-32 p-4 | bg-light">
        @php
        $i += 1;
        @endphp
        {{-- Informations --}}
        <div class="md:flex items-center justify-center">
            <div class="text-center md:w-1/2">
                <p class="font-bold text-sm sm:text-lg lg:text-2xl xl:text-3xl leading-loose lg:mx-32">
                    {{$message->name}}
                </p>
            </div>
            <div class="text-center md:w-1/2">
                <p class="text-sm lg:text-base xl:text-2xl leading-loose lg:mx-32">
                    {{$message->course}}</p>
            </div>
        </div>

        {{-- Divider --}}
        <hr class="my-2 h-1 bg-primary rounded-lg">

        {{-- Message --}}
        <p class="my-2 sm:text-xl lg:text-2xl sm:p-1 md:p-2 lg:p-8 break-words">
            {{$message->message}}
        </p>

        {{-- Divider --}}
        <hr class="my-2 h-1 bg-primary rounded-lg">

        {{-- Counter --}}
        <p class="text-xs text-center lg:text-base mt-2">
            <strong>{{$total}}</strong> membros da família <strong class="font-bold text-primary">CEARTE</strong>
            já lhe desejaram
            <strong class="text-green-500">Feliz Natal</strong>!
        </p>

    </div>
    @endforeach
    @endif
</main>

{{-- Footer --}}
<footer class="fixed bottom-0 inset-x-0 font-amaranth font-light">

    {{-- Credits --}}
    {{-- <div class="clearfix text-light">
        <div class="float-left text-left">
            <p class="ml-4">powered by</p>
            <a href="https://www.lourenxoweb.com" target="_blank">
                <img class="h-12 p-1" src="/img/lourenXo web.png" alt="lourenXo web logo">
            </a>
        </div>
        <div class="float-right text-right">
            <p class="mr-4">design by</p>
            <a href="/" target="_blank">
                <img class="h-12 p-1" src="/img/Sasha Stone.png" alt="Sasha Stone logo">
            </a>
        </div>
    </div> --}}
    {{-- /Credits --}}

    {{-- Images --}}
    <div class="flex text-light flex items-end">
        <div class="text-left">
            <img class="w-24 md:w-32 lg:w-40" src="/img/static/Pai Natal.png">
        </div>
        <div class="flex-grow"></div>
        <div class="text-right">
            <img class="w-24 md:w-32 lg:w-40" src="/img/static/Duende e Elfo.png">
        </div>
    </div>
    {{-- /Images --}}

    <div class="bg-dark flex items-center content-center">
        {{-- lourenXo web --}}
        <div class="flex-grow-0 text-light text-center">
            <a href="https://www.lourenxoweb.com" target="_blank">
                <img class="h-10 m-2" src="/img/lourenXo web.png" alt="lourenXo web logo">
            </a>
        </div>
        {{-- Call to action --}}
        <div class="flex-grow">
            <p class="text-sm sm:text-lg lg:text-2xl text-center text-light py-2">
                Participe em <a class="font-bold" href="/mensagem">www.natalcearte.pt/mensagem</a>!
            </p>
        </div>
        {{-- Sasha Stone --}}
        <div class="flex-grow-0 text-light text-center">
            <img class="h-16" src="/img/Sasha Stone.png" alt="Sasha Stone logo">
        </div>
    </div>
</footer>

@endsection