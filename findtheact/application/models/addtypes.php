<?php
    class Addtypes extends CI_model{  
	
	

	
	 
        function process(){
		
		
		$val=$_FILES['userfile']['name'];
		$image_process=$val;
		$name = $this->input->post('name');
        $priority = $this->input->post('priority');
		
		
		
		$insert = array(
                        'name'=>$name,
                        'priority'=>$priority,
						'image'=>$image_process
                                     
                    );
					//var_dump($insert);
					
                   $this->db->insert('type',$insert);
		
		
		
		}
		
		
		}
		?>