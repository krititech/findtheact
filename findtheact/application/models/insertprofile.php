<?php

    class Insertprofile extends CI_model{  

        function process(){
		
		
		$val=$_FILES['userfile']['name'];
		$pname = $this->input->post('pname');
		$category = $this->input->post('category');
		$subcategory = $this->input->post('subcategory');
		$zip = $this->input->post('zip');
		$mincost=$this->input->post('mincost');
		$maxcost=$this->input->post('maxcost');
		$service = $this->input->post('service');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$address = $this->input->post('address');
		$stage=$this->input->post('stagenm');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$aboutus = $this->input->post('aboutus');
		$addedby=$this->input->post('addedby');
		
		$insert = array(
            'professionalname'=>$pname,
			'fname'=>$fname,
			'lname'=>$lname,
			'image'=>$val,
			'category'=>$category,
			'subcategory'=>$subcategory,
			'zip'=>$zip,
			'service'=>$service,
			'address'=>$address,
			'stage_name'=>$stage,
			'phone'=>$phone,
			'email'=>$email,
			'password'=>$password,
			'aboutus'=>$aboutus,
			'mincost'=>$mincost,
			'maxcost'=>$maxcost,
			'added_by'=>$addedby
                    );
		
		 $this->db->insert('profile', $insert);
		 
		 $insert1 = array(
			'username'=>$pname,
			'email'=>$email,
			'pwd'=>$password,
			'type'=>2
                    );
		$this->db->insert('registration', $insert1);
		}
		
		
		}
		?>
