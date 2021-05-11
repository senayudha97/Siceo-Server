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
    <p class="title">Log Paok Motong HRTO</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0lax" rowspan="3">No</th>
                <th class="tg-0lax" rowspan="3">Tanggal Input</th>
                <th class="tg-0lax" rowspan="3">Waktu</th>
                <th class="tg-0lax" colspan="11">TEMPERATURE (°C)</th>
                <th class="tg-0lax" colspan="3">PRESSURE (BAR)</th>
                <th class="tg-0lax" rowspan="3">POMPA</th>
                <th class="tg-0lax" colspan="4">DAMPER (derajat)</th>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="2">Thermal Oil HRTO 1</td>
                <td class="tg-0lax" colspan="2">Thermal Oil HRTO 2</td>
                <td class="tg-0lax" colspan="4">GAS INLET HRTO UNIT</td>
                <td class="tg-0lax" colspan="2">CIRCULATION THERMAL OIL</td>
                <td class="tg-0lax" rowspan="2">OUTLET HE</td>
                <td class="tg-0lax" rowspan="2">OUTLET HE</td>
                <td class="tg-0lax" colspan="2">OUTLET CIRCULATION THERMAL OIL</td>
                <td class="tg-0lax" rowspan="2">#2</td>
                <td class="tg-0lax" rowspan="2">#3</td>
                <td class="tg-0lax" rowspan="2">#4</td>
                <td class="tg-0lax" rowspan="2">#5</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax">In</td>
                <td class="tg-0lax">Out</td>
                <td class="tg-0lax">In</td>
                <td class="tg-0lax">Out</td>
                <td class="tg-0lax">#2</td>
                <td class="tg-0lax">#3</td>
                <td class="tg-0lax">#4</td>
                <td class="tg-0lax">#5</td>
                <td class="tg-0lax">HRTO 1</td>
                <td class="tg-0lax">HRTO 2</td>
                <td class="tg-0lax">HRTO 1</td>
                <td class="tg-0lax">HRTO 2</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['thermal_hrto1_in']; ?></td>
                    <td><?= $row['thermal_hrto1_out']; ?></td>
                    <td><?= $row['thermal_hrto2_in']; ?></td>
                    <td><?= $row['thermal_hrto2_out']; ?></td>
                    <td><?= $row['gas_inlet_hrto2']; ?></td>
                    <td><?= $row['gas_inlet_hrto3']; ?></td>
                    <td><?= $row['gas_inlet_hrto4']; ?></td>
                    <td><?= $row['gas_inlet_hrto5']; ?></td>
                    <td><?= $row['circulation_thermal_hrto1']; ?></td>
                    <td><?= $row['circulation_thermal_hrto2']; ?></td>
                    <td><?= $row['temperature_outlet_he']; ?></td>
                    <td><?= $row['pressure_outlet_he']; ?></td>
                    <td><?= $row['outlet_circulation_hrto1']; ?></td>
                    <td><?= $row['outlet_circulation_hrto2']; ?></td>
                    <td><?= $row['pompa_sirkulasi_nomor']; ?></td>
                    <td><?= $row['damper2']; ?></td>
                    <td><?= $row['damper3']; ?></td>
                    <td><?= $row['damper4']; ?></td>
                    <td><?= $row['damper5']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>