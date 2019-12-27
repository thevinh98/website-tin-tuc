<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TheLoai;
use App\Slide;
use App\LoaiTin;
use App\TinTuc;
use App\User;

use Illuminate\Support\Facades\Auth;

class pagecontroller extends Controller
{
    //
    public function __construct()
    {
        $theloai = TheLoai::all();
        $slide = Slide::all();
        view()->share('theloai',$theloai);
        view()->share('slide',$slide);

        if(Auth::check())
        {
            view()->share('nguoidung',Auth::user());
        }

    }


    function trangchu()
    {
        $theloai = TheLoai::all();
        return view ('pages.trangchu');
    }
    function lienhe()
    {
        $theloai = TheLoai::all();
        return view ('pages.lienhe');
    }
    function gioithieu()
    {
        $theloai = TheLoai::all();
        return view ('pages.gioithieu');
    }
    function loaitin($id)
    {
        $loaitin = LoaiTin::find($id);
        $tintuc = TinTuc::where('idLoaiTin',$id)->paginate(5);
        return view ('pages.loaitin',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }
    function tintuc($id)
    {
        $tintuc = TinTuc::find($id);
        $tinnoibat = TinTuc::where('NoiBat',1)->take(4)->get();
        $tinlienquan = TinTuc::where('idLoaiTin',$tintuc->idLoaiTin)->take(4)->get();
        return view ('pages.tintuc',['tintuc'=>$tintuc,'tinnoibat'=>$tinnoibat,'tinlienquan'=>$tinlienquan]);
    }
    function getDangnhap()
    {
        return view ('pages.dangnhap');
    }
    function postDangnhap(Request $request)
    {
         $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:3|max:32'
        ],[
            'email.required'=>'Bạn chưa đăng nhập email',
            'password.required'=>'Bạn chưa nhấp password',
            'password.min'=>'password không được nhỏ hơn 3 ký tự',
            'password.max'=>'password không được lớn hơn 32 ký tự'
        ]);
         if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            return redirect('trangchu');
        }
        else
        {
            return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
        }
    }
    function getDangky()
    {
        return view ('pages.dangky');
    }
    function postDangky(Request $request)
    {
            
        $this -> validate($request,[
            'name' => 'required|min:3',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:3|max:32',
            'passwordAgain'=>'required|same:password'
        ],[
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng phải ít nhất 3 kí tự',
                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',
                'email.unique'=>'email đã tồn tại',
                'password.required'=> 'Bạn chưa nhập mật khẩu',
                'password.min'=> 'Mật khẩu ít nhấu 3 kí tự',
                'password.max'=>'Mật khẩu chỉ được tối đa 32 kí tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại chưa đúng'

        ]);

        $user = new User;
        $user ->name =$request->name;
        $user->email=$request->email;
        $user ->password= bcrypt($request->password);
        $user->quyen = 0;
        $user ->save();
        return redirect('dangnhap') -> with('thongbao','Chúc mừng bạn đã đăng ký thành công');
    }
    function getDangxuat()
    {
        Auth::logout();
        return redirect('trangchu');
    }

     function getNguoidung()
    {
        
        return view ('pages.nguoidung');
    }
    function postNguoidung()
    {

    }

    function timkiem(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $tintuc = TinTuc::where('TieuDe','like',"%$tukhoa%")->orwhere('TomTat','like',"%$tukhoa%")->orwhere('NoiDung','like',"%$tukhoa%")->take(30)->paginate(5);
        return view('pages.timkiem',['tintuc'=>$tintuc,'tukhoa'=>$tukhoa]);
    }



}
