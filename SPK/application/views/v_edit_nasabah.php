<div class="container">	
	<h2 class="title text-center">Edit Nasabah</h2>
	<?php
        foreach($nasabah as $row){
    ?>
	<div class="col-lg-offset-3">
		<form method="post" action="<?= base_url() ?>index.php/c_nasabah/update_nasabah" class="form-horizontal" role="form" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-lg-2 control-label">NO NASABAH</label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="text" required class="form-control" name="no" value="<?php echo $row->NO_NASABAH;?>" readonly>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-lg-2 control-label">NAMA NASABAH</label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="text" required class="form-control" name="nama" value="<?php echo $row->NAMA_NASABAH;?>">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-lg-2 control-label">ALAMAT NASABAH</label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="text" required class="form-control" name="alamat" value="<?php echo $row->ALAMAT_NASABAH;?>">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-lg-2 control-label">NO HP</label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="text" required class="form-control" name="hp" value="<?php echo $row->NOHP_NASABAH;?>">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-lg-2 control-label">PASSWORD</label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="password" required class="form-control" name="ps" value="*****">
			</div>
		</div>
		

		<div class="form-group">
			<div class="col-lg-offset-3">
			<button type="submit" class="btn btn-default check_out"> <span class="glyphicon glyphicon-ok">Submit</button>
			</div>
		</div>
		</form>
        <?php
            }    
        ?>
	</div>	
</div>
						
