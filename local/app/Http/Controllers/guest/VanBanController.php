<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LinhVuc;
use App\Models\VanBan;
use App\Models\DichVu;
use Response;


	// VĂN BẢN

class VanBanController extends Controller
{
     public function getVanBan(){
        $data['linh_vuc'] = LinhVuc::where('level',1)->get();
        $data['van_ban'] = VanBan::orderBy('id_vb','desc')->paginate(6);
        $data['dich_vu'] = DichVu::get();
        return view('guest.vanban',$data);
    }
    public function getPhanLoaiLinhVuc($slug){
        $data['linh_vuc'] = LinhVuc::where('level',1)->get();
        $linhvuc = LinhVuc::where('slug',$slug)->first();
        $data['van_ban'] = VanBan::where('id_lv',$linhvuc->id_lv)->orderBy('id_vb','desc')->paginate(6);
        $data['dich_vu'] = DichVu::get();
        return view('guest.vanban',$data);
    }
    public function getDownloadVanBan($id){
        $vanban = VanBan::find($id);
        $file = 'local/storage/app/public/images/images/tintuc/'.$vanban->ten_file;
        return Response::download($file);
    }
}
