<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('Log_paok_motong_hrto/edit'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Ubah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="pk[pk_hrto]" value="<?= $edit['pk_hrto']; ?>">
                    <input type="text" name="input[update_by]" value="<?= $user['id']; ?>">
                </div>
                <div class="form-group row">
                    <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal input</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control easydatepicker" id="input[tanggal_input]" value="<?= $edit['tanggal_input'] ?>" name="input[tanggal_input]" placeholder="Tanggal input">
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
                        Temperature
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Thermal Oil HRTO 1</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lhrtotoi1" id="input[thermal_hrto1_in]" value="<?= $edit['thermal_hrto1_in'] ?>" name="input[thermal_hrto1_in]" placeholder="In">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lhrtotoo1" id="input[thermal_hrto1_out]" value="<?= $edit['thermal_hrto1_out'] ?>" name="input[thermal_hrto1_out]" placeholder="Out">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Thermal Oil HRTO 2</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lhrtotoi2" id="input[thermal_hrto2_in]" value="<?= $edit['thermal_hrto2_in'] ?>" name="input[thermal_hrto2_in]" placeholder="In">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lhrtotoo2" id="input[thermal_hrto2_out]" value="<?= $edit['thermal_hrto2_out'] ?>" name="input[thermal_hrto2_out]" placeholder="Out">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gas Inlet HRTO Unit</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lhrtogi2" id="input[gas_inlet_hrto2]" value="<?= $edit['gas_inlet_hrto2'] ?>" name="input[gas_inlet_hrto2]" placeholder="#2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lhrtogi3" id="input[gas_inlet_hrto3]" value="<?= $edit['gas_inlet_hrto3'] ?>" name="input[gas_inlet_hrto3]" placeholder="#3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lhrtogi4" id="input[gas_inlet_hrto4]" value="<?= $edit['gas_inlet_hrto4'] ?>" name="input[gas_inlet_hrto4]" placeholder="#4">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lhrtogi5" id="input[gas_inlet_hrto5]" value="<?= $edit['gas_inlet_hrto5'] ?>" name="input[gas_inlet_hrto5]" placeholder="#5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Circulation Thermal Oil</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lhrtocto1" id="input[circulation_thermal_hrto1]" value="<?= $edit['circulation_thermal_hrto1'] ?>" name="input[circulation_thermal_hrto1]" placeholder="HRTO1">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lhrtocto2" id="input[circulation_thermal_hrto2]" value="<?= $edit['circulation_thermal_hrto2'] ?>" name="input[circulation_thermal_hrto2]" placeholder="HRTO2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="input[temperature_outlet_he]" class="col-sm-2 col-form-label">Outlet HE</label>
                                    <div class="col-sm-10">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control lhrtooh" id="input[temperature_outlet_he]" value="<?= $edit['temperature_outlet_he'] ?>" name="input[temperature_outlet_he]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Pressure
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="input[pressure_outlet_he]" class="col-sm-2 col-form-label">Outlet HE</label>
                                    <div class="col-sm-10">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[pressure_outlet_he]" value="<?= $edit['pressure_outlet_he'] ?>" name="input[pressure_outlet_he]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Outlet Circulation Thermal Oil</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[outlet_circulation_hrto1]" value="<?= $edit['outlet_circulation_hrto1'] ?>" name="input[outlet_circulation_hrto1]" placeholder="HRTO1">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[outlet_circulation_hrto2]" value="<?= $edit['outlet_circulation_hrto2'] ?>" name="input[outlet_circulation_hrto2]" placeholder="HRTO2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="input[pompa_sirkulasi_nomor]" class="col-sm-2 col-form-label">Pompa Sirkulasi Nomor</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[pompa_sirkulasi_nomor]" value="<?= $edit['pompa_sirkulasi_nomor'] ?>" name="input[pompa_sirkulasi_nomor]">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Damper (derajat)</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[damper2]" value="<?= $edit['damper2'] ?>" name="input[damper2]" placeholder="#2">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[damper3]" value="<?= $edit['damper3'] ?>" name="input[damper3]" placeholder="#3">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[damper4]" value="<?= $edit['damper4'] ?>" name="input[damper4]" placeholder="#4">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="input[damper5]" value="<?= $edit['damper5'] ?>" name="input[damper5]" placeholder="#5">
                            </div>
                        </div>
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