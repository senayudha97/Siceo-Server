<div class="container-fluid">
    <h2 class="mb-5">Ubah Data <?= $title; ?></h2>

    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_paok_motong_perjaman_mesin/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="text" name="pk[pk_perjaman_mesin]" value="<?= $edit['pk_perjaman_mesin']; ?>">
                    <input type="text" name="input[update_by]" value="<?= $user['id']; ?>">
                </div>
                <div class="form-group row">
                    <label for="tanggal_input" class="col-sm-2 col-form-label">Tanggal & Mesin</label>
                    <div class="col-sm-5">
                        <input type="text" readonly placeholder="Klik untuk input tanggal" class="form-control easydatepicker" id="tanggal_input" value="<?= content_date($edit['tanggal_input']) ?>" name="input[tanggal_input]">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Masukan Nomor Mesin" id="mesin" value="<?= $edit['mesin'] ?>" name="input[mesin]">
                        <!-- <select name="input[fk_mesin]" class="form-control" id="mesin">
                            <option value="" selected>Input Tanggal Terlebih Dahulu</option>
                        </select> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control easytimepicker" placeholder="Klik untuk input waktu" id="waktu" value="<?= $edit['waktu'] ?>" name="input[waktu]">
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
                                                <input type="text" class="form-control lpmgbc" id="udara_masuk_l" value="<?= $edit['udara_masuk_l'] ?>" name="input[udara_masuk_l]" placeholder="L">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmgbc" id="udara_masuk_r" value="<?= $edit['udara_masuk_r'] ?>" name="input[udara_masuk_r]" placeholder="R">
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
                                                <input type="text" class="form-control lpmtk" id="minyak_pelumas_masuk_mesin_l" value="<?= $edit['minyak_pelumas_masuk_mesin_l'] ?>" name="input[minyak_pelumas_masuk_mesin_l]" placeholder="L">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="minyak_pelumas_masuk_mesin_r" value="<?= $edit['minyak_pelumas_masuk_mesin_r'] ?>" name="input[minyak_pelumas_masuk_mesin_r]" placeholder="R">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Radiator</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="minyak_pelumas_radiator_masuk" value="<?= $edit['minyak_pelumas_radiator_masuk'] ?>" name="input[minyak_pelumas_radiator_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="minyak_pelumas_radiator_keluar" value="<?= $edit['minyak_pelumas_radiator_keluar'] ?>" name="input[minyak_pelumas_radiator_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h4>Air Pendingin Mesin</h4>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mesin Masuk</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_mesin_masuk_l" value="<?= $edit['air_pendingin_mesin_masuk_l'] ?>" name="input[air_pendingin_mesin_masuk_l]" placeholder="L">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_mesin_masuk_r" value="<?= $edit['air_pendingin_mesin_masuk_r'] ?>" name="input[air_pendingin_mesin_masuk_r]" placeholder="R">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Radiator</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_radiator_masuk" value="<?= $edit['air_pendingin_radiator_masuk'] ?>" name="input[air_pendingin_radiator_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_radiator_keluar" value="<?= $edit['air_pendingin_radiator_keluar'] ?>" name="input[air_pendingin_radiator_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Injektor</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_injektor_masuk" value="<?= $edit['air_pendingin_injektor_masuk'] ?>" name="input[air_pendingin_injektor_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtk" id="air_pendingin_injektor_keluar" value="<?= $edit['air_pendingin_injektor_keluar'] ?>" name="input[air_pendingin_injektor_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Cylinder L</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_l_1" value="<?= $edit['keluar_cylinder_l_1'] ?>" name="input[keluar_cylinder_l_1]" placeholder="1">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_l_2" value="<?= $edit['keluar_cylinder_l_2'] ?>" name="input[keluar_cylinder_l_2]" placeholder="2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_l_3" value="<?= $edit['keluar_cylinder_l_3'] ?>" name="input[keluar_cylinder_l_3]" placeholder="3">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_l_4" value="<?= $edit['keluar_cylinder_l_4'] ?>" name="input[keluar_cylinder_l_4]" placeholder="4">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_l_5" value="<?= $edit['keluar_cylinder_l_5'] ?>" name="input[keluar_cylinder_l_5]" placeholder="5">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_l_6" value="<?= $edit['keluar_cylinder_l_6'] ?>" name="input[keluar_cylinder_l_6]" placeholder="6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Cylinder R</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_r_1" value="<?= $edit['keluar_cylinder_r_1'] ?>" name="input[keluar_cylinder_r_1]" placeholder="1">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_r_2" value="<?= $edit['keluar_cylinder_r_2'] ?>" name="input[keluar_cylinder_r_2]" placeholder="2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_r_3" value="<?= $edit['keluar_cylinder_r_3'] ?>" name="input[keluar_cylinder_r_3]" placeholder="3">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_r_4" value="<?= $edit['keluar_cylinder_r_4'] ?>" name="input[keluar_cylinder_r_4]" placeholder="4">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_r_5" value="<?= $edit['keluar_cylinder_r_5'] ?>" name="input[keluar_cylinder_r_5]" placeholder="5">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="keluar_cylinder_r_6" value="<?= $edit['keluar_cylinder_r_6'] ?>" name="input[keluar_cylinder_r_6]" placeholder="6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gas Buang Cylinder L</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="gas_buang_cylinder_l_1" value="<?= $edit['gas_buang_cylinder_l_1'] ?>" name="input[gas_buang_cylinder_l_1]" placeholder="1">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="gas_buang_cylinder_l_2" value="<?= $edit['gas_buang_cylinder_l_2'] ?>" name="input[gas_buang_cylinder_l_2]" placeholder="2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="gas_buang_cylinder_l_3" value="<?= $edit['gas_buang_cylinder_l_3'] ?>" name="input[gas_buang_cylinder_l_3]" placeholder="3">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="gas_buang_cylinder_l_4" value="<?= $edit['gas_buang_cylinder_l_4'] ?>" name="input[gas_buang_cylinder_l_4]" placeholder="4">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="gas_buang_cylinder_l_5" value="<?= $edit['gas_buang_cylinder_l_5'] ?>" name="input[gas_buang_cylinder_l_5]" placeholder="5">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmtk" id="gas_buang_cylinder_l_6" value="<?= $edit['gas_buang_cylinder_l_6'] ?>" name="input[gas_buang_cylinder_l_6]" placeholder="6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="flow_meter_bahan_bakar" class="col-sm-2 col-form-label">Flow Meter Bahan Bakar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="flow_meter_bahan_bakar" value="<?= $edit['flow_meter_bahan_bakar'] ?>" name="input[flow_meter_bahan_bakar]">
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
                                    <label class="col-sm-2 col-form-label">Gas Buang Cylinder R</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmgbc" id="gas1" value="<?= $edit['gas1'] ?>" name="input[gas1]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmgbc" id="gas2" value="<?= $edit['gas2'] ?>" name="input[gas2]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmgbc" id="gas3" value="<?= $edit['gas3'] ?>" name="input[gas3]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmgbc" id="gas4" value="<?= $edit['gas4'] ?>" name="input[gas4]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmgbc" id="gas5" value="<?= $edit['gas5'] ?>" name="input[gas5]">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control lpmgbc" id="gas6" value="<?= $edit['gas6'] ?>" name="input[gas6]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Turbo Masuk</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lpmtk" id="turbo_masuk_kiri_atas" value="<?= $edit['turbo_masuk_kiri_atas'] ?>" name="input[turbo_masuk_kiri_atas]" placeholder="kiri atas">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lpmtk" id="turbo_masuk_kiri_bawah" value="<?= $edit['turbo_masuk_kiri_bawah'] ?>" name="input[turbo_masuk_kiri_bawah]" placeholder="kiri bawah">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lpmtk" id="turbo_masuk_kanan_atas" value="<?= $edit['turbo_masuk_kanan_atas'] ?>" name="input[turbo_masuk_kanan_atas]" placeholder="kanan atas">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lpmtk" id="turbo_masuk_kanan_bawah" value="<?= $edit['turbo_masuk_kanan_bawah'] ?>" name="input[turbo_masuk_kanan_bawah]" placeholder="kanan bawah">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Turbo Keluar</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtm" id="turbo_keluar_kiri" value="<?= $edit['turbo_keluar_kiri'] ?>" name="input[turbo_keluar_kiri]" placeholder="kiri">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lpmtm" id="turbo_keluar_kanan" value="<?= $edit['turbo_keluar_kanan'] ?>" name="input[turbo_keluar_kanan]" placeholder="kanan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="rak_bbm" class="col-sm-2 col-form-label">Rak BBM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="rak_bbm" value="<?= $edit['rak_bbm'] ?>" name="input[rak_bbm]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="governor_load_limit" class="col-sm-2 col-form-label">Governor Load Limit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="governor_load_limit" value="<?= $edit['governor_load_limit'] ?>" name="input[governor_load_limit]">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Tekanan (BAR)
                    </div>
                    <div class="card-body">
                        <ul class="list-group">

                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="air_ped_injektor" class="col-sm-2 col-form-label">Air Ped. Injektor</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="air_ped_injektor" value="<?= $edit['air_ped_injektor'] ?>" name="input[air_ped_injektor]" placeholder="2 - 4,5">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="pelumasan_mesin" class="col-sm-2 col-form-label">Pelumasan Mesin</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pelumasan_mesin" value="<?= $edit['pelumasan_mesin'] ?>" name="input[pelumasan_mesin]" placeholder="4 - 7">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk</label>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="udara_masuk_kiri" value="<?= $edit['udara_masuk_kiri'] ?>" name="input[udara_masuk_kiri]" placeholder="kiri">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="udara_masuk_kanan" value="<?= $edit['udara_masuk_kanan'] ?>" name="input[udara_masuk_kanan]" placeholder="kanan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="bahan_bakar_mesin" class="col-sm-2 col-form-label">Bahan Bakar Mesin</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="bahan_bakar_mesin" value="<?= $edit['bahan_bakar_mesin'] ?>" name="input[bahan_bakar_mesin]" placeholder="4 - 6">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="udara_masuk" class="col-sm-2 col-form-label">Udara Masuk</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="udara_masuk" value="<?= $edit['udara_masuk'] ?>" name="input[udara_masuk]" placeholder="0.5 - 2">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="udara_start" class="col-sm-2 col-form-label">Udara Start</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="udara_start" value="<?= $edit['udara_start'] ?>" name="input[udara_start]" placeholder="15 - 20">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="air_pend_masuk_mesin" class="col-sm-2 col-form-label">Air Pend. Masuk Mesin</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="air_pend_masuk_mesin" value="<?= $edit['air_pend_masuk_mesin'] ?>" name="input[air_pend_masuk_mesin]" placeholder="2 - 4.5">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Putaran Turbo (RPM)</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="putaran_turbo_kiri" value="<?= $edit['putaran_turbo_kiri'] ?>" name="input[putaran_turbo_kiri]" placeholder="kiri">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="putaran_turbo_kanan" value="<?= $edit['putaran_turbo_kanan'] ?>" name="input[putaran_turbo_kanan]" placeholder="kanan">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_penyulang" class="col-sm-2 col-form-label">Temperatur Bearing</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" id="bearing1" value="<?= $edit['bearing1'] ?>" name="input[bearing1]">
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="bearing2" value="<?= $edit['bearing2'] ?>" name="input[bearing2]">
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="bearing3" value="<?= $edit['bearing3'] ?>" name="input[bearing3]">
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="bearing4" value="<?= $edit['bearing4'] ?>" name="input[bearing4]">
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="bearing5" value="<?= $edit['bearing5'] ?>" name="input[bearing5]">
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="bearing6" value="<?= $edit['bearing6'] ?>" name="input[bearing6]">
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="bearing7" value="<?= $edit['bearing7'] ?>" name="input[bearing7]">
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="bearing8" value="<?= $edit['bearing8'] ?>" name="input[bearing8]">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-end">
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary   mb-3">Ubah Data</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
</div>