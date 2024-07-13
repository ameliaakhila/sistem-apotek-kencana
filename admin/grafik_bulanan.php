<?php include('../template/header-admin.php') ?>
<?php include('../template/header-admin-menu.php') ?>

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
											<h4 class="card-title">Basic Bar Chart</h4>
										</div>
										<div class="card-body">
											<canvas id="barChart_1"></canvas>
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

		<!-- Chart ChartJS plugin files -->
		<script src="../assets/vendor/chart.js/Chart.bundle.min.js"></script>
		<script src="../assets/js/plugins-init/chartjs-init.js"></script>

		<?php include('../template/footer.php') ?>
		
		