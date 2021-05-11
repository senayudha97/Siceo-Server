<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_za_cmr/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_za_cmr]" value="<?= 'CMR' . date('dhs'); ?>">
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
                        Tekanan
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Start</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[udara_start]" name="input[udara_start]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Air Pendingin Mesin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[air_pendingin_mesin]" name="input[air_pendingin_mesin]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Air Pendingin Injector</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[air_pendingin_injector]" name="input[air_pendingin_injector]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Raw Water</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[raw_water]" name="input[raw_water]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Minyak Pelumas</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[minyak_pelumas]" name="input[minyak_pelumas]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bahan Bakar</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[bahan_bakar]" name="input[bahan_bakar]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[udara_masuk]" name="input[udara_masuk]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Gas Buang
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class=" list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Silinder Sisi A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssa1" id="input[gas_buang_keluar_silinder_sisi_a_1]" name="input[gas_buang_keluar_silinder_sisi_a_1]" placeholder="HRTO1">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssa2" id="input[gas_buang_keluar_silinder_sisi_a_2]" name="input[gas_buang_keluar_silinder_sisi_a_2]" placeholder="HRTO2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssa3" id="input[gas_buang_keluar_silinder_sisi_a_3]" name="input[gas_buang_keluar_silinder_sisi_a_3]" placeholder="HRTO2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssa4" id="input[gas_buang_keluar_silinder_sisi_a_4]" name="input[gas_buang_keluar_silinder_sisi_a_4]" placeholder="HRTO2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssa5" id="input[gas_buang_keluar_silinder_sisi_a_5]" name="input[gas_buang_keluar_silinder_sisi_a_5]" placeholder="HRTO2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssa6" id="input[gas_buang_keluar_silinder_sisi_a_6]" name="input[gas_buang_keluar_silinder_sisi_a_6]" placeholder="HRTO2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=" list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Silinder Sisi B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssb1" id="input[gas_buang_keluar_silinder_sisi_b_1]" name="input[gas_buang_keluar_silinder_sisi_b_1]" placeholder="HRTO1">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssb2" id="input[gas_buang_keluar_silinder_sisi_b_2]" name="input[gas_buang_keluar_silinder_sisi_b_2]" placeholder="HRTO2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssb3" id="input[gas_buang_keluar_silinder_sisi_b_3]" name="input[gas_buang_keluar_silinder_sisi_b_3]" placeholder="HRTO2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssb4" id="input[gas_buang_keluar_silinder_sisi_b_4]" name="input[gas_buang_keluar_silinder_sisi_b_4]" placeholder="HRTO2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssb5" id="input[gas_buang_keluar_silinder_sisi_b_5]" name="input[gas_buang_keluar_silinder_sisi_b_5]" placeholder="HRTO2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lzcmrgbkssb6" id="input[gas_buang_keluar_silinder_sisi_b_6]" name="input[gas_buang_keluar_silinder_sisi_b_6]" placeholder="HRTO2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=" list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Turbo A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lzcmrgbtam" id="input[turbo_a_masuk]" name="input[turbo_a_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lzcmrgbtak" id="input[turbo_a_keluar]" name="input[turbo_a_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Turbo B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lzcmrgbtbm" id="input[turbo_b_masuk]" name="input[turbo_b_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lzcmrgbtbk" id="input[turbo_b_keluar]" name="input[turbo_b_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Air Pendingin Mesin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control lzcmrapm" id="input[temperatur_air_pendingin_mesin]" name="input[temperatur_air_pendingin_mesin]">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Air Pendingin Injector</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control lzcmrapi" id="input[temperatur_air_pendingin_injector]" name="input[temperatur_air_pendingin_injector]">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Minyak Pelumas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control lzcmrmp" id="input[temperatur_minyak_pelumas]" name="input[temperatur_minyak_pelumas]">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bahan Bakar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control lzcmrbb" id="input[temperatur_bahan_bakar]" name="input[temperatur_bahan_bakar]">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Raw Water</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control lzcmrrw" id="input[temperatur_raw_water]" name="input[temperatur_raw_water]">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Udara Masuk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control lzcmrum" id="input[temperatur_udara_masuk]" name="input[temperatur_udara_masuk]">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Bearing Generator</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control lzcmrgb1" id="input[bearing_generator1]" name="input[bearing_generator1]" placeholder="1">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control lzcmrgb2" id="input[bearing_generator2]" name="input[bearing_generator2]" placeholder="2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Thrust Bearing</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control lzcmrtb" id="input[thrust_bearing]" name="input[thrust_bearing]">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Main Bearing</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control lzcmrmb1" id="input[main_bearing1]" name="input[main_bearing1]" placeholder="#1">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control lzcmrmb2" id="input[main_bearing2]" name="input[main_bearing2]" placeholder="#2">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control lzcmrmb3" id="input[main_bearing3]" name="input[main_bearing3]" placeholder="#3">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control lzcmrmb4" id="input[main_bearing4]" name="input[main_bearing4]" placeholder="#4">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control lzcmrmb5" id="input[main_bearing5]" name="input[main_bearing5]" placeholder="#5">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control lzcmrmb6" id="input[main_bearing6]" name="input[main_bearing6]" placeholder="#6">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control lzcmrmb7" id="input[main_bearing7]" name="input[main_bearing7]" placeholder="#7">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Stator</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="text" class="form-control lzcmrstr1" id="input[stator1]" name="input[stator1]" placeholder="#1">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control lzcmrstr2" id="input[stator2]" name="input[stator2]" placeholder="#2">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control lzcmrstr3" id="input[stator3]" name="input[stator3]" placeholder="#3">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control lzcmrstr4" id="input[stator4]" name="input[stator4]" placeholder="#4">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control lzcmrstr5" id="input[stator5]" name="input[stator5]" placeholder="#5">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control lzcmrstr6" id="input[stator6]" name="input[stator6]" placeholder="#6">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Putaran Turbo</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[putaran_turbo_a]" name="input[putaran_turbo_a]" placeholder="A">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[putaran_turbo_b]" name="input[putaran_turbo_b]" placeholder="B">
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