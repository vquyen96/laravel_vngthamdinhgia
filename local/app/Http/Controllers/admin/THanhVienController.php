<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use File;


class THanhVienController extends Controller
{
     public function getThanhVien(){
        $data['thanh_vien'] = User::get();
        return view('admin.thanhvien.dsthanhvien',$data);
    }
    public function getThemThanhVien(){
        return view('admin.thanhvien.themthanhvien');
    }

    public function postThemThanhVien(UserRequest $rq){
        $user = new User;  
        $user->email = $rq->email;
        $password = bcrypt($rq->password);
        $user->password = $password;
        $user->level = $rq->level;
        $user->save();
        return redirect('quanlythanhvien');
    }

    public function getSuaThanhVien($id){
        $data['thanh_vien_cu'] = User::where('id',$id)->first();
        return view('admin.thanhvien.suathanhvien',$data);
    }

    public function postSuaThanhVien($id,EditUserRequest $rq){

        $sua_thanh_vien = User::find($id);
        $sua_thanh_vien->email = $rq->email;

        $sua_thanh_vien->password = bcrypt($rq->password);

        $sua_thanh_vien->level = $rq->level;
        $sua_thanh_vien->save();

        return redirect('quanlythanhvien');
    }
    
    public function getXoaThanhVien($id){
        User::destroy($id);
        return back();
    }

}
