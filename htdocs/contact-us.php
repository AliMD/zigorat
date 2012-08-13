<?php include 'inc/header.php'; ?>
<script type="text/javascript">
	window.onload = function(){
		
		var myform = document.forms.item(0);
		
		myform.onsubmit = function(){
			
			var ret = true;
			
			for(var i=0;i<myform.elements.length;i++){
				if(myform.elements.item(i).className!='ok'){
					ret = false;
					break;
				}
			}
			
			return ret;
		}
		
		for (var i=0;i<myform.elements.length;i++){
			
			var inp = myform.elements.item(i);
			
			if (inp.type!='text' && inp.type!='textarea'){
				continue;
			}
			
			inp.onfocus = function(){
				if (this.value == this.defaultValue){
					this.value = '';
				}
			}
	
			inp.onblur = function(){
				
				if (this.value!=''){
					this.className='ok';
				}else{
					this.className='nok'
				}
				
				if (this.value == ''){
					this.value = this.defaultValue;
				}
				
			}
		}
	}
</script>
<body>
<section class="container contact">
	<section class="logo"></section>
	<section class="left-col left">
		<?php include "inc/menus.php"; ?>
	</section>
	<section class="right-col">
		<section class="form-holder left">
			<form action="" method="post" enctype="text/plain" >
				<label class="label">your name : </label>
				<input type="text" name="name" />
				<br/>
				<label class="label">email : </label>
				<input type="text" name="email" />
				<br/>
				<label class="label">tel : </label>
				<input type="text" name="pNumber" />
				<br/>
				<label class="label">subject : </label>
				<input type="text" name="subject"  />
				<br/>
				<label class="label ">comment : </label>
				<textarea name="comment"></textarea>
				<input type="submit" class="ok" name="submit" value="submit"/>
			</form>
            
            <?php
				if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pNumber']) && isset($_POST['subject']) && isset($_POST['comment']) ){
					$name = $_POST['name'];
					$email = $_POST['email'];
					$pNumber = $_POST['email'];
					$subject = $_POST['subject'];
					$comment = $_POST['comment'];
					if( @mail('aghasizadeh70@gmail.com',$subject,'Name: '.$name. "\n" .$comment,"From:info@aghasizadeh.com\nReply-To:".$email) ){
						echo '<script type="text/javascript">alert("ok")</script>';
					}else{
						echo '<script type="text/javascript">alert("nok")</script>';
					}
				}
			?>

		</section>
		<section class="info">
			<div class="info-pic1"></div>
			<div class="desc">
				Unit 1,No.86,Felestin 7 Ave,
				<br/>
				Felestine Blvd, Mashhad, Iran
			</div>
			<br/>
			<div class="info-pic1"></div>
			<div class="desc">
				Tel: +98 511 840 9894
				<br/>
				Fax: +98 511 842 1139
			</div>
			<br/>
			<div class="info-pic1"></div>
			<div class="desc">
				<a href="#">www.zigorat.co</a>
				<br/>
				<a href="#">info@zigorat.co</a>
			</div>
			<div class="info-pic2">
				<a href="#" >employment form</a>
			</div>
			<div class="clear"></div>
		</section>
	</section>
</section>
<?php include 'inc/footer.php'; ?>