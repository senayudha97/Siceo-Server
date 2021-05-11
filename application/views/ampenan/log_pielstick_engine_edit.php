<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_pielstick_engine/edit'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Ubah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="pk[pk_pielstick_engine]" value="<?= $edit['pk_pielstick_engine']; ?>">
                    <input type="text" name="input[update_by]" value="<?= $user['id']; ?>">
                </div>

                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easydatepicker" id="tanggal_input" value="<?= content_date($edit['tanggal_input']) ?>" name="input[tanggal_input]" placeholder="Klik untuk input tanggal" readonly>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easytimepicker" id="input[waktu]" value="<?= $edit['waktu'] ?>" name="input[waktu]" readonly placeholder="Klik untuk input waktu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input[mesin]" class="col-sm-2 col-form-label">Mesin & Generator</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="mesin" value="<?= $edit['mesin'] ?>" name="input[mesin]" placeholder="Nomor Mesin">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="input[generator]" value="<?= $edit['generator'] ?>" name="input[generator]" placeholder="Generator">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Suhu
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpeumsa" id="input[udara_masuk_sisi_a]" value="<?= $edit['udara_masuk_sisi_a'] ?>" name="input[udara_masuk_sisi_a]" placeholder="Sisi A">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpeumsb" id="input[udara_masuk_sisi_b]" value="<?= $edit['udara_masuk_sisi_b'] ?>" name="input[udara_masuk_sisi_b]" placeholder="Sisi B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Minyak Pelumas</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpempm" id="input[minyak_pelumas_masuk]" value="<?= $edit['minyak_pelumas_masuk'] ?>" name="input[minyak_pelumas_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpempk" id="input[minyak_pelumas_keluar]" value="<?= $edit['minyak_pelumas_keluar'] ?>" name="input[minyak_pelumas_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <h4 class="mt-3">Air Pendingin</h4>

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Masuk Mesin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpeapmm" id="input[air_pendingin_masuk_mesin]" value="<?= $edit['air_pendingin_masuk_mesin'] ?>" name="input[air_pendingin_masuk_mesin]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Mesin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lpeapkm" id="input[air_pendingin_keluar_mesin]" value="<?= $edit['air_pendingin_keluar_mesin'] ?>" name="input[air_pendingin_keluar_mesin]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Masuk Cooler</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpeapmcsa" id="input[masuk_cooler_sisi_a]" value="<?= $edit['masuk_cooler_sisi_a'] ?>" name="input[masuk_cooler_sisi_a]" placeholder="Sisi A">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpeapmcsb" id="input[masuk_cooler_sisi_b]" value="<?= $edit['masuk_cooler_sisi_b'] ?>" name="input[masuk_cooler_sisi_b]" placeholder="Sisi B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Cooler</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpeapkcsa" id="input[keluar_cooler_sisi_a]" value="<?= $edit['keluar_cooler_sisi_a'] ?>" name="input[keluar_cooler_sisi_a]" placeholder="Sisi A">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpeapkcsb" id="input[keluar_cooler_sisi_b]" value="<?= $edit['keluar_cooler_sisi_b'] ?>" name="input[keluar_cooler_sisi_b]" placeholder="Sisi B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Injector</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpeapim" id="input[injector_masuk]" value="<?= $edit['injector_masuk'] ?>" name="input[injector_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpeapik" id="input[injector_keluar]" value="<?= $edit['injector_keluar'] ?>" name="input[injector_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Silinder Sisi A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksa1" id="input[air_pendingin_keluar_silinder_sisi_a1]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_a1'] ?>" name="input[air_pendingin_keluar_silinder_sisi_a1]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksa2" id="input[air_pendingin_keluar_silinder_sisi_a2]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_a2'] ?>" name="input[air_pendingin_keluar_silinder_sisi_a2]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksa3" id="input[air_pendingin_keluar_silinder_sisi_a3]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_a3'] ?>" name="input[air_pendingin_keluar_silinder_sisi_a3]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksa4" id="input[air_pendingin_keluar_silinder_sisi_a4]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_a4'] ?>" name="input[air_pendingin_keluar_silinder_sisi_a4]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksa5" id="input[air_pendingin_keluar_silinder_sisi_a5]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_a5'] ?>" name="input[air_pendingin_keluar_silinder_sisi_a5]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksa6" id="input[air_pendingin_keluar_silinder_sisi_a6]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_a6'] ?>" name="input[air_pendingin_keluar_silinder_sisi_a6]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Silinder Sisi B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksb1" id="input[air_pendingin_keluar_silinder_sisi_b1]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_b1'] ?>" name="input[air_pendingin_keluar_silinder_sisi_b1]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksb2" id="input[air_pendingin_keluar_silinder_sisi_b2]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_b2'] ?>" name="input[air_pendingin_keluar_silinder_sisi_b2]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksb3" id="input[air_pendingin_keluar_silinder_sisi_b3]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_b3'] ?>" name="input[air_pendingin_keluar_silinder_sisi_b3]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksb4" id="input[air_pendingin_keluar_silinder_sisi_b4]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_b4'] ?>" name="input[air_pendingin_keluar_silinder_sisi_b4]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksb5" id="input[air_pendingin_keluar_silinder_sisi_b5]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_b5'] ?>" name="input[air_pendingin_keluar_silinder_sisi_b5]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpeapksb6" id="input[air_pendingin_keluar_silinder_sisi_b6]" value="<?= $edit['air_pendingin_keluar_silinder_sisi_b6'] ?>" name="input[air_pendingin_keluar_silinder_sisi_b6]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <h4 class="mt-3">Gas Buang</h4>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Silinder Sisi A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksa1" id="input[gas_buang_keluar_silinder_sisi_a_1]" value="<?= $edit['gas_buang_keluar_silinder_sisi_a_1'] ?>" name="input[gas_buang_keluar_silinder_sisi_a_1]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksa2" id="input[gas_buang_keluar_silinder_sisi_a_2]" value="<?= $edit['gas_buang_keluar_silinder_sisi_a_2'] ?>" name="input[gas_buang_keluar_silinder_sisi_a_2]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksa3" id="input[gas_buang_keluar_silinder_sisi_a_3]" value="<?= $edit['gas_buang_keluar_silinder_sisi_a_3'] ?>" name="input[gas_buang_keluar_silinder_sisi_a_3]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksa4" id="input[gas_buang_keluar_silinder_sisi_a_4]" value="<?= $edit['gas_buang_keluar_silinder_sisi_a_4'] ?>" name="input[gas_buang_keluar_silinder_sisi_a_4]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksa5" id="input[gas_buang_keluar_silinder_sisi_a_5]" value="<?= $edit['gas_buang_keluar_silinder_sisi_a_5'] ?>" name="input[gas_buang_keluar_silinder_sisi_a_5]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksa6" id="input[gas_buang_keluar_silinder_sisi_a_6]" value="<?= $edit['gas_buang_keluar_silinder_sisi_a_6'] ?>" name="input[gas_buang_keluar_silinder_sisi_a_6]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Silinder Sisi B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksb1" id="input[gas_buang_keluar_silinder_sisi_b_1]" value="<?= $edit['gas_buang_keluar_silinder_sisi_b_1'] ?>" name="input[gas_buang_keluar_silinder_sisi_b_1]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksb2" id="input[gas_buang_keluar_silinder_sisi_b_2]" value="<?= $edit['gas_buang_keluar_silinder_sisi_b_2'] ?>" name="input[gas_buang_keluar_silinder_sisi_b_2]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksb3" id="input[gas_buang_keluar_silinder_sisi_b_3]" value="<?= $edit['gas_buang_keluar_silinder_sisi_b_3'] ?>" name="input[gas_buang_keluar_silinder_sisi_b_3]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksb4" id="input[gas_buang_keluar_silinder_sisi_b_4]" value="<?= $edit['gas_buang_keluar_silinder_sisi_b_4'] ?>" name="input[gas_buang_keluar_silinder_sisi_b_4]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksb5" id="input[gas_buang_keluar_silinder_sisi_b_5]" value="<?= $edit['gas_buang_keluar_silinder_sisi_b_5'] ?>" name="input[gas_buang_keluar_silinder_sisi_b_5]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpegbksb6" id="input[gas_buang_keluar_silinder_sisi_b_6]" value="<?= $edit['gas_buang_keluar_silinder_sisi_b_6'] ?>" name="input[gas_buang_keluar_silinder_sisi_b_6]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <h4 class="mt-3"></h4>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Main Bearing</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[main_bearing1]" value="<?= $edit['main_bearing1'] ?>" name="input[main_bearing1]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[main_bearing2]" value="<?= $edit['main_bearing2'] ?>" name="input[main_bearing2]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[main_bearing3]" value="<?= $edit['main_bearing3'] ?>" name="input[main_bearing3]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[main_bearing4]" value="<?= $edit['main_bearing4'] ?>" name="input[main_bearing4]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[main_bearing5]" value="<?= $edit['main_bearing5'] ?>" name="input[main_bearing5]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[main_bearing6]" value="<?= $edit['main_bearing6'] ?>" name="input[main_bearing6]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input[main_bearing7]" value="<?= $edit['main_bearing7'] ?>" name="input[main_bearing7]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Suhu Ruangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control lpesr" id="input[suhu_ruangan]" value="<?= $edit['suhu_ruangan'] ?>" name="input[suhu_ruangan]">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Rack Bahan Bakar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[rack_bahan_bakar]" value="<?= $edit['rack_bahan_bakar'] ?>" name="input[rack_bahan_bakar]">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Governor Load Limit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[governor_load_limit]" value="<?= $edit['governor_load_limit'] ?>" name="input[governor_load_limit]">
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Tekanan
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Minyak Pelumas</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[tekanan_minyak_pelumas_masuk]" value="<?= $edit['tekanan_minyak_pelumas_masuk'] ?>" name="input[tekanan_minyak_pelumas_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[tekanan_minyak_pelumas_keluar]" value="<?= $edit['tekanan_minyak_pelumas_keluar'] ?>" name="input[tekanan_minyak_pelumas_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk Disalurkan</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[udara_masuk_disalurkan_sisi_a]" value="<?= $edit['udara_masuk_disalurkan_sisi_a'] ?>" name="input[udara_masuk_disalurkan_sisi_a]" placeholder="Sisi A">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[udara_masuk_disalurkan_sisi_b]" value="<?= $edit['udara_masuk_disalurkan_sisi_b'] ?>" name="input[udara_masuk_disalurkan_sisi_b]" placeholder="Sisi B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pelumas Rocker Arm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[pelumas_rocker_arm]" value="<?= $edit['pelumas_rocker_arm'] ?>" name="input[pelumas_rocker_arm]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bahan Bakar</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[bahan_bakar1]" value="<?= $edit['bahan_bakar1'] ?>" name="input[bahan_bakar1]">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[bahan_bakar2]" value="<?= $edit['bahan_bakar2'] ?>" name="input[bahan_bakar2]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Air Pendingin</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[air_pendingin_cw]" value="<?= $edit['air_pendingin_cw'] ?>" name="input[air_pendingin_cw]" placeholder="CW">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[air_pendingin_jw]" value="<?= $edit['air_pendingin_jw'] ?>" name="input[air_pendingin_jw]" placeholder="JW">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[air_pendingin_rw]" value="<?= $edit['air_pendingin_rw'] ?>" name="input[air_pendingin_rw]" placeholder="RW">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Putaran Turbo</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[putaran_turbo_sisi_a]" value="<?= $edit['putaran_turbo_sisi_a'] ?>" name="input[putaran_turbo_sisi_a]" placeholder="sisi A">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="input[putaran_turbo_sisi_b]" value="<?= $edit['putaran_turbo_sisi_b'] ?>" name="input[putaran_turbo_sisi_b]" placeholder="sisi B">
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