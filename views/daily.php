<?php 

    $result = $mysqli->query("SELECT * FROM songs ORDER BY id");
    while ($songs=$result->fetch_assoc()){
    // {
    	// for ($i=1; $i <= 5 ; $i++) {

            echo "<div id='liedjeswrap'>";
            echo "<a href='index.php?page=detail&id=".$songs['id']."'".$songs['song_title'].">";
            echo "<div class='numbers-song'>";
            echo "<div class='numbers'>";
            echo $songs['numbers'];
            echo "</div>";
            echo "<div class='songs'>";
            echo utf8_encode($songs['song_title']);
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</a>";
        }
?> 