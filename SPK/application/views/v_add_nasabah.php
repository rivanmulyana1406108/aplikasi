<div class="container">	
	<h2 class="title text-center">Add Nasabah</h2>
	<div class="col-lg-offset-3">
		<form method="post" action="<?= base_url() ?>index.php/c_nasabah/add_nasabah" class="form-horizontal" role="form" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-lg-2 control-label">NO NASABAH</label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="text" required class="form-control" name="no" placeholder="NO">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-lg-2 control-label">NAMA NASABAH</label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="text" required class="form-control" name="nama" placeholder="Nama">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-lg-2 control-label">PASSWORD </label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="password" required class="form-control" name="ps" placeholder="Password">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-lg-2 control-label">ALAMAT </label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="text" required class="form-control" name="alamat" placeholder="Alamat">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-lg-2 control-label">NO HP </label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="text" required class="form-control" name="hp" placeholder="No HP">
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-offset-3">
			<button type="submit" class="btn btn-default check_out"> <span class="glyphicon glyphicon-ok">Submit</button>
			</div>
		</div>
		</form>
	</div>	
</div>
						
