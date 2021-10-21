@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            
        @endforeach
    </ul>    
@endif

<form action="{{ route('projects.store') }}" method="post">
    
    @csrf
    <input type="text" name="name" id="name" value="{{ $project->name ?? old('name') }}" placeholder="Nome">
    <input type="text" name="description" id="description" value="{{ $project->description ?? old('description') }}" placeholder="description">
    <input type="text" name="id_owner" id="id_owner" value="{{ $project->id_owner ?? old('id_owner') }}" placeholder="id_owner">
    <input type="text" name="id_status" id="id_status" value="{{ $project->id_status ?? old('id_status') }}" placeholder="id_status">
    <input type="text" name="active" id="active" value="{{ $project->active ?? old('active') }}" placeholder="active">
    <button type="submit">Enviar</button>

</form>