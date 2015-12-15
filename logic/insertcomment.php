<!-- comments insert -->
<?php 
$username = $_POST['username'];
$email = $_POST['email'];
$website = $_POST['website'];
$reactie = $_POST['reactie'];
$id = $_GET['id'];

$sql= "INSERT INTO comments (username, website, email, reactie, song_id)
VALUES ('$username', '$website', '$email', '$reactie', '$id')";
echo $sql;
$result_comment= $mysqli->query($sql);



 ?>