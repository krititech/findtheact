<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_controller{
    
  

    public function index(){
        // Load our view to be displayed
        // to the user
       $this->load->view('admin/login_view');
       //echo "aaa";
    }
	

    public function process(){
	
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
		
		
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            //$this->index();
			 
			echo "aaa";
        }else{
            // If user did validate, 
            // Send them to members area
        //redirect('home');
		 foreach($result as $row)
     {
       $sess_array = array(
         
         'username' => $row->userid
       );
	   }
	   $_SESSION['user']='admin';
       
	   
		redirect('home/index');
        }    
		    
    }
	}
?>
