<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MailChimp</title>

	<!--C S S-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<!--INCLUDE-->
	<?php include 'mailchimp/mailchimp.php'; ?>

	<header class="jumbotron">
		<div class="container">
			<h1>MailChimp</h1>
			<p>✉️ <mark>API — v3.0</mark></p>
		</div>
	</header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Newsletter</h3>
					<!--TRUE-->
					<div class="alert alert-info" role="alert">
						True
					</div>

					<!--FALSE-->
					<div class="alert alert-danger" role="alert">
						Flase
					</div>

					<form action="<?= $listURL ?>" method="POST" autocomplete="on" id="form">
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" name="EMAIL" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="FNAME" class="form-control" placeholder="Name">
						</div>
						<div class="hidden">
							 <input type="text" name="b_1131235960119b627903d03b5_60d0a3be2e" tabindex="-1" value="">
						</div>
						<div class="form-group">
							<button type="submit" class="btn">
								Send
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>

	<!--J S -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/app.js" type="text/javascript"></script>

</body>
</html>

