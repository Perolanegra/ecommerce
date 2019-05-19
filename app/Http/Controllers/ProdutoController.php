<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models as Repository;

class ProdutoController extends Controller
{
    protected $produtoRepositorio;

    public function __construct() {
        $this->produtoRepositorio = new Repository\Produto;
    }

    public function index() {
        $produtos = $this->produtoRepositorio->obterProdutos();
        return view('produtos/produtos')->with(compact('produtos'));
    }

    /**
     *
     * Insere um produto na Entidade Produto. (PERFIL PROPRIETÁRIO)
     *
     * @param    request
     * @return      array
     * 
     */
    public function storeProduto(Request $request) {
        $params = [
            'id_categoria' => $request->get('id'),
            'nome' => $request->get('nome'),
            'descricao' => $request->get('descricao'),
            'foto' => $request->get('foto')
        ];

        $objetoProduto = $request->all();
        dd($objetoProduto);
        // insert into Produto values(null, 1, 'Cuscuz Fitness', 'Contém flocos de milho, flocos de aveia, molho de tomate, ricota, atum e banana da terra.', 'fitness.jpg', now(), null, null);
        // insert into preco_produto values (null, 20, 8.00, 16.00, 32.00, now(), null, null);

        // id int(11) auto_increment not null primary key unique,
        // id_categoria int(11) not null,
        // nome varchar(100) not null,
        // descricao varchar(500) not null,
        // foto varchar(75),
        // data_cadastro timestamp default now() not null,
        // data_atualizado timestamp,
        // data_deletado timestamp
    }
}