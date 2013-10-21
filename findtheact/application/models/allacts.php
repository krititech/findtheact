<?php
Class Allacts extends CI_Model
{

/*************************************** view all event manager details *******************************/

 function allactdetails($uid)
 {
 
 $query1 = $this -> db -> get_where('profile',array('email'=>$uid));
 $row = $query1->row(); 


$agencyid=$row->added_by;

 if($agencyid!='')
 {

   $query = $this -> db -> get_where('registration',array('type'=>'1','email !='=>$agencyid));

  
     return $query->result();
 }
 
   
 }
 /*************************************************** End *************************************************/
 
 
 
}
?>
