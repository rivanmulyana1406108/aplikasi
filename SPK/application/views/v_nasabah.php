<section id="cart_items">
		<div class="container">
			<h2 class="title text-center">Daftar Nasabah</h2>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td>Id Nasabah</td>
							<td>Nama</td>
							<td>Alamat</td>
							<td>No HP</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php foreach($nasabah as $row){?>
						<tr>
							<td><h6><?php echo $row->NO_NASABAH; ?></h6></td>
							<td><h6><?php echo $row->NAMA_NASABAH; ?></h6></td>
							<td><h6><?php echo $row->ALAMAT_NASABAH; ?></h6></td>
							<td><h6><?php echo $row->NOHP_NASABAH; ?></h6></td>
							<td>
								<a class="btn btn-default update" href="<?php echo base_URL();?>index.php/c_nasabah/form_edit_nasabah/<?php echo $row->NO_NASABAH ?>"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
							</td>
						</tr>
					</tbody>
					<?php } ?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><a class="btn btn-default update" href="<?php echo base_URL();?>index.php/c_nasabah/form_add_nasabah"><i class="glyphicon glyphicon-plus"></i> Tambah</a></td>
					</tr>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->