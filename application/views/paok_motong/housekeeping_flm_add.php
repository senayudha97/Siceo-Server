<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('housekeeping_flm/add'); ?>" method="POST" enctype="multipart/form-data">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="hidden" name="input[created_date]" value="<?= 'HF' . date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_housekeeping_flm]" value="<?= 'HF' . date('Ydhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>

                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]" placeholder="Klik untuk input tanggal" readonly>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easytimepicker" id="input[waktu]" name="input[waktu]" readonly placeholder="Klik untuk input jam">
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="input[jenis_kegiatan]" class="col-sm-2 col-form-label">Jenis Kegiatan</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="input[jenis_kegiatan]" id="jenis_kegiatan">
                            <option value="Housekeeping">Housekeeping</option>
                            <option value="FLM">FLM</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input[location]" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[location]" name="input[location]" placeholder="Input Daya Semu">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[description]" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[description]" name="input[description]" placeholder="Input Daya Semu">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eviden" class="col-sm-2 col-form-label">Eviden</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="eviden_1" name="eviden_1">
                        <input type="file" class="form-control-file mt-3" id="eviden_2" name="eviden_2">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[checked_by]" class="col-sm-2 col-form-label">Checked by</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[checked_by]" name="input[checked_by]" placeholder="Input Daya Semu">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>