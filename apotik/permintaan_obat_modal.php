<!-- modal awal Detail -->

<div class="modal fade bd-example-modal-lg" id="detail<?= $d['id_permintaan_obat']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
