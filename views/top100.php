<?php


echo "<div id='logo-top100'>";
echo "<img src='img/01_2.png'>";
echo "</div>";

	$result = $mysqli->query("SELECT * FROM songs ORDER BY numbers");
    while ($songs=$result->fetch_assoc()){
    // {
    	// for ($i=1; $i <= 5 ; $i++) {

            echo "<div id='liedjeswrap'>";
            echo "<a href='index.php?page=detail&id=".$songs['id']."'".$songs['song_title'].">";
            echo "<div class='numbers'>";
            echo $songs['numbers'];
            echo "</div>";

            echo "<div class='songs'>";
            echo utf8_encode($songs['song_title']);
            echo "</div>";
            echo "</div>";
            echo "</a>";
        }

    // }

?>


<!-- <html>

1 liede een met znger en andere info</div>
<h1>2</h1><p>liede een met znger en andere info</p><br>
<h1>3</h1><p>liede een met znger en andere info</p><br>
<h1>4</h1><p>liede een met znger en andere info</p><br>
<h1>5</h1><p>liede een met znger en andere info</p><br>

</html> -->
