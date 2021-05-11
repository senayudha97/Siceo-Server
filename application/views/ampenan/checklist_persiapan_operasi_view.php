<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('checklist_persiapan_operasi/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="<?= base_url() . 'checklist_persiapan_operasi/add'; ?>" class="btn btn-primary  mb-3">Data Baru</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control easydatepicker" name="tgl[awal]" value="<?= date('d-m-Y'); ?>">
                            </div>
                            <div class="col-sm-6">
                                <!-- <input type="text" class="form-control easydatepicker" name="tgl[akhir]" value="<?= date('d-m-Y'); ?>"> -->
                                <!-- <button type="submit" class="btn btn-danger rounded-0"><span class="fas fa-fw fa-file-pdf"></span>PDF</button> -->
                                &nbsp;
                                <button type="submit" name="excel" class="btn btn-success rounded-0"><span class="fas fa-fw fa-file-excel"></span>Excel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-lg-12 ext1">
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead class="textTable">
                    <tr>
                        <th>No</th>
                        <th>Tanggal Input</th>
                        <th>Waktu</th>
                        <th>User Input</th>
                        <th>Suplai Tegangan DC 110 dan 24 V untuk Kontrol dan Proteksi Pada Panel Battery Charger</th>
                        <th>Suplai Udara Start; Kontrol dan Proteksi</th>
                        <th>Sistem Bahan Bakar</th>
                        <th>Sistem Minyak Pelumas</th>
                        <th>Sistem Jacket Cooling Water</th>
                        <th>Sistem Injector Cooling Water/ Sistem Fuel Valve Cooling Oil</th>
                        <th>Motor Radiator J.C.W/ R.A.W/ Minyak Pelumas</th>
                        <th>Turbocharger</th>
                        <th>Governor</th>
                        <th>Kompressor</th>
                        <th>Bearing Generator</th>
                        <th>Turning Gear</th>
                        <th>OMD</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $value) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= content_date($value['tanggal_input']); ?></td>
                            <td><?= $value['waktu']; ?></td>
                            <td><?= $value['name']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm stdc" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#stdc"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm sus" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#sus"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm sbb" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#sbb"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm smp" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#smp"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm sjc" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#sjc"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm sic" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#sic"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td><?= $value['mr']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm tb" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#tb"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm gov" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#gov"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm komp" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#komp"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm bg" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#bg"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm tg" data-id="<?= $value['pk_checklist_persiapan_operasi']; ?>" data-toggle="modal" data-target="#tg"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td><?= $value['omd']; ?></td>
                            <td>
                                <a href="<?= base_url('checklist_persiapan_operasi/edit/') . $value['pk_checklist_persiapan_operasi']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('checklist_persiapan_operasi/delete/') . $value['pk_checklist_persiapan_operasi']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<!-- Modal Suplai tegangan DC -->
<div class="modal fade" id="stdc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suplai Tegangan DC 110 dan 24 V untuk Kontrol dan Proteksi Pada Panel Battery Charger</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Tegangan 110 V DC</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="stdc_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Tegangan 24 V DC</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="stdc_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Arus battery charger 110 V DC</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="stdc_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Arus battery charger 24 V DC</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="stdc_d">Kosong</p>
                            </div>
                        </div>

                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Suplai udara start -->
<div class="modal fade" id="sus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suplai Udara Start; Kontrol dan Proteksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Tekanan udara 30 Bar</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sus_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Tekanan udara 12 Bar</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sus_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Tek. udara kontrol 6 Bar</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sus_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Drain air kondensat</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sus_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran sistem udara start</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sus_e">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal sistem bahan bakar -->
<div class="modal fade" id="sbb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sistem Bahan Bakar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Level buffer tank</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sbb_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Level daily tank</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sbb_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran pompa BBM</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sbb_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Tekanan BBM (Bar)</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sbb_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Indikator filter BBM</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sbb_e">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran sistem BBM</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sbb_f">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal sistem minyak pelumas -->
<div class="modal fade" id="smp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sistem Minyak Pelumas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Level oli sump tank</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="smp_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Level oli di cylinder lubricating tank</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="smp_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran pompa</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="smp_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="smp_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Tekanan pelumasan (Bar)</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="smp_e">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Indikator filter otomatis</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="smp_f">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Putaran filter otomatis</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="smp_g">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Indikator filter halus</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="smp_h">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal sistem jacket cooling water -->
<div class="modal fade" id="sjc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sistem Jacket Cooling Water</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Level air di expantion tank</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sjc_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran pompa</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sjc_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sjc_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Tekanan JCW (Bar)</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sjc_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal sistem injector cooling water -->
<div class="modal fade" id="sic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sistem Injector Cooling Water/ Sistem Fuel Valve Cooling Oil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Level air di expantion tank</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sic_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran pompa</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sic_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sic_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Tekanan JCW (Bar)</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="sic_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal turbocharger -->
<div class="modal fade" id="tb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Turbocharger</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Level minyak pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="t_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="t_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal gevoernor -->
<div class="modal fade" id="gov" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Governor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Level minyak pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="g_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Posisi tombol load limit</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="g_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Posisi tombol speed drop</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="g_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="g_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal kompresor -->
<div class="modal fade" id="komp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kompressor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Level oil</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="k_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Sistem Pengisian</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="k_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran udara & oli</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="k_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal bearing generator -->
<div class="modal fade" id="bg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bearing Generator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Level minyak pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="bg_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="bg_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal turning gear -->
<div class="modal fade" id="tg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Turning Gear</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran motor</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="tg_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Putar crank shaft</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="tg_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran air pada kran indikator</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="tg_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Posisi handle start</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="tg_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            "scrollX": true
        });

        $('.ch').on('click', function() {
            console.log('test');
            $('#ch_a, #ch_b, #ch_c, #ch_d, #ch_e, #ch_f, #ch_g, #ch_h, #ch_i').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('checklist_persiapan_operasi/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#ch_a').text(hasil.ch_a);
                    $('#ch_b').text(hasil.ch_b);
                    $('#ch_c').text(hasil.ch_c);
                    $('#ch_d').text(hasil.ch_d);
                    $('#ch_e').text(hasil.ch_e);
                    $('#ch_f').text(hasil.ch_f);
                    $('#ch_g').text(hasil.ch_g);
                    $('#ch_h').text(hasil.ch_h);
                    $('#ch_i').text(hasil.ch_i);
                }
            });
        });

        $('.ip').on('click', function() {
            console.log('test');
            $('#ip_a, #ip_b, #ip_c, #ip_d, #ip_e, #ip_f, #ip_g, #ip_h').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('checklist_persiapan_operasi/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#ip_a').text(hasil.ip_a);
                    $('#ip_b').text(hasil.ip_b);
                    $('#ip_c').text(hasil.ip_c);
                    $('#ip_d').text(hasil.ip_d);
                    $('#ip_e').text(hasil.ip_e);
                    $('#ip_f').text(hasil.ip_f);
                    $('#ip_g').text(hasil.ip_g);
                    $('#ip_h').text(hasil.ip_h);
                }
            });
        });

        $('.gov').on('click', function() {
            console.log('test');
            $('#gov_a, #gov_b, #gov_c, #gov_d, #gov_e').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('checklist_persiapan_operasi/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#gov_a').text(hasil.gov_a);
                    $('#gov_b').text(hasil.gov_b);
                    $('#gov_c').text(hasil.gov_c);
                    $('#gov_d').text(hasil.gov_d);
                    $('#gov_e').text(hasil.gov_e);
                }
            });
        });

        $('.sgb').on('click', function() {
            console.log('test');
            $('#sgb_a, #sgb_b, #sgb_c, #sgb_d, #sgb_e, #sgb_f, #sgb_g').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('checklist_persiapan_operasi/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#sgb_a').text(hasil.sgb_a);
                    $('#sgb_b').text(hasil.sgb_b);
                    $('#sgb_c').text(hasil.sgb_c);
                    $('#sgb_d').text(hasil.sgb_d);
                    $('#sgb_e').text(hasil.sgb_e);
                    $('#sgb_f').text(hasil.sgb_f);
                    $('#sgb_g').text(hasil.sgb_g);
                }
            });
        });

        $('.bm').on('click', function() {
            console.log('test');
            $('#bm_a, #bm_b, #bm_c, #bm_d, #bm_e, #bm_f, #bm_g, #bm_h').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('checklist_persiapan_operasi/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#bm_a').text(hasil.bm_a);
                    $('#bm_b').text(hasil.bm_b);
                    $('#bm_c').text(hasil.bm_c);
                    $('#bm_d').text(hasil.bm_d);
                    $('#bm_e').text(hasil.bm_e);
                    $('#bm_f').text(hasil.bm_f);
                    $('#bm_g').text(hasil.bm_g);
                    $('#bm_h').text(hasil.bm_h);
                }
            });
        });

        $('.gen').on('click', function() {
            console.log('test');
            $('#gen_a, #gen_b, #gen_c, #gen_g, #gen_h, #gen_i').text(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('checklist_persiapan_operasi/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#gen_a').text(hasil.gen_a);
                    $('#gen_b').text(hasil.gen_b);
                    $('#gen_c').text(hasil.gen_c);
                    $('#gen_d').text(hasil.gen_d);
                    $('#gen_g').text(hasil.gen_g);
                    $('#gen_h').text(hasil.gen_h);
                    $('#gen_i').text(hasil.gen_i);
                }
            });
        });

    });
</script>