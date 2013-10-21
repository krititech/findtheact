<?php 

class Update_type extends CI_model {




	// Function to retrieve an array with all product information
	function retrieve_type($slno){
		//echo $slno;
		$query = $this->db->get_where('type',array('slno'=>$slno));
		return $query->result_array();
		//$this-> load->view(carts/products/$p)
	}
	
	
	}
	
	?>