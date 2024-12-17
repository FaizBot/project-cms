<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/user/') ?>css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/user/') ?>css/slick.css" />
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/user/') ?>css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/user/') ?>css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?= base_url('assets/user/') ?>css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/user/') ?>css/style.css" />

    <!-- Sweet Alert -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>sweetalert2/sweetalert2.min.css" />

    <style>
		/* From Uiverse.io by andrew-demchenk0 */ 
		.info {
		font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		width: 625px;
		padding: 12px;
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: start;
		background: #f8d7da;
		border-radius: 8px;
		box-shadow: 0px 0px 5px -3px #111;
		}

		.infoo {
		font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		width: 400px;
		padding: 12px;
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: start;
		background: #f8d7da;
		border-radius: 8px;
		box-shadow: 0px 0px 5px -3px #111;
		}

		.infooo {
		font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		width: 525px;
		padding: 12px;
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: start;
		background: #f8d7da;
		border-radius: 8px;
		box-shadow: 0px 0px 5px -3px #111;
		}

		.info__icon {
		width: 20px;
		height: 20px;
		transform: translateY(-2px);
		margin-right: 8px;
		}

		.info__icon path {
		fill: #721c24;
		}

		.info__title {
		font-weight: 500;
		font-size: 14px;
		color: #721c24;
		}
        
        /* Styling untuk tabel keranjang belanja */
        .shopping_cart_table table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .shopping_cart_table th {
            text-align: left;
            font-weight: 600;
            padding: 10px 0;
            border-bottom: 2px solid #eee;
            color: #333;
            font-size: 16px;
        }

        .shopping_cart_table td {
            padding: 20px 0;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
        }

        .product_cart_item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product_cartitem_pic img {
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .product_cartitem_text h6 {
            font-size: 14px;
            color: #333;
            margin: 0;
            font-weight: 500;
        }

        .product_cartitem_text h5 {
            font-size: 14px;
            color: #e53637;
            margin: 5px 0 0 0;
            font-weight: 600;
        }


        .pro-qty-2 input {
            width: 50px;
            height: 35px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
            font-weight: 500;
        }

        .cart__price {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            text-align: right;
        }

        .cart__close {
            text-align: center;
            color: #e53637;
            font-size: 20px;
        }

        .cart__close a {
            color: inherit;
            text-decoration: none;
        }

        .cart__close a:hover {
            color: #a90000;
        }

        .continue__btn a,
        .update__btn a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-transform: uppercase;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
        }

        .continue__btn a:hover,
        .update__btn a:hover {
            background-color: #e53637;
            color: #fff;
        }

        .cart__discount h6,
        .cart__total h6 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .cart__discount input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
            color: #333;
        }

        .cart__discount button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .cart__discount button:hover {
            background-color: #e53637;
        }

        .cart__total ul {
            list-style: none;
            padding: 0;
            margin: 0;
            margin-bottom: 20px;
        }

        .cart__total ul li {
            display: flex;
            justify-content: space-between;
            font-size: 16px;
            font-weight: 500;
            color: #333;
        }

        .cart__total ul li span {
            color: #e53637;
            font-weight: 600;
        }

        .primary-btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #e53637;
            color: #fff;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            text-align: center;
            transition: all 0.3s ease;
        }

        .primary-btn:hover {
            background-color: #a90000;
            color: #fff;
        }

        .productt-img {
			width: 100%; /* Memastikan kontainer gambar memanfaatkan lebar penuh */
			height: 230px; /* Tinggi tetap */
			overflow: hidden; /* Memastikan gambar tidak keluar dari kontainer */
			display: flex;
			justify-content: center;
			align-items: center;
			background: #f9f9f9; /* Opsional: warna latar belakang jika gambar tidak ada */
			
		}
		
		.responsivee-img {
			width: 100%;
			height: 100%;
			object-fit: cover; /* Menjaga proporsi gambar */
			object-position: center; /* Menempatkan gambar di tengah */
			
		}
        .badges {
		padding: 5px 10px;
		border-radius: 5px;
		color: white;
		font-weight: bold;
		text-align: center;
	}

	.bg-red {
		background-color: #f44336;
		/* Red for 'Pesanan Masuk' */
	}

	.bg-blue {
		background-color: #2196f3;
		/* Blue for 'Pesanan Dikonfirmasi' */
	}

	.bg-yellow {
		background-color: #ffeb3b;
		/* Yellow for 'Pesanan Dikemas' */
	}

	.bg-orange {
		background-color: #ff9800;
		/* Orange for 'Pesanan Dikirim' */
	}

	.bg-purple {
		background-color: #9c27b0;
		/* Purple for 'Pesanan Dalam Perjalanan' */
	}

	.bg-darkgreen {
		background-color: #388e3c;
		/* Dark green for 'Pesanan Selesai' */
	}

	</style>
</head>
<body>
    <?= $contents; ?>

    <!-- jQuery Plugins -->
    <script src="<?= base_url('assets/user/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/user/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/user/') ?>js/slick.min.js"></script>
    <script src="<?= base_url('assets/user/') ?>js/nouislider.min.js"></script>
    <script src="<?= base_url('assets/user/') ?>js/jquery.zoom.min.js"></script>
    <script src="<?= base_url('assets/user/') ?>js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const totalProducts = 100; // Jumlah total produk
        const productsPerPage = 20; // Produk per halaman
        const totalPages = Math.ceil(totalProducts / productsPerPage);
        let currentPage = 1;

        function renderProducts() {
            const start = (currentPage - 1) * productsPerPage + 1;
            const end = Math.min(currentPage * productsPerPage, totalProducts);

            const productContainer = document.getElementById("products");
            productContainer.innerHTML = `<p>Showing products ${start} to ${end} of ${totalProducts}</p>`;
        }

        function updatePagination() {
            const paginationItems = document.querySelectorAll(".store-pagination .page-item");
            paginationItems.forEach((item, index) => {
                item.classList.remove("active");
                if (index + 1 === currentPage) {
                    item.classList.add("active");
                }
            });

            const nextButton = document.querySelector(".store-pagination li:last-child");
            nextButton.classList.toggle("disabled", currentPage === totalPages);
        }

        function goToPage(page) {
            if (page < 1 || page > totalPages) return;
            currentPage = page;
            renderProducts();
            updatePagination();
        }

        function changePage(direction) {
            goToPage(currentPage + direction);
        }

        // Initialize
        renderProducts();
        updatePagination();


    </script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.tab-nav li a');
        const tabContent = document.querySelectorAll('.tab-pane');

        tabs.forEach(tab => {
            tab.addEventListener('click', event => {
                event.preventDefault();

                // Hapus kelas 'active' dari semua tab dan konten
                tabs.forEach(tab => tab.parentElement.classList.remove('active'));
                tabContent.forEach(content => content.classList.remove('active'));

                // Tambahkan kelas 'active' pada tab yang diklik dan konten terkait
                const target = document.querySelector(tab.getAttribute('href'));
                tab.parentElement.classList.add('active');
                target.classList.add('active');
            });
        });
    });
    </script>
    <script>
		document.addEventListener('DOMContentLoaded', () => {
			function confirmDeleteUsr(id) {
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = '<?= base_url('admin/user/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeleteUsr = confirmDeleteUsr; // Make sure it's globally accessible.

			function confirmDeleteKtr(id) {
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = '<?= base_url('admin/kategori/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeleteKtr = confirmDeleteKtr; // Make sure it's globally accessible.

			function confirmDeletePrd(id) {
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = '<?= base_url('admin/product/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeletePrd = confirmDeletePrd; // Make sure it's globally accessible.

			function confirmDeletePic(id) {
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = '<?= base_url('admin/picproduct/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeletePic = confirmDeletePic; // Make sure it's globally accessible.
		});

	</script>

    <script>
		<?php if($this->session->flashdata('success')): ?>
			Swal.fire({
				title: "Berhasil",
				text: "<?= $this->session->flashdata('success'); ?>",
				icon: "success"
			});

		<?php elseif($this->session->flashdata('error')): ?>
			Swal.fire({
				title: "Gagal!",
				text: "<?= $this->session->flashdata('error'); ?>",
				icon:"error"
			});
		<?php endif; ?>
	</script>
    <script>
	$(document).ready(function() {
		// Mendapatkan base_url dari CI menggunakan PHP
		var base_url = "<?php echo base_url(); ?>";

		// Menggunakan URL untuk melakukan AJAX request
		$.ajax({
			type: 'POST',
			url: base_url + 'user/checkout', // URL yang dituju
			success: function(hasil_provinsi) {
				console.log(hasil_provinsi); // Tampilkan response di console
			},
			error: function(xhr, status, error) {
				console.error(error); // Tampilkan error jika ada
			}
		});

        $("select[name=provinsi]").on("change", function(){
            var base_url = "<?php echo base_url(); ?>";
            // ambil id_provinsi yang dipilih
            var id_provinsi_terpilih = $("option:selected",this).attr("id_provinsi");
            $.ajax({
                type:'POST',
                url: base_url + 'user/checkout', // URL yang dituju
                data: 'id_provinsi='+id_provinsi_terpilih,
                success: function(hasil_kota) {
                    $("select[name=kota]").html(hasil_kota); // Tampilkan response di console
			    },
            });
        });

        $("select[name=kurir]").on("change", function(){
            var base_url = "<?php echo base_url(); ?>";
            // mendapatkan data ongkos kirim

            // mendapatkan id_kota yang dipilih pengguna
            var kota_terpilih = $("option:selected","select[name=kota]").attr("id_kota");
            // mendapatkan ekspedisi yang dipilih
            var ekspedisi_terpilih = $("select[name=kurir]").val();
            // mendapatkan total berat
            var totalberat = $("input[name=totalberat]").val();
            $.ajax({
                type: 'post',
                url: base_url + 'user/checkout', // URL yang dituju
                data: 'ekspedisi='+ekspedisi_terpilih+'&kota='+kota_terpilih+'&berat='+totalberat,
                success:function(hasil_paket)
                {
                    $("select[name=paket]").html(hasil_paket); // Tampilkan response di console
                },
            });
        });
	}); 
    </script>
</body>

</html>
