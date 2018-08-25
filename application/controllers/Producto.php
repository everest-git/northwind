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
		$this->load->view('templates/backend/footer');	
	}

	public function get_productos()
	{
		if($this->input->is_ajax_request())
		{
			echo json_encode($this->Producto_model->get_all());
		}	
	}
}

/* End of file Producto.php */
/* Location: ./application/controllers/Producto.php */