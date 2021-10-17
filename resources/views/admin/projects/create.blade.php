@extends('admin.layouts.app')

@section('title', 'Criar Novo Projeto')


@section('content')

{{-- @if (isset($errors) && $errors->any()) --}}
{{-- @if($erros->any()) --}}
    {{-- <ul>
        @foreach($erros->all() as $error)
            <li>{{ $error }}</li>
            
        @endforeach
    </ul>    
@endif --}}

<h1>Novo Projeto</h1>

    <div>
        <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data"> 
        <form> 
            @csrf
            @include('admin.projects._partials.form')
        </form>
    </div>
@endsection
