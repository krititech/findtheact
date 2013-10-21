<?php

    class Request extends CI_model{  

        function process()
		{
		$ttype='';
		
		$eventname = $this->input->post('eventname');
		$eventdate = $this->input->post('eventdate');
		$timing = $this->input->post('timing');
		$duration = $this->input->post('duration');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$zip = $this->input->post('zip');
		$actmgrid = $this->input->post('imag');
		$type=$this->input->post('type');
		$quoat = $this->input->post('contact_other_acts');
		  foreach($type as $t)
		  {
		  $ttype=$ttype.$t."|";
		  }
		
		echo $ttype;
		
		$budget = $this->input->post('budget');
		$username = $this->input->post('username');
		$cname = $this->input->post('cname');
		$email = $this->input->post('email');
		$contact = $this->input->post('contact');
		$password = $this->input->post('password');
		
		
		$insert=array('event'=>$eventname,
					  'event_date'=>$eventdate,
					  'starting_at'=>$timing,
					  'duration'=>$duration,
					  'city'=>$city,
					  'state'=>$state,
					  'zip'=>$zip,
					  'userid'=>$actmgrid,
					  'freequoat'=>$quoat,
					  'category_type'=>$ttype,
					  'budget'=>$budget,
					  'full_name'=>$username,
					  'comp_name'=>$cname,
					  'email'=>$email,
					  'contact_no'=>$contact,
					  'password'=>$password);
		
		
		$this->db->insert('contact_details', $insert);
		
		
		
		}
		
		}
		
		?>