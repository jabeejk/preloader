<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">	</script> -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
		<div class="wrapper">
			<h2>wrapper second one</h2>
		</div>

		<div class="display" >
			<div class="spinner-grow text-danger" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
			
	

</body>
</html>

<script>

	 document.querySelector('.wrapper').style.display = "none"	;
	 document.querySelector('.display').style.visibility ="visible";
	 document.querySelector('.display').style.marginLeft = "50%";
	 document.querySelector('.display').style.marginTop = "10%";


	setTimeout(function(){
		document.querySelector('.display').style.visibility="hidden";
	 	document.querySelector('.wrapper').style.display = "block";
	 }, 4000);
	
</script>

