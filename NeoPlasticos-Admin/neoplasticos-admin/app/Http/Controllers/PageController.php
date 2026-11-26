<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function panel()
    {
        $clientes = 1248;
        $cotizaciones = 17;
        $ventas = 84300;
        $incidencias = 3;

        return view('panel', compact(
            'clientes',
            'cotizaciones',
            'ventas',
            'incidencias'
        ));
    }
}
