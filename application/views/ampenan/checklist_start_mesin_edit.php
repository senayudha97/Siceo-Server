<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>

    <h1 class="h3 mb-4 text-gray-800">Ubah Data <?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-12">
            <form action="<?= base_url('checklist_start_mesin/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="text" name="pk[pk_checklist_start_mesin]" value="<?= $edit['pk_checklist_start_mesin']; ?>">
                    <input type="text" name="input[update_by]" value="<?= $user['id']; ?>">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="tanggal_input" class="col-sm-3 col-form-label">Tanggal Input</label>
                            <div class="col-sm-9">
                                <input type="text" required readonly class="form-control easydatepicker" value="<?= content_date($edit['tanggal_input']); ?>" id="tanggal_input" placeholder="Klik untuk input tanggal" name="input[tanggal_input]">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="waktu" class="col-sm-3 col-form-label">Waktu Input</label>
                            <div class="col-sm-9">
                                <input type="text" required class="form-control easytimepicker" value="<?= $edit['waktu']; ?>" id="waktu" name="input[waktu]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="row mt-3">
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Pastikan mesin layak untuk operasi
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pastikan mesin layak operasi</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['mesin_layak_operasi'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[mesin_layak_operasi]" id="mesin_layak_operasi1" value="Normal">
                                                    <label class="form-check-label" for="mesin_layak_operasi1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['mesin_layak_operasi'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[mesin_layak_operasi]" id="mesin_layak_operasi2" value="Tidak Normal">
                                                    <label class="form-check-label" for="mesin_layak_operasi2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Jalankan pompa-pompa pelumas mesin
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek getaran pompa</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ppm_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ppm_a]" id="ppm_a1" value="Normal">
                                                    <label class="form-check-label" for="ppm_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ppm_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ppm_a]" id="ppm_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ppm_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek tekanan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ppm_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ppm_b]" id="ppm_b1" value="Normal">
                                                    <label class="form-check-label" for="ppm_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ppm_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ppm_b]" id="ppm_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ppm_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek suhu</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ppm_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ppm_c]" id="ppm_c1" value="Normal">
                                                    <label class="form-check-label" for="ppm_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ppm_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ppm_c]" id="ppm_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ppm_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek kebocoran pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ppm_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ppm_d]" id="ppm_d1" value="Normal">
                                                    <label class="form-check-label" for="ppm_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ppm_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ppm_d]" id="ppm_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ppm_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Jalankan pompa-pompa air pendingin mesin
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek getaran pompa</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['papm_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[papm_a]" id="papm_a1" value="Normal">
                                                    <label class="form-check-label" for="papm_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['papm_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[papm_a]" id="papm_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="papm_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek tekanan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['papm_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[papm_b]" id="papm_b1" value="Normal">
                                                    <label class="form-check-label" for="papm_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['papm_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[papm_b]" id="papm_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="papm_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek suhu</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['papm_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[papm_c]" id="papm_c1" value="Normal">
                                                    <label class="form-check-label" for="papm_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['papm_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[papm_c]" id="papm_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="papm_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek kebocoran air</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['papm_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[papm_d]" id="papm_d1" value="Normal">
                                                    <label class="form-check-label" for="papm_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['papm_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[papm_d]" id="papm_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="papm_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                        </div>
                        <div class="row mt-3">
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Jalankan pompa Kompressor
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek getaran Kompressor</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pk_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pk_a]" id="pk_a1" value="Normal">
                                                    <label class="form-check-label" for="pk_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pk_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pk_a]" id="pk_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pk_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek tekanan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pk_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pk_b]" id="pk_b1" value="Normal">
                                                    <label class="form-check-label" for="pk_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pk_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pk_b]" id="pk_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pk_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek suhu</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pk_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pk_c]" id="pk_c1" value="Normal">
                                                    <label class="form-check-label" for="pk_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pk_c'] == 'Kelainan') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pk_c]" id="pk_c2" value="Kelainan">
                                                    <label class="form-check-label" for="pk_c2">Kelainan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Buang air kondensat</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pk_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pk_d]" id="pk_d2" value="Normal">
                                                    <label class="form-check-label" for="pk_d2">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pk_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pk_d]" id="pk_d1" value="Tidak Normal">
                                                    <label class="form-check-label" for="pk_d1">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Buka kran indikator (KI) semua cylinder head
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Buka kran indikator (KI) semua cylinder head</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['buka_ki'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[buka_ki]" id="buka_ki1" value="Normal">
                                                    <label class="form-check-label" for="buka_ki1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['buka_ki'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[buka_ki]" id="buka_ki2" value="Tidak Normal">
                                                    <label class="form-check-label" for="buka_ki2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Putar fly wheel 3 putaran dengan turning gear
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek air keluar KI</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['fw_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[fw_a]" id="fw_a1" value="Normal">
                                                    <label class="form-check-label" for="fw_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['fw_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[fw_a]" id="fw_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="fw_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek pelumas keluar KI</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['fw_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[fw_b]" id="fw_b1" value="Normal">
                                                    <label class="form-check-label" for="fw_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['fw_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[fw_b]" id="fw_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="fw_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek kerja turning gear</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['fw_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[fw_c]" id="fw_c1" value="Normal">
                                                    <label class="form-check-label" for="fw_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['fw_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[fw_c]" id="fw_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="fw_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                        </div>
                        <div class="row mt-3">
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Pastikan turning gear sudah bebas dari fly wheel
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pastikan turning gear sudah bebas dari fly wheel</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['turning_gear'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[turning_gear]" id="turning_gear1" value="Normal">
                                                    <label class="form-check-label" for="turning_gear1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['turning_gear'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[turning_gear]" id="turning_gear2" value="Tidak Normal">
                                                    <label class="form-check-label" for="turning_gear2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Start mesin dengan pompa bahan bakar tidak operasi.
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek air keluar KI</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pompa_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pompa_a]" id="start_mesin_pompa_a1" value="Normal">
                                                    <label class="form-check-label" for="start_mesin_pompa_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pompa_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pompa_a]" id="start_mesin_pompa_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="start_mesin_pompa_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek pelumas keluar KI</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pompa_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pompa_b]" id="start_mesin_pompa_b1" value="Normal">
                                                    <label class="form-check-label" for="start_mesin_pompa_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pompa_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pompa_b]" id="start_mesin_pompa_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="start_mesin_pompa_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek semburan keluar KI</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pompa_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pompa_c]" id="start_mesin_pompa_c1" value="Normal">
                                                    <label class="form-check-label" for="start_mesin_pompa_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pompa_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pompa_c]" id="start_mesin_pompa_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="start_mesin_pompa_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek ayunan fly wheel</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pompa_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pompa_d]" id="start_mesin_pompa_d1" value="Normal">
                                                    <label class="form-check-label" for="start_mesin_pompa_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pompa_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pompa_d]" id="start_mesin_pompa_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="start_mesin_pompa_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Tutup kran indikator (KI) semua cylinder head
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tutup kran indikator (KI) semua cylinder head</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tutup_ki'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tutup_ki]" id="tutup_ki1" value="Normal">
                                                    <label class="form-check-label" for="tutup_ki1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tutup_ki'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tutup_ki]" id="tutup_ki2" value="Tidak Normal">
                                                    <label class="form-check-label" for="tutup_ki2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                        </div>
                        <div class="row mt-3">
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Cek tekanan udara proteksi
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek tekanan udara proteksi</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['cek_tekanan_udara'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[cek_tekanan_udara]" id="cek_tekanan_udara1" value="Normal">
                                                    <label class="form-check-label" for="cek_tekanan_udara1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['cek_tekanan_udara'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[cek_tekanan_udara]" id="cek_tekanan_udara2" value="Tidak Normal">
                                                    <label class="form-check-label" for="cek_tekanan_udara2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Cek sumber tegangan DC 110 Vdc
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek sumber tegangan DC 110 Vdc</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['cek_sumber_tegangan'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[cek_sumber_tegangan]" id="cek_sumber_tegangan1" value="Normal">
                                                    <label class="form-check-label" for="cek_sumber_tegangan1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['cek_sumber_tegangan'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[cek_sumber_tegangan]" id="cek_sumber_tegangan2" value="Tidak Normal">
                                                    <label class="form-check-label" for="cek_sumber_tegangan2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Jalankan pompa bahan bakar
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek getaran pompa</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pbb_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pbb_a]" id="pbb_a1" value="Normal">
                                                    <label class="form-check-label" for="pbb_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pbb_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pbb_a]" id="pbb_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pbb_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek tekanan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pbb_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pbb_b]" id="pbb_b1" value="Normal">
                                                    <label class="form-check-label" for="pbb_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pbb_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pbb_b]" id="pbb_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pbb_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek suhu</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pbb_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pbb_c]" id="pbb_c1" value="Normal">
                                                    <label class="form-check-label" for="pbb_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pbb_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pbb_c]" id="pbb_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pbb_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek kebocoran bahan bakar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pbb_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pbb_d]" id="pbb_d1" value="Normal">
                                                    <label class="form-check-label" for="pbb_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pbb_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pbb_d]" id="pbb_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pbb_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Buang angin pada filter</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pbb_e'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pbb_e]" id="pbb_e1" value="Normal">
                                                    <label class="form-check-label" for="pbb_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pbb_e'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pbb_e]" id="pbb_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pbb_e2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                        </div>
                        <div class="row mt-3">
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Pastikan mesin siap start dengan aman
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pastikan mesin siap start dengan aman</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pastikan_mesin_aman'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pastikan_mesin_aman]" id="pastikan_mesin_aman1" value="Normal">
                                                    <label class="form-check-label" for="pastikan_mesin_aman1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['pastikan_mesin_aman'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[pastikan_mesin_aman]" id="pastikan_mesin_aman2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pastikan_mesin_aman2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Start mesin dan pertahankan putaran idle.
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek tekanan pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pertahankan_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pertahankan_a]" id="start_mesin_pertahankan_a1" value="Normal">
                                                    <label class="form-check-label" for="start_mesin_pertahankan_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pertahankan_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pertahankan_a]" id="start_mesin_pertahankan_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="start_mesin_pertahankan_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek suhu pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pertahankan_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pertahankan_b]" id="start_mesin_pertahankan_b1" value="Normal">
                                                    <label class="form-check-label" for="start_mesin_pertahankan_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pertahankan_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pertahankan_b]" id="start_mesin_pertahankan_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="start_mesin_pertahankan_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek suhu bearing</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pertahankan_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pertahankan_c]" id="start_mesin_pertahankan_c1" value="Normal">
                                                    <label class="form-check-label" for="start_mesin_pertahankan_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pertahankan_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pertahankan_c]" id="start_mesin_pertahankan_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="start_mesin_pertahankan_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek bunyi mesin</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pertahankan_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pertahankan_d]" id="start_mesin_pertahankan_d1" value="Normal">
                                                    <label class="form-check-label" for="start_mesin_pertahankan_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pertahankan_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pertahankan_d]" id="start_mesin_pertahankan_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="start_mesin_pertahankan_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek getaran mesin</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pertahankan_e'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pertahankan_e]" id="start_mesin_pertahankan_e1" value="Normal">
                                                    <label class="form-check-label" for="start_mesin_pertahankan_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['start_mesin_pertahankan_e'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[start_mesin_pertahankan_e]" id="start_mesin_pertahankan_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="start_mesin_pertahankan_e2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Buka KI, cek semburan yang keluar dari KI dan tutup.
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Buka KI, cek semburan yang keluar dari KI dan tutup.</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['buka_ki_cek_semburan'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[buka_ki_cek_semburan]" id="buka_ki_cek_semburan1" value="Normal">
                                                    <label class="form-check-label" for="buka_ki_cek_semburan1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['buka_ki_cek_semburan'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[buka_ki_cek_semburan]" id="buka_ki_cek_semburan2" value="Tidak Normal">
                                                    <label class="form-check-label" for="buka_ki_cek_semburan2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                        </div>
                        <div class="row mt-3">
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Bila butir (14 & 15) normal, putaran idle dinaikkan ke putaran nominal
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek tekanan pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_a]" id="putaran_idle_a1" value="Normal">
                                                    <label class="form-check-label" for="putaran_idle_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_a]" id="putaran_idle_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="putaran_idle_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek suhu pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_b]" id="putaran_idle_b1" value="Normal">
                                                    <label class="form-check-label" for="putaran_idle_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_b]" id="putaran_idle_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="putaran_idle_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek suhu bearing</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_c]" id="putaran_idle_c1" value="Normal">
                                                    <label class="form-check-label" for="putaran_idle_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_c]" id="putaran_idle_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="putaran_idle_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek bunyi mesin</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_d]" id="putaran_idle_d1" value="Normal">
                                                    <label class="form-check-label" for="putaran_idle_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_d]" id="putaran_idle_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="putaran_idle_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek getaran mesin</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_e'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_e]" id="putaran_idle_e1" value="Normal">
                                                    <label class="form-check-label" for="putaran_idle_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_e'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_e]" id="putaran_idle_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="putaran_idle_e2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek tekanan bahan bakar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_f'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_f]" id="putaran_idle_f1" value="Normal">
                                                    <label class="form-check-label" for="putaran_idle_f1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_f'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_f]" id="putaran_idle_f2" value="Tidak Normal">
                                                    <label class="form-check-label" for="putaran_idle_f2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek tekanan air</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_g'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_g]" id="putaran_idle_g1" value="Normal">
                                                    <label class="form-check-label" for="putaran_idle_g1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_g'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_g]" id="putaran_idle_g2" value="Tidak Normal">
                                                    <label class="form-check-label" for="putaran_idle_g2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Cek suhu air</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_h'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_h]" id="putaran_idle_h1" value="Normal">
                                                    <label class="form-check-label" for="putaran_idle_h1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_h'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_h]" id="putaran_idle_h2" value="Tidak Normal">
                                                    <label class="form-check-label" for="putaran_idle_h2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Bahan bakar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_i'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_i]" id="putaran_idle_i1" value="Normal">
                                                    <label class="form-check-label" for="putaran_idle_i1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['putaran_idle_i'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[putaran_idle_i]" id="putaran_idle_i2" value="Tidak Normal">
                                                    <label class="form-check-label" for="putaran_idle_i2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Bila butir (16) normal, mesin siap dibebani
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Bila butir (16) normal, mesin siap dibebani</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['mesin_siap_dibebani'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[mesin_siap_dibebani]" id="mesin_siap_dibebani1" value="Normal">
                                                    <label class="form-check-label" for="mesin_siap_dibebani1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['mesin_siap_dibebani'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[mesin_siap_dibebani]" id="mesin_siap_dibebani2" value="Tidak Normal">
                                                    <label class="form-check-label" for="mesin_siap_dibebani2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                            <!-- Awal untuk card baru horizontal -->
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        Selama mulai pembebanan mesin sampai beban normal, cek parameter butir (16)
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Selama mulai pembebanan mesin sampai beban normal, cek parameter butir (16)</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['selama_mulai_pembebanan'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[selama_mulai_pembebanan]" id="selama_mulai_pembebanan1" value="Normal">
                                                    <label class="form-check-label" for="selama_mulai_pembebanan1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['selama_mulai_pembebanan'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[selama_mulai_pembebanan]" id="selama_mulai_pembebanan2" value="Tidak Normal">
                                                    <label class="form-check-label" for="selama_mulai_pembebanan2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir checklist baru -->
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Card baru horizontal -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer mt-3">
                    <button type="submit" class="btn btn-primary ">Ubah</button>
                </div>
            </form>
        </div>
    </di>
</div>
</div>