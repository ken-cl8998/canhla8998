<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\news;

class UserController extends Controller
{
  
	public function getTrangChu(){
		$news = news::where('style',1)->orderBy('created_time', 'DESC')->get();
		return view('trang-chu', compact('news'));
	}
	public function getAuthorBaiViet(){
		$news = news::orderBy('created_time', 'DESC')->get();
		return view('author-bai-viet', compact('news'));
	}
	//Delete news
	public function getAuthorBaiVietXoa($id_tintuc){
		$news = news::where('id_tintuc',$id_tintuc)->delete();
		return redirect('author-bai-viet')->with('thongbao','Xóa thành công!');
	}
	//Add news
	public function getAuthorBaiVietThem(){
		return view('them-bai-viet');
	}

	public function postAuthorBaiVietThem(Request $request){
		DB::table('tintuc')->insert(
		    ['content' => $request->cn_noidung, 'created_time' => $request->cn_date, 'style'=>'0']
		);
		return redirect('author-bai-viet/themmoi')->with('thongbao','Thêm thành công!');
	}
	//Edit news
	public function getAuthorBaiVietSua($id_tintuc){
		$news = news::where('id_tintuc',$id_tintuc)->get();
		return view('sua-bai-viet', compact('news'));
	}
	public function postAuthorBaiVietSua(Request $request, $id_tintuc){
		DB::table('tintuc')->where('id_tintuc',$id_tintuc)
	            ->update(['content' => $request->cn_noidung, 'created_time' => $request->cn_date, 'style'=>'0']);
	   
	        return redirect('author-bai-viet')->with('thongbao','Sửa thành công!');
	}
	//Admin manages news
	public function getAdminBaiViet(){
		$news = news::orderBy('created_time', 'DESC')->get();
		return view('admin-bai-viet', compact('news'));
	}

	public function getAdminBaiVietDuyet(Request $request, $id_tintuc){
		DB::table('tintuc')->where('id_tintuc',$id_tintuc)->update(['style'=>'1']);
		return redirect('admin-bai-viet')->with('thongbao','Duyệt thành công!');
	}
	
}
