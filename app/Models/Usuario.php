<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    public $timestamps = false;

    private function obterUsuarios() {
        return \DB::table($this->table)->get();
    }
}