<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include 'layouts/css_.php'; ?>
	<title>CVP</title>
</head>
<body>
	
	<div class="wrapper-dekstop">
		<?php include 'template/elements/navbar.php'; ?>

		<div class="container-fluid">
			<?php include 'template/about/index.php'; ?>
		</div>

		<?php include 'template/elements/footer.php'; ?>
	</div>

	<div class="wrapper-mobile">
		<?php include 'template/elements/navbar-mobile.php'; ?>

		<div class="container-mobile">
			<?php include 'template/about/index-mobile.php'; ?>
		</div>

		<?php include 'template/elements/footer-mobile.php'; ?>
	</div>
	
	<?php include 'layouts/js_.php'; ?>
</body>
</html>