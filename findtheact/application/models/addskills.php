<?php
    class Addskills extends CI_model{  
	
	

	
	 
        function process(){
		
		$val=$_FILES['userfile']['name'];
		$image_process=$val;
		$name = $this->input->post('name');
        $descp = $this->input->post('descp');
		$type= $this->input->post('type');
		
		
		$insert = array(
                        'skillname'=>$name,
                        'descp'=>$descp,
						'image'=>$image_process,
						'typevalue'=>$type
                                     
                    );
					//var_dump($insert);
					
                   $this->db->insert('skill',$insert);
		
		
		
		}
		
		
		}
		?>