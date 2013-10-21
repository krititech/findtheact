<?php
/*
 * Created on Jul 29, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
class Changeagency extends CI_Controller {

/************************************* agency change by act manager ********************************************/

public function change()
	      {
	      
	    $this->load->model('actchangeagency');
	     $actid = $this->input->post('actid');
		 $agncid = $this->input->post('agncid');
		 $apply=$this->input->post('applied');
	   //echo $actid;
	   $data['value']=$this->actchangeagency->changeagnc($actid,$agncid,$apply);
      
	      
	      }
	
	
/************************************************ end *****************************************************************/	  
}


/************************************** file path: application/controllers/ ************************************/

?>
