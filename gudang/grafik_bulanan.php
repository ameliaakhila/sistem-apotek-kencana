<?php include('../template/header-gudang.php') ?>
<?php include('../template/header-gudang-menu.php') ?>
<?php include('../koneksi.php') ?>


		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					

					<div class="col-xl-12">
						<div class="card">
							<div class="card-header border-0">
								<div class="col-xl-12 col-lg-12 col-sm-12">
									
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
							<!-- <div class="card-img d-flex justify-content-center"><img src="../assets/images/gambar.svg" class="img-fluid" alt="Description of image" style="max-width: 30rem"/></div>							 -->
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
		
		