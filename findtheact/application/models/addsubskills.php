<?php
    class Addsubskills extends CI_model{  
	
	

	
	 
        function process(){
		
		
		
		$name = $this->input->post('cat');
        $subname = $this->input->post('subname');
        $descp = $this->input->post('descp');
		
		
		$insert = array(
                        'category_id'=>$name,
                        'sub_category_name'=>$subname,
                        'descp'=>$descp
                                     
                    );
					//var_dump($insert);
					
                   $this->db->insert('subskill',$insert);
		
		
		
		}
		
		
		}
		?>