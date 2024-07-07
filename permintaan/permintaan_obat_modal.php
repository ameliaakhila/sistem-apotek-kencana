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
                        <td>Keterangan Apotek</td>
                        <td>
                            <?= $d['keterangan_apotek'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Keterangan Farmasi</td>
                        <td>
                            <?= $d['keterangan_farmasi'] ?>
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


<!-- modal awal konfirmasi  -->

<div class="modal fade bd-example-modal-lg" id="konfirmasi<?= $d['id_permintaan_obat']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfimrasi Obat Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <form action="permintaan_obat_konfirmasi.php" method="post" enctype="multipart/form-data">
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
                        <td>Keterangan Apotek</td>
                        <td>
                            <?= $d['keterangan_apotek'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Update Status Permintaan</td>
                        <td>
                            <select name="status_permintaan_obat" id="" class="form-control">
                                <option value="<?= $d['status_permintaan_obat'] ?>">Pilihan Awal ( <?= $d['status_permintaan_obat'] ?> )</option>
                                <option value="proses">Proses</option>
                                <option value="dikirim">Dikirim</option>
                                <option value="selesai">Selesai</option>
                                <option value="ditolak">Ditolak</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Keterangan Farmasi</td>
                        <td>
                            <input type="hidden" name="id_permintaan_obat" value="<?= $d['id_permintaan_obat'] ?>" class="form-control">
                            <input type="text" name="keterangan_farmasi" value="<?= $d['keterangan_farmasi'] ?>" class="form-control">
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


<!-- modal akhir konfimrasi -->