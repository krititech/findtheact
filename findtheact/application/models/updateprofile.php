<?php
    class Updateprofile extends CI_model{  
	

	 
        function process(){
		
		
		$id = $this->input->post('hiden');
        
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
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		
		$aboutus = $this->input->post('aboutus');
		
		if($val!='')
		{
		$update =array(
            'professionalname'=>$pname,
			'fname'=>$fname,
			'lname'=>$lname,
			'image'=>$val,
			'category'=>$category,
			'subcategory'=>$subcategory,
			'zip'=>$zip,
			'service'=>$service,
			'address'=>$address,
			'phone'=>$phone,
			'email'=>$email,
			
			'aboutus'=>$aboutus,
			'mincost'=>$mincost,
			'maxcost'=>$maxcost
			
                    );
				}
				else
				{
				
				$update =array(
            'professionalname'=>$pname,
			'fname'=>$fname,
			'lname'=>$lname,
			
			'category'=>$category,
			'subcategory'=>$subcategory,
			'zip'=>$zip,
			'service'=>$service,
			'address'=>$address,
			'phone'=>$phone,
			'email'=>$email,
			
			'aboutus'=>$aboutus,
			'mincost'=>$mincost,
			'maxcost'=>$maxcost
			
                    );
				
				
				}
		
		
	
					
		    $this->db->where('id', $id);
		    $this->db->update('profile', $update);		
		
		}
		
		
		}
		?>