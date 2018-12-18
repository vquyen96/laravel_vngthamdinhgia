<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VanTai;
use App\Models\DichVu;
use File;
class VanTaiController extends Controller
{
    public function getDuAnTieuBieu(){

        $data['du_an_tieu_bieu']= VanTai::orderBy('id_da','desc')->get();
        return view('admin.duantieubieu.vantai.danhsach',$data);
    }
    public function  getChiTietDuAn($id){
        $data['chi_tiet_du_an'] = VanTai::where('id_da',$id)->first();
        return view('admin.duantieubieu.vantai.chitiet',$data);
    }
     public function  getThemDuAnTieuBieu(){
        return view('admin.duantieubieu.vantai.them');
    }
    public function postThemDuAnTieuBieu(Request $rq){
        $duantieubieu = new VanTai;
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
        return redirect('quanlyduantieubieu/vt');
    }
    public function getSuaDuAnTieuBieu($id){
        $data['sua_du_an_tieu_bieu'] = VanTai::where('id_da',$id)->first();
        return view('admin.duantieubieu.vantai.sua',$data);
    }
    public function postSuaDuAnTieuBieu($id,Request $rq){
        $suaduan = VanTai::find($id);     
        $suaduan->ten_da = $rq->ten_da;
        $suaduan->slug = str_slug($rq->ten_da);
        $suaduan->noi_dung =  $rq->noi_dung;
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
        return redirect('quanlyduantieubieu/vt');
    }
    public function getXoaDuAnTieuBieu($id){
        $xoaduan = VanTai::find($id);
        File::delete('local/storage/app/public/images/'.$xoaduan->anh_da);
        VanTai::destroy($id);
        return back();
    }
}
