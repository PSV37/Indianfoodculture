<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Brandmodel extends CI_Model
{
	public function add_brand($brand_image)
	{
		$data = array(
			'ItemName' => $this->input->post('Name_product'),
			'ItemImagePath' => $brand_image
		);
		return $this->db->insert('tblitem', $data);
	}
	
	/***************** Fetch only active brands for dropdownlist ***************/
	public function fetch_active_brands()
	{
		$this->db->select('brand_id, brand_name');
		$this->db->where('brand_status', 1);
		return $this->db->get('brand')->result_array();
	}

	
	public function fetch_brand_list()
	{
		$this->db->select('brand_id, brand_name, brand_status');
		return $this->db->get('brand')->result_array();
	}
}