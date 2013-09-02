<?php
    class Updateskills extends Model{  
	
	
	
	function Updateskills(){
	
	parent::Model();
	
	
	}
	
	 
        function process(){
		
		$id = $this->input->post('hiden');
		
		$name = $this->input->post('name');
		
		
		$insert = array(
                        'skillname'=>$name
                                     
                    );
					//var_dump($insert);
		    $this->db->where('id', $id);
		    $this->db->update('skill', $insert);		
		
		}
		
		
		}
		?>