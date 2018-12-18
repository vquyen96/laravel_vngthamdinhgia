<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DichVu;
use File;
class DichVuController extends Controller
{
    public function getDichVu(){
        $data['dich_vu'] = DichVu::orderBy('id_dv', 'desc')->get();
    	return view('admin.dichvuthamdinh.dsdichvu',$data);
    }
    public function getChiTietDichVu($id){
        $data['dich_vu'] = DichVu::where('id_dv',$id)->first();
    	return view('admin.dichvuthamdinh.chitietdichvu',$data);
    }
    public function postSuaDichVu($id, Request $rq){
        $dichvu = DichVu::find($id);
        $dichvu->ten_dv = $rq->ten_dv;
        $dichvu->gioi_thieu = $rq->gioi_thieu;
       
        if($rq->quy_trinh== null){
            $dichvu->quy_trinh = "chưa có nội dung!";
        }
        else{
            $dichvu->quy_trinh = $rq->quy_trinh;
        }
        $dichvu->slug = str_slug($rq->ten_dv);

        if(isset($rq->baner)){
            $filename = $rq->baner->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->baner->storeAs($path,$filename);   
            File::delete('local/storage/app/public/images/'.$dichvu->baner);    
            $dichvu->baner = $filename;
        }

        if(isset($rq->logo)){
            $filename = $rq->logo->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->logo->storeAs($path,$filename);   
            File::delete('local/storage/app/public/images/'.$dichvu->logo);    
            $dichvu->logo = $filename;
        }

        $dichvu->save();
        return redirect('quanlydichvu');

    }
    public function getThemDichVu(Request $rq){
        
        return view('admin.dichvuthamdinh.themdichvu');
    } 
    public function postThemDichVu(Request $rq){
        $dichvu = new DichVu;
        $dichvu->ten_dv = $rq->ten_dv;
        $dichvu->gioi_thieu = $rq->gioi_thieu;
        if($rq->quy_trinh== null){
            $dichvu->quy_trinh = "chưa có nội dung!";
        }
        else{
            $dichvu->quy_trinh = $rq->quy_trinh;
        }
        $dichvu->slug = str_slug($rq->ten_dv);

        
        if($rq->baner == ''){
            $filename = '29541772703_6ed8b50c47_b.jpg';
        }
        else{
            $filename = $rq->baner->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->baner->storeAs($path,$filename);
        }          
        $dichvu->baner = $filename;

        if($rq->logo == ''){
            $filename = '29541772703_6ed8b50c47_b.jpg';
        }
        else{
            $filename = $rq->logo->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->logo->storeAs($path,$filename);
        }          
        $dichvu->logo = $filename;

        $dichvu->save();
        return redirect('quanlydichvu');
    }
    public function getXoaDichVu($id){
         DichVu::destroy($id);
        return back();
    }
}
