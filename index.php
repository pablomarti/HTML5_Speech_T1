<!DOCTYPE html>
<html>
	<head>
		<title>Speech Recognition - 1st Test</title>

		<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="application.js"></script>
		<link rel="stylesheet" href="application.css" />
	</head>

	<body>
		<div class="main">
			<div>
				<h1>Speech Recognition - 1st Test</h1>
			</div>

			<div class="form">
				<form>
					<input type="text" id="speech" placeholder="Talk something"  x-webkit-speech />  
				</form>
			</div>

			<div class="result" id="result_box">
				<strong>Results</strong>
			</div>
		</div>
	</body>
</html>