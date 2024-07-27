<?php include('../template/header-gudang.php') ?>
<?php include('../template/header-gudang-menu.php') ?>

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						
						<!-- <div class="card">
							<div class="card-header border-0">
								<div>
									<h4 class="fs-30 font-w700">Apotek Kencana💊</h4>
                                    <p style="font-size: 14px;">Selamat datang di Aplikasi Gudang Apotek! Silakan login untuk mengakses sistem manajemen gudang kami yang efisien dan aman. Dengan login, Anda dapat melakukan pemantauan stok obat, 
                                        pengelolaan pesanan, dan pelacakan distribusi secara real-time.</p>
								</div>
							</div>	
							<div class="card-img d-flex justify-content-center"><img src="../assets/images/gambar.svg" class="img-fluid" alt="Description of image" style="max-width: 30rem"/></div>							
						</div> -->

						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Grafik Permintaan Obat</h4>
							</div>
							<div class="card-body">
								<canvas id="barChart_1" style="height: 150px;"></canvas>
							</div>
						</div>
						
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		<script src="../assets/vendor/chart.js/Chart.bundle.min.js"></script>
		<script src="../template/chart-bulanan.js"></script>

		<?php include('../template/footer.php') ?>