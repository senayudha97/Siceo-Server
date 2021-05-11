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
            <form action="<?= base_url('checklist_persiapan_operasi/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="text" name="pk[pk_checklist_persiapan_operasi]" value="<?= $edit['pk_checklist_persiapan_operasi']; ?>">
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
                                        Suplai Tegangan DC 110 dan 24 V untuk Kontrol dan Proteksi Pada Panel Battery Charger
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tegangan 110 V DC</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['stdc_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[stdc_a]" id="stdc_a1" value="Normal">
                                                    <label class="form-check-label" for="stdc_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['stdc_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[stdc_a]" id="stdc_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="stdc_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tegangan 24 V DC</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['stdc_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[stdc_b]" id="stdc_b1" value="Normal">
                                                    <label class="form-check-label" for="stdc_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['stdc_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[stdc_b]" id="stdc_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="stdc_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Arus battery charger 110 V DC</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['stdc_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[stdc_c]" id="stdc_c1" value="Normal">
                                                    <label class="form-check-label" for="stdc_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['stdc_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[stdc_c]" id="stdc_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="stdc_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Arus battery charger 24 V DC</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['stdc_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[stdc_d]" id="stdc_d1" value="Normal">
                                                    <label class="form-check-label" for="stdc_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['stdc_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[stdc_d]" id="stdc_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="stdc_d2">Tidak Normal</label>
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
                                        Suplai Udara Start; Kontrol dan Proteksi
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tekanan udara 30 Bar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sus_a'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sus_a]" id="sus_a1" value="Ada">
                                                    <label class="form-check-label" for="sus_a1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sus_a'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sus_a]" id="sus_a2" value="Tidak Ada">
                                                    <label class="form-check-label" for="sus_a2">Tidak Ada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tekanan udara 12 Bar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sus_b'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sus_b]" id="sus_b1" value="Ada">
                                                    <label class="form-check-label" for="sus_b1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sus_b'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sus_b]" id="sus_b2" value="Tidak Ada">
                                                    <label class="form-check-label" for="sus_b2">Tidak Ada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tek. Udara kontrol 6 Bar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sus_c'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sus_c]" id="sus_c1" value="Ada">
                                                    <label class="form-check-label" for="sus_c1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sus_c'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sus_c]" id="sus_c2" value="Tidak Ada">
                                                    <label class="form-check-label" for="sus_c2">Tidak Ada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Drain air kondensat</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sus_d'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sus_d]" id="sus_d1" value="Ada">
                                                    <label class="form-check-label" for="sus_d1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sus_d'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sus_d]" id="sus_d2" value="Tidak Ada">
                                                    <label class="form-check-label" for="sus_d2">Tidak Ada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran sistem udara start</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sus_e'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sus_e]" id="sus_e1" value="Ada">
                                                    <label class="form-check-label" for="sus_e1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sus_e'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sus_e]" id="sus_e2" value="Tidak Ada">
                                                    <label class="form-check-label" for="sus_e2">Tidak Ada</label>
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
                                        Sistem Bahan Bakar
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Level buffer tank</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_a'] == 'Cukup') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_a]" id="sbb_a1" value="Cukup">
                                                    <label class="form-check-label" for="sbb_a1">Cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_a'] == 'Kurang') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_a]" id="sbb_a2" value="Kurang">
                                                    <label class="form-check-label" for="sbb_a2">Kurang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Level daily tank</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_b'] == 'Cukup') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_b]" id="sbb_b1" value="Cukup">
                                                    <label class="form-check-label" for="sbb_b1">Cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_b'] == 'Kurang') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_b]" id="sbb_b2" value="Kurang">
                                                    <label class="form-check-label" for="sbb_b2">Kurang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran pompa BBM</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_c]" id="sbb_c1" value="Normal">
                                                    <label class="form-check-label" for="sbb_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_c]" id="sbb_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="sbb_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tekanan BBM (Bar)</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_d]" id="sbb_d1" value="Normal">
                                                    <label class="form-check-label" for="sbb_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_d]" id="sbb_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="sbb_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Indikator filter BBM</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_e'] == 'Bersih') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_e]" id="sbb_e1" value="Bersih">
                                                    <label class="form-check-label" for="sbb_e1">Bersih</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_e'] == 'Kotor') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_e]" id="sbb_e2" value="Kotor">
                                                    <label class="form-check-label" for="sbb_e2">Kotor</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran sistem BBM</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_f'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_f]" id="sbb_f1" value="Tidak Ada">
                                                    <label class="form-check-label" for="sbb_f1">Tidak Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sbb_f'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sbb_f]" id="sbb_f2" value="Ada">
                                                    <label class="form-check-label" for="sbb_f2">Ada</label>
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
                                        Sistem Minyak Pelumas
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Level oli di sump tank</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_a'] == 'Cukup') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_a]" id="smp_a1" value="Cukup">
                                                    <label class="form-check-label" for="smp_a1">Cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_a'] == 'Kurang') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_a]" id="smp_a2" value="Kurang">
                                                    <label class="form-check-label" for="smp_a2">Kurang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Level oli di cylinder lubricating tank</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_b'] == 'Cukup') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_b]" id="smp_b1" value="Cukup">
                                                    <label class="form-check-label" for="smp_b1">Cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_b'] == 'Kurang') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_b]" id="smp_b2" value="Kurang">
                                                    <label class="form-check-label" for="smp_b2">Kurang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran Pompa</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_c]" id="smp_c1" value="Normal">
                                                    <label class="form-check-label" for="smp_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_c'] == 'Kelainan') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_c]" id="smp_c2" value="Kelainan">
                                                    <label class="form-check-label" for="smp_c2">Kelainan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran pelumasan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_d'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_d]" id="smp_d2" value="Ada">
                                                    <label class="form-check-label" for="smp_d2">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_d'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_d]" id="smp_d1" value="Tidak Ada">
                                                    <label class="form-check-label" for="smp_d1">Tidak Ada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tekanan pelumasan (Bar)</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_e'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_e]" id="smp_e1" value="Normal">
                                                    <label class="form-check-label" for="smp_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_e'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_e]" id="smp_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="smp_e2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Indikator filter otomatis</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_f'] == 'Bersih') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_f]" id="smp_f1" value="Bersih">
                                                    <label class="form-check-label" for="smp_f1">Bersih</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_f'] == 'Kotor') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_f]" id="smp_f2" value="Kotor">
                                                    <label class="form-check-label" for="smp_f2">Kotor</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Putaran filter otomatis</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_g'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_g]" id="smp_g1" value="Normal">
                                                    <label class="form-check-label" for="smp_g1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_g'] == 'Kelainan') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_g]" id="smp_g2" value="Kelainan">
                                                    <label class="form-check-label" for="smp_g2">Kelainan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Indikator filter halus</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_h'] == 'Bersih') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_h]" id="smp_h1" value="Bersih">
                                                    <label class="form-check-label" for="smp_h1">Bersih</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['smp_h'] == 'Kotor') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[smp_h]" id="smp_h2" value="Kotor">
                                                    <label class="form-check-label" for="smp_h2">Kotor</label>
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
                                        Sistem Jacket Cooling Water
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Level air di expantion tank</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['scj_a'] == 'Cukup') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[scj_a]" id="scj_a1" value="Cukup">
                                                    <label class="form-check-label" for="scj_a1">Cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['scj_a'] == 'Kurang') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[scj_a]" id="scj_a2" value="Kurang">
                                                    <label class="form-check-label" for="scj_a2">Kurang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran pompa</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['scj_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[scj_b]" id="scj_b1" value="Normal">
                                                    <label class="form-check-label" for="scj_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['scj_b'] == 'Kelainan') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[scj_b]" id="scj_b2" value="Kelainan">
                                                    <label class="form-check-label" for="scj_b2">Kelainan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['scj_c'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[scj_c]" id="scj_c1" value="Ada">
                                                    <label class="form-check-label" for="scj_c1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['scj_c'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[scj_c]" id="scj_c2" value="Tidak Ada">
                                                    <label class="form-check-label" for="scj_c2">Tidak Ada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tekanan JCW (Bar)</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['scj_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[scj_d]" id="scj_d1" value="Normal">
                                                    <label class="form-check-label" for="scj_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['scj_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[scj_d]" id="scj_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="scj_d2">Tidak Normal</label>
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
                                        Sistem injector Cooling Water/ Sistem Fuel Valve Cooling Oil
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Level air di expantion tank</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sic_a'] == 'Cukup') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sic_a]" id="sic_a1" value="Cukup">
                                                    <label class="form-check-label" for="sic_a1">Cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sic_a'] == 'Kurang') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sic_a]" id="sic_a2" value="Kurang">
                                                    <label class="form-check-label" for="sic_a2">Kurang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran pompa</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sic_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sic_b]" id="sic_b1" value="Normal">
                                                    <label class="form-check-label" for="sic_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sic_b'] == 'Kelainan') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sic_b]" id="sic_b2" value="Kelainan">
                                                    <label class="form-check-label" for="sic_b2">Kelainan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sic_c'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sic_c]" id="sic_c1" value="Ada">
                                                    <label class="form-check-label" for="sic_c1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sic_c'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sic_c]" id="sic_c2" value="Tidak Ada">
                                                    <label class="form-check-label" for="sic_c2">Tidak Ada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tekanan ICW (Bar)</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sic_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sic_d]" id="sic_d1" value="Normal">
                                                    <label class="form-check-label" for="sic_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sic_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sic_d]" id="sic_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="sic_d2">Tidak Normal</label>
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
                                        Motor Radiator J.C.W/ R.A.W/ Minyak Pelumas
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran motor</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['mr'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[mr]" id="mr1" value="Normal">
                                                    <label class="form-check-label" for="mr1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['mr'] == 'Kelainan') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[mr]" id="mr2" value="Kelainan">
                                                    <label class="form-check-label" for="mr2">Kelainan</label>
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
                                        Turbocharger
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Level minyak pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['t_a'] == 'cukup') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[t_a]" id="t_a1" value="cukup">
                                                    <label class="form-check-label" for="t_a1">cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['t_a'] == 'kurang') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[t_a]" id="t_a2" value="kurang">
                                                    <label class="form-check-label" for="t_a2">kurang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['t_b'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[t_b]" id="t_b1" value="Ada">
                                                    <label class="form-check-label" for="t_b1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['t_b'] == 'Tidak ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[t_b]" id="t_b2" value="Tidak ada">
                                                    <label class="form-check-label" for="t_b2">Tidak ada</label>
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
                                        Governor
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Level minyak pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['g_a'] == 'Cukup') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[g_a]" id="g_a1" value="Cukup">
                                                    <label class="form-check-label" for="g_a1">Cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['g_a'] == 'Kurang') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[g_a]" id="g_a2" value="Kurang">
                                                    <label class="form-check-label" for="g_a2">Kurang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Posisi tombol load limit</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['g_b'] == 'Sesuai') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[g_b]" id="g_b1" value="Sesuai">
                                                    <label class="form-check-label" for="g_b1">Sesuai</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['g_b'] == 'Belum') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[g_b]" id="g_b2" value="Belum">
                                                    <label class="form-check-label" for="g_b2">Belum</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Posisi tombol speed drop</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['g_c'] == 'Sesuai') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[g_c]" id="g_c1" value="Sesuai">
                                                    <label class="form-check-label" for="g_c1">Sesuai</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['g_c'] == 'Belum') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[g_c]" id="g_c2" value="Belum">
                                                    <label class="form-check-label" for="g_c2">Belum</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['g_d'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[g_d]" id="g_d1" value="Ada">
                                                    <label class="form-check-label" for="g_d1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['g_d'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[g_d]" id="g_d2" value="Tidak ada">
                                                    <label class="form-check-label" for="g_d2">Tidak ada</label>
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
                                        Kompressor
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Level oil</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['k_a'] == 'Cukup') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[k_a]" id="k_a1" value="Cukup">
                                                    <label class="form-check-label" for="k_a1">Cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['k_a'] == 'Kurang') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[k_a]" id="k_a2" value="Kurang">
                                                    <label class="form-check-label" for="k_a2">Kurang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Sistem pengisian</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['k_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[k_b]" id="k_b1" value="Normal">
                                                    <label class="form-check-label" for="k_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['k_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[k_b]" id="k_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="k_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran udara & oil</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['k_c'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[k_c]" id="k_c1" value="Ada">
                                                    <label class="form-check-label" for="k_c1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['k_c'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[k_c]" id="k_c2" value="Tidak Ada">
                                                    <label class="form-check-label" for="k_c2">Tidak Ada</label>
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
                                        Bearing Generator
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Level minyak pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bg_a'] == 'cukup') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bg_a]" id="bg_a1" value="cukup">
                                                    <label class="form-check-label" for="bg_a1">cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bg_a'] == 'kurang') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bg_a]" id="bg_a2" value="kurang">
                                                    <label class="form-check-label" for="bg_a2">kurang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bg_b'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bg_b]" id="bg_b1" value="Ada">
                                                    <label class="form-check-label" for="bg_b1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bg_b'] == 'Tidak ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bg_b]" id="bg_b2" value="Tidak ada">
                                                    <label class="form-check-label" for="bg_b2">Tidak ada</label>
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
                                        Turning Gear
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran motor</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tg_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tg_a]" id="tg_a1" value="Normal">
                                                    <label class="form-check-label" for="tg_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tg_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tg_a]" id="tg_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="tg_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Putar crank shaft (min2x putaran)</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tg_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tg_b]" id="tg_b1" value="Normal">
                                                    <label class="form-check-label" for="tg_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tg_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tg_b]" id="tg_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="tg_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran air pada kran Indikator</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tg_c'] == 'Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tg_c]" id="tg_c1" value="Ada">
                                                    <label class="form-check-label" for="tg_c1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tg_c'] == 'Tidak Ada') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tg_c]" id="tg_c2" value="Tidak Ada">
                                                    <label class="form-check-label" for="tg_c2">Tidak Ada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Posisi handle start</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tg_d'] == 'Auto') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tg_d]" id="tg_d1" value="Auto">
                                                    <label class="form-check-label" for="tg_d1">Auto</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tg_d'] == 'Manual') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tg_d]" id="tg_d2" value="Manual">
                                                    <label class="form-check-label" for="tg_d2">Manual</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['tg_d'] == 'Stop') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[tg_d]" id="tg_d3" value="Stop">
                                                    <label class="form-check-label" for="tg_d3">Stop</label>
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
                                        OMD
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Status OMD</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['omd'] == 'Ready') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[omd]" id="omd1" value="Ready">
                                                    <label class="form-check-label" for="omd1">Ready</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['omd'] == 'Fault') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[omd]" id="omd2" value="Fault">
                                                    <label class="form-check-label" for="omd2">Fault</label>
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