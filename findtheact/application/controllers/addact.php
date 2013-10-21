<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  session_start();
class Addact extends CI_controller{



function save()
{
if($_SESSION['data'])
{
$data=$_SESSION['data'];
$email=$data['email'];
}

		$config['upload_path'] = 'uploads';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		
		//echo $config['upload_path'];
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			
		}
		else
		{
			

		
			$data = array('upload_data' => $this->upload->data());

			//$this->load->view('upload_success', $data);
			
			$this->load->model('Addacts');
			      
            if($this->input->post('Submit')){
                $this->Addacts->process($email);                
                }
				
				
            redirect('userlogin/addact');
		}
}



}
?>
