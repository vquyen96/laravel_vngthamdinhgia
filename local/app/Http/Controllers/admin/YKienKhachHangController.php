<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\YKienKhachHang;
use File;

class YKienKhachHangController extends Controller
{
     public function  getYKienKhachHang(){
        $data['y_kien'] = YKienKhachHang::orderBy('id_yk','desc')->get();
        return view('admin.ykienkhachhang.dsykienkhachhang',$data);
    }
     public function  getSuaYKienKhachHang($id){
        $data['y_kien_cu'] = YKienKhachHang::where('id_yk',$id)->first();
        return view('admin.ykienkhachhang.suaykienkhachhang',$data);
    }
    public function postSuaYKienKhachHang($id,Request $rq){
        $y_kien = YKienKhachHang::find($id);
        $y_kien->ho_ten = $rq->ho_ten;
        $y_kien->chuc_vu = $rq->chuc_vu;
        $y_kien->noi_dung = $rq->noi_dung;

        if(isset($rq->anh_dd)){
            $filename = $rq->anh_dd->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh_dd->storeAs($path,$filename);   
            File::delete('local/storage/app/public/images/'.$y_kien->anh_dd);    
            $y_kien->anh_dd = $filename;
        }

        $y_kien->save();

        return redirect('ykienkhachhang');
    }
    public function  getThemYKienKhachHang(){
        return view('admin.ykienkhachhang.themykienkhachhang');
    }
    public function postThemYKienKhachHang(Request $rq){

        $y_kien = new YKienKhachHang;
        $y_kien->ho_ten = $rq->ho_ten;
        $y_kien->chuc_vu = $rq->chuc_vu;
        $y_kien->noi_dung = $rq->noi_dung;


        if($rq->anh_dd == ''){
            $filename = '29541772703_6ed8b50c47_b.jpg';
            
        }
        else{
            $filename = $rq->anh_dd->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh_dd->storeAs($path,$filename);
        }         
        $y_kien->anh_dd = $filename;

        $y_kien->save();
        return redirect('ykienkhachhang');
    }
    public function  getXoaYKienKhachHang($id){
        $xoaykien = YKienKhachHang::find($id);
        File::delete('local/storage/app/public/images/'.$xoaykien->anh_dd);
        YKienKhachHang::destroy($id);
        return back();
    }
}
