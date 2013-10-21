<?php

    class Insertvideo extends CI_model{  

        function process(){
		
		
		$val=$_FILES['userfile']['name'];
		$pname = $this->input->post('pname');
		$val1=$_FILES['video']['name'];
		
		if($val !== NULL OR $val1!== NULL)
		{
		if($val)
		{
		$insert = array(
           	        'video'=>$val,
			
			'added_by'=>$addedby
                    );
                    }
                    if($val1)
                    {
                    $insert = array(
           	        'video'=>$val1,
			
			'added_by'=>$addedby
                    );
                    
                    }
		
		 $this->db->insert('video', $insert);
		
		}
		}
		
		
		}
		?>
