<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Typeupdate extends CI_controller{


/****************************************** upadate type *********************************************/


function save()
{


$this->load->model('Updatetypes');

if($this->input->post('submit')){
	
	

$this->Updatetypes->process();                
 }
//redirect('home/addtype');

/****************************************** end *********************************************/


}








}
?>
