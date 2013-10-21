<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addsubskill extends CI_controller{

/****************************************************** add subskills/subcategory ***********************************/		


function save()
{


$this->load->model('Addsubskills');

if($this->input->post('submit')){
	
	

$this->Addsubskills->process();                
 }
redirect('home/addsubskill');



}

/****************************************************** end ***********************************/		







}
?>
