<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DoiTac;
use App\Models\LoaiDoiTac;
use File;

class DoiTacController extends Controller
{
    public function getDoiTac(){
        $data['doi_tac'] = DoiTac::orderBy('id_dt','desc')->get();
        $data['loai_doi_tac'] = LoaiDoiTac::orderBy('id_ldt','desc')->get();
        return view('admin.doitac.dsdoitac',$data);
    }
    public function getThemDoiTac(){
        $data['linh_vuc'] = LoaiDoiTac::get();
        return view('admin.doitac.themdoitac',$data);
    }
    public function postThemDoitac(Request $rq){
        $doitac = new DoiTac;
        $doitac->ten_dt = $rq->ten_dt;
        $doitac->dia_chi = $rq->dia_chi;
        $doitac->id_ldt = $rq->id_ldt;
        $doitac->save();
        return redirect ('quanlydoitac');
    } 
    public function getSuaDoiTac($id){
        $data['doi_tac_cu'] = DoiTac::where('id_dt',$id)->first();
        $data['linh_vuc'] = LoaiDoiTac::get();
        return view('admin.doitac.suadoitac',$data);
    }
    public function postSuaDoiTac($id,Request $rq){
        
        $sua_doi_tac = DoiTac::find($id);
        $sua_doi_tac->ten_dt = $rq->ten_dt;
        $sua_doi_tac->dia_chi = $rq->dia_chi;
        $sua_doi_tac->id_ldt = $rq->id_ldt;
        $sua_doi_tac->save();

        return redirect('quanlydoitac');
    }
    public function getXoaDoiTac($id){
        DoiTac::destroy($id);
        return back();
    }

    // Lĩnh Vực


    public function getThemLinhVuc(){
        return view('admin.doitac.themlinhvuc');
    }
    public function postThemLinhVuc(Request $rq){
        $linh_vuc = new LoaiDoiTac;
        $linh_vuc->ten_ldt = $rq->ten_ldt;
        $linh_vuc->save(); 
        return redirect('quanlydoitac');
    }
    public function getSuaLinhVuc($id){
        $data['linh_vuc'] = LoaiDoiTac::where('id_ldt',$id)->first();
        return view('admin.doitac.sualinhvuc',$data);

    }
    public function postSuaLinhVuc($id, Request $rq){
        $linh_vuc = LoaiDoiTac::find($id);
        $linh_vuc->ten_ldt = $rq->ten_ldt;
        $linh_vuc->save();
       
        return redirect('quanlydoitac');
    }
    public function getXoaLinhVuc($id){
        LoaiDoiTac::destroy($id);
        return back();
    }


}
