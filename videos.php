<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db("v-u-a-p");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video Upload And Playback Tutorial</title>
</head>

<body>

<?php

$query = mysql_query("SELECT * FROM `videos`");
while($row = mysql_fetch_assoc($query))
{
	$id = $row['id'];
	$name = $row['name'];
	
	echo "<a href='watch.php?id=$id'>$name</a><br />";
}

?>

</body>
</html>