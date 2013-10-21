<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
/****************************************************** reply quoats ***********************************/		

  session_start();
class Replyquoat extends CI_controller{
    
  

    public function index(){
	if($_SESSION['data'])
{
$data=$_SESSION['data'];
$x=$data['email'];

}
	$data['emailvalue']=$x;
       
     $this->template->load('usertemplate1', 'eventmanager/replyqt',$data);
      
    }
    
	
/****************************************************** end ***********************************/		
	
	
	
	function send()
	{
	$this->load->model('Addreplyqut');

if($this->input->post('submit'))
{

$this->Addreplyqut->process();

 }
redirect('replyquoat'); 
  
	
	}
	}
	?>