<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_pielstick_generator/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="input[created_date]" value="<?= date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_pielstick_generator]" value="<?= 'PG' . date('dhs'); ?>">
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

                <div class="card">
                    <div class="card-header bg-primary text-light">
                        GEnerator
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tegangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[tegangan]" name="input[tegangan]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Frekwensi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[frekwensi]" name="input[frekwensi]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Faktor Daya</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[faktor_daya]" name="input[faktor_daya]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Daya Semu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[daya_semu]" name="input[daya_semu]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Beban</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[beban]" name="input[beban]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Arus</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[arus_r]" name="input[arus_r]" placeholder="R">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[arus_s]" name="input[arus_s]" placeholder="S">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[arus_t]" name="input[arus_t]" placeholder="T">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Penguat Medan Exciter</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[penguat_medan_teg]" name="input[penguat_medan_teg]" placeholder="Teg">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[penguat_medan_arus]" name="input[penguat_medan_arus]" placeholder="Arus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kumparan Generator</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[kumparan_generator1]" name="input[kumparan_generator1]" placeholder="1">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[kumparan_generator2]" name="input[kumparan_generator2]" placeholder="2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[kumparan_generator3]" name="input[kumparan_generator3]" placeholder="3">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[kumparan_generator4]" name="input[kumparan_generator4]" placeholder="4">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[kumparan_generator5]" name="input[kumparan_generator5]" placeholder="5">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[kumparan_generator6]" name="input[kumparan_generator6]" placeholder="6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bantalan Generator</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[bantalan_generator]" name="input[bantalan_generator]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Pendingin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[udara_pendingin]" name="input[udara_pendingin]">
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">KWH Produksi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[kwh_produksi]" name="input[kwh_produksi]">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Flow Meter Bahan Bakar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[flow_meter_bahan_bakar]" name="input[flow_meter_bahan_bakar]">
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