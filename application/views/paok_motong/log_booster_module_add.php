<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('Log_paok_motong_booster_module/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="input[created_date]" value="<?= date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_booster_module]" value="<?= 'BM' . date('dhs'); ?>">
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
                <div class="form-group row">
                    <label for="input[beban]" class="col-sm-2 col-form-label">Beban</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[beban]" name="input[beban]">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Flow Meter
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">HSD</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="flow_meter_hsd" name="input[flow_meter_hsd]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">MFO</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="flow_meter_mfo" name="input[flow_meter_mfo]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        KWH Produksi
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">HSD</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="kwh_produksi_hsd" name="input[kwh_produksi_hsd]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">MFO</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="kwh_produksi_mfo" name="input[kwh_produksi_mfo]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Pressure (Bar)
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Inlet Module</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="inlet_module" name="input[inlet_module]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Discharge BP</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="discharge_bp" name="input[discharge_bp]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Suction BP</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="suction_bp" name="input[suction_bp]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mixing Tank</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="mixing_tank12" name="input[mixing_tank12]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">F.O Outlet</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="fo_outlet" name="input[fo_outlet]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">In to Engine</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="in_to_engine" name="input[in_to_engine]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Air Control</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="air_control" name="input[air_control]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Temperature
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Inlet Flow 1</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmif1" id="inlet_flow1" name="input[inlet_flow1]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Inlet Flow 2</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmif2" id="inlet_flow2" name="input[inlet_flow2]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mixing Tank</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmimt" id="mixing_tank9" name="input[mixing_tank9]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Inlet Heater</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmih" id="inlet_heater" name="input[inlet_heater]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Outlet Heater</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmoh" id="outlet_heater" name="input[outlet_heater]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Viscosensor</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmv" id="viscosensor" name="input[viscosensor]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Return Line</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbrl" id="return_line" name="input[return_line]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Fuel Oil</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbfo" id="fuel_oil" name="input[fuel_oil]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="input[viscositas]" class="col-sm-2 col-form-label">Viscositas</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[viscositas]" name="input[viscositas]">
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