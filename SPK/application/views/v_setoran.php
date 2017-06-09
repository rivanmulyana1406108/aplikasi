<div class="container">	
	<h2 class="title text-center">Setoran</h2>
	<div class="col-lg-offset-3">
		<form method="post" action="<?= base_url() ?>index.php/c_tabungan/setoran" class="form-horizontal" role="form" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-lg-2 control-label">NO NASABAH </label>
			<div class="col-lg-2">
			<select style="width: 300px;" class="form-control" required name="no">
                    <option value=""> NO NASABAH </option>
                <?php foreach ($nasabah as $row) { ?>
                    <option value="<?=$row->NO_NASABAH?>"> <?=$row->NO_NASABAH?>--<?=$row->NAMA_NASABAH?></option>
                <?php } ?>
             </select>
			</div>
		</div>
	
		<div class="form-group">
			<label class="col-lg-2 control-label">JUMLAH SETORAN </label>
			<div class="col-lg-2">
			<input style="width: 300px;" type="number" required class="form-control" name="setor" placeholder="Jumlah">
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
						
