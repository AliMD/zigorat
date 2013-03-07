<?php inc('header'); ?>
<section class="container">
	<?php inc('left-side'); ?>
	<?php inc('menus'); ?>
</section>
	<section class="right-col">
		<div class="right-inside overFlowHidden">
			<div class="top-arrow"></div>
			<div class="bot-arrow"></div>
			<div class="customer_scroll">
				<?php echo $template['customers']; ?>
			</div>
			<div class="customer_title">
				<h4 class="left">our customers</h4>
				<div class="line"></div>
				<div class="desc left">
					We genuinely like our clients not because they are paying their bills, because we do not display our clients personality, which in turn will encourage us to make things more memorable.<br /><br />
					Customers who have the honor of working with some of them:
				</div>
			</div>
		</div>
	</section>
	<?php include inc('background'); ?>
	</section>
</section>
<?php include inc('footer'); ?>