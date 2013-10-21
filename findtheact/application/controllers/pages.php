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
	   $this->load->model('type','',TRUE);
	   $this->load->helper('form');
	 }
	 
/***************************** Load index page ******************************/	


		public function index($page = 'index')
	{
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['events'] = $this->event->events(); 
		$data['skills'] = $this->skill->skills();
		$data['locations'] = $this->eventmanager->locations();
		$data['typeval'] = $this->type->types();
		$this->load->view('pages/'.$page, $data);
	}
	
/***************************** end  ******************************/


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
		
/****************************************************** search page ***********************************/
		
		public function search($page = 'searchresult')
		{
		
			if ( ! file_exists('application/views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
		
			$data['title'] = ucfirst($page);
			$location = $this->input->post('location');
			$skill = $this->input->post('skill');
			$price=$this->input->post('price');
		    $data['results'] = $this->eventmanager->searchevent($location,$skill,$price);
		     $data['location']=$location;
		     $data['skill']=$skill;
		     $data['events'] = $this->event->events(); 
		     $data['skills'] = $this->skill->skills();
		     $data['locations'] = $this->eventmanager->locations();
			
			$this->load->view('pages/'.$page, $data);
			
		
		}
/****************************************************** end ***********************************/		



/****************************************************** Topbar search pannel  ***********************************/		
		
		public function topbarsearch($page = 'searchresult')
		{
		
			if ( ! file_exists('application/views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
		
			$data['title'] = ucfirst($page);
			$location = '';
			$skill = $this->input->post('skillval');
			$price='10000000';
		    $data['results'] = $this->eventmanager->searchevent($location,$skill,$price);
		     $data['location']=$location;
		     $data['skill']=$skill;
		     $data['events'] = $this->event->events(); 
		     $data['skills'] = $this->skill->skills();
		     $data['locations'] = $this->eventmanager->locations();
			
			$this->load->view('pages/'.$page, $data);
			
		
		}
/****************************************************** end ***********************************/		
	
		
		
		
/****************************************************** load entertainment page ***********************************/		
		
		
		
		public function entertain($page = 'entertainment')
		{
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['events'] = $this->event->events(); 
		$data['skills'] = $this->skill->skills();
		$data['locations'] = $this->eventmanager->locations();
		//var_dump($data['skills']);
		$this->template->load('pages/template', 'pages/entertainment',$data);
		$this->load->model('sub_skill');
		 //$this->load->view('pages/entertainment',$data);
		     foreach($data['skills'] as $row)
		     {
			   
			   $data['subskills'] = $this->sub_skill->retrieve_dataa($row->slno);
			 //var_dump($data['subskills']);
			  
		     }
		
		
		}
/****************************************************** end ***********************************/		
		
/****************************************************** load eventservices page ***********************************/		
		
		
		public function eventservices($page = 'eventservices')
		{
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['events'] = $this->event->events(); 
		$data['skills'] = $this->skill->skills();
		$data['locations'] = $this->eventmanager->locations();
		//var_dump($data['skills']);
		$this->template->load('pages/template', 'pages/eventservices',$data);
		$this->load->model('sub_skill');
		 //$this->load->view('pages/entertainment',$data);
		     foreach($data['skills'] as $row)
		     {
			   
			   $data['subskills'] = $this->sub_skill->retrieve_dataa($row->slno);
			 //var_dump($data['subskills']);
			  
		     }
		
		
		}
		
/****************************************************** end ***********************************/		



/****************************************************** add act person profile  ***********************************/		
	
		
		public function profile($page = 'profile')
		{
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['events'] = $this->event->events(); 
		$data['skills'] = $this->skill->skills();
		$data['locations'] = $this->eventmanager->locations();
		
		$this->template->load('pages/template', 'pages/profile',$data);
		
		}
		
/****************************************************** end ***********************************/		
		
		
/****************************************************** get subskills of corresponding skills ***********************************/
		public function subcategory()
	      {
	      
	      $this->load->model('subcat');
	     $id = $this->input->post('id');
	     //echo $id;
	     $data['value']=$this->subcat->subcategory($id);
      
	      
	      }
		  
/****************************************************** end  ***********************************/
		  
		  
		
	      
	      public function subcategory1()
	      {
	      
	      $this->load->model('subcat1');
	     $name = $this->input->post('name');
	     
	     $data['value']=$this->subcat1->subcategory($name);
		
      
	      
	      }
		  
		  
		   public function searchsubcategory()
		 {
		 
		  $this->load->model('subcat1');
	     $name1 = $this->input->post('name1');
	     
	     $data['value']=$this->subcat1->searchsubcategory($name1);
		
		 
		 
		 }
		  
		  
/****************************************************** contact the act person page  ***********************************/		
		  
		  
		  public function contact($page = 'contact')
		{
		$id=$this->uri->segment(3);
		$skillval=$this->uri->segment(4);
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['events'] = $this->event->events(); 
		$data['skills'] = $this->skill->skills();
		$data['locations'] = $this->eventmanager->locations();
		$data['slno']=$id;
		$data['skill']=$skillval;
		
		$this->template->load('pages/template', 'pages/contact',$data);
		
		}
		
/****************************************************** end ***********************************/		

		
		public function getsubcat()
		{
		$this->load->model('subcat2');	
		$id=$this->uri->segment(3);
		$data['skills'] = $this->skill->skills();
		$data['results'] = $this->subcat2->subcategory($id);
		
		$this->load->view('pages/searchresult1', $data);
		}


}
?>
