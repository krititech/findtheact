<?php
    class Approveactchangeagency extends CI_model{  
	
	 function approvechangeagnc($actid,$agid,$applied){
		
		//echo "aa";
		
	$update = array(
               'status' => 1
              
            );
		$array = array('act_id' => $actid, 'under_agency' => $agid,'applied_to'=>$applied);
$this->db->where($array);
$this->db->update('agency_change', $update); 
		
		
	
		}
		
		
		}
		?>
