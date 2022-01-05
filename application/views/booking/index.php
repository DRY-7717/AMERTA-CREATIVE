<div class="jumbotron-booking mb-5">
	<img src="<?= base_url(); ?>assets/img/interior.jpg " alt="" class="img-jumbotron">
	<h1 class="judul-content">Booking</h1>
    <ul class="link-menu">
      <li>
      	<h3>
      		<a href="<?= base_url(); ?>home" class="text-decoration-none link-light">Home</a>
      	 			<i class="fas fa-chevron-right kanan me-2 ms-2"></i>
      	 	<a href="<?= base_url(); ?>booking" class="text-decoration-none link-light">Booking</a>
     		</h3>
    	</li>
    </ul>
</div>

<section class="secbooking mt-5 text-center">
      <div class="container ">
        <div class="row text-center mb-5">
          <div class="col">
            <h2 class="judul-booking fw-bold mt-5" data-aos="fade-up"  data-aos-duration="400">Let's Booking Now</h2>
            <p data-aos="fade-up" data-aos-delay="500" data-aos-duration="400">Silahkan lakukan pemesanan dihalaman ini dan alangkah lebih baiknya sebelum memesan silahkan ajukan pertanyaan tentang pemesanan anda di halaman ini <a href="<?= base_url(); ?>contactus " class="text-decoration-none">Contact Us</a></p>
          </div>
        </div>

        <div class="row text-start mt-5">
        	<div class="col-md-6 col-awal-booking" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
        		<img src="<?= base_url(); ?>assets/img/order.png " alt="order" style="height: 450px; margin-top: -70px;">
        	</div>
        	<div class="col-md-6 col-akhir " data-aos="fade-left" data-aos-duration="700" data-aos-delay="300">
        		<div class="alert alert-success alert-dismissible fade show d-none alertKirim" role="alert">
						  <strong>Terima Kasih</strong>, telah melakukan pemesanan di studio kami, Semoga semakin berkah selalu.
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>

        		<form action="<?= base_url(); ?>booking/order " method="post" target="blank" class="row g-3" name="data-booking">
					  <div class="col-md-4">
					    <label for="inputEmail4" class="form-label">Nama</label>
					    <input type="text" class="form-control" name="Nama" >
					  </div>
					  <div class="col-md-4">
					    <label for="inputPassword4" class="form-label">No.Handphone</label>
					    <input type="text" class="form-control" name="No_Handphone">
					    <input type="hidden" class="form-control" name="noWa" value="6289638307725">
					  </div>
					  <div class="col-md-4">
						    <label for="inputState" class="form-label">Kategori</label>
						    <select id="inputState" class="form-select" name="Kategori">
						      <option selected>Pilih Kategori</option>
						      <option>BTS(Buku Tahunan Sekolah)</option>
						      <option>Wisuda</option>
						      <option>Weding</option>
						      <option>Foto Keluarga</option>
						      <option>Webinar Live Stream</option>
						    </select>
						  </div>
					  <div class="col-6">
					    <label for="inputAddress" class="form-label">Email</label>
					    <input type="email" class="form-control" name="Email" >
					  </div>
					  <div class="col-6">
					    <label for="inputAddress2" class="form-label">Tanggal Pesan</label>
					    <input type="date" class="form-control" name=Tanggal_Pemesanan>
					  </div>

					  <div class="col-md-12">
					    <label for="inputAddress2" class="form-label">Alamat</label>
					    <textarea class="form-control" name="Alamat" id="floatingTextarea"></textarea>
					  </div>
					  <div class="col-12">
					    <button type="submit" class="btn btn-primary btnKirim" name="order">Order Now</button>
					    <button class="btn btn-primary d-none btnLoading" type="button" disabled>
							  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
	  						Loading...
							</button>
					  </div>
				</form>
        	</div>
        </div>
   
      </div>
  </section>			