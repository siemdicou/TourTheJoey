<!-- comments insert -->
<?php 
$username = $_POST['username'];
$website = $_POST['website'];
$email = $_POST['email'];
$reactie = $_POST['reactie'];
$id = $_POST['$current_id'];

$sql= 'INSERT INTO comments (username, website, email, reactie, song_id)
VALUES ($username, $website, $email, $reactie, $id)';
// $result_comment= $mysql->query($sql);



 ?>