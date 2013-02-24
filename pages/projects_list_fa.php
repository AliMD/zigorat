<?php inc('header'); ?>
<section class="container project">
	<?php inc('left-side'); ?>
	<?php inc('menus'); ?>
</section>
	<section class="right-col">
		<?php inc('projects-menu'); ?>
		<div class="project_pics">
			<div class="left-panel"><?php echo $template['projects'][0] ?></div>
			<div class="center-panel"><?php echo $template['projects'][1] ?></div>
			<div class="right-panel"><?php echo $template['projects'][2] ?></div>
		</div>
		<div class="top-arrow">
			<a href="#"></a>
		</div>
		<div class="bot-arrow">
			<a href="#"></a>
		</div>
	</section>
	<?php inc('background'); ?>
</section>
<?php inc('footer'); ?>