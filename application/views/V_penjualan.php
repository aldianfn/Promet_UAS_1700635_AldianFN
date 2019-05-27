
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
						<th>Aksi</th>
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
						<td>
							<a href="#edit<?php echo $key->id_penjualan; ?>" data-toggle="modal">Edit</a>
							|
							<a href="#delete<?php echo $key->id_penjualan;?>" class="delete" data-toggle="modal">Hapus</a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>

		</div>
	</div>




<!--  Tambah -->
	<div id="tambahPenjualan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo base_url('C_motor/add'); ?>" method="post">
					<div class="modal-header">
						<h4 class="modal-title">Tambah Penjualan</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<label for="">Pilih Motor</label>
						</div>
						<div class="row">
								<select class="custom-select" name="id_motor">
									<?php foreach ($motor as $key) { ?>
										<option value="<?php echo $key->id_motor; ?>"><?php echo $key->tipe_motor; ?></option>
									<?php } ?>
								</select>
						</div>
						<div class="row mt-3">
							<label for="">Pilih Tenor</label>
						</div>
						<div class="row">
							<select class="custom-select" name="id_cicil">
								<?php foreach ($cicil as $key) { ?>
									<option value="<?php echo $key->id_cicil; ?>"><?php echo $key->tenor; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="row mt-3">
							<label for="">Pilih Uang Muka</label>
						</div>
						<div class="row">
							<select class="custom-select" name="id_uang_muka">
								<?php foreach ($uangmuka as $key) { ?>
									<option value="<?php echo $key->id_uang_muka; ?>"><?php echo $key->uang_muka; ?></option>
								<?php } ?>
							</select>
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


	<!-- Delete -->
	<?php
	foreach($penjualan as $key){

		?>
		<div id="delete<?php echo $key->id_penjualan;?>" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="<?php echo base_url('c_motor/delete/'.$key->id_penjualan); ?>" method="POST">
						<div class="modal-header">
							<h4 class="modal-title">Hapus Penjualan</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<p>Anda yakin akan menghapus data ini??</p>
							<p class="text-warning"><small>Data tidak dapat kembali.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-danger" value="Delete">
						</div>
					</form>
				</div>
			</div>
		</div>

	<?php } ?>

	<!-- Edit -->
	<?php foreach ($penjualan as $key) { ?>
	<div id="edit<?php echo $key->id_penjualan;?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo base_url('C_motor/edit/'.$key->id_penjualan); ?>" method="post">
					<div class="modal-header">
						<h4 class="modal-title">Tambah Penjualan</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<label for="">Pilih Motor</label>
						</div>
						<div class="row">
								<select class="custom-select" name="id_motor">
									<?php foreach ($motor as $key) { ?>
										<option value="<?php echo $key->id_motor; ?>"><?php echo $key->tipe_motor; ?></option>
									<?php } ?>
								</select>
						</div>
						<div class="row mt-3">
							<label for="">Pilih Tenor</label>
						</div>
						<div class="row">
							<select class="custom-select" name="id_cicil">
								<?php foreach ($cicil as $key) { ?>
									<option value="<?php echo $key->id_cicil; ?>"><?php echo $key->tenor; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="row mt-3">
							<label for="">Pilih Uang Muka</label>
						</div>
						<div class="row">
							<select class="custom-select" name="id_uang_muka">
								<?php foreach ($uangmuka as $key) { ?>
									<option value="<?php echo $key->id_uang_muka; ?>"><?php echo $key->uang_muka; ?></option>
								<?php } ?>
							</select>
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
	<?php } ?>
</body>
</html>
