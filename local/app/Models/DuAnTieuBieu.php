<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DuAnTieuBieu extends Model
{
    protected $table = 'duantieubieu';
    protected $primaryKey = 'id_da';

    public function dichvu()
    {
        return $this->belongsTo('App\Models\Dichvu', 'id_dv');
    }
}
