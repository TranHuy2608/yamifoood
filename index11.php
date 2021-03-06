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
						<li class="nav-item active"><a class="nav-link" href="index.html">Trang ch???</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">V??? ch??ng t??i</a></li>
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
						<li class="nav-item"><a class="nav-link" href="contact.html">Li??n h???</a></li>
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
							<h1 class="m-b-20"><strong>Ch??o m???ng ?????n <br> C???a h??ng v??n ph??ng ph???m HHDT</strong></h1>
							<p class="m-b-40">Ch??ng t??i b??n c??c m???t h??ng v??n ph??ng ph???m cho m???i l???a tu???i. Ph???c v??? v?? t????ng t??c t???n t??nh.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">C??c s???n ph???m</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>H??y nhanh tay <br> ?????n xem c??c m???t h??ng c???a ch??ng t??i d??nh cho b???n n??o!</strong></h1>
							<p class="m-b-40"></p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Gi??? h??ng</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>N???u c?? g?? th???c m???c <br> h??y li??n h??? v???i ch??ng t??i.</strong></h1>
							<p class="m-b-40">???????ng d??y n??ng ho???t ?????ng 6h - 20h. Email s??? tr??? l???i nhanh nh???t sau 1 ti???ng.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Li??n h???</a></p>
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
						<h1>Ch??o m???ng ?????n v???i <span>c???a h??ng v??n ph??ng ph???m HHDT</span></h1>
						<h4>V??i th??ng tin nh???</h4>
						<p>Ch??ng t??i b??n c??c m???t h??ng v??n ph??ng ph???m ph?? h???p m???i l???a tu???i, Ch??? nh???p c??c m???t h??ng ???? qua ki???m ?????nh v?? c?? gi???y t??? ?????y ?????. </p>
						<p>Kh??ch h??ng khi mua s???n ph???m h??y nh??? xem r?? th??ng tin s???n ph???m v?? h?????ng d???n s??? d???ng nh??. Khi ???? giao mua ho???c giao d???ch ch??? c?? th??? tr??? h??ng v??? v?? ?????i m???t h??ng tr??? gi?? ngang b???ng m?? kh??ng ho??n ti???n. </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Li??n h???</a>
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
						" ??? ????u b??n r??? h??n, ch???t l?????ng h??n c??c b???n c??? mua v?? ???ng h???. Ch??? mong s??? t???n t??nh v?? nhi???t huy???t c???a ch??ng t??i l??m c??c b???n nh??? m??i. "
					</p>
					<span class="lead">S??? h??i l??ng c???a c??c b???n l?? ni???m vui c???a ch??ng t??i. </span>
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
						<h2>Danh s??ch c??c m???t h??ng</h2>
						<p>C??? l???a tho???i m??i, kh??ng g???p g??p nh??! ^^</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">T???t c???</button>
							<button data-filter=".But">B??t</button>
							<button data-filter=".Gom">G??m</button>
							<button data-filter=".Hopbut">H???p b??t</button>
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
						<h4>S??? ??i???n tho???i</h4>
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
						<h4>?????a ch???</h4>
						<p class="lead">
							126/48 Ho??ng Hoa Th??m P6 Q.B??nh Th???nh
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
					<h3>V??? ch??ng t??i</h3>
					<p>C???a h??ng ch??ng t??i l??m vi???c uy t??n. Nh??n vi??n th??n thi???n, nhi???t t??nh. Lu??n ?????m b???o b??n cho c??c b???n nh???ng m???t h??ng ch???t l?????ng t???t nh???t, ngo??i ra c??n c?? nhi???u l???a ch???n ????? ph?? h???p v???i nhu c???u v?? t??i ti???n c???a c??c b???n.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Gi??? l??m vi???c</h3>
					<p><span class="text-color">C??c ng??y trong tu???n: </span>8h - 22h</p>
					<p><span class="text-color">Th??? 7: </span>8h - 18h</p>
					<p><span class="text-color">Ch??? nh???t: </span>8h - 16h</p>
					<p><span class="text-color">Online :</span> 6h - 22h</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Th??ng tin li??n h???</h3>
					<p class="lead">126/48 Ho??ng Hoa Th??m P6 Q.B??nh Th???nh</p>
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
						<p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">V??n ph??ng ph???m HHDT</a></p>
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