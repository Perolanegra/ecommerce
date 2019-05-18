<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AppRepository as Repository;

class AppController extends Controller
{
    private $nivel_acesso;

    public function __construct(Repository $AppRepositorio) {
        $this->nivel_acesso = $this->AppRepositorio->obterNivelLogado();
    }

    public function index() {
        dd($this->nivel_acesso);
        return view('greeting', ['nivel_acesso' => $this->nivel_acesso]);
    }
}
