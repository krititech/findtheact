<?php
/*
 * Created on Sep 2, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php
Class Type extends CI_Model
{
 function types()
 {

   $query = $this -> db -> order_by("priority", "asc") -> get('type');

  
     return $query->result();
 
   
 }
 
 
}
?>