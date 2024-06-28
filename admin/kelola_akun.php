<?php include('../template/header-admin.php') ?>
<?php include('../template/header-admin-menu.php') ?>

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
                                <h4 class="card-title">Kelola Akun</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include('../alert.php') ?>

                                    <button data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary btn-xs mb-2">Tambah Akun</button>
                                    <?php include('kelola_akun_modal_tambah.php') ?>
                                    <table id="example3" class="table table-borderd" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Status</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                            include '../koneksi.php';
                                            $no = 1;
                                            $data = mysqli_query($koneksi, "SELECT * from tb_user");
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d['username'] ?></td>
                                                <td><?= sha1($d['password']) ?></td>
                                                <td>
													<a href="kelola_akun_hapus.php?id_user=<?php echo $d['id_user']; ?>" onclick="return confirm('Anda yakin Hapus data user <?php echo $d['username']; ?> ?')" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fas fa-trash-alt"></i></a>
                                                    <button data-bs-toggle="modal" data-bs-target="#edit<?php echo $d['id_user']; ?>" id=".$d['id_user']." class="btn btn-info shadow btn-xs sharp me-1"><i class="fas fa-key"></i></button>
                                                    <button data-bs-toggle="modal" data-bs-target="#edit<?= $d['id_user']; ?>" id=".$d['id_user']." class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></button>
                                                                                                    
                                                    <?php include('kelola_akun_modal.php') ?>
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