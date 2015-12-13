<img src="img/prijsvraag.png" class="prijsvraag_img" >
<?php 
	$id=$_GET['id'];
	$result = $mysqli->query("SELECT * FROM songs WHERE id='".$id."'");
	$ask=$result->fetch_assoc();
	echo $ask['numbers'];
	echo "  ";
	echo $ask['artist'];
	echo ": ";
	echo $ask['song_title'];
	echo "<br>";

 ?>
<b>meedoen kan tot 12 juni 2011</b>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h1><div id="vraag">Vraag</div> Wat was de de debuutnaam van Julien Clerc?</h1>

<h1 id="meedoen">Doe mee aan deze prijsvraag</h1>

<form>
	<b>naam:</b> <br>
	<input type="text">
	<br>

	<b>email:</b>(wordt niet verspreid)<br>
	<input type="text">
<br>	
	<b>andwoordt:</b> <br>
	<input type="text">
	<br>
	<input type="checkbox">
 	<b>inscrijven voor nieuwsbrief</b>	

	<input type="submit" value="verstuur">
</form>


 <style type="text/css">
 .prijsvraag_img
 {
 	float: left;
 	width: 30%;
 	margin-right: 2%;
 	}
 	#vraag{
 		color: red;
 		display: inline-block;
 	}
 	#meedoen{
 		border-bottom: dotted 2px;
 		color:red;
 	}
 	</style>