@extends('layout.index')

@section('content')
    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="upload/slide/1.png" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="upload/slide/3.png" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
        	@include('layout.menu')


            <div class="col-md-9">
	            <div class="panel panel-default">            
	            	<div class="panel-heading" style="background-color:#337ab7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Giới thiệu</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
                        <h3><span class=""></span> website tin tức</h3>
					    
                        <div class="break"></div>
					   	<h4><span class= ""></span></h4>
                        <p>Đó là thiết kế một trang báo điện tử – một hình thức báo chí có khả năng tiếp cận và phản hồi liên tục trong mọi thời điểm trên toàn cầu, cập nhật liên tục các thông tin nóng hổi xảy ra trên khắp thế giới. Khác biệt hoàn toàn với báo giấy, có rất nhiều hạn chế luôn bị giới hạn nhất định về số trang, số chữ, thời điểm phát hành và số lượng tin tức, báo điện tử có tốc độ cập nhật tuyệt vời và không gian tin tức không giới hạn. Đặc biệt trong thời đại công nghệ thông tin sức mạnh của báo điện tử đang uy hiếp mạnh mẽ đến sự tồn tại của hình thức báo giấy truyền thống từng tồn tại hàng trăm năm nay.</p>

                        <h4><span class=""></span></h4>
                        <p>Khi thành lập webiste dạng này, đặc thù riêng là phải phục vụ đến nhiều đối tượng độc giả nên giao diện và bố cục đơn giản, tốc độ đường truyền nhanh, máy chủ ổn định và chịu tải cao, dung lượng và băng thông lớn.
                        Thiết kế Website chuyên nghiệp, bố cục khoa học các chức năng nhằm tạo sự dễ dàng, thuận tiện, giao diện lôi cuốn người đọc.
                        Website được sử dung các công nghệ trong thiết kế và code để load nhanh và tăng tính linh hoạt cho website.
                        Có hệ thống quản trị website chuyên nghiệp và đa chức năng nhằm giúp doanh nghiệp có thể thay đổi nội dung website, cập nhật thông tin mới, chỉnh sửa hoặc xóa.
                        Hệ quản trị có sự phân quyền để một doanh nghiệp chuyên nghiệp có thể phân công nhiệm vụ cập nhật tin tức theo chức năng.
                        Tích hợp tool editor cho phép người quản trị cập nhật nội dung ngay trên website mà không cần sử dụng thêm công cụ nào khác.
                        Cho phép người đọc đăng ký thành viên để chia sẻ thông tin, viết bài…
                        Website được thiết kế là hệ thống quản trị thông tin – một toàn soạn điện tử, cho phép phần quyền nhiều cấp như: xoạn bài viết, duyệt bài viết, xuất bản bài viết..
                        Các tiện ích – ứng dụng web giúp người truy cập khai thác tối đa các thông tin trên website
                        Xây dựng đường dẫn thân thiện với các công cụ tìm kiếm
                        Về mặt tương thích: website có thể chạy tốt trên các trình duyệt thông dung như IE, Firefox, Google chrome, Opera…
                        Xây dựng hệ thống chuyên nghiệp, mở rộng để dể dàng nâng cấp mà không cần phải thiết kế mới
                        Ngôn ngữ lập trình Microsoft Visual C# trên nền tảng Asp.Net. Dung lượng code website 5MB và Phiên bản website chạy trên mobile.
                        Ngày nay, số lượng website tin tức riêng ở Việt Nam đã là một con số không thể đếm được, nội dung cập nhật, tin tức mỗi ngày tương đối là giống nhau. Điều thu hút người truy cập ở đấy chính là nằm ở thiết kế web tin tức, giao diện bắt mắt, bố cục rõ ràng dễ dàng tìm kiếm, dung lượng ít, tải nhanh,…. Nếu các doanh nghiệp đang có ý định xây dựng một trang báo mạng cho riêng mình thì cần phải chú ý đến các đặc điểm kể trên và tạo dựng cho website của mình một ấn tượng riêng, một phong cách riêng, như vậy mới thu hút được độc giả internet hết sức nhạy bén và biết chọn lọc như hiện nay.</p>
                        
					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

@endsection