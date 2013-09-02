<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skillupdate extends Controller{


function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}


function save()
{


$this->load->model('Updateskills');

if($this->input->post('submit')){
	
	echo "aa";

$this->Updateskills->process();                
 }
redirect('home/fetchdetails');



}








}
?>
