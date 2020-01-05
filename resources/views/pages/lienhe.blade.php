@extends('layout.index')

@section('content')
    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-12">
                   <section class="home-slider owl-carousel" >
                                            @foreach($theloai as $tl)
                                            @if(count($tl->loaitin) > 0)
                                            <?php 
                                              $data = $tl->tintuc->where('NoiBat',1)->sortByDesc('created_at')->take(5);
                                              $tin1 = $data->shift();
                                          ?>
                                              <div class="slider-item" style="background-image:url(upload/tintuc/{{$tin1['Hinh']}});">
                                                <div class="overlay"></div>
                                                <div class="container">
                                                  <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                                                  <div class="col-md-7 ftco-animate mb-md-5">
                                                    <span class="subheading" style="font-size: 40px;">Tin Mới</span>
                                                    <a href="tintuc/{{$tin1['id']}}/{{$tin1['TieuDeKhongDau']}}.html" ><h3 style="color: #fff;font-size: 30px">{{$tin1['TieuDe']}}</h3></a> 
                                                    <p><a href="tintuc/{{$tin1['id']}}/{{$tin1['TieuDeKhongDau']}}.html" class="btn btn-primary px-4 py-3 mt-3">xem thêm</a></p>
                                                  </div>
                                                </div>
                                                </div>
                                              </div>
                                       @endif
                                        @endforeach
                                         </section>

                                        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
                                            <div class="container">
                                                <div class="row d-flex no-gutters align-items-stretch   consult-wrap">
                                                    
                                                </div>
                                            </div>
                                        </section>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
        	@include('layout.menu')


            <div class="col-md-9">
	            <div class="panel panel-default">            
	            	<div class="panel-heading" style="background-color:#337ab7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
                        <h3><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>
					    
                        <div class="break"></div>
					   	<h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
                        <p>101 Mai Xuân Thưởng, phường Vĩnh Hải, TP.Nha Trang, tỉnh Khánh Hòa </p>

                        <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                        <p>lukahuybol98@gmail.com </p>

                        <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
                        <p>84 1234 345 235 </p>



                        <br><br>
                        <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                        <div class="break"></div><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.495637889898!2d109.19421021429842!3d12.282372832950422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067fbaf7bad35%3A0x85d89679ce550ec4!2zMTAxIE1haSBYdcOibiBUaMaw4bufbmcsIFbEqW5oIEjhuqNpLCBUaMOgbmggcGjhu5EgTmhhIFRyYW5nLCBLaMOhbmggSMOyYSA2NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1572266989571!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

@endsection