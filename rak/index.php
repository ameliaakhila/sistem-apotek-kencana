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

                                    <button data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary btn-xs mb-2">Tambah Rak</button>

                                    <?php include('rak_modal_tambah.php') ?>
                                    <table id="example3" class="table table-borderd" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Rak</th>                                                
                                                <th style="text-align:center;">Opsi</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                            include '../koneksi.php';
                                            $no = 1;
                                            $data = mysqli_query($koneksi, "SELECT * from tb_rak");
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d['nama_rak'] ?></td>
                                                <td>
                                                    <center>
                                                    <a href="rak_hapus.php?id_rak=<?= $d['id_rak']; ?>" onclick="return confirm('Anda yakin Hapus data jenis rak <?php echo $d['nama_rak']; ?> ?')" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fas fa-trash-alt"></i></a>
                                                    <button data-bs-toggle="modal" data-bs-target="#edit<?= $d['id_rak']; ?>" id=".$d['id_rak']." class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></button>
                                                    <?php include('rak_modal.php') ?>
                                                    </center>
                                                </td>
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
