<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models as Repository;

class HomeController extends Controller
{
    private $categoriaRepositorio;
    private $produtoRepositorio;

    public function __construct() {
        // $this->categoriaRepositorio = new Repository\Categoria;
        // $this->produtoRepositorio = new Repository\Produto;
    }

    public function index() {
        return view('home');
    }
}
