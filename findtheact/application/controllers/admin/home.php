<?php

class Home extends Controller { // Our Cart class extends the Controller class

//FETCH PRODUCTS------------------------------------------------------------------

	function Home()
	{
		parent::Controller(); // We define the the Controller class is the parent.	
		//$this->load->model('cart_model'); // Load our cart model for our entire class
	}
	
	function index()
	{
	 $this->template->load('template', 'blog/show_posts'); 
	  
	
	}
	
	
	function addskill()
	{
	
	 $this->template->load('template', 'addskill'); 
	
	}
	function fetchdetails()
	{
	
	
	$this->load->model('view_skill');
	$data['query'] = $this->view_skill->retrieve_data(); // Retrieve an array with all products
		
		
		$this->load->view('header');
		$this->load->view('fetchdetails', $data); // Display the page
	$this->load->view('footer');
	 //$this->template->load('template', 'fetchdetails'); 
	
	}
	
	
	function deleteval()
	{
	
	$this->load->model('deleterec');
$idval = $this->input->post('idd');
$data['value']=$this->deleterec->deleterow($idval);

	
	}
	
	function updateskill()
	{
	$this->load->model('update_skill');	
	$id=$this->uri->segment(3);
	//echo $id;
	
	$data['query'] = $this->update_skill->retrieve_data($id);
	//var_dump($data);
	
	$this->load->view('header');
	$this->load->view('skillupdate', $data); // Display the page
	$this->load->view('footer');
	
	}
	
	}
	?>