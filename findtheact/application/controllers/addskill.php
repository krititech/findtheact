<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addskill extends CI_controller{



function save()
{


$this->load->model('Addskills');

if($this->input->post('submit')){
	
	

$this->Addskills->process();                
 }
redirect('home/addskill');



}








}
?>
