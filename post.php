<?php
session_start();
include ('./admin/config.php');

include ('./includes/header.html');

if(isset($_POST['post'])) {
	$title = strip_tags($_POST['title']);
	$content = strip_tags($_POST['content']);

	$title = mysqli_real_escape_string($link, $title);
	$content = mysqli_real_escape_string($link, $content);

	$date = date('l jS \of F Y h:i:s A');

	$sql = "INSERT into posts (title, content, date) VALUES ('$title', '$content', '$date')";

	if($title == "" || $content == "") {
		echo "Complete your post!";
		return;
	}

	mysqli_query($link, $sql);

	header("Location: contact.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
</head>
<body>
	<form action="post.php" method="post" enctype="multipart/form-data">
		<input placeholder="Title" name="title" type="text" autofocus size="48"><br /><br />
		<textarea placeholder="Content" name="content" rows="rows" cols="50"></textarea><br />
		<input name="post" type="submit" value="Post">
	</form>
</body>
</html>
