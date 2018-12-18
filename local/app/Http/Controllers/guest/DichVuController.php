<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DichVu;
use Response;
use App\Models\Banner;
class DichVuController extends Controller
{
    // DỊCH VỤ

    public function getDichVu(){
    	$data['dich_vu'] = DichVu::limit(6)->get();
        $data['banner'] = Banner::where('loai_banner','Dịch vụ')->first();
    	return view('guest.dichvu',$data);
    }
    public function getThamDinhGia($slug){
    	$data['dich_vu'] = DichVu::get();
    	$data['chi_tiet_dich_vu'] = DichVu::where('slug',$slug)->first();
    	return view('guest.thamdinhgia',$data);
    }
    public function DownloadProfile(){
        $file = 'local/storage/app/public/profile-tdg/Profile-TDG-2015final.pdf';
        return Response::download($file);
    }
}
