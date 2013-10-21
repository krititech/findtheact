<?php 

class deleterectype extends CI_model {




function deleterow($slno)
{
$query =$this->db->delete('type', array('slno' => $slno));
}

}

?>