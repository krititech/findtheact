<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
  session_start();
class Userlogin extends CI_controller{
    
  

    public function index(){
        // Load our view to be displayed
        // to the user
       $this->load->view('user/userhomepage');
       //echo "aaa";
    }
    
   
    
	function save()
{


$this->load->model('Addreg');

if($this->input->post('submit'))
{

$this->Addreg->process();
//   --------Email conformation-----------//
/*$confirm_code=md5(uniqid(rand()));
$email = $this->input->post('email');

$config['wordwrap'] = TRUE;
    $this->email->initialize($config);
 $this->email->from('noreply@gmail.com');
 $this->email->to($email);
    $this->email->subject('Your confirmation link here');
    $this->email->message('Thanks for signing with us. Kindly click on the link below to activate your account\n\n
<a href='.site_url('user/verify').'?passkey='.$confirm_code.'>Click Here</a>'); 
    
 $this->email->send();

     */           
	 
	 
	 //-------------Email send ends---------------//
 }
redirect('userlogin'); 
    
    
	
	}
	
	
	public function userlog(){
	
        // Load the model
        $this->load->model('userlogin_model');
        // Validate the user can login
        $result = $this->userlogin_model->validate();
		
		
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            //$this->index();
			 
			echo "aaa";
        }else{
            // If user did validate, 
            // Send them to members area
        //redirect('home');
		 foreach($result as $row)
     {
       $sess_array = array(
         
         'username' => $row->username,
		 'type'=>$row->type,
		 'email'=>$row->email
		  
       );
	   $_SESSION['data']=$sess_array;
	  
	   }
	  
       
	   
		redirect('userlogin/chklogin');
        }    
		    
    }


function chklogin()
{
if($_SESSION['data'])
{
$data=$_SESSION['data'];
$x=$data['type'];

if($x==2)
{

$this->template->load('usertemplate', 'actmanager/actmanager_homepage',$data); 

}
else
{

$this->template->load('usertemplate1', 'eventmanager/eventmanager_homepage',$data); 
}
}

}

function addact()
	{
	$this->load->model('event','',TRUE);
	$data['events'] = $this->event->events();
	
	$this->load->model('skill','',TRUE);
	$data['skills'] = $this->skill->skills();
	$this->template->load('usertemplate', 'actmanager/addact',$data); 
	 //$this->template->load('usertemplate', 'actmanager/addact',$data); 
	
	}

function editprofile()
	{
	
	if($_SESSION['data'])
{
$data=$_SESSION['data'];

	}

	$this->template->load('usertemplate', 'actmanager/editprofile',$data);

	
	}
	
function change_password()
	{
	    if($_SESSION['data'])
{
$data=$_SESSION['data'];

	}
	$this->template->load('usertemplate', 'actmanager/cpassword',$data);
	}
	
function cpassword()
	{
	
	$this->load->model('cpassword');
$email = $this->input->post('email');
$pass = $this->input->post('pass');
$cpass = $this->input->post('cpass');
$data['value']=$this->cpassword->cpassw($email,$pass,$cpass);

	
	}
	
function addactmanager()
	{
	
	$this->template->load('usertemplate1', 'eventmanager/addactmanager'); 
	 
	
	}
	
function changepassword()
	{
	    if($_SESSION['data'])
{
$data=$_SESSION['data'];

	}
	$this->template->load('usertemplate1', 'eventmanager/cpassword1',$data);
	}
	
function cpassword1()
	{
	
	$this->load->model('cpassword1');
$email = $this->input->post('email');
$pass = $this->input->post('pass');
$cpass = $this->input->post('cpass');
$data['value']=$this->cpassword1->cpassw($email,$pass,$cpass);

	
	}
function logout()

	{
 if(session_destroy())
{
 redirect('userlogin/index', 'refresh');
}
else
{
echo "session exist";
}
}



	
	
	}
	?>