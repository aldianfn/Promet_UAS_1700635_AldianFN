
	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Penjualan</h2>
					</div>
					<div class="col-sm-6">
						<a href="#tambahPenjualan" class="btn btn-success" data-toggle="modal"> <span>Tambah Penjualan</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Tipe Motor</th>
						<th>Harga Motor</th>
						<th>Tenor</th>
						<th>Uang Muka</th>
						<th>Cicilan Pokok</th>
						<th>Cicilan Bunga</th>
						<th>Cicilan Total</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$no = 1;
					foreach ($penjualan as $key) {?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $key->tipe_motor; ?></td>
						<td><?php echo $key->harga_motor; ?></td>
						<td><?php echo $key->tenor; ?></td>
						<td><?php echo $key->uang_muka; ?></td>
						<td><?php echo $key->cicilan_pokok; ?></td>
						<td><?php echo $key->cicilan_bunga; ?></td>
						<td><?php echo $key->cicilan_total; ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>

		</div>
	</div>





	<div id="tambahPenjualan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo site_url('C_motor/add'); ?>" method="post">
					<div class="modal-header">
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						    <li><input type="text" name="" value=""> </li>
						    <li><a href="#">CSS</a></li>
						    <li><a href="#">JavaScript</a></li>
						  </ul>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" name="address" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" name="phone" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input id="tombol" type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
