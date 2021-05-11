<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <h2><?= $title; ?></h2>
            <p>Kami yang bertanda tangan di bawah ini</p>
            <form action="<?= base_url('Log_paok_motong_formulir_tukar_piket/add'); ?>" method="POST">

                <div class="form-group row">

                    <input type="text" value="<?= $user['id']; ?>" name="input[insert_by]">
                    <div id="hidden_field">
                        <input type="text" name="input[created_date]" value="<?= date('Y-m-d'); ?>">
                        <input type="hidden" name="input[pk_form_tukar_piket]" value="<?= 'FTP' . date('dhs'); ?>">
                    </div>
                    <label for="nama_pemohon" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="" id="nama_pemohon" name="input[nama_pemohon]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="shift_pemohon" class="col-sm-2 col-form-label">Shift</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="" id="shift_pemohon" name="input[shift_pemohon]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan_pemohon" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly value="Operator" id="jabatan_pemohon" name="input[jabatan_pemohon]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal_pemohon" class="col-sm-8 col-form-label">Bersama ini memohon tukar off/ tukar shift pada hari & tanggal :</label>
                    <div class="col-sm-4">
                        <input type="text" readonly class="form-control easydatepicker" id="tanggal_pemohon" name="input[tanggal_pemohon]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-12 col-form-label">dengan rekan saya :</label>
                </div>
                <div class="form-group row">
                    <label for="nama_pengganti" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="" id="nama_pengganti" name="input[nama_pengganti]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="shift_pengganti" class="col-sm-2 col-form-label">Shift</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="" id="shift_pengganti" name="input[shift_pengganti]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan_pengganti" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly value="Operator" id="jabatan_pengganti" name="input[jabatan_pengganti]">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alasan_pemohon" class="col-sm-12 col-form-label">Adapun alasan saya tukar shift / tukar off adalah :  :</label>
                    <textarea class="form-control" value="" id="alasan_pemohon" name="input[alasan_pemohon]"></textarea>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-12 col-form-label">Demikian Tukar Dinas ini dibuat untuk dapat dilaksanakan dengan penuh tanggung jawab.</label>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 ml-auto col-form-label">Mengetahui, Manager ULPLTD Paokmotong</label>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 ml-auto col-form-label">I Kadek Sudarmanto</label>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ">Proses</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>