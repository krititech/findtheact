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

/***************************** Add different types ******************************/


function addtype()
{

$this->load->model('type','',TRUE);
$data['typeval'] = $this->type->types();

$this->template->load('template', 'admin/addtype',$data);

}

/***************************** end ******************************/


/***************************** delete types ******************************/


function deletetype()
	{
	
	$this->load->model('deleterectype');
$idval = $this->input->post('iiidd');
$data['value']=$this->deleterectype->deleterow($idval);

	
	}

/***************************** end ******************************/

/***************************** update types ******************************/


 function updatetype()
{
$this->load->model('update_type');	
$id=$this->uri->segment(3);
//echo $id;
	
$data['query'] = $this->update_type->retrieve_type($id);
//var_dump($data);
	
//$this->load->view('header');
//$this->load->view('skillupdate', $data); // Display the page
//$this->load->view('footer');
$this->template->load('template', 'admin/typeupdate',$data);
}
    
/***************************** end ******************************/
    
    
    
/***************************** Add skills  ******************************/
    

function addskill()
{
$this->load->model('type','',TRUE);
$this->load->model('skill','',TRUE);
$data['skills'] = $this->skill->skills();
$data['typeval'] = $this->type->types();

$this->template->load('template', 'admin/addskill',$data);
//$this->load->view('admin/addskill', $data);

}

/***************************** end ******************************/

/***************************** Add subskills ******************************/


function addsubskill()
{

$this->load->model('skill','',TRUE);
$data['skills'] = $this->skill->skills();

$this->load->model('subskills','',TRUE);
$data['subskills'] = $this->subskills->subskill();

$this->load->model('type','',TRUE);
$data['typeval'] = $this->type->types();

$this->template->load('template', 'admin/addsubcategory',$data);
//$this->load->view('admin/addskill', $data);

}

/***************************** end ******************************/


/***************************** view selected subcategories in index page ******************************/


function indexsubcat()
{
$this->load->model('subskills','',TRUE);
$data['subskills'] = $this->subskills->subskill();

$this->template->load('template', 'admin/indexsubcategory',$data);

}

/******************************************************** end ***********************************************************************/

/***************************** delete skill ******************************/


function deleteval()
	{
	
	$this->load->model('deleterec');
$idval = $this->input->post('idd');
$data['value']=$this->deleterec->deleterow($idval);

	
	}
	
/***************************** end ******************************/

/***************************** delete subskill ******************************/

function deletesubcat()
	{
	
	$this->load->model('deleter');
$idval = $this->input->post('iidd');
$data['value']=$this->deleter->deleterow($idval);

	
	}
	
/***************************** end ******************************/

/***************************** update skill ******************************/


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
/***************************** end ******************************/

/***************************** add event ******************************/	
function addevent()
{

$this->load->model('event','',TRUE);
$data['events'] = $this->event->events();
$this->template->load('template', 'admin/addevent',$data);
//$this->load->view('admin/addskill', $data);

}

/***************************** end ******************************/

/***************************** delete event  ******************************/
function deletevalue()
	{
	
	$this->load->model('deleterecd');
$iddval = $this->input->post('iddd');
$data['value']=$this->deleterecd->deleterows($iddval);

	
	}
	
/***************************** end ******************************/

/***************************** update event ******************************/

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
/***************************** end ******************************/

/***************************** Admin logout ******************************/


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

/***************************** end ******************************/





	
	}
	?>
