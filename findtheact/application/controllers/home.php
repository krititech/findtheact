<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Home extends CI_controller{



	public function index(){
	 if($_SESSION['user'])

   {
     $data['username'] = $_SESSION['user'];
 $this->template->load('template', 'admin/admin_homepage',$data); 
 }
else
{
 redirect('login', 'refresh');
}
}

function addskill()
{

$this->load->model('skill','',TRUE);
$data['skills'] = $this->skill->skills();
$this->template->load('template', 'admin/addskill',$data);
//$this->load->view('admin/addskill', $data);

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
	
	//$this->load->view('header');
	//$this->load->view('skillupdate', $data); // Display the page
	//$this->load->view('footer');
	$this->template->load('template', 'admin/skillupdate',$data);
	}
	
function addevent()
{

$this->load->model('event','',TRUE);
$data['events'] = $this->event->events();
$this->template->load('template', 'admin/addevent',$data);
//$this->load->view('admin/addskill', $data);

}
function deletevalue()
	{
	
	$this->load->model('deleterecd');
$iddval = $this->input->post('iddd');
$data['value']=$this->deleterecd->deleterows($iddval);

	
	}

function updateevent()
	{
	$this->load->model('update_event');	
	$id=$this->uri->segment(3);
	//echo $id;
	
	$data['query'] = $this->update_event->retrieve_dataa($id);
	//var_dump($data);
	
	//$this->load->view('header');
	//$this->load->view('skillupdate', $data); // Display the page
	//$this->load->view('footer');
	$this->template->load('template', 'admin/eventupdate',$data);
	}


function logout()

	{
 if(session_destroy())
{
 redirect('login/index', 'refresh');
}
else
{
echo "session exist";
}
}






	
	}
	?>