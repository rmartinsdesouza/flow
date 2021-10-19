@extends('admin.layouts.app')

@section('title', 'Criar Novo Projeto')

@section('content')

    <h1>Novo Projeto</h1>
    
    <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data"> 
        @include('admin.projects._partials.form')
    </form>
    
@endsection
