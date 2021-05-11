<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_zv_pltd/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_zv_pltd]" value="<?= 'ZP' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]" placeholder="Klik untuk input tanggal" readonly>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easytimepicker" id="input[waktu]" name="input[waktu]" readonly placeholder="Klik untuk input jam">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mesin" class="col-sm-2 col-form-label">Mesin & Generator</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="mesin" name="input[mesin]" placeholder="Nomor Mesin">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="input[generator]" name="input[generator]" placeholder="Generator">
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Temperatur (⁰C)
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Udara Masuk</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveumsa" id="input[udara_masuk_sisi_a]" name="input[udara_masuk_sisi_a]" placeholder="Sisi A">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveumsb" id="input[udara_masuk_sisi_b]" name="input[udara_masuk_sisi_b]" placeholder="Sisi B">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Oli Masuk Mesin</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveomma" id="input[oli_masuk_mesin_a]" name="input[oli_masuk_mesin_a]" placeholder="A">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveommb" id="input[oli_masuk_mesin_b]" name="input[oli_masuk_mesin_b]" placeholder="B">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Oli Radiator</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveorm" id="input[oli_radiator_masuk]" name="input[oli_radiator_masuk]" placeholder="Masuk">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveork" id="input[oli_radiator_keluar]" name="input[oli_radiator_keluar]" placeholder="Keluar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Air Pendingin Masuk Mesin</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveapmma" id="input[air_pendingin_masuk_mesin_a]" name="input[air_pendingin_masuk_mesin_a]" placeholder="A">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveapmmb" id="input[air_pendingin_masuk_mesin_b]" name="input[air_pendingin_masuk_mesin_b]" placeholder="B">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Air Pendingin Radiator</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveaprm" id="input[air_pendingin_radiator_masuk]" name="input[air_pendingin_radiator_masuk]" placeholder="Masuk">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveaprk" id="input[air_pendingin_radiator_keluar]" name="input[air_pendingin_radiator_keluar]" placeholder="Keluar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Air Pendingin Injektor</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveapim" id="input[air_pendingin_injektor_masuk]" name="input[air_pendingin_injektor_masuk]" placeholder="Masuk">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzveapik" id="input[air_pendingin_injektor_keluar]" name="input[air_pendingin_injektor_keluar]" placeholder="Keluar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Air Pendingin Keluar Silider Sisi A</label>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzveapkssa1a" id="input[air_pendingin_keluar_silinder_sisi_a_1]" name="input[air_pendingin_keluar_silinder_sisi_a_1]" placeholder="1A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzveapkssa2a" id="input[air_pendingin_keluar_silinder_sisi_a_2]" name="input[air_pendingin_keluar_silinder_sisi_a_2]" placeholder="2A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzveapkssa3a" id="input[air_pendingin_keluar_silinder_sisi_a_3]" name="input[air_pendingin_keluar_silinder_sisi_a_3]" placeholder="3 A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzveapkssa4a" id="input[air_pendingin_keluar_silinder_sisi_a_4]" name="input[air_pendingin_keluar_silinder_sisi_a_4]" placeholder="4 A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzveapkssa5a" id="input[air_pendingin_keluar_silinder_sisi_a_5]" name="input[air_pendingin_keluar_silinder_sisi_a_5]" placeholder="5 A">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-2 " style="margin-top: -20px;">
                                <input type="text" class="form-control lzveapkssa6a" id="input[air_pendingin_keluar_silinder_sisi_a_6]" name="input[air_pendingin_keluar_silinder_sisi_a_6]" placeholder="6 A">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Air Pendingin Keluar Silider Sisi B</label>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzveapkssa1b" id="input[air_pendingin_keluar_silinder_sisi_b_1]" name="input[air_pendingin_keluar_silinder_sisi_b_1]" placeholder="1A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzveapkssa2b" id="input[air_pendingin_keluar_silinder_sisi_b_2]" name="input[air_pendingin_keluar_silinder_sisi_b_2]" placeholder="2A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzveapkssa3b" id="input[air_pendingin_keluar_silinder_sisi_b_3]" name="input[air_pendingin_keluar_silinder_sisi_b_3]" placeholder="3 A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzveapkssa4b" id="input[air_pendingin_keluar_silinder_sisi_b_4]" name="input[air_pendingin_keluar_silinder_sisi_b_4]" placeholder="4 A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzveapkssa5b" id="input[air_pendingin_keluar_silinder_sisi_b_5]" name="input[air_pendingin_keluar_silinder_sisi_b_5]" placeholder="5 A">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-2" style="margin-top: -20px;">
                                <input type="text" class="form-control lzveapkssa6b" id="input[air_pendingin_keluar_silinder_sisi_b_6]" name="input[air_pendingin_keluar_silinder_sisi_b_6]" placeholder="6 A">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gas Buang Keluar Silider Sisi A</label>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvegbkssa1a" id="input[gas_buang_keluar_silinder_sisi_a_1]" name="input[gas_buang_keluar_silinder_sisi_a_1]" placeholder="1A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvegbkssa2a" id="input[gas_buang_keluar_silinder_sisi_a_2]" name="input[gas_buang_keluar_silinder_sisi_a_2]" placeholder="2A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvegbkssa3a" id="input[gas_buang_keluar_silinder_sisi_a_3]" name="input[gas_buang_keluar_silinder_sisi_a_3]" placeholder="3 A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvegbkssa4a" id="input[gas_buang_keluar_silinder_sisi_a_4]" name="input[gas_buang_keluar_silinder_sisi_a_4]" placeholder="4 A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvegbkssa5a" id="input[gas_buang_keluar_silinder_sisi_a_5]" name="input[gas_buang_keluar_silinder_sisi_a_5]" placeholder="5 A">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-2" style="margin-top: -20px;">
                                <input type="text" class="form-control lzvegbkssa6a" id="input[gas_buang_keluar_silinder_sisi_a_6]" name="input[gas_buang_keluar_silinder_sisi_a_6]" placeholder="6 A">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gas Buang Keluar Silider Sisi B</label>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvegbkssa1b" id="input[gas_buang_keluar_silinder_sisi_b_1]" name="input[gas_buang_keluar_silinder_sisi_b_1]" placeholder="1A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvegbkssa2b" id="input[gas_buang_keluar_silinder_sisi_b_2]" name="input[gas_buang_keluar_silinder_sisi_b_2]" placeholder="2A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvegbkssa3b" id="input[gas_buang_keluar_silinder_sisi_b_3]" name="input[gas_buang_keluar_silinder_sisi_b_3]" placeholder="3 A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvegbkssa4b" id="input[gas_buang_keluar_silinder_sisi_b_4]" name="input[gas_buang_keluar_silinder_sisi_b_4]" placeholder="4 A">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvegbkssa5b" id="input[gas_buang_keluar_silinder_sisi_b_5]" name="input[gas_buang_keluar_silinder_sisi_b_5]" placeholder="5 A">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-2" style="margin-top: -20px;">
                                <input type="text" class="form-control lzvegbkssa6b" id="input[gas_buang_keluar_silinder_sisi_b_6]" name="input[gas_buang_keluar_silinder_sisi_b_6]" placeholder="6 A">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Main Bearing</label>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvemb1" id="input[main_bearing_1]" name="input[main_bearing_1]" placeholder="1">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvemb2" id="input[main_bearing_2]" name="input[main_bearing_2]" placeholder="2">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvemb3" id="input[main_bearing_3]" name="input[main_bearing_3]" placeholder="3">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvemb4" id="input[main_bearing_4]" name="input[main_bearing_4]" placeholder="4">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvemb5" id="input[main_bearing_5]" name="input[main_bearing_5]" placeholder="5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvemb6" id="input[main_bearing_6]" name="input[main_bearing_6]" placeholder="6">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvemb7" id="input[main_bearing_7]" name="input[main_bearing_7]" placeholder="7">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvemb8" id="input[main_bearing_8]" name="input[main_bearing_8]" placeholder="8">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lzvemb9" id="input[main_bearing_9]" name="input[main_bearing_9]" placeholder="9">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Turbo Masuk A</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzvetmam" id="input[turbo_a_masuk]" name="input[turbo_a_masuk]" placeholder="Masuk">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzvetmak" id="input[turbo_a_keluar]" name="input[turbo_a_keluar]" placeholder="Keluar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Turbo Masuk B</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzvetmbm" id="input[turbo_b_masuk]" name="input[turbo_b_masuk]" placeholder="Masuk">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzvetmbk" id="input[turbo_b_keluar]" name="input[turbo_b_keluar]" placeholder="Keluar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Turbo Keluar</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzvetka" id="input[turbo_keluar_a]" name="input[turbo_keluar_a]" placeholder="A">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lzvetkb" id="input[turbo_keluar_b]" name="input[turbo_keluar_b]" placeholder="B">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[air_pendingin_keluar_mesin]" class="col-sm-2 col-form-label">Air Pendingin Keluar Mesin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control lzveapkm" id="input[air_pendingin_keluar_mesin]" name="input[air_pendingin_keluar_mesin]" placeholder="Air Pendingin Keluar Mesin">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[bahan_bakar_masuk_mesin]" class="col-sm-2 col-form-label">Bahan Bakar Masuk Mesin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control lzvebbmm" id="input[bahan_bakar_masuk_mesin]" name="input[bahan_bakar_masuk_mesin]" placeholder="Bahan Bakar Masuk Mesin">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input[rack_bahan_bakar]" class="col-sm-2 col-form-label">Rack Bahan Bakar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[rack_bahan_bakar]" name="input[rack_bahan_bakar]" placeholder="Rack Bahan Bakar">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input[governor_load_limit]" class="col-sm-2 col-form-label">Governor Load Limit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[governor_load_limit]" name="input[governor_load_limit]" placeholder="Governor Load Limit">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Tekanan ( Bar )
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="input[udara_start]" class="col-sm-2 col-form-label">Udara Start</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[udara_start]" name="input[udara_start]" placeholder="Udara Start">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Presure Udara Masuk</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[presure_udara_masuk_sisi_a]" name="input[presure_udara_masuk_sisi_a]" placeholder="A">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[presure_udara_masuk_sisi_b]" name="input[presure_udara_masuk_sisi_b]" placeholder="B">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[udara_masuk_ab]" class="col-sm-2 col-form-label">Udara Masuk A & B</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[udara_masuk_ab]" name="input[udara_masuk_ab]" placeholder="Udara Masuk A & B">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[bahan_bakar_masuk_mesin]" class="col-sm-2 col-form-label">Bahan Bakar Masuk Mesin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[bahan_bakar_masuk_mesin1]" name="input[bahan_bakar_masuk_mesin1]" placeholder="Bahan Bakar Masuk Mesin">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[minyak_pelumas]" class="col-sm-2 col-form-label">Minyak Pelumas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[minyak_pelumas]" name="input[minyak_pelumas]" placeholder="Minyak Pelumas">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[air_pendingin_mesin]" class="col-sm-2 col-form-label">Air Pendingin Mesin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[air_pendingin_mesin]" name="input[air_pendingin_mesin]" placeholder="Air Pendingin Mesin">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[air_pendingin_injektor]" class="col-sm-2 col-form-label">Air Pendingin Injektor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[air_pendingin_injektor]" name="input[air_pendingin_injektor]" placeholder="Air Pendingin Injektor">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Udara Masuk Disalurkan</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[udara_masuk_disalurkan_sisi_a]" name="input[udara_masuk_disalurkan_sisi_a]" placeholder="A">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[udara_masuk_disalurkan_sisi_b]" name="input[udara_masuk_disalurkan_sisi_b]" placeholder="B">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Putaran Turbo X 1000</label>
                    <div class="col-sm-5 mt-2">
                        <input type="text" class="form-control" id="input[putaran_turbo_sisi_a]" name="input[putaran_turbo_sisi_a]" placeholder="A">
                    </div>
                    <div class="col-sm-5 mt-2">
                        <input type="text" class="form-control" id="input[putaran_turbo_sisi_b]" name="input[putaran_turbo_sisi_b]" placeholder="B">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input[tekanan_oli_pada_separator]" class="col-sm-2 col-form-label">Tekanan Oli Pada Sparator</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[tekanan_oli_pada_separator]" name="input[tekanan_oli_pada_separator]" placeholder="Tekanan Oli Pada Sparator">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input[ampere_pompa_ali]" class="col-sm-2 col-form-label">Ampere Pompa Ali</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[ampere_pompa_ali]" name="input[ampere_pompa_ali]" placeholder="Ampere Pompa Ali">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input[ampere_pompa_jw]" class="col-sm-2 col-form-label">Ampere Pompa JW</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[ampere_pompa_jw]" name="input[ampere_pompa_jw]" placeholder="Ampere Pompa JW">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Sikap Flow Meter Bahan Bakar
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">MFO</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[mfo_in]" name="input[mfo_in]" placeholder="In">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[mfo_return]" name="input[mfo_return]" placeholder="Return">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[hsd]" class="col-sm-2 col-form-label">HSD</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[hsd]" name="input[hsd]" placeholder="HSD">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[operator]" class="col-sm-2 col-form-label">Operator</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[operator]" name="input[operator]" placeholder="Operator">
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