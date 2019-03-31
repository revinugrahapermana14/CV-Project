<header class="navbar-fixed fixed-materialize">
	<nav>
		<div class="nav-wrapper">
			<div class="container-fluid">
				<?php  $pg = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.')));?>
				<a href="index.php" class="brand-logo <?php if($pg=='index'){?>active-menu-first<?php }?>">
					<img src="assets/icon/brand.svg" alt="">
				</a>
				<ul class="right hide-on-med-and-down sidenav-mtr">
					<li class="mn-linked <?php if($pg=='about'){?>actived<?php }?>"><a class="animate" href="about.php">ABOUT US</a></li>
					<li class="mn-linked <?php if($pg=='catalogue'){?>actived<?php }?>"><a class="animate" href="catalogue.php">CATALOGUE</a></li>
					<li class="mn-linked <?php if($pg=='contact'){?>actived<?php }?>"><a class="animate" href="contact.php">CONTACT US</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>