<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    
    public function getAll() {
        return \DB::table($this->table)->get();
    }

    public function store($params) {
        $params['id_categoria'] = 1;
        return \DB::table($this->table)->insertGetId($params);
    }
}
