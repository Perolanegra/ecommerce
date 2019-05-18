<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppRepository extends Controller
{
    protected function obterNivelLogado() {
        return DB::table('nivel')->get();
    }
}
