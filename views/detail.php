<?php

		// go back button
		$previous_id=$_GET['id']-1;
	   	$result = $mysqli->query("SELECT * FROM songs WHERE id='".$previous_id."'");
	   	while ($songs=$result->fetch_assoc()) {
			    	echo "<a href='index.php?page=detail&id=".$previous_id." '>";
                    echo "<div id='detail-numbers-left'>";
<<<<<<< HEAD
			    	echo $songs['numbers'];

=======
	                    echo "<div id='numbers'> ";
				    		echo $songs['numbers'];
				    	echo "</div>";
>>>>>>> origin/master
			    	echo " ";
			    	// utf8_encode($songs['song_title']);

			    	echo utf8_encode($songs['song_title']);
                    

			    	// echo $songs['song_title'];
			    	// echo $new_id;	
			    	echo "</div>";
			    	echo "</a>";
			    	echo "<br>";


			 
	   	}

    	// go next button
        $next_id=$previous_id+2;
	   	$result = $mysqli->query("SELECT * FROM songs WHERE id='".$next_id."'");
	   	while ($songs=$result->fetch_assoc()) {
			    	echo "<a href='index.php?page=detail&id=".$next_id." '>";
<<<<<<< HEAD
			        echo "<div id='detail-numbers-right'>";
                    echo $songs['numbers'];
=======
>>>>>>> origin/master


					echo "<div id='detail-numbers-right'>";
			    		echo utf8_encode($songs['song_title']);
			    	
	                    echo "<div id='numbers'> ";
				    		echo $songs['numbers'];
				    	echo "</div>";
			    	// echo " ";	
                    echo "</div>";

			    	echo "</a>";
			    	echo "<br>";
	   	}


	   	//content detail pagina uitlezen db
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
	        echo "<iframe src='https://www.youtube.com/embed/".$songs['youtube-url']."'width='100%' height='400px' allowfullscreen></iframe>";
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
 
// <!-- reactie form -->
echo '<div id="form-detailpagina">';
echo "<h1>Reageer op dit bericht</h1>";
echo '<form method="POST" action="?page=insert_comment&id='.$current_id.'">';
echo ' <p>Naam</p>';
echo '<input type="text" name="username" required>';
echo '<p>email (wordt niet getoond)</p>';
echo '<input type="email" name="email" required>';
echo '<p>website</p>';
echo '<input type="text" name="website">';
echo '<p>reactie</p>';
echo'<textarea name="reactie" required></textarea>';
echo'<br>';
echo'<table>';
echo'<tr>';
echo'<td>';
echo'<input type="checkbox">';
echo'</td>';
echo'<td>Gegevens onthouden</td>';
echo'</tr>';
echo'<tr>';
echo'<td>';
echo'<input type="checkbox">';
echo'</td>';
echo'<td>Mail bij nieuwe reactie ';
echo'</td>';
echo'</tr>';
echo'</table>';
echo'<input type="submit" value="Verstuur">';

echo'</form>';
echo'</div>';
?>






