<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'nivel';

    public function obterNiveis() {
        return \DB::table($this->table)->get();
    }
}
