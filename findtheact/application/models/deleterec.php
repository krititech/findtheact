<?php 

class Deleterec extends CI_model {




function deleterow($slno)
{
$query =$this->db->delete('skill', array('slno' => $slno));
}

}

?>