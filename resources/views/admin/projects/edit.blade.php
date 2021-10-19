@extends('admin.layouts.app')

@section('title', 'Edit do project')

@section('content')
    <h1 >Edição do projeto {{ $project->name }}</h1>

   <form action="{{ route('projects.update', $project->id )}}" method="POST">
    
        @csrf
        @method('put')
        <input type="text" name="name" id="name" value="{{ $project->name }}" >
        <input type="text" name="description" id="description" value="{{ $project->description }}" >
        <input type="date" name="create_project" id="create_project" value="{{ $project->create_project }}" >
        <input type="text" name="id_owner" id="id_owner" value="{{ $project->id_owner }}" >
        <input type="text" name="id_status" id="id_status" value="{{ $project->id_status }}" >
        <input type="text" name="active" id="active" value="{{ $project->active }}" >
        <button type="submit">Enviar</button>

   </form>
@endsection