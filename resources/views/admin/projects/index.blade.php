@extends('admin.layouts.app')
@section('title', 'Listagem dos Projetos')
@section('content')
<a href="{{ route('projects.create') }}">Criar Novo</a>


<form action="{{ route('projects.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form>

<h1>Projetos</h1>


{{-- Grid --}}
<!-- component -->
<section class="container mx-auto p-6 font-mono">
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Descrição</th>
            <th class="px-4 py-3">Dono</th>
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3">Ativo</th>
            <th class="px-4 py-3">Ação</th>
          </tr>
        </thead>
        <tbody class="bg-white">

        @foreach ($projects as $project)  
          <tr class="text-gray-700">
            <td class="px-4 py-3 border">
              <div class="flex items-center text-sm">
                <div>
                  <p class="font-semibold text-black">{{ $project->id }}</p>                  
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $project->name }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $project->description }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $project->id_owner }}</td>
            <td class="px-4 py-3 text-xs border">
              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{ $project->status->name }} </span>
            </td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $project->active }}</td>
            <td class="px-4 py-3 text-sm border">
                    <a href="{{ route('projects.show', $project->id) }}" >Ver</a>
                    <a href="{{ route('projects.edit', $project->id) }}" >Edit</a>
            </td>
          </tr>
        @endforeach

        </tbody>
      </table>
    </div>
  </div>
</section>
{{-- Grid --}}
<hr>
@if(isset($filters))
    {{ $projects->appends($projects)->links() }}
@else
    {{ $projects->links() }}
@endif
@endsection