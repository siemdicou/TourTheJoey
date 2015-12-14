<?php
//go back
$previous_id=$_GET['id']-1;
$result = $mysqli->query("SELECT * FROM songs WHERE id='".$previous_id."'");



?>