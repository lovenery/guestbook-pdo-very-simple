<?php session_start(); ?>
<?php
if(!empty($_POST['message'])) 
{
  $message = mysql_real_escape_string($_POST['message']);
  
  date_default_timezone_set("Asia/Taipei"); //設為台灣時間
  $posted_at = date("Y-m-d H:i:s");
  $posted_by = "guest";//$_SESSION['Username'];

  require_once "config.php"; // use database
  $sql = ' INSERT INTO comments (id,message,posted_at,posted_by) VALUES (NULL,:message,:posted_at,:posted_by) ';
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':message', $message);
  $stmt->bindParam(':posted_at', $posted_at);
  $stmt->bindParam(':posted_by', $posted_by);
  $stmt->execute();
  echo "Success!<br/>";
}
else
{
  echo "Error!Please fill in all!<br/>";
}


echo "等一下,兩秒後跳轉回去";
?>
<meta http-equiv="refresh" content="2;URL='index.php'"/>
