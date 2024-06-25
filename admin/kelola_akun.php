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
									<h4 class="fs-50 font-w700">Kelola Akun</h4>
								</div>
							</div>
                            <?php include('../alert.php'); ?>
                            <button style="max-width: 200px;" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i data-feather="plus"></i>Tambah Pengguna</button>
                            <table id="tabel_js" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Akun</th>
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
                                
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $d['username'] ?></td>
                                        <td><?= $d['status'] ?></td>
                                        <td>

                                            <a class="fas fa-trash" href="kelola_akun_hapus.php?id_user=<?php echo $d['id_user']; ?>" onclick="return confirm('Anda yakin Hapus data user <?php echo $d['username']; ?> ?')"></a>
                                            <button class="fas fa-edit" data-bs-toggle="modal" data-bs-target="#edit<?php echo $d['id_user'] ?>" id=".$d['id_user']."></button>
                                            <button class="btn btn-warning btn-sm"  data-bs-toggle="modal" data-bs-target="#password<?php echo $d['id_user'] ?>" id=".$d['id_user']."></button>
                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?php echo $d['id_user'] ?>" id=".$d['id_user']."></button>
                                            <!-- <?php include('kelola_akun_modal.php') ?> -->
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                            </table>
						</div>
					</div>
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		<?php include('../template/footer.php') ?>