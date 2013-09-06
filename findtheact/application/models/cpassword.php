<?php
    class Cpassword extends CI_model{  
	
	

	
	 
        function cpassw($email,$pass,$cpass){
	$query = $this->db->get_where('registration',array('email'=>$email,'type'=>2));
	$data=$query->result();
	$pwd=$data[0]->pwd;
	if($pwd!=$cpass)
	{
	    echo "Current Password Is Not Valid";
	}
	else{
	    
	    
	     $insert = array(
                        'pwd'=>$pass
                                     
                    );
					//var_dump($insert);
		    $this->db->where('email', $email,'type',1);
		 $q=$this->db->update('registration', $insert);
		 if($q)
		 {
		    echo "Successfully Password changed.";
		 }
	    
	}
	
		}
		
		
		}
		?>