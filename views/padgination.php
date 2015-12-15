<!--/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>pagination code wordt hier verwerkt<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/-->

<table id="pagination">
<tr>
<td>
	juli 
</td>
<?php 
for ($i=2; $i < 25; $i++) { 
		echo "<td>";
		echo "<a href='?page=home&current_day=".$i."'>".$i."</a>";
		echo "</td>";
	}
 ?>
</tr>
</table>