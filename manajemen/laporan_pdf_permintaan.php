<?php include('../template/header-manajemen.php') ?>
<?php include('../template/header-manajemen-menu.php') ?>

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
                                <h4 class="card-title">Cetak Permintaan Obat</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include('../alert.php') ?>
                                    <a href="cetak-permintaan/laporan_pdf_cetak_full.php" class="btn btn-primary btn-sm"><i data-feather="plus"></i> Download Full Rekap</a><br><br>
                                    <tr>
                                        <form action="cetak-permintaan/laporan_pdf_cetak_bulanan.php" method="post">
                                        <td>
                                            Bulan
                                            <select name="bulan" id="">
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                            <input type="submit" class="btn btn-primary btn-sm" value="Download" >
                                            </form><br>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <form action="cetak-permintaan/laporan_pdf_cetak_tahunan.php" method="post">
                                        <td>
                                            Tahun
                                            <select name="tahun" id="">
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                            </select>
                                            <input type="submit" class="btn btn-primary btn-sm" value="Download" >
                                            </form><br>
                                        </td>
                                    </tr>

                                    <table id="example3" class="display" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>                                                                                              
                                                <th style="text-align:center;">Nama Obat</th>                                            
                                                <th style="text-align:center;">Jumlah Permintaan</th>
                                                <th style="text-align:center;">Tanggal Permintaan</th>                                             
                                                <th style="text-align:center;">Keterangan Apotik</th>
                                                <th style="text-align:center;">Keterangan Farmasi</th>
                                                <th style="text-align:center;">Status</th>
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
                                                <td><?= $d['username'] ?></td>
                                                <td><?= $d['nama_obat'] ?></td>                                              
                                                <td style="text-align:center;"><?= $d['jumlah_permintaan_obat'] ?></td>
                                                <td style="text-align:center;"><?= date('d M Y', strtotime($d['tgl_permintaan_obat'])) ?></td>                                                
                                                <td style="text-align:center;"><?= $d['keterangan_apotek'] ?></td>
                                                <td style="text-align:center;"><?= $d['keterangan_farmasi'] ?></td>
                                                <td style="text-align:center;">
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
