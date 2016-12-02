<html>
	<head>
		<title>Test Mobile.</title>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.button').click(function() {
					alert('i work');	
				});
			});
		</script>
	</head>
	
	<body>
		This is the mobile site.
		<a class="button">click me</a>
		<a href="index.php?godesktop=true">back to desktop</a>
	</body>
</html>