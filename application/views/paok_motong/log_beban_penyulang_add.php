<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>

    <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('log_paok_motong_beban_penyulang/add'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="text" value="<?= $user['id']; ?>" name="data[insert_by]">
                    <input type="text" name="input[created_date]" value="<?= date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_beban_penyulang]" value="<?= 'PBP' . date('dhs'); ?>">
                </div>
                <div class="form-group row">
                    <label for="tanggal_input" class="col-sm-2 col-form-label ">Tanggal Input</label>
                    <div class="col-sm-10">
                        <input type="text" required readonly class="form-control easydatepicker " id="tanggal_input" placeholder="Klik untuk input tanggal" name="input[tanggal_input]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="waktu" class="col-sm-2 col-form-label ">Beban Penyulang</label>
                    <div class="col-sm-10">
                        <?php form_waktu() ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sikur" class="col-sm-2 col-form-label">Sikur</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="sikur" name="input[sikur]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="masbagik" class="col-sm-2 col-form-label">Masbagik</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="masbagik" name="input[masbagik]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sakra" class="col-sm-2 col-form-label">Sakra</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="sakra" name="input[sakra]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keruak" class="col-sm-2 col-form-label">Keruak</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="keruak" name="input[keruak]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pancor" class="col-sm-2 col-form-label">Pancor</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="pancor" name="input[pancor]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rempung" class="col-sm-2 col-form-label">Rempung</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="rempung" name="input[rempung]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kopel_pmt_ekspor" class="col-sm-2 col-form-label">Kopel Express GI PMT Ekspor</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="kopel_pmt_ekspor" name="input[kopel_pmt_ekspor]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kopel_pmt_impor" class="col-sm-2 col-form-label">Kopel Express GI PMT Impor</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="kopel_pmt_impor" name="input[kopel_pmt_impor]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kopel_pry_ekspor" class="col-sm-2 col-form-label">Kopel Express GI PRY Ekspor</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="kopel_pry_ekspor" name="input[kopel_pry_ekspor]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kopel_pry_impor" class="col-sm-2 col-form-label">Kopel Express GI PRY Imporr</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="kopel_pry_impor" name="input[kopel_pry_impor]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)"  class="form-control" id="keterangan" name="input[keterangan]">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ">Tambah</button>
                </div>
            </form>
        </div>
    </di>
</div>
</div>