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
                    <form action="obat_masuk_edit.php" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>Kode Transaksi</td>
                        <td>
                            <input class="form-control" type="text" name="kode_transaksi" value="<?= $d['kode_transaksi'] ?>" require readonly>
                            <input type="hidden" name="id_obat_masuk" value="<?= $d['id_obat_masuk'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Obat Masuk</td>
                        <td>
                            <input name="tgl_obat_masuk"  value="<?= $d['tgl_obat_masuk'] ?>" class="datepicker-default form-control" require>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Obat</td>
                        <td>
                            <select class="default-select wide form-control" name="id_obat" id="" require>
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
                            <input class="form-control" type="number" name="jumlah_obat" value="<?= $d['jumlah_obat'] ?>" require>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Kadaluarsa</td>
                        <td>
                            <!-- <input type="text" class="form-control" name="tgl_kadaluarsa" id="mdate"> -->
                            <input name="tgl_kadaluarsa"  value="<?= $d['tgl_kadaluarsa'] ?>" class="datepicker-default form-control" id="datepicker" require>
                        </td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>
                            <input class="form-control" type="text" name="keterangan" value="<?= $d['keterangan'] ?>" require>
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

<div class="modal fade bd-example-modal-lg" id="reset<?= $d['id_user']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kelola Reset Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <form action="kelola_akun_reset.php" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>Username</td>
                        <td>
                            <input class="form-control bg-primary text-white" type="text" name="username" value="<?= $d['username'] ?>" required readonly>
                            <input type="hidden" name="id_user" value="<?= $d['id_user'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                        <input class="form-control bg-primary text-white" type="text" name="status" value="<?= $d['status'] ?>" required readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                        <input class="form-control" type="text" name="password" value="" required>
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

<!-- modal akhir Detail -->
