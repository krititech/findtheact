<?php 

class View_skill extends Model {


function View_skill()
{
parent::Model();
}

	// Function to retrieve an array with all product information
	function retrieve_data(){
		$query = $this->db->get('skill');
		return $query->result_array();
		//$this-> load->view(carts/products/$p)
	}
	
	
	}
	
	?>