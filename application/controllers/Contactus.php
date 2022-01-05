<?php 

/**
 * 
 */
class Contactus extends CI_Controller
{
	public function index()
	{
		$data["judul"] = "Amerta Creative | Contact Us";
		$this->load->view('template/header',$data);
		$this->load->view('contactus/index');
		$this->load->view('template/footer');
	}
	public function message()
		{
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$email = $_POST['email'];
			$pesan = $_POST['pesan'];
			$noWa = $_POST['noWa'];

			header('Location: https://api.whatsapp.com/send?phone='.$noWa.'&text=Nama:%20'.$nama.'%20%0DEmail:%20'.$email.'%20%0DAlamat:%20'.$alamat.'%20%0DPesan:%20'.$pesan);
		}
	public function chatlangsung()
		{
			header('Location: https://api.whatsapp.com/send?phone=6289638307725&text=Nama:%20%20%0DEmail:%20%20%0DAlamat:%20%0DPesan:%20');
		}	
}
	



 ?>