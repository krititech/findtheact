<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Contact extends CI_controller{

/****************************************************** save contact to a act person ***********************************/		


public function save()
{

$this->load->model('request');

			if($this->input->post('submit'))
			{
	
				$this->request->process();                
			}
redirect('pages/index');



}
/****************************************************** end ***********************************/		

}

?>