<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models as Repository;

class AppController extends Controller
{
    protected $produtoRepositorio;
    protected $precoProdutoRepositorio;

    public function __construct() {
        $this->produtoRepositorio = new Repository\Produto;
        // $this->precoProdutoRepositorio = new Repository\PrecoProduto;
    }

    public function index() {
        $produtos = $this->produtoRepositorio->getAll();
        return view('main_page.index', compact('produtos'));
    }
}
