<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    
    private function obterProdutos() {
        return \DB::table($this->table)->get();
    }
}
