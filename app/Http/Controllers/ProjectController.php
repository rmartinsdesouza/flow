<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreupdateProject;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::paginate(5);

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    // Utiliza a class de request StoreupdateProject para validação ou inves do Resquest padrão 
    public function store(StoreupdateProject $request)
    {
        // dd($request->all());

        Project::create($request->all());
        
        return redirect()
            ->route('projects.index')
            ->with('message', 'Projeto Criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {               
        if (!$project = Project::find($id)) {
            return redirect()->route('projects.index');
        }
        //  dd($project->status);
        return view('admin.projects.show', compact('project'));        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$project = Project::find($id)) {
            return redirect()->back();
        }

        return view('admin.projects.edit', compact('project'));

    }

    public function update(StoreupdateProject $request, $id)
    {
        if (!$project = Project::find($id)) {
            return redirect()->back();
        }
        
        $project->update($request->all());

        return redirect()
                ->route('projects.index')
                ->with('message', 'Projeto atualizado com sucesso!');
    }


    public function search(Request $request)
    {
        $filters = $request->all();

        $projects = Project::where('name', 'LIKE', "%{$request->search}%")
                                ->orWhere('description', 'LIKE', "%{$request->search}%")
                                ->paginate();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$project = Project::find($id)) {
            return redirect()->route('projects.index');
        }
        
        $project->delete();

        return redirect()
            ->route('projects.index')
            ->with('message', 'Projeto Deletado com sucesso!');
    }

}
