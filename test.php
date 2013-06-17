<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Hello Welcome to the One Direction Jukebox</Say>
	<Gather numDigits="1" action="1.php" method="POST">
	        <Say>For What makes you beautiful, press 1. Press 2 for Kiss You. Press 3 for Up all night. Press 4 for Little Things</Say>
	</Gather>
	</Response>