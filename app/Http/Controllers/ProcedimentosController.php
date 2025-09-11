<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProcedimentosController;

class ProcedimentosController extends Controller
{
    public function harmonizacaoFacial()
    {
        return view('harmonizacaoFacial');
    }

    public function preenchimentoLabial()
    {
        return view('preenchimentoLabial');
    }

    public function botox()
    {
        return view('botox');
    }

    public function ultraformer()
    {
        return view('ultraformer');
    }

    public function fiosSustentacao()
    {
        return view('fiosSustentacao');
    }
   
   
}
