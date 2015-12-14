/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>de body en layout voor de liedjes top 100 komen hier samen<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/

<?php
    
    $result = $mysqli->query("SELECT * FROM songs ORDER BY numbers WHERE current_day");
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