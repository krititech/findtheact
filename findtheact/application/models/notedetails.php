<style type="text/css">
table th{
text-align:left;

}
</style>
<?php
    class Notedetails extends CI_model{  

        function subcategory($data){
	
	   $sql = "select `id` from `profile` where `email`='$data[email]' and `password`='$data[pass]' ";
        $que1=$this -> db -> query($sql);
 	 $data=$que1->result();
	 $id=$data[0]->id;
	
	$query = $this->db->get_where('contact_details',array('userid'=>$id));
	return $query->result();
		}
		
		
		}
		?>
