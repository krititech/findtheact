<?php 

class Deleterecd extends CI_model {




function deleterows($slno)
{
$query =$this->db->delete('event', array('slno' => $slno));
}

}

?>