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
            <form action="<?= base_url('Log_paok_motong_checklist/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_checklist]" value="<?= 'PBP' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[update_by]">
                    <input type="text" name="pk[pk_checklist]" value="<?= $edit['pk_checklist']; ?>">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="tanggal_input" class="col-sm-3 col-form-label">Tanggal Input</label>
                            <div class="col-sm-9">
                                <input type="text" required readonly class="form-control easydatepicker" value="<?= $edit['tanggal_input']; ?>" id="tanggal_input" placeholder="Klik untuk input tanggal" name="input[tanggal_input]">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="waktu_input" class="col-sm-3 col-form-label">Waktu Input</label>
                            <div class="col-sm-9">
                                <input type="text" required class="form-control easytimepicker" value="<?= $edit['waktu_input']; ?>" id="waktu_input" name="input[waktu_input]">
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_a'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_a]" id="ch_a1" value="Ya">
                                                    <label class="form-check-label" for="ch_a1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_a'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_a]" id="ch_a2" value="Tidak">
                                                    <label class="form-check-label" for="ch_a2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_b'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_b]" id="ch_b1" value="Ya">
                                                    <label class="form-check-label" for="ch_b1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_b'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_b]" id="ch_b2" value="Tidak">
                                                    <label class="form-check-label" for="ch_b2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_c'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_c]" id="ch_c1" value="Ya">
                                                    <label class="form-check-label" for="ch_c1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_c'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_c]" id="ch_c2" value="Tidak">
                                                    <label class="form-check-label" for="ch_c2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_d'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_d]" id="ch_d1" value="Ya">
                                                    <label class="form-check-label" for="ch_d1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_d'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_d]" id="ch_d2" value="Tidak">
                                                    <label class="form-check-label" for="ch_d2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Solar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_e'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_e]" id="ch_e1" value="Ya">
                                                    <label class="form-check-label" for="ch_e1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_e'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_e]" id="ch_e2" value="Tidak">
                                                    <label class="form-check-label" for="ch_e2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Air</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_f'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_f]" id="ch_f1" value="Ya">
                                                    <label class="form-check-label" for="ch_f1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_f'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_f]" id="ch_f2" value="Tidak">
                                                    <label class="form-check-label" for="ch_f2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Gas Buang</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_g'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_g]" id="ch_g1" value="Ya">
                                                    <label class="form-check-label" for="ch_g1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_g'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_g]" id="ch_g2" value="Tidak">
                                                    <label class="form-check-label" for="ch_g2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi Baut</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_h'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_h]" id="ch_h1" value="Ya">
                                                    <label class="form-check-label" for="ch_h1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_h'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_h]" id="ch_h2" value="Tidak">
                                                    <label class="form-check-label" for="ch_h2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_i'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_i]" id="ch_i1" value="Ya">
                                                    <label class="form-check-label" for="ch_i1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ch_i'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ch_i]" id="ch_i2" value="Tidak">
                                                    <label class="form-check-label" for="ch_i2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_a'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_a]" id="ip_a1" value="Ya">
                                                    <label class="form-check-label" for="ip_a1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_a'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_a]" id="ip_a2" value="Tidak">
                                                    <label class="form-check-label" for="ip_a2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_b'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_b]" id="ip_b1" value="Ya">
                                                    <label class="form-check-label" for="ip_b1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_b'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_b]" id="ip_b2" value="Tidak">
                                                    <label class="form-check-label" for="ip_b2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_c'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_c]" id="ip_c1" value="Ya">
                                                    <label class="form-check-label" for="ip_c1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_c'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_c]" id="ip_c2" value="Tidak">
                                                    <label class="form-check-label" for="ip_c2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_d'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_d]" id="ip_d1" value="Ya">
                                                    <label class="form-check-label" for="ip_d1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_d'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_d]" id="ip_d2" value="Tidak">
                                                    <label class="form-check-label" for="ip_d2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Solar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_e'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_e]" id="ip_e1" value="Ya">
                                                    <label class="form-check-label" for="ip_e1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_e'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_e]" id="ip_e2" value="Tidak">
                                                    <label class="form-check-label" for="ip_e2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi Baut</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_f'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_f]" id="ip_f1" value="Ya">
                                                    <label class="form-check-label" for="ip_f1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_f'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_f]" id="ip_f2" value="Tidak">
                                                    <label class="form-check-label" for="ip_f2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi Rack</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_g'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_g]" id="ip_g1" value="Ya">
                                                    <label class="form-check-label" for="ip_g1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_g'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_g]" id="ip_g2" value="Tidak">
                                                    <label class="form-check-label" for="ip_g2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_h'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_h]" id="ip_h1" value="Ya">
                                                    <label class="form-check-label" for="ip_h1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['ip_h'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[ip_h]" id="ip_h2" value="Tidak">
                                                    <label class="form-check-label" for="ip_h2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_a'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_a]" id="gov_a1" value="Ya">
                                                    <label class="form-check-label" for="gov_a1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_a'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_a]" id="gov_a2" value="Tidak">
                                                    <label class="form-check-label" for="gov_a2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_b'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_b]" id="gov_b1" value="Ya">
                                                    <label class="form-check-label" for="gov_b1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_b'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_b]" id="gov_b2" value="Tidak">
                                                    <label class="form-check-label" for="gov_b2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_c'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_c]" id="gov_c1" value="Ya">
                                                    <label class="form-check-label" for="gov_c1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_c'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_c]" id="gov_c2" value="Tidak">
                                                    <label class="form-check-label" for="gov_c2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi Baut</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_d'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_d]" id="gov_d1" value="Ya">
                                                    <label class="form-check-label" for="gov_d1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_d'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_d]" id="gov_d2" value="Tidak">
                                                    <label class="form-check-label" for="gov_d2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_e'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_e]" id="gov_e1" value="Ya">
                                                    <label class="form-check-label" for="gov_e1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gov_e'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gov_e]" id="gov_e2" value="Tidak">
                                                    <label class="form-check-label" for="gov_e2">Tidak</label>
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
                                                <label for="">Getaran Turbocharger</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_a'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_a]" id="sgb_a1" value="Ya">
                                                    <label class="form-check-label" for="sgb_a1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_a'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_a]" id="sgb_a2" value="Tidak">
                                                    <label class="form-check-label" for="sgb_a2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Bunyi Turbocharger</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_b'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_b]" id="sgb_b1" value="Ya">
                                                    <label class="form-check-label" for="sgb_b1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_b'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_b]" id="sgb_b2" value="Tidak">
                                                    <label class="form-check-label" for="sgb_b2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pelumas Turbo</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_c'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_c]" id="sgb_c1" value="Ya">
                                                    <label class="form-check-label" for="sgb_c1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_c'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_c]" id="sgb_c2" value="Tidak">
                                                    <label class="form-check-label" for="sgb_c2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Pelumas Turbo</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_d'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_d]" id="sgb_d1" value="Ya">
                                                    <label class="form-check-label" for="sgb_d1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_d'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_d]" id="sgb_d2" value="Tidak">
                                                    <label class="form-check-label" for="sgb_d2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Air Turbo</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_e'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_e]" id="sgb_e1" value="Ya">
                                                    <label class="form-check-label" for="sgb_e1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_e'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_e]" id="sgb_e2" value="Tidak">
                                                    <label class="form-check-label" for="sgb_e2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Gas Buang</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_f'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_f]" id="sgb_f1" value="Ya">
                                                    <label class="form-check-label" for="sgb_f1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_f'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_f]" id="sgb_f2" value="Tidak">
                                                    <label class="form-check-label" for="sgb_f2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Udara Masuk</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_g'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_g]" id="sgb_g1" value="Ya">
                                                    <label class="form-check-label" for="sgb_g1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['sgb_g'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[sgb_g]" id="sgb_g2" value="Tidak">
                                                    <label class="form-check-label" for="sgb_g2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_a'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_a]" id="bm_a1" value="Ya">
                                                    <label class="form-check-label" for="bm_a1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_a'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_a]" id="bm_a2" value="Tidak">
                                                    <label class="form-check-label" for="bm_a2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_b'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_b]" id="bm_b1" value="Ya">
                                                    <label class="form-check-label" for="bm_b1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_b'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_b]" id="bm_b2" value="Tidak">
                                                    <label class="form-check-label" for="bm_b2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_c'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_c]" id="bm_c1" value="Ya">
                                                    <label class="form-check-label" for="bm_c1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_c'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_c]" id="bm_c2" value="Tidak">
                                                    <label class="form-check-label" for="bm_c2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Pelumas</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_d'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_d]" id="bm_d1" value="Ya">
                                                    <label class="form-check-label" for="bm_d1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_d'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_d]" id="bm_d2" value="Tidak">
                                                    <label class="form-check-label" for="bm_d2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Solar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_e'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_e]" id="bm_e1" value="Ya">
                                                    <label class="form-check-label" for="bm_e1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_e'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_e]" id="bm_e2" value="Tidak">
                                                    <label class="form-check-label" for="bm_e2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran Air</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_f'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_f]" id="bm_f1" value="Ya">
                                                    <label class="form-check-label" for="bm_f1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_f'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_f]" id="bm_f2" value="Tidak">
                                                    <label class="form-check-label" for="bm_f2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi Baut</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_g'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_g]" id="bm_g1" value="Ya">
                                                    <label class="form-check-label" for="bm_g1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_g'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_g]" id="bm_g2" value="Tidak">
                                                    <label class="form-check-label" for="bm_g2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_h'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_h]" id="bm_h1" value="Ya">
                                                    <label class="form-check-label" for="bm_h1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['bm_h'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[bm_h]" id="bm_h2" value="Tidak">
                                                    <label class="form-check-label" for="bm_h2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_a'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_a]" id="gen_a1" value="Ya">
                                                    <label class="form-check-label" for="gen_a1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_a'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_a]" id="gen_a2" value="Tidak">
                                                    <label class="form-check-label" for="gen_a2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_b'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_b]" id="gen_b1" value="Ya">
                                                    <label class="form-check-label" for="gen_b1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_b'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_b]" id="gen_b2" value="Tidak">
                                                    <label class="form-check-label" for="gen_b2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_c'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_c]" id="gen_c1" value="Ya">
                                                    <label class="form-check-label" for="gen_c1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_c'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_c]" id="gen_c2" value="Tidak">
                                                    <label class="form-check-label" for="gen_c2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi Baut</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_g'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_g]" id="gen_g1" value="Ya">
                                                    <label class="form-check-label" for="gen_g1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_g'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_g]" id="gen_g2" value="Tidak">
                                                    <label class="form-check-label" for="gen_g2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebersihan Saringan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_h'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_h]" id="gen_h1" value="Ya">
                                                    <label class="form-check-label" for="gen_h1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_h'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_h]" id="gen_h2" value="Tidak">
                                                    <label class="form-check-label" for="gen_h2">Tidak</label>
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
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_i'] == 'Ya') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_i]" id="gen_i1" value="Ya">
                                                    <label class="form-check-label" for="gen_i1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php if ($edit['gen_i'] == 'Tidak') {
                                                                                                        echo 'checked';
                                                                                                    } ?> name="input[gen_i]" id="gen_i2" value="Tidak">
                                                    <label class="form-check-label" for="gen_i2">Tidak</label>
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
                    <button type="submit" class="btn btn-primary ">Edit</button>
                </div>
            </form>
        </div>
    </di>
</div>
</div>