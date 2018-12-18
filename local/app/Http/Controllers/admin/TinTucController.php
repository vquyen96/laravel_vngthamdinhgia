<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TinTuc;
use App\Models\LoaiTin;
use File;

class TinTucController extends Controller
{
    public function getTinTuc(){
        $data['tin_tuc'] = TinTuc::orderBy('id_tt','desc')->get();
        return view('admin.tintuc.dstintuc',$data);
    }
     public function  getThemTinTuc(){
        $data['loai_tin'] = LoaiTin::get();
        return view('admin.tintuc.themtintuc',$data);
    }
    public function postThemTinTuc(Request $rq){
        $tintuc = new TinTuc;
        $tintuc->tieu_de = $rq->tieu_de;
         if($rq->noi_dung== null){
            $tintuc->noi_dung = "chưa có nội dung!";
        }
        else{
            $tintuc->noi_dung = $rq->noi_dung;
        }
        $tintuc->id_lt = $rq->id_lt;
        $tintuc->tom_tat = $rq->tom_tat;
        $tintuc->slug = str_slug($rq->tieu_de);


        if($rq->anh_tieu_de == ''){
            $filename = '29541772703_6ed8b50c47_b.jpg';
            
        }
        else{
            $filename = $rq->anh_tieu_de->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh_tieu_de->storeAs($path,$filename);
        }         
        $tintuc->anh_tieu_de = $filename;

        $tintuc->save();
        return redirect('quanlytintuc');
    }

    public function  getChiTietTinTuc($id){
        $data['chi_tiet_tin_Tuc'] = TinTuc::where('id_tt',$id)->first();
        $data['loai_tin'] = LoaiTin::get();
        return view('admin.tintuc.chitiettintuc',$data);
    }
    public function postSuaTinTuc($id,Request $rq){
        $sua_tin_tuc = TinTuc::find($id);
        $sua_tin_tuc->tieu_de = $rq->tieu_de;
        if($rq->noi_dung== null){
            $sua_tin_tuc->noi_dung = "chưa có nội dung!";
        }
        else{
            $sua_tin_tuc->noi_dung = $rq->noi_dung;
        }
        $sua_tin_tuc->id_lt = $rq->id_lt;
        $sua_tin_tuc->tom_tat = $rq->tom_tat;
        $sua_tin_tuc->slug = str_slug($rq->tieu_de);

        if(isset($rq->anh_tieu_de)){
            $filename = $rq->anh_tieu_de->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh_tieu_de->storeAs($path,$filename);   
            File::delete('local/storage/app/public/images/'.$sua_tin_tuc->anh_tieu_de);    
            $sua_tin_tuc->anh_tieu_de = $filename;  
        }

        $sua_tin_tuc->save();
        return redirect('quanlytintuc');
    }
    public function  getXoaTinTuc($id){
        $xoa_tin_tuc = TinTuc::find($id);
        File::delete('local/storage/app/public/images/'.$xoa_tin_tuc->anh_tieu_de);
        TinTuc::destroy($id);
        return back();
    }
}
