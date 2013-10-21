<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Indexsubcategory extends CI_controller{

/****************************************************** subcategory set in index page ***********************************/		


function save()

{

$this->load->model('Subcatstatus');



if($this->input->post('submit')){

$this->Subcatstatus->process();                

 }



redirect('home/indexsubcat');






}

/****************************************************** end ***********************************/		


}

?>