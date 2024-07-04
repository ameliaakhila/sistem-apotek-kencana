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
                    <form action="kelola_akun_tambah.php" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>Username</td>
                        <td>
                            <input class="form-control" type="text" name="username" placeholder="Inputkan Username" require>
                        </td>
                    </tr>
                    <td>Password</td>
                        <td>
                            <input class="form-control" type="text" name="password" placeholder="Inputkan Password" require>
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <select class="form-control" name="status" id="" require>
                                <option value="">Pilihan</option>
                                <option value="admin">Admin</option>
                                <option value="apotik">Apotik</option>
                                <option value="gudang">gudang</option>
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

<!-- modal akhir tambah -->


