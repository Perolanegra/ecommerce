<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria as CategoriaRepository;

class HomeController extends Controller
{
    private $categorias;

    public function __construct(CategoriaRepository $CategoriaRepositorio) {
        $this->categorias = $CategoriaRepositorio->obterCategorias();
    }

    public function index() {
        $categorias = $this->categorias;
        return view('index/index')->with(compact('categorias'));
    }
}