<?php
    class Addreg extends CI_model{  
	
	

	
	 
        function process(){
		
		
		
		$name = $this->input->post('username');
        $email = $this->input->post('email');
        $passw = $this->input->post('password');
        $type = $this->input->post('type');
        $box = $this->input->post('box');
		$confirm_code=md5(uniqid(rand()));
        	
		
		$insert = array(
                        'username'=>$name,
                        'email'=>$email,
                        'pwd'=>$passw,
                        'type'=>$type,
                        'newletterstatus'=>$box,
						'confirm_code'=>$confirm_code,
						'status'=>1
						
                        
                                     
                    );
					//var_dump($insert);
					
                   $this->db->insert('registration',$insert);
		
		
		
		}
		
		
		}
		?>