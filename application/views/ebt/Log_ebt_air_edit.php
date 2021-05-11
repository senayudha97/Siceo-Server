<div class="container-fluid">
    <h2 class="mb-5">Tambah Data <?= $title; ?></h2>

    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('log_ebt_air/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="pk[pk_log_tengah_jaman]" value="<?= $edit['pk_log_tengah_jaman'] ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[update_by]">
                </div>
                <div class="form-group row">
                    <label for="tanggal_input" class="col-sm-2 col-form-label">Tanggal Input</label>
                    <div class="col-sm-10">
                        <input type="text" readonly placeholder="Klik untuk input tanggal" class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]" value="<?= content_date($edit['tanggal_input']) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control easytimepicker" placeholder="Klik untuk input waktu" id="waktu" name="input[waktu]" value="<?= $edit['waktu'] ?>">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="tekanan_penstok" class="col-sm-2 col-form-label">Tekanan Penstok</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tekanan_penstok" name="input[tekanan_penstok]" value="<?= $edit['tekanan_penstok'] ?>">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="gen_speed" class="col-sm-2 col-form-label">Gen Speed</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gen_speed" name="input[gen_speed]" value="<?= $edit['gen_speed'] ?>">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Voltage Generator</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="voltage_generator_rs" name="input[voltage_generator_rs]" value="<?= $edit['voltage_generator_rs'] ?>" placeholder="RS">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="voltage_generator_st" name="input[voltage_generator_st]" value="<?= $edit['voltage_generator_st'] ?>" placeholder="ST">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="voltage_generator_rt" name="input[voltage_generator_rt]" value="<?= $edit['voltage_generator_rt'] ?>" placeholder="RT">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Arus Generator</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="arus_generator_r" name="input[arus_generator_r]" value="<?= $edit['arus_generator_r'] ?>" placeholder="R">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="arus_generator_s" name="input[arus_generator_s]" value="<?= $edit['arus_generator_s'] ?>" placeholder="S">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="arus_generator_t" name="input[arus_generator_t]" value="<?= $edit['arus_generator_t'] ?>" placeholder="T">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="beban" class="col-sm-2 col-form-label">Beban</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="beban" name="input[beban]" value="<?= $edit['beban'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cos_phi" class="col-sm-2 col-form-label">Cos Phi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cos_phi" name="input[cos_phi]" value="<?= $edit['cos_phi'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="freq" class="col-sm-2 col-form-label">Freq</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="freq" name="input[freq]" value="<?= $edit['freq'] ?>">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Excitation</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="excitation_volt" name="input[excitation_volt]" value="<?= $edit['excitation_volt'] ?>" placeholder="Volt">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="excitation_arus" name="input[excitation_arus]" value="<?= $edit['excitation_arus'] ?>" placeholder="Arus">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">KWh Produksi</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="exp_analog" name="input[exp_analog]" value="<?= $edit['exp_analog'] ?>" placeholder="EXP. Analog">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="exp_edmi" name="input[exp_edmi]" value="<?= $edit['exp_edmi'] ?>" placeholder="EXP. EDMI">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">KWh PS</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="export" name="input[export]" value="<?= $edit['export'] ?>" placeholder="Export">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="import" name="input[import]" value="<?= $edit['import'] ?>" placeholder="Import">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_penyulang" class="col-sm-2 col-form-label">Temperatur Bearing</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" id="temperature_bearing_1" name="input[temperature_bearing_1]" value="<?= $edit['temperature_bearing_1'] ?>" placeholder="1">
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="temperature_bearing_2" name="input[temperature_bearing_2]" value="<?= $edit['temperature_bearing_2'] ?>" placeholder="2">
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="temperature_bearing_3" name="input[temperature_bearing_3]" value="<?= $edit['temperature_bearing_3'] ?>" placeholder="3">
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="temperature_bearing_4" name="input[temperature_bearing_4]" value="<?= $edit['temperature_bearing_4'] ?>" placeholder="4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="level_air" class="col-sm-2 col-form-label">Level Air</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="level_air" name="input[level_air]" value="<?= $edit['level_air'] ?>">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary   mb-3">Ubah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>