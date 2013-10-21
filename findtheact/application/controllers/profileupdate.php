<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Profileupdate extends CI_controller{

/****************************************************** update act person profile ***********************************/		


function save()
{
  
  		$config['upload_path'] = 'uploads';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		
		//echo $config['upload_path'];
	//	if ( ! $this->upload->do_upload())
//		{
//		//echo "ifff";
//			$error = array('error' => $this->upload->display_errors());
//var_dump($error);
//			
//		}
//		else
//		{
		//echo "else";
	$data = array('upload_data' => $this->upload->data());
	//var_dump($data);
	$this->load->model('updateprofile');

			if($this->input->post('submit'))
			{
	
				$this->updateprofile->process();                
			}
redirect('userlogin/viewact');
//}


		}
/****************************************************** end ***********************************/		

}
?>
