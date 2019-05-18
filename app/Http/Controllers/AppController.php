<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel as NivelRepository;

class AppController extends Controller
{
    private $nivel_acesso;

    public function __construct(NivelRepository $NivelRepositorio) {
        $this->nivel_acesso = $NivelRepositorio->obterNiveis();
    }

    public function index() {
        dd($this->nivel_acesso);
        return view('index', ['nivel_acesso' => $this->nivel_acesso]);
    }
}
