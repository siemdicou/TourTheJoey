<div id="page_header_detail">
    <div class="page_title">
        Vandaag in de Radio 1 Tour Top 100
    </div>
    <div class="back_today">
        <img src="img/indicator.png">
        vandaag
    </div>
</div>
<?php
	$result = $mysqli->query("SELECT * FROM songs ORDER BY numbers");
    while ($songs=$result->fetch_assoc()){
            echo "<div id='home_text'>";
                    echo $songs['numbers'];
                    echo "<br>";
                    echo utf8_encode ($songs['song_title']);
                    echo "  ";
                    echo utf8_encode ($songs['artist']);
                    echo "<br>";

                    echo " ";
    //                 echo "<iframe src='https://www.youtube.com/embed/".$songs['youtube-url']."'width='20%' height='100px'></iframe>";
                    echo "<br>";

                    echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

                    echo "<br>";
                echo "<div id='icons'>";

                         echo "<div id='speech_bubble'>";
                            echo "<img src='img/speech_bubble.png'>";
                         echo "</div>";

                         echo "<div id='speech_bubble'>";
                          echo "<img src='img/facebook.png' id=>";
                        echo "</div>";
        
                            echo "<div id='speech_bubble'>";
                         echo "<img src='img/twitter1.png' >";
                            echo "</div>";

                         echo "<div id='bubbles'>";
                            echo "<img src='img/email5.png' >";
                         echo "</div>";

                    echo "<br>";

                echo "</div>";
            echo "</div>";

        }

    // }

?>
