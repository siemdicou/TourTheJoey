<a href="?page=top"><img src="img/placeholder.jpg"></a>
<a href="?page=prijsvraag"><img src="img/placeholder.jpg"></a>
<a href="?page=ppp"><img src="img/placeholder.jpg"></a>
<a href="?page=pp"><img src="img/placeholder.jpg"></a>
<a href="?page=p"><img src="img/placeholder.jpg"></a>
<img src="img/placeholder.jpg" height="300px">

<?php 
	$result = $mysqli->query("SELECT * FROM images" );
    while($image=$result->fetch_assoc()){

  		echo "<a href='?page=top'><img src='".$image['url']."'></a>";
  		echo $image['title'];
    }		

 ?>