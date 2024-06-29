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

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../assets/vendor/global/global.min.js"></script>
	<script src="../assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="../assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
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
	
	<!-- data table -->
	<script src="../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/plugins-init/datatables.init.js"></script>

	<!-- Modal -->
	<script src="../assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- awal date pikcer -->
	
   	<!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="../assets/vendor/moment/moment.min.js"></script>
    <script src="../assets/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- pickdate -->
    <script src="../assets/vendor/pickadate/picker.js"></script>
    <script src="../assets/vendor/pickadate/picker.time.js"></script>
    <script src="../assets/vendor/pickadate/picker.date.js"></script>

    <!-- Pickdate -->
    <script src="../assets/js/plugins-init/pickadate-init.js"></script>
    
    <script>
        $(document).ready(function(){
            $('#datepicker2').pickadate({
                format: 'dd mmmm yyyy'
            });
        });
    </script>

	<!-- akhir datepicker -->

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