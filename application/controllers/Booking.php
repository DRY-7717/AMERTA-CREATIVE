<?php 

/**
 * 
 */
class Booking extends CI_Controller
{
	public function index()
	{
		$data["judul"] = "Amerta Creative | Booking";
		$this->load->view('template/header',$data);
		$this->load->view('booking/index');
		$this->load->view('template/footer');
	}
	public function order()
	{
	$nama = $_POST['Nama'];
	$email = $_POST['Email'];
	$alamat = $_POST['Alamat'];
	$tanggal = $_POST['Tanggal_Pemesanan'];
	$kategori = $_POST['Kategori'];
	$noWa = $_POST['noWa'];
	$noHp = $_POST['No_Handphone'];

	header('Location: https://api.whatsapp.com/send?phone='.$noWa.'&text=Nama:%20'.$nama.'%20%0DEmail:%20'.$email.'%20%0DAlamat:%20'.$alamat.'%20%0DHandphone:%20'.$noHp.'%20%0DTanggal:%20'.$tanggal.'%20%0DKategori:%20'.$kategori);
	}
}


 ?>