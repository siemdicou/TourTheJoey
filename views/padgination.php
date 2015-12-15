<!--/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>pagination code wordt hier verwerkt<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/-->

<table id="pagination">
<tr>
<td>
	juli 
</td>
<?php 
for ($i=2; $i < 25; $i++) { 
		if ($i > date('d')) {
			echo "<td class=newPagination> ".$i."</td>";
		}
		if ($i == date('d')) {
			echo "<td class='currentPagination'><a href='?page=home&current_day=".$i."'>".$i."</a></td>";
		}
		if ($i < date('d')) {
            echo "<td class='oldPagination'>  <a href='?home&current_day=".$i."'> ".$i."</a></td>";
        }
		
	}
 ?>
</tr>
</table>