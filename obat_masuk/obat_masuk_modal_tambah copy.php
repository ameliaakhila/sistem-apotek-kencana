<!-- modal awal tambah -->

<div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kelola Akun Tambah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <form action="obat_masuk_tambah.php" method="post" enctype="multipart/form-data">
                    
                    <tr>
                        <td>Tanggal Obat Masuk</td>
                        <td>
                            <input name="tgl_obat_masuk" class="datepicker-default form-control" placeholder="Inputkan Tanggal Obat Masuk">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Obat</td>
                        <td>
                            <select class="default-select wide form-control" name="id_obat" id="" require>
                                <option value="">Pilihan</option>
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
                            <input class="form-control" type="number" name="jumlah_obat" value="" placeholder="Inputkan Jumlah Obat" require>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Kadaluarsa</td>
                        <td>
                            <input name="tgl_kadaluarsa"  value="" class="datepicker-default form-control" id="datepicker" placeholder="Inputkan Tanggal Kadaluarsa Obat">
                        </td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>
                            <input class="form-control" type="text" name="keterangan" value="" placeholder="Inputkan Keterangan Obat" require>
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

<!-- modal akhir tambah -->


