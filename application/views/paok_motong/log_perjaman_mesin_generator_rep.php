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

        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-c3ow {
            border-color: inherit;
            text-align: center;
            vertical-align: top
        }
    </style>
</head>

<body style="font-size: 10pt;">
    <img src="<?= base_url('assets/img/kop.png'); ?>" style="padding-left: -12px;" width="20%">
    <br>
    <p class="title">Log Paok Motong Perjaman Mesin Generator</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0lax" rowspan="2">No<br></th>
                <th class="tg-uog8" rowspan="2">Tanggal input<br></th>
                <th class="tg-0pky" rowspan="2">Waktu</th>
                <th class="tg-0pky" rowspan="2">Volt</th>
                <th class="tg-0pky" rowspan="2">Hz</th>
                <th class="tg-0pky" rowspan="2">Cos</th>
                <th class="tg-0pky" rowspan="2">MVAR</th>
                <th class="tg-0pky" rowspan="2">Beban MW</th>
                <th class="tg-baqh" colspan="3">Arus (A)</th>
                <th class="tg-0lax" colspan="2">Exiter</th>
                <th class="tg-baqh" colspan="6">Widding (c)</th>
                <th class="tg-0pky" rowspan="2">Bearing</th>
                <th class="tg-0pky" rowspan="2">KWH Produksi<br></th>
                <th class="tg-0pky" rowspan="2">KWH Alat Bantu<br></th>
            </tr>
            <tr class="heading">
                <th class="tg-0lax">R</th>
                <th class="tg-0lax">S</th>
                <th class="tg-0pky">T</th>
                <th class="tg-0lax">A</th>
                <th class="tg-0pky">W</th>
                <th class="tg-0lax">1</th>
                <th class="tg-0lax">2</th>
                <th class="tg-0lax">3</th>
                <th class="tg-0lax">4</th>
                <th class="tg-0lax">5</th>
                <th class="tg-0pky">6</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['input_volt']; ?></td>
                    <td><?= $row['input_hz']; ?></td>
                    <td><?= $row['input_cos']; ?></td>
                    <td><?= $row['input_mvar']; ?></td>
                    <td><?= $row['input_bebanmw']; ?></td>
                    <td><?= $row['input_arus_r']; ?></td>
                    <td><?= $row['input_arus_s']; ?></td>
                    <td><?= $row['input_arus_t']; ?></td>
                    <td><?= $row['input_exiter_a']; ?></td>
                    <td><?= $row['input_exiter_v']; ?></td>
                    <td><?= $row['input_winding1']; ?></td>
                    <td><?= $row['input_winding2']; ?></td>
                    <td><?= $row['input_winding3']; ?></td>
                    <td><?= $row['input_winding4']; ?></td>
                    <td><?= $row['input_winding5']; ?></td>
                    <td><?= $row['input_winding6']; ?></td>
                    <td><?= $row['input_bearing']; ?></td>
                    <td><?= $row['input_kwh_produksi']; ?></td>
                    <td><?= $row['input_kwh_alat_bantu']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>