<div id="page_header_detail">
    <div class="page_title">
        Vandaag in de Radio 1 Tour Top 100
    </div>
    <a href='?home&current_day=16'>
    <div class="back_today">
        <img src="img/indicator.png">
        vandaag
    </div>
    </a>
</div>
<?php
	
    while ($songs=$result->fetch_assoc()){
    echo "<div id='home_text'>";
         echo "<div id='home-video'>";
                    echo "<iframe src='https://www.youtube.com/embed/".$songs['youtube-url']."'width='350px' height='250px'></iframe>";
                echo"</div>";
                    echo "<div id=home-messages'>";
                        echo "<div id='numbers'>";
                            echo $songs['numbers']; 
                        echo '</div>';
                        echo utf8_encode ($songs['song_title']);
                        echo ": ";
                        echo utf8_encode ($songs['artist']);
                    echo"</div>";

                    // echo "<p>";
                    echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
                    // echo"</div>";
                echo "<div id='icons'>";
                    echo "<a href='index.php?page=detail&id=".$songs['id']."'".$songs['song_title'].">";
                    echo "<div id='speech_bubble'>";
                        echo "<img src='img/speech_bubble.png'>";
                    echo "</div>";
                    echo "<div id=text_icons>";
                        echo "[2]leesmeer";
                    echo "</div>";
                    echo "</a>";
                    echo "<div id='facebook'>";
                        echo "<img src='img/facebook.png'>";
                    echo "</div>";
        
                    echo "<div id='twitter'>";
                        echo "<img src='img/twitter1.png' >";
                    echo "</div>";

                    echo "<div id='email'>";
                        echo "<img src='img/email5.png' >";
                    echo "</div>";

                    echo "<br>";
                echo "</div>";
            echo "</div>";

        }

    // }

?>

