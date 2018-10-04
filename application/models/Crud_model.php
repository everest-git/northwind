<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_all($tabla, $select, $where, $order_by)
	{

		$query = $this->db->get($tabla);
		return $query->result();
	}

	public function get_by_id($tabla)
	{
		
	}

}

/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */