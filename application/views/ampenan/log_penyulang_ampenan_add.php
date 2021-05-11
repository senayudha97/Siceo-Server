<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_penyulang_ampenan/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="input[created_date]" value="<?= date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_penyulang_ampenan]" value="<?= 'PA' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>

                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]" placeholder="Klik untuk input tanggal" readonly>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easytimepicker" id="input[waktu]" name="input[waktu]" readonly placeholder="Klik untuk input waktu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Mesin & Generator</label>
                        <div class="col-sm-5">
                            <select class="form-control" name="input[mesin]" id="">
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <select class="form-control" name="input[generator]" id="">
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">LCC</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[lcc_analog]" name="input[lcc_analog]" placeholder="Analog">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[lcc_digital]" name="input[lcc_digital]" placeholder="Digital">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">PS 9</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[ps9_analog]" name="input[ps9_analog]" placeholder="Analog">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[ps9_digital]" name="input[ps9_digital]" placeholder="Digital">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Praya</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[praya_analog]" name="input[praya_analog]" placeholder="Analog">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[praya_digital]" name="input[praya_digital]" placeholder="Digital">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Senggigi</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[senggigi_analog]" name="input[senggigi_analog]" placeholder="Analog">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[senggigi_digital]" name="input[senggigi_digital]" placeholder="Digital">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Kopang</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[kopang_analog]" name="input[kopang_analog]" placeholder="Analog">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[kopang_digital]" name="input[kopang_digital]" placeholder="Digital">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Gomong</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[gomong_analog]" name="input[gomong_analog]" placeholder="Analog">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[gomong_digital]" name="input[gomong_digital]" placeholder="Digital">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Kediri</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[kediri_analog]" name="input[kediri_analog]" placeholder="Analog">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[kediri_digital]" name="input[kediri_digital]" placeholder="Digital">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Kopel Taman A
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Analog</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[kopel_taman_a_analog_import]" name="input[kopel_taman_a_analog_import]">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[kopel_taman_a_analog_export]" name="input[kopel_taman_a_analog_export]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Digital</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[kopel_taman_a_digital_import]" name="input[kopel_taman_a_digital_import]">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[kopel_taman_a_digital_export]" name="input[kopel_taman_a_digital_export]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Kopel Ampenan-Biau
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Analog</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[kopel_ampenan_biau_analog_import]" name="input[kopel_ampenan_biau_analog_import]">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[kopel_ampenan_biau_analog_export]" name="input[kopel_ampenan_biau_analog_export]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Digital</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[kopel_ampenan_biau_digital_import]" name="input[kopel_ampenan_biau_digital_import]">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[kopel_ampenan_biau_digital_export]" name="input[kopel_ampenan_biau_digital_export]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Sewatama 1</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[sewatama1_import]" name="input[sewatama1_import]" placeholder="Import">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[sewatama1_export]" name="input[sewatama1_export]" placeholder="Export">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Sewatama 2</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[sewatama2_import]" name="input[sewatama2_import]" placeholder="Import">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[sewatama2_export]" name="input[sewatama2_export]" placeholder="Export">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Kopel GI 1</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[kopel_gi1_import]" name="input[kopel_gi1_import]" placeholder="Import">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[kopel_gi1_export]" name="input[kopel_gi1_export]" placeholder="Export">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Kopel GI 2</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[kopel_gi2_import]" name="input[kopel_gi2_import]" placeholder="Import">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[kopel_gi2_export]" name="input[kopel_gi2_export]" placeholder="Export">
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