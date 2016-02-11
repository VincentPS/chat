



<!DOCTYPE html>
	<html>
	
	<head>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript">
						$(document).on('ready', function(){
							setInterval(function() {
						$.ajax({
							type: "GET",
							url: "page/index.php",
							success: function(result) {
						$('.chatbox').html(result);
						}
				});
			}, 100);
		});
		</script>
		
		<title>Chat</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
	</head>
	
	<body>
		<p>HALLO</p>
		<form method="get" action="index.php" class="chatbox">
			<input type="text" name="chatbox" class="chatbox_total" value="<?php foreach($rows as $row) {echo $row["id"] . "|" . $row["tekst"]; }?>" disabled >
		</form>

		<form action="index.php" method="post" class="verzender">
			<p>Message:</p>
		  <input type="text" name="message" >
		  <input type="submit" name="enter" id="enter" value="Enter" class="send" >
		</form>
		
	</body>
	
	</html>