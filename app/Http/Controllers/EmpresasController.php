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
    public function index(Request $request)
    {
        //buscar por cualquier campo
        $search = $request->get('search');
        $all = Empresa::where('denominacion', 'like', '%' . $search . '%')
            ->orWhere('cif', 'like', '%' . $search . '%')
            ->orWhere('localidad', 'like', '%' . $search . '%')
            ->orWhere('provincia', 'like', '%' . $search . '%')
            ->orWhere('actividad_cnae', 'like', '%' . $search . '%')
            ->orWhere('forma_juridica', 'like', '%' . $search . '%')
            ->orWhere('objeto_social', 'like', '%' . $search . '%')->orderBy('denominacion', 'asc');
        $empresas = Empresa::search(request('search'))->cursorPaginate(15)->fragment('empresas');
        return view('empresas.index')
            ->with('empresas', $empresas)
            ->with('all', $all)
            ->with('search', $search);
    }

    public function show($denominacion, Request $request)
    {
        $empresa = Empresa::where('denominacion', str_replace('-', ' ', $denominacion))->firstOrFail();
        //buscar por cualquier campo
        $search = $request->get('search');
        $all = Empresa::where('denominacion', 'like', '%' . $search . '%')
            ->orWhere('cif', 'like', '%' . $search . '%')
            ->orWhere('localidad', 'like', '%' . $search . '%')
            ->orWhere('provincia', 'like', '%' . $search . '%')
            ->orWhere('actividad_cnae', 'like', '%' . $search . '%')
            ->orWhere('forma_juridica', 'like', '%' . $search . '%')
            ->orWhere('objeto_social', 'like', '%' . $search . '%')->orderBy('denominacion', 'asc');
        $empresas = Empresa::search(request('search'))->cursorPaginate(15)->fragment('empresas');
        return view('empresas.show')
            ->with('empresa', $empresa)
            ->with('search', $search);
    }
}
