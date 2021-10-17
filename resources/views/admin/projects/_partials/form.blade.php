{{-- @if($erros->any())
    <ul>
        @foreach($erros->all() as $error)
            <li>{{ $error }}</li>
            
        @endforeach
    </ul>    
@endif --}}


@csrf
<input type="text" name="name" id="name" value="{{ $project->name ?? old('name') }}" placeholder="Nome">
<input type="text" name="description" id="description" value="{{ $project->description ?? old('description') }}" placeholder="description">
<input type="date" name="create_project" id="create_project" value="{{ $project->create_project ?? old('create_project') }}" placeholder="create_project">
<input type="text" name="id_owner" id="id_owner" value="{{ $project->id_owner ?? old('id_owner') }}" placeholder="id_owner">
<input type="text" name="id_status" id="id_status" value="{{ $project->id_status ?? old('id_status') }}" placeholder="id_status">
<input type="text" name="active" id="active" value="{{ $project->active ?? old('active') }}" placeholder="active">
<button type="submit">Enviar</button>