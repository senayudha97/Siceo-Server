<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_zav_engine/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_zav_engine]" value="<?= 'ZAE' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="form-group row">
                    <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal Input & Waktu</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control easydatepicker" id="input[tanggal_input]" name="input[tanggal_input]" placeholder="Klik untuk input tanggal">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control easytimepicker" id="input[waktu]" name="input[waktu]" placeholder="Klik untuk input waktu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Temperatur (⁰C)
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk Disalurkan</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmgbc" id="udara_masuk_disalurkan_a" name="input[udara_masuk_disalurkan_a]" placeholder="Sisi A">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmgbc" id="udara_masuk_disalurkan_b" name="input[udara_masuk_disalurkan_b]" placeholder="Sisi B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h4>Minyak Pelumas</h4>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Masuk Mesin</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="minyak_pelumas_masuk_mesin_a" name="input[minyak_pelumas_masuk_mesin_a]" placeholder="Sisi A">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="minyak_pelumas_masuk_mesin_b" name="input[minyak_pelumas_masuk_mesin_b]" placeholder="Sisi B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Oil Cooler</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="minyak_pelumas_oil_cooler_masuk" name="input[minyak_pelumas_oil_cooler_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="minyak_pelumas_oil_cooler_keluar" name="input[minyak_pelumas_oil_cooler_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Masuk Filter</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpmtk" id="minyak_pelumas_masuk_filter" name="input[minyak_pelumas_masuk_filter]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h4>RAW Water</h4>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Intercooler</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lpmtk" id="raw_water_intercooler_a_masuk" name="input[raw_water_intercooler_a_masuk]" placeholder="Sisi A Masuk">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lpmtk" id="raw_water_intercooler_a_keluar" name="input[raw_water_intercooler_a_keluar]" placeholder="Sisi A Keluar">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lpmtk" id="raw_water_intercooler_b_masuk" name="input[raw_water_intercooler_b_masuk]" placeholder="Sisi B Masuk">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lpmtk" id="raw_water_intercooler_b_keluar" name="input[raw_water_intercooler_b_keluar]" placeholder="Sisi B Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Oil Cooler</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="raw_water_oil_cooler_masuk" name="input[raw_water_oil_cooler_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="raw_water_oil_cooler_keluar" name="input[raw_water_oil_cooler_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Radiator</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="raw_water_radiator_masuk" name="input[raw_water_radiator_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="raw_water_radiator_keluar" name="input[raw_water_radiator_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Air Pendingin Injector</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_injector_masuk" name="input[air_pendingin_injector_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_injector_keluar" name="input[air_pendingin_injector_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bahan Bakar</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control lpmgbc" id="bahan_bakar_masuk_mesin" name="input[bahan_bakar_masuk_mesin]" placeholder="Masuk Mesin">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control lpmgbc" id="bahan_bakar_masuk_flow_meter" name="input[bahan_bakar_masuk_flow_meter]" placeholder="Masuk Intercooler">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control lpmgbc" id="bahan_bakar_masuk_pompa" name="input[bahan_bakar_masuk_pompa]" placeholder="Masuk Pompa">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h4>Air Pendingin Mesin</h4>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Masuk Mesin</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_masuk_mesin_a" name="input[air_pendingin_masuk_mesin_a]" placeholder="Sisi A">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_masuk_mesin_b" name="input[air_pendingin_masuk_mesin_b]" placeholder="Sisi B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Masuk Intercooler</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_masuk_intercooler_a" name="input[air_pendingin_masuk_intercooler_a]" placeholder="Sisi A">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_masuk_intercooler_b" name="input[air_pendingin_masuk_intercooler_b]" placeholder="Sisi B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Radiator</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_radiator_masuk" name="input[air_pendingin_radiator_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_radiator_keluar" name="input[air_pendingin_radiator_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Silinder A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_a_1" name="input[air_pendingin_keluar_silinder_a_1]" placeholder="1A">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_a_2" name="input[air_pendingin_keluar_silinder_a_2]" placeholder="2A">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_a_3" name="input[air_pendingin_keluar_silinder_a_3]" placeholder="3A">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_a_4" name="input[air_pendingin_keluar_silinder_a_4]" placeholder="4A">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_a_5" name="input[air_pendingin_keluar_silinder_a_5]" placeholder="5A">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_a_6" name="input[air_pendingin_keluar_silinder_a_6]" placeholder="6A">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Silinder B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_b_1" name="input[air_pendingin_keluar_silinder_b_1]" placeholder="1B">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_b_2" name="input[air_pendingin_keluar_silinder_b_2]" placeholder="2B">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_b_3" name="input[air_pendingin_keluar_silinder_b_3]" placeholder="3B">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_b_4" name="input[air_pendingin_keluar_silinder_b_4]" placeholder="4B">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_b_5" name="input[air_pendingin_keluar_silinder_b_5]" placeholder="5B">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_b_6" name="input[air_pendingin_keluar_silinder_b_6]" placeholder="6B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Mesin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpmtk" id="air_pendingin_keluar_silinder_b_1" name="input[air_pendingin_keluar_silinder_b_1]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Rack Bahan Bakar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="rack_bahan_bakar" name="input[rack_bahan_bakar]">
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Tekanan (Bar)
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Start</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpmgbc" id="udara_start" name="input[udara_start]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpmgbc" id="udara_masuk" name="input[udara_masuk]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bahan Bakar</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpmgbc" id="bahan_bakar" name="input[bahan_bakar]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Minyak Pelumas</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpmgbc" id="minyak_pelumas" name="input[minyak_pelumas]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Air Pendingin Mesin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpmgbc" id="air_pendingin_mesin" name="input[air_pendingin_mesin]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Air Pendingin Injector</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpmgbc" id="air_pendingin_injector" name="input[air_pendingin_injector]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Raw Water Keluar Pompa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpmgbc" id="raw_water_keluar_pompa" name="input[raw_water_keluar_pompa]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk Disalurkan</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="tekanan_udara_masuk_disalurkan_a" name="input[tekanan_udara_masuk_disalurkan_a]" placeholder="A">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="tekanan_udara_masuk_disalurkan_b" name="input[tekanan_udara_masuk_disalurkan_b]" placeholder="B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tekanan Oli Pd Separator</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpmgbc" id="tekanan_oli_pd_separator" name="input[tekanan_oli_pd_separator]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="level_tangki_bbm_harian" class="col-sm-2 col-form-label">Level Tangki BBM Harian</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="level_tangki_bbm_harian" name="input[level_tangki_bbm_harian]">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="level_tangki_bbm_buffer" class="col-sm-2 col-form-label">Level Tangki BBM Buffer</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="level_tangki_bbm_buffer" name="input[level_tangki_bbm_buffer]">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="level_oli_sump_tank" class="col-sm-2 col-form-label">Level Oli Sump Tank</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="level_oli_sump_tank" name="input[level_oli_sump_tank]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sikap_flow_meter_bahan_bakar_mfo_return" class="col-sm-2 col-form-label">Sikap Flow Meter Bahan Bakar MFO Return</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sikap_flow_meter_bahan_bakar_mfo_return" name="input[sikap_flow_meter_bahan_bakar_mfo_return]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sikap_flow_meter_bahan_bakar_mfo_in" class="col-sm-2 col-form-label">Sikap Flow Meter Bahan Bakar MFO In</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sikap_flow_meter_bahan_bakar_mfo_in" name="input[sikap_flow_meter_bahan_bakar_mfo_in]">
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