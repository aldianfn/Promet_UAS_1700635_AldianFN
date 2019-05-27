

	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Motor</h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Tipe</th>
						<th>Harga</th>
					</tr>
				</thead>
				<tbody>
          <?php
            $no = 1;
            foreach ($motor as $key) {?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $key->tipe_motor; ?></td>
						<td><?php echo $key->harga_motor; ?></td>
					</tr>
        <?php } ?>
				</tbody>
			</table>

		</div>
	</div>

  <div class="container">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2>Motor</h2>
          </div>
        </div>
      </div>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Tipe</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no = 1;
          foreach ($cicil as $key) {?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $key->tenor; ?></td>
          <td><?php echo $key->bunga; ?></td>
        </tr>
      <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</body>
</html>
