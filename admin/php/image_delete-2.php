<?php
$dirname="../images-2"; /* change to relevant directory */
$name=$_POST['Name'];
$file = $dirname."/".$name;
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }
header ('Location: ../imagemanagement-2.php');
?>