<?php
include_once('function.php');
connect();
$res=check_session($_SESSION['id'],$_SESSION['pass']);

if($res==1)
{
$page=getpage($_SESSION['id'],$_SESSION['pass']);

}
else
{
header("location:index.php");
}
$id=$_GET['id'];
$query=mysql_query("delete  from `banner` where `id`='$id'");
header("location:viewbanner.php");

?>
