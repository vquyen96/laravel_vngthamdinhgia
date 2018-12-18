<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    protected $table = 'dichvu';
    protected $primaryKey = 'id_dv';
    public function comment()
    {
        return $this->hasMany('App\Models\DuAnTieuBieu','id_dv');
    }
}
