<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Userlogin_model extends CI_Model{
   
  /**************************************  User login model ****************************************/  
    public function validate(){
        // grab user input
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        // Prep the query
        $this->db->where('email', $username);
        $this->db->where('pwd', $password);
        
        // Run the query
        $query = $this->db->get('registration');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            
					
           
             return $query->result();

			
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
	
	
	/**************************************  End ****************************************/
}
?>
