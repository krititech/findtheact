<?php
/*
 * Created on Sep 2, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php
Class Subskills extends CI_Model
{
 function subskill()
 {

   $query = $this -> db -> get('subskill');

  
     return $query->result();
 
   
 }
 
 
}
?>