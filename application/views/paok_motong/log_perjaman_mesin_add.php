<div class="container-fluid">
    <h2 class="mb-5">Tambah Data <?= $title; ?></h2>

    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_paok_motong_perjaman_mesin/add'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="text" name="input[created_date]" value="<?= date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_perjaman_mesin]" value="<?= 'PM' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="form-group row">
                    <label for="tanggal_input" class="col-sm-2 col-form-label">Tanggal & Mesin</label>
                    <div class="col-sm-5">
                        <input type="text" readonly placeholder="Klik untuk input tanggal" class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Masukan Nomor Mesin" id="mesin" name="input[mesin]">
                        <!-- <select name="input[fk_mesin]" class="form-control" id="mesin">
                            <option value="" selected>Input Tanggal Terlebih Dahulu</option>
                        </select> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                        <?php form_waktu() ?>
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
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmum1" onkeypress="return isNumberKey(event)" id="udara_masuk_l" name="input[udara_masuk_l]" placeholder="L">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmum2" id="udara_masuk_r" name="input[udara_masuk_r]" placeholder="R">
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
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmmpmml" id="minyak_pelumas_masuk_mesin_l" name="input[minyak_pelumas_masuk_mesin_l]" placeholder="L">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmmpmmr" id="minyak_pelumas_masuk_mesin_r" name="input[minyak_pelumas_masuk_mesin_r]" placeholder="R">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Radiator</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmmmrm" id="minyak_pelumas_radiator_masuk" name="input[minyak_pelumas_radiator_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmmmrr" id="minyak_pelumas_radiator_keluar" name="input[minyak_pelumas_radiator_keluar]" placeholder="Keluar">
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
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmmm" id="air_pendingin_mesin_masuk_l" name="input[air_pendingin_mesin_masuk_l]" placeholder="L">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmmk" id="air_pendingin_mesin_masuk_r" name="input[air_pendingin_mesin_masuk_r]" placeholder="R">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Radiator</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmrm" id="air_pendingin_radiator_masuk" name="input[air_pendingin_radiator_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmrk" id="air_pendingin_radiator_keluar" name="input[air_pendingin_radiator_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Injektor</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmim" id="air_pendingin_injektor_masuk" name="input[air_pendingin_injektor_masuk]" placeholder="Masuk">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmik" id="air_pendingin_injektor_keluar" name="input[air_pendingin_injektor_keluar]" placeholder="Keluar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Cylinder L</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcl1" id="keluar_cylinder_l_1" name="input[keluar_cylinder_l_1]" placeholder="1">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcl2" id="keluar_cylinder_l_2" name="input[keluar_cylinder_l_2]" placeholder="2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcl3" id="keluar_cylinder_l_3" name="input[keluar_cylinder_l_3]" placeholder="3">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcl4" id="keluar_cylinder_l_4" name="input[keluar_cylinder_l_4]" placeholder="4">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcl5" id="keluar_cylinder_l_5" name="input[keluar_cylinder_l_5]" placeholder="5">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcl6" id="keluar_cylinder_l_6" name="input[keluar_cylinder_l_6]" placeholder="6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keluar Cylinder R</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcr1" id="keluar_cylinder_r_1" name="input[keluar_cylinder_r_1]" placeholder="1">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcr2" id="keluar_cylinder_r_2" name="input[keluar_cylinder_r_2]" placeholder="2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcr3" id="keluar_cylinder_r_3" name="input[keluar_cylinder_r_3]" placeholder="3">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcr4" id="keluar_cylinder_r_4" name="input[keluar_cylinder_r_4]" placeholder="4">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcr5" id="keluar_cylinder_r_5" name="input[keluar_cylinder_r_5]" placeholder="5">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmkcr6" id="keluar_cylinder_r_6" name="input[keluar_cylinder_r_6]" placeholder="6">
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
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcl1" id="gas_buang_cylinder_l_1" name="input[gas_buang_cylinder_l_1]" placeholder="1">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcl2" id="gas_buang_cylinder_l_2" name="input[gas_buang_cylinder_l_2]" placeholder="2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcl3" id="gas_buang_cylinder_l_3" name="input[gas_buang_cylinder_l_3]" placeholder="3">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcl4" id="gas_buang_cylinder_l_4" name="input[gas_buang_cylinder_l_4]" placeholder="4">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcl5" id="gas_buang_cylinder_l_5" name="input[gas_buang_cylinder_l_5]" placeholder="5">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcl6" id="gas_buang_cylinder_l_6" name="input[gas_buang_cylinder_l_6]" placeholder="6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gas Buang Cylinder R</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcr1" id="gas1" name="input[gas1]" placeholder="1">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcr2" id="gas2" name="input[gas2]" placeholder="2">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcr3" id="gas3" name="input[gas3]" placeholder="3">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcr4" id="gas4" name="input[gas4]" placeholder="4">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcr5" id="gas5" name="input[gas5]" placeholder="5">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmgbcr6" id="gas6" name="input[gas6]" placeholder="6">
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
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmtmkra" id="turbo_masuk_kiri_atas" name="input[turbo_masuk_kiri_atas]" placeholder="kiri atas">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmtmkrb" id="turbo_masuk_kiri_bawah" name="input[turbo_masuk_kiri_bawah]" placeholder="kiri bawah">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmtmkna" id="turbo_masuk_kanan_atas" name="input[turbo_masuk_kanan_atas]" placeholder="kanan atas">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmtmknb" id="turbo_masuk_kanan_bawah" name="input[turbo_masuk_kanan_bawah]" placeholder="kanan bawah">
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
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmtkkr" id="turbo_keluar_kiri" name="input[turbo_keluar_kiri]" placeholder="kiri">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmapmtkkn" id="turbo_keluar_kanan" name="input[turbo_keluar_kanan]" placeholder="kanan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="form-group row mt-3">
                    <label for="flow_meter_bahan_bakar" class="col-sm-2 col-form-label">Flow Meter Bahan Bakar</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="flow_meter_bahan_bakar" name="input[flow_meter_bahan_bakar]">
                    </div>
                </div> -->


                <div class="form-group row mt-3">
                    <label for="rak_bbm" class="col-sm-2 col-form-label">Rak BBM</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="rak_bbm" name="input[rak_bbm]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="governor_load_limit" class="col-sm-2 col-form-label">Governor Load Limit</label>
                    <div class="col-sm-10">
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="governor_load_limit" name="input[governor_load_limit]">
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
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="air_ped_injektor" name="input[air_ped_injektor]" placeholder="2 - 4,5">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="pelumasan_mesin" class="col-sm-2 col-form-label">Pelumasan Mesin</label>
                                    <div class="col-sm-8">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="pelumasan_mesin" name="input[pelumasan_mesin]" placeholder="4 - 7">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Udara Masuk</label>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="udara_masuk_kiri" name="input[udara_masuk_kiri]" placeholder="kiri">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="udara_masuk_kanan" name="input[udara_masuk_kanan]" placeholder="kanan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="bahan_bakar_mesin" class="col-sm-2 col-form-label">Bahan Bakar Mesin</label>
                                    <div class="col-sm-8">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="bahan_bakar_mesin" name="input[bahan_bakar_mesin]" placeholder="4 - 6">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="udara_masuk" class="col-sm-2 col-form-label">Udara Masuk</label>
                                    <div class="col-sm-8">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="udara_masuk" name="input[udara_masuk]" placeholder="0.5 - 2">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="udara_start" class="col-sm-2 col-form-label">Udara Start</label>
                                    <div class="col-sm-8">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="udara_start" name="input[udara_start]" placeholder="15 - 20">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label for="air_pend_masuk_mesin" class="col-sm-2 col-form-label">Air Pend. Masuk Mesin</label>
                                    <div class="col-sm-8">
                                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="air_pend_masuk_mesin" name="input[air_pend_masuk_mesin]" placeholder="2 - 4.5">
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
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="putaran_turbo_kiri" name="input[putaran_turbo_kiri]" placeholder="kiri">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="putaran_turbo_kanan" name="input[putaran_turbo_kanan]" placeholder="kanan">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input_penyulang" class="col-sm-2 col-form-label">Temperatur Bearing</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmtb1" id="bearing1" name="input[bearing1]">
                            </div>
                            <div class="col-lg">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmtb2" id="bearing2" name="input[bearing2]">
                            </div>
                            <div class="col-lg">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmtb3" id="bearing3" name="input[bearing3]">
                            </div>
                            <div class="col-lg">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmtb4" id="bearing4" name="input[bearing4]">
                            </div>
                            <div class="col-lg">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmtb5" id="bearing5" name="input[bearing5]">
                            </div>
                            <div class="col-lg">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmtb6" id="bearing6" name="input[bearing6]">
                            </div>
                            <div class="col-lg">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmtb7" id="bearing7" name="input[bearing7]">
                            </div>
                            <div class="col-lg">
                                <input type="text" onkeypress="return isNumberKey(event)" class="form-control lpmtb8" id="bearing8" name="input[bearing8]">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-end">
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary   mb-3">Tambah Data</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
</div>

<script>
    $('#tanggal_input').change(function() {
        var tanggal = $(this).val();
        var $mesin = $('#mesin');

        $.ajax({
            url: "<?= base_url('Log_paok_motong_perjaman_mesin/load_mesin'); ?>",
            method: 'GET',
            data: 'tanggal =' +
                tanggal,
            datatype: 'json',
            success: function(param) {
                var data = JSON.parse(param);
                if (data.length === 0) {
                    $mesin.empty();
                    $mesin.append('<option> Data Mesin Tidak Ditemukan </option>');
                } else {
                    $mesin.empty();
                    $mesin.append('<option>' + data.length + ' Mesin Ditemukan</option>');
                    for (var i = 0; i < data.length; i++) {
                        $mesin.append('<option id=' + data[i].pk_setup_perjaman_mesin + ' value=' + data[i].pk_setup_perjaman_mesin + '>' + data[i].mesin_sulzer + '</option>');
                    }
                }
            }
        });

    });
</script>