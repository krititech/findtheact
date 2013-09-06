<?php 

class Update_event extends CI_model {




	// Function to retrieve an array with all product information
	function retrieve_dataa($slno){
		//echo $slno;
		$query = $this->db->get_where('event',array('slno'=>$slno));
		return $query->result_array();
		//$this-> load->view(carts/products/$p)
	}
	
	
	}
	
	?>