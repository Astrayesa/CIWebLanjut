

	<section>

		<h1>READ DATA</h1>

		<table border="1" class="table">
			<thead>
				<tr>
					<th scope="col">Nama Produk</th>
					<th scope="col">Deskripsi Produk</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($data as $key => $keluar) {
				?>
					<tr>
						<td><?php echo $keluar['nama_produk'];  ?></td>
						<td><?php echo $keluar['deskripsi_produk'];  ?></td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</section>

	