{{-- @extends('admin.layouts.app') --}}
@section('title', 'Listagem dos Projetos')
@section('content')




{{-- <form action="{{ route('projects.search') }}" method="post">
  @csrf
  <input type="text" name="search" placeholder="Filtrar:">
  <button type="submit">Filtrar</button>
</form> --}}


<!-- START ROW -->
{{-- Rodrigo --}}
<div class="row">
  <div class="form-group mb-0">
    <form role="search" class="app-search" action="{{ route('projects.search') }}" method="post">
      @csrf
      <ul><input type="text" class="form-control" name="search" placeholder="Filtrar.."></ul>
      <ul><button type="submit"><i class="fa fa-search"></i></button></ul>


      {{-- <ul><a href="{{ route('projects.create') }}">Criar Novo</a></ul> --}}

  </div>
  </form>
</div>


<div class="row">
  <div class="col-xl-12">
    <div class="card m-b-30">
      <div class="card-body">
        <h4 class="mt-0 header-title mb-4">    <ul><a href="{{ route('projects.create') }}">
          Criar Novo</a></ul></h4>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Dono</th>
                <th scope="col">Status</th>
                <th scope="col">Ativo</th>
                <th scope="col" colspan="2">Ação</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($projects as $project)
              <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->id_owner }}</td>

                <td><span class="badge badge-success">{{ $project->status->name }}</span></td>
                <td>Ativo</td>
                {{-- <td>
                  <div>
                    <img src="/images/user-2.jpg" alt="" class="thumb-md rounded-circle mr-2"> Jassa
                  </div>
                </td>
                <td>Ludhiana</td>
                <td>15/1/2021</td> --}}

                <td>
                  <div>
                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                      </svg>
                      {{-- Ver --}}
                    </a>

                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                      </svg>
                      {{-- Edit --}}
                    </a>

                  </div>
                </td>
              </tr>

              {{-- <tr>
                <td>Jassa</td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>$3,120,000</td>
                <td>
                  <div>
                    <img src="/images/user-3.jpg" alt="" class="thumb-md rounded-circle mr-2"> Jassa
                  </div>
                </td>
                <td>Ludhiana</td>
                <td>16/1/2021</td>

                <td>
                  <div>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Jassa</td>
                <td><span class="badge badge-success">Delivered</span></td>
                <td>$6,360,000</td>
                <td>
                  <div>
                    <img src="/images/user-4.jpg" alt="" class="thumb-md rounded-circle mr-2"> Jassa
                  </div>
                </td>
                <td>Ludhiana</td>
                <td>17/1/2021</td>

                <td>
                  <div>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Jassa</td>
                <td><span class="badge badge-danger">Cancel</span></td>
                <td>$5,200,000</td>
                <td>
                  <div>
                    <img src="/images/user-5.jpg" alt="" class="thumb-md rounded-circle mr-2"> Jassa
                  </div>
                </td>
                <td>Ludhiana</td>
                <td>18/1/2021</td>

                <td>
                  <div>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Jassa</td>
                <td><span class="badge badge-success">Delivered</span></td>
                <td>$7,250,000</td>
                <td>
                  <div>
                    <img src="/images/user-6.jpg" alt="" class="thumb-md rounded-circle mr-2"> Jassa
                  </div>
                </td>
                <td>Ludhiana</td>
                <td>19/1/2021</td>

                <td>
                  <div>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                  </div>
                </td>
              </tr> --}}
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

</div>
<!-- END ROW -->

<hr>
@if(isset($filters))
{{ $projects->appends($projects)->links() }}
@else
{{ $projects->links() }}
@endif
@endsection


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-danger">11</span>
          </i>
          Link
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-warning">11</span>
          </i>
          Disabled
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-envelope-o">
            <span class="badge badge-primary">11</span>
          </i>
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell">
            <span class="badge badge-info">11</span>
          </i>
          Test
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-globe">
            <span class="badge badge-success">11</span>
          </i>
          Test
        </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>