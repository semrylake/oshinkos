<div class="modal fade" id="amorAddModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Pesan Kamar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label class="form-check-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" value="Laki-Laki" type="radio" name="jk" required>
                            <label for="jk" class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="Perempuan" type="radio" name="jk" required>
                            <label for="jk" class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tempat">Tempat Lahir</label>
                        <input type="text" name="tempat" id="tempat" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="text" name="tgllahir" id="tgllahir" placeholder="01/01/2021" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Orang Per Kamar</label>
                        <p id="errorjumlah" style="color: red;"></p>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="nohp">Nomor Telepon / WA</label>
                        <input type="text" name="nohp" id="nohp" class="form-control" autocomplete="off" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-hijau" onclick="cekjumlahorang();" name="kirim">Pesan Sekarang</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>