<!-- modal awal edit -->

<div class="modal fade bd-example-modal-lg" id="edit<?= $d['id_rak']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rak Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <form action="rak_edit.php" method="post">
                     <tr>
                        <td>Nama Rak</td>
                        <td>
                            <input class="form-control" type="hidden" name="id_rak" value="<?= $d['id_rak'] ?>" required>                      
                            <input class="form-control" type="text" name="nama_rak" value="<?= $d['nama_rak'] ?>" required>                      
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

