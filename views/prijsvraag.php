<!--/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>de tekst informatie en database gelaade content<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/-->

<div id="page_header_detail">
    <div class="page_title">
        Prijsvraag
        <img src='img/01_2.png'>
    </div>

    <a href='?page=home&current_day=16'>
        <div class="back_today">
            <img src="img/indicator.png">
            vandaag
        </div>
        </a>
</div>


<img src="img/prijsvraag.png" class="prijsvraag_img" >
<?php
    echo "<div id='numbers'>";
	echo $ask['numbers'];
    echo "</div>";
	echo "  ";
	echo utf8_encode($ask['artist']);
	echo ": ";
	echo utf8_encode($ask['song_title']);
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

<br>
<div id="vraagtext">
<div id="vraag">
    VRAAG
</div>
Wat was het debuutalbum van Julien Clerc?
</div>
<br>
<br>
<br>
<div id="meedoen">
    Doe mee aan deze prijsvraag
</div>

<div id="form-detailpagina">

<form>
	<b>Naam:</b>
    <br>
    <br>
	<input type="text">
    <br>
    <br>
	<b>Email:</b><div id="greycolor">(wordt niet verspreid)</div>
    <br>
    <br>
	<input type="text">
    <br>
    <br>
	<b>Andwoordt:</b> <br>
	<input type="text">
	<br>
    <br>
	<input type="checkbox">
 	<b>Inscrijven voor nieuwsbrief</b>

	<input type="submit" value="verstuur">
</form>
</div>
