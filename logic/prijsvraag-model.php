<?php
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>display van wat je de prijsvraag beantwoord<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
$id=$_GET['id'];
$result = $mysqli->query("SELECT * FROM songs WHERE id='".$id."'");
$ask=$result->fetch_assoc();





?>