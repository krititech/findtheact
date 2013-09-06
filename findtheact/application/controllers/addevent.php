<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addevent extends CI_controller{



function save()
{


$this->load->model('Addevents');

if($this->input->post('submit')){
	
	

$this->Addevents->process();                
 }
redirect('home/addevent');



}








}
?>
