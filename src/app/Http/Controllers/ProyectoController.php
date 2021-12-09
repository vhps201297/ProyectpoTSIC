<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Proyect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProyectoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Primera forma de pasar el objeto a la vista
        //$proyects = Proyect::latest()->get(); //Ascendente
        //se pude usar latest() para ordenar del último al primero.
        //return view('proyectos', compact('proyects'));

        // Segunda forma de pasar el objeto a la vista
        return view('projects/index',[
             'projects' => Proyect::latest()->get()
        ]);
    }

    public function show(Proyect $project){
        //return Proyect::find($id);
        return view('projects/show',[
            'project' => $project
        ]);
    }

    public function create(){
        return view('projects/create', [
            'project' => new Proyect()
        ]);
    }

    public function store(SaveProjectRequest $request){
        /*
        Proyect::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')
        ]);*/
        /* Se puede pasar como parámetro
        $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);*/
        $proyect = new Proyect($request->validated());
        $proyect->image = $request->file('image')->store('images'); //tomando disco por defecto para el segundo parámetro
        $proyect->save();
        //Proyect::create($request->validated());

        return redirect()->route('proyectos.index')->with('status', 'Se creó el proyecto con éxito');
    }

    public function edit(Proyect $project){
        return view('projects/edit',[
            'project' => $project
        ]);
    }

    public function update(Proyect $project, SaveProjectRequest $request){

        if($request->hasFile('image')){
            Storage::delete($project->image);
            $project->fill($request->validated());
            $project->image = $request->file('image')->store('images');
            $project->save();
        } else{
            $project->update(array_filter($request->validated()));
        }
        return redirect()->route('proyectos.show', $project)->with('status', 'Se actualizaron los cambios del proyecto con éxito');
    }


    public function destroy(Proyect $project){
        $project->delete();

        return redirect()->route('proyectos.index')->with('status','Se eliminó el proyecto con éxito');
    }
}
