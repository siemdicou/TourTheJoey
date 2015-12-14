<!-- /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>hier wordt getaileerd informatie weergegeven over het nummer dat is geselecteerd<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< */ -->
<div id="page_header_detail">
	<div class="page_title">
		In de Radio 1 tour top 100
	</div>
	<div class="back_today">
		<img src="img/indicator.png">
		vandaag
	</div>
</div>
<?php
		// go back button
             while($songs=$result->fetch_assoc()) {
			    	echo "<a href='index.php?page=detail&id=".$previous_id." '>";
                    echo "<div id='detail-numbers-left'>";
	                    echo "<div id='numbers'> ";
				    		echo $songs['numbers'];
				    	echo "</div>";
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
;
	   	while ($songs=$result2->fetch_assoc()) {
			    	echo "<a href='index.php?page=detail&id=".$next_id." '>";


					echo "<div id='detail-numbers-right'>";

			    	
	                    echo "<div id='numbers'> ";
				    		echo $songs['numbers'];
				    	echo "</div>";
            echo utf8_encode($songs['song_title']);
			    	// echo " ";	
                    echo "</div>";

			    	echo "</a>";
			    	echo "<br>";
	   	}

                    //current number
	    $songs=$result3->fetch_assoc();
	    {
	    	// echo $new_id2;

            /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>hier worden de liedjes gestyled met divs<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
	    	echo "<div id='detail-liedjeswrap'>";
	        echo "<div class='detail-numbers'>";
                echo $songs['numbers'];
                echo "</div>";
                    echo "<div id='detail-songs'>";
                        echo "<b>";
                        echo utf8_encode ($songs['song_title']);
                        echo "<br>";
                        echo utf8_encode ($songs['artist']);
                        echo " ";
                        echo "</b>";
                    echo "</div>";

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
echo '<form method="POST" method="POST" action="?page=insert_comment&id='.$current_id.'">';
echo ' <p>Naam</p>';
echo '<input type="text" name="username" required>';
echo '<p>Email (wordt niet getoond)</p>';
echo '<input type="email" name="email" required>';
echo '<p>Website</p>';
echo '<input type="text" name="website">';
echo '<p>Reactie</p>';
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






