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
    <p class="title">Log Paok Motong Separator MFO</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-baqh" rowspan="3">No</th>
                <th class="tg-baqh" rowspan="3">Tanggal Input</th>
                <th class="tg-baqh" rowspan="3">Waktu</th>
                <th class="tg-baqh" colspan="4">SEPARATOR 1</th>
                <th class="tg-baqh" colspan="4">SEPARATOR 2</th>
                <th class="tg-baqh" colspan="2">Tangki 250 kL</th>
                <th class="tg-baqh" colspan="2">Tangki 60 kL</th>
                <th class="tg-baqh" rowspan="3">Pressure Water Supply (Bar)</th>
            </tr>
            <tr class="heading">
                <td class="tg-baqh" rowspan="2">Pressure Produksi MFO (Bar)</td>
                <td class="tg-baqh" rowspan="2">Flow Rate Produksi MFO (kL/h)</td>
                <td class="tg-baqh" colspan="2">TEMPERATURE (°C)</td>
                <td class="tg-baqh" rowspan="2">Pressure Produksi MFO (Bar)</td>
                <td class="tg-baqh" rowspan="2">Flow Rate Produksi MFO (kL/h)</td>
                <td class="tg-baqh" colspan="2">TEMPERATURE (°C)</td>
                <td class="tg-baqh" rowspan="2">Level (kL)</td>
                <td class="tg-baqh" rowspan="2">Temp. (°C)</td>
                <td class="tg-baqh" rowspan="2">Level (kL)</td>
                <td class="tg-baqh" rowspan="2">Temp. (°C)</td>
            </tr>
            <tr class="heading">
                <td class="tg-baqh">Produksi MFO</td>
                <td class="tg-baqh">Inlet Thermal Oil</td>
                <td class="tg-baqh">Produksi MFO</td>
                <td class="tg-baqh">Inlet Thermal Oil</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['separator1_pressure_produksi_mfo']; ?></td>
                    <td><?= $row['separator1_flow_rate_produksi_mfo']; ?></td>
                    <td><?= $row['separator1_temperature_produksi_mfo']; ?></td>
                    <td><?= $row['separator1_temperature_inlet_thermal_oil']; ?></td>
                    <td><?= $row['separator2_pressure_produksi_mfo']; ?></td>
                    <td><?= $row['separator2_flow_rate_produksi_mfo']; ?></td>
                    <td><?= $row['separator2_temperature_produksi_mfo']; ?></td>
                    <td><?= $row['separator2_temperature_inlet_thermal_oil']; ?></td>
                    <td><?= $row['tangki250_level']; ?></td>
                    <td><?= $row['tangki250_temp']; ?></td>
                    <td><?= $row['tangki60_level']; ?></td>
                    <td><?= $row['tangki60_temp']; ?></td>
                    <td><?= $row['pressure_water_supply']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>