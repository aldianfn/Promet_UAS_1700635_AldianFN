

	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Uang Muka</h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Uang Muka</th>
					</tr>
				</thead>
				<tbody>
          <?php
            $no = 1;
            foreach ($uangmuka as $key) {?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $key->uang_muka; ?></td>
					</tr>
        <?php } ?>
				</tbody>
			</table>

		</div>
	</div>
</body>
</html>
