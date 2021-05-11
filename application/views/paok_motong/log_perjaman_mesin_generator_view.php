<div class="container-fluid">
  <h2 class="mb-5"><?= $title; ?></h2>

  <?php if (validation_errors()) : ?>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?= validation_errors(); ?>
    </div>
  <?php endif; ?>

  <?= $this->session->flashdata('message'); ?>

  <form action="<?= base_url('Log_paok_motong_laporan_perjaman_mesin_generator/report'); ?>" method="POST" target="_blank">
    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-2">
            <a href="<?php echo (base_url('Log_paok_motong_laporan_perjaman_mesin_generator/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
          </div>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-6">
                <input type="text" class="form-control easydatepicker" name="tgl[awal]" value="<?= date('d-m-Y'); ?>">
              </div>
              <div class="col-sm-6">
                <!-- <input type="text" class="form-control easydatepicker" name="tgl[akhir]" value="<?= date('d-m-Y'); ?>"> -->
                <button type="submit" class="btn btn-danger "><span class="fas fa-fw fa-file-pdf"></span>PDF</button>
                &nbsp;
                <button type="submit" name="excel" class="btn btn-success "><span class="fas fa-fw fa-file-excel"></span>Excel</button>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
          </div>
        </div>
      </div>
    </div>
  </form>
  <div class="row">
    <div class="col-lg-12">
      <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
        <thead class="textTable">
          <th>No</th>
          <th>Tanggal Input</th>
          <th>Waktu</th>
          <th>User Input</th>
          <th>Volt</th>
          <th>HZ</th>
          <th>COS</th>
          <th>Beban MW</th>
          <th>Arus</th>
          <th>Exiter</th>
          <th>Winding</th>
          <th>Bearing</th>
          <th>KWH Produksi</th>
          <th>KWH Alat Bantu</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($data as $value) : ?>
            <tr>
              <td scope="row">
                <?= $i; ?>
              </td>
              <td><?= content_date($value['tanggal_input']); ?></td>
              <td><?= $value['waktu']; ?></td>
              <td><?= $value['name']; ?></td>
              <td><?= $value['input_volt']; ?></td>
              <td><?= $value['input_hz']; ?></td>
              <td><?= $value['input_cos']; ?></td>
              <td><?= $value['input_bebanmw']; ?></td>
              <td>
                <div class="btn btn-success btn-sm arus" data-id="<?= $value['pk_perjaman_mesin_generator']; ?>" data-toggle="modal" data-target="#arus"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
              </td>
              <td>
                <div class="btn btn-success btn-sm exiter" data-id="<?= $value['pk_perjaman_mesin_generator']; ?>" data-toggle="modal" data-target="#exiter"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
              </td>
              <td>
                <div class="btn btn-success btn-sm winding" data-id="<?= $value['pk_perjaman_mesin_generator']; ?>" data-toggle="modal" data-target="#winding"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
              </td>
              <td><?= $value['input_bearing']; ?></td>
              <td><?= $value['input_kwh_produksi']; ?></td>
              <td><?= $value['input_kwh_alat_bantu']; ?></td>
              <td>
                <a href="<?php echo (base_url('log_paok_motong_laporan_perjaman_mesin_generator/edit/')) . $value['pk_perjaman_mesin_generator']; ?>" class="btn btn-warning btn-sm "><span class="fa fa-edit"></span></a>&nbsp;
                <a href="<?= base_url('Log_paok_motong_laporan_perjaman_mesin_generator/delete/') . $value['pk_perjaman_mesin_generator']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

<!-- Button trigger modal -->

<div id="modal_hider">
  <!-- Modal Arus-->
  <div class="modal fade" id="arus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Arus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group row">
            <label for="input_arus_r" class="col-sm-2 col-form-label">R</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_arus_r" name="input_arus_r">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_arus_s" class="col-sm-2 col-form-label">S</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_arus_s" name="input_arus_s">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_arus_t" class="col-sm-2 col-form-label">T</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_arus_t" name="input_arus_t">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal Exiter -->
  <div class="modal fade" id="exiter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Exiter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group row">
            <label for="input_exiter_a" class="col-sm-2 col-form-label">A</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_exiter_a" name="input_exiter_a">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_exiter_v" class="col-sm-2 col-form-label">V</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_exiter_v" name="input_exiter_v">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal Winding -->
  <div class="modal fade" id="winding" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Winding</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group row">
            <label for="input_winding1" class="col-sm-2 col-form-label">1</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_winding1" name="input_winding1">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_winding2" class="col-sm-2 col-form-label">2</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_winding2" name="input_winding2">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_winding3" class="col-sm-2 col-form-label">3</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_winding3" name="input_winding3">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_winding4" class="col-sm-2 col-form-label">4</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_winding4" name="input_winding4">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_winding5" class="col-sm-2 col-form-label">5</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_winding5" name="input_winding5">
            </div>
          </div>
          <div class="form-group row">
            <label for="input_winding6" class="col-sm-2 col-form-label">6</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="input_winding6" name="input_winding6">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#table_id').DataTable({
      "scrollX": true
    });

    $('.arus').on('click', function() {
      var id = $(this).data('id');
      console.log(id);

      $.ajax({
        url: "<?= base_url('log_paok_motong_laporan_perjaman_mesin_generator/ajax'); ?>",
        method: 'GET',
        data: {
          data: id
        },
        datatype: 'json',
        success: function(data) { //menampilkan
          var hasil = JSON.parse(data);
          $('#input_arus_r').val(hasil.input_arus_r);
          $('#input_arus_s').val(hasil.input_arus_s);
          $('#input_arus_t').val(hasil.input_arus_t);
        }
      });
    });

    $('.exiter').on('click', function() {
      var id = $(this).data('id');

      $.ajax({
        url: "<?= base_url('log_paok_motong_laporan_perjaman_mesin_generator/ajax'); ?>",
        method: 'GET',
        data: {
          data: id
        },
        datatype: 'json',
        success: function(data) { //menampilkan
          var hasil = JSON.parse(data);
          $('#input_exiter_a').val(hasil.input_exiter_a);
          $('#input_exiter_v').val(hasil.input_exiter_v);
        }
      });
    });

    $('.winding').on('click', function() {
      var id = $(this).data('id');

      $.ajax({
        url: "<?= base_url('log_paok_motong_laporan_perjaman_mesin_generator/ajax'); ?>",
        method: 'GET',
        data: {
          data: id
        },
        datatype: 'json',
        success: function(data) { //menampilkan
          var hasil = JSON.parse(data);
          $('#input_winding1').val(hasil.input_winding1);
          $('#input_winding2').val(hasil.input_winding2);
          $('#input_winding3').val(hasil.input_winding3);
          $('#input_winding4').val(hasil.input_winding4);
          $('#input_winding5').val(hasil.input_winding5);
          $('#input_winding6').val(hasil.input_winding6);
        }
      });
    });
  });
</script>