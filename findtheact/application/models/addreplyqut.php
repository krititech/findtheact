<?php
    class Addreplyqut extends CI_model{  
	
        function process(){
		
		$replyto = $this->input->post('to');
		$replyfrom = $this->input->post('from');
		$sub = $this->input->post('sub');
		$msg = $this->input->post('msg');
		
		
		$insert = array(
                        'replyto'=>$replyto,
						'replyfrom'=>$replyfrom,
						'subject'=>$sub,
						'message'=>$msg
                                     
                    );
					//var_dump($insert);
					
                   $this->db->insert('replyquoats',$insert);
	
		$headers = "From:" . $replyfrom;
		mail($replyto,$sub,$msg,$headers);
		
		
		}
		
		
		}
		?>