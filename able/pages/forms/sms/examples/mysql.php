<?php
	$con = mysqli_connect("uws7-166.cafe24.com","ableup","able1004!@","ableup");
	if(!$con)
	{
		echo "error";
	}
//	@mysqli_select_db("todito", $con) or die("DB 연결실패");
	mysqli_query("set names utf8");

?>
