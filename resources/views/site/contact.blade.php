@extends('components.basepage')

@section('title', 'Contato')

@section('content')



<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            @component('components.form_contact', ['classe' => 'borda-preta'])
            @endcomponent
        </div>
    </div>
</div>


@endsection