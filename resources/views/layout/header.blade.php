    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="trangchu">TRANG CHỦ</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
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

			    <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="dangky">ĐĂNG KÝ</a>
                    </li>
                    <li>
                        <a href="dangnhap">ĐĂNG NHẬP</a>
                    </li>
                    <li>
                    	<a>
                    		<span class ="glyphicon glyphicon-user"></span>
                    		huy vinh
                    	</a>
                    </li>

                    <li>
                    	<a href="#">Đăng xuất</a>
                    </li>
                    
                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>