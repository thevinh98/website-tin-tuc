



    <!-- Footer -->
   <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Liên Hệ</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">23 Nguyễn khuyễn, Vĩnh Hải, Nha Trang, Việt Nam</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+84 347930077</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">phungthevinh1998@gmail.com</span></a></li>
                  </ul>
                </div>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://facebook.com"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="trangchu"><span  class="fas fa-long-arrow-alt-right"></span> Trang chủ</a></li>
                <li><a href="gioithieu"><span  class="fas fa-long-arrow-alt-right"></span> Giới Thiệu</a></li>
                <li><a href="lienhe"><span  class="fas fa-long-arrow-alt-right"></span> Liên Hệ</a></li>
                <li><a href="dangky"><span  class="fas fa-long-arrow-alt-right"></span> Đăng ký</a></li>
                <li><a href="dangnhap"><span  class="fas fa-long-arrow-alt-right"></span> Đăng Nhập</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Tin Mới</h2>
              <div class="block-21 mb-4 d-flex">
                
                <div class="text" style="width: 350px" >
                  <div class="row-item row">  
             @foreach($theloai as $tl)
                  @if(count($tl->loaitin) > 0)
                  <!-- item -->     
                      <?php 
                      $data = $tl->tintuc->where('NoiBat',1)->sortByDesc('created_at')->take(5);
                      $tin1 = $data->shift();
                       ?>
            
                <!-- @foreach($data->all() as $tintuc)
               <a href="tintuc/{{$tin1['id']}}/{{$tin1['TieuDeKhongDau']}}.html">
                  <h4 style="color: #fff">
                    <span class="glyphicon glyphicon-list-alt"></span> 
                    {{$tintuc['TieuDe']}}
                  </h4>
                </a>
                @endforeach
                -->

                <a href="tintuc/{{$tin1['id']}}/{{$tin1['TieuDeKhongDau']}}.html">
                  <h4 style="color: #fff">
                    <span class="glyphicon glyphicon-list-alt"></span> 
                    {{$tin1['TieuDe']}}
                  </h4>
                </a>


                    <!-- end item -->
                    @endif
                    @endforeach
                  </div>
                  
                </div>
                        
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
                          <div class="break"></div><br>
                                    <iframe  width="255px" height="255px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.495637889898!2d109.19421021429842!3d12.282372832950422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067fbaf7bad35%3A0x85d89679ce550ec4!2zMTAxIE1haSBYdcOibiBUaMaw4bufbmcsIFbEqW5oIEjhuqNpLCBUaMOgbmggcGjhu5EgTmhhIFRyYW5nLCBLaMOhbmggSMOyYSA2NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1572266989571!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
           </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Thực hiện bởi <i class="icon-heart" aria-hidden="true"></i>  <a href="trangchu" target="_blank"> TIN TỨC ONLINE</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- end Footer -->
  