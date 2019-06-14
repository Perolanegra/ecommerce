<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria_produto';

    public function obterCategorias() {
        return \DB::table($this->table)->get();
    }

}
