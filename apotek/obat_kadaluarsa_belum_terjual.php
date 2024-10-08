<?php include('../template/header-apotek.php') ?>
<?php include('../template/header-apotek-menu.php') ?>

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
                                <h4 class="card-title">Obat Kadaluarsa Belum Terjual</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include('../alert.php') ?>
                                    <?php include('obat_kadaluarsa_menu.php') ?>

                                    <table id="example" class="display" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Obat</th>
                                                <th style="text-align:center;">Jumlah</th>
                                                <th style="text-align:center;">Kadaluarsa</th>
                                                <th style="text-align:center;">Status</th>
                                                <th style="text-align:center;">Kondisi</th>
                                                <!-- <th style="text-align:center;">Opsi</th> -->
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php 
                                            include '../koneksi.php';
                                            $no = 1;
                                            $data = mysqli_query($koneksi, "SELECT * from tb_obat_masuk, tb_obat, tb_jenis_obat 
                                            where tb_obat_masuk.id_obat=tb_obat.id_obat AND tb_obat.id_jenis_obat=tb_jenis_obat.id_jenis_obat
                                            AND tb_obat_masuk.status_terjual='Belum Terjual' ");
                                            
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d['nama_obat'] ?></td>                                              
                                                <td style="text-align:center;"><?= $d['jumlah_obat'] ?></td>
                                                <td style="text-align:center;"><?= date('d M Y', strtotime($d['tgl_kadaluarsa'])) ?></td>
                                                <td style="text-align:center;">
                                                    <?php include('obat_kadaluarsa_status.php'); ?>
                                                </td>
                                                <td style="text-align:center;">
                                                    <?php if($d['status_terjual'] == "Belum Terjual"){ ?>
                                                        <div class="bootstrap-badge">
                                                            <span class="badge badge-sm badge-light">Belum Terjual</span>
                                                        </div>
                                                    <?php }elseif($d['status_terjual'] == "Terjual"){ ?>
                                                        <div class="bootstrap-badge">
                                                            <span class="badge badge-sm badge-primary">Terjual</span>
                                                        </div>                                                    
                                                    <?php }else{ ?>
                                                        <div class="bootstrap-badge">
                                                            <span class="badge badge-sm badge-light">Belum Terjual</span>
                                                        </div>
                                                    <?php } ?>
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
