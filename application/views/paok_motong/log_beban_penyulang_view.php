<div class="container-fluid">
  <h2 class="mb-5"><?= $title; ?></h2>
  <?= $this->session->flashdata('message'); ?>
  <form action="<?= base_url('log_paok_motong_beban_penyulang/report'); ?>" method="POST" target="_blank">
    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-2">
            <a href="<?php echo (base_url('log_paok_motong_beban_penyulang/add')) ?>" class="btn btn-primary   mb-3">Data Baru</a>
          </div>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-6">
                <input type="text" class="form-control easydatepicker" name="tgl[awal]" value="<?= date('d-m-Y'); ?>">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-danger rounded-0"><span class="fas fa-fw fa-file-pdf"></span>PDF</button>
                &nbsp;
                <button type="submit" name="excel" class="btn btn-success rounded-0"><span class="fas fa-fw fa-file-excel"></span>Excel</button>
              </div>
              <!-- <div class="col-sm-6">
                <input type="text" class="form-control easydatepicker" name="tgl[akhir]" value="<?= date('d-m-Y'); ?>">
              </div> -->
            </div>
          </div>
          <div class="col-sm-3">
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
            <th>Beban Penyulang / Jam</th>
            <th>User Input</th>
            <th>Lokasi / Nama Penyulang</th>
            <th>Kopel Express GI PMT </th>
            <th>Kopel Express GI PRY </th>
            <th>Keterangan</th>
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
                <div class="btn btn-success btn-sm btn-sm lokasi_penyulang" data-id="<?= $value['pk_beban_penyulang']; ?>" data-toggle="modal" data-target="#lokasi_penyulang"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div></a>
              </td>
              <td>
                <div class="btn btn-success btn-sm btn-sm GI_PMT" data-id="<?= $value['pk_beban_penyulang']; ?>" data-toggle="modal" data-target="#GI_PMT"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
              </td>
              <td>
                <div class="btn btn-success btn-sm btn-sm GI_PRY" data-id="<?= $value['pk_beban_penyulang']; ?>" data-toggle="modal" data-target="#GI_PRY"><span class="fa fa-info-circle ">&nbsp;</span>Lihat Detail</div></a>
              </td>
              <td><?= $value['keterangan']; ?></td>
              <td>
                <a href="<?= base_url('Log_paok_motong_beban_penyulang/edit/') . $value['pk_beban_penyulang']; ?>" class="btn btn-warning btn-sm btn-sm"><span class="fa fa-edit"></span></a>&nbsp;
                <a href="<?= base_url('log_paok_motong_beban_penyulang/delete/') . $value['pk_beban_penyulang']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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

<!-- Modal Lokasi nama penyulang-->
<div class="modal fade" id="lokasi_penyulang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lokasi Nama Penyulang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group row">
          <label for="sikur" class="col-sm-2 col-form-label">Sikur</label>
          <div class="col-sm-8">
            <input readonly type="text" class="form-control" id="sikur" name="sikur">
          </div>
        </div>
        <div class="form-group row">
          <label for="masbagik" class="col-sm-2 col-form-label">Masbagik</label>
          <div class="col-sm-8">
            <input readonly type="text" class="form-control" id="masbagik" name="masbagik">
          </div>
        </div>
        <div class="form-group row">
          <label for="sakra" class="col-sm-2 col-form-label">Sakra</label>
          <div class="col-sm-8">
            <input readonly type="text" class="form-control" id="sakra" name="sakra">
          </div>
        </div>
        <div class="form-group row">
          <label for="keruak" class="col-sm-2 col-form-label">Keruak</label>
          <div class="col-sm-8">
            <input readonly type="text" class="form-control" id="keruak" name="keruak">
          </div>
        </div>
        <div class="form-group row">
          <label for="pancor" class="col-sm-2 col-form-label">Pancor</label>
          <div class="col-sm-8">
            <input readonly type="text" class="form-control" id="pancor" name="pancor">
          </div>
        </div>
        <div class="form-group row">
          <label for="rempung" class="col-sm-2 col-form-label">Rempung</label>
          <div class="col-sm-8">
            <input readonly type="text" class="form-control" id="rempung" name="rempung">
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal Kopel Express GI PMT -->
<div class="modal fade" id="GI_PMT" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kopel Express GI PMT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group row">
          <label for="sikur" class="col-sm-2 col-form-label">Ekspor</label>
          <div class="col-sm-8">
            <input readonly type="text" class="form-control" id="kopel_pmt_ekspor" name="sikur">
          </div>
        </div>
        <div class="form-group row">
          <label for="masbagik" class="col-sm-2 col-form-label">Impor</label>
          <div class="col-sm-8">
            <input readonly type="text" class="form-control" id="kopel_pmt_impor" name="masbagik">
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal Kopel Express GI PRY -->
<div class="modal fade" id="GI_PRY" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kopel Express GI PRY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group row">
          <label for="sikur" class="col-sm-2 col-form-label">Ekspor</label>
          <div class="col-sm-8">
            <input readonly type="text" class="form-control" id="pry_eksport" name="sikur">
          </div>
        </div>
        <div class="form-group row">
          <label for="masbagik" class="col-sm-2 col-form-label">Impor</label>
          <div class="col-sm-8">
            <input readonly type="text" class="form-control" id="pry_impor" name="masbagik">
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

    $('.lokasi_penyulang').on('click', function() {
      console.log('test');
      $('#sikur, #masbagik, #sakra, #keruak, #pancor, #rempung').val(''); //clear

      var id = $(this).data('id');
      console.log(id);

      $.ajax({
        url: "<?= base_url('log_paok_motong_beban_penyulang/ajax'); ?>",
        method: 'GET',
        data: {
          data: id
        },
        datatype: 'json',
        success: function(data) { //menampilkan
          var hasil = JSON.parse(data);
          $('#sikur').val(hasil.sikur);
          $('#masbagik').val(hasil.masbagik);
          $('#sakra').val(hasil.sakra);
          $('#keruak').val(hasil.keruak);
          $('#pancor').val(hasil.pancor);
          $('#rempung').val(hasil.rempung);
        }
      });
    });

    $('.GI_PMT').on('click', function() {
      var id = $(this).data('id');

      $.ajax({
        url: "<?= base_url('log_paok_motong_beban_penyulang/ajax'); ?>",
        method: 'GET',
        data: {
          data: id
        },
        datatype: 'json',
        success: function(data) { //menampilkan
          var hasil = JSON.parse(data);
          $('#kopel_pmt_ekspor').val(hasil.kopel_pmt_ekspor);
          $('#kopel_pmt_impor').val(hasil.kopel_pmt_impor);
        }
      });
    });

    $('.GI_PRY').on('click', function() {
      var id = $(this).data('id');

      $.ajax({
        url: "<?= base_url('log_paok_motong_beban_penyulang/ajax'); ?>",
        method: 'GET',
        data: {
          data: id
        },
        datatype: 'json',
        success: function(data) { //menampilkan
          var hasil = JSON.parse(data);
          $('#pry_eksport').val(hasil.kopel_pry_ekspor);
          $('#pry_impor').val(hasil.kopel_pry_impor);
        }
      });
    });

  });
</script>
<script>
  $(document).ready(function() {
    setInterval(function(data) {
      // console.log('Load terus menerus');
      // $('.toast').toast('show');
      $.ajax({
        url: '',
        method: 'GET',
        datatype: 'json',
        success: function(data) {};
      });
    }, 2000);
  });
</script>