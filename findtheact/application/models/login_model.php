<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
 session_start();
Class Login_model extends CI_Model{
   
    
    public function validate(){
        // grab user input
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        // Prep the query
        $this->db->where('userid', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('login');
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
}
?>