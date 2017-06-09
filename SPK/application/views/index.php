<!DOCTYPE html>
<html>	
    <head>
        <meta charset="UTF-8">
        <title>Sistem Perbankan</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>asset/css/main.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    </head>
<body>

	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
				<img style="display: block; margin: 0 auto; text-align: center;" src="<?php echo base_url();?>asset/images/home/polb.png" class="girl img-responsive" alt="" />
			
			
		<div class="container">
				
    <!-- Collect the nav links, forms, and other content for toggling -->
	<?php if ($status_user==1){?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav nav-tabs nav-justified">
		
        <li><a href="<?php echo base_url()?>index.php/c_tabungan/index"><i class="fa fa-home"></i>     Home       </a></li>
        <li><a href="<?php echo base_url()?>index.php/c_login/logout"><i class="fa fa-lock"></i>     Logout      </a></li>
      </ul>
	  
	<?php } ?> 
	<!-- Collect the nav links, forms, and other content for toggling -->
	<?php if ($status_user==2){?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav nav-tabs nav-justified">
        <li><a href="<?php echo base_url()?>index.php/c_tabungan/form_tarikan"><i class="fa fa-shopping-cart"></i>     Tarikan       </a></li>
        <li><a href="<?php echo base_url()?>index.php/c_tabungan/form_setoran"><i class="fa fa-tasks"></i>     Setoran       </a></li>
        <li><a href="<?php echo base_url()?>index.php/c_nasabah/view_nasabah"><i class="fa fa-link"></i>     Informasi Nasabah       </a></li>
        <li><a href="<?php echo base_url()?>index.php/c_login/logout"><i class="fa fa-lock"></i>     Logout      </a></li>
      </ul>
	  
	<?php } ?>
	
	</div> 
			</div>
		</div><!--/header_top-->
	</header> 
	
	<?php echo $this->load->view($page); ?>
	
	<br><br>
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="well">
					<p align="center">Copyright © 2016 Rivan Mulyana. All rights reserved.</p>
					
				</div>
			</div>
		</div>
	</footer><!--/Footer-->
	

  
	<script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/price-range.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
</body>

</html>
