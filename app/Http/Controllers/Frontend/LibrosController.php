<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        $ruta = storage_path('xml/libros.xml');

        if (!file_exists($ruta)) {
            return 'Archivo XML no encontrado.';
        }

        $xml = simplexml_load_file($ruta);
        $json = json_encode($xml);
        $libros = json_decode($json, true);

        return view('frontend.preferencias', ['libros' => $libros['libro']]);
    }
}
