<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LinhVuc;
use File;

class LinhVucController extends Controller
{
     public function getLinhVuc(){
        $data['linh_vuc'] = LinhVuc::orderBy('id_lv','desc')->get();
        return view('admin.linhvuc.dslinhvuc',$data);
    }
    public function getThemLinhVuc(){
        return view('admin.linhvuc.themlinhvuc');
    }
    public function postThemLinhVuc(Request $rq){
        $linh_vuc = new LinhVuc;
        $linh_vuc->ten_lv = $rq->ten_lv;
        $linh_vuc->level = $rq->level;
        $linh_vuc->slug = str_slug($rq->ten_lv);
        $linh_vuc ->save();
        return redirect('quanlylinhvuc');
    }
    public function getSuaLinhVuc($id){
        $data['linh_vuc_cu'] = LinhVuc::where('id_lv',$id)->first();
        return view('admin.linhvuc.sualinhvuc',$data);
    }
    public function postSuaLinhVuc($id,Request $rq){
        $sualinhvuc = LinhVuc::find($id);
        $sualinhvuc->ten_lv =  $rq->ten_lv;
        $sualinhvuc->level = $rq->level;
        $linh_vuc->slug = str_slug($rq->ten_lv);
        $sualinhvuc->save();
        return redirect('quanlylinhvuc');

    }
    public function getXoaLinhVuc($id){
        LinhVuc::destroy($id);
        return back();
    }
}
