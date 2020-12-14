<?php
session_start();
include ('./admin/config.php');

include ('./includes/header.html');

//include ('./views/contact.html');

//include ('./includes/footer.html');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
</head>
<body>
<?php
	$sql = "SELECT * FROM posts ORDER BY id DESC";
        $res = mysqli_query($link, $sql) or die(mysqli_error());
        $posts = "";

        if(mysqli_num_rows($res) > 0) {
                while($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $content = $row['content'];
                        $date = $row['date'];

			$admin = "<div><a href='del_post.php?pid=$id'>Delete</a>&nbsp;</div>";

                        $posts .= "<div><h2>$title</h2><h3>$date</h3><p>$content</p>$admin<hr /></div>";
                }
		echo $posts;
	    } else {
            	echo "No posts yet!";
            }
?>
</body>
</html>

