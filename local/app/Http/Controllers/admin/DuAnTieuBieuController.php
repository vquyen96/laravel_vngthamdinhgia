<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DuAnTieuBieu;
use App\Models\DichVu;
use File;

class DuAnTieuBieuController extends Controller
{
    public function getDuAnTieuBieu(){

        $data['du_an_tieu_bieu']= DuAnTieuBieu::orderBy('id_da','desc')->get();
        return view('admin.duantieubieu.dsduantieubieu',$data);
    }
    public function  getChiTietDuAn($id){
        $data['chi_tiet_du_an'] = DuAnTieuBieu::where('id_da',$id)->first();
        $data['dich_vu'] = DichVu::get();
        return view('admin.duantieubieu.chitietduantieubieu',$data);
    }
     public function  getThemDuAnTieuBieu(){
        $data['dich_vu'] = DichVu::get();
        return view('admin.duantieubieu.themduantieubieu',$data);
    }
    public function postThemDuAnTieuBieu(Request $rq){
        $duantieubieu = new DuAnTieuBieu;
        $duantieubieu->ten_da = $rq->ten_da;
        $duantieubieu->id_dv = $rq->id_dv;              
        $duantieubieu->noi_dung = $rq->noi_dung;
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
        return redirect('quanlyduantieubieu');
    }
    public function getSuaDuAnTieuBieu($id){
        $data['sua_du_an_tieu_bieu'] = DuAnTieuBieu::where('id_da',$id)->first();
        $data['dich_vu'] = DichVu::get();
        return view('admin.duantieubieu.suaduantieubieu',$data);
    }
    public function postSuaDuAnTieuBieu($id,Request $rq){
        $suaduan = DuAnTieuBieu::find($id);     
        $suaduan->ten_da = $rq->ten_da;
        $suaduan->id_dv =  $rq->id_dv;
        $suaduan->slug = str_slug($rq->ten_da);
        $suaduan->noi_dung =  $rq->noi_dung;

        if(isset($rq->anh_da)){
            $filename = $rq->anh_da->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh_da->storeAs($path,$filename);   
            File::delete('local/storage/app/public/images/'.$suaduan->anh_da);    
            $suaduan->anh_da = $filename;
        }

        $suaduan->save();
        return redirect('quanlyduantieubieu');
    }
    public function getXoaDuAnTieuBieu($id){
        $xoaduan = DuAnTieuBieu::find($id);
        File::delete('local/storage/app/public/images/'.$xoaduan->anh_da);
        DuAnTieuBieu::destroy($id);
        return back();
    }
}
