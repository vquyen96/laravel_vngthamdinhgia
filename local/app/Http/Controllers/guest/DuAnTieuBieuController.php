<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DichVu;
use App\Models\DuAnTieuBieu;
use App\Models\BatDongSan;
use App\Models\MayMoc;
use App\Models\VanTai;
class DuAnTieuBieuController extends Controller
{
    
    // DỰ ÁN TIÊU BIỂU

    public function getDuAnTieuBieu(){
    	$data['da_van_tai'] = VanTai::orderBy('id_da','desc')->limit(3)->get();
    	$data['da_bat_dong_san'] = BatDongSan::orderBy('id_da','desc')->limit(6)->get();
    	$data['da_may_moc'] = MayMoc::orderBy('id_da','desc')->limit(4)->get();
    	return view('guest.duantieubieu',$data);
    }
    public function getChiTietDuAnBatDongSan($slug){
    	$data['chi_tiet_du_an'] = BatDongSan::where('slug',$slug)->first();
    	 $data['dich_vu'] = DichVu::get();
        return view('guest.chitietduantieubieu',$data);
    }
    public function getChiTietDuAnVanTai($slug){
        $data['chi_tiet_du_an'] = VanTai::where('slug',$slug)->first();
         $data['dich_vu'] = DichVu::get();
        return view('guest.chitietduantieubieu',$data);
    }
    public function getChiTietDuAnMayMoc($slug){
        $data['chi_tiet_du_an'] = MayMoc::where('slug',$slug)->first();
         $data['dich_vu'] = DichVu::get();
        return view('guest.chitietduantieubieu',$data);
    }
}
