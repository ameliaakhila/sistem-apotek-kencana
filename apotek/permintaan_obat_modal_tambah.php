<!-- modal awal tambah -->
<div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Permintaan Obat Tambah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="permintaan_obat_tambah.php" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td>Nama Obat</td>
                            <td>
                                <select class="default-select wide form-control" name="id_obat" id="">
                                    <option value="">Pilihan</option>
                                    <?php 
                                        include('../koneksi.php');
                                        $data_obat = mysqli_query($koneksi, "SELECT * FROM tb_obat ORDER BY nama_obat ASC");
                                        while ($d_obat = mysqli_fetch_array($data_obat)) {
                                    ?>
                                    <option value="<?= $d_obat['id_obat'] ?>"><?= $d_obat['nama_obat'] ?> [ <?= $d_obat['stok_obat'] ?> ]</option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Permintaan Obat</td>
                            <td>
                               <input type="number" name="jumlah_permintaan_obat" class="form-control" placeholder="Inputkan Jumlah Permintaan">                      
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>
                               <input type="text" name="keterangan_apotek" class="form-control" placeholder="Inputkan Keterangan">                      
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
