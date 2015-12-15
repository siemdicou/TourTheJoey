<div id="page_header_detail">
    <div class="page_title">
        Complete Tour Top 100
        <img src='img/01_2.png'>
    </div>

    <a href='?home&current_day=16'>
        <div class="back_today">
            <img src="img/indicator.png">
            vandaag
        </div>
</div>
<a href="files/top100.pdf" target="_blank"><div id="pdf">Tour Top 100 als<img src="img/pdf-icon.png"></div></a>
<?php

echo "<div id='liedjeswrap'>";
	
    while ($songs=$result->fetch_assoc()){
            
                echo "<a href='index.php?page=detail&id=".$songs['id']."'".$songs['song_title'].">";
                echo "<div class='numbers-song'>";
                    echo "<div id='numbers'>";
                        echo $songs['numbers'];
                        echo "</div>";
                        echo "<div class='songs'>";
                        echo utf8_encode($songs['song_title']);
                    echo "</div>";
                echo "</div>";
            
            echo "</a>";
        }

    // }
echo "</div>";

?>
<a href="files/top100.pdf" target="_blank"><div id="pdf">Tour Top 100 als<img src="img/pdf-icon.png"></div></a>