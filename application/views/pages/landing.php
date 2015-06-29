<html>
<head>
	<title>DEI</title>
	<link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon"/>
	<meta name='description' content='Department of Emotional Integrity allows users to test their emotional status.'>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="department of emotional integrity, dei">
	<!-- bootstrap and jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body {
		text-align: center;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){

		var name_regex = /^[a-zA-Z]+$/;
		var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

		$(document).on("submit", "form", function(){
			var name = $("#name").val();	
			var email = $("#email").val();

			if(name.match(name_regex) && email.match(email_regex)){
				$.post("/dei/poll", $(this).serialize(), function(results){
					console.log(results);
					$("#response").html("<p class='text-success'>Thank you for signing up.</p>");
					$("#name").val("");
					$("#email").val("");
				});
			}else{
				$("#response").html("<p class='text-danger'>You entered invalid information.</p>")
			}


			return false;
		})

		$("body").hide();

		$("body").fadeIn(2000);




	})
</script>
<body>

	<div class="container">

		<h1>Department of Emotional Integrity</h1>
		<h3>Get Tested Soon</h3>
		<p>Please sign up for updates</p>

		<form action="/dei/poll" method="post">
			<input type="text" id="name" name="name" placeholder="Name">
			<input type="text" id="email" name="email" placeholder="Email">
			<input type="submit" value="Submit">
		</form>
		<div id="response"></div>
		<p>For more information <a href="http://everything-before-us.myshopify.com/pages/about-us" target="_blank">Click Here</a>.</p>
	</div>


	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-61671565-4', 'auto');
	  ga('send', 'pageview');

	</script>

</body>
</html>