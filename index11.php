<?php
	if (isset($_POST['upload'])){
		$target = "images/".basename($_FILES['image']['name']);
		$dbh = mysqli_connect("localhost","root","","images");
		$image=$_FILES['image']['name'];
		$text=$_POST['text'];
		$sql= "INSERT INTO sanpham (image) VALUES  ('$image',)";
		mysqli_query($conn,$sql);
		if (move_uploaded_file($_FILES['image'],$target)){
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There was a problem uploading image";
		}
	}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo1.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.html">Trang chủ</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">Về chúng tôi</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Liên hệ</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Chào mừng đến <br> Cửa hàng văn phòng phẩm HHDT</strong></h1>
							<p class="m-b-40">Chúng tôi bán các mặt hàng văn phòng phẩm cho mọi lứa tuổi. Phục vụ và tương tác tận tình.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Các sản phẩm</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Hãy nhanh tay <br> đến xem các mặt hàng của chúng tôi dành cho bạn nào!</strong></h1>
							<p class="m-b-40"></p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Giỏ hàng</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Nếu có gì thắc mắc <br> hãy liên hệ với chúng tôi.</strong></h1>
							<p class="m-b-40">Đường dây nóng hoạt động 6h - 20h. Email sẽ trả lời nhanh nhất sau 1 tiếng.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Liên hệ</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/about-img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Chào mừng đến với <span>cửa hàng văn phòng phẩm HHDT</span></h1>
						<h4>Vài thông tin nhỏ</h4>
						<p>Chúng tôi bán các mặt hàng văn phòng phẩm phù hợp mọi lứa tuổi, Chỉ nhập các mặt hàng đã qua kiểm định và có giấy tờ đầy đủ. </p>
						<p>Khách hàng khi mua sản phẩm hãy nhớ xem rõ thông tin sản phẩm và hướng dẫn sử dụng nhé. Khi đã giao mua hoặc giao dịch chỉ có thể trả hàng về và đổi mặt hàng trị giá ngang bằng mà không hoàn tiền. </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Liên hệ</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" Ở đâu bán rẻ hơn, chất lượng hơn các bạn cứ mua và ủng hộ. Chỉ mong sự tận tình và nhiệt huyết của chúng tôi làm các bạn nhớ mãi. "
					</p>
					<span class="lead">Sự hài lòng của các bạn là niềm vui của chúng tôi. </span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<?php
    include 'includes/showproduct.php';
    ?>
	<div class="menu-box">
		<div class="container">
		
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Danh sách các mặt hàng</h2>
						<p>Cứ lựa thoải mái, không gấp gáp nhá! ^^</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">Tất cả</button>
							<button data-filter=".But">Bút</button>
							<button data-filter=".Gom">Gôm</button>
							<button data-filter=".Hopbut">Hộp bút</button>
						</div>
					</div>
				</div>
			</div>
			<?php
$sql = "SELECT * FROM sanpham WHERE matl LIKE 'B%' ;";
$result = mysqli_query($conn, $sql);
$queryResult = mysqli_num_rows($result);

if($queryResult > 0){
	while ($row = mysqli_fetch_assoc($result)){?>
	<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid But">
					<div class="gallery-single fix">
					<img src="images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4><?php echo $row['tensp']; ?></h4>
						<h5><?php echo $row['dongia']; ?></h5>
						</div>
					</div>
				</div>
				
					</div>
<?php }}?>
				
			<?php
$sql = "SELECT * FROM sanpham WHERE matl LIKE 'G%' ;";
$result = mysqli_query($conn, $sql);
$queryResult = mysqli_num_rows($result);

if($queryResult > 0){
	while ($row = mysqli_fetch_assoc($result)){?>
	<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid Gom">
					<div class="gallery-single fix">
					<img src="images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4><?php echo $row['tensp']; ?></h4>
						<h5><?php echo $row['dongia']; ?></h5>
						</div>
					</div>
				</div>
				
					</div>
<?php }}?>

            <?php
$sql = "SELECT * FROM sanpham WHERE matl LIKE 'G%' ;";
$result = mysqli_query($conn, $sql);
$queryResult = mysqli_num_rows($result);

if($queryResult > 0){
	while ($row = mysqli_fetch_assoc($result)){?>
	<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid Gom">
					<div class="gallery-single fix">
					<img src="images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4><?php echo $row['tensp']; ?></h4>
						<h5><?php echo $row['dongia']; ?></h5>
						</div>
					</div>
				</div>
				
					</div>
<?php }}?>
				
				
				<?php
$sql = "SELECT * FROM sanpham WHERE matl LIKE 'H%' ;";
$result = mysqli_query($conn, $sql);
$queryResult = mysqli_num_rows($result);

if($queryResult > 0){
	while ($row = mysqli_fetch_assoc($result)){?>
	<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid Hopbut">
					<div class="gallery-single fix">
					<img src="images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4><?php echo $row['tensp']; ?></h4>
						<h5><?php echo $row['dongia']; ?></h5>
						</div>
					</div>
				</div>
				
					</div>
<?php }}?>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Số điện thoại</h4>
						<p class="lead">
							0908 455 275
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							vppHHDT@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Địa chỉ</h4>
						<p class="lead">
							126/48 Hoàng Hoa Thám P6 Q.Bình Thạnh
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>Về chúng tôi</h3>
					<p>Cửa hàng chúng tôi làm việc uy tín. Nhân viên thân thiện, nhiệt tình. Luôn đảm bảo bán cho các bạn những mặt hàng chất lượng tốt nhất, ngoài ra còn có nhiều lựa chọn để phù hợp với nhu cầu và túi tiền của các bạn.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Giờ làm việc</h3>
					<p><span class="text-color">Các ngày trong tuần: </span>8h - 22h</p>
					<p><span class="text-color">Thứ 7: </span>8h - 18h</p>
					<p><span class="text-color">Chủ nhật: </span>8h - 16h</p>
					<p><span class="text-color">Online :</span> 6h - 22h</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Thông tin liên hệ</h3>
					<p class="lead">126/48 Hoàng Hoa Thám P6 Q.Bình Thạnh</p>
					<p class="lead"><a href="#">0908 455 275</a></p>
					<p><a href="#">vppHHDT@gmail</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">Văn phòng phẩm HHDT</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>