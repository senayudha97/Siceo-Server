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
            <form action="<?= base_url('checklist_stop_mesin/add'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_checklist_stop_mesin]" value="<?= 'PBP' . date('dhs'); ?>">
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
                                        Beban operasi mesin
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Beban operasi mesin</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[beban_operasi_mesin]" id="beban_operasi_mesin1" value="Normal">
                                                    <label class="form-check-label" for="beban_operasi_mesin1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[beban_operasi_mesin]" id="beban_operasi_mesin2" value="Tidak Normal">
                                                    <label class="form-check-label" for="beban_operasi_mesin2">Tidak Normal</label>
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
                                        Change Over BBM dari MFO ke HSD
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Tekanan BBM - MFO</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[change_over_a]" id="change_over_a1" value="Normal">
                                                    <label class="form-check-label" for="change_over_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[change_over_a]" id="change_over_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="change_over_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Posisi valve sistem HSD</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[change_over_b]" id="change_over_b1" value="Normal">
                                                    <label class="form-check-label" for="change_over_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[change_over_b]" id="change_over_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="change_over_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Pompa Sirkulasi HSD</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[change_over_c]" id="change_over_c1" value="Normal">
                                                    <label class="form-check-label" for="change_over_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[change_over_c]" id="change_over_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="change_over_c2">Tidak Normal</label>
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
                                        Pelepasan Beban
                                    </div>
                                    <div class="card-body">
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Penurunan Beban s/d 200 kW</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_a]" id="pelepasan_beban_a1" value="Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_a1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_a]" id="pelepasan_beban_a2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_a2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">VCB Lepas normal</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_b]" id="pelepasan_beban_b1" value="Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_b1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_b]" id="pelepasan_beban_b2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_b2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Switch control</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_c]" id="pelepasan_beban_c1" value="Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_c1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_c]" id="pelepasan_beban_c2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_c2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Putaran mesin</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_d]" id="pelepasan_beban_d1" value="Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_d1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_d]" id="pelepasan_beban_d2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_d2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kelainan suara</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_e]" id="pelepasan_beban_e1" value="Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_e1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_e]" id="pelepasan_beban_e2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_e2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Kebocoran fluida</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_f]" id="pelepasan_beban_f1" value="Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_f1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_f]" id="pelepasan_beban_f2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_f2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Buka Indicator cock</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_g]" id="pelepasan_beban_g1" value="Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_g1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_g]" id="pelepasan_beban_g2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_g2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Engine Stop</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_h]" id="pelepasan_beban_h1" value="Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_h1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_h]" id="pelepasan_beban_h2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_h2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Putar turning gear min 2 putaran untuk memastikan ada tidaknya kebocoran</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_i]" id="pelepasan_beban_i1" value="Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_i1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_i]" id="pelepasan_beban_i2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_i2">Tidak Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Akhir checklist baru -->
                                        <!-- Awal checklist baru -->
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label for="">Matikan motor- motor auxiliaries</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_j]" id="pelepasan_beban_j1" value="Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_j1">Normal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="input[pelepasan_beban_j]" id="pelepasan_beban_j2" value="Tidak Normal">
                                                    <label class="form-check-label" for="pelepasan_beban_j2">Tidak Normal</label>
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