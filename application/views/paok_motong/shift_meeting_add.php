<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Shift_meeting/add'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="hidden" name="input[created_date]" value="<?= 'SM' . date('Y-m-d'); ?>">
                    <input type="hidden" name="input[pk_shift_meeting]" value="<?= 'SM' . date('Ydhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>

                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]" placeholder="Klik untuk input tanggal">
                        </div>
                        <div class="col-sm-5">
                            <?php form_shiftmeeting_waktu() ?>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Anggota Regu Serah
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="text" class="form-control mb-2" id="anggota_serah1" name="input[anggota_serah1]" placeholder="1">
                            <input type="text" class="form-control mb-2" id="anggota_serah2" name="input[anggota_serah2]" placeholder="2">
                            <input type="text" class="form-control mb-2" id="anggota_serah3" name="input[anggota_serah3]" placeholder="3">
                            <input type="text" class="form-control mb-2" id="anggota_serah4" name="input[anggota_serah4]" placeholder="4">
                            <input type="text" class="form-control mb-2" id="anggota_serah5" name="input[anggota_serah5]" placeholder="5">
                        </div>

                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-primary text-light">
                        Anggota Regu Terima
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="text" class="form-control mb-2" id="anggota_terima1" name="input[anggota_terima1]" placeholder="1">
                            <input type="text" class="form-control mb-2" id="anggota_terima2" name="input[anggota_terima2]" placeholder="2">
                            <input type="text" class="form-control mb-2" id="anggota_terima3" name="input[anggota_terima3]" placeholder="3">
                            <input type="text" class="form-control mb-2" id="anggota_terima4" name="input[anggota_terima4]" placeholder="4">
                            <input type="text" class="form-control mb-2" id="anggota_terima5" name="input[anggota_terima5]" placeholder="5">
                        </div>

                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Peralatan Utama
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sulzer I</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer1_keadaan" name="input[sulzer1_keadaan]" placeholder="Keadaan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer1_keterangan" name="input[sulzer1_keterangan]" placeholder="Keterangan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer1_jumlah_kwh" name="input[sulzer1_jumlah_kwh]" placeholder="Jumlah KWH yang dibangkitkan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer1_pemakaian_sendiri" name="input[sulzer1_pemakaian_sendiri]" placeholder="Jumlah Pemakaian Sendiri">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sulzer II</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer2_keadaan" name="input[sulzer2_keadaan]" placeholder="Keadaan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer2_keterangan" name="input[sulzer2_keterangan]" placeholder="Keterangan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer2_jumlah_kwh" name="input[sulzer2_jumlah_kwh]" placeholder="Jumlah KWH yang dibangkitkan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer2_pemakaian_sendiri" name="input[sulzer2_pemakaian_sendiri]" placeholder="Jumlah Pemakaian Sendiri">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sulzer III</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer3_keadaan" name="input[sulzer3_keadaan]" placeholder="Keadaan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer3_keterangan" name="input[sulzer3_keterangan]" placeholder="Keterangan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer3_jumlah_kwh" name="input[sulzer3_jumlah_kwh]" placeholder="Jumlah KWH yang dibangkitkan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer3_pemakaian_sendiri" name="input[sulzer3_pemakaian_sendiri]" placeholder="Jumlah Pemakaian Sendiri">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sulzer IV</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer4_keadaan" name="input[sulzer4_keadaan]" placeholder="Keadaan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer4_keterangan" name="input[sulzer4_keterangan]" placeholder="Keterangan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer4_jumlah_kwh" name="input[sulzer4_jumlah_kwh]" placeholder="Jumlah KWH yang dibangkitkan">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control mb-2" id="sulzer4_pemakaian_sendiri" name="input[sulzer4_pemakaian_sendiri]" placeholder="Jumlah Pemakaian Sendiri">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-primary text-light">
                        Peralatan Bantu
                    </div>
                    <div class="card-body">
                        <ul class="list-group mb-3">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Separator MFO 1</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="separator_mfo1_keadaan" name="input[separator_mfo1_keadaan]" placeholder="Keadaan">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="separator_mfo1_keterangan" name="input[separator_mfo1_keterangan]" placeholder="Keterangan">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="separator_mfo1_produksi" name="input[separator_mfo1_produksi]" placeholder="Produksi (KL)">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="separator_mfo1_transfer" name="input[separator_mfo1_transfer]" placeholder="Transfer (KL)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Separator MFO 2</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="separator_mfo2_keadaan" name="input[separator_mfo2_keadaan]" placeholder="Keadaan">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="separator_mfo2_keterangan" name="input[separator_mfo2_keterangan]" placeholder="Keterangan">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="separator_mfo2_produksi" name="input[separator_mfo2_produksi]" placeholder="Produksi (KL)">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control mb-2" id="separator_mfo2_transfer" name="input[separator_mfo2_transfer]" placeholder="Transfer (KL)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kompresor 1</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor1_keadaan" name="input[kompresor1_keadaan]" placeholder="Keadaan">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor1_keterangan" name="input[kompresor1_keterangan]" placeholder="Keterangan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kompresor 2</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor2_keadaan" name="input[kompresor2_keadaan]" placeholder="Keadaan">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor2_keterangan" name="input[kompresor2_keterangan]" placeholder="Keterangan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kompresor 3</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor3_keadaan" name="input[kompresor3_keadaan]" placeholder="Keadaan">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor3_keterangan" name="input[kompresor3_keterangan]" placeholder="Keterangan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kompresor 4</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor4_keadaan" name="input[kompresor4_keadaan]" placeholder="Keadaan">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor4_keterangan" name="input[kompresor4_keterangan]" placeholder="Keterangan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kompresor 5</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor5_keadaan" name="input[kompresor5_keadaan]" placeholder="Keadaan">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor5_keterangan" name="input[kompresor5_keterangan]" placeholder="Keterangan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kompresor 6</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor6_keadaan" name="input[kompresor6_keadaan]" placeholder="Keadaan">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mb-2" id="kompresor6_keterangan" name="input[kompresor6_keterangan]" placeholder="Keterangan">
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
                        <div class="row">
                            <div class="col-sm-6">
                                Keterangan Tambahan
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
                                        <input type="hidden" name="data[][fk_shift_meeting]" value="<?= 'SM' . date('Ydhs'); ?>">
                                        <input type="text" class="form-control mb-2" id="nama_peralatan_tambahan" name="data[][nama_peralatan_tambahan]" placeholder="Nama Peralatan">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control mb-2" id="keadaan_tambahan" name="data[][keadaan_tambahan]" placeholder="Keadaan">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control mb-2" id="keterangna_tambahan" name="data[][keterangan_tambahan]" placeholder="Keterangan">
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
                <li class="list-group-item" id="ketTambah">
                    <div class="form-group row">
                        <div class="col-sm-1">
                            <input type="hidden" name="data[][fk_shift_meeting]" value="<?= 'SM' . date('Ydhs'); ?>">
                            <input type='checkbox' class='form-control record'>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mb-2" id="nama_peralatan_tambahan" name="data[][nama_peralatan_tambahan]" placeholder="Nama Peralatan">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mb-2" id="keadaan_tambahan" name="data[][keadaan_tambahan]" placeholder="Keadaan">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mb-2" id="keterangna_tambahan" name="data[][keterangan_tambahan]" placeholder="Keterangan">
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