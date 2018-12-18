<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LoaiDoiTac;
use App\Models\DoiTac;
use App\Models\DichVu;

class DoiTacController extends Controller
{
    
    // ĐỐI TÁC

    public function getDoiTac(){
    	$data['linh_vuc'] = LoaiDoiTac::get();
    	$data['doi_tac'] = DoiTac::orderBy('id_dt','desc')->get();
        return view('guest.doitac',$data);
    }
    public  function getPhanLoaiDoiTac($slug){
    	$data['linh_vuc'] = LoaiDoiTac::get();
        $linhvuc = LoaiDoiTac::where('slug',$slug)->first();
        $data['doi_tac'] = DoiTac::where('id_ldt',$linhvuc->id_ldt)->orderBy('id_dt','desc')->get();
        $data['dich_vu'] = DichVu::get();
      
        return view('guest.doitac',$data);
    }
}
