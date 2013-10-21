<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addevent extends CI_controller{

/***************************** add event ******************************/

function save()
{


$this->load->model('Addevents');

if($this->input->post('submit')){
	
	

$this->Addevents->process();                
 }
 
 
 /***************************** end ******************************/
redirect('home/addevent');



}








}
?>
