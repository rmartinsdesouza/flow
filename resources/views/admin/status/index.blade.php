@extends('admin.layouts.app')

@section('content')

<h2> View List Index </h2>

<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Descrição</td>
        <td>Ativo</td>
        <td>Ação</td>
    </tr>
    @foreach($status as $state)
        <tr>
            <td>{{ $state->id }}</td>
            <td>{{ $state->name }}</td>
            <td>{{ $state->description }}</td>
            <td>{{ $state->active }}</td>
            
            <td><a href="{{ route('status.show', $state->id) }}"> Detalhes</a></td>
            
        </tr>
    @endforeach
</table>
@endsection