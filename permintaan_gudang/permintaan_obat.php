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
                                <h4 class="card-title">Data Permintaan Obat</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include('../alert.php') ?>

                                    <table id="example3" class="display" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Obat</th>  
                                                <th style="text-align: center;">Stok</th>                                              
                                                <th style="text-align: center;">Jumlah Permintaan</th>                                              
                                                <th style="text-align: center;">Tanggal Permintaan</th>
                                                <th>Status</th>
                                                <th style="text-align: center;">Opsi</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php 
                                            include '../koneksi.php';
                                            $no = 1;
                                            $data = mysqli_query($koneksi, "SELECT * from tb_obat,tb_jenis_obat,tb_permintaan_obat,tb_user where tb_user.id_user=tb_permintaan_obat.id_user AND tb_permintaan_obat.id_obat=tb_obat.id_obat AND tb_obat.id_jenis_obat=tb_jenis_obat.id_jenis_obat");
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d['nama_obat'] ?></td>                                              
                                                <td style="text-align: center;"><?= $d['stok_obat'] ?></td>
                                                <td style="text-align: center;"><?= $d['jumlah_permintaan_obat'] ?></td>
                                                <td style="text-align: center;"><?= date('d M Y', strtotime($d['tgl_permintaan_obat'])); ?></td>
                                                <td>
                                                    <?php if($d['status_permintaan_obat'] == "proses"){ ?>
                                                        <div class="bootstrap-badge">
                                                            <span class="badge badge-sm badge-warning">Proses</span>
                                                        </div>
                                                    <?php }elseif($d['status_permintaan_obat'] == "dikirim"){ ?>
                                                        <div class="bootstrap-badge">
                                                            <span class="badge badge-sm badge-info">Dikirim</span>
                                                        </div>
                                                    <?php }elseif($d['status_permintaan_obat'] == "diterima apotek"){ ?>
                                                        <div class="bootstrap-badge">
                                                            <span class="badge badge-sm badge-success">Diterima Apotek</span>
                                                        </div>
                                                     <?php }elseif($d['status_permintaan_obat'] == "ditolak"){ ?>
                                                        <div class="bootstrap-badge">
                                                            <span class="badge badge-sm badge-danger">Ditolak</span>
                                                        </div>
                                                    <?php }else{ ?>
                                                        <div class="bootstrap-badge">
                                                            <span class="badge badge-sm badge-secondary">Error</span>
                                                        </div>
                                                    <?php } ?>
                                            </td>
                                                <td>
                                                    <center>
                                                    <a href="permintaan_obat_hapus.php?id_permintaan_obat=<?= $d['id_permintaan_obat']; ?>" onclick="return confirm('Anda yakin Hapus data permintaan obat <?php echo $d['nama_obat']; ?> ?')" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fas fa-trash-alt"></i></a>
                                                    <button data-bs-toggle="modal" data-bs-target="#detail<?= $d['id_permintaan_obat']; ?>" id=".$d['id_permintaan_obat']." class="btn btn-primary shadow btn-xs sharp me-1" title="Detail"><i class="fas fa-eye"></i></button>
                                                    <button data-bs-toggle="modal" data-bs-target="#konfirmasi<?= $d['id_permintaan_obat']; ?>" id=".$d['id_permintaan_obat']." class="btn btn-info shadow btn-xs sharp me-1" title="Konfirmasi"><i class="fas fa-location-arrow"></i></button>
                                                    <?php include('permintaan_obat_modal.php') ?>
                                                    </center>
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
