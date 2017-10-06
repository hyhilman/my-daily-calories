<!DOCTYPE html>
<html>

<link rel="shortcut icon" href="image/head.png" type="image/png">
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?=base_url()?>css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url()?>css/lato.css">
<link rel="stylesheet" href="<?=base_url()?>css/w3-colors-camo.css">
<link rel="stylesheet" href="<?=base_url()?>css/w3-colors-signal.css">
<link rel="stylesheet" href="<?=base_url()?>css/w3-theme-black.css">
<script>
  function myFunction() {
    alert("Maaf, Anda Harus Login Terlebih Dahulu!");
}
</script>
<style>
  .bgimg-1 { //header
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    background-image: url("<?=base_url()?>image/back2.jpg");   
    height: 300px;
  } 
  .bgimg-2 {
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    background-image: url("<?=base_url()?>image/back1.jpg");   
    height: 300px;
  }
  .bgimg-3 {
  	background-position: center;
    background-attachment: fixed;
    background-size: cover;
    background-image: url("<?=base_url()?>image/back9.jpg");   
    height: 600px;
  }
</style>

<body id="myPage">

	<!-- Navbar -->
	<div class="w3-top">
		<ul class="w3-navbar w3-theme-d2 w3-left-align">
			<li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
				<a class="w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
			</li>
			<li><a class="w3-teal"><i class="fa fa-home w3-margin-right"></i>My Daily Calories</a></li>
			<li class="w3-hide-small"><a href="<?=base_url()?>" class="w3-hover-white">Hitung Kalori</a></li>
			<li class="w3-hide-small w3-dropdown-hover">
				<a href="javascript:void(0);" title="Notifications">Komposisi Makanan <i class="fa fa-caret-down"></i></a>     
				<div class="w3-dropdown-content w3-white w3-card-4">
				<?php if(!isset($_SESSION['id_akun'])): ?>
 					<a onclick="myFunction()">Susun Komposisi Makanan</a>

					<?php else: ?>
					<a href="<?=base_url()?>c_member/susun_makanan">Susun Komposisi Makanan</a>
				</div>
				<?php endif; ?>
			</li>
			<li class="w3-hide-small"><a href="<?=base_url()?>c_nonmember/bantuan" class="w3-hover-white">Bantuan</a></li>
			<?php if(!isset($_SESSION['id_akun'])): ?>
				<li class="w3-hide-small w3-right"><a href="<?=base_url()?>c_akun/daftar" style="width:90px">Daftar</a><li>  
					<li class="w3-hide-small w3-right">
						<a href="<?=base_url()?>c_akun/masuk_sistem" class="w3-btn w3-hover-white " style="width:90px">Masuk</a>
					</li>  
					<?php else: ?>
						<li class="w3-hide-small w3-right w3-dropdown-hover"><a href="javascript:void(0);" title="akun">
							<i class="fa fa-user"></i> <?=$_SESSION['username']?> </a><div class="w3-dropdown-content w3-white w3-card-4">
							<a href="<?=base_url()?>c_akun/keluar_sistem">Logout</a>
						</div>
					</li>
				<?php endif; ?>
			</li>
		</ul>
	</div>