<?php
    class Updatetypes extends CI_model{  
	

	 
        function process(){
		
		$id = $this->input->post('hiden');
        
		$val=$_FILES['userfile']['name'];
		$image_process=$val;
		$name = $this->input->post('name');
        $priority = $this->input->post('priority');
		
		
		$update = array(
                        'name'=>$name,
                        'priority'=>$priority,
                        'image'=>$image_process
                                    
                    );
					var_dump($update);
		    $this->db->where('slno', $id);
		    $this->db->update('type', $update);		
		
		}
		
		
		}
		?>