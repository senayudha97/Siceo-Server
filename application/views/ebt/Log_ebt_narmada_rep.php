<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .heading {
            background-color: deepskyblue;
            font-size: 16px;
        }

        .table-header {
            text-align: center;
            font-weight: 700;
        }

        .title {
            text-align: center;
            font-size: x-large;
            font-weight: bold;
        }

        .subtitle {
            text-align: center;
            font-size: small;
        }
    </style>
</head>

<body style="font-size: 10pt;">
    <img src="<?= base_url('assets/img/kop.png'); ?>" style="padding-left: -12px;" width="20%">
    <br>
    <p class="title">Log EBT Narmada</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th rowspan="3">NO</th>
                <th rowspan="3">TANGGAL INPUT</th>
                <th rowspan="3">JAM</th>
                <th rowspan="3">TEKANAN PENSTOK</th>
                <th rowspan="3">GEN SPEED</th>
                <th colspan="19">PANEL GENERATOR</th>
                <th rowspan="3">LEVEL AIR</th>
            </tr>
            <tr class="heading">
                <td colspan="3">VOLTAGE GENERATOR</td>
                <td colspan="3">ARUS GENERATOR</td>
                <td rowspan="2">BEBAN</td>
                <td rowspan="2">COS PHI</td>
                <td rowspan="2">FREQ</td>
                <td colspan="2">EXCITACION</td>
                <td colspan="2">KWH PRODUKSI</td>
                <td colspan="2">KWH PS</td>
                <td colspan="4">TEMPERATURE</td>
            </tr>
            <tr class="heading">
                <td>RS</td>
                <td>ST</td>
                <td>RT</td>
                <td>R</td>
                <td>S</td>
                <td>T</td>
                <td>VOLT</td>
                <td>ARUS</td>
                <td>EXP. ANALOG</td>
                <td>EXP. EDMI</td>
                <td>EXPORT</td>
                <td>IMPORT</td>
                <td>BEARING 1</td>
                <td>BEARING 2</td>
                <td>BEARING 3</td>
                <td>BEARING 4</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['tekanan_penstok']; ?></td>
                    <td><?= $row['gen_speed']; ?></td>
                    <td><?= $row['voltage_generator_rs']; ?></td>
                    <td><?= $row['voltage_generator_st']; ?></td>
                    <td><?= $row['voltage_generator_rt']; ?></td>
                    <td><?= $row['arus_generator_r']; ?></td>
                    <td><?= $row['arus_generator_s']; ?></td>
                    <td><?= $row['arus_generator_t']; ?></td>
                    <td><?= $row['beban']; ?></td>
                    <td><?= $row['cos_phi']; ?></td>
                    <td><?= $row['freq']; ?></td>
                    <td><?= $row['excitation_volt']; ?></td>
                    <td><?= $row['excitation_arus']; ?></td>
                    <td><?= $row['exp_analog']; ?></td>
                    <td><?= $row['exp_edmi']; ?></td>
                    <td><?= $row['export']; ?></td>
                    <td><?= $row['import']; ?></td>
                    <td><?= $row['temperature_bearing_1']; ?></td>
                    <td><?= $row['temperature_bearing_2']; ?></td>
                    <td><?= $row['temperature_bearing_3']; ?></td>
                    <td><?= $row['temperature_bearing_4']; ?></td>
                    <td><?= $row['level_air']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>