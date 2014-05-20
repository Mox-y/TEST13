<ul class="content">
	<?php
		while ($row = $result->fetch_assoc()){
			//echo $row['id'] . '<br>';
			echo '<li class="image"><img src="upload/' . $row["name"] . '"><p>' .$row["created"]. '</p></li>';
		}
	?>
</ul>