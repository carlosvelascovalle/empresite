<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facade;
use Illuminate\Support\Facades\View;
use App\Models\Empresa;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Support\Str;

class EmpresasController extends Controller
{
    /*public function index()
    {
        return view('empresas.index', [
            'empresas' => \DB::table('empresas')->orderBy('denominacion')->cursorPaginate(15)->fragment('empresas')
        ]);
    }*/
    public function index()
    {
        //buscar por cualquier campo
        $search_keywords = request('search_keywords');
        $all = Empresa::where('denominacion', 'like', '%' . $search_keywords . '%')->orWhere('cif', 'like', '%' . $search_keywords . '%')
            ->orWhere('localidad', 'like', '%' . $search_keywords . '%')
            ->orWhere('provincia', 'like', '%' . $search_keywords . '%')
            ->orWhere('actividad_cnae', 'like', '%' . $search_keywords . '%')
            ->orWhere('forma_juridica', 'like', '%' . $search_keywords . '%')
            ->orWhere('objeto_social', 'like', '%' . $search_keywords . '%')->orderBy('denominacion', 'asc');
        $empresas = Empresa::search(request('search'))->cursorPaginate(15)->fragment('empresas');
        return view('empresas.index', compact('empresas', 'search_keywords', 'all'));
    }

    public function show($denominacion)
    {
        $empresa = Empresa::where('denominacion', str_replace('-', ' ', $denominacion))->firstOrFail();
        //return view('empresas.show', compact('empresa'));
        //$empresa = Empresa::where('denominacion', $slug)->firstOrFail();
        return view('empresas.show', compact('empresa'));
    }
}
