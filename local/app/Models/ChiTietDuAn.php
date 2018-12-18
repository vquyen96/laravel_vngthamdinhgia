<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietDuAn extends Model
{
    protected $table = 'chitietduan';
    protected $primaryKey = 'id_ctda';

    public function duantieubieu()
    {
        return $this->belongsTo('App\Models\DuAnTieuBieu', 'id_da');
    }
}
