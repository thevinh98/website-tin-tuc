@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

	<!-- slider -->
	<div class="row carousel-holder">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
			  	<div class="panel-heading">Đăng ký tài khoản</div>
			  	<div class="panel-body">
			  		  @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                                
                            </div>
                        @endif

                        @if(session('thongbao'))
                           <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="dangky" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input class="form-control" name="name" placeholder="Nhập tên người dùng" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại Password</label>
                                <input type="password" class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
                            </div>
                            <!-- <div class="form-group">
                                <label>Quyền người dùng</label>
                                <label class="radio-inline">
                                    <input name="quyen" value="0" checked="" type="radio" >Thường
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="1" type="radio" >Admin
                                </label>
                            
                            </div> -->
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                          
                        <form>
                    </div>
			</div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <!-- end slide -->
</div>
<!-- end Page Content -->

@endsection