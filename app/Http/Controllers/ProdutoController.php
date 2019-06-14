<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models as Repository;

class ProdutoController extends Controller
{
    protected $produtoRepositorio;
    protected $precoProdutoRepositorio;

    public function __construct() {
        // $this->middleware('auth');
        $this->produtoRepositorio = new Repository\Produto;
        $this->precoProdutoRepositorio = new Repository\PrecoProduto;
    }

    public function index(Request $request) {
        $produtos = $this->produtoRepositorio->getAll();
        return view('produtos.index', compact('produtos'));
    }
    /**
     *
     * Insere um produto na Entidade Produto. (PERFIL ADMINISTRADOR)
     *
     * @param    request
     * @return      array
     * 
     */
    public function storeProduto(Request $request) {

        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('/assets/img'), $imageName);

        $params = [
            'id_categoria' => (int) $request->get('id_categoria'),
            'nome' => $request->get('nome'),
            'descricao' => $request->get('descricao'),
            'foto' => $imageName
        ];
        
        try {
            $responseID = $this->produtoRepositorio->store($params);
            if($responseID) {
                $paramsPreco = [
                    'id_produto' => $responseID,
                    'valor_pequeno' => $request->get('valor_pequeno'),
                    'valor_medio' => $request->get('valor_medio'),
                    'valor_grande' => $request->get('valor_grande')
                ];

                $responsePrecoID = $this->precoProdutoRepositorio->store($paramsPreco);
                if($responsePrecoID) {
                    session()->flash('success', 'Produto inserido com sucesso!');
                    return redirect()->action('AppController@index');
                }
            }
            return redirect()->action('AppController@index');
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->action('AppController@index');
        }
        
    }

    public function findProduct(Request $request) {
        $query = $this->produtoRepositorio->getAll();
        $searchName = $request->get('q');

        $searchResult = $query->filter(function ($item) use ($searchName) {
            return false !== stristr($item->nome, $searchName);
        });
       
        $produtos = $searchResult;
        return view('produtos.index', compact('produtos'));
    }

    public function findProductByCategory(Request $request) {
        $searchID = $request->get('q');
        $produtos = $this->produtoRepositorio->getByCategory($searchID);
       
        return view('produtos.index', compact('produtos'));
    }

    public function show(Request $request) {
        $item = $request->get('item');
        $precos = $this->precoProdutoRepositorio->getWithId($item['id']);
        return view('produtos.detProduto.detalheProduto', compact('item', 'precos'));
    }

    public function verifyAuth(Request $request) {
        $item = $request->get('item');
        $qtd = $item['quantidade'];
        $preco = $item['preco'];
        $preco_real = (float) $preco * (float) $qtd;
        
        $item['preco_real'] = $preco_real;
        $key = 'item'.$item['id'];
        $response = [
            'success' => false,
            'rota' => null
        ];
        
        if(\Auth::guest()) {
            $response['rota'] = route('authenticate');
            return $response;
        }

        session([$key => $item]);
        $response['success'] = true;
        $response['rota'] = route('produto.listar');
        return $response;
    }

    // $to_name = 'TO_NAME';
    // $to_email = 'TO_EMAIL_ADDRESS';
    // $data = array('name'=>"Sam Jose", "body" => "Test mail");
        
    // Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
    //     $message->to($to_email, $to_name)
    //             ->subject('Artisans Web Testing Mail');
    //     $message->from('FROM_EMAIL_ADDRESS','Artisans Web');
    // });
}