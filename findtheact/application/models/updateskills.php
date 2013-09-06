<?php
    class Updateskills extends CI_model{  
	

	 
        function process(){
		
		$id = $this->input->post('hiden');
		
		$name = $this->input->post('name');
		
		
		$insert = array(
                        'skillname'=>$name
                                     
                    );
					//var_dump($insert);
		    $this->db->where('slno', $id);
		    $this->db->update('skill', $insert);		
		
		}
		
		
		}
		?>