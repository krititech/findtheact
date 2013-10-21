<?php
    class Addreg extends CI_model{  
	
	
 /***********************  Save new user details/sign up form details    ***************************************/  
	
	 
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
						'status'=>0
						
                        
                                     
                    );
					//var_dump($insert);
					
                   $this->db->insert('registration',$insert);
				   
				   
				   
 $to=$email;
// Your subject
$subject="Your confirmation link here";
// From
$header="from: noreply@findtheact.com";
// Your message
$message="Your Comfirmation link <br>";
$message.="Click here to activate your account<br>";
$message.="http://localhost/ci/index.php/userlogin/confirmation/$confirm_code";
// send email
		
		
		
		}
		
/************************************************************** end  *****************************************************************************/
		
		
		}
/******************************** this files resides in application/models/addreg.php  **************************************/
		?>