<?php
session_start();
include_once('./admin/config.php');

if(!isset($_GET['pid'])) {
	header("Location: contact.php");
} else {
	$pid = $_GET['pid'];
	$sql = "DELETE FROM posts WHERE id=$pid";
	mysqli_query($link, $sql);
	header("Location: contact.php");
}
?>
