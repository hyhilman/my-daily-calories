<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>MDC Admin - Lihat Member</title>
 <!-- Bootstrap -->
 <link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
 <link href="<?=base_url()?>css/font-awesome.min.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
 <nav class="navbar navbar-dark bg-info header" style="margin-bottom: 80px;">
  <div class="container">
   <a class="navbar-brand" href="#">
    <img src="images/youthpress.png" height="30" class="" alt="">
   </a>
   <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
   aria-expanded="false" aria-label="Toggle navigation" style="float:right;"></button>
   <div class="collapse navbar-toggleable-md" id="navbarResponsive">
    <ul class="nav navbar-nav float-lg-right">
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="http://example.com" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Admin&nbsp;</a>
      <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="responsiveNavbarDropdown" style="margin-top:12px;">
       <a class="dropdown-item" href="<?=base_url()?>c_akun/keluar_sistem">Logout</a>
      </div>
     </li>
    </ul>
   </div>
  </div>
 </nav>