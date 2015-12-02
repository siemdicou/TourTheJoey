<?php 
	$result = $mysqli->query("SELECT * FROM liedjes WHERE id='".$_GET["id"]."'");
    $songs=$result->fetch_assoc();
    {	
    	// echo "<a href=".$id-1.">";
    	echo $id-1;
    	echo "<br>";
    	// echo "</a>";
    	echo $songs['numbers'];
    	echo $songs['song' ];
    	echo "<br>";
    }
	
    $songs2=$result->fetch_assoc();
    {
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
  		echo "<br>";
    }
    	
        $songs3=$result->fetch_assoc();
    {	
    	echo $id+1;
    	echo "<br>";
    	echo $songs['numbers'];
    	echo $songs['song'];

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

<input type="submit" value="Send">

</form>
