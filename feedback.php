<html>
<head>
<?php 
	$title = "Feedback";
require_once "blocks/head.php" 

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>
		$(document).ready (function(){
			$("#done").click (function(){
				$('#messageShow').hide ();
				var name=$("#name").val ();
				var email=$("#email").val ();
				var subject=$("#subject").val ();
				var message=$("#message").val ();
				var fail=" ";
				if (name.length < 1) fail ="Name should have more than 1 character";
        		else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0 ) fail = "Wrong email";
        		else if (subject.length < 5)
        		fail = "Subject must have <5 characters";
        		else if (message.length < 20)
        		fail = "Message must have <20 characters";
				if (fail != " "){
					$('#messageShow').html (fail + "<div class='clear'><br/></div>");
					$('#messageShow').show ();
					return false;
				}
				$.ajax ({
					url: '/ajax/feedback.php',
					type: 'POST',
					cache: false,
					data: {'name': name, 'email': email, 'subject': subject, 'message': message},
					dataType:'html',
					success: function (data) {
						
							$('#messageShow').html (data + "<div class='clear'><br/></div>");
							$('#messageShow').show ();
					
					}
					});
			});
		});
	</script>

</head>
<body>
<?php require_once"blocks/header.php" ?>
<div id="wrapper">
	<div id="leftCol">
				<input type="text" placeholder="user" id="name" name="name"></input> <br />
				<input type="text" placeholder="e-mail" id="email" name="email"></input> <br />
				<input type="text" placeholder="subject" id="subject" name="subject"></input> <br />
				<textarea name="message" id="message" placeholder="Enter your message"></textarea><br />
				<center><div id="messageShow"></div></center>
				<input type="button" name="done" id="done" value="Send"></input>
			</div>
</div>
		

</body>



</html>