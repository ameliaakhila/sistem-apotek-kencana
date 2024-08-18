<!-- modal awal edit -->

<div class="modal fade bd-example-modal-lg" id="edit<?= $d['id_obat_masuk']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Obat Masuk Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <form action="obat_masuk_edit.php" method="post">
                    <tr>
                        <td>Kode Transaksi</td>
                        <td>
                            <input class="form-control" type="text" name="kode_transaksi" value="<?= $d['kode_transaksi'] ?>" required readonly>
                            <input type="hidden" name="id_obat_masuk" value="<?= $d['id_obat_masuk'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Obat Masuk</td>
                        <td>
                            <input type="date" name="tgl_obat_masuk"  class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Obat</td>
                        <td>
                            <select class="default-select wide form-control" name="id_obat" id="" required>
                                <option value="<?= $d['id_obat'] ?>">Pilihan Awal ( <?= $d['nama_obat'] ?> )</option>
                                <?php 
                                    include('../koneksi.php');
                                    $data_jenis = mysqli_query($koneksi, "SELECT * from tb_obat");
                                    while ($d1 = mysqli_fetch_array($data_jenis)) {
                                ?>
                                <option value="<?= $d1['id_obat'] ?>"><?= $d1['nama_obat'] ?></option>
                                <?php } ?>
                            </select>                            
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Obat Masuk</td>
                        <td>
                            <input class="form-control" type="number" name="jumlah_obat" value="<?= $d['jumlah_obat'] ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Kadaluarsa</td>
                        <td>
                            <input type="date" name="tgl_kadaluarsa"   class="form-control" id="" required>
                        </td>
                    </tr>
                     <tr>
                        <td>Nama Rak</td>
                        <td>
                            <select class="form-control" name="nama_rak" id="" required>
                                <option value="<?= $d['nama_rak'] ?>">Pilihan Awal ( <?= $d['nama_rak'] ?> )</option>
                                <?php 
                                    include('../koneksi.php');
                                    $data_jenis = mysqli_query($koneksi, "SELECT * from tb_obat");
                                    while ($d1 = mysqli_fetch_array($data_jenis)) {
                                ?>
                                <option value="<?= $d1['id_obat'] ?>"><?= $d1['nama_obat'] ?></option>
                                <?php } ?>
                            </select>                            
                        </td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>
                            <input class="form-control" type="text" name="keterangan" value="<?= $d['keterangan'] ?>" required>
                        </td>
                    </tr>
                </table>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save changes"></input>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal akhir edit -->

<!-- modal awal Detail -->

<div class="modal fade bd-example-modal-lg" id="detail<?= $d['id_obat_masuk']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Obat Masuk Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>Kode Transaksi</td>
                        <td>
                            <?= $d['kode_transaksi'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Obat Masuk</td>
                        <td>
                            <?= $d['tgl_obat_masuk'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Obat</td>
                        <td>
                             <?= $d['nama_obat'] ?>                           
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Jenis Obat</td>
                        <td>
                             <?= $d['nama_jenis_obat'] ?>                           
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Obat Masuk</td>
                        <td>
                            <?= $d['jumlah_obat'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Kadaluarsa</td>
                        <td>
                            <?= $d['tgl_kadaluarsa'] ?>
                        </td>
                    </tr>
                      <tr>
                        <td>Nama Rak</td>
                        <td>
                            <?= $d['nama_rak'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>
                            <?= $d['keterangan'] ?>
                        </td>
                    </tr>
                </table>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal akhir Detail -->
