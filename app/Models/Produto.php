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
        // dd($params);
        return \DB::table($this->table)->insertGetId($params);
    }

    public function getByCategory($id) {
        return \DB::table($this->table)->whereIn('id_categoria', [$id])->get();
    }
}
