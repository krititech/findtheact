<?php
    class Addevents extends CI_model{  
	
	

	
	 
        function process(){
		
		
		
		$name = $this->input->post('name');
		
		
		$insert = array(
                        'eventname'=>$name
                                     
                    );
					//var_dump($insert);
					
                   $this->db->insert('event',$insert);
		
		
		
		}
		
		
		}
		?>