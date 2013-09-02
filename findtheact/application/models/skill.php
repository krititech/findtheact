<?php
/*
 * Created on Sep 2, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php
Class Skill extends CI_Model
{
 function skills()
 {

   $query = $this -> db -> get('skill');

  
     return $query->result();
 
   
 }
 
 
}
?>