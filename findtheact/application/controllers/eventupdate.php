<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventupdate extends CI_controller{


/****************************************************** update events ***********************************/		


function save()
{


$this->load->model('Updateevents');

if($this->input->post('submit')){
	
	

$this->Updateevents->process();                
 }
redirect('home/addevent');



}


/****************************************************** end ***********************************/		






}
?>
