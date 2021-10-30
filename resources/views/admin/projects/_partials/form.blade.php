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
<div class="container">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</div>