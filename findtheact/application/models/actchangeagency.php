<?php
    class Actchangeagency extends CI_model{  
	
/************************************** act manager agency change model ************************************/
	
	 function changeagnc($actid,$agid,$apply){
		
		//echo "aa";
		
	$insert=array('act_id'=>$actid,'under_agency'=>$agid,'applied_to'=>$apply,'status'=>0);
		
		$suc=$this->db->insert('agency_change',$insert);
		
		if($suc)
		{
		echo 1;
		}
	   
	
		}
		
/************************************** end ************************************/
		
		}
		
/************************************** file path: application/models/ ************************************/
		?>
