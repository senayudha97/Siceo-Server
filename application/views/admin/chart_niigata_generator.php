<?php

if ($filter) {
    $waktu = $arr_waktu;
    $value = $arr_value;
} else {
    $waktu = array();
    $value = array();
    $i = 0;
    foreach ($arr_generator as $row) {
        $waktu[$i] = $row['waktu'];
        $value[$i] = $row['value'];
        $i++;
    }
    $i = 0;
}
$waktu = json_encode($waktu);
$value = json_encode($value);
?>

<div class="container">
    <div class="row mb-3">
        <div class="col-sm-12">
            <select name="" class="form-control" id="move1">
                <option value="<?= base_url($this->page_dir . 'chart_bebanpenyulang'); ?>">Chart Paok Motong</option>
                <option value="<?= base_url($this->page_dir . 'chart_ne'); ?>" selected>Chart Ampenan</option>
            </select>
        </div>

        <script>
            $("#move1").click(function() {
                var open = $(this).data("isopen");
                if (open) {
                    window.location.href = $(this).val()
                }
                //set isopen to opposite so next time when use clicked select box
                //it wont trigger this event
                $(this).data("isopen", !open);
            });
        </script>
    </div>
    <div class="row mb-3">
        <div class="col-sm-12">
            <select name="" class="form-control" id="move">
                <option value="<?= base_url($this->page_dir . 'chart_ne'); ?>">Niigata Engine</option>
                <option value="<?= base_url($this->page_dir . 'chart_niigata_generator'); ?>" selected>Niigata Generator</option>
                <option value="<?= base_url($this->page_dir . 'chart_cmr'); ?>">Za CMR</option>
                <option value="<?= base_url($this->page_dir . 'chart_pa'); ?>">Penyulang Ampenan</option>
                <option value="<?= base_url($this->page_dir . 'chart_pe'); ?>">Pielstick Engine</option>
                <option value="<?= base_url($this->page_dir . 'chart_pg'); ?>">Pielstick Generator</option>
                <option value="<?= base_url($this->page_dir . 'chart_rs'); ?>">Ruston</option>
                <option value="<?= base_url($this->page_dir . 'chart_ze'); ?>">Zav Engine</option>
                <option value="<?= base_url($this->page_dir . 'chart_zg'); ?>">Zav Generator</option>
                <option value="<?= base_url($this->page_dir . 'chart_zve'); ?>">Zv Engine</option>
                <option value="<?= base_url($this->page_dir . 'chart_zvg'); ?>">Zv Generator</option>
            </select>
        </div>

        <script>
            $("#move").click(function() {
                var open = $(this).data("isopen");
                if (open) {
                    window.location.href = $(this).val()
                }
                //set isopen to opposite so next time when use clicked select box
                //it wont trigger this event
                $(this).data("isopen", !open);
            });
        </script>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="row">
                <div id="graph" class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-primary text-light">
                            Niigata Generator &nbsp;
                            <!-- <span class="btn btn-sm btn-success" id="expand"><i class="fas fa-fw fa-expand-alt"></i></span>
                            <span class="btn btn-sm btn-success" id="compress"><i class="fas fa-fw fa-compress-alt"></i></span> -->
                        </div>
                        <form action="<?= base_url('admin'); ?>" method="POST">
                            <div class="row mt-3 pl-5">
                                <div class="col-lg-3">
                                    <input type="text" class="form-control easydatepicker" name="awal">
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control easydatepicker" name="akhir">
                                </div>
                                <div class="col-lg-3">
                                    <select name="kolom" class="form-control">
                                        <option value="" selected>-- Pilih Kolom --</option>
                                        <?php for ($i = 0; $i < count($kolom); $i++) : ?>
                                            <option value="<?= $kolom[$i]; ?>"><?= $kolom[$i]; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit" class="btn btn-primary border-light"><i class="fas fa-fw fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="card-body">
                            <canvas id="dinamicChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#compress').hide();
        $('#expand').click(function() {
            $('#graph').addClass('col-lg-12').removeClass('col-lg-6');
            $(this).hide();
            $('#compress').show();
        });

        $('#compress').click(function() {
            $('#graph').addClass('col-lg-6').removeClass('col-lg-12');
            $(this).hide();
            $('#expand').show();

        });
    });
</script>

<script>
    <?php echo "var waktu = " . $waktu . ";\n"; ?>
    <?php echo "var value = " . $value . ";\n"; ?>

    var titleChart = "<?= $titleChart; ?>";
    console.log(titleChart);

    var jam = [];
    for (var i = 0; i < 24; i++) {
        jam.push((i < 10 ? "0" : "") + i + ":00.00");
    }
    var ctx = document.getElementById('dinamicChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: jam,
            datasets: [{
                label: titleChart,
                data: value,
                backgroundColor: [
                    'rgba(78, 115, 223, 0.6)'
                ],
                borderColor: [
                    'rgba(255, 255, 255, 0.6)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>