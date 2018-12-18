<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaiLieu extends Model
{
    protected $table = 'tailieu';
    protected $primaryKey = 'id_tl';

    public function linhvuc()
    {
        return $this->belongsTo('App\Models\LinhVuc', 'id_lv');
    }
}
