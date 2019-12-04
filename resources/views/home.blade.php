{{-- This is the "profile" of every user --}}
@extends('layouts.app')

@section('content')
{{-- Header --}}
@include('includes.header')

<div class="bg-white mt-48">
    <div class="container mx-auto">
        <h1 class="text-center font-black text-2xl">Dashboard</h1>
        <h2 class="text-center font-light text-xl">Verificar mensagens</h2>
        <hr class="my-4">
        @if (count($messages) > 0)
        @foreach ($messages as $message)
        <div class="bg-light px-4 py-2 rounded-lg mx-4">
            <p><strong>Nome:</strong> {{$message->name}}</p>
            <br>
            <p><strong>Curso:</strong> {{$message->course}}</p>
            <br>
            <p class="break-words"><strong>Mensagem:</strong> {{$message->message}}</p>
            <div class="clearfix my-4 mx-2">
                <form class="float-left" method="POST" action="{{action('MessagesController@update', $message->id)}}">
                    @method('PUT')
                    @csrf
                    <button class="rounded-lg px-4 py-2 bg-green-500 text-light" type="submit">Aprovar!</button>
                </form>
                <form class="float-right" method="POST" action="{{action('MessagesController@destroy', $message->id)}}">
                    @method('DELETE')
                    @csrf
                    <button class="rounded-lg px-4 py-2 bg-red-600 text-light" type="submit">APAGAR!</button>
                </form>
            </div>
        </div>
        <br>
        @endforeach
        @else
        <div class="text-center">
            <p class="font-light">Não existem mensagens a precisar de aprovação!</p>
        </div>
        <div class="text-center">
            <button onclick="location.reload()"
                class="bg-blue-400 px-4 py-2 rounded-full text-light my-4">Refresh</button>
        </div>
        @endif
    </div>
</div>
@endsection