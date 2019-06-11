<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrecoProduto extends Model
{
    protected $table = 'preco_produto';
    
    public function store($params) {
        return \DB::table($this->table)->insertGetId($params);
    }

    public function getWithId($id) {
        return \DB::table($this->table)->whereIn('id', [$id])->get();
    }
}
