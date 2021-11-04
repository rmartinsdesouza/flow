@extends('admin.layouts.app')
@section('title', 'Listagem dos Projetos')
@section('module', 'Projetos')
@section('class-module')
@section('content')

{{-- <form action="{{ route('projects.search') }}" method="post">
  @csrf
  <input type="text" name="search" placeholder="Filtrar:">
  <button type="submit">Filtrar</button>
</form> --}}
<div class="row">
  <div class="col-lg-12">
    {{-- <a href="{{ route('projects.create') }}"> --}}
      @include('admin.layouts.btn-novo')
  </div>

</div>
<!-- START GRID -->
<div class="users-table table-wrapper">
  <table class="posts-table">
    <thead>
      <tr class="users-table-info">
        <th>
          <label class="users-table__checkbox ms-20">
            <input type="checkbox" class="check-all">
        </th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Dono</th>
        <th>Status</th>
        <th>Ativo</th>
        <th colspan="2">Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
      <tr>
        <td>
          <label class="users-table__checkbox">
            <input type="checkbox" class="check">
            {{-- <div class="categories-table-img">
              <picture>
                <source srcset="./elegant/img/categories/01.webp" type="image/webp"><img
                  src="./elegant/img/categories/01.jpg" alt="category">
              </picture>
            </div> --}}
          </label>
        </td>
        {{--
      <tr> --}}
        {{-- <td>{{ $project->id }}</td>
        <td>{{ $project->name }}</td>
        <td>{{ $project->description }}</td>
        <td>{{ $project->id_owner }}</td> --}}
        <td>
          <div class="pages-table-img">
            <picture>
              <source srcset="./elegant/img/avatar/avatar-face-04.webp" type="image/webp"><img
                src="./elegant/img/avatar/avatar-face-04.png" alt="User Name">
            </picture>
            {{ $project->name }}
          </div>
        </td>
        <td>{{ $project->description }}</td>
        <td>{{ $project->id_owner }}</td>
        <td><span class="badge-pending">{{ $project->status->name }}}</span></td>
        <td>{{ $project->active }}</td>
        <td>
          <span class="p-relative">
            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary btn-sm ">
              <span class="material-icons">
                search
              </span>
            </a>

            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm">
              <span class="material-icons">
                edit
              </span>
            </a>
        </td>
      </tr>
      @endforeach
      {{-- <tr>
        <td>
          <label class="users-table__checkbox">
            <input type="checkbox" class="check">
            <div class="categories-table-img">
              <picture>
                <source srcset="./elegant/img/categories/02.webp" type="image/webp"><img
                  src="./elegant/img/categories/02.jpg" alt="category">
              </picture>
            </div>
          </label>
        </td>
        <td>
          {{ $project->description }}
        </td>
        <td>
          <div class="pages-table-img">
            <picture>
              <source srcset="./elegant/img/avatar/avatar-face-03.webp" type="image/webp"><img
                src="./elegant/img/avatar/avatar-face-03.png" alt="User Name">
            </picture>
            Annette Black
          </div>
        </td>
        <td><span class="badge-pending">Pending</span></td>
        <td>23.04.2021</td>
        <td>
          <span class="p-relative">
            <button class="dropdown-btn transparent-btn" type="button" title="More info">
              <div class="sr-only">More info</div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-more-horizontal" aria-hidden="true">
                <circle cx="12" cy="12" r="1"></circle>
                <circle cx="19" cy="12" r="1"></circle>
                <circle cx="5" cy="12" r="1"></circle>
              </svg>
            </button>
            <ul class="users-item-dropdown dropdown">
              <li><a href="##">Edit</a></li>
              <li><a href="##">Quick edit</a></li>
              <li><a href="##">Trash</a></li>

            </ul>
          </span>
        </td>
      </tr>
      <tr>
        <td>
          <label class="users-table__checkbox">
            <input type="checkbox" class="check">
            <div class="categories-table-img">
              <picture>
                <source srcset="./elegant/img/categories/03.webp" type="image/webp"><img
                  src="./elegant/img/categories/03.jpg" alt="category">
              </picture>
            </div>
          </label>
        </td>
        <td>
          Helping a local business reinvent itself
        </td>
        <td>
          <div class="pages-table-img">
            <picture>
              <source srcset="./elegant/img/avatar/avatar-face-02.webp" type="image/webp"><img
                src="./elegant/img/avatar/avatar-face-02.png" alt="User Name">
            </picture>
            Kathryn Murphy
          </div>
        </td>
        <td><span class="badge-active">Active</span></td>
        <td>17.04.2021</td>
        <td>
          <span class="p-relative">
            <button class="dropdown-btn transparent-btn" type="button" title="More info">
              <div class="sr-only">More info</div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-more-horizontal" aria-hidden="true">
                <circle cx="12" cy="12" r="1"></circle>
                <circle cx="19" cy="12" r="1"></circle>
                <circle cx="5" cy="12" r="1"></circle>
              </svg>
            </button>
            <ul class="users-item-dropdown dropdown">
              <li><a href="##">Edit</a></li>
              <li><a href="##">Quick edit</a></li>
              <li><a href="##">Trash</a></li>
            </ul>
          </span>
        </td>
      </tr> --}}
      {{-- <tr>
        <td>
          <label class="users-table__checkbox">
            <input type="checkbox" class="check">
            <div class="categories-table-img">
              <picture>
                <source srcset="./elegant/img/categories/04.webp" type="image/webp"><img
                  src="./elegant/img/categories/04.jpg" alt="category">
              </picture>
            </div>
          </label>
        </td>
        <td>
          Caring is the new marketing
        </td>
        <td>
          <div class="pages-table-img">
            <picture>
              <source srcset="./elegant/img/avatar/avatar-face-05.webp" type="image/webp"><img
                src="./elegant/img/avatar/avatar-face-05.png" alt="User Name">
            </picture>
            Guy Hawkins
          </div>
        </td>
        <td><span class="badge-active">Active</span></td>
        <td>17.04.2021</td>
        <td>
          <span class="p-relative">
            <button class="dropdown-btn transparent-btn" type="button" title="More info">
              <div class="sr-only">More info</div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-more-horizontal" aria-hidden="true">
                <circle cx="12" cy="12" r="1"></circle>
                <circle cx="19" cy="12" r="1"></circle>
                <circle cx="5" cy="12" r="1"></circle>
              </svg>
            </button>
            <ul class="users-item-dropdown dropdown">
              <li><a href="##">Edit</a></li>
              <li><a href="##">Quick edit</a></li>
              <li><a href="##">Trash</a></li>
            </ul>
          </span>
        </td>
      </tr>
      <tr>
        <td>
          <label class="users-table__checkbox">
            <input type="checkbox" class="check">
            <div class="categories-table-img">
              <picture>
                <source srcset="./elegant/img/categories/01.webp" type="image/webp"><img
                  src="./elegant/img/categories/01.jpg" alt="category">
              </picture>
            </div>
          </label>
        </td>
        <td>
          How to build a loyal community online and offline
        </td>
        <td>
          <div class="pages-table-img">
            <picture>
              <source srcset="./elegant/img/avatar/avatar-face-03.webp" type="image/webp"><img
                src="./elegant/img/avatar/avatar-face-03.png" alt="User Name">
            </picture>
            Robert Fox
          </div>
        </td>
        <td><span class="badge-active">Active</span></td>
        <td>17.04.2021</td>
        <td>
          <span class="p-relative">
            <button class="dropdown-btn transparent-btn" type="button" title="More info">
              <div class="sr-only">More info</div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-more-horizontal" aria-hidden="true">
                <circle cx="12" cy="12" r="1"></circle>
                <circle cx="19" cy="12" r="1"></circle>
                <circle cx="5" cy="12" r="1"></circle>
              </svg>
            </button>
            <ul class="users-item-dropdown dropdown">
              <li><a href="##">Edit</a></li>
              <li><a href="##">Quick edit</a></li>
              <li><a href="##">Trash</a></li>
            </ul>
          </span>
        </td>
      </tr>
      <tr>
        <td>
          <label class="users-table__checkbox">
            <input type="checkbox" class="check">
            <div class="categories-table-img">
              <picture>
                <source srcset="./elegant/img/categories/03.webp" type="image/webp"><img
                  src="./elegant/img/categories/03.jpg" alt="category">
              </picture>
            </div>
          </label>
        </td>
        <td>
          How to build a loyal community online and offline
        </td>
        <td>
          <div class="pages-table-img">
            <picture>
              <source srcset="./elegant/img/avatar/avatar-face-03.webp" type="image/webp"><img
                src="./elegant/img/avatar/avatar-face-03.png" alt="User Name">
            </picture>
            Robert Fox
          </div>
        </td>
        <td><span class="badge-active">Active</span></td>
        <td>17.04.2021</td>
        <td>
          <span class="p-relative">
            <button class="dropdown-btn transparent-btn" type="button" title="More info">
              <div class="sr-only">More info</div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-more-horizontal" aria-hidden="true">
                <circle cx="12" cy="12" r="1"></circle>
                <circle cx="19" cy="12" r="1"></circle>
                <circle cx="5" cy="12" r="1"></circle>
              </svg>
            </button>
            <ul class="users-item-dropdown dropdown">
              <li><a href="##">Edit</a></li>
              <li><a href="##">Quick edit</a></li>
              <li><a href="##">Trash</a></li>
            </ul>
          </span>
        </td>
      </tr> --}}
    </tbody>
  </table>

</div>
<!-- END GRID -->



@if(isset($filters))
<{{ $projects->appends($projects)->links() }}
  @else
  {{ $projects->links() }}
  @endif
  @endsection