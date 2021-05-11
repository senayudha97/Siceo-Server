<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('checklist_start_mesin/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="<?= base_url() . 'checklist_start_mesin/add'; ?>" class="btn btn-primary  mb-3">Data Baru</a>
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
                        <th>Pastikan Mesin Layak untuk Operasi</th>
                        <th>Jalankan Pompa-Pompa Pelumas Mesin</th>
                        <th>Jalankan Pompa-Pompa Air Pendingin Mesin</th>
                        <th>Jalankan Pompa Kompresor</th>
                        <th>Buka kran indikator (KI) semua cylinder head</th>
                        <th>Putar fly wheel 3 putaran dengan turning gear</th>
                        <th>Pastikan turning gear sudah bebas dari fly wheel</th>
                        <th>Start mesin dengan pompa bahan bakar tidak operasi.</th>
                        <th>Tutup kran indikator (KI) semua cylinder head</th>
                        <th>Cek tekanan udara proteksi</th>
                        <th>Cek sumber tegangan DC 110 Vdc</th>
                        <th>Jalankan pompa bahan bakar</th>
                        <th>Pastikan mesin siap start dengan aman</th>
                        <th>Start mesin dan pertahankan putaran idle.</th>
                        <th>Buka KI, cek semburan yang keluar dari KI dan tutup.</th>
                        <th>Bila butir (14 & 15) normal, putaran idle dinaikkan ke putaran nominal</th>
                        <th>Bila butir (16) normal, mesin siap dibebani</th>
                        <th>Selama mulai pembebanan mesin sampai beban normal, cek parameter butir (16)</th>
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
                            <td><?= $value['mesin_layak_operasi']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm ppm" data-id="<?= $value['pk_checklist_start_mesin']; ?>" data-toggle="modal" data-target="#ppm"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm papm" data-id="<?= $value['pk_checklist_start_mesin']; ?>" data-toggle="modal" data-target="#papm"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm pk" data-id="<?= $value['pk_checklist_start_mesin']; ?>" data-toggle="modal" data-target="#pk"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td><?= $value['buka_ki']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm fw" data-id="<?= $value['pk_checklist_start_mesin']; ?>" data-toggle="modal" data-target="#fw"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td><?= $value['turning_gear']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm start_mesin_pompa" data-id="<?= $value['pk_checklist_start_mesin']; ?>" data-toggle="modal" data-target="#start_mesin_pompa"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td><?= $value['tutup_ki']; ?></td>
                            <td><?= $value['cek_tekanan_udara']; ?></td>
                            <td><?= $value['cek_sumber_tegangan']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm pbb" data-id="<?= $value['pk_checklist_start_mesin']; ?>" data-toggle="modal" data-target="#pbb"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td><?= $value['pastikan_mesin_aman']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm start_mesin_pertahankan" data-id="<?= $value['pk_checklist_start_mesin']; ?>" data-toggle="modal" data-target="#start_mesin_pertahankan"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td><?= $value['buka_ki_cek_semburan']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm putaran_idle" data-id="<?= $value['pk_checklist_start_mesin']; ?>" data-toggle="modal" data-target="#putaran_idle"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td><?= $value['mesin_siap_dibebani']; ?></td>
                            <td><?= $value['selama_mulai_pembebanan']; ?></td>
                            <td>
                                <a href="<?= base_url('checklist_start_mesin/edit/') . $value['pk_checklist_start_mesin']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('checklist_start_mesin/delete/') . $value['pk_checklist_start_mesin']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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


<!-- Modal jalankan pompa pomapa pelumas mesin -->
<div class="modal fade" id="ppm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jalankan Pompa-Pompa Pelumas Mesin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek getaran pompa</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ppm_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek tekanan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ppm_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek suhu</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ppm_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek kebocoran pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ppm_d">Kosong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Jalankan pompa – pompa air pendingin mesin.  -->
<div class="modal fade" id="papm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jalankan pompa – pompa air pendingin mesin. </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek getaran pompa</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="papm_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek tekanan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="papm_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek suhu</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="papm_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek kebocoran air</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="papm_d">Kosong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal pompa kompersor  -->
<div class="modal fade" id="pk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jalankan pompa kompressor </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek getaran kompressor</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pk_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek tekanan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pk_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek suhu</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pk_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Buang air kondensat</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pk_d">Kosong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Putar fly wheel 3 putaran dengan turning gear -->
<div class="modal fade" id="fw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Putar fly wheel 3 putaran dengan turning gear</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek air keluar KI.</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="fw_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek pelumas keluar KI</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="fw_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek kerja turning gear</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="fw_c">Kosong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Start mesin dengan pompa bahan bakar tidak operasi. -->
<div class="modal fade" id="start_mesin_pompa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Start mesin dengan pompa bahan bakar tidak operasi.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek air keluar KI.</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="start_mesin_pompa_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek pelumas keluar KI</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="start_mesin_pompa_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek semburan keluar KI. </label>
                            </div>
                            <div class="col-sm-5">
                                <p id="start_mesin_pompa_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek ayunan fly wheel</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="start_mesin_pompa_d">Kosong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Jalankan pompa bahan bakar   -->
<div class="modal fade" id="pbb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jalankan pompa bahan bakar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek getaran pompa</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pbb_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek tekanan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pbb_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek suhu</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pbb_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek kebocoran b. bakar</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pbb_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Buang angin pada filter</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pbb_e">Kosong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Start mesin  dan pertahankan putaran idle.   -->
<div class="modal fade" id="start_mesin_pertahankan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Start mesin dan pertahankan putaran idle.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek tekanan pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="start_mesin_pertahankan_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek suhu pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="start_mesin_pertahankan_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek suhu bearing</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="start_mesin_pertahankan_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek bunyi mesin</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="start_mesin_pertahankan_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek getaran mesin</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="start_mesin_pertahankan_e">Kosong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Bila butir (14 & 15) normal, putaran idle dinaikkan ke putaran nominal   -->
<div class="modal fade" id="putaran_idle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bila butir (14 & 15) normal, putaran idle dinaikkan ke putaran nominal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek tekanan pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="putaran_idle_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek suhu pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="putaran_idle_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek suhu bearing</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="putaran_idle_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek bunyi mesin</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="putaran_idle_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek getaran mesin</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="putaran_idle_e">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek tekanan b. bakar</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="putaran_idle_f">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek tekanan air</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="putaran_idle_g">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Cek suhu air</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="putaran_idle_h">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Bahan bakar</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="putaran_idle_i">Kosong</p>
                            </div>
                        </div>
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
                url: "<?= base_url('checklist_start_mesin/ajax'); ?>",
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
                url: "<?= base_url('checklist_start_mesin/ajax'); ?>",
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
                url: "<?= base_url('checklist_start_mesin/ajax'); ?>",
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
                url: "<?= base_url('checklist_start_mesin/ajax'); ?>",
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
                url: "<?= base_url('checklist_start_mesin/ajax'); ?>",
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
                url: "<?= base_url('checklist_start_mesin/ajax'); ?>",
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