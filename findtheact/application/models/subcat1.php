<?php
    class Subcat1 extends CI_model{  
	
	

	
	 
        function subcategory($name){
	   
	 $sql = "select `slno` from `skill` where `skillname` like '%$name%'";
 	
        $que1=$this -> db -> query($sql);
	   $slno=$que1->result();
	   foreach($slno as $sl)
	   {
	   $id=$sl->slno;
	   
	$query = $this->db->get_where('subskill',array('category_id'=>$id));
	
	$result=$query->result();
	
	foreach($result as $row)
	{
	echo "<tr onclick='return getval(&#39;$row->sub_category_name&#39;);'><td>$row->sub_category_name</td></tr>";
	}
		}
		
		}
		
		
		function searchsubcategory($nameval)
		{
		
		 $sql = "select `slno` from `skill` where `skillname` like '%$nameval%'";
 	
        $que1=$this -> db -> query($sql);
	   $slno=$que1->result();
	   foreach($slno as $sl)
	   {
	   $id=$sl->slno;
	   
	$query = $this->db->get_where('subskill',array('category_id'=>$id));
	
	$result=$query->result();
	
	foreach($result as $row)
	{
	echo "<tr onclick='return searchgetval(&#39;$row->sub_category_name&#39;);'><td>$row->sub_category_name</td></tr>";
	}
		}
		
		
		
		
		
		
		}
		
		
		}
		?>