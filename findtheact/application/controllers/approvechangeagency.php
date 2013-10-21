<?php
/*
 * Created on Jul 29, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
class Approvechangeagency extends CI_Controller {


/***************************************************************  approve change agency ************************************/

public function approvechange()
	      {
	      
	    $this->load->model('approveactchangeagency');
	     $actid = $this->input->post('actid');
		 $agncid = $this->input->post('agncid');
		  $applied = $this->input->post('applied');
	   //echo $actid;
	   $data['value']=$this->approveactchangeagency->approvechangeagnc($actid,$agncid,$applied);
      
	      
	      }
	/****************************************************** end ***********************************/		
	  
}
?>
