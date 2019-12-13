<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\TinTuc;
use App\LoaiTin;
class TinTuccontroller extends Controller
{
    //
    public function getDanhSach()
    {
        $tintuc = TinTuc::orderBy('id','DESC')->get();
        return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);

    }
    public function getThem()
    {
        
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::all();
        return view('admin.tintuc.them',['theloai'=>$theloai],['loaitin'=>$loaitin]);
    }
    public function postThem(Request $request)
    {

//--------------------- Tạo dãy số ngẫu nhiên-----------------------

             $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

           function random($input, $strength = 16)
            {
   
               $input_length = strlen($input);
              $random_string = '';
               for($i = 0; $i < $strength; $i++)
             {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
              }
 
               return $random_string;
            }
//---------------------------------------------------------------------------------

        $this->validate($request,[
            'LoaiTin'=>'required',
            'TieuDe'=>'required|min:3|unique:TinTuc,TieuDe',
            'TomTat'=>'required',
            'NoiDung'=>'required'
        ],[
            'LoaiTin.required'=>'Bạn chưa chọn loại tin',
            'TieuDe.required'=>'Bạn chưa nhập tiêu đề',
            'TieuDe.min'=>'Tiêu để phải có ít nhất 3 ký tự',
            'TieuDe.unique'=>'Tiêu đề đã tồn tại',
            'TomTat.required'=>'Bạn chưa nhập tóm tắt',
            'NoiDung.required'=>'Bạn chưa nhập nội dung'
        ]);
        $tintuc = new TinTuc;
        $tintuc->TieuDe = $request->TieuDe;
        $tintuc->TieuDeKhongDau = changeTitle($request->TieuDe);
        $tintuc->idLoaiTin = $request->LoaiTin;
        $tintuc->TomTat = $request->TomTat;
        $tintuc->NoiDung = $request->NoiDung;
          $tintuc->NoiBat = $request->NoiBat;

        $tintuc->SoLuotXem = 0;

        if ($request->hasFile('Hinh')) 
        {
            $file = $request ->Hinh;
            $duoi = $file-> getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png'&& $duoi != 'jpeg'&& $duoi != 'webp')
            {
                return redirect('admin/tintuc/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg,png');
            }
            $name = $file-> getClientOriginalName();
            $Hinh = random($permitted_chars, 10)."_".$name;
           
           
            $file->move("upload/tintuc",$Hinh);
            $tintuc->Hinh = $Hinh;
           
        }
        else
        {
            $tintuc->Hinh = "";
        }
        $tintuc->save();
        return redirect('admin/tintuc/them')->with('thongbao','Thêm tin thành công');

                       
}

    public function getSua($id)
    {
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::all();
        $tintuc = TinTuc::find($id);
        return view('admin.tintuc.sua',['tintuc'=>$tintuc,'theloai'=>$theloai,'loaitin'=>$loaitin]);
    }
    public function postSua(Request $request, $id)
    {
         $tintuc = TinTuc::find($id);
//--------------------- Tạo dãy số ngẫu nhiên-----------------------

             $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

           function random($input, $strength = 16)
            {
   
               $input_length = strlen($input);
              $random_string = '';
               for($i = 0; $i < $strength; $i++)
             {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
              }
 
               return $random_string;
            }
//---------------------------------------------------------------------------------

        $this->validate($request,[
            'LoaiTin'=>'required',
            'TieuDe'=>'required|min:3|unique:TinTuc,TieuDe',
            'TomTat'=>'required',
            'NoiDung'=>'required'
        ],[
            'LoaiTin.required'=>'Bạn chưa chọn loại tin',
            'TieuDe.required'=>'Bạn chưa nhập tiêu đề',
            'TieuDe.min'=>'Tiêu để phải có ít nhất 3 ký tự',
            'TieuDe.unique'=>'Tiêu đề đã tồn tại',
            'TomTat.required'=>'Bạn chưa nhập tóm tắt',
            'NoiDung.required'=>'Bạn chưa nhập nội dung'
        ]);
    
        $tintuc->TieuDe = $request->TieuDe;
        $tintuc->TieuDeKhongDau = changeTitle($request->TieuDe);
        $tintuc->idLoaiTin = $request->LoaiTin;
        $tintuc->TomTat = $request->TomTat;
        $tintuc->NoiDung = $request->NoiDung;
         $tintuc->NoiBat = $request->NoiBat;



        if ($request->hasFile('Hinh')!=null) 
        {
            $file = $request ->Hinh;
            $duoi = $file-> getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png')
            {
                return redirect('admin/tintuc/sua')->with('loi','Bạn chỉ được chọn file có đuôi jpg,png');
            }
            $name = $file-> getClientOriginalName();
            $Hinh = random($permitted_chars, 10)."_".$name;
           
           
            $file->move("upload/tintuc",$Hinh);
            unlink("upload/tintuc/".$tintuc->Hinh);
            
            $tintuc->Hinh = $Hinh;

           
        }
       
        $tintuc->save();
        return redirect('admin/tintuc/sua/'.$id)->with('thongbao','Sửa tin thành công');
        
    }

    public function getXoa($id)
    {
        $tintuc = TinTuc::find($id);
        $tintuc->delete();

        return redirect('admin/tintuc/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}

