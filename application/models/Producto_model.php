<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_all()
	{
		$query = $this->db->get('Products');
		return $query->result();
	}
	

}

/* End of file Producto_model.php */
/* Location: ./application/models/Producto_model.php */