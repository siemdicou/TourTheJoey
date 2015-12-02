<?php
		$new_id=$_GET['id']-1;
	   	$result = $mysqli->query("SELECT * FROM liedjes WHERE id='".$new_id."'");
	   	while ($songs=$result->fetch_assoc()) {
			    	echo "<a href='index.php?page=detail&id=".$new_id." '>";
			    	echo $songs['numbers'];
			    	echo $songs['song'];
			    	// echo $new_id;	
			    	echo "<br>";
			    	echo "</a>";
			    	echo "<br>";
			 
	   	}
    
	   	$new_id2=$new_id+1;
	   	$result = $mysqli->query("SELECT * FROM liedjes WHERE id='".$new_id2."'");
	    $songs=$result->fetch_assoc();
	    {
	    	// echo $new_id2;
	    	echo "<div id='liedjeswrap'>";
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
	  		echo $songs['detail'];
	  		echo "<br>";


	    }
 
    	$new_id3=$new_id2+1;
	   	$result = $mysqli->query("SELECT * FROM liedjes WHERE id='".$new_id3."'");
	   	while ($songs=$result->fetch_assoc()) {
			    	echo "<a href='index.php?page=detail&id=".$new_id3." '>";
			    	echo $songs['numbers'];
			    	echo $songs['song'];
			    	echo "<br>";
			    	echo "</a>";
			    	echo "<br>";
			 
	   	}

     ?>





<form method="POST">
<p>naam</p>
<input type="text">

<p>email (wordt niet getoond)</p>
<input type="email">
<p>website</p>
<input type="text">

<p>reactie</p>
<input type="text">
<dd></dd>

<input type="submit" value="Send">

</form>

