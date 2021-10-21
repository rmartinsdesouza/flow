@extends('admin.layouts.app')


@section('content')

<h1> Status Detalhes </h1>

    {{ $state->id }}
    {{ $state->name }}
    {{ $state->description }}
    {{ $state->active }}

@endsection