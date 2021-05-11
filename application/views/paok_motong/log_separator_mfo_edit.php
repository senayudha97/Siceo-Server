<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('Log_paok_motong_separator_mfo/edit'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Ubah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="pk[pk_separator_mfo]" value="<?= $edit['pk_separator_mfo']; ?>">
                    <input type="text" name="input[update_by]" value="<?= $user['id']; ?>">
                </div>
                <div class="form-group row">
                    <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal input</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control easydatepicker" id="input[tanggal_input]" value="<?= content_date($edit['tanggal_input']); ?>" name="input[tanggal_input]" placeholder="Tanggal input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[waktu]" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control easytimepicker" id="input[waktu]" value="<?= $edit['waktu'] ?>" name="input[waktu]" placeholder="Waktu">
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
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[separator1_pressure_produksi_mfo]" value="<?= $edit['separator1_pressure_produksi_mfo'] ?>" name="input[separator1_pressure_produksi_mfo]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Flow Rate Produksi MFO (kL/h)</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[separator1_flow_rate_produksi_mfo]" value="<?= $edit['separator1_flow_rate_produksi_mfo'] ?>" name="input[separator1_flow_rate_produksi_mfo]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Temperature</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfopm" id="input[separator1_temperature_produksi_mfo]" value="<?= $edit['separator1_temperature_produksi_mfo'] ?>" name="input[separator1_temperature_produksi_mfo]" placeholder="Produksi MFO">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfoito" id="input[separator1_temperature_inlet_thermal_oil]" value="<?= $edit['separator1_temperature_inlet_thermal_oil'] ?>" name="input[separator1_temperature_inlet_thermal_oil]" placeholder="Inlet Thermal Oil">
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
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[separator2_pressure_produksi_mfo]" value="<?= $edit['separator2_pressure_produksi_mfo'] ?>" name="input[separator2_pressure_produksi_mfo]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Flow Rate Produksi MFO (kL/h)</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[separator2_flow_rate_produksi_mfo]" value="<?= $edit['separator2_flow_rate_produksi_mfo'] ?>" name="input[separator2_flow_rate_produksi_mfo]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Temperature</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfopm2" id="input[separator2_temperature_produksi_mfo]" value="<?= $edit['separator2_temperature_produksi_mfo'] ?>" name="input[separator2_temperature_produksi_mfo]" placeholder="Produksi MFO">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfoito2" id="input[separator2_temperature_inlet_thermal_oil]" value="<?= $edit['separator2_temperature_inlet_thermal_oil'] ?>" name="input[separator2_temperature_inlet_thermal_oil]" placeholder="Inlet Thermal Oil">
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
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[tangki250_level]" value="<?= $edit['tangki250_level'] ?>" name="input[tangki250_level]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Temp</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfotmp250" id="input[tangki250_temp]" value="<?= $edit['tangki250_temp'] ?>" name="input[tangki250_temp]">
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
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[tangki60_level]" value="<?= $edit['tangki60_level'] ?>" name="input[tangki60_level]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Temp</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lmfotmp60" id="input[tangki60_temp]" value="<?= $edit['tangki60_temp'] ?>" name="input[tangki60_temp]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="input[pressure_water_supply]" class="col-sm-2 col-form-label">Pressure Water Supply (Bar)</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[pressure_water_supply]" value="<?= $edit['pressure_water_supply'] ?>" name="input[pressure_water_supply]">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>