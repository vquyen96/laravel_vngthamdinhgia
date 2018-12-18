<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TuVanKhachHang extends Model
{
    protected $table = 'tuvankhachhang';
    protected $primaryKey = 'id_tv';

    public function dichvu()
    {
        return $this->belongsTo('App\Models\DichVu', 'id_dv');
    }
}
