<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use File;
class BannerController extends Controller
{
    public function getList(){
    	$data['banner'] = Banner::orderBy('id','desc')->get();
    	return view('admin.banner.danhsach',$data);
    }

    public function getThemBanner(){
    	return view('admin.banner.them');
    }
    public function postThemBanner(Request $rq){

        $banner = new Banner;
        $banner->tieu_de = $rq->tieu_de;
        $banner->mo_ta = $rq->mo_ta;
        $banner->loai_banner = $rq->loai_banner;

        if($rq->anh == ''){
            $filename = '29541772703_6ed8b50c47_b.jpg';
        }
        else{
            $filename = $rq->anh->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh->storeAs($path,$filename);
        }         
        $banner->anh = $filename;
        $banner->save();
        return redirect('quanlybanner');
    }

    public function  getSuaBanner($id){
        $data['banner'] = Banner::where('id',$id)->first();
        return view('admin.banner.sua',$data);
    }
     public function postSuaBanner($id,Request $rq){
        $banner = Banner::find($id);
        $banner->tieu_de = $rq->tieu_de;
        $banner->mo_ta = $rq->mo_ta;
        $banner->loai_banner = $rq->loai_banner;

        if(isset($rq->anh)){
            $filename = $rq->anh->getClientOriginalName();
            $path = "public/images";
            $filename = time().$filename;
            $rq->anh->storeAs($path,$filename);   
            File::delete('local/storage/app/public/images/'.$banner->anh);    
            $banner->anh = $filename;
        }

        $banner->save();

        return redirect('quanlybanner');
    }
    public function  getXoaBanner($id){
        $banner = Banner::find($id);
        File::delete('local/storage/app/public/images/'.$banner->anh);
        Banner::destroy($id);
        return back();
    }
}
