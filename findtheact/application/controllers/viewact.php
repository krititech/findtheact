<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Viewact extends CI_controller{

/**************************************************** update act person details ************************************************/

function updateact()
	{
	
	$this->load->model('event','',TRUE);
	$data['events'] = $this->event->events(); 
	$this->load->model('skill','',TRUE);
	$data['skills'] = $this->skill->skills();
	 $this->load->model('eventmanager','',TRUE);
	$data['locations'] = $this->eventmanager->locations();
	$this->load->model('update_act');	
	$id=$this->uri->segment(3);
	//echo $id;
	
	$data['query'] = $this->update_act->retrieve_data($id);
	//var_dump($data);
	
	//$this->load->view('header');
	//$this->load->view('skillupdate', $data); // Display the page
	//$this->load->view('footer');
	$this->template->load('usertemplate1', 'eventmanager/actupdate',$data); 

	}


/************************************************************** end *************************************************************************/
}


?>