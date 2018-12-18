<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NhanSu;
use App\Models\Banner;
class GioiThieuController extends Controller
{
    // GIỚI THIỆU

    public function getGioiThieu(){
        $data['nhan_su'] = NhanSu::where('level', 1)->orderBy('id_ns','desc')->limit(2)->get();
        $data['banner'] = Banner::where('loai_banner','Giới thiệu')->first();
    	return view('guest.gioithieu',$data);
    }
}
