<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LinhVuc;
use App\Models\DichVu;
use App\Models\TaiLieu;
use Response;

class TaiLieuController extends Controller
{
    public function getTaiLieu(){
    	$data['linh_vuc'] = LinhVuc::where('level',2)->get();
        $data['tai_lieu'] = TaiLieu::orderBy('id_tl','desc')->paginate(6);
        $data['dich_vu'] = DichVu::get();
        return view('guest.tailieu',$data);
    }
    public function getPhanLoaiLinhVuc($slug){
        $data['linh_vuc'] = LinhVuc::where('level',2)->get();
        $linhvuc = LinhVuc::where('slug',$slug)->first();
        $data['tai_lieu'] = TaiLieu::where('id_lv',$linhvuc->id_lv)->orderBy('id_tl','desc')->paginate(6);
        $data['dich_vu'] = DichVu::get();
        return view('guest.tailieu',$data);
    }
    public function getDownloadTaiLieu($id){
        $tailieu = TaiLieu::find($id);
        $file = 'local/storage/app/public/images/images/tintuc/'.$tailieu->ten_file;
        return Response::download($file);
    }
}
