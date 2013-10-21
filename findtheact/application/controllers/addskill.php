<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addskill extends CI_controller{

/****************************************************** add skills ***********************************/		


function save()
{

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

$this->load->model('Addskills');

if($this->input->post('submit')){
	
echo "aa";	

$this->Addskills->process();                
 }

redirect('home/addskill');

}


}

/****************************************************** end ***********************************/		

}
?>
