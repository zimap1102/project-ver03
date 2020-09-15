<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Perfume</title>
  <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
  
  <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">

  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
  <link href="{{asset('css/color.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet">


</head>

<body>

<div class="pageWrap">
  
  <div class="tp-bar">
    <div class="container">
      <ul class="tp-links">
        <!-- <li><span class="dropBox-btn"><a href="register.php">Đăng ký</a> </span></li>
        <li><span class='dropBox-btn'><a href="login.php">Đăng nhập</a> </span></li> -->
        <li>
          <span class="dropBox-btn">Ngôn ngữ <i class="caret caret-cut"></i></span>
          <div class="dropBox dropBox-condensed">
            <div class="box-section">
              <ul class="langList">
                <li><a href="#">English</a></li>
                <li><a href="#">Gernman</a></li>
                <li><a href="#">French</a></li>
              </ul>
            </div><!-- /box-section -->
          </div><!-- /dropBox -->
        </li>
      </ul><!-- /tp-links -->
    </div>
  </div><!-- /tp-bar -->

  <div class="main-bar">
    <div class="logo">
      <a href="{{asset('/')}}"><img src="{{asset('images/logo.png')}}" alt="perfume"></a>
    </div><!-- /logo -->
    <div class="user-controls-bar">
      <ul class="user-controls">
        
       
        <li class="toggle-menu">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </li>
      </ul><!-- /user-controls -->
    </div><!-- /user-controls -->

    <div class="main-nav-bar">
      <nav class="navbar-collapse collapse">
        <ul class="main-nav">
          <li><a href="{{asset('/')}}">Trang chủ</a></li>

          <li>
            <a style="cursor: pointer;" >MD5</a>
            <ul>
              <li><a href="{{asset('md5/encode')}}">ENCODE</a></li>
              <li><a href="{{asset('md5/decode')}}">DECODE</a></li>
            </ul>
          </li>
          <li>
            <a style="cursor: pointer;">BASE64</a>
            <ul>
              <li><a href="{{asset('base64/encode')}}">ENCODE</a></li>
              <li><a href="{{asset('base64/decode')}}">DECODE</a></li>
            </ul>
          </li>

          <li>
            <a style="cursor: pointer;">BASE64-URL</a>
            <ul>
              <li><a href="{{asset('base64-url/encode')}}">ENCODE</a></li>
              <li><a href="{{asset('base64-url/decode')}}">DECODE</a></li>
            </ul>
          </li>
          <li>
            <a style="cursor: pointer;">URL</a>
            <ul>
              <li><a href="{{asset('url/encode')}}">ENCODE</a></li>
              <li><a href="{{asset('url/decode')}}">DECODE</a></li>
            </ul>
          </li>
          <li>
            <a style="cursor: pointer;">SHA1</a>
            <ul>
              <li><a href="{{asset('sha1/encode')}}">ENCODE</a></li>
              <li><a href="{{asset('sha1/decode')}}">DECODE</a></li>
            </ul>
          </li>
          <!-- <li>
            <a style="cursor: pointer;">SHA</a>
            <ul>
              <li><a href="{{asset('sha/encode')}}">ENCODE</a></li>
              <li><a href="{{asset('sha/decode')}}">DECODE</a></li>
            </ul>
          </li> -->
          <li>
            <a style="cursor: pointer;">SHA256</a>
            <ul>
              <li><a href="{{asset('sha256/encode')}}">ENCODE</a></li>
              <li><a href="{{asset('sha256/decode')}}">DECODE</a></li>
            </ul>
          </li>
          <li>
            <a style="cursor: pointer;">JSON</a>
            <ul>
              <li><a href="{{asset('json/encode')}}">ENCODE</a></li>
              <li><a href="{{asset('json/decode')}}">DECODE</a></li>
            </ul>
          </li>

             <li>
            <a style="cursor: pointer;">BARCODE</a>
            <ul>
              <li><a style="cursor: pointer;">DNS1D</a>
                  <ul>
                    <li>
                      <a href="{{asset('barcode/DNS1D/C128A/encode')}}">C128A</a>
                    </li>
                    <li>
                      <a href="{{asset('barcode/DNS1D/KIX/encode')}}">KIX</a>
                    </li>
                    <li>
                      <a href="{{asset('barcode/DNS1D/C39/encode')}}">C39</a>
                    </li>
                  </ul>
              </li>
              <li><a style="cursor: pointer;">DNS2D</a>
                  <ul>
                    <li>
                      <a href="{{asset('barcode/DNS2D/PDF417/encode')}}">PDF417</a>
                    </li>
                    <li>
                      <a href="{{asset('barcode/DNS2D/QRCODE/encode')}}">QRCODE</a>
                    </li>
                  </ul>
              </li>
            </ul>
          </li>
          <li>
            <a style="cursor: pointer;" >dec/hex/oct/bin</a>
            <ul>
              <li><a href="{{asset('dec')}}">DEC To hex/oct/bin</a></li>
              <li><a href="{{asset('hex')}}">HEX To dec/oct/bin</a></li>
              <li><a href="{{asset('oct')}}">OCT To dec/hex/bin</a></li>
              <li><a href="{{asset('bin')}}">BIN To dec/hex/oct</a></li>
            </ul>
          </li>
          
        </ul>
      </nav>
    </div><!-- /main-nav-bar -->
  </div><!-- /main-bar -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                                                    @yield('content')
                                                    
  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  <section class="section-focus bg-dark">
		<div class="container">
			
			<div class="promo-box">
				<div class="row">
					<div class="col-sm-9">
						<p><strong>Câu lạc bộ phần thưởng</strong> - Tự thưởng cho mình điểm nước hoa mỗi khi bạn chi tiêu</p>
					</div>
					<div class="col-sm-3">
						<a class="btn btn-default btn-lg">bắt đầu mua sắm</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<section class="section footer-widgets bg-lighter-grey">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-4">
							<div class="widget widget-links">
								<header class="widget-heading">
									<h4>Liên kết hữu ích</h4>
								</header>
								<nav>
									<ul>
										<li><a href="#">Trabg chủ</a></li>
										<li><a href="#">Trang</a></li>
										<li><a href="#">Nước hoa</a></li>
										<li><a href="#">Da &amp; Cơ thể</a></li>
										<li><a href="#">Bài viết</a></li>
										<li><a href="#">Liên hệ</a></li>
									</ul>
								</nav>
							</div><!-- /widget-links -->
						</div>
						<div class="col-sm-4">
							<div class="widget widget-links">
								<header class="widget-heading">
									<h4>Dịch vụ</h4>
								</header>
								<nav class="widget widget-links">
									<ul>
										<li><a href="#">Hướng dẫn đặt hàng</a></li>
										<li><a href="#">Right of withdrawal</a></li>
										<li><a href="#">Vận chuyển &amp; Giao hàng</a></li>
										<li><a href="#">Thanh toán</a></li>
										<li><a href="#">Chính sách hoàn trả</a></li>
										<li><a href="#">Điều khoản &amp; Điều kiện</a></li>
									</ul>
								</nav>
							</div><!-- /widget-links -->
						</div>
						<div class="col-sm-4">
							<div class="widget widget-links">
								<header class="widget-heading">
									<h4>Tài khoản của tôi</h4>
								</header>
								<nav class="widget widget-links">
									<ul>
										<li><a href="#">Giỏ hàng ( 0 )</a></li>
										<li><a href="#">Tài khoản của tôi</a></li>
										<li><a href="#">Đăng ký</a></li>
										<li><a href="#">Bản tin</a></li>
									</ul>
								</nav>
							</div><!-- /widget-links -->
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="widget widget-contact">
						<h4>GIỮ LIÊN LẠC</h4>
						<p>Tham gia Bản tin của chúng tôi để biết tất cả những thông tin mới nhất về việc
						 phát hành sản phẩm, các cuộc thi, tin tức và ưu đãi đặc biệt.</p>
						<form class="contact-widget-form" method="post" action="http://wow-themes.com/demo/html/perfume/index.html">
							<div class="form-group">
							  <input type="text" class="form-control" placeholder="Mail" required>
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Đăng Ký">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section footer-widgets">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-help"></i>Cẩu hỏi?</h4>
						</header>
						<p>Chúng tôi ở đây vì bạn.</p>
						<nav>
							<ul>
								<li><i class="flaticon-phone72"></i>(012) 345-6789</li>
								<li><a href="#"><i class="flaticon-email15"></i>info@perfumesupport.com</a></li>
								<li><a href="#"><i class="flaticon-google125"></i>Bạn có muốn nói chuyện trực tiếp không?</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-shield90"></i>Bảo vệ</h4>
						</header>
						<p>Thương mại nghệ thuật là một vấn đề của niềm tin.</p>
						<ul class="list-2">
							<li><a href="#">Xác minh tính xác thực</a></li>
							<li><a href="#">Bảo vệ người mua</a></li>
							<li><a href="#">Bảo vệ quyền riêng tư</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-shipping"></i>Đang chuyển hàng</h4>
						</header>
						<p>Miễn phí cho các đơn đặt hàng trên $ 75.</p>
						<ul class="list-2">
							<li><a href="#">Bao bì tùy chỉnh</a></li>
							<li><a href="#">Xử lý cẩn thận</a></li>
							<li><a href="#">Vận chuyển được bảo hiểm</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-creditcard21"></i>Thanh toán</h4>
						</header>
						<ul class="list-cards">
							<li><a href="#"><img src="{{asset('images/logo-visa.png')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('images/logo-americanexpress.png')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('images/logo-mastercard.png')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('images/logo-amazon.png')}}" alt=""></a></li>
							<li><a href="#"><img src="{{asset('images/logo-paypal.png')}}" alt=""></a></li>
						</ul>
					</div>					
				</div>

			</div>
		</div>
	</section>
	
	<!-- <footer class="site-footer">
		<div class="container">
      <nav>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li><a href="#">Fragrances</a></li>
          <li><a href="#">Skin</a></li>
          <li><a href="#">Body</a></li>
          <li><a href="#">Makeup</a></li>
          <li><a href="#">Brand</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
		</div>
	</footer> -->

</div><!-- /pageWrap -->

<div class="preloader-container">
  <div id="loading-center-absolute">
    <div class="object" id="object_one"></div>
    <div class="object" id="object_two"></div>
    <div class="object" id="object_three"></div>
    <div class="object" id="object_four"></div>
    <div class="object" id="object_five"></div>
    <div class="object" id="object_six"></div>
    <div class="object" id="object_seven"></div>
    <div class="object" id="object_eight"></div>
    <div class="object" id="object_big"></div>
  </div><!-- /loading-center-absolute -->
</div><!-- /preloader-container -->


<!-- JavaScript
================================================== -->
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
<script src="{{asset('js/jquery.mixitup.min.js')}}"></script>

<script src="{{asset('js/jquery-ui.min.js')}}"></script>



</body>

<!-- Mirrored from wow-themes.com/demo/html/perfume/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2015 06:50:38 GMT -->
</html>
