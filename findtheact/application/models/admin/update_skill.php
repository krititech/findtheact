<?php 

class Update_skill extends Model {


function Update_skill()
{
parent::Model();
}

	// Function to retrieve an array with all product information
	function retrieve_data($slno){
		//echo $slno;
		$query = $this->db->get_where('skill',array('id'=>$slno));
		return $query->result_array();
		//$this-> load->view(carts/products/$p)
	}
	
	
	}
	
	?>