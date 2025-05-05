<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        // obtenemos la ruta del archivo
        $ruta = storage_path('xml/libros.xml');

        // sino existe entonces lo notificamos
        if (!file_exists($ruta)) {
            return 'Archivo XML no encontrado.';
        }

        // cargamos e contenido del archivo XML
        $xml = simplexml_load_file($ruta);

        // Convertimos a json
        $json = json_encode($xml);

        // decodificamos de json a array asociativo
        $libros = json_decode($json, true);

        // retormamos la vista con la información
        return view('frontend.preferencias', ['libros' => $libros['libro']]);
    }
}
