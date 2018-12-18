<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tintuc';
    protected $primaryKey = 'id_tt';
    public function loaitin()
    {
        return $this->belongsTo('App\Models\LoaiTin', 'id_lt');
    }
}
