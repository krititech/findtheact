<?php
    class Adddiary extends CI_model{  
	
	

	
/*************************************   add diary by act person ************************************************/		 
        function process($emailvalue){
		
		foreach($emailvalue as $email)
		{
		$emailval=$email;
		}
		echo $emailval;
		
		$date = $this->input->post('dateval');
		$subject = $this->input->post('subject');
		$descr = $this->input->post('descr');
		
		
		$insert = array(
                        'user_id'=>$emailval,
						'ondate'=>$date,
						'subject'=>$subject,
						'description'=>$descr
                                     
                    );
					//var_dump($insert);
					
                   $this->db->insert('diary',$insert);
		
		
		
		}
/*************************************   end  ************************************************/		
		}
		
/*************************************   file path: application/models/  ************************************************/	
		?>