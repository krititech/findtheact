<?php
    class Addskills extends CI_model{  
	
	

	
	 
        function process(){
		
		
		
		$name = $this->input->post('name');
		
		
		$insert = array(
                        'skillname'=>$name
                                     
                    );
					//var_dump($insert);
					
                   $this->db->insert('skill',$insert);
		
		
		
		}
		
		
		}
		?>