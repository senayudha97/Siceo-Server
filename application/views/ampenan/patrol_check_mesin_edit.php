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
            <form action="<?= base_url('patrol_check_mesin/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="text" name="pk[pk_patrol_check_mesin]" value="<?= $edit['pk_patrol_check_mesin']; ?>">
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
                                        Cylinder Head
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pelumasan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_a]" id="ch_a1" value="Normal">
                                                    <label class="form-check-label" for="ch_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_a]" id="ch_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ch_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_b]" id="ch_b1" value="Normal">
                                                    <label class="form-check-label" for="ch_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_b]" id="ch_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ch_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Bunyi</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_c]" id="ch_c1" value="Normal">
                                                    <label class="form-check-label" for="ch_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_c]" id="ch_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ch_c2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_d]" id="ch_d1" value="Normal">
                                                    <label class="form-check-label" for="ch_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_d]" id="ch_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ch_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran solar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_e'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_e]" id="ch_e1" value="Normal">
                                                    <label class="form-check-label" for="ch_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_e'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_e]" id="ch_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ch_e2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran air</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_f'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_f]" id="ch_f1" value="Normal">
                                                    <label class="form-check-label" for="ch_f1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_f'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_f]" id="ch_f2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ch_f2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran gas buang</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_g'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_g]" id="ch_g1" value="Normal">
                                                    <label class="form-check-label" for="ch_g1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_g'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_g]" id="ch_g2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ch_g2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi baut</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_h'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_h]" id="ch_h1" value="Normal">
                                                    <label class="form-check-label" for="ch_h1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_h'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_h]" id="ch_h2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ch_h2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebersihan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_i'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_i]" id="ch_i1" value="Normal">
                                                    <label class="form-check-label" for="ch_i1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_i'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_i]" id="ch_i2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ch_i2">Tidak Normal</label>
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
                                        Injection Pump
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pelumasan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_a]" id="ip_a1" value="Normal">
                                                    <label class="form-check-label" for="ip_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_a]" id="ip_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ip_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_b]" id="ip_b1" value="Normal">
                                                    <label class="form-check-label" for="ip_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_b]" id="ip_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ip_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Bunyi</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_c]" id="ip_c1" value="Normal">
                                                    <label class="form-check-label" for="ip_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_c]" id="ip_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ip_c2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_d]" id="ip_d1" value="Normal">
                                                    <label class="form-check-label" for="ip_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_d]" id="ip_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ip_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran solar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_e'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_e]" id="ip_e1" value="Normal">
                                                    <label class="form-check-label" for="ip_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_e'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_e]" id="ip_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ip_e2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi baut</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_f'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_f]" id="ip_f1" value="Normal">
                                                    <label class="form-check-label" for="ip_f1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_f'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_f]" id="ip_f2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ip_f2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi rack</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_g'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_g]" id="ip_g1" value="Normal">
                                                    <label class="form-check-label" for="ip_g1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_g'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_g]" id="ip_g2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ip_g2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebersihan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_h'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_h]" id="ip_h1" value="Normal">
                                                    <label class="form-check-label" for="ip_h1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_h'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_h]" id="ip_h2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ip_h2">Tidak Normal</label>
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
                                                <label for="">Pelumasan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_a]" id="gov_a1" value="Normal">
                                                    <label class="form-check-label" for="gov_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_a]" id="gov_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gov_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_b]" id="gov_b1" value="Normal">
                                                    <label class="form-check-label" for="gov_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_b]" id="gov_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gov_b2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_c]" id="gov_c1" value="Normal">
                                                    <label class="form-check-label" for="gov_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_c]" id="gov_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gov_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi baut</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_d]" id="gov_d1" value="Normal">
                                                    <label class="form-check-label" for="gov_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_d]" id="gov_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gov_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebersihan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_e'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_e]" id="gov_e1" value="Normal">
                                                    <label class="form-check-label" for="gov_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_e'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_e]" id="gov_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gov_e2">Tidak Normal</label>
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
                                        System Gas Buang
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran turbocharger</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_a]" id="sgb_a1" value="Normal">
                                                    <label class="form-check-label" for="sgb_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_a]" id="sgb_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="sgb_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Bunyi turbocharger</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_b]" id="sgb_b1" value="Normal">
                                                    <label class="form-check-label" for="sgb_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_b]" id="sgb_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="sgb_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pelumas turbo</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_c]" id="sgb_c1" value="Normal">
                                                    <label class="form-check-label" for="sgb_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_c]" id="sgb_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="sgb_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran pelumas turbo</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_d]" id="sgb_d1" value="Normal">
                                                    <label class="form-check-label" for="sgb_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_d]" id="sgb_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="sgb_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran air turbo</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_e'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_e]" id="sgb_e1" value="Normal">
                                                    <label class="form-check-label" for="sgb_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_e'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_e]" id="sgb_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="sgb_e2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran gas buang</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_f'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_f]" id="sgb_f1" value="Normal">
                                                    <label class="form-check-label" for="sgb_f1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_f'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_f]" id="sgb_f2" value="Tidak Normal">
                                                    <label class="form-check-label" for="sgb_f2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran udara masuk</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_g'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_g]" id="sgb_g1" value="Normal">
                                                    <label class="form-check-label" for="sgb_g1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_g'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_g]" id="sgb_g2" value="Tidak Normal">
                                                    <label class="form-check-label" for="sgb_g2">Tidak Normal</label>
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
                                        Blok Mesin
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pelumasan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_a]" id="bm_a1" value="Normal">
                                                    <label class="form-check-label" for="bm_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_a]" id="bm_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="bm_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_b]" id="bm_b1" value="Normal">
                                                    <label class="form-check-label" for="bm_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_b]" id="bm_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="bm_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Bunyi</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_c]" id="bm_c1" value="Normal">
                                                    <label class="form-check-label" for="bm_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_c]" id="bm_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="bm_c2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_d]" id="bm_d1" value="Normal">
                                                    <label class="form-check-label" for="bm_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_d]" id="bm_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="bm_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran solar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_e'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_e]" id="bm_e1" value="Normal">
                                                    <label class="form-check-label" for="bm_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_e'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_e]" id="bm_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="bm_e2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran air</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_f'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_f]" id="bm_f1" value="Normal">
                                                    <label class="form-check-label" for="bm_f1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_f'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_f]" id="bm_f2" value="Tidak Normal">
                                                    <label class="form-check-label" for="bm_f2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi baut</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_g'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_g]" id="bm_g1" value="Normal">
                                                    <label class="form-check-label" for="bm_g1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_g'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_g]" id="bm_g2" value="Tidak Normal">
                                                    <label class="form-check-label" for="bm_g2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebersihan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_h'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_h]" id="bm_h1" value="Normal">
                                                    <label class="form-check-label" for="bm_h1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_h'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_h]" id="bm_h2" value="Tidak Normal">
                                                    <label class="form-check-label" for="bm_h2">Tidak Normal</label>
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
                                        Generator
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pelumasan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_a'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_a]" id="gen_a1" value="Normal">
                                                    <label class="form-check-label" for="gen_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_a'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_a]" id="gen_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gen_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_b'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_b]" id="gen_b1" value="Normal">
                                                    <label class="form-check-label" for="gen_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_b'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_b]" id="gen_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gen_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Bunyi</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_c'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_c]" id="gen_c1" value="Normal">
                                                    <label class="form-check-label" for="gen_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_c'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_c]" id="gen_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gen_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi baut</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_d'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_d]" id="gen_d1" value="Normal">
                                                    <label class="form-check-label" for="gen_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_d'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_d]" id="gen_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gen_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebersihan saringan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_e'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_e]" id="gen_e1" value="Normal">
                                                    <label class="form-check-label" for="gen_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_e'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_e]" id="gen_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gen_e2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebersihan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_f'] == 'Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_f]" id="gen_f1" value="Normal">
                                                    <label class="form-check-label" for="gen_f1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_f'] == 'Tidak Normal') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_f]" id="gen_f2" value="Tidak Normal">
                                                    <label class="form-check-label" for="gen_f2">Tidak Normal</label>
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