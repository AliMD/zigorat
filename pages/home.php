<?php inc('header'); ?>
<section class="container home">
	<?php inc('left-side'); ?>
	<?php inc('menus'); ?>
</section>
	<?php inc('icons'); ?>
	<div class="right-col">
		<div class="pics_right">
			<section class="newhome">
				<img id="transparentImgLast" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" usemap="#lastMapPrd" alt="transparent" width="585" height="490"  title="" />
				<map name="lastMapPrd" id="lastMapPrd">
					<area id='lastProjectMap' shape="poly" coords="560, 261, 420, 339, 320, 365, 318, 479, 420, 483, 562, 401, 560, 261" href="#" alt="" title="" />
				</map>
				<div class="content" id="lastProject">
					<div class="home-slider">
						<?php echo $template['home_slider']; ?>
					</div>
					<section class="last_projects">
						<div class="last_projectsImg">
							<?php for ($i=0; $i < 3; $i++) { ?>
								<div style="background-image: url('./images/pic_small_home.png')"></div>
							 <?php } ?>
						</div>
						<div class="last_projectsDecs">
							<h4>Last Projects</h4>
							<p>Parsis Building Co. 
more description
is in this link<p></div>
					</section>
				</div>
			</section>
		</div>
	</div>
	<?php inc('background'); ?>
</section>
<?php inc('footer'); ?>