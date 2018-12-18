<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\YKienKhachHang;
use App\Models\DuAnTieuBieu;
use App\Models\LinhVuc;
use App\Models\VanBan;
use App\Models\DichVu;
use App\Models\Banner;
use Response;
class HomeController extends Controller
{
    public function getHome(){
        $data['y_kien'] = YKienKhachHang::get();
        $data['dichvu'] = DichVu::limit(6)->get();
        $data['banner'] = Banner::where('loai_banner','Trang chủ')->first();
    	return view('guest.home',$data);
    }

    
    // QUY TRÌNH THẨM ĐỊNH

    public function getQuyTrinhThamDinh(){
        return view('guest.quytrinhthamdinh');
    }

    // CÁC LĨNH VỰC THẨM ĐỊNH GIÁ

    public function getThamDinhGia(){
        return view('guest.thamdinhgia');
    }

    // TÀI LIỆU

    public function getTaiLieu(){
        return view('guest.tailieu');
    }

    // LIÊN HỆ

    public function getLienHe(){
        return view('guest.lienhe');
    }


}
