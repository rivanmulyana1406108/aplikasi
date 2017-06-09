<!DOCTYPE html>
<html>	
    <head>
        <meta charset="UTF-8">
        <title>LOGIN SISTEM PERBANKAN</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>asset/css/main.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet" type="text/css" />
    </head>
	<body>

		<br><br>
		<div class="container"><img style="display: block; margin: 0 auto; text-align: center;" src="<?php echo base_url();?>asset/images/home/polb.png" class="girl img-responsive" alt="" />
			</div>
		<div class="col-md-4 col-md-offset-4 form-login">
		<div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form method="post" action="<?php echo base_url()?>index.php/c_login/auth">
            <h3 class="text-center title-login">Login </h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
 
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
				
				<div class="form-group">
				<select name="jenis_pengguna" required class="form-control">
								<option value=""> Login Sebagai ... </option>
								<option value="1"> NASABAH </option>
								<option value="2"> PEGAWAI </option>
							</select>
                </div>
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
            </form>
        </div>
		</div>
	</body>
</html>