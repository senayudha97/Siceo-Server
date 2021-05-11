<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_niigata_engine/edit'); ?>" method="POST">
                <h1 class="h3 mb-4 text-gray-800">Ubah Data <?= $title; ?></h1>

                <div id="hidden_field">
                    <input type="text" name="pk[pk_niigata_engine]" value="<?= $edit['pk_niigata_engine']; ?>">
                    <input type="text" name="input[update_by]" value="<?= $user['id']; ?>">
                </div>

                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easydatepicker" id="tanggal_input" value="<?= content_date($edit['tanggal_input']) ?>" name="input[tanggal_input]" placeholder="Klik untuk input tanggal" readonly>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easytimepicker" id="input[jam]" value="<?= $edit['jam'] ?>" name="input[jam]" readonly placeholder="Klik untuk input jam">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Mesin & Generator</label>
                        <div class="col-sm-5">
                            <select class="form-control" value="<?= $edit['mesin'] ?>" name="input[mesin]" id="mesin">
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <select class="form-control" value="<?= $edit['generator'] ?>" name="input[generator]" id="generator">
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
                        Temperatur ( Kg/Cm2 )
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class=" form-group row">
                                    <label class="col-sm-2 col-form-label">Air Pendingin</label>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control lnebbmm" id="input[air_pendingin_mesin]" value="<?= $edit['air_pendingin_mesin'] ?>" name="input[air_pendingin_mesin]" placeholder="Masuk Mesin">
                                    </div>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control lnempmm" id="input[air_pendingin_intercooler]" value="<?= $edit['air_pendingin_intercooler'] ?>" name="input[air_pendingin_intercooler]" placeholder="Masuk Intercooler">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="input[minyak_pelumas_masuk_mesin]" class="col-sm-2 col-form-label">Minyak Pelumas Masuk Mesin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lneapmm" id="input[minyak_pelumas_masuk_mesin]" value="<?= $edit['minyak_pelumas_masuk_mesin'] ?>" name="input[minyak_pelumas_masuk_mesin]" placeholder="Minyak Pelumas Masuk Mesin">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Bilas</label>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control lnempim" id="input[udara_bilas_a]" value="<?= $edit['udara_bilas_a'] ?>" name="input[udara_bilas_a]" placeholder="A">
                                    </div>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control lnempik" id="input[udara_bilas_b]" value="<?= $edit['udara_bilas_b'] ?>" name="input[udara_bilas_b]" placeholder="B">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="input[bahan_bakar_masuk_mesin]" class="col-sm-2 col-form-label">Bahan Bakar Masuk Mesin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lneapksa1a" id="input[bahan_bakar_masuk_mesin]" value="<?= $edit['bahan_bakar_masuk_mesin'] ?>" name="input[bahan_bakar_masuk_mesin]" placeholder="Bahan Bakar Masuk Mesin">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="input[minyak_pelumas_tuas_katup]" class="col-sm-2 col-form-label">Minyak Pelumas Tuas Katup</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lneapksa2a" id="input[minyak_pelumas_tuas_katup]" value="<?= $edit['minyak_pelumas_tuas_katup'] ?>" name="input[minyak_pelumas_tuas_katup]" placeholder="Minyak Pelumas Tuas Katup">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="input[minyak_pendingin_injektor]" class="col-sm-2 col-form-label">Minyak Pendingin Injektor</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lneapksa3a" id="input[minyak_pendingin_injektor]" value="<?= $edit['minyak_pendingin_injektor'] ?>" name="input[minyak_pendingin_injektor]" placeholder="Minyak Pendingin Injektor">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="input[gas_buang]" class="col-sm-2 col-form-label">Gas Buang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control lneapksa4a" id="input[gas_buang]" value="<?= $edit['gas_buang'] ?>" name="input[gas_buang]" placeholder="Gas Buang">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input[load_limit_governor]" class="col-sm-2 col-form-label">Load Limit Governor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control lneapksa5a" id="input[load_limit_governor]" value="<?= $edit['load_limit_governor'] ?>" name="input[load_limit_governor]" placeholder="Load Limit Governor">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Rack Bahan Bakar (mm)
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <label class="col-form-label">silinder Sisi A</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneapksa6a" id="input[silinder_sisi_a_1]" value="<?= $edit['silinder_sisi_a_1'] ?>" name="input[silinder_sisi_a_1]" placeholder="1 A">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneapksb1b" id="input[silinder_sisi_a_2]" value="<?= $edit['silinder_sisi_a_2'] ?>" name="input[silinder_sisi_a_2]" placeholder="2 A">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneapksb2b" id="input[silinder_sisi_a_3]" value="<?= $edit['silinder_sisi_b_3'] ?>" name="input[silinder_sisi_b_3]" placeholder="3 A">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneapksb3b" id="input[silinder_sisi_a_4]" value="<?= $edit['silinder_sisi_a_4'] ?>" name="input[silinder_sisi_a_4]" placeholder="4 A">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneapksb4b" id="input[silinder_sisi_a_5]" value="<?= $edit['silinder_sisi_a_5'] ?>" name="input[silinder_sisi_a_5]" placeholder="5 A">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneapksb5b" id="input[silinder_sisi_a_6]" value="<?= $edit['silinder_sisi_a_6'] ?>" name="input[silinder_sisi_a_6]" placeholder="6 A">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <label class="col-form-label">silinder Sisi B</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneapksb6b" id="input[silinder_sisi_b_1]" value="<?= $edit['silinder_sisi_b_1'] ?>" name="input[silinder_sisi_b_1]" placeholder="1 B">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneumia" id="input[silinder_sisi_b_2]" value="<?= $edit['silinder_sisi_b_2'] ?>" name="input[silinder_sisi_b_2]" placeholder="2 B">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneumib" id="input[silinder_sisi_b_3]" value="<?= $edit['silinder_sisi_b_3'] ?>" name="input[silinder_sisi_b_3]" placeholder="3 B">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneukia" id="input[silinder_sisi_b_4]" value="<?= $edit['silinder_sisi_b_4'] ?>" name="input[silinder_sisi_b_4]" placeholder="4 B">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneukib" id="input[silinder_sisi_b_5]" value="<?= $edit['silinder_sisi_b_5'] ?>" name="input[silinder_sisi_b_5]" placeholder="5 B">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lneumf" id="input[silinder_sisi_b_6]" value="<?= $edit['silinder_sisi_b_6'] ?>" name="input[silinder_sisi_b_6]" placeholder="6 B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Temperatur (°C)
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="input[bahan_bakar_mesin_masuk]" class="col-sm-2 col-form-label">Bahan Bakar Mesin Masuk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lnermpm" id="input[bahan_bakar_mesin_masuk]" value="<?= $edit['bahan_bakar_mesin_masuk'] ?>" name="input[bahan_bakar_mesin_masuk]" placeholder="Bahan Bakar Mesin Masuk">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Minyak Pendingin Injektor</label>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control lnermpk" id="input[minyak_pendingin_injektor_masuk]" value="<?= $edit['minyak_pendingin_injektor_masuk'] ?>" name="input[minyak_pendingin_injektor_masuk]" placeholder="Masuk">
                                    </div>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control lnerapmm" id="input[minyak_pendingin_injektor_keluar]" value="<?= $edit['minyak_pendingin_injektor_keluar'] ?>" name="input[minyak_pendingin_injektor_keluar]" placeholder="Keluar">
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <label class="col-form-label">Air Pendingin Silinder A</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lnerapmk" id="input[air_pendingin_silinder_a_1]" value="<?= $edit['air_pendingin_silinder_a_1'] ?>" name="input[air_pendingin_silinder_a_1]" placeholder="1 A">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lnerapim" id="input[air_pendingin_silinder_a_2]" value="<?= $edit['air_pendingin_silinder_a_2'] ?>" name="input[air_pendingin_silinder_a_2]" placeholder="2 A">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control lnerapik" id="input[air_pendingin_silinder_a_3]" value="<?= $edit['air_pendingin_silinder_a_3'] ?>" name="input[air_pendingin_silinder_a_3]" placeholder="3 A">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control" id="input[air_pendingin_silinder_a_4]" value="<?= $edit['air_pendingin_silinder_a_4'] ?>" name="input[air_pendingin_silinder_a_4]" placeholder="4 A">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control" id="input[air_pendingin_silinder_a_5]" value="<?= $edit['air_pendingin_silinder_a_5'] ?>" name="input[air_pendingin_silinder_a_5]" placeholder="5 A">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type=" text" class="form-control" id="input[air_pendingin_silinder_a_6]" value="<?= $edit['air_pendingin_silinder_a_6'] ?>" name="input[air_pendingin_silinder_a_6]" placeholder="6 A">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <label class="col-form-label">Air Pendingin Silinder B</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control" id="input[air_pendingin_silinder_b_1]" value="<?= $edit['air_pendingin_silinder_b_1'] ?>" name="input[air_pendingin_silinder_b_1]" placeholder="1 B">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control" id="input[air_pendingin_silinder_b_2]" value="<?= $edit['air_pendingin_silinder_b_2'] ?>" name="input[air_pendingin_silinder_b_2]" placeholder="2 B">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control" id="input[air_pendingin_silinder_b_3]" value="<?= $edit['air_pendingin_silinder_b_3'] ?>" name="input[air_pendingin_silinder_b_3]" placeholder="3 B">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control" id="input[air_pendingin_silinder_b_4]" value="<?= $edit['air_pendingin_silinder_b_4'] ?>" name="input[air_pendingin_silinder_b_4]" placeholder="4 B">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control" id="input[air_pendingin_silinder_b_5]" value="<?= $edit['air_pendingin_silinder_b_5'] ?>" name="input[air_pendingin_silinder_b_5]" placeholder="5 B">
                                            </div>
                                            <div class="col-sm-2 mt-2">
                                                <input type="text" class="form-control" id="input[air_pendingin_silinder_b_6]" value="<?= $edit['air_pendingin_silinder_b_6'] ?>" name="input[air_pendingin_silinder_b_6]" placeholder="6 B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk Intercooler</label>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control" id="input[udara_masuk_intercooler_a]" value="<?= $edit['udara_masuk_intercooler_a'] ?>" name="input[udara_masuk_intercooler_a]" placeholder="A">
                                    </div>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control" id="input[udara_masuk_intercooler_b]" value="<?= $edit['udara_masuk_intercooler_b'] ?>" name="input[udara_masuk_intercooler_b]" placeholder="B">
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Keluar Intercooler</label>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control" id="input[udara_keluar_intercooler_a]" value="<?= $edit['udara_keluar_intercooler_a'] ?>" name="input[udara_keluar_intercooler_a]" placeholder="A">
                                    </div>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control" id="input[udara_keluar_intercooler_b]" value="<?= $edit['udara_keluar_intercooler_b'] ?>" name="input[udara_keluar_intercooler_b]" placeholder="B">
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="input[masuk_filter]" class="col-sm-2 col-form-label">Masuk Filter</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[masuk_filter]" value="<?= $edit['masuk_filter'] ?>" name="input[masuk_filter]" placeholder="Masuk Filter">
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Radiator Minyak Pelumas</label>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control" id="input[radiator_minyak_pelumas_masuk]" value="<?= $edit['radiator_minyak_pelumas_masuk'] ?>" name="input[radiator_minyak_pelumas_masuk]" placeholder="Masuk">
                                    </div>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control" id="input[radiator_minyak_pelumas_keluar]" value="<?= $edit['radiator_minyak_pelumas_keluar'] ?>" name="input[radiator_minyak_pelumas_keluar]" placeholder="Keluar">
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Radiator Air Pendingin Mesin</label>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control" id="input[radiator_air_pendingin_mesin_masuk]" value="<?= $edit['radiator_air_pendingin_mesin_masuk'] ?>" name="input[radiator_air_pendingin_mesin_masuk]" placeholder="Masuk">
                                    </div>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control" id="input[radiator_air_pendingin_mesin_keluar]" value="<?= $edit['radiator_air_pendingin_mesin_keluar'] ?>" name="input[radiator_air_pendingin_mesin_keluar]" placeholder="Keluar">
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Radiator Air Pendingin Intercooler</label>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control" id="input[radiator_air_pendingin_intercooler_masuk]" value="<?= $edit['radiator_air_pendingin_intercooler_masuk'] ?>" name="input[radiator_air_pendingin_intercooler_masuk]" placeholder="Masuk">
                                    </div>
                                    <div class="col-sm-5 mt-2">
                                        <input type="text" class="form-control" id="input[radiator_air_pendingin_intercooler_keluar]" value="<?= $edit['radiator_air_pendingin_intercooler_keluar'] ?>" name="input[radiator_air_pendingin_intercooler_keluar]" placeholder="Keluar">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input[kwh_ps]" class="col-sm-2 col-form-label">KWH PS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[kwh_ps]" value="<?= $edit['kwh_ps'] ?>" name="input[kwh_ps]" placeholder="KWH PS">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Stand Flow Meter HSD/MFO
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="input[hsd]" class="col-sm-2 col-form-label">HSD</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[hsd]" value="<?= $edit['hsd'] ?>" name="input[hsd]" placeholder="HSD">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[mfo_in]" class="col-sm-2 col-form-label">MFO IN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[mfo_in]" value="<?= $edit['mfo_in'] ?>" name="input[mfo_in]" placeholder="MFO IN">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[mfo_return]" class="col-sm-2 col-form-label">MFO Return</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[mfo_return]" value="<?= $edit['mfo_return'] ?>" name="input[mfo_return]" placeholder="MFO Return">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input[operator]" class="col-sm-2 col-form-label">Operator Regu</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[operator]" value="<?= $edit['operator'] ?>" name="input[operator]" placeholder="Operator">
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