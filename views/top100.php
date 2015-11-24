<?php
	$i = 1;
	$result = $mysqli->query("SELECT * FROM liedjes WHERE id ='$i' "  );
    while($songs=$result->fetch_assoc()) 
    {
    	
    	echo "<div id='liedjeswrap'>";
<<<<<<< Updated upstream
        echo "<div class='numbers'>";
=======
    	echo $songs['id'];
    	echo "<Br>";
>>>>>>> Stashed changes
    	echo $songs['numbers'];
        echo "</div>";
        echo "<div id='songs'>";
        echo "<b>";
  		echo $songs['song'];
        echo "</b>";
        echo "</div>";
  		echo "</div>";
  		echo "<br>";
  		$i++;
    }

?>

<!-- <html>

1 liede een met znger en andere info</div>
<h1>2</h1><p>liede een met znger en andere info</p><br>
<h1>3</h1><p>liede een met znger en andere info</p><br>
<h1>4</h1><p>liede een met znger en andere info</p><br>
<h1>5</h1><p>liede een met znger en andere info</p><br>

</html> -->
