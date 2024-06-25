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
								<div>
									<h4 class="fs-30 font-w700">Apotik Kencana💊</h4>
                                    <p style="font-size: 14px;">Selamat datang di Aplikasi Gudang Apotik! Silakan login untuk mengakses sistem manajemen gudang kami yang efisien dan aman. Dengan login, Anda dapat melakukan pemantauan stok obat, 
                                        pengelolaan pesanan, dan pelacakan distribusi secara real-time.</p>
								</div>
							</div>	
							<div class="card-img d-flex justify-content-center"><img src="../assets/images/gambar.svg" class="img-fluid" alt="Description of image" style="max-width: 30rem"/></div>							
						</div>
					</div>
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		


		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Apotikkencana &amp; Developed by <a href="#" target="_blank">Apotikkencana</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../assets/vendor/global/global.min.js"></script>
	<script src="../assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="../assets/vendor/apexchart/apexchart.js"></script>
	
	<script src="../assets/vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="../assets/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="../assets/js/dashboard/dashboard-1.js"></script>
	
	<script src="../assets/vendor/owl-carousel/owl.carousel.js"></script>
	
    <script src="../assets/js/custom.min.js"></script>
	<script src="../assets/js/dlabnav-init.js"></script>
	
   
	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:10,
				nav:false,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: false,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:2
					},	
					800:{
						items:2
					},			
					991:{
						items:2
					},
					1200:{
						items:3
					},
					1600:{
						items:4
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		
	</script>

</body>
</html>