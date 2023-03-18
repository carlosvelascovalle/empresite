<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facade;
use App\Models\Empresa;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $empresas son los datos que se pasan a la vista de las 10 empresas más antiguas
        $empresas = Empresa::orderBy('cif', 'desc')->take(5)->get();

        // Query que cuenta el numero total de localidades de las empresas sin repetir
        $numero_de_localidades = Empresa::select('localidad', \DB::raw('count(*) as total'))->groupBy('localidad')->get()->count();

        // $localidades_empresas son los datos que se pasan a la vista de todas las localidades de las empresas y la cantidad de empresas que hay en cada una de ellas un maximo de 8
        $localidades_empresas = Empresa::select('localidad', \DB::raw('count(*) as total'))->groupBy('localidad')->orderBy('total', 'desc')->take(8)->get();
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

        return view('welcome', ['empresas', $empresas], ['localidades_empresas', $localidades_empresas], ['numero_de_localidades', $numero_de_localidades], ['search', $search]);
    }
}
