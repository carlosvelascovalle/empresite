<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facade;
use Illuminate\Support\Facades\View;
use App\Models\Empresa;

class EmpresasController extends Controller
{
    public function index()
    {
        return view('empresas.index', [
            'empresas' => \DB::table('empresas')->orderBy('denominacion')->cursorPaginate(15)->fragment('empresas')
        ]);
    }
    // Funcion que muestra los datos de una empresa en concreto en la vista show.blade.php de la carpeta empresas con la denominacion de la empresa en el titulo de la pagina
    /*public function show($id)
    {
        $empresa = Empresa::find($id);
        return view::make('empresas.show')->with('empresa', $empresa)->with('title', str_replace("/", "", str_replace(" ", "-", str_replace(".", "", $empresa->denominacion))));
    }*/
    public function show($denominacion)
    {
        // Devuelve la vista show.blade.php de la carpeta empresas con la denominacion de la empresa en el titulo de la pagina quitando los caracteres especiales
        $empresa = Empresa::where('denominacion', str_replace("-", " ", $denominacion))->firstOrFail();
        /*
        $empresa = Empresa::where('denominacion', $slug)->firstOrFail();
        return view('empresas.show', compact('empresa'));*/
    }
    /*public function show($id)
    {
        $empresa = Empresa::find($id);
        return view::make('empresas.show')->with('empresa', $empresa)->with('title', $empresa->denominacion);
        //view('empresas.show', compact('empresa'));
    }*/
}
