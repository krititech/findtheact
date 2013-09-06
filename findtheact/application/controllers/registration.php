<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registration extends CI_controller{



function save()
{


$this->load->model('Addreg');

if($this->input->post('submit')){
	
	

$this->Addreg->process();                
 }
//redirect('home/addskill');



}








}
?>
