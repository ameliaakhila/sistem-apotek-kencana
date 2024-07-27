<!-- modal awal tambah -->

<div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Jenis Obat Tambah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <form action="jenis_obat_tambah.php" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>Nama Jenis Obat</td>
                        <td>
                            <input class="form-control" type="text" name="nama_jenis_obat" placeholder="Inputkan Jenis Obat" require>
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


