<?php
/*
 * Created on Sep 2, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php
Class Event extends CI_Model
{
 function events()
 {

   $query = $this -> db -> get('event');

  
     return $query->result();
 
   
 }
 
 
}
?>