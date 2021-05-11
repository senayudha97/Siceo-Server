<div class="container-fluid">
    <h2 class="mb-5">Tambah Data <?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_paok_motong_laporan_perjaman_mesin_generator/add'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="text" name="input[created_date]" value="<?= date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_perjaman_mesin_generator]" value="<?= 'PMG' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="form-group row">
                    <label for="tanggal_input" class="col-sm-2 col-form-label">Tanggal Input</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control easydatepicker" readonly placeholder="Klik unutk input tanggal" id="tanggal_input" name="input[tanggal_input]">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="input_volt" placeholder="Masukan Nomor Mesin" name="input[mesin]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                        <?php form_waktu() ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_volt" class="col-sm-2 col-form-label">Volt</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_volt" name="input[input_volt]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_hz" class="col-sm-2 col-form-label">HZ</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_hz" name="input[input_hz]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_cos" class="col-sm-2 col-form-label">Cos</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_cos" name="input[input_cos]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_mvar" class="col-sm-2 col-form-label">MVAR</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_mvar" name="input[input_mvar]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_bebanmw" class="col-sm-2 col-form-label">BEBAN MW</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_bebanmw" name="input[input_bebanmw]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_arus" class="col-sm-2 col-form-label">ARUS ( A )</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_arus_r" name="input[input_arus_r]" placeholder="R">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_arus_s" name="input[input_arus_s]" placeholder="S">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_arus_t" name="input[input_arus_t]" placeholder="T">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_exiter" class="col-sm-2 col-form-label">EXITER</label>
                    <div class="col-sm-5">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_exiter_a" name="input[input_exiter_a]" placeholder="A">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_exiter_v" name="input[input_exiter_v]" placeholder="V">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_winding" class="col-sm-2 col-form-label">WINDING (c)</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmgwd1" id="input_winding1" name="input[input_winding1]" placeholder="1">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmgwd2" id="input_winding2" name="input[input_winding2]" placeholder="2">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmgwd3" id="input_winding3" name="input[input_winding3]" placeholder="3">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmgwd4" id="input_winding4" name="input[input_winding4]" placeholder="4">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmgwd5" id="input_winding5" name="input[input_winding5]" placeholder="5">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmgwd6" id="input_winding6" name="input[input_winding6]" placeholder="6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_bearing" class="col-sm-2 col-form-label">BEARING</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_bearing" name="input[input_bearing]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_kwh_produksi" class="col-sm-2 col-form-label">KWH PRODUKSI</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_kwh_produksi" name="input[input_kwh_produksi]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_kwh_alat_bantu" class="col-sm-2 col-form-label">KWH ALAT BANTU</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input_kwh_alat_bantu" name="input[input_kwh_alat_bantu]">
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary ">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>