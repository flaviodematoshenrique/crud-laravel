@extends('layouts.admin')

@section('title', 'Adição de Tarefas')

@section('content')
    <h1>Adição</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    @endif

    <form method="POST">
        @csrf

        <label>
            Titulo:<br/>
            <input type="text" name="titulo"/>
        </label>

        <input type="submit" value="Adicionar" />
    </form>

@endsection
