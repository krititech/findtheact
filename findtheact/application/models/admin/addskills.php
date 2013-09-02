<?php
    class Addskills extends Model{  
	
	
	
	function Addskills(){
	
	parent::Model();
	
	
	}
	
	 
        function process(){
		
		
		
		$name = $this->input->post('name');
		
		
		$insert = array(
                        'skillname'=>$name
                                     
                    );
					//var_dump($insert);
					
                   $this->db->insert('skill',$insert);
		
		
		
		}
		
		
		}
		?>