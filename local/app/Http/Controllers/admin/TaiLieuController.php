<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TaiLieu;
use App\Models\LinhVuc;
use File;
use Response;

class TaiLieuController extends Controller
{
    public function  getTaiLieu(){
        $data['tai_lieu'] = TaiLieu::orderBy('id_tl', 'desc')->get();

        return view('admin.tailieu.dstailieu',$data);
    }
    public function  getThemTaiLieu(){
        $data['linh_vuc'] = LinhVuc::where('level',2)->get();
        return view('admin.tailieu.themtailieu',$data);
    }
    public function postThemTaiLieu(Request $rq){
        $tailieu = new TaiLieu;
        $tailieu->ten_tl = $rq->ten_tl;
        $tailieu->chu_thich = $rq->chu_thich;
        $tailieu->id_lv = $rq->id_lv;

        if($rq->anh_tl == ''){
            $filename = 'anhmacdinh.png';  
        }
        else{
            $filename = $rq->anh_tl->getClientOriginalName();
            $path = "public/images/images/tintuc";
            $filename = time().$filename;
            $rq->anh_tl->storeAs($path,$filename);
        }     
        $tailieu->anh_tl = $filename;

        $file = $rq->ten_file->getClientOriginalName();
        $path_file = "public/images/images/tintuc";
        $rq->ten_file->storeAs($path_file,$file);       
        $tailieu->ten_file = $file;

        $tailieu->save();

        return redirect('quanlytailieu');
    }
    public function  getSuaTaiLieu($id){
        $data['tai_lieu'] = TaiLieu::where('id_tl',$id)->first();
        $data['linh_vuc'] = LinhVuc::where('level',2)->get();
        return view('admin.tailieu.suatailieu',$data);
    }   
    public function postSuaTaiLieu($id,Request $rq){
        $tailieu = TaiLieu::find($id);
        $tailieu->ten_tl = $rq->ten_tl;
        $tailieu->chu_thich = $rq->chu_thich;
        $tailieu->id_lv = $rq->id_lv;

        if(isset($rq->anh_tl)){
            $filename = $rq->anh_tl->getClientOriginalName();
            $path = "public/images/images/tintuc";
            $filename = time().$filename;
            $rq->anh_tl->storeAs($path,$filename);   
            if($tailieu->anh_tl != 'anhmacdinh.png'){
                File::delete('local/storage/app/public/images/images/tintuc/'.$tailieu->anh_tl);    
            }
            $tailieu->anh_tl = $filename;  
        }

        if(isset($rq->ten_file)){
            $file = $rq->ten_file->getClientOriginalName();
            $path_file = "public/tailieu";
            $rq->ten_file->storeAs($path_file,$file);   
            File::delete('local/storage/app/public/images/images/tintuc/'.$tailieu->ten_file);  
            $tailieu->ten_file = $file;  
        }
        $tailieu->save();

         return redirect('quanlytailieu');
    }
    public function  getXoaTaiLieu($id){
        $xoa_tai_lieu = TaiLieu::find($id);
        File::delete('local/storage/app/public/images/images/tintuc'.$xoa_tai_lieu->ten_file);
        if($xoa_tai_lieu->anh_tl != 'anhmacdinh.png'){
             File::delete('local/storage/app/public/images/images/tintuc'.$xoa_tai_lieu->anh_tl);
        }
        TaiLieu::destroy($id);
        return back();
    
    }
    public function DownLoadTaiLieu($id){
        $tailieu = TaiLieu::find($id);
        $file = 'local/storage/app/public/images/images/tintuc/'.$tailieu->ten_file;
        if($tailieu->anh_tl != 'anhmacdinh.png'){
             File::delete('local/storage/app/public/images/images/tintuc'.$tailieu->anh_tl);
        }
        return Response::download($file);
    }
}
