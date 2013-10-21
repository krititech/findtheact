<?php 

class Deleter extends CI_model {




function deleterow($slno)
{
$query =$this->db->delete('subskill', array('id' => $slno));
}

}

?>