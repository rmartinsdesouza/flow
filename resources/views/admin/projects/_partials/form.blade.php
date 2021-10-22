@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            
        @endforeach
    </ul>    
@endif

{{-- <form action="{{ route('projects.store') }}" method="post">
    
    @csrf --}}
    <input type="text" name="name" id="name" value="{{ $project->name ?? old('name') }}" placeholder="Nome">
    <input type="text" name="description" id="description" value="{{ $project->description ?? old('description') }}" placeholder="description">
    <input type="text" name="id_owner" id="id_owner" value="{{ $project->id_owner ?? old('id_owner') }}" placeholder="id_owner">
    <input type="text" name="id_status" id="id_status" value="{{ $project->id_status ?? old('id_status') }}" placeholder="id_status">
    <input type="text" name="active" id="active" value="{{ $project->active ?? old('active') }}" placeholder="active">
    <button type="submit">Enviar</button>


{{--
</form> --}}


    <form action="{{ route('projects.store') }}" method="post">
    @csrf

      <div class="flex items-center mb-5">

        <label for="name" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Nome</label>
        <input type="text" id="name" name="name" value="{{ $project->name ?? old('name') }}" placeholder="Nome" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </input>
      </div>

      <div class="flex items-center mb-5">

        <label for="name" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Descrição</label>

    <div class="flex items-center mb-5">
        <textarea rows="4" cols="33" maxlength="210" x-model="maximum" x-ref="maximum"
        id="description" name="description" placeholder="Descrição"
        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">{{ $project->description ?? old('description') }}</textarea>
    </div>

        </div>

        <div class="flex items-center mb-5">

        <label for="name" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Resposável</label>
        <input type="text" id="id_owner" name="id_owner" placeholder="Resposável" value="{{ $project->id_owner ?? old('id_owner') }}"
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </input>
      </div>


      <div class="flex items-center mb-5">
        
        <label for="number" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Select</label>
        <select class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
            {{-- @for($i = 0; $i < 10; $i++)
                <option>{{$i++}}</option>            
            @endfor --}}
 
                <option value="{{ $project->id_status }}">{{ $project->status->name }}</option>            
       
        </select>
      </div>

    
    <div class="mb-5">
        <label for="number" class="inline-block w-20 mr-6 text-right 
                font-bold text-gray-600">Ativo</label>                                 
        <label class="inline-flex items-center flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                text-gray-600 placeholder-gray-400
                outline-none">
            <input type="radio" class="form-radio" name="active" value="1" selected='selected'>
            <span class="ml-2">Sim</span>
        </label>
        <label class="inline-flex items-center flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                text-gray-600 placeholder-gray-400
                outline-none">
            <input type="radio" class="form-radio" name="active" value="0">
            <span class="ml-2">Não</span>
        </label>
    </div>
       
      <div class="text-right">
        <button class="py-3 px-8 bg-green-400 text-white font-bold">Submit</button> 
      </div>

</form>