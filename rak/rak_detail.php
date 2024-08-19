<?php include('../template/header-gudang.php') ?>
<?php include('../template/header-gudang-menu.php') ?>

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">				

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Rak</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include('../alert.php') ?>


                                   <?php
                                    // Check if id_rak is set
                                    if (isset($_GET['id_rak'])) {
                                        // Sanitize the input by removing anything that is not a number
                                        $id_rak = filter_input(INPUT_GET, 'id_rak', FILTER_SANITIZE_NUMBER_INT);

                                        // Validate the input to ensure it's an integer
                                        if ($id_rak !== false && $id_rak !== null) {
                                            // $id_rak is now safe to use in your code
                                            // echo "Valid id_rak: " . $id_rak;
                                        } else {
                                            // Invalid input
                                            // echo "Invalid id_rak.";
                                        }
                                    } else {
                                        // id_rak is not set
                                        // echo "id_rak is not provided.";
                                    }
                                    ?>


                                    <table id="example3" class="table table-borderd" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tgl Obat Masuk</th> 
                                                <th>Nama Rak</th> 
                                                <th>Nama Obat</th>  
                                                <th style="text-align:center;">Jumlah Obat</th>                                               
                                                <!-- <th style="text-align:center;">Opsi</th> -->
                                            </tr>
                                        </thead>
                                        <?php 
                                            include '../koneksi.php';
                                            $no = 1;
                                            $data = mysqli_query($koneksi, "
                                            SELECT * 
                                            FROM tb_obat 
                                            JOIN tb_obat_masuk ON tb_obat.id_obat = tb_obat_masuk.id_obat 
                                            JOIN tb_rak ON tb_obat_masuk.id_rak = tb_rak.id_rak 
                                            WHERE tb_rak.id_rak = $id_rak");
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d['tgl_obat_masuk'] ?></td>
                                                <td><?= $d['nama_rak'] ?></td>
                                                <td><?= $d['nama_obat'] ?></td>
                                                <td style="text-align:center;"><?= $d['jumlah_obat'] ?></td>
                                                
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		<?php include('../template/footer.php') ?>
