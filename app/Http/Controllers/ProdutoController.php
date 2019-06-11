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

    public function index() {
        // $produtos = $this->produtoRepositorio->getAll();
        return view('produtos.produtos');
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
        request()->image->move(public_path('images'), $imageName);

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
                    return redirect()->action('HomeController@index');
                }
            }
            return redirect()->action('HomeController@index');
        } catch (\Throwable $th) {
            throw new Exception("Erro de Requisição", 1);
            return redirect()->action('HomeController@index');
        }
        
    }

    public function listar() {
        
        $produtos = $this->produtoRepositorio->getAll();

        return view('produtos.index', compact('produtos'));
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