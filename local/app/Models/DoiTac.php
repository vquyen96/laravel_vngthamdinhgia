<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoiTac extends Model
{
    protected $table = 'doitac';
    protected $primaryKey = 'id_dt';

    public function loaidoitac()
    {
        return $this->belongsTo('App\Models\LoaiDoiTac', 'id_ldt');
    }
}
