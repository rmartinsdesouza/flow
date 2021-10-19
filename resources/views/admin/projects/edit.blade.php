@extends('admin.layouts.app')

@section('title', 'Editar Projetos')

@section('content')
    <h1 >Edição do projeto {{ $project->name }}</h1>

   <form action="{{ route('projects.update', $project->id )}}" method="post">
     @method('put')
     @include('admin.projects._partials.form')
   </form>
@endsection