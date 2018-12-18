<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BatDongSan;
use App\Models\DichVu;
use File;
class BatDongSanController extends Controller
{
    public function getDuAnTieuBieu(){

        $data['du_an_tieu_bieu']= BatDongSan::orderBy('id_da','desc')->get();
        return view('admin.duantieubieu.batdongsan.danhsach',$data);
    }
    public function  getChiTietDuAn($id){
        $data['chi_tiet_du_an'] = BatDongSan::where('id_da',$id)->first();
        return view('admin.duantieubieu.batdongsan.chitiet',$data);
    }
     public function  getThemDuAnTieuBieu(){
        return view('admin.duantieubieu.batdongsan.them');
    }
    public function postThemDuAnTieuBieu(Request $rq){
        $duantieubieu = new BatDongSan;
        $duantieubieu->ten_da = $rq->ten_da;            
        
        if($rq->noi_dung== null){
            $duantieubieu->noi_dung = "chưa có nội dung!";
        }
        else{
            $duantieubieu->noi_dung = $rq->noi_dung;
        }
        $duantieubieu->slug = str_slug($rq->ten_da);


        if($rq->anh_da == ''){
            $filename = '29541772703_6ed8b50c47_b.jpg';
        }
        else{
            $filename = $rq->anh_da->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh_da->storeAs($path,$filename);
        }

        $duantieubieu->anh_da = $filename;

        $duantieubieu->save();
        return redirect('quanlyduantieubieu/bds');
    }
    public function getSuaDuAnTieuBieu($id){
        $data['sua_du_an_tieu_bieu'] = BatDongSan::where('id_da',$id)->first();
        return view('admin.duantieubieu.batdongsan.sua',$data);
    }
    public function postSuaDuAnTieuBieu($id,Request $rq){
        $suaduan = BatDongSan::find($id);     
        $suaduan->ten_da = $rq->ten_da;
        $suaduan->slug = str_slug($rq->ten_da);
        if($rq->noi_dung== null){
            $suaduan->noi_dung = "chưa có nội dung!";
        }
        else{
            $suaduan->noi_dung = $rq->noi_dung;
        }

        if(isset($rq->anh_da)){
            $filename = $rq->anh_da->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh_da->storeAs($path,$filename);   
            File::delete('local/storage/app/public/images/'.$suaduan->anh_da);    
            $suaduan->anh_da = $filename;
        }

        $suaduan->save();
        return redirect('quanlyduantieubieu/bds');
    }
    public function getXoaDuAnTieuBieu($id){
        $xoaduan = BatDongSan::find($id);
        File::delete('local/storage/app/public/images/'.$xoaduan->anh_da);
        BatDongSan::destroy($id);
        return back();
    }
}
