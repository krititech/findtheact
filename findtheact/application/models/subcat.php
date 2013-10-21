<?php
    class Subcat extends CI_model{  
	
	

/****************************************************** get subskills of corresponding skills ***********************************/
	 
        function subcategory($slno){
	   
	$query = $this->db->get_where('subskill',array('category_id'=>$slno));
	
	$result=$query->result();
	
	foreach($result as $row)
	{
	echo "<option value='".$row->id."'>". $row->sub_category_name."</option>";
	}
		}
		
	
/****************************************************** get subskills of corresponding skills ***********************************/	

		}
		?>