<?php 

class Update_skill extends CI_model {


/***************************** update skill ******************************/

	// Function to retrieve an array with all product information
	function retrieve_data($slno){
		//echo $slno;
		$query = $this->db->get_where('skill',array('slno'=>$slno));
		return $query->result_array();
		//$this-> load->view(carts/products/$p)
	}
/***************************** end ******************************/	
	
	}
	
	?>