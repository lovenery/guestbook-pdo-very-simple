<?php session_start(); ?>

<h3>留言板</h3>
<div>
	<form action="comment.php" method="post">
		<textarea type="text" name="message" ></textarea><br />
		<input type="submit" name="comment" value="送出"/>
	</form>
</div>


<div>
	<p>留言內容</p>
<?php
	require_once "config.php";
	$sql = ' SELECT message,posted_at,posted_by FROM comments ';
	foreach($db->query($sql) as $row) {
		echo "留言內容:" . $row['message'] . " 時間:" . $row['posted_at'] . "作者:" . $row['posted_by'] . "<br/>";
	}
?>
</div>