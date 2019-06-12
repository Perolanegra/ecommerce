<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    protected $keys = [
        'item1' => 1, 'item2' => 2, 'item3' => 3, 'item4' => 4, 'item5' => 5, 'item6' => 6,
        'item7' => 7, 'item8' => 8, 'item9' => 9, 'item10' => 10, 'item11' => 11, 'item12' => 12,
        'item13' => 13, 'item14' => 14, 'item15' => 15, 'item16' => 16, 'item17' => 17,
        'item18' => 18, 'item19' => 19, 'item20' => 20
    ];

    public function index() {
        $session = collect(\session()->all());
        $keys = collect($this->keys);
        $produtos = [];
        $valor_total = 0;

        foreach ($keys as $row) {
            $key = 'item'.$row;
            if($session->has($key)) {
                $refProduto[$key] = $session->get($key);
                $produtos[$key] = $refProduto[$key];
                $produtos[$key]['preco'] = 'R$ '.$refProduto[$key]['preco'].',00';
                $produtos[$key]['id_row'] = 'row'.$row;
                $valor_total += (float) $refProduto[$key]['preco'];
            }
        }

        $produtos = collect($produtos);
        return view('carrinho.carrinho', compact('produtos', 'valor_total'));
    }

    public function atualizar(Request $request) {
        $item = collect($request->get('item'));
        $key = 'item'.$item->get('id');
        session()->forget($key);
       
        return session()->has($key) ? ['success' => false] : ['success' => true];
    }
}
