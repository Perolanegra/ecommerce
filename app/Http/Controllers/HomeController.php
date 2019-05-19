<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models as Repository;

class HomeController extends Controller
{
    private $categoriaRepositorio;

    public function __construct() {
        $this->categoriaRepositorio = new Repository\Categoria;
    }

    public function index() {
        $categorias = $this->categoriaRepositorio->obterCategorias();
        return view('index/index')->with(compact('categorias'));
    }
}
