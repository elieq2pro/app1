<?php

namespace App\Http\Controllers;

//use DB;
use App\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
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
        $projects = Project::latest('updated_at')->paginate(2);
        //laravel trae su propio orm Object-relational-mapping mapeo objeto-relacional
        //convertir Datos de la DB => Clase/Objecto PHP
        return view('portfolio', [
            'projects' => Project::latest()->paginate()
        ]);
    }
}
