<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_zv_generator/edit'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Ubah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="pk[pk_zv_generator]" value="<?= $edit['pk_zv_generator']; ?>">
                    <input type="text" name="input[update_by]" value="<?= $user['id']; ?>">

                </div>
                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easydatepicker" id="tanggal_input" value="<?= content_date($edit['tanggal_input']); ?>" name="input[tanggal_input]" placeholder="Klik untuk input tanggal" readonly>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easytimepicker" id="input[waktu]" value="<?= $edit['waktu']; ?>" name="input[waktu]" readonly placeholder="Klik untuk input waktu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input[mesin]" class="col-sm-2 col-form-label">Mesin & Generator</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="tanggal_input" value="<?= $edit['mesin']; ?>" name="input[mesin]" placeholder="Nomor Mesin">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="input[generator]" value="<?= $edit['generator']; ?>" name="input[generator]" placeholder="Generator">
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
                                <input type="text" class="form-control" id="input[tegangan]" value="<?= $edit['tegangan']; ?>" name="input[tegangan]" placeholder="Input Tegangan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[frekuensi]" class="col-sm-2 col-form-label">Frekuensi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[frekuensi]" value="<?= $edit['frekuensi']; ?>" name="input[frekuensi]" placeholder="Input Frekuensi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[faktor_daya]" class="col-sm-2 col-form-label">Faktor Daya</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[faktor_daya]" value="<?= $edit['faktor_daya']; ?>" name="input[faktor_daya]" placeholder="Input Faktor Daya">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[daya_semu]" class="col-sm-2 col-form-label">Daya Semu</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[daya_semu]" value="<?= $edit['daya_semu']; ?>" name="input[daya_semu]" placeholder="Input Daya Semu">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[beban]" class="col-sm-2 col-form-label">Beban</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[beban]" value="<?= $edit['beban']; ?>" name="input[beban]" placeholder="Input Beban">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Arus (kA)</label>
                            <div class="col-sm-2 col-lg-4 col-md-4 mt-2">
                                <input type="text" class="form-control" id="input[arus_a_r]" value="<?= $edit['arus_a_r']; ?>" name="input[arus_a_r]" placeholder="Nilai R">
                            </div>
                            <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                                <input type="text" class="form-control" id="input[arus_a_s]" value="<?= $edit['arus_a_s']; ?>" name="input[arus_a_s]" placeholder="Nilai S">
                            </div>
                            <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                                <input type="text" class="form-control" id="input[arus_a_t]" value="<?= $edit['arus_a_t']; ?>" name="input[arus_a_t]" placeholder="Nilai T">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[penguat_medan_arus]" class="col-sm-2 col-form-label">Penguat Medan</label>
                            <div class="col-sm-10 ">
                                <input type="text" class="form-control" id="input[penguat_medan_arus]" value="<?= $edit['penguat_medan_arus']; ?>" name="input[penguat_medan_arus]" placeholder="Arus">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Suhu Winding</label>
                            <div class="col-sm-2 col-lg-4 col-md-4 mt-2">
                                <input type="text" class="form-control lzgsw1" id="input[suhu_winding_1]" value="<?= $edit['suhu_winding_1']; ?>" name="input[suhu_winding_1]" placeholder="1">
                            </div>
                            <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                                <input type="text" class="form-control lzgsw2" id="input[suhu_winding_2]" value="<?= $edit['suhu_winding_2']; ?>" name="input[suhu_winding_2]" placeholder="2">
                            </div>
                            <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                                <input type="text" class="form-control lzgsw3" id="input[suhu_winding_3]" value="<?= $edit['suhu_winding_3']; ?>" name="input[suhu_winding_3]" placeholder="3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input[bearing]" class="col-sm-2 col-form-label">Bearing</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[bearing]" value="<?= $edit['bearing']; ?>" name="input[bearing]" placeholder="Input Bearing">
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
                                <input type="text" class="form-control" id="input[kwh_produksi_hsd]" value="<?= $edit['kwh_produksi_hsd']; ?>" name="input[kwh_produksi_hsd]" placeholder="HSD">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[kwh_produksi_mfo]" value="<?= $edit['kwh_produksi_mfo']; ?>" name="input[kwh_produksi_mfo]" placeholder="MFO">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kwh_alat_bantu" class="col-sm-2 col-form-label">KWH Alat Bantu</label>
                            <div class="col">
                                <input type="text" class="form-control" id="input[kwh_alat_bantu]" value="<?= $edit['kwh_alat_bantu']; ?>" name="input[kwh_alat_bantu]" placeholder="KWH Alat Bantu">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="level_becomes" class="col-sm-2 col-form-label">Level Becomes</label>
                    <div class="col">
                        <input type="text" class="form-control" id="input[level_becomes]" value="<?= $edit['level_becomes']; ?>" name="input[level_becomes]" placeholder="Level Becomes">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[operator]" class="col-sm-2 col-form-label">Operator</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[operator]" value="<?= $edit['operator']; ?>" name="input[operator]" placeholder="Operator">
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
                                        <input type="hidden" name="pk[fk_zv_generator]" value="<?= $edit['fk_zv_generator']; ?>">
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
                    <button type="submit" class="btn btn-primary ">Ubah Data</button>
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
                            <input type="hidden" name="data[][fk_zv_generator]" value="<?= 'ZG' . date('Ydhs'); ?>">
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