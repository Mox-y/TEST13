
<?php

	$result = $con->query("SELECT id, name, created FROM mygram_images ORDER BY created DESC LIMIT 50");
?>