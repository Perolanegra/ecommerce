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

    private function index() {
        // dd($this->produtos);
    }

    private function store(Request $request) {
        $params = [
            ''
        ];
    }

}