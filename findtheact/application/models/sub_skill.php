<?php
/*
 * Created on Sep 2, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php
Class Sub_skill extends CI_Model
{

 function retrieve_dataa($slno){
		//echo $slno;
                $this -> db -> select('sub_category_name');
		$query = $this->db->get_where('subskill',array('category_id'=>$slno));
		return $query->result_array();
		
	}
 
}
?>