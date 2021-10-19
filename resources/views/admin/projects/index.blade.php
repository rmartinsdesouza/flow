<h1>Listagem dos Projetos</h1>
<a href="{{ route('projects.create') }}">Criar Novo</a>

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<form action="{{ route('projects.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Dono</th>
            <th>Status</th>
            <th>Ativo</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->id_owner }}</td>
                <td>{{ $project->id_status }}</td>
                <td>{{ $project->active}}</td>
                <td>
                    <a href="{{ route('projects.show', $project->id) }}" >Ver</a>
                    <a href="{{ route('projects.edit', $project->id) }}" >Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<hr>
@if(isset($filters))
    {{ $projects->appends($projects)->links() }}
@else
    {{ $projects->links() }}
@endif