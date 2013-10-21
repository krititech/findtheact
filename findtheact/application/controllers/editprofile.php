<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Editprofile extends CI_controller{

/***************************** edit Act manager profile controller ******************************/

function save()
{
  
$this->load->model('updateprofiles');

if($this->input->post('submit')){
	
	

$this->updateprofiles->process();                
 }
redirect('userlogin/editprofile');


}

/***************************** end ******************************/

}
/*************************************   file path: application/controllers/  ************************************************/	
?>
