const col = document.querySelectorAll('.col-md-6');
const colAwal = document.querySelectorAll('.col-awal');
const colAwalBooking = document.querySelectorAll('.col-awal-booking');
const colAkhir = document.querySelectorAll('.col-akhir');
const row = document.querySelectorAll('.row');
const carouselItem = document.querySelectorAll('.carousel-item img');
const judulContent = document.querySelector('.judul-content');
const judulBooking = document.querySelector('.judul-booking');
const jumbotronBooking = document.querySelector('.jumbotron-booking');
const imgJumbotron = document.querySelector('.img-jumbotron');

function query1280(b) {
	if (b.matches) {
		col.forEach(function (e) {
			e.classList.remove('order-2');
		});
		row.forEach(function (a) {
			a.classList.replace('text-end','text-start');
		});

		colAwal.forEach(function (awal) {
			awal.removeAttribute('data-aos');
			awal.setAttribute('data-aos','fade-up');
		});
		colAkhir.forEach(function (akhir) {
			akhir.removeAttribute('data-aos');
			akhir.setAttribute('data-aos','fade-right');
			akhir.classList.replace('text-end','text-start');
			akhir.style.marginTop = '-35px';
		});

		carouselItem.forEach(function (c) {
			c.removeAttribute('style');
		})
		judulBooking.classList.replace('mt-5','mt-1')
		jumbotronBooking.style.height = '100vh';
		imgJumbotron.style.height = '100%';
		imgJumbotron.style.width = '100%';

	}
}
let b = window.matchMedia("(max-width:1280.98px)");
query1280(b);
b.addListener(query1280);



function query1024(h) {
	if (h.matches) {
		col.forEach(function (e) {
			e.classList.remove('order-2');
		});
		row.forEach(function (a) {
			a.classList.replace('text-end','text-start');
		});

		colAwal.forEach(function (awal) {
			awal.removeAttribute('data-aos');
			awal.setAttribute('data-aos','fade-up');
		});
		colAkhir.forEach(function (akhir) {
			akhir.removeAttribute('data-aos');
			akhir.setAttribute('data-aos','fade-right');
			akhir.classList.replace('text-end','text-start');
			akhir.style.marginTop = '-35px';
		});

		carouselItem.forEach(function (c) {
			c.removeAttribute('style');
		})
		judulBooking.classList.replace('mt-5','mt-1')
		jumbotronBooking.style.height = '550px';
		imgJumbotron.style.height = '100%';
		imgJumbotron.style.width = '100%';

	}
}
let h = window.matchMedia("(max-width:1024.98px)");
query1024(h);
h.addListener(query1024);


function query868(f) {
	if (f.matches) {
		col.forEach(function (e) {
			e.classList.remove('order-2');
		});
		row.forEach(function (a) {
			a.classList.replace('text-end','text-start');
		});

		colAwal.forEach(function (awal) {
			awal.removeAttribute('data-aos');
			awal.setAttribute('data-aos','fade-up');
		});
		colAkhir.forEach(function (akhir) {
			akhir.removeAttribute('data-aos');
			akhir.setAttribute('data-aos','fade-right');
			akhir.classList.replace('text-end','text-start');
			// akhir.style.marginTop = '-35px';
		});

		carouselItem.forEach(function (c) {
			c.removeAttribute('style');
		})
		judulBooking.classList.replace('mt-5','mt-1')

		jumbotronBooking.style.height = '445px';
		imgJumbotron.style.height = '100%';
		imgJumbotron.style.width = '100%';

	}
}
let f = window.matchMedia("(max-width:868.98px)");
query868(f);
f.addListener(query868);

function query768(x) {
	if (x.matches) {
		col.forEach(function (e) {
			e.classList.remove('order-2');
		});
		row.forEach(function (a) {
			a.classList.replace('text-end','text-start');
		});

		colAwal.forEach(function (awal) {
			awal.removeAttribute('data-aos');
			awal.setAttribute('data-aos','fade-up');
		});
		colAkhir.forEach(function (akhir) {
			akhir.removeAttribute('data-aos');
			akhir.setAttribute('data-aos','fade-right');
			akhir.classList.replace('text-end','text-start');
			akhir.style.marginTop = "50px";
		});

		carouselItem.forEach(function (c) {
			c.removeAttribute('style');
		})
		judulBooking.classList.replace('mt-5','mt-1')

		jumbotronBooking.style.height = '445px';
		imgJumbotron.style.height = '100%';
		imgJumbotron.style.width = '100%';

	}
}
let x = window.matchMedia("(max-width:768.98px)");
query768(x);
x.addListener(query768);

function query576(y) {
	if (y.matches) {
		col.forEach(function (e) {
			e.classList.remove('order-2');
		});
		row.forEach(function (a) {
			a.classList.replace('text-end','text-start');
		})
		colAwal.forEach(function (awal) {
			awal.removeAttribute('data-aos');
			awal.setAttribute('data-aos','fade-up');
		})
		colAkhir.forEach(function (akhir) {
			akhir.removeAttribute('data-aos');
			akhir.setAttribute('data-aos','fade-right');
			akhir.classList.replace('text-end','text-start');
		})
		carouselItem.forEach(function (c) {
			c.removeAttribute('style');
		})
		judulBooking.classList.replace('mt-5','mt-1')

		jumbotronBooking.style.height = '250px';
		imgJumbotron.style.height = '100%';
		imgJumbotron.style.width = '100%';
	}
}
let y = window.matchMedia("(max-width:576.98px)");
query576(y);
y.addListener(query768);

function query320(y) {
	if (z.matches) {
		col.forEach(function (e) {
			e.classList.remove('order-2');
		});
		row.forEach(function (a) {
			a.classList.replace('text-end','text-start');
		})
		colAwal.forEach(function (awal) {
			awal.removeAttribute('data-aos');
			awal.setAttribute('data-aos','fade-up');
		})
		colAkhir.forEach(function (akhir) {
			akhir.removeAttribute('data-aos');
			akhir.setAttribute('data-aos','fade-right');
			akhir.classList.replace('text-end','text-start');
		})
		carouselItem.forEach(function (c) {
			c.removeAttribute('style');
		})
	judulBooking.classList.replace('mt-5','mt-1')

		judulBooking.style.marginTop = '-40px';
		jumbotronBooking.style.height = '200px';
		imgJumbotron.style.height = '100%';
		imgJumbotron.style.width = '100%';
	}
}
let z = window.matchMedia("(max-width:320.98px)");
query320(z);
z.addListener(query768);


