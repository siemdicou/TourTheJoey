<?php
		$previous_id=$_GET['id']-1;
	   	$result = $mysqli->query("SELECT * FROM songs WHERE id='".$previous_id."'");
	   	while ($songs=$result->fetch_assoc()) {
			    	echo "<a href='index.php?page=detail&id=".$previous_id." '>";
			    	echo $songs['numbers'];
			    	echo " ";
			    	// utf8_encode($songs['song_title']);
			    	echo utf8_encode($songs['song_title']);
			    	echo "  ";
			    	// echo $songs['song_title'];
			    	// echo $new_id;	
			    	echo "<br>";
			    	echo "</a>";
			    	echo "<br>";


			 
	   	}
    
        $next_id=$previous_id+2;
	   	$result = $mysqli->query("SELECT * FROM songs WHERE id='".$next_id."'");
	   	while ($songs=$result->fetch_assoc()) {
			    	echo "<a href='index.php?page=detail&id=".$next_id." '>";
			    	echo $songs['numbers'];
			    	echo " ";
			    	echo utf8_encode($songs['song_title']);
			    	echo "<br>";
			    	echo "</a>";
			    	echo "<br>";
	   	}

	   	$current_id=$next_id-1;
	   	$result = $mysqli->query("SELECT * FROM songs WHERE id='".$current_id."'");
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
	  		echo utf8_encode ($songs['song_title']);
	  		echo "<br>";
	  		echo utf8_encode ($songs['artist']);
	  		echo " ";
	        echo "</b>";
	        echo "</div>";
	        echo "</p>";
	        echo "<iframe src='https://www.youtube.com/embed/".$songs['youtube-url']."'width='100%' height='500px'></iframe>";
	  		echo "<br>";
	  		echo "<br>";
	  		echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
	  		
	  		echo "<br>";
	  		echo "</div>";

			
	    }
 


     ?>



<h1>Reageer op dit bericht</h1>

<form method="POST">
<p>naam</p>
<input type="text">

<p>email (wordt niet getoond)</p>
<input type="email">
<p>website</p>
<input type="text" >

<p>reactie</p>
<!-- <input type="text" size="50" cols="30" maxlength="50"> -->
<textarea value="vul "></textarea>
<br>
<table>
<tr>
<td>
<input type="checkbox">
</td>
<td>Gegevens onthouden</td>
</tr>
<tr>
<td>
<input type="checkbox">	
</td>
<td>Mail bij nieuwe reactie 
</td>
</tr>
</table>
<input type="submit" value="Send">

</form>



