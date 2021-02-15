<!---################################################################################################################## -->
<div class="modal fade" id="cabangAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="branchModalLabel">Form Tambah Kamar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nomor">Nomor Kamar</label>
                        <input type="number" name="nomor" id="nomor" class="form-control" autocomplete="off" maxlength="3" required>
                    </div>
                    <div class="form-group">
                        <label for="luas">Luas Kamar m2</label>
                        <input type="number" name="luas" id="luas" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga per bulan</label>
                        <input type="number" name="harga" id="harga" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="img">Foto</label><br>
                        <input type="file" name="img" id="img" required="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="saveCBG">
                        <i class="fas fa-save" style="margin-right: 10px;"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!---##################################################################################################################---->