@extends('layouts.app')

@section('content')

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
        <div class="flex">
            {{-- Photo --}}
            <div class="w-1/3 sm:w-1/6 mr-4">
                <img src="/img/static/Natal {{rand(1, 2)}}.png" class="h-full w-full rounded-full">
            </div>

            {{-- Name and Course --}}
            <div class="flex-grow">
                <p
                    class="text-left font-bold text-sm sm:text-lg lg:text-2xl xl:text-3xl leading-loose lg:mx-32 lg:xl-12">
                    {{$message->name}}</p>
                <p class="text-right text-sm sm:text-lg lg:text-2xl xl:text-3xl leading-loose lg:mx-32">
                    {{$message->course}}</p>
            </div>
        </div>

        {{-- Divider --}}
        <hr class="my-2 h-1 bg-primary">

        {{-- Message --}}
        <p class="my-2 sm:text-xl lg:text-2xl p-2 sm:p-4 md:p-6 lg:p-12 break-words">
            {{$message->message}}
        </p>

        {{-- Divider --}}
        <hr class="my-2 h-1 bg-primary">

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
<footer class="fixed bottom-0 inset-x-0 bg-dark">
    <p class="text-sm sm:text-lg lg:text-2xl text-center text-light py-2">
        Participe em <a class="font-bold" href="/mensagem">www.natalcearte.pt/mensagem</a>!
    </p>
</footer>

@endsection