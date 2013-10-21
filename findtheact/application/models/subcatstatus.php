<?php
    class Subcatstatus extends CI_model{  
	
	

	
	 
        function process(){
		
		$data = array(
                'indexstatus' => 1,
                
            );
		$id = $this->input->post('subcatid');
		foreach($id as $idval)
		{
		
      
		$this->db->update('subskill', $data, array('id' => $idval));
					
                  
		}
		
		
		}
		
		
		}
		?>
