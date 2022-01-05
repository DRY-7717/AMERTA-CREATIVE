<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $judul; ?></title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/Amerta.png ">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css ">
</head>
<body>
<nav class="bg-light shadow">
    <div class="logo">
      <a href="<?= base_url(); ?> "><img src="<?= base_url();?>assets/img/Amerta.png" alt="" width="115" height="45"></a>
    </div>
    
      <ul>
        <li><a href="<?= base_url(); ?>">Home</a></li>
        <li><a href="<?= base_url(); ?>category ">Category</a></li>
        <li><a href="<?= base_url(); ?>booking">Booking</a></li>
        <li><a href="<?= base_url(); ?>contactus">Contact Us</a></li>
      </ul>
      <div class="menu-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" >
      <input type="checkbox">
      <span></span>
      <span></span>
      <span></span>
    </div>   
  </nav>

<!-- off canvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel" class="fw-bolder">Amerta Creative Studio</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-group list-group-flush ">
      <li class="list-group-item  offList border-0 mb-3 "><a href="<?= base_url(); ?> " class="link-dark  text-decoration-none fw-bold"><i class="fas fa-home me-1"></i> Home</a></li>
      <li class="list-group-item offList  border-0 mb-3"><a href="<?= base_url(); ?>category " class="link-dark  text-decoration-none fw-bold"><i class="fas fa-clipboard-list me-2"></i>Category</a></li>
      <li class="list-group-item  offList border-0 mb-3"><a href="<?= base_url(); ?>booking " class="link-dark  text-decoration-none fw-bold"><i class="fas fa-money-check-alt me-2"></i>Booking</a></li>
      <li class="list-group-item offList  border-0 mb-3"><a href="<?= base_url(); ?>contactus " class="link-dark  text-decoration-none fw-bold"><i class="fas fa-envelope me-2"></i>Contact Us</a></li>
     
    </ul>
  </div>
</div>

<div class="chatLangsung shadow">
 <a href="<?= base_url(); ?>contactus/chatlangsung" class="text-decoration-none link-dark" target="blank"> <i class="fab fa-whatsapp"></i></a>
</div>