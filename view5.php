<!DOCTYPE HTML>

<HTML>
	<Head>
		<meta charset="utf-8">
		<title> Adding Records to customers_tbl </title>
		<link rel = "stylesheet" href ="<?php echo base_url();?>css/style.css" media= "screen">
	</Head>
	
	<Body>
	
		<!--"----passing two segments the controller/its function-----"-->
	
		<?php echo form_open("controller5/create"); ?>
		
					<p> <!--"----lbl for name------"-->
						<label for ="firstName"> First Name: </label>
						<!--"---2--txt box for name------"-->
						<input type = "text" name="firstName" id="firstName"> 
					</p>
	
					<p> <!--"---lbl for email------"-->
						<label for ="email"> Email: </label>
						<!--"----txt box for email------"-->
						<input type = "text" name="email" id="email"> 
					</p> 
	
					<p> 
						<!--"----button for submit------"-->			
						<input type = "submit" value = "submit"> 
					</p> 
	
		<?php echo form_close(); ?>	
		
		
		
		
	</Body>
	
	
</HTML>




