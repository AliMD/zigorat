<?php console_log_show(); ?>
<?php include inc('analytic'); ?>
<script type="text/javascript" src="scripts/jquery.js" ></script>
<script type="text/javascript" src="scripts/zepto.js" ></script>
<script type="text/javascript" src="scripts/colorbox.js" ></script>
<script type="text/javascript" src="scripts/script.js" ></script>
<script type="text/javascript">
	pagejs("<?php echo $template['page']; ?>");
</script>
<img src="images/background.jpg" onload="pageonload()" width="0" height="0" alt="zigorat background preloader" class="hidden" />
</body>
</html>