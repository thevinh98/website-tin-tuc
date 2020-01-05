@extends('layout.index')

@section('content')

    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
                   
                   
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
												<div class="row d-flex no-gutters align-items-stretch	consult-wrap">
													
												</div>
											</div>
										</section>
					

 
                </div>
            </div>
        </div>
       

        <div class="space20"></div>


        <div class="row main-left">
        	@include('layout.menu')


            <div class="col-md-9">
	            <div class="panel panel-default">            
	            	<div class="panel-heading" style="background-color:#007bff; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">TIN TỨC
	            	</div>

	            	<div class="panel-body">
	            		@foreach($theloai as $tl )
	            		@if(count($tl->loaitin) > 0)
	            		<!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="category.html">{{$tl->Ten}}</a> |
		                		@foreach($tl->loaitin as $lt)
		                		@if(count($tl->loaitin) > 0)  	
		                		<small><a href="loaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html"><i>{{$lt->Ten}}</i></a>
		                		 :</small>
		                		@endif
		                		@endforeach
		                	</h3>
		                	<?php 
		                	$data = $tl->tintuc->where('NoiBat',1)->sortByDesc('created_at')->take(5);
		                	$tin1 = $data->shift();
		                	 ?>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="tintuc/{{$tin1['id']}}/{{$tin1['TieuDeKhongDau']}}.html">
			                            <img class="img-responsive" src="upload/tintuc/{{$tin1['Hinh']}}" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-7">
			                       <a href="tintuc/{{$tin1['id']}}/{{$tin1['TieuDeKhongDau']}}.html"><h3>{{$tin1['TieuDe']}}</h3></a> 
			                        <p>{{$tin1['TomTat']}}</p>
			                        <a class="btn btn-primary" href="tintuc/{{$tin1['id']}}/{{$tin1['TieuDeKhongDau']}}.html">Xem thêm<span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>
		                    

							<div class="col-md-4">
								@foreach($data->all() as $tintuc)
								<a href="tintuc/{{$tintuc['id']}}/{{$tintuc['TieuDeKhongDau']}}.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span> 
										{{$tintuc['TieuDe']}}
									</h4>
								</a>
								@endforeach
							</div>
							
							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                @endif
		                @endforeach
					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
@endsection    