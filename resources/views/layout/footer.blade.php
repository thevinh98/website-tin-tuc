



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
                
                <div class="text" >
                     

                @foreach($data->all() as $tintuc)
                <a href="tintuc/{{$tintuc['id']}}/{{$tintuc['TieuDeKhongDau']}}.html">
                  <h4 style="color: #fff">
                    <span class="glyphicon glyphicon-list-alt"></span> 
                    {{$tintuc['TieuDe']}}
                  </h4>
                </a>
                @endforeach
             

                  
                </div>
                        
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Thực hiện bởi <i class="icon-heart" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank">Vinh-Huy</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- end Footer -->
  