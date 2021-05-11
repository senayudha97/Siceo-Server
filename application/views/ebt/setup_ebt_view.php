<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?= form_error('menu', '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        ', '</div>'); ?>

    <?= $this->session->flashdata('message'); ?>

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-12">
            <a href="" class="btn btn-primary rounded-0 mb-5" data-toggle="modal" data-target="#exampleModal">Data Baru</a>
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Input</th>
                        <th scope="col">Generator</th>
                        <th scope="col">Type</th>
                        <th scope="col">Power</th>
                        <th scope="col">Voltage</th>
                        <th scope="col">Current</th>
                        <th scope="col">Cos Phi</th>
                        <th scope="col">Freq</th>
                        <th scope="col">RPM</th>
                        <th scope="col">Excitacion</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= content_date($row['tanggal_input']); ?></td>
                            <td><?= $row['generator']; ?></td>
                            <td><?= $row['type']; ?></td>
                            <td><?= $row['power']; ?></td>
                            <td><?= $row['voltage']; ?></td>
                            <td><?= $row['current']; ?></td>
                            <td><?= $row['cos_phi']; ?></td>
                            <td><?= $row['freq']; ?></td>
                            <td><?= $row['rpm']; ?></td>
                            <td><?= $row['excitacion']; ?></td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm btn-sm editModal" data-id="<?= $row['pk_setup_ebt']; ?>" data-toggle="modal" data-target="#editModal"><span class=" fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('setup_ebt/delete/') . $row['pk_setup_ebt']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </di>
</div>
</div>


<!-- Modal add-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Setup Data EBT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('setup_ebt/add'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_setup_ebt]" value="<?= 'SEB' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Tanggal Input</label>
                        <input type="text" class="form-control easydatepicker" name="input[tanggal_input]">
                    </div>
                    <div class="form-group">
                        <label for="generator">Generator</label>
                        <input type="text" class="form-control" name="input[generator]">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="input[type]">
                    </div>
                    <div class="form-group">
                        <label for="power">Power</label>
                        <input type="text" class="form-control" name="input[power]">
                    </div>
                    <div class="form-group">
                        <label for="voltage">Voltage</label>
                        <input type="text" class="form-control" name="input[voltage]">
                    </div>
                    <div class="form-group">
                        <label for="current">Current</label>
                        <input type="text" class="form-control" name="input[current]">
                    </div>
                    <div class="form-group">
                        <label for="cos_phi">Cos Phi</label>
                        <input type="text" class="form-control" name="input[cos_phi]">
                    </div>
                    <div class="form-group">
                        <label for="freq">Freq</label>
                        <input type="text" class="form-control" name="input[freq]">
                    </div>
                    <div class="form-group">
                        <label for="rpm">RPM</label>
                        <input type="text" class="form-control" name="input[rpm]">
                    </div>
                    <div class="form-group">
                        <label for="excitacion">Excitacion</label>
                        <input type="text" class="form-control" name="input[excitacion]">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Setup Data EBT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('setup_ebt/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="pk[pk_setup_ebt]" id="pk_setup_ebt">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[update_by]">
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Tanggal Input</label>
                        <input type="text" class="form-control easydatepicker" name="input[tanggal_input]" id="tanggal_input">
                    </div>
                    <div class="form-group">
                        <label for="generator">Generator</label>
                        <input type="text" class="form-control" name="input[generator]" id="generator">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="input[type]" id="type">
                    </div>
                    <div class="form-group">
                        <label for="power">Power</label>
                        <input type="text" class="form-control" name="input[power]" id="power">
                    </div>
                    <div class="form-group">
                        <label for="voltage">Voltage</label>
                        <input type="text" class="form-control" name="input[voltage]" id="voltage">
                    </div>
                    <div class="form-group">
                        <label for="current">Current</label>
                        <input type="text" class="form-control" name="input[current]" id="current">
                    </div>
                    <div class="form-group">
                        <label for="cos_phi">Cos Phi</label>
                        <input type="text" class="form-control" name="input[cos_phi]" id="cos_phi">
                    </div>
                    <div class="form-group">
                        <label for="freq">Freq</label>
                        <input type="text" class="form-control" name="input[freq]" id="freq">
                    </div>
                    <div class="form-group">
                        <label for="rpm">RPM</label>
                        <input type="text" class="form-control" name="input[rpm]" id="rpm">
                    </div>
                    <div class="form-group">
                        <label for="excitacion">Excitacion</label>
                        <input type="text" class="form-control" name="input[excitacion]" id="excitacion">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            "scrollX": true
        });


        $('.editModal').on('click', function() {
            $('#tanggal_input, #nama_inverter').val(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('setup_ebt/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#pk_setup_ebt').val(hasil.pk_setup_ebt);
                    $('#tanggal_input').val(hasil.tanggal_input);
                    $('#generator').val(hasil.generator);
                    $('#type').val(hasil.type);
                    $('#power').val(hasil.power);
                    $('#voltage').val(hasil.voltage);
                    $('#current').val(hasil.current);
                    $('#cos_phi').val(hasil.cos_phi);
                    $('#freq').val(hasil.freq);
                    $('#rpm').val(hasil.rpm);
                    $('#excitacion').val(hasil.excitacion);
                }
            });
        });

    });
</script>