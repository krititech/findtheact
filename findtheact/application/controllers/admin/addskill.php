<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addskill extends Controller{


function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}


function save()
{


$this->load->model('Addskills');

if($this->input->post('submit')){
	
	echo "aa";

$this->Addskills->process();                
 }
redirect('home/addskill');



}








}
?>
