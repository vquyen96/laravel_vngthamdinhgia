<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NhanSu;
class NhanSuController extends Controller
{
    public function getNhanSu(){
    	$data['nhan_su'] = NhanSu::orderBy('id_ns','desc')->get();
    	return view('guest.nhansu',$data);
    }
    public function getNhanSuDetail($slug){
    	$data['nhan_su_detail'] = NhanSu::where('slug',$slug)->first();
    	return view('guest.nhansu-detail',$data);
    }
}
