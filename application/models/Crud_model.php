<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_all($tabla)
	{
		$query = $this->db->get($tabla);
		return $query->result();
	}

}

/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */