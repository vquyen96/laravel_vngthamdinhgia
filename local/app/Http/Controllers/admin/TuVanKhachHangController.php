<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TuVanKhachHang;
use File;

class TuVanKhachHangController extends Controller
{
     public function  getTuVanKhachHang(){
        $data['tu_van'] = TuVanKhachHang::get();
        return view('admin.khachhang.tuvankhachhang',$data);
    }
    public function postTuVanKhachHang(Request $rq){
        $tuvan = new TuVanKhachHang;
        $tuvan->ho_ten = $rq->ho_ten;
        $tuvan->dien_thoai = $rq->dien_thoai;
        $tuvan->id_dv = $rq->id_dv;
        $tuvan->save();
        return back();    
    }
    public function  getXoaTuVanKhachHang($id){
        TuVanKhachHang::destroy($id);
        return back();
    }
    
}
