<?php
 $total_songs = 100;
 $offset = 5;
 $upper_limit = $total_songs - $offset * ($current_day - 2);
 $bottom_limit  = $upper_limit - $offset;
$result = $mysqli->query("SELECT * FROM songs ORDER BY id");
?>