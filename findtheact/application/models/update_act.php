<?php 

class Update_act extends CI_model {




	// Function to retrieve an array with all product information
	function retrieve_data($slno){
		//echo $slno;
		$query = $this->db->get_where('profile',array('id'=>$slno));
		return $query->result_array();
		//$this-> load->view(carts/products/$p)
	}
	
	
	}
	
	?>