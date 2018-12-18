<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VanBan;
use App\Models\LinhVuc;
use File;
use Response;

class VanBanController extends Controller
{
    public function  getVanBan(){
        $data['van_ban'] = VanBan::orderBy('id_vb', 'desc')->get();
        return view('admin.vanban.dsvanban',$data);
    }
    public function  getThemVanBan(){
        $data['linh_vuc'] = LinhVuc::where('level',1)->get();
        return view('admin.vanban.themvanban',$data);
    }
    public function postThemVanBan(Request $rq){
        $vanban = new VanBan;
        $vanban->ten_vb = $rq->ten_vb;
        $vanban->chu_thich = $rq->chu_thich;
        $vanban->id_lv = $rq->id_lv;

        if($rq->anh_vb == ''){
            $filename = 'anhmacdinh.png';
        }
        else{
            $filename = $rq->anh_vb->getClientOriginalName();
            $path = "public/images/images/tintuc";
            $filename = time().$filename;
            $rq->anh_vb->storeAs($path,$filename);
        }      
        $vanban->anh_vb = $filename;

        $file = $rq->ten_file->getClientOriginalName();
        $path_file = "public/images/images/tintuc";
        $rq->ten_file->storeAs($path_file,$file);       
        $vanban->ten_file = $file;

        $vanban->save();

        return redirect('quanlyvanban');

    }
    public function  getSuaVanBan($id){
        $data['van_ban'] = VanBan::where('id_vb',$id)->first();
        $data['linh_vuc'] = LinhVuc::where('level',1)->get();
        return view('admin.vanban.suavanban',$data);
    }
    public function postSuaVanBan($id,Request $rq){
        $vanban = VanBan::find($id);
        $vanban->ten_vb = $rq->ten_vb;
        $vanban->chu_thich = $rq->chu_thich;
        $vanban->id_lv = $rq->id_lv;

        if(isset($rq->anh_vb)){
            $filename = $rq->anh_vb->getClientOriginalName();
            $path = "public/images/images/tintuc";
            $filename = time().$filename;
            $rq->anh_vb->storeAs($path,$filename); 
            if($vanban->anh_vb != 'anhmacdinh.png'){  
                File::delete('local/storage/app/public/images/images/tintuc/'.$vanban->anh_vb);   
            } 
            $vanban->anh_vb = $filename;  
        }

        if(isset($rq->ten_file)){
            $file = $rq->ten_file->getClientOriginalName();
            $path_file = "public/images/images/tintuc";
            $rq->ten_file->storeAs($path_file,$file);   
            File::delete('local/storage/app/public/images/images/tintuc/'.$vanban->ten_file);    
            $vanban->ten_file = $file;  
        }
        $vanban->save();

         return redirect('quanlyvanban');
    }

    public function DownLoadVanBan($id){
        $vanban = VanBan::find($id);
        $file = 'local/storage/app/public/images/images/tintuc/'.$vanban->ten_file;
        return Response::download($file);
    }
    public function  getXoaVanBan($id){
        $xoa_van_ban = VanBan::find($id);
        File::delete('local/storage/app/public/images/images/tintuc/'.$xoa_van_ban->ten_file);
        if($xoa_van_ban->anh_vb != 'anhmacdinh.png'){  
           File::delete('local/storage/app/public/images/images/tintuc/'.$xoa_van_ban->anh_vb);
        }
        VanBan::destroy($id);
        return back();
    }

}
