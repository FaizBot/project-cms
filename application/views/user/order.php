<style>
	/* Reset dasar */
	* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	}

	/* Container utama */
	.containerr {
	max-width: 1200px;
	margin: 20px auto;
	padding: 20px;
	}

	h1 {
	text-align: center;
	color: #333;
	margin-bottom: 20px;
	}

	/* Tabel */
	table {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	}

	thead {
	background-color: #f7f7f7;
	}

	th, td {
	padding: 12px 15px;
	text-align: center;
	}

	th {
	font-weight: bold;
	color: #555;
	border-bottom: 2px solid #ddd;
	}

	tbody tr:nth-child(even) {
	background-color: #f9f9f9;
	}

	tbody tr:hover {
	background-color: #f1f1f1;
	transition: background-color 0.3s;
	}

	/* Produk dengan Gambar */
	.product {
	display: flex;
	align-items: center;
	gap: 10px; /* Jarak antara gambar dan teks */
	}

	.product img {
	width: 60px; /* Ukuran gambar */
	height: 60px;
	object-fit: cover; /* Menjaga proporsi gambar */
	border-radius: 5px; /* Membuat sudut gambar sedikit melengkung */
	}

	.product span {
	font-weight: 600;
	color: #333;
	}

</style>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">MY ACCOUNT</h3>
				<ul class="breadcrumb-tree">
					<li><a href="<?= base_url() ?>">Home</a></li>
					<li class="active">My Track Order</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<div class="containerr">
    <h1>Daftar Transaksi</h1>
    <table>
      <thead>
        <tr>
          <th>ID Transaksi</th>
          <th>Produk</th>
          <th style="width: 150.6875px;">Tanggal</th>
          <th>Qty</th>
          <th style="width: 250.4583px;">Status</th>
          <th>Paket</th>
          <th>Kurir</th>
          <th>No Resi</th>
        </tr>
      </thead>
      <tbody>
	  <?php foreach ($order as $t): ?>
        <tr>
          <td>50</td>
          <td>
            <div class="product">
              <img src="<?= base_url() ?>/assets/upload/<?= $t['picture'] ?>" alt="Produk 3">
              <span><?= $t['nama']?></span>
            </div>
          </td>
          <td><?= $t['tanggal']; ?></td>
          <td><?= $t['jumlah']; ?></td>
          <td>
		  <span class="badges 
		  		<?php 
					switch ($t['status']) {
						case 'Pesanan Masuk': echo 'bg-red'; break;
						case 'Pesanan Dikonfirmasi': echo 'bg-blue'; break;
						case 'Pesanan Dikemas': echo 'bg-yellow'; break;
						case 'Pesanan Dikirim': echo 'bg-orange'; break;
						case 'Pesanan Dalam Perjalanan': echo 'bg-purple'; break;
						case 'Pesanan Selesai': echo 'bg-darkgreen'; break;
						default: echo ''; 
					}
				?>">
				<?= $t['status']; ?>
			</span>
		  </td>
          <td><?= $t['paket']; ?></td>
          <td><?= $t['kurir']; ?></td>
          <td><?= $t['no_resi']; ?></td>
        </tr>
		<?php endforeach; ?>
      </tbody>
    </table>
  </div>
