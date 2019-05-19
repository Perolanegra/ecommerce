<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto as ProdutoRepository;

class ProdutoController extends Controller
{
    protected $produtos;

    public function __construct(ProdutoRepository $ProdutoRepositorio) {
        $this->produtos = $ProdutoRepositorio->obterProdutos();
    }

    public function index() {
        dd($this->produtos);
        $produtos = $this->produtos;
        return view('produtos/produtos')->with(compact('produtos'));
    }

    public function store(Request $request) {
        $params = [
            ''
        ];
    }

}