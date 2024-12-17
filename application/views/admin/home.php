<style>
    /* From Uiverse.io by Yaya12085 */ 

.titlee {
  display: flex;
  align-items: center;
}

.titlee span {
  position: relative;
  padding: 0.5rem;
  background-color: #10B981;
  width: 1.5rem;
  height: 1.5rem;
  border-radius: 9999px;
}

.titlee span svg {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #ffffff;
  height: 1rem;
}

.titlee-text {
  margin-left: 0.5rem;
  color: #374151;
  font-size: 18px;
}

.percentt {
  margin-left: 0.5rem;
  color: #02972f;
  font-weight: 600;
  display: flex;
}

.cardd {
    background: #fff; /* Warna latar belakang */
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk tampilan modern */
    text-align: center;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100px; /* Sesuaikan tinggi kartu */
}

.dataa {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px; /* Jarak antara ikon dan teks */
}

.dataa i {
    font-size: 30px; /* Ukuran ikon */
    color: #4CAF50; /* Warna ikon agar menarik */
}

.dataa p {
    font-size: 18px;
    font-weight: bold;
    margin: 0; /* Hilangkan margin default */
    color: #333; /* Warna teks */
}

</style>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="cardd">
            <div class="dataa">
                <i class="ti ti-user"></i>
                <p>
                    <?= count($user) ?> User 
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="cardd">
            <div class="dataa">
                <i class="ti ti-user"></i>
                <p>
                    <?= count($penjualan) ?> Product Terjual
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="cardd">
            <div class="dataa">
                <i class="ti ti-user"></i>
                <p>
                    <?= count($product) ?> Product 
                </p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title d-flex align-items-center gap-2 mb-4">
                Traffic Overview
            </h5>
            <canvas id="traffic-overview" width="400" height="200"></canvas>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Ambil data dari PHP
    const salesData = <?php echo json_encode($sales); ?>;

    // Parse data ke format yang dibutuhkan Chart.js
    const labels = salesData.map(item => item.tanggal);
    const data = salesData.map(item => item.total_penjualan);

    // Inisialisasi Chart.js
    const ctx = document.getElementById('traffic-overview').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Penjualan',
                data: data,
                borderColor: 'blue',
                backgroundColor: 'rgba(0, 0, 255, 0.1)',
                fill: true,
                tension: 0.4,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `Rp ${context.raw.toLocaleString()}`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return `Rp ${value.toLocaleString()}`;
                        }
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Tanggal'
                    }
                }
            }
        }
    });
</script>
