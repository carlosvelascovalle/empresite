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
            ->orWhere('objeto_social', 'like', '%' . $search . '%');
        $empresas = Empresa::search(request('search'))->orderBy('denominacion', 'asc')->cursorPaginate(15)->fragment('empresas');
        return view('empresas.index')
            ->with('empresas', $empresas)
            ->with('all', $all)
            ->with('search', $search);
    }

    public function show($provincia, $slug, Request $request)
    {
        $provincia_slug = Str::replace(' ', '-', $provincia);
        $empresa = Empresa::where('slug', $slug)->firstOrFail();
        $empresa = Empresa::where('provincia', str_replace(' ', '-', strtolower($provincia)))->firstOrFail();
        $search = $request->get('search');
        $all = Empresa::where('denominacion', 'like', '%' . $search . '%')
            ->orWhere('cif', 'like', '%' . $search . '%')
            ->orWhere('localidad', 'like', '%' . $search . '%')
            ->orWhere('provincia', 'like', '%' . $search . '%')
            ->orWhere('actividad_cnae', 'like', '%' . $search . '%')
            ->orWhere('forma_juridica', 'like', '%' . $search . '%')
            ->orWhere('objeto_social', 'like', '%' . $search . '%')->orderBy('denominacion', 'asc');
        $empresas = Empresa::search(request('search'))->orderBy('denominacion', 'asc')->cursorPaginate(15)->fragment('empresas');
        return view('empresas.show')
            ->with('empresas', $empresas)
            ->with('empresa', $empresa)
            ->with('search', $search);
    }
}
