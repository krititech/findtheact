<?php

    class Addactmanager extends CI_model{  
	 
        function process(){
	    
		$name = $this->input->post('username');
		$pwd=$this->input->post('pwd');
		$email = $this->input->post('email');
		
		$insert = array(
                        'username'=>$name,
			'email'=>$email,
			'pwd'=>$pwd,
			'type'=>2
                                     
                    );
		 $this->db->insert('registration', $insert);	
		
		
		
		}
		
		
		}
		?>