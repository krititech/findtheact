<?php
/*
 * Created on Jul 29, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
public function view($page = 'home')
{

	if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}

	$data['title'] = ucfirst($page); // Capitalize the first letter

	$this->load->view('templates/header', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);

}