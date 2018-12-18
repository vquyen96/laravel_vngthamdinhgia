<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TinTuc;
use App\Models\DichVu;

class TinTucController extends Controller
{
        // TIN TỨC

    public function getListTinTuc(){
    	$data['tin_tuc_chung_moi'] = TinTuc::where('id_lt',6)->orderBy('id_tt','desc')->limit(1)->first();
    	$data['tin_value'] = TinTuc::where('id_lt',2)->orderBy('id_tt','desc')->limit(1)->first();
    	$data['tin_tuc_chung'] = TinTuc::where('id_lt',6)->orderBy('id_tt','desc')->get();
    	$data['tin_tham_dinh'] = TinTuc::where('id_lt',3)->orderBy('id_tt','desc')->limit(3)->get();
        return view('guest.list-tintuc',$data);
    }
    public function getTinTuc($slug){
    	$data['tin_tuc'] = TinTuc::where('slug',$slug)->first();
    	$data['dich_vu'] = DichVu::get();
    	$data['tin_tuc_chung'] = TinTuc::where('id_lt',6)->orderBy('id_tt','desc')->limit(4)->get();
        return view('guest.tintuc',$data);
    }
}
