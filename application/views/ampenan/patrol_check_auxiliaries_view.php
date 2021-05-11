<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('patrol_check_auxiliaries/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="<?= base_url() . 'patrol_check_auxiliaries/add'; ?>" class="btn btn-primary  mb-3">Data Baru</a>
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
                        <th>LO Purifier / Separator / COC</th>
                        <th>FO Separator</th>
                        <th>Intercooler / Radiator</th>
                        <th>Komperessor</th>
                        <th>Pemipaan pelumas</th>
                        <th>Pemipaan bahan bakar</th>
                        <th>Pemipaan air pendingin mesin</th>
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
                                <div class="btn btn-success btn-sm btn-sm lo" data-id="<?= $value['pk_patrol_check_auxiliaries']; ?>" data-toggle="modal" data-target="#lo"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm fo" data-id="<?= $value['pk_patrol_check_auxiliaries']; ?>" data-toggle="modal" data-target="#fo"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm ir" data-id="<?= $value['pk_patrol_check_auxiliaries']; ?>" data-toggle="modal" data-target="#ir"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm komp" data-id="<?= $value['pk_patrol_check_auxiliaries']; ?>" data-toggle="modal" data-target="#komp"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm pp" data-id="<?= $value['pk_patrol_check_auxiliaries']; ?>" data-toggle="modal" data-target="#pp"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm pbb" data-id="<?= $value['pk_patrol_check_auxiliaries']; ?>" data-toggle="modal" data-target="#pbb"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm papm" data-id="<?= $value['pk_patrol_check_auxiliaries']; ?>" data-toggle="modal" data-target="#papm"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <a href="<?= base_url('patrol_check_auxiliaries/edit/') . $value['pk_patrol_check_auxiliaries']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('patrol_check_auxiliaries/delete/') . $value['pk_patrol_check_auxiliaries']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

<!-- Modal LO Purifier / Separator / COC  -->
<div class="modal fade" id="lo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LO Purifier / Separator / COC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="lo_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="lo_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Bunyi</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="lo_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="lo_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Keocoran air</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="lo_e">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi baut</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="lo_f">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebersihan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="lo_g">Kosong</p>
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

<!-- Modal FO Separator  -->
<div class="modal fade" id="fo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FO Separator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="fo_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="fo_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Bunyi</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="fo_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="fo_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran air</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="fo_e">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi baut</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="fo_f">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebersihan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="fo_g">Kosong</p>
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

<!-- Modal Intercooler / Radiator  -->
<div class="modal fade" id="ir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Intercooler / Radiator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran turbocharger</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ir_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran air</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ir_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ir_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi baut</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ir_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebersihan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="ir_e">Kosong</p>
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

<!-- Modal Komperessor  -->
<div class="modal fade" id="komp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Komperessor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Pelumasan</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="k_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="k_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Bunyi</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="k_c">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="k_d">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran udara</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="k_e">Kosong</p>
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

<!-- Modal Pemipaan pelumas  -->
<div class="modal fade" id="pp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pemipaan pelumas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pp_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran pelumas</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pp_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi baut pengikat</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pp_c">Kosong</p>
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

<!-- Modal Pemipaan bahan bakar  -->
<div class="modal fade" id="pbb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pemipaan bahan bakar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pbb_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran bahan bakar</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pbb_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi baut pengikat</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="pbb_c">Kosong</p>
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

<!-- Modal Pemipaan air pendingin mesin  -->
<div class="modal fade" id="papm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pemipaan air pendingin mesin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Getaran</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="papm_a">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kebocoran air</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="papm_b">Kosong</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <label for="">Kondisi baut pengikat</label>
                            </div>
                            <div class="col-sm-5">
                                <p id="papm_c">Kosong</p>
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
                url: "<?= base_url('patrol_check_auxiliaries/ajax'); ?>",
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
                url: "<?= base_url('patrol_check_auxiliaries/ajax'); ?>",
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
                url: "<?= base_url('patrol_check_auxiliaries/ajax'); ?>",
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
                url: "<?= base_url('patrol_check_auxiliaries/ajax'); ?>",
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
                url: "<?= base_url('patrol_check_auxiliaries/ajax'); ?>",
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
                url: "<?= base_url('patrol_check_auxiliaries/ajax'); ?>",
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