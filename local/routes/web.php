<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'guest'], function() {


    // HOME

    Route::get('/','HomeController@getHome');

    // GIỚI THIỆU

    Route::get('gioithieu','GioiThieuController@getGioiThieu');

    // DỊCH VỤ

    Route::get('dichvu','DichVuController@getDichVu');
    Route::get('thamdinhgia/{slug}','DichVuController@getThamDinhGia');
    Route::get('downloadprofile','DichVuController@DownloadProfile');

    // DỰ ÁN TIÊU BIỂU

    Route::get('duantieubieu','DuAnTieuBieuController@getDuAnTieuBieu');
    Route::get('chitietduantieubieu/batdongsan/{slug}','DuAnTieuBieuController@getChiTietDuAnBatDongSan');
    Route::get('chitietduantieubieu/vantai/{slug}','DuAnTieuBieuController@getChiTietDuAnVanTai');
    Route::get('chitietduantieubieu/maymoc/{slug}','DuAnTieuBieuController@getChiTietDuAnMayMoc');

    // ĐỐI TÁC

    Route::get('doitac','DoiTacController@getDoiTac');
    Route::get('doitac/{slug}','DoiTacController@getPhanLoaiDoiTac');

    // QUY TRÌNH THẨM ĐỊNH

    Route::get('quytrinhthamdinh','HomeController@getQuyTrinhThamDinh');



    // VĂN BẢN

    Route::get('vanban','VanBanController@getVanBan');
    Route::get('vanban/{slug}','VanBanController@getPhanLoaiLinhVuc');
    Route::get('downloadvanban/{id}','VanBanController@getDownloadVanBan');

    // TÀI LIỆU

    Route::get('tailieu','TaiLieuController@getTaiLieu');
    Route::get('tailieu/{slug}','TaiLieuController@getPhanLoaiLinhVuc');
    Route::get('downloadtailieu/{id}','TaiLieuController@getDownloadTaiLieu');

    // LIÊN HỆ

    Route::get('lienhe','HomeController@getLienHe');

    // TIN TỨC

    Route::get('list-tintuc','TinTucController@getListTinTuc');
    Route::get('chitiettintuc/{slug}','TinTucController@getTinTuc');
 //NHÂN SỰ

    Route::get('nhansu','NhanSuController@getNhanSu');
    Route::get('nhan-su-detail/{slug}','NhanSuController@getNhanSuDetail');
});

Route::group(['namespace' => 'admin'], function() {
        //
    Route::post('tuvankhachhang/post','TuVanKhachHangController@postTuVanKhachHang');

});



    // ADMIN

Route::group(['namespace'=> 'admin'],function(){

    Route::group(['prefix'=> 'login'], function() {
        Route::get('/','LogInController@getLogin');
        Route::post('/','LogInController@postLogin');
    });
});
Route::group(['namespace'=> 'admin', 'middleware' => 'CheckLogIn'],function(){

    // Tư vấn khách hàng

    Route::group(['prefix' => 'tuvankhachhang'], function() {

        Route::get('/','TuVanKhachHangController@getTuVanKhachHang');
        
        Route::get('delete/{id}','TuVanKhachHangController@getXoaTuVanKhachHang');
    });
    //login

    Route::get('admin','AdminController@getAdmin');

    Route::get('logout','LogInController@LogOut');

    // Dịch vụ

    Route::group(['prefix' => 'quanlydichvu'], function() {

        Route::get('/','DichVuController@getDichVu');
        Route::get('add','DichVuController@getThemDichVu');
        Route::get('edit/{id}','DichVuController@getSuaDichVu');
        Route::post('postedit/{id}','DichVuController@postSuaDichVu');
        Route::get('show/{id}','DichVuController@getChiTietDichVu');
        Route::get('delete/{id}','DichVuController@getXoaDichVu');
        Route::post('postadd','DichVuController@postThemDichVu');
    });


    // Dự án tiêu biểu

    Route::group(['prefix' => 'quanlyduantieubieu/bds'], function() {

        Route::get('/','BatDongSanController@getDuAnTieuBieu');
        Route::get('show/{id}','BatDongSanController@getChiTietDuAn'); 
        Route::get('add','BatDongSanController@getThemDuAnTieuBieu'); 
        Route::post('postadd','BatDongSanController@postThemDuAnTieuBieu');
        Route::get('edit/{id}','BatDongSanController@getSuaDuAnTieuBieu');
        Route::post('postedit/{id}','BatDongSanController@postSuaDuAnTieuBieu');       
        Route::get('delete/{id}','BatDongSanController@getXoaDuAnTieuBieu');
    });

    Route::group(['prefix' => 'quanlyduantieubieu/vt'], function() {

        Route::get('/','VanTaiController@getDuAnTieuBieu');
        Route::get('show/{id}','VanTaiController@getChiTietDuAn'); 
        Route::get('add','VanTaiController@getThemDuAnTieuBieu'); 
        Route::post('postadd','VanTaiController@postThemDuAnTieuBieu');
        Route::get('edit/{id}','VanTaiController@getSuaDuAnTieuBieu');
        Route::post('postedit/{id}','VanTaiController@postSuaDuAnTieuBieu');       
        Route::get('delete/{id}','VanTaiController@getXoaDuAnTieuBieu');
    });

    Route::group(['prefix' => 'quanlyduantieubieu/ms'], function() {

        Route::get('/','MayMocController@getDuAnTieuBieu');
        Route::get('show/{id}','MayMocController@getChiTietDuAn'); 
        Route::get('add','MayMocController@getThemDuAnTieuBieu'); 
        Route::post('postadd','MayMocController@postThemDuAnTieuBieu');
        Route::get('edit/{id}','MayMocController@getSuaDuAnTieuBieu');
        Route::post('postedit/{id}','MayMocController@postSuaDuAnTieuBieu');       
        Route::get('delete/{id}','MayMocController@getXoaDuAnTieuBieu');
    });


    // Lĩnh vực

    Route::group(['prefix' => 'quanlylinhvuc'], function() {
        Route::get('/','LinhVucController@getLinhVuc');
        Route::get('add','LinhVucController@getThemLinhVuc');
        Route::post('postadd','LinhVucController@postThemLinhVuc');
        Route::get('edit/{id}','LinhVucController@getSuaLinhVuc');
        Route::post('postedit/{id}','LinhVucController@postSuaLinhVuc');
        Route::get('delete/{id}','LinhVucController@getXoaLinhVuc');

    });

    // văn bản

    Route::group(['prefix' => 'quanlyvanban'], function() {

        Route::get('/','VanBanController@getVanBan');
        Route::get('edit/{id}','VanBanController@getSuaVanBan');
        Route::post('postedit/{id}','VanBanController@postSuaVanBan');
        Route::get('add','VanBanController@getThemVanBan');
        Route::post('postadd','VanBanController@postThemVanBan');
        Route::get('delete/{id}','VanBanController@getXoaVanBan'); 
        Route::get('download/{id}','VanBanController@DownLoadVanBan');   
    });


    //Tài liệu

    Route::group(['prefix' => 'quanlytailieu'], function() {

        Route::get('/','TaiLieuController@getTaiLieu');
        Route::get('edit/{id}','TaiLieuController@getSuaTaiLieu');
        Route::post('postedit/{id}','TaiLieuController@postSuaTaiLieu');
        Route::get('add','TaiLieuController@getThemTaiLieu');
        Route::post('postadd','TaiLieuController@postThemTaiLieu');
        Route::get('delete/{id}','TaiLieuController@getXoaTaiLieu');
        Route::get('download/{id}','TaiLieuController@DownLoadTaiLieu'); 
    });

    //Tin tức

    Route::group(['prefix' => 'quanlytintuc'], function() {

        Route::get('','TinTucController@getTinTuc');
        Route::get('add','TinTucController@getThemTinTuc');
        Route::post('postadd','TinTucController@postThemTinTuc');
        Route::get('show/{id}','TinTucController@getChiTietTinTuc');
        Route::post('postedit/{id}','TinTucController@postSuaTinTuc');
        Route::get('delete/{id}','TinTucController@getXoaTinTuc');
    });


    //Đối tác

    Route::group(['prefix' => 'quanlydoitac'], function() {

        Route::get('/','DoiTacController@getDoiTac');
        Route::get('edit/{id}','DoiTacController@getSuaDoiTac');
        Route::post('postedit/{id}','DoiTacController@postSuaDoiTac');
        Route::get('add','DoiTacController@getThemDoiTac');
        Route::post('postadd','DoiTacController@postThemDoiTac');
        Route::get('delete/{id}','DoiTacController@getXoaDoiTac');

        Route::get('add/linhvuc','DoiTacController@getThemLinhVuc');
        Route::post('linhvuc/postadd','DoiTacController@postThemLinhVuc');
        Route::get('linhvuc/edit/{id}','DoiTacController@getSuaLinhVuc');
        Route::post('linhvuc/postedit/{id}','DoiTacController@postSuaLinhVuc');
        Route::get('linhvuc/delete/{id}','DoiTacController@getXoaLinhVuc');


    });

    // Nhân sự

    Route::group(['prefix' => 'quanlynhansu'], function() {

        Route::get('/','NhanSuController@getNhanSu');
        Route::get('edit/{id}','NhanSuController@getSuaNhanSu');
        Route::post('postedit/{id}','NhanSuController@postSuaNhanSu');
        Route::get('add','NhanSuController@getThemNhanSu');
        Route::post('postadd','NhanSuController@postThemNhanSu');
        Route::get('delete/{id}','NhanSuController@getXoaNhanSu');
    });


    // Ý kiến khách hàng

    Route::group(['prefix' => 'ykienkhachhang'], function() {

        Route::get('/','YKienKhachHangController@getYKienKhachHang');
        Route::get('edit/{id}','YKienKhachHangController@getSuaYKienKhachHang');
        Route::post('postedit/{id}','YKienKhachHangController@postSuaYKienKhachHang');
        Route::get('add','YKienKhachHangController@getThemYKienKhachHang');
        Route::post('postadd','YKienKhachHangController@postThemYKienKhachHang');
        Route::get('delete/{id}','YKienKhachHangController@getXoaYKienKhachHang');
    });


    


    // Thành viên

    Route::group(['prefix' => 'quanlythanhvien','middleware' => 'CkeckLevel'], function() {
        Route::get('/','THanhVienController@getThanhVien');
        Route::get('add','THanhVienController@getThemThanhvien');
        Route::post('postadd','THanhVienController@postThemThanhVien');
        Route::get('edit/{id}','THanhVienController@getSuaThanhVien');
        Route::post('postedit/{id}','THanhVienController@postSuaThanhVien');
        Route::get('delete/{id}','THanhVienController@getXoaThanhVien');
    });

    // BANNER
    Route::group(['prefix' => 'quanlybanner'], function() {
        Route::get('/','BannerController@getList');
        Route::get('add','BannerController@getThemBanner');
        Route::post('postadd','BannerController@postThemBanner');
        Route::get('edit/{id}','BannerController@getSuaBanner');
        Route::post('postedit/{id}','BannerController@postSuaBanner');
        Route::get('delete/{id}','BannerController@getXoaBanner');

    });

});

Route::get('test','TestController@getTest');