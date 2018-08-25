<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('templates/backend/header');
		$this->load->view('producto/index_view');
		$this->load->view('templates/admin/footer');	
	}

}

/* End of file Producto.php */
/* Location: ./application/controllers/Producto.php */