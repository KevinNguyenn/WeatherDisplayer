<!doctype html>
<html>
<head>
	<title>Weather Displayer</title>

	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

</head>

<style>

	html, body {
		height:100%;
	}
	.container {
		background-image:url("photo.jpg");
		width:100%;
		height:100%;
		background-size:cover;
		background-position: center;
		padding-top: 150px;
	}

	.center {
		text-align: center;
	}

	.white {
		color:white;
	}

	p {
		padding-top: 15px;
		padding-bottom: 15px;
	}

	button {
		margin-top: 20px;
		margin-bottom:20px;
	}

	.alert {
		margin-top:20px;
		display:none;
	}

</style>



<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<h1 class="center white">Weather Displayer</h1>

				<p class="lead center white">Enter your city below to get a forecast for the weather. </p>

				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..." />

					</div>

					<button id="findMyWeather" class="btn btn-success btn-lrg"> Find my weather</button>
				</form>
				<div class="alert alert-success">Success</div>
			</div>
		</div>
	</div>



	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>	

	<script>
		$("#findMyWeather").click(function(event) {
			event.preventDefault();

			if($("#city").val() != "") {
				$.get("scrapper.php?city="+$("#city").val(), function(data) {
					
					$(".alert").html(data).fadeIn();

				})	
			}
			else {
				alert("Please enter a city");
			}
			
		})
	</script>
</body>



</html>