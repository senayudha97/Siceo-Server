<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('Log_paok_motong_booster_module/edit'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Ubah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="pk[pk_booster_module]" value="<?= $edit['pk_booster_module']; ?>">
                    <input type="text" name="input[update_by]" value="<?= $user['id']; ?>">
                </div>
                <div class="form-group row">
                    <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal input</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control easydatepicker" id="input[tanggal_input]" value="<?= content_date($edit['tanggal_input']) ?>" name="input[tanggal_input]" placeholder="Tanggal input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[waktu]" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control easytimepicker" id="input[waktu]" value="<?= $edit['waktu'] ?>" name="input[waktu]" placeholder="Waktu">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[beban]" class="col-sm-2 col-form-label">Beban</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[beban]" value="<?= $edit['beban'] ?>" name="input[beban]">
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
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[flow_meter_hsd]" value="<?= $edit['flow_meter_hsd'] ?>" name="input[flow_meter_hsd]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">MFO</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[flow_meter_mfo]" value="<?= $edit['flow_meter_mfo'] ?>" name="input[flow_meter_mfo]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-light">
                        KWH Produksi
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">HSD</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[kwh_produksi_hsd]" value="<?= $edit['kwh_produksi_hsd'] ?>" name="input[kwh_produksi_hsd]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">MFO</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[kwh_produksi_mfo]" value="<?= $edit['kwh_produksi_mfo'] ?>" name="input[kwh_produksi_mfo]">
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
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[inlet_module]" value="<?= $edit['inlet_module'] ?>" name="input[inlet_module]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Discharge BP</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[discharge_bp]" value="<?= $edit['discharge_bp'] ?>" name="input[discharge_bp]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Suction BP</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[suction_bp]" value="<?= $edit['suction_bp'] ?>" name="input[suction_bp]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mixing Tank</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[mixing_tank12]" value="<?= $edit['mixing_tank12'] ?>" name="input[mixing_tank12]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">F.O Outlet</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[fo_outlet]" value="<?= $edit['fo_outlet'] ?>" name="input[fo_outlet]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">In to Engine</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[in_to_engine]" value="<?= $edit['in_to_engine'] ?>" name="input[in_to_engine]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Air Control</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[air_control]" value="<?= $edit['air_control'] ?>" name="input[air_control]">
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
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmif1" id="input[inlet_flow1]" value="<?= $edit['inlet_flow1'] ?>" name="input[inlet_flow1]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Inlet Flow 2</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmif2" id="input[inlet_flow2]" value="<?= $edit['inlet_flow2'] ?>" name="input[inlet_flow2]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mixing Tank</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmimt" id="input[mixing_tank9]" value="<?= $edit['mixing_tank9'] ?>" name="input[mixing_tank9]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Inlet Heater</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmih" id="input[inlet_heater]" value="<?= $edit['inlet_heater'] ?>" name="input[inlet_heater]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Outlet Heater</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmoh" id="input[outlet_heater]" value="<?= $edit['outlet_heater'] ?>" name="input[outlet_heater]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Viscosensor</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lbmv" id="input[viscosensor]" value="<?= $edit['viscosensor'] ?>" name="input[viscosensor]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Return Line</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[return_line]" value="<?= $edit['return_line'] ?>" name="input[return_line]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Fuel Oil</label>
                                    <div class="col-sm-9">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[fuel_oil]" value="<?= $edit['fuel_oil'] ?>" name="input[fuel_oil]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="input[viscositas]" class="col-sm-2 col-form-label">Viscositas</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[viscositas]" value="<?= $edit['viscositas'] ?>" name="input[viscositas]">
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