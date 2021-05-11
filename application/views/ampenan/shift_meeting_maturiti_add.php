<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Shift_meeting_maturiti/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="hidden" name="input[created_date]" value="<?= 'SMM' . date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_shift_maturiti]" value="<?= 'SMM' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>

                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]" placeholder="Klik untuk input tanggal">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easytimepicker" id="input[waktu]" name="input[waktu]" placeholder="Klik untuk input waktu">
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Priming Pump
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Priming Pump A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_a_1]" name="input[priming_pump_a_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_a_2]" name="input[priming_pump_a_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_a_3]" name="input[priming_pump_a_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_a_4]" name="input[priming_pump_a_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_a_5]" name="input[priming_pump_a_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_a_6]" name="input[priming_pump_a_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_a_7]" name="input[priming_pump_a_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_a_8]" name="input[priming_pump_a_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[priming_pump_a_keterangan]" name="input[priming_pump_a_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Priming Pump B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_b_1]" name="input[priming_pump_b_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_b_2]" name="input[priming_pump_b_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_b_3]" name="input[priming_pump_b_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_b_4]" name="input[priming_pump_b_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_b_5]" name="input[priming_pump_b_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_b_6]" name="input[priming_pump_b_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_b_7]" name="input[priming_pump_b_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[priming_pump_b_8]" name="input[priming_pump_b_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[priming_pump_b_keterangan]" name="input[priming_pump_b_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Jaket Water
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jaket Water A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_a_1]" name="input[jacket_water_a_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_a_2]" name="input[jacket_water_a_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_a_3]" name="input[jacket_water_a_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_a_4]" name="input[jacket_water_a_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_a_5]" name="input[jacket_water_a_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_a_6]" name="input[jacket_water_a_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_a_7]" name="input[jacket_water_a_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_a_8]" name="input[jacket_water_a_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[jacket_water_a_keterangan]" name="input[jacket_water_a_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jaket Water B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_b_1]" name="input[jacket_water_b_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_b_2]" name="input[jacket_water_b_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_b_3]" name="input[jacket_water_b_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_b_4]" name="input[jacket_water_b_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_b_5]" name="input[jacket_water_b_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_b_6]" name="input[jacket_water_b_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_b_7]" name="input[jacket_water_b_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[jacket_water_b_8]" name="input[jacket_water_b_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[jacket_water_b_keterangan]" name="input[jacket_water_b_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        RAW Water
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">RAW Water A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_a_1]" name="input[raw_water_a_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_a_2]" name="input[raw_water_a_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_a_3]" name="input[raw_water_a_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_a_4]" name="input[raw_water_a_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_a_5]" name="input[raw_water_a_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_a_6]" name="input[raw_water_a_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_a_7]" name="input[raw_water_a_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_a_8]" name="input[raw_water_a_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[raw_water_a_keterangan]" name="input[raw_water_a_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">RAW Water B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_b_1]" name="input[raw_water_b_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_b_2]" name="input[raw_water_b_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_b_3]" name="input[raw_water_b_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_b_4]" name="input[raw_water_b_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_b_5]" name="input[raw_water_b_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_b_6]" name="input[raw_water_b_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_b_7]" name="input[raw_water_b_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[raw_water_b_8]" name="input[raw_water_b_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[raw_water_b_keterangan]" name="input[raw_water_b_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Injector Cooling
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Injector Cooling A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_a_1]" name="input[injector_cooling_a_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_a_2]" name="input[injector_cooling_a_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_a_3]" name="input[injector_cooling_a_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_a_4]" name="input[injector_cooling_a_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_a_5]" name="input[injector_cooling_a_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_a_6]" name="input[injector_cooling_a_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_a_7]" name="input[injector_cooling_a_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_a_8]" name="input[injector_cooling_a_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[injector_cooling_a_keterangan]" name="input[injector_cooling_a_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Injector Cooling B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_b_1]" name="input[injector_cooling_b_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_b_2]" name="input[injector_cooling_b_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_b_3]" name="input[injector_cooling_b_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_b_4]" name="input[injector_cooling_b_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_b_5]" name="input[injector_cooling_b_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_b_6]" name="input[injector_cooling_b_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_b_7]" name="input[injector_cooling_b_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[injector_cooling_b_8]" name="input[injector_cooling_b_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[injector_cooling_b_keterangan]" name="input[injector_cooling_b_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Booster Pump
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Booster Pump A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_a_1]" name="input[booster_pump_a_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_a_2]" name="input[booster_pump_a_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_a_3]" name="input[booster_pump_a_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_a_4]" name="input[booster_pump_a_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_a_5]" name="input[booster_pump_a_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_a_6]" name="input[booster_pump_a_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_a_7]" name="input[booster_pump_a_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_a_8]" name="input[booster_pump_a_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[booster_pump_a_keterangan]" name="input[booster_pump_a_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Booster Pump B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_b_1]" name="input[booster_pump_b_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_b_2]" name="input[booster_pump_b_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_b_3]" name="input[booster_pump_b_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_b_4]" name="input[booster_pump_b_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_b_5]" name="input[booster_pump_b_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_b_6]" name="input[booster_pump_b_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_b_7]" name="input[booster_pump_b_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[booster_pump_b_8]" name="input[booster_pump_b_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[booster_pump_b_keterangan]" name="input[booster_pump_b_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Transfer Pump
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Transfer Pump A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_a_1]" name="input[transfer_pump_a_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_a_2]" name="input[transfer_pump_a_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_a_3]" name="input[transfer_pump_a_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_a_4]" name="input[transfer_pump_a_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_a_5]" name="input[transfer_pump_a_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_a_6]" name="input[transfer_pump_a_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_a_7]" name="input[transfer_pump_a_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_a_8]" name="input[transfer_pump_a_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[transfer_pump_a_keterangan]" name="input[transfer_pump_a_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Transfer Pump B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_b_1]" name="input[transfer_pump_b_1]" placeholder="#1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_b_2]" name="input[transfer_pump_b_2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_b_3]" name="input[transfer_pump_b_3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_b_4]" name="input[transfer_pump_b_4]" placeholder="#4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_b_5]" name="input[transfer_pump_b_5]" placeholder="#5">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_b_6]" name="input[transfer_pump_b_6]" placeholder="#6">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_b_7]" name="input[transfer_pump_b_7]" placeholder="#7">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input[transfer_pump_b_8]" name="input[transfer_pump_b_8]" placeholder="#8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[transfer_pump_b_keterangan]" name="input[transfer_pump_b_keterangan]" placeholder="keterangan">
                                    </div>
                                </div>
                            </li>
                        </ul>
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