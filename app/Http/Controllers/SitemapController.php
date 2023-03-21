<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Str;
class SitemapController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index($value = '')
    {
        $empresas = Empresa::latest()->get();

        return response()->view('sitemap', [
            'empresas' => $empresas
        ])->header('Content-Type', 'text/xml');
    }
}
