<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
  session_start();
class Addeventondt extends CI_controller{
/*************************************  add event on date ************************************************/	  

    public function save(){
     $this->load->model('Adddiary');
if($_SESSION['data'])
{
$data=$_SESSION['data'];
$x=$data['email'];

}
$data['emailvalue']=$x;
if($this->input->post('submit'))
{

$this->Adddiary->process($data);
}  
	 
	 redirect('userlogin/diary');  
	   
	   
    }
/******************************************** end ***************************************************************/	
	}
	
	/*************************************   file path: application/controllers/  ************************************************/	
	
	?>