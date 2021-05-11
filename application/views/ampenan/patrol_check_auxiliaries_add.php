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

    <h1 class="h3 mb-4 text-gray-800">Tambah Data <?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-12">
            <form action="<?= base_url('patrol_check_auxiliaries/add'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_patrol_check_auxiliaries]" value="<?= 'PCA' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="tanggal_input" class="col-sm-3 col-form-label">Tanggal Input</label>
                            <div class="col-sm-9">
                                <input type="text" required readonly class="form-control easydatepicker " id="tanggal_input" placeholder="Klik untuk input tanggal" name="input[tanggal_input]">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="waktu" class="col-sm-3 col-form-label">Waktu Input</label>
                            <div class="col-sm-9">
                                <?php form_waktu("input[waktu]") ?>
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
                                        LO Purifier / Separator / COC
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pelumasan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[lo_a]" id="lo_a1" value="Normal">
                                                    <label class="form-check-label" for="lo_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[lo_a]" id="lo_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="lo_a2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[lo_b]" id="lo_b1" value="Normal">
                                                    <label class="form-check-label" for="lo_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[lo_b]" id="lo_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="lo_b2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[lo_c]" id="lo_c1" value="Normal">
                                                    <label class="form-check-label" for="lo_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[lo_c]" id="lo_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="lo_c2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[lo_d]" id="lo_d1" value="Normal">
                                                    <label class="form-check-label" for="lo_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[lo_d]" id="lo_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="lo_d2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[lo_e]" id="lo_e1" value="Normal">
                                                    <label class="form-check-label" for="lo_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[lo_e]" id="lo_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="lo_e2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[lo_f]" id="lo_f1" value="Normal">
                                                    <label class="form-check-label" for="lo_f1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[lo_f]" id="lo_f2" value="Tidak Normal">
                                                    <label class="form-check-label" for="lo_f2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[lo_g]" id="lo_g1" value="Normal">
                                                    <label class="form-check-label" for="lo_g1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[lo_g]" id="lo_g2" value="Tidak Normal">
                                                    <label class="form-check-label" for="lo_g2">Tidak Normal</label>
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
                                        FO Separator
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pelumasan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[fo_a]" id="fo_a1" value="Normal">
                                                    <label class="form-check-label" for="fo_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[fo_a]" id="fo_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="fo_a2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[fo_b]" id="fo_b1" value="Normal">
                                                    <label class="form-check-label" for="fo_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[fo_b]" id="fo_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="fo_b2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[fo_c]" id="fo_c1" value="Normal">
                                                    <label class="form-check-label" for="fo_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[fo_c]" id="fo_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="fo_c2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[fo_d]" id="fo_d1" value="Normal">
                                                    <label class="form-check-label" for="fo_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[fo_d]" id="fo_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="fo_d2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[fo_e]" id="fo_e1" value="Normal">
                                                    <label class="form-check-label" for="fo_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[fo_e]" id="fo_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="fo_e2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[fo_f]" id="fo_f1" value="Normal">
                                                    <label class="form-check-label" for="fo_f1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[fo_f]" id="fo_f2" value="Tidak Normal">
                                                    <label class="form-check-label" for="fo_f2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[fo_g]" id="fo_g1" value="Normal">
                                                    <label class="form-check-label" for="fo_g1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[fo_g]" id="fo_g2" value="Tidak Normal">
                                                    <label class="form-check-label" for="fo_g2">Tidak Normal</label>
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
                                        Intercooler / Radiator
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran turbocharger</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[ir_a]" id="ir_a1" value="Normal">
                                                    <label class="form-check-label" for="ir_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[ir_a]" id="ir_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ir_a2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[ir_b]" id="ir_b1" value="Normal">
                                                    <label class="form-check-label" for="ir_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[ir_b]" id="ir_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ir_b2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[ir_c]" id="ir_c1" value="Normal">
                                                    <label class="form-check-label" for="ir_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[ir_c]" id="ir_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ir_c2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[ir_d]" id="ir_d1" value="Normal">
                                                    <label class="form-check-label" for="ir_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[ir_d]" id="ir_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ir_d2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[ir_e]" id="ir_e1" value="Normal">
                                                    <label class="form-check-label" for="ir_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[ir_e]" id="ir_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="ir_e2">Tidak Normal</label>
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
                                        Komperessor
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pelumasan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[k_a]" id="k_a1" value="Normal">
                                                    <label class="form-check-label" for="k_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[k_a]" id="k_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="k_a2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[k_b]" id="k_b1" value="Normal">
                                                    <label class="form-check-label" for="k_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[k_b]" id="k_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="k_b2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[k_c]" id="k_c1" value="Normal">
                                                    <label class="form-check-label" for="k_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[k_c]" id="k_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="k_c2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[k_d]" id="k_d1" value="Normal">
                                                    <label class="form-check-label" for="k_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[k_d]" id="k_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="k_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran udara</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[k_e]" id="k_e1" value="Normal">
                                                    <label class="form-check-label" for="k_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[k_e]" id="k_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="k_e2">Tidak Normal</label>
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
                                        Pemipaan pelumas
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pp_a]" id="pp_a1" value="Normal">
                                                    <label class="form-check-label" for="pp_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pp_a]" id="pp_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pp_a2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[pp_b]" id="pp_b1" value="Normal">
                                                    <label class="form-check-label" for="pp_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pp_b]" id="pp_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pp_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi baut pengikat</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pp_c]" id="pp_c1" value="Normal">
                                                    <label class="form-check-label" for="pp_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pp_c]" id="pp_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pp_c2">Tidak Normal</label>
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
                                        Pemipaan bahan bakar
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pbb_a]" id="pbb_a1" value="Normal">
                                                    <label class="form-check-label" for="pbb_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pbb_a]" id="pbb_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pbb_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran bahan bakar</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pbb_b]" id="pbb_b1" value="Normal">
                                                    <label class="form-check-label" for="pbb_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pbb_b]" id="pbb_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pbb_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi baut pengikat</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pbb_c]" id="pbb_c1" value="Normal">
                                                    <label class="form-check-label" for="pbb_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pbb_c]" id="pbb_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pbb_c2">Tidak Normal</label>
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
                                        Pemipaan air pendingin mesin
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Getaran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pap_a]" id="pap_a1" value="Normal">
                                                    <label class="form-check-label" for="pap_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pap_a]" id="pap_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pap_a2">Tidak Normal</label>
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
                                                    <input class="form-check-input" type="radio" name="input[pap_b]" id="pap_b1" value="Normal">
                                                    <label class="form-check-label" for="pap_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pap_b]" id="pap_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pap_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kondisi baut pengikat</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pap_c]" id="pap_c1" value="Normal">
                                                    <label class="form-check-label" for="pap_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pap_c]" id="pap_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pap_c2">Tidak Normal</label>
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
                    <button type="submit" class="btn btn-primary ">Tambah</button>
                </div>
            </form>
        </div>
    </di>
</div>
</div>