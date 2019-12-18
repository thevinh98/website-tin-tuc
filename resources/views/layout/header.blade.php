<!-- 
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="trangchu">TRANG CHỦ</a>
            </div>
          
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="gioithieu">GIỚI THIỆU</a>
                    </li>
                    <li>
                        <a href="lienhe">LIÊN HỆ</a>
                    </li>
                </ul>

                <form action="timkiem" method="post" class="navbar-form navbar-left" role="search">
                    <input type="hidden" name="_token" value="{{csrf_token()}}";>
			        <div class="form-group">
			          <input type="text" name="tukhoa" class="form-control" placeholder="Tìm kiếm">
			        </div>
			        <button type="submit" class="btn btn-default">Tìm</button>
			    </form>
                    đsdsdsa
			    <ul class="nav navbar-nav pull-right">
                    @if(!isset($nguoidung))
                    <li>
                        <a href="dangky">ĐĂNG KÝ</a>
                    </li>
                    <li>
                        <a href="dangnhap">ĐĂNG NHẬP</a>
                    </li>
                    @else
                    <li>
                    	<a href="nguoidung">
                    		<span class ="glyphicon glyphicon-user"></span>
                    		

                    	</a>
                    </li>

                    <li>
                    	<a href="dangxuat">Đăng xuất</a>
                    </li>
                    @endif
                </ul>
            </div>


            
            
        </div>
       
    </nav> -->
     <div class="bg-top navbar-light d-flex flex-column-reverse">
        <div class="container py-3">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center py-4">
                    <a class="navbar-brand" href="trangchu">Tin Tức<span>Tin Tức Online</span></a>
                </div>
                <div  class="col-lg-8 d-block">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="fas fa-paper-plane"></span></div>
                            <div class="text">
                                <span>Email</span>
                                <span>Phungthevinh1998@gmail.com</span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span  class="fas fa-phone-alt"></span></div>
                            <div class="text">
                                <span>Call</span>
                                <span>+0347930077</span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="fas fa-clock"></span></div>
                            <div class="text">
                                <span>Working Hours</span>
                                <span>all day</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="top-social-menu py-2 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="social mb-0">
                            <a href="https://facebook.com"><i class="fab fa-facebook-square"></i><span class="sr-only">Facebook</span></a>
                            <a href="https://Twitter.com"><i class="fab fa-twitter-square"></i></i><span class="sr-only">Twitter</span></a>
                            <a href="https://Google.com"><i class="fab fa-google-plus-square"></i></i><span class="sr-only">Googleplus</span></a>
                        </p>
                    </div>
                    <div class="col text-right">
                        <a href="#" class="btn-link">Tên người dùng</a>
                    </div>
                </div>
            </div>
          </div>
    </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
          <form action="timkiem"  method="post" class="searchform order-lg-last" role ="search">
          <div class="form-group d-flex">
               <!--  <form action="timkiem" method="post" class="navbar-form navbar-left" role="search">
                    <input type="hidden" name="_token" value="{{csrf_token()}}";>
                    <div class="form-group">
                      <input type="text" name="tukhoa" class="form-control pl-3" placeholder="Tìm kiếm">
                    </div>
                   <button type="submit" placeholder="" class="form-control search"><i class="fas fa-search"></i>
                </form> -->
                 <input type="hidden" name="_token" value="{{csrf_token()}}";>
            <input style="border-radius:30px;" type="text" name="tukhoa" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><i class="fas fa-search"></i>
            </button>
          </div>
        </form>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="trangchu" class="nav-link">Trang Chủ</a></li>
                <li class="nav-item"><a href="gioithieu" class="nav-link">Giới Thiệu</a></li>
                <li class="nav-item"><a href="lienhe" class="nav-link">Liên hệ</a></li>
                <li class="nav-item"><a href="dangky" class="nav-link">Đăng ký</a></li>
                <li class="nav-item"><a href="dangnhap" class="nav-link">Đăng Nhập</a></li>
                
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
    
    
        

