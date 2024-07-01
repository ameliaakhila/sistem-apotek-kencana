<!-- modal awal Detail -->

<div class="modal fade bd-example-modal-lg" id="detail<?= $d['id_permintaan_obat']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Obat Masuk Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>Nama Obat Permintaan</td>
                        <td>
                            <?= $d['nama_obat'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Permintaan Obat</td>
                        <td>
                             <?= $d['jumlah_permintaan_obat'] ?>                           
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Permintaan Obat</td>
                        <td>
                            <?= $d['tgl_permintaan_obat'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Status Permintaan Obat</td>
                        <td>
                           <?php if($d['status_permintaan_obat'] == "proses"){ ?>
                            <div class="bootstrap-badge">
                                    <span class="badge badge-sm badge-warning">Proses</span>
                                </div>
                            <?php }elseif($d['status_permintaan_obat'] == "dikirim"){ ?>
                                <div class="bootstrap-badge">
                                    <span class="badge badge-sm badge-info">Dikirim</span>
                                </div>
                            <?php }elseif($d['status_permintaan_obat'] == "selesai"){ ?>
                                <div class="bootstrap-badge">
                                    <span class="badge badge-sm badge-success">Selesai</span>
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
