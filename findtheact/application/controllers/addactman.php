<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Addactman extends CI_controller{



function save()
{
  
$this->load->model('addactmanager');

if($this->input->post('submit')){
	
    

$this->addactmanager->process();                
 }
redirect('userlogin/addactmanager');


}

}
?>
