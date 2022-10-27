<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class SelecoesController extends Controller
{
    public function ListaSelecoes()
    {
        return view('/listaSelecoes');
    }
};

