<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NhanSu;
use File;

class NhanSuController extends Controller
{
    public function  getNhanSu(){
        $data['nhan_su'] = NhanSu::get();
        return view('admin.nhansu.dsnhansu',$data);
    }
    public function  getThemNhanSu(){
        return view('admin.nhansu.themnhansu');
    }
    public function  postThemNhanSu(Request $rq){
        $nhansu = new NhanSu;
        $nhansu->ho_ten = $rq->ho_ten;
        $nhansu->chuc_vu = $rq->chuc_vu;
        $nhansu->thong_tin = $rq->thong_tin;
        $nhansu->level = $rq->level;
        $nhansu->slug = str_slug($rq->ho_ten);


        if($rq->anh_ns == ''){
            $filename = '29541772703_6ed8b50c47_b.jpg';
            
        }
        else{
            $filename = $rq->anh_ns->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh_ns->storeAs($path,$filename);
        }          
        $nhansu->anh_ns = $filename;

        $nhansu->save();
        return redirect('quanlynhansu'); 
    } 
    public function  getSuaNhanSu($id){
        $data['nhan_su_cu'] = NhanSu::where('id_ns',$id)->first();
        return view('admin.nhansu.suanhansu',$data);
    }   
    public function  postSuaNhanSu($id,Request $rq){
        $sua_nhan_su = NhanSu::find($id);
        $sua_nhan_su->ho_ten = $rq->ho_ten;
        $sua_nhan_su->chuc_vu = $rq->chuc_vu;
        $sua_nhan_su->thong_tin = $rq->thong_tin;
        $sua_nhan_su->level = $rq->level;
        $sua_nhan_su->slug = str_slug($rq->ho_ten);

        if(isset($rq->anh_ns)){
            $filename = $rq->anh_ns->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh_ns->storeAs($path,$filename);   
            File::delete('local/storage/app/public/images/'.$sua_nhan_su->anh_ns);    
            $sua_nhan_su->anh_ns = $filename;  
        }

        $sua_nhan_su->save();
        return redirect('quanlynhansu');
    } 
    public function  getXoaNhanSu($id){
        $xoa_nhan_su = NhanSu::find($id);
        File::delete('local/storage/app/public/images/'.$xoa_nhan_su->anh_ns);
        NhanSu::destroy($id);
        return back();
    }
}
