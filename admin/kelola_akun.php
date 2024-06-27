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
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Username</th>
                                                <th>Password</th>
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
                                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                                <td><?= $d['username'] ?></td>
                                                <td><?= sha1($d['password']) ?></td>
                                                <td>
													<div class="d-flex">
														<button data-bs-toggle="modal" data-bs-target="#edit<?php echo $d['id_user']; ?>" id=".$d['id_user']." class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></button>
                                                        <a data-bs-toggle="modal" data-bs-target="#edit<?php echo $d['id_user']; ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<button type="button" data-bs-toggle="modal" data-bs-target="masuk" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></button>
                                                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Modal centered</button>
                                                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">Small modal</button>
                                                        <!-- <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#edit<?php echo $d['id_user']; ?>">Modal centered</button> -->
														<a href="kelola_akun_hapus.php?id_user=<?php echo $d['id_user']; ?>" onclick="return confirm('Anda yakin Hapus data user <?php echo $d['username']; ?> ?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
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