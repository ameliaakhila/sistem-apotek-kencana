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
                                <h4 class="card-title">Laporan Obat Masuk</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include('../alert.php') ?>
                                    <a href="cetak/laporan_pdf_full.php" class="btn btn-primary btn-sm"><i data-feather="plus"></i> Download Full Rekap</a><br><br>
                                    <tr>
                                        <form action="cetak/laporan_pdf_bulanan.php" method="post">
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
                                        <form action="cetak/laporan_pdf_tahunan.php" method="post">
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
                                    <table id="example" class="display" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Transaksi</th>
                                                <th>Tanggal</th>
                                                <th>Nama Obat</th>
                                                <th>Jumlah Obat</th>
                                                <th>Tanggal Kadaluarsa</th>
                                                <th>Keterangan</th>
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
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $d['kode_transaksi'] ?></td>
                                                <td><?php echo date('d M Y', strtotime($d['tgl_obat_masuk'])); ?></td>         
                                                <td><?php echo $d['nama_obat'] ?></td>          
                                                <td align="center"><?php echo $d['jumlah_obat'] ?></td>
                                                <td align="center"><?php echo date('d M Y', strtotime($d['tgl_kadaluarsa'])) ?></td>
                                                <td><?php echo $d['keterangan'] ?></td>
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
