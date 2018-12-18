<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VanBan extends Model
{
    protected $table = 'vanban';
    protected $primaryKey = 'id_vb';

    public function linhvuc()
    {
        return $this->belongsTo('App\Models\LinhVuc', 'id_lv');
    }
}
