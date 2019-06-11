<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models as Repository;

class HomeController extends Controller
{
    private $categoriaRepositorio;
    private $produtoRepositorio;

    public function __construct() {
        $this->categoriaRepositorio = new Repository\Categoria;
        $this->produtoRepositorio = new Repository\Produto;
    }

    public function index() {
        $produtos = $this->produtoRepositorio->getAll();

        // $categorias = $this->categoriaRepositorio->obterCategorias();
        // return view('index.classic', ['produtos' => $produtos])->with(compact('categorias'));
        return view('main_page.index', compact('produtos'));
    }
}
