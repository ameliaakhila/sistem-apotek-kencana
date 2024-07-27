
<!-- modal awal edit -->

<div class="modal fade bd-example-modal-lg" id="edit<?= $d['id_obat']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <form action="data_obat_edit.php" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>Nama Obat</td>
                        <td>
                            <input class="form-control" type="text" name="nama_obat" value="<?= $d['nama_obat'] ?>" require>
                            <input class="form-control" type="hidden" name="id_obat" value="<?= $d['id_obat'] ?>" require>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Obat</td>
                        <td>
                            <select class="default-select wide form-control" name="id_jenis_obat" id="">
                                <option value="<?= $d['id_jenis_obat'] ?>">Pilihan Awal ( <?= $d['nama_jenis_obat'] ?> )</option>
                                <?php 
                                    include('../koneksi.php');
                                    $data_jenis = mysqli_query($koneksi, "SELECT * from tb_jenis_obat");
                                    while ($d1 = mysqli_fetch_array($data_jenis)) {
                                ?>
                                <option value="<?= $d1['id_jenis_obat'] ?>"><?= $d1['nama_jenis_obat'] ?></option>
                                <?php } ?>
                            </select>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Satuan Obat</td>
                        <td>
                            <select class="default-select wide form-control" name="satuan_obat" id="">                
                                <option value="<?= $d['satuan_obat'] ?> ">Pilihan Awal (<?= $d['satuan_obat'] ?> )</option>
                                <option value="Botol">botol</option>
                                <option value="Box">Box</option>
                                <option value="Kotak">Kotak</option>
                                <option value="Strip">Strip</option>
                                <option value="Tube">Tube</option>

                            </select>                            
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
