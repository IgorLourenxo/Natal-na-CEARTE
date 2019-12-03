@extends('layouts.app')

@section('content')

{{-- Header --}}
@include('includes.header')

{{-- Main Content --}}
<main class="h-screen flex justify-center items-center | bg-image">
    <div class="container | w-full rounded-lg | mx-4 sm:mx-12 lg:mx-24 xl:mx-32 p-4 | bg-light">
        <form class="container mx-auto" method="POST" action="{{action('MessagesController@store')}}">
            @csrf
            {{-- Title --}}
            <h1 class="text-center font-black text-xl">Deixe a sua mensagem!</h1>
            <hr>
            {{-- Name --}}
            <input required type="text" name="name" placeholder="Qual o seu nome (primeiro e último)?"
                class="w-full rounded-lg px-4 py-2 my-2" minlength=5 maxlength=30>

            {{-- Course --}}
            <input required type="text" name="course" placeholder="Que curso frequenta?*"
                class="w-full rounded-lg px-4 py-2 mt-2" minlength=5 maxlength="41">
            <div class="text-center text-xs">*Caso seja docente do CEARTE, refira-se como tal!</div>

            {{-- Message --}}
            <textarea required name="message" rows="7"
                placeholder="Deixe aqui a sua mensagem natalícia! (máx. de 300 caratéres)"
                class="w-full rounded-lg px-4 py-2 my-2 resize-none" minlength=11 maxlength="300"></textarea>
            <hr>
            {{-- Submit --}}
            <div class="mx-auto text-center">
                <button type="submit"
                    class="bg-green-500 px-4 py-2 mt-4 rounded-lg text-light font-semibold | hover:bg-green-600 focus:bg-green-700">Submeter</button>
            </div>
            {{-- Warning --}}
            <div class="text-center text-xs mt-4">
                <strong>Atenção:</strong> A sua mensagem passará por uma breve análise
                antes de ser publicada, para evitar spam e/ou mensagens obscenas. É Natal - não faça mal!
                <br>
                Não se esqueça que logo depois de submeter a sua mensagem, irá ser redirecionado para a página principal. Dentro de poucos minutos a sua mensagem irá aparecer aí!
            </div>
        </form>
    </div>
</main>

{{-- Footer --}}
<footer class="fixed bottom-0 inset-x-0 bg-dark">
    <p class="text-sm sm:text-lg lg:text-2xl text-center text-light py-2">
        Obrigado pela participação e <strong class="text-green-400">Feliz Natal</strong>!
    </p>
</footer>

@endsection