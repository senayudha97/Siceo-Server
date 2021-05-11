<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('Log_paok_motong_separator_mfo/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="input[created_date]" value="<?= date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_separator_mfo]" value="<?= 'SMFO' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="form-group row">
                    <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal input</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control easydatepicker" id="input[tanggal_input]" name="input[tanggal_input]" placeholder="Tanggal input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[waktu]" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                        <?php form_waktu() ?>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Separator 1
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pressure Produksi MFO (Bar)</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="separator1_pressure_produksi_mfo" name="input[separator1_pressure_produksi_mfo]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Flow Rate Produksi MFO (kL/h)</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="separator1_flow_rate_produksi_mfo" name="input[separator1_flow_rate_produksi_mfo]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Temperature</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfopm" id="separator1_temperature_produksi_mfo" name="input[separator1_temperature_produksi_mfo]" placeholder="Produksi MFO">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfoito" id="separator1_temperature_inlet_thermal_oil" name="input[separator1_temperature_inlet_thermal_oil]" placeholder="Inlet Thermal Oil">
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
                        Separator 2
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pressure Produksi MFO (Bar)</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control " id="separator2_pressure_produksi_mfo" name="input[separator2_pressure_produksi_mfo]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Flow Rate Produksi MFO (kL/h)</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control " id="separator2_flow_rate_produksi_mfo" name="input[separator2_flow_rate_produksi_mfo]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Temperature</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfopm2" id="separator2_temperature_produksi_mfo" name="input[separator2_temperature_produksi_mfo]" placeholder="Produksi MFO">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfoito2" id="separator2_temperature_inlet_thermal_oil" name="input[separator2_temperature_inlet_thermal_oil]" placeholder="Inlet Thermal Oil">
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
                        Tangki 250 kL
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Level (kL)</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="tangki250_level" name="input[tangki250_level]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Temp</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfotmp250" id="tangki250_temp" name="input[tangki250_temp]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Tangki 60 kL
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Level (kL)</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="tangki60_level" name="input[tangki60_level]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Temp</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfotmp60" id="tangki60_temp" name="input[tangki60_temp]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="input[pressure_water_supply]" class="col-sm-2 col-form-label">Pressure Water Supply (Bar)</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[pressure_water_supply]" name="input[pressure_water_supply]">
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