<div class="jumbotron-booking mb-5">
	<img src="<?= base_url(); ?>assets/img/interior.jpg " alt="" class="img-jumbotron">
	<h1 class="judul-content">Contact Us</h1>
    <ul class="link-menu">
      <li>
      	<h3>
      		<a href="<?= base_url(); ?>home" class="text-decoration-none link-light">Home</a>
      	 			<i class="fas fa-chevron-right kanan me-2 ms-2"></i>
      	 	<a href="<?= base_url(); ?>booking" class="text-decoration-none link-light">Contact us</a>
     		</h3>
    	</li>
    </ul>
</div>

<section class="secbooking mt-5 text-center">
      <div class="container ">
        <div class="row text-center mb-5">
          <div class="col">
            <h2 class="judul-booking fw-bold mt-5" data-aos="fade-up"  data-aos-duration="400">Send Your Message</h2>
            <p data-aos="fade-up" data-aos-delay="500" data-aos-duration="400">Silahkan kirim pesan untuk bertanya tentang amerta creative studio atau silahkan masukan saran untuk kami </p>
          </div>
        </div>

        <div class="row text-start mt-5">
        	<div class="col-md-6 col-awal-booking" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
        		<img src="<?= base_url(); ?>assets/img/email.png " alt="order" style="height: 450px; margin-top: -70px;">
        	</div>
        	<div class="col-md-6 col-akhir " data-aos="fade-left" data-aos-duration="700" data-aos-delay="300">
							 <form class="row g-3 form-pesan" action="<?= base_url(); ?>contactus/message " method="post" target="blank">
					  <div class="col-md-6">
					    <label for="inputEmail4" class="form-label">Nama :</label>
					    <input type="text" class="form-control" name="nama" id="nama">
					    
					  </div>
					 
					  <div class="col-md-6">
					    <label for="inputAddress" class="form-label labelNama">Email :</label>
					    <input type="email" class="form-control" name="email" id="email">
					  </div>
					  
					  <div class="col-md-12">
					    <label for="inputAddress2" class="form-label">Alamat :</label>
					    <input type="text" class="form-control" name="alamat" id="alamat">
					  </div>
					 <div class="col-md-12">
					  <label for="floatingTextarea2" class="form-label">Message :</label>
					  <textarea class="form-control" placeholder="Leave a your message here"  style="height: 100px" name="pesan" id="pesan"></textarea>
					</div>
					<input type="hidden" name="noWa" value="6289638307725">
					  <div class="col-12">
					    <button type="submit" class="btn btn-primary tombolPesan" name="kirim">Kirim</button>
					  </div>
				</form>
        	
        	</div>
        </div>
   
      </div>
  </section>			

















 