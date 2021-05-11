<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_ruston/edit'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Ubah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="pk[pk_ruston]" value="<?= $edit['pk_ruston']; ?>">
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

                            <h4 class="mt-3">Air Pendingin</h4>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jacket Water</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lrssapjwm" id="input[air_pendingin_jacket_water_masuk]" value="<?= $edit['air_pendingin_jacket_water_masuk'] ?>" name="input[air_pendingin_jacket_water_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lrssapjwk" id="input[air_pendingin_jacket_water_keluar]" value="<?= $edit['air_pendingin_jacket_water_keluar'] ?>" name="input[air_pendingin_jacket_water_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Raw Water</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lrssaprwm" id="input[air_pendingin_raw_water_masuk]" value="<?= $edit['air_pendingin_raw_water_masuk'] ?>" name="input[air_pendingin_raw_water_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lrssaprwk" id="input[air_pendingin_raw_water_keluar]" value="<?= $edit['air_pendingin_raw_water_keluar'] ?>" name="input[air_pendingin_raw_water_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <h4 class="mt-3"></h4>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Minyak Pelumas</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lrssmpm" id="input[minyak_pelumas_masuk]" value="<?= $edit['minyak_pelumas_masuk'] ?>" name="input[minyak_pelumas_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lrssmpk" id="input[minyak_pelumas_keluar]" value="<?= $edit['minyak_pelumas_keluar'] ?>" name="input[minyak_pelumas_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lrssum" id="input[suhu_udara_masuk]" value="<?= $edit['suhu_udara_masuk'] ?>" name="input[suhu_udara_masuk]">
                                    </div>
                                </div>
                            </li>

                            <h4 class="mt-3">Gas Buang</h4>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Silinder Sisi A</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lrssgbssa1" id="input[gas_buang_silinder_sisi_a_1]" value="<?= $edit['gas_buang_silinder_sisi_a_1'] ?>" name="input[gas_buang_silinder_sisi_a_1]" placeholder="1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lrssgbssa2" id="input[gas_buang_silinder_sisi_a_2]" value="<?= $edit['gas_buang_silinder_sisi_a_2'] ?>" name="input[gas_buang_silinder_sisi_a_2]" placeholder="2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lrssgbssa3" id="input[gas_buang_silinder_sisi_a_3]" value="<?= $edit['gas_buang_silinder_sisi_a_3'] ?>" name="input[gas_buang_silinder_sisi_a_3]" placeholder="3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lrssgbssa4" id="input[gas_buang_silinder_sisi_a_4]" value="<?= $edit['gas_buang_silinder_sisi_a_4'] ?>" name="input[gas_buang_silinder_sisi_a_4]" placeholder="4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Silinder Sisi B</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lrssgbssb1" id="input[gas_buang_silinder_sisi_b_1]" value="<?= $edit['gas_buang_silinder_sisi_b_1'] ?>" name="input[gas_buang_silinder_sisi_b_1]" placeholder="1">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lrssgbssb2" id="input[gas_buang_silinder_sisi_b_2]" value="<?= $edit['gas_buang_silinder_sisi_b_2'] ?>" name="input[gas_buang_silinder_sisi_b_2]" placeholder="2">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lrssgbssb3" id="input[gas_buang_silinder_sisi_b_3]" value="<?= $edit['gas_buang_silinder_sisi_b_3'] ?>" name="input[gas_buang_silinder_sisi_b_3]" placeholder="3">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control lrssgbssb4" id="input[gas_buang_silinder_sisi_b_4]" value="<?= $edit['gas_buang_silinder_sisi_b_4'] ?>" name="input[gas_buang_silinder_sisi_b_4]" placeholder="4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sebelum Turbo</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control lrssgbst1a" id="input[sebelum_turbo_a1]" value="<?= $edit['sebelum_turbo_a1'] ?>" name="input[sebelum_turbo_a1]" placeholder="1A">
                                            </div>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control lrssgbst2a" id="input[sebelum_turbo_a2]" value="<?= $edit['sebelum_turbo_a2'] ?>" name="input[sebelum_turbo_a2]" placeholder="2A">
                                            </div>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control lrssgbst3a" id="input[sebelum_turbo_a3]" value="<?= $edit['sebelum_turbo_a3'] ?>" name="input[sebelum_turbo_a3]" placeholder="3A">
                                            </div>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control lrssgbst4a" id="input[sebelum_turbo_a4]" value="<?= $edit['sebelum_turbo_a4'] ?>" name="input[sebelum_turbo_a4]" placeholder="4A">
                                            </div>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control lrssgbst1b" id="input[sebelum_turbo_b1]" value="<?= $edit['sebelum_turbo_b1'] ?>" name="input[sebelum_turbo_b1]" placeholder="1B">
                                            </div>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control lrssgbst2b" id="input[sebelum_turbo_b2]" value="<?= $edit['sebelum_turbo_b2'] ?>" name="input[sebelum_turbo_b2]" placeholder="2B">
                                            </div>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control lrssgbst3b" id="input[sebelum_turbo_b3]" value="<?= $edit['sebelum_turbo_b3'] ?>" name="input[sebelum_turbo_b3]" placeholder="3B">
                                            </div>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control lrssgbst4b" id="input[sebelum_turbo_b4]" value="<?= $edit['sebelum_turbo_b4'] ?>" name="input[sebelum_turbo_b4]" placeholder="4B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Minyak Disaringan</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lrssmdm" id="input[minyak_disaringan_masuk]" value="<?= $edit['minyak_disaringan_masuk'] ?>" name="input[minyak_disaringan_masuk]" placeholder="Sisi A">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control lrssmdk" id="input[minyak_disaringan_keluar]" value="<?= $edit['minyak_disaringan_keluar'] ?>" name="input[minyak_disaringan_keluar]" placeholder="Sisi B">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
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
                                    <label class="col-sm-2 col-form-label">Pelumas</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[pelumas_dipanel]" value="<?= $edit['pelumas_dipanel'] ?>" name="input[pelumas_dipanel]" placeholder="Dipanel">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[pelumas_dimesin]" value="<?= $edit['pelumas_dimesin'] ?>" name="input[pelumas_dimesin]" placeholder="Dimesin">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bahan Bakar Disaringan</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[bahan_bakar_disaringan_masuk]" value="<?= $edit['bahan_bakar_disaringan_masuk'] ?>" name="input[bahan_bakar_disaringan_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[bahan_bakar_disaringan_keluar]" value="<?= $edit['bahan_bakar_disaringan_keluar'] ?>" name="input[bahan_bakar_disaringan_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pendinginan</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[pendinginan_jacket_water_masuk]" value="<?= $edit['pendinginan_jacket_water_masuk'] ?>" name="input[pendinginan_jacket_water_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[pendinginan_raw_water_masuk]" value="<?= $edit['pendinginan_raw_water_masuk'] ?>" name="input[pendinginan_raw_water_masuk]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[tekanan_udara_masuk]" value="<?= $edit['tekanan_udara_masuk'] ?>" name="input[tekanan_udara_masuk]">
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Load Limit Governor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[load_limit_governor]" value="<?= $edit['load_limit_governor'] ?>" name="input[load_limit_governor]">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-light">
                        Generator
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Frekwensi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[frekwensi]" value="<?= $edit['frekwensi'] ?>" name="input[frekwensi]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Faktor Daya</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[faktor_daya]" value="<?= $edit['faktor_daya'] ?>" name="input[faktor_daya]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tegangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input[tegangan]" value="<?= $edit['tegangan'] ?>" name="input[tegangan]">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Arus</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[arus_r]" value="<?= $edit['arus_r'] ?>" name="input[arus_r]" placeholder="R">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[arus_s]" value="<?= $edit['arus_s'] ?>" name="input[arus_s]" placeholder="S">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input[arus_t]" value="<?= $edit['arus_t'] ?>" name="input[arus_t]" placeholder="T">
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
                                                <input type="text" class="form-control" id="input[penguat_medan_tegangan]" value="<?= $edit['penguat_medan_tegangan'] ?>" name="input[penguat_medan_tegangan]" placeholder="Tegangan">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input[penguat_medan_arus]" value="<?= $edit['penguat_medan_arus'] ?>" name="input[penguat_medan_arus]" placeholder="Arus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Beban</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[beban]" value="<?= $edit['beban'] ?>" name="input[beban]">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">KWH Produksi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[kwh_produksi]" value="<?= $edit['kwh_produksi'] ?>" name="input[kwh_produksi]">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Flow Meter Bahan Bakar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[flow_meter_bahan_bakar]" value="<?= $edit['flow_meter_bahan_bakar'] ?>" name="input[flow_meter_bahan_bakar]">
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