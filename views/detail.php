<?php
		$previous_id=$_GET['id']-1;
	   	$result = $mysqli->query("SELECT * FROM liedjes WHERE id='".$previous_id."'");
	   	while ($songs=$result->fetch_assoc()) {
			    	echo "<a href='index.php?page=detail&id=".$previous_id." '>";
			    	echo $songs['numbers'];
			    	echo $songs['song'];
			    	// echo $new_id;	
			    	echo "<br>";
			    	echo "</a>";
			    	echo "<br>";
			 
	   	}
    
	   	$current_id=$previous_id+1;
	   	$result = $mysqli->query("SELECT * FROM liedjes WHERE id='".$current_id."'");
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
 
    	$current_id=$next_id+1;
	   	$result = $mysqli->query("SELECT * FROM liedjes WHERE id='".$next_id."'");
	   	while ($songs=$result->fetch_assoc()) {
			    	echo "<a href='index.php?page=detail&id=".$next_id." '>";
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

