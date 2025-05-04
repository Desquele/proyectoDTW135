<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoapTemperaturaController extends Controller
{
    // Muestra el formulario de conversion
    public function index()
    {
        return view('frontend.soap'); 
    }

    // Procesa la conversión de temperatura al enviar el formulario
    public function convertir(Request $request)
    {
        // Captura los datos del formulario
        $tipo = $request->input('tipo');   
        $valor = $request->input('valor');  

        try {
            // Crea una instancia del cliente SOAP 
            $client = new \SoapClient('https://www.w3schools.com/xml/tempconvert.asmx?WSDL');

            if ($tipo === 'CelsiusToFahrenheit') {
                // Llama al metodo del servicio SOAP y accede al resultado
                $resultado = $client->CelsiusToFahrenheit(['Celsius' => $valor])->CelsiusToFahrenheitResult;
            } else {
                $resultado = $client->FahrenheitToCelsius(['Fahrenheit' => $valor])->FahrenheitToCelsiusResult;
            }

            return view('frontend.soap', compact('resultado', 'valor', 'tipo'));

        } catch (\Exception $e) {
            // Muestra un mensaje de error si la conexión falla
            return view('frontend.soap')->with('error', 'Error al conectar con el servicio SOAP.');
        }
    }
}
