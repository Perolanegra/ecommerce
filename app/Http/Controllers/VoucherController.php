<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models as Repository;

class VoucherController extends Controller
{
    protected $voucherRepositorio;

    public function __construct() {
        $this->voucherRepositorio = new Repository\Produto;
    }

    public function index() {
        //
    }
}
