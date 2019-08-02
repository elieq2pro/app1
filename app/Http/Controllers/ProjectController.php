<?php

namespace App\Http\Controllers;

//use DB;
use App\Project;
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
        //it works but...
        //$portfolio = DB::table('projects')->get();
        //$portfolio = Project::orderBy('created_at','DESC')->get();
        //$projects = Project::latest('updated_at')->paginate(2);
        //laravel trae su propio orm Object-relational-mapping mapeo objeto-relacional
        //convertir Datos de la DB => Clase/Objecto PHP
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    //Route model binding : inyectar el modelo junto a la variable recibida por la ruta para buscarlo

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }
}
