<?Php
include_once('function.php');
connect();
$description=$_POST['text'];
$title=$_POST['title'];
mysql_query("insert into `blog` set `description`='$description', `title`='$title'")or die(mysql_error());
header("location:addblog.php");
?>
