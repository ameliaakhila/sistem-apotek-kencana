
<!-- modal awal edit -->

<div class="modal fade bd-example-modal-lg" id="edit<?= $d['id_jenis_obat']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Jenis Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <form action="jenis_obat_edit.php" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>Nama Jenis Obat</td>
                        <td>
                            <input class="form-control" type="text" name="nama_jenis_obat" value="<?= $d['nama_jenis_obat'] ?>" require>
                            <input type="hidden" name="id_jenis_obat" value="<?= $d['id_jenis_obat'] ?>">
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

<!-- modal awal reset -->

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

<!-- modal akhir reset -->
