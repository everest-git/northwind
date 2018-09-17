<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Crud_model');
	}

	public function index($catalogo)
	{
		$this->load->view('templates/backend/header');
		switch ($catalogo) {
			case 1: // Productos
				$this->load->view('producto/index_view');
				# code...
				break;
			case 2: //Empleado
				$this->load->view('empleado/index_view');
				break;
			
			default:
				# code...
				break;
		}
		$this->load->view('templates/backend/footer');	
		switch ($catalogo) {
			case 1: // Producto
				# code...
				$this->load->view('producto/producto_jq');
				break;
			case 2: // Empleado
				$this->load->view('empleado/empleado_jq');
				break;
			
			default:
				# code...
				break;
		}
			
	}

	public function get_catalogo() 
	{
		if($this->input->is_ajax_request())
		{
			$catalogo = $this->input->post('catalogo');
			echo json_encode($this->Crud_model->get_all($catalogo));
		}	
	}

}

/* End of file Catalogo.php */
/* Location: ./application/controllers/Catalogo.php */