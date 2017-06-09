<section id="cart_items">
		<div class="container">
			<h2 class="title text-center">Informasi Saldo</h2>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td>Id Nasabah</td>
							<td>Nama</td>
							<td>Saldo</td>
						</tr>
					</thead>
					<tbody>
					<?php foreach($tabungan as $row){?>
						<tr>
							<td><h6><?php echo $row->NO_NASABAH; ?></h6></td>
							<td><h6><?php echo $row->NAMA_NASABAH; ?></h6></td>
							<td><h6><?php echo $row->SALDO; ?></h6></td>
						</tr>
					</tbody>
					<?php } ?>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->