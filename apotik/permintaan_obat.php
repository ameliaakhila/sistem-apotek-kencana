<?php include('../template/header-apotik.php') ?>
<?php include('../template/header-apotik-menu.php') ?>

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
                                <h4 class="card-title">Data Permintaan Obat</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include('../alert.php') ?>

                                    <button data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary btn-xs mb-2">Tambah Obat</button>
                                    <?php include('permintaan_obat_modal_tambah.php') ?>
                                    <table id="example3" class="table table-borderd" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Permintaan Obat</th> 
                                                <th>Nama Obat</th>                                                                                              
                                                <th>Jumlah Permintaan</th>                                               
                                                <th>Tanggal Permintaan</th>
                                                <th>Status</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                            include '../koneksi.php';
                                            $no = 1;
                                            $data = mysqli_query($koneksi, "SELECT * from tb_obat,tb_jenis_obat where tb_obat.id_jenis_obat=tb_jenis_obat.id_jenis_obat");
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d['nama_obat'] ?></td>
                                                <td><?= $d['nama_jenis_obat'] ?></td>                                              
                                                <td><?= $d['satuan_obat'] ?></td>
                                                <td><?= $d['stok_obat'] ?></td>
                                                <td>
													<a href="data_obat_hapus.php?id_obat=<?= $d['id_obat']; ?>" onclick="return confirm('Anda yakin Hapus data jenis obat <?php echo $d['nama_obat']; ?> ?')" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fas fa-trash-alt"></i></a>
                                                    <button data-bs-toggle="modal" data-bs-target="#edit<?= $d['id_obat']; ?>" id=".$d['id_obat']." class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></button>
                                                    <?php include('data_obat_modal.php') ?>
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
