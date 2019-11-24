<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;
class LoaiTincontroller extends Controller
{
    //
    public function getDanhSach()
    {
    	$loaitin = LoaiTin::all();
    	return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);

    }
    public function getThem()
    {
        $theloai = TheLoai::all();
    	return view('admin.loaitin.them',['theloai'=>$theloai]);
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'Ten'=>'required|unique:TheLoai,Ten|min:1|max:100',
                'TheLoai'=>'required'
            ],
            [
                'Ten.required'=>'Bạn chưa nhập tên thể loại',
                'Ten.unique'=>'Tên thể loại đã tồn tại',
                'Ten.min'=>'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'Ten.max'=>'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'TheLoai.required'=>'Bạn chưa chọn thể loại'
            ]);

        $loaitin = new LoaiTin;
        $loaitin->Ten = $request->Ten;
        $loaitin->TenKhongDau = changeTitle($request->TenKhongDau);
        $loaitin->idTheLoai = $request->TheLoai;
        $loaitin->save();

        return redirect('admin/loaitin/them')->with('thongbao','Bạn đã thêm thành công');

    }
    public function getSua($id)
    {
    	
    }
    public function postSua(Request $request, $id)
    {
        
        
    }

    public function getXoa($id)
    {
       
    }
}

