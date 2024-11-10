@extends('layouts.app')

@section('content')
<h1>Detalhes da Sala</h1>
<p><strong>Nome:</strong> {{ $sala->nome }}</p>
<a href="{{ route('salas.index') }}">Voltar</a>
@endsection
