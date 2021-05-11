<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_zav_generator/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_zav_generator]" value="<?= 'ZAG' . date('Ydhs'); ?>">
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
                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Generator
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="input[tegangan]" class="col-sm-2 col-form-label">Tegangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[tegangan]" name="input[tegangan]" placeholder="Input Tegangan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[frekuensi]" class="col-sm-2 col-form-label">Frekuensi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[frekuensi]" name="input[frekuensi]" placeholder="Input Frekuensi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[faktor_daya]" class="col-sm-2 col-form-label">Faktor Daya</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[faktor_daya]" name="input[faktor_daya]" placeholder="Input Faktor Daya">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[daya_semu]" class="col-sm-2 col-form-label">Daya Semu</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[daya_semu]" name="input[daya_semu]" placeholder="Input Daya Semu">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[beban]" class="col-sm-2 col-form-label">Beban</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[beban]" name="input[beban]" placeholder="Input Beban">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Arus (kA)</label>
                            <div class="col-sm-2 col-lg-4 col-md-4 mt-2">
                                <input type="text" class="form-control" id="input[arus_a_r]" name="input[arus_a_r]" placeholder="Nilai R">
                            </div>
                            <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                                <input type="text" class="form-control" id="input[arus_a_s]" name="input[arus_a_s]" placeholder="Nilai S">
                            </div>
                            <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                                <input type="text" class="form-control" id="input[arus_a_t]" name="input[arus_a_t]" placeholder="Nilai T">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Penguat Medan</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[penguat_medan_arus]" name="input[penguat_medan_arus]" placeholder="Arus">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[penguat_medan_tegangan]" name="input[penguat_medan_tegangan]" placeholder="Tegangan">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="input[bearing]" class="col-sm-2 col-form-label">Bearing</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[bearing]" name="input[bearing]" placeholder="Input Bearing">
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Sikap KWH Meter
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">KWH Produksi </label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[kwh_produksi_hsd]" name="input[kwh_produksi_hsd]" placeholder="HSD">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[kwh_produksi_mfo]" name="input[kwh_produksi_mfo]" placeholder="MFO">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kwh_alat_bantu" class="col-sm-2 col-form-label">KWH Alat Bantu</label>
                            <div class="col">
                                <input type="text" class="form-control" id="input[kwh_alat_bantu]" name="input[kwh_alat_bantu]" placeholder="KWH Alat Bantu">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Arus (A)</label>
                    <div class="col-sm-2 col-lg-4 col-md-4 mt-2">
                        <input type="text" class="form-control" id="input[arus_b_r]" name="input[arus_b_r]" placeholder="Nilai R">
                    </div>
                    <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                        <input type="text" class="form-control" id="input[arus_b_s]" name="input[arus_b_s]" placeholder="Nilai S">
                    </div>
                    <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                        <input type="text" class="form-control" id="input[arus_b_t]" name="input[arus_b_t]" placeholder="Nilai T">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="level_becomes" class="col-sm-2 col-form-label">Level Becomes</label>
                    <div class="col">
                        <input type="text" class="form-control" id="input[level_becomes]" name="input[level_becomes]" placeholder="Level Becomes">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[operator]" class="col-sm-2 col-form-label">Operator</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[operator]" name="input[operator]" placeholder="Operator">
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-sm-6">
                                Out Going Feeder
                            </div>
                            <div class="col-sm-6">
                                <span class="btn btn-sm btn-danger float-right kurang"><span class="fa fa-minus"></span></span>
                                <span class="btn btn-sm btn-success float-right mr-2 tambah"><span class="fa fa-plus"> </span></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group" id="ketTambah">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <input type="hidden" name="data[][fk_zav_generator]" value="<?= 'ZAG' . date('Ydhs'); ?>">
                                        <input type="text" class="form-control mb-2" id="nama_out_going_feeder" name="data[][nama_out_going_feeder]" placeholder="Nama Out Going Feeder">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="out_going_feeder_r" name="data[][out_going_feeder_r]" placeholder="R">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="out_going_feeder_s" name="data[][out_going_feeder_s]" placeholder="S">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="out_going_feeder_t" name="data[][out_going_feeder_t]" placeholder="T">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="out_going_feeder_mw" name="data[][out_going_feeder_mw]" placeholder="MW">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
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

<script>
    $(document).ready(function() {
        console.log('Jquery ready');
        $('.tambah').click(function() {
            event.preventDefault();
            $("#ketTambah").append(`
                <li class="list-group-item">
                    <div class="form-group row">
                        <div class="col-sm-1">
                            <input type="hidden" name="data[][fk_zav_generator]" value="<?= 'ZAG' . date('Ydhs'); ?>">
                            <input type='checkbox' class='form-control record'>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mb-2" id="nama_out_going_feeder" name="data[][nama_out_going_feeder]" placeholder="Nama Out Going Feeder">
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="out_going_feeder_r" name="data[][out_going_feeder_r]" placeholder="R">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="out_going_feeder_s" name="data[][out_going_feeder_s]" placeholder="S">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="out_going_feeder_t" name="data[][out_going_feeder_t]" placeholder="T">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2" id="out_going_feeder_mw" name="data[][out_going_feeder_mw]" placeholder="MW">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            `);
        })
        $('.kurang').click(function() {
            event.preventDefault();

            $('.record').each(function() {
                if ($(this).is(":checked")) {
                    $(this).parents("li").remove();
                }
            });
        })
    });
</script>