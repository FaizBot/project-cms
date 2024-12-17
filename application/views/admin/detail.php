<h4>nashwa cantik</h4>
<?php var_dump($product);  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - Headset Bluetooth TWS X15</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 95%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
        }
        .product-info {
            display: flex;
            gap: 20px;
        }
        .product-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .product-image img {
            max-width: 100%;
            border-radius: 8px;
        }
        .product-details {
            flex: 2;
        }
        .product-details h2 {
            margin-bottom: 10px;
        }
        .product-details p {
            margin: 10px 0;
        }
        .product-details .price {
            font-size: 1.5em;
            color: #e63946;
            font-weight: bold;
        }
        .specs, .description, .details {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php foreach($product as $prd) { ?>
        <div class="container">
            <div class="header">
                <h3><?= $prd->nama ?></h3>
                <br>
                <p><?= $prd->keterangan ?></p>
            </div>
            <div class="product-info">
                <?php foreach($picproduct as $pic) { ?>
                <div class="product-image">
                    <img src="<?= base_url('assets/upload/'.$pic['picture']) ?>" alt="Headset Bluetooth TWS X15">
                </div>
                <?php } ?>
                <div class="product-details">
                    <h2 style="padding-top: 100px;">Rp 29,888</h2>
                    <p><strong>Stock:</strong> <?= $prd->stock ?></p>
                    <p><strong>Kategori:</strong> <?= $prd->kategori ?></p>
                    <p><strong>Berat:</strong> <?= $prd->berat ?> Gram</p>
                    <p><strong>Diupload:</strong> <?= $prd->tanggal ?></p>
                    <a href="<?= base_url('admin/product') ?>" class="btn btn-primary"><- Kembali</a>
                </div>
            </div>
            <br>
            <div class="specs">
                <h3>Spesifikasi</h3>
                <p><?= nl2br(htmlspecialchars($prd->spesifikasi)) ?></p>
            </div>
            <br>
            <div class="description">
                <h3>Deskripsi</h3>
                <p><?= nl2br(htmlspecialchars($prd->deskripsi)) ?></p>
            </div>
            <br>
            <div class="details">
                <h3>Detail Produk</h3>
                <p><?= nl2br(htmlspecialchars($prd->product_detail)) ?></p>
            </div>
        </div>
    <?php } ?>
</body>
</html>
