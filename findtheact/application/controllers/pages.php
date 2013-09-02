<?php
/*
 * Created on Jul 29, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class Pages extends CI_Controller {

	
	function __construct()
	 {
	   parent::__construct();
	   $this->load->model('eventmanager','',TRUE);
	   $this->load->model('event','',TRUE);
	   $this->load->model('skill','',TRUE);
	   $this->load->helper('form');
	 }	
		public function index($page = 'index')
	{
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['events'] = $this->event->events(); 
		$data['skills'] = $this->skill->skills();
		$data['locations'] = $this->eventmanager->locations();
		$this->load->view('pages/'.$page, $data);
	}
		public function view($page = 'index')
		{
		
			if ( ! file_exists('application/views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
		
			$data['title'] = ucfirst($page); // Capitalize the first letter
		
			//$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			//$this->load->view('templates/footer', $data);
		
		}
		
		public function search($page = 'searchresult')
		{
		
			if ( ! file_exists('application/views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
		
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$event = $this->input->post('event');
			$location = $this->input->post('location');
			$skill = $this->input->post('skill');
		    $data['results'] = $this->eventmanager->searchevent($event,$location,$skill);
			//$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			//$this->load->view('templates/footer', $data);
		
		}
}
?>
