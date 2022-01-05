<footer class="p-5 bg-light" >
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-md-4 text-center">
				<h2 class="mt-5">Amerta</h2>
				<h4>Creative Studio</h4>
			</div>
			<div class="col-md-4">
				<ul class="">
					<li><i class="fas fa-angle-right me-2"></i><a href="<?= base_url(); ?>" class="text-decoration-none link-dark">Home</a></li>
					<li><i class="fas fa-angle-right me-2"></i><a href="<?= base_url(); ?>category" class="text-decoration-none link-dark">Category</a></li>
					<li><i class="fas fa-angle-right me-2"></i><a href="<?= base_url(); ?>booking" class="text-decoration-none link-dark">Booking</a></li>
					<li><i class="fas fa-angle-right me-2"></i><a href="<?= base_url(); ?>contactus" class="text-decoration-none link-dark"></i>Contact Us</a></li>
					
				</ul>
			</div>
			<div class="col-md-4">
				<ul class=" ">
					<li><i class="fas fa-map-marker-alt me-2"></i>Jl.romansa Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, et!</li>
					<li><i class="fas fa-phone-alt me-2"></i>089889979998</li>
					<li><i class="far fa-envelope me-2"></i>amerta@g,gmail.com</li>
					<li><i class="fab fa-instagram me-2"></i>Instagram</li>
					<li><i class="fab fa-facebook-f me-2"></i>Facebook</li>
					<li><i class="fab fa-whatsapp me-2"></i>Whatsapp</li>
				</ul>
			</div>
		</div>
	</div>

</footer>
<section class="copy">
	<p class="copyRight">&copyCopyright Amerta Creative Studio 2021 - Developer by :</p>
	<a href="https://www.instagram.com/wicaksanabimaarya/" class="developer" target="blank"><i class="fab fa-instagram"></i> Bima Arya Wicaksana</a>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbww049tkx83wB2D7V4BDvtdbMoHgUaf74YhPlZrh2XmJqOwJ-bLXeSn1UHHpTkr4KG-/exec'
  const form = document.forms['data-booking']
  const btnLoading = document.querySelector('.btnLoading');
  const btnKirim = document.querySelector('.btnKirim');
  const alertKirim = document.querySelector('.alertKirim');

  form.addEventListener('submit', function () {
  	// body...
    // ketika tombol submit di klik
    // tampilkann tombol loading hilangkan tombol kirim
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');

    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
      	btnLoading.classList.toggle('d-none');
   		  btnKirim.classList.toggle('d-none');
   		  alertKirim.classList.toggle('d-none')
   		  form.reset();
      	console.log('Success!', response)
      })
      .catch(error => console.error('Error!', error.message))
  })
</script>
<script>
	const card = document.querySelectorAll(".kartu");
		card.forEach((img, i) => {
			img.dataset.aos = 'fade-up';
			img.dataset.aosDelay = i * 100;
			img.dataset.aosDuration = 700;
			img.dataset.anchorPlacement = "top-bottom";
		})
  AOS.init();
</script>
<script src="<?= base_url(); ?>assets/js/script.js"></script>
</body>
</html>