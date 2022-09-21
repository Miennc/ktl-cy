<?php
	$con = mysqli_connect("","","","");
	if(!$con)
	{
		echo "error";
	}
//	@mysqli_select_db("todito", $con) or die("DB 연결실패");
	mysqli_query("set names utf8");

?>
