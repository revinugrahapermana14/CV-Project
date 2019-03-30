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
		<?php include 'template/elements/navbarHomepage.php'; ?>

		<div class="container-fluid">
			<?php include 'template/homepage/index.php'; ?>
		</div>

		<?php include 'template/elements/footer.php'; ?>
	</div> <!-- wrapper dekstop -->

	<div class="wrapper-mobile">
		<?php include 'template/elements/navbar-mobile.php'; ?>

		<div class="container-mobile">
			<?php include 'template/homepage/index-mobile.php'; ?>
		</div>
		
		<?php include 'template/elements/footer-mobile.php'; ?>
	</div> <!-- wrapper-mobile -->
	
	<?php include 'layouts/js_.php'; ?>
</body>
</html>