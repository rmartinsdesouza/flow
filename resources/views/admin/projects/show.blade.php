@extends('admin.layouts.app')

@section('title', 'Detalhes dos projetos')

@section('content')
    <h1 >Detalhes dos projetos {{ $project->name }}</h1>

    <ul>
        <li><strong>Nome: </strong>{{ $project->name }}</li>
        <li><strong>Descrição: </strong>{{ $project->description }}</li>
        <li><strong>Resposável: </strong>{{ $project->id_owner }}</li>
        <li><strong>Status: </strong>{{ $project->id_status }}</li>
        <li><strong>Ativo: </strong>{{ $project->active }}</li>
    </ul>

    <form action="{{ route('projects.destroy', $project->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" >Deletar o project: {{ $project->name }}</button>
    </form>
@endsection