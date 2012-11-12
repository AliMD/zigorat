<?php include 'inc/header.php'; ?>
<section class="container project">
	<div class="logo"></div>
	<section class="left-col left">
		<?php include "inc/menus.php"; ?>
	</section>
<?php include "inc/projects-menu.php"; ?>
		<div class="project_pics">
			<div class="left-panel">
			
			<?php
				for ($i=0;$i<3;$i++){
			?>
					<section class='prd' style="background-image:url('images/g1.png')">
						<h1>project name</h1>
						<h2>
							<span>01<br />images</span>
						</h2>
					</section>
			<?php
				}
			?>

			</div>
			<div class="center-panel">
			
			<?php
				for ($i=0;$i<3;$i++){
			?>
					<section class='prd' style="background-image:url('images/g2.png')">
						<h1></h1>
						<h2></h2>
					</section>
			<?php
				}
			?>	

			</div>
			<div class="right-panel">
			
			<?php
				for ($i=0;$i<3;$i++){
			?>
					<section class='prd' style="background-image:url('images/g3.png')">
						<h1></h1>
						<h2></h2>
					</section>
			<?php
				}
			?>

			</div>

		</div>
		<div class="top-arrow">
			<a href="#"></a>
		</div>
		<div class="bot-arrow">
			<a href="#"></a>
		</div>
	</section>
	<?php include 'inc/background.php' ?>
</section>
<?php include 'inc/footer.php'; ?>