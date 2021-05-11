<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_penyulang_taman/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="input[created_date]" value="<?= date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_penyulang_taman]" value="<?= 'PT' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>

                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input type="text" readonly class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]" placeholder="Klik untuk input tanggal">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" readonly class="form-control easytimepicker" id="input[waktu]" name="input[waktu]" placeholder="Klik untuk input waktu">
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Couple 20 KV Trafo Pielstick</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[trafo_pielstick_r]" name="input[trafo_pielstick_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[trafo_pielstick_s]" name="input[trafo_pielstick_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[trafo_pielstick_t]" name="input[trafo_pielstick_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[trafo_pielstick_kw]" name="input[trafo_pielstick_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Feeder Cilinaya</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_cilinaya_r]" name="input[feeder_cilinaya_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_cilinaya_s]" name="input[feeder_cilinaya_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_cilinaya_t]" name="input[feeder_cilinaya_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_cilinaya_kw]" name="input[feeder_cilinaya_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Couple A</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_a_r]" name="input[couple_a_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_a_s]" name="input[couple_a_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_a_t]" name="input[couple_a_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_a_kw]" name="input[couple_a_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Feeder Bertais</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_bertais_r]" name="input[feeder_bertais_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_bertais_s]" name="input[feeder_bertais_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_bertais_t]" name="input[feeder_bertais_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_bertais_kw]" name="input[feeder_bertais_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Couple C</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_c1_r]" name="input[couple_c1_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_c1_s]" name="input[couple_c1_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_c1_t]" name="input[couple_c1_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_c1_kw]" name="input[couple_c1_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Tegangan 20 KV Ruston I dan II</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[tegangan_ruston_r]" name="input[tegangan_ruston_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[tegangan_ruston_s]" name="input[tegangan_ruston_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[tegangan_ruston_t]" name="input[tegangan_ruston_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[tegangan_ruston_kw]" name="input[tegangan_ruston_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Couple C</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_c2_r]" name="input[couple_c2_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_c2_s]" name="input[couple_c2_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_c2_t]" name="input[couple_c2_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_c2_kw]" name="input[couple_c2_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Sewa Batam 1</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[sewa_batam1_r]" name="input[sewa_batam1_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[sewa_batam1_s]" name="input[sewa_batam1_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[sewa_batam1_t]" name="input[sewa_batam1_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[sewa_batam1_kw]" name="input[sewa_batam1_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Feeder Bandara</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_bandara_r]" name="input[feeder_bandara_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_bandara_s]" name="input[feeder_bandara_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_bandara_t]" name="input[feeder_bandara_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_bandara_kw]" name="input[feeder_bandara_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Epicentrum
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Incoming 1</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[incoming1_import]" name="input[incoming1_import]" placeholder="Import">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[incoming1_export]" name="input[incoming1_export]" placeholder="Export">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[incoming1_kw]" name="input[incoming1_kw]" placeholder="KW">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Outgoing</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[outgoing_import]" name="input[outgoing_import]" placeholder="Import">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[outgoing_export]" name="input[outgoing_export]" placeholder="Export">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[outgoing_kw]" name="input[outgoing_kw]" placeholder="KW">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Incoming 2</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[incoming2_import]" name="input[incoming2_import]" placeholder="Import">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[incoming2_export]" name="input[incoming2_export]" placeholder="Export">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[incoming2_kw]" name="input[incoming2_kw]" placeholder="KW">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Feeder Cakra Kota</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_cakra_kota_r]" name="input[feeder_cakra_kota_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_cakra_kota_s]" name="input[feeder_cakra_kota_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_cakra_kota_t]" name="input[feeder_cakra_kota_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_cakra_kota_kw]" name="input[feeder_cakra_kota_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Feeder Mataram</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_mataram_r]" name="input[feeder_mataram_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_mataram_s]" name="input[feeder_mataram_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_mataram_t]" name="input[feeder_mataram_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[feeder_mataram_kw]" name="input[feeder_mataram_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Couple B</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_b_r]" name="input[couple_b_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_b_s]" name="input[couple_b_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_b_t]" name="input[couple_b_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[couple_b_kw]" name="input[couple_b_kw]" placeholder="KW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Sewa Batam 2</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[sewa_batam2_r]" name="input[sewa_batam2_r]" placeholder="R">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[sewa_batam2_s]" name="input[sewa_batam2_s]" placeholder="S">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[sewa_batam2_t]" name="input[sewa_batam2_t]" placeholder="T">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="input[sewa_batam2_kw]" name="input[sewa_batam2_kw]" placeholder="KW">
                            </div>
                        </div>
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