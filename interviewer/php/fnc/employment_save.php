<?php
  session_start();
  include "../mysql.php";
  $Id   = $_POST['Id'];
  $contents   = $_POST['contents'];

  mysqli_query($con,"update employment_list set answer='$contents',answer_date=NOW(),state='답변완료' where id='$Id'");

  mysqli_close($con);
?>
