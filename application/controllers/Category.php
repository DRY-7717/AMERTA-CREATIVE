<?php 

/**
 * 
 */
class Category extends CI_Controller
{
	public function index()
	{
		$data["judul"] = "Amerta Creative | Category";
		$this->load->view('template/header',$data);
		$this->load->view('category/index');
		$this->load->view('template/footer');
	}
}


 ?>