<?php
$title = "Admin - Teacher Approval";
$content = "<img src='images/parkbark.png' al=''/>";
$sidebar = "erfjkgrelkjbw;kjfbwe";


if($_SESSION['userType'] == 'admin')
{
	include 'template.php';
}else{
	header('Location: /team81/index.php');
}
?>