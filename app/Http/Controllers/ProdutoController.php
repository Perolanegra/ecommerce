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
     * Insere um produto na Entidade Produto. (PERFIL PROPRIETÁRIO)
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
            'id_categoria' => $request->get('id'),
            'nome' => $request->get('nome'),
            'descricao' => $request->get('descricao'),
            'foto' => $imageName
        ];
        
        try {
            $response = $this->produtoRepositorio->store($params);
            if($response) {
                $paramsPreco = [
                    'id_produto' => $response,
                    'valor_pequeno' => $request->get('valor_pequeno'),
                    'valor_medio' => $request->get('valor_medio'),
                    'valor_grande' => $request->get('valor_grande')
                ];

                $responsePreco = $this->precoProdutoRepositorio->store($paramsPreco);
                if($responsePreco) {
                    session()->flash('success', 'Produto inserido com sucesso!');
                    return redirect()->action('AppController@index');
                }
            }
            return redirect()->action('AppController@index');
        } catch (\Throwable $th) {
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

    public function show(Request $request) {
        $item = $request->get('item');
        $precos = $this->precoProdutoRepositorio->getWithId($item['id']);
        return view('produtos.detProduto.detalheProduto', compact('item', 'precos'));
    }

    public function verifyAuth(Request $request) {
        $key = 'item'.$request->get('id');
        if(\Auth::user()) {
            session([$key => $request->all()]);
            return [true];
        }
        if(\Auth::guest()) {
            return redirect(route('login'));
        }
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