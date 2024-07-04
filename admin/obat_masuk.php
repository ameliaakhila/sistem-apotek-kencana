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
                                <h4 class="card-title">Obat Masuk</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include('../alert.php') ?>

                                    <button data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary btn-xs mb-2">Tambah Obat Masuk</button>
                                    <?php include('obat_masuk_modal_tambah.php') ?>
                                    <table id="example" class="display" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Transaksi</th>
                                                <th>Tanggal</th>
                                                <th>Nama Obat</th>
                                                <th class="text-center">Jumlah Obat</th>
                                                <th class="text-center">Opsi</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php 
                                            include '../koneksi.php';
                                            $no = 1;
                                            $data = mysqli_query($koneksi, "SELECT * from tb_obat_masuk, tb_obat, tb_jenis_obat 
                                            where tb_obat_masuk.id_obat=tb_obat.id_obat AND tb_obat.id_jenis_obat=tb_jenis_obat.id_jenis_obat");
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d['kode_transaksi'] ?></td>
                                                <td><?= date('d M Y', strtotime($d['tgl_obat_masuk'])); ?></td>                                              
                                                <td><?= $d['nama_obat'] ?></td>                                              
                                                <td class="text-center"><?= $d['jumlah_obat'] ?></td>
                                                <td class="text-center">
													<a href="obat_masuk_hapus.php?id_obat_masuk=<?= $d['id_obat_masuk']; ?>" onclick="return confirm('Anda yakin Hapus data jenis obat <?php echo $d['nama_obat']; ?> ?')" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fas fa-trash-alt"></i></a>
                                                    <button data-bs-toggle="modal" data-bs-target="#edit<?= $d['id_obat_masuk']; ?>" id=".$d['id_obat_masuk']." class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></button>
                                                    <button data-bs-toggle="modal" data-bs-target="#detail<?= $d['id_obat_masuk']; ?>" id=".$d['id_obat_masuk']." class="btn btn-info shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></button>
                                                    <?php include('obat_masuk_modal.php') ?>
                                                </td>

                                            </tr>
                                             <?php } ?>
                                        </tbody>
                                       
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
