<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LinhVuc;
use App\Models\Dichvu;
use App\Models\NhanSu;
use App\Models\LoaiDoiTac;
use App\Models\TinTuc;
use App\Models\DuAnTieuBieu;
use App\Models\wppost;
use App\Models\wpterm;
use App\Models\TaiLieu;
use App\Models\VanBan;
use DB;
class TestController extends Controller
{
	public function getTest(){

    	$tintuc = NhanSu::get();
        foreach ($tintuc as $item) {
            $item->slug = str_slug($item->ho_ten);
            $item->save();
        }
    	// $list_tin = [];
    	// $list_id = [];
    	// foreach ($tintuc as $item ) {

    	// 	$post = wppost::find($item->object_id);

    	// 	$post = wppost::where('post_parent', $post->ID)->orderByDesc('post_date')->first();
    	// 	if (!in_array($post->ID, $list_id)) {
    	// 		$tt = new VanBan;
    	// 		$tt->ten_vb = $post->post_title;
    	// 		$tt->id_lv =18;
    	// 		$tt->created_at = $post->post_date;
    	// 		$tt->updated_at = $post->post_date_gmt;  
     //            $tt->noi_dung= $post->post_content;
    	// 		$tt ->save();
    	// 	}
     //    }


    	// }
    	// dd($list_tin);

    	// $data = VanBan::get();
    	// foreach ($data as $item) {
    	// 	$tt = VanBan::find($item->id_vb);
    	// 	$tt->ten_file=str_replace( 'href="http://thamdinhgiavng.com/wp-content/uploads/', '', $tt->ten_file);
    	// 	$tt->save();
    	// }
    	// dd('ok');


        // CODE LẤY THẺ IMG

		// $data = VanBan::orderBy('id_vb','desc')->get();

		// foreach ($data as $key=>$item) {
			
		// 	$anh='';

		// 	preg_match_all('/<a[^>]+>/i',$item->noi_dung, $imgTags); 
	
		// 	for ($i = 0; $i < count($imgTags[0]); $i++) {
 
		// 		preg_match('/href="([^"]+)/i',$imgTags[0][$i], $imgage);

		// 		$origImageSrc = str_ireplace( 'src="http://demo4-cgroup.top/local/storage/app/public/images/images/tintuc/', '',  $imgage[0]);
		// 		$anh=$origImageSrc;
		// 	}
		// 	DB::table('vanban')->where('id_vb',$item->id_vb)->update(['ten_file'=>$anh]);
		// }

        //CODE THÊM ẢNH MẶC ĐỊNH

        // $tt= VanBan::get();
        // foreach ($tt as $item) {
        //     if($item->anh_vb == NULL){
        //         $item->anh_vb='anhmacdinh.png';
        //         $item->save();
        //     }
        // }

	}
}
