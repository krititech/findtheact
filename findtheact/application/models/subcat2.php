<?php
    class Subcat2 extends CI_model{  

        function subcategory($slno){
	   $sql = "select * from `profile` where `subcategory` like '%$slno%' ";
        $que1=$this -> db -> query($sql);
 	return $que1->result();
	 
		}
		
		
		}
		?>
