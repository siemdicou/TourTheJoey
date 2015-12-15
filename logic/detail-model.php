<?php
//go back
$previous_id=$_GET['id']-1;
$result = $mysqli->query("SELECT * FROM songs WHERE id='".$previous_id."'");

$next_id=$previous_id+2;
$result2 = $mysqli->query("SELECT * FROM songs WHERE id='".$next_id."'");

$current_id=$next_id-1;
$result3 = $mysqli->query("SELECT * FROM songs WHERE id='".$current_id."'");

$result4 = $mysqli -> query ("SELECT * FROM comments WHERE song_id= '" . $current_id . "'");
?>