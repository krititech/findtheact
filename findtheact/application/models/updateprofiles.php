<?php


session_start();
    class Updateprofiles extends CI_model{  
	
	
/*********************************************************  update act manager profile *******************************************************/
	
	 
        function process(){
		
		
		
		$name = $this->input->post('user');
		$email = $this->input->post('email');
		
		$insert = array(
                        'username'=>$name
                                     
                    );
					//var_dump($insert);
		    $this->db->where('email', $email);
		 $this->db->update('registration', $insert);	
		
		if($_SESSION['data'])
{
$data=$_SESSION['data'];
//var_dump($_SESSION);
//echo "<br/>";
unset($_SESSION['data']['username']);
//var_dump($_SESSION);
//echo "<br/>";
//$data['username']=$name;
$_SESSION['data']['username']=$name;
//var_dump($_SESSION);
//echo $data['username'];
	}
		
		}
		
/**********************************************************************   end   ******************************************************************************/		
		}
		
/*************************************   file path: application/models  ************************************************/			
		
		?>