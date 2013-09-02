<?php 

class Deleterec extends Model {


function Deleterec()
{
parent::Model();
}

function deleterow($slno)
{
$query =$this->db->delete('skill', array('id' => $slno));
}

}

?>