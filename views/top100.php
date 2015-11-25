<?php
	// $i= array(1,2 );
	
	$result = $mysqli->query("SELECT * FROM liedjes ORDER BY numbers ");
    while($songs=$result->fetch_assoc()) 
    {
    	
    	echo "<div id='liedjeswrap'>";
    	echo $songs['id'];
        echo "<Br>";
        echo "<div class='numbers'>";
        echo "<p>";
    	echo $songs['numbers'];
        echo "</div>";
        echo "<div id='songs'>";
        echo "<b>";
  		echo $songs['song'];
        echo "</b>";
        echo "</div>";
        echo "</p>";
  		echo "</div>";
  		echo "<br>";
    }

?>

<!-- <html>

1 liede een met znger en andere info</div>
<h1>2</h1><p>liede een met znger en andere info</p><br>
<h1>3</h1><p>liede een met znger en andere info</p><br>
<h1>4</h1><p>liede een met znger en andere info</p><br>
<h1>5</h1><p>liede een met znger en andere info</p><br>

</html> -->
