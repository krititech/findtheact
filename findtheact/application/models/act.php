<?php
/*
 * Created on Sep 2, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php
Class Act extends CI_Model
{
 function allact($val)
 {
 foreach($val as $v)
 {
 $aid=$v;

   $query = $this->db->get_where('profile', array('added_by' => $aid));

  
     return $query->result();
 }
   
 }
 
 
}
?>