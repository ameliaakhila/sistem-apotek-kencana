<?php include('../template/header-admin.php') ?>
<?php include('../template/header-admin-menu.php') ?>
<?php
    ob_start();
    session_start();
    $username = $_SESSION['username'];
    include '../koneksi.php';
?>

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
                                <h4 class="card-title">Reset Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include('../alert.php') ?>
                                    <form action="kelola_akun_reset.php" method="post" enctype="multipart/form-data">
                                    <?php 
                                            $data = mysqli_query($koneksi, "SELECT * from tb_user WHERE username = '$username'");
                                            while ($d = mysqli_fetch_array($data)) {
                                                // var_dump($data);
                                            ?>
                                    <table class="table">
                                        <tr>
                                            <td>Password Lama</td>
                                            <td>
                                            <input class="form-control" type="text" name="pw_lama" value="<?= $d['password'] ?>" require>
                                                <!-- <input class="form-control" type="text" name="pw-lama" placeholder="Inputkan Password Lama" require> -->
                                            </td>
                                        </tr>
                                        <td>Password Baru</td>
                                            <td>
                                                <input class="form-control" type="text" name="pw_baru" placeholder="Inputkan Password Baru" require>
                                            </td>
                                        </tr>
                                        <td>Konfirmasi Password Baru</td>
                                            <td>
                                                <input class="form-control" type="text" name="pw_retype" placeholder="Inputkan Sekali Lagi" require>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" name="simpan" class="btn btn-primary" value="Save changes"></input>
                                    <?php } ?>
                                </form>
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