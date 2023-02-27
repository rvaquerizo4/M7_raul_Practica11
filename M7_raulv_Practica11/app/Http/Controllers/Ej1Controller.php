<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ej1Controller extends Controller
{
    public function ej1Parametro($controladorEjercicio1)
    {

        return 'Éste es el resultado del primer ejercicio de la práctica hecha por ' . $controladorEjercicio1;
    }

    public function mostrarTexto($controladorEjercicio2)
    {
        $texto = "Éste es el resultado del primer ejercicio de la práctica hecha por " . $controladorEjercicio2;
        return view('primeraView')->with('texto', $texto);
    }

    public function modificacion($controladorEjercicio3, $practica, $nombre, $apellido)
    {
        $texto = "Éste es el resultado del " . $controladorEjercicio3 . " ejercicio de la " . $practica . " hecha por " . $nombre . " " . $apellido;
        return view('primeraView')->with('texto', $texto);
    }



}
