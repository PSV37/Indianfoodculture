<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Productmodel extends CI_Model
{
	public function add_product($product_image)
	{
		return $this->db->insert('tblitem', $this->getdata_to_insert($product_image));
	}
	
	function getdata_to_insert($product_image)
	{
		$data = array(
			'ItemName' => $this->input->post('Name_product'),
			'ItemRecipe' => $this->input->post('Product_Recipe'),
			'Ingredients' => $this->input->post('Product_Ingredients'),
			'CatId' => $this->input->post('Product_Categorey'),
			'StateId' => $this->input->post('Product_States'),
			'ItemImagePath' =>$product_image
			
		);
		return $data;
	}
	
	public function fetch_state__list()
	{
		$this->db->select('StateId, StateName');
		//$this->db->where('pcategory_status', 1);
		return $this->db->get('tblstate')->result_array();
	}

	public function fetch_categorey__list()
	{
		$this->db->select('CatId, Category');
		return $this->db->get('tblcategory')->result_array();
	}
}