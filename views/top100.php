<?php
	$result = $mysqli->query("SELECT * FROM songs ORDER BY numbers");
    while ($songs=$result->fetch_assoc()){
    // {
    	// for ($i=1; $i <= 5 ; $i++) { 
            echo "<a href='index.php?page=detail&id=".$songs['id']."'".$songs['song_title'].">";
            echo "<div id='liedjeswrap'>";
            echo "<Br>";
            echo "<div class='numbers'>";
            echo "<p>";
            echo $songs['numbers'];
            echo $songs['song_title'];
            echo "</div>";
            echo "<div id='songs'>";
            echo "<b>";
            echo "</b>";
            echo "</div>";
            echo "</p>";
            echo "</div>";
            echo "<br>";
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
