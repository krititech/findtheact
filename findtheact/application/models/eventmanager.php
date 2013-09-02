<?php
/*
 * Created on Sep 2, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php
Class Eventmanager extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, username, password');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 function searchevent($event,$location,$skill){
 	
 	$sql = "select * from eventmanager where eventname= ?  and `location` like ? and `skill` like ? ";
 	$this -> db -> query($sql ,array($event,'%'.$location.'%','%'.$skill.'%'));
 	
 }
 
  function locations()
 {
   
   $query = $this -> db -> query('select distinct(location) as loc from eventmanager');

   return $query->result();
 }
 
}
?>