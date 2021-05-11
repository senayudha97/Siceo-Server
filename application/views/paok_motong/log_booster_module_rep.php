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
    <p class="title">Log Paok Motong Booster Module</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0pky" rowspan="3">No</th>
                <th class="tg-0pky" rowspan="3">Tanggal Input</th>
                <th class="tg-0pky" rowspan="3">Waktu</th>
                <th class="tg-0pky" rowspan="3">BEBAN ( MW )</th>
                <th class="tg-0pky" colspan="2">FLOW METER</th>
                <th class="tg-0pky" colspan="2">KWH PRODUKSI</th>
                <th class="tg-0pky" colspan="7">PRESSURE (Bar)</th>
                <th class="tg-0pky" colspan="8">TEMPERATURE (°C)</th>
                <th class="tg-0pky" rowspan="3">VISCOSITAS</th>
            </tr>
            <tr class="heading">
                <td class="tg-0pky" rowspan="2">HSD</td>
                <td class="tg-0pky" rowspan="2">MFO</td>
                <td class="tg-0pky" rowspan="2">HSD</td>
                <td class="tg-0pky" rowspan="2">MFO</td>
                <td class="tg-0pky" rowspan="2">Inlet Module(M-5)</td>
                <td class="tg-0pky" rowspan="2">Discharge BP(M-20)</td>
                <td class="tg-0pky" rowspan="2">Suction BP(M-16)</td>
                <td class="tg-0pky" rowspan="2">Mixing Tank(M-12)</td>
                <td class="tg-0pky" rowspan="2">F.O Outlet(M-27)</td>
                <td class="tg-0pky" rowspan="2">Into Engine</td>
                <td class="tg-0pky" rowspan="2">Air Control</td>
                <td class="tg-0pky" rowspan="2">Inlet Flow 1(M-10)</td>
                <td class="tg-0pky" rowspan="2">Inlet Flow 2(M-2)</td>
                <td class="tg-0pky" rowspan="2">Mixing Tank(M-9)</td>
                <td class="tg-0pky" rowspan="2">Inlet Heater(M-21)</td>
                <td class="tg-0pky" rowspan="2">Outlet Heater(M-23)</td>
                <td class="tg-0pky" rowspan="2">Viscosensor(M-24)</td>
                <td class="tg-0pky" rowspan="2">Return Line(M-34)</td>
                <td class="tg-0pky" rowspan="2">Fuel Oil(FO)</td>
            </tr>
            <tr class="heading"></tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['beban']; ?></td>
                    <td><?= $row['flow_meter_hsd']; ?></td>
                    <td><?= $row['flow_meter_mfo']; ?></td>
                    <td><?= $row['kwh_produksi_hsd']; ?></td>
                    <td><?= $row['kwh_produksi_mfo']; ?></td>
                    <td><?= $row['inlet_module']; ?></td>
                    <td><?= $row['discharge_bp']; ?></td>
                    <td><?= $row['suction_bp']; ?></td>
                    <td><?= $row['mixing_tank12']; ?></td>
                    <td><?= $row['fo_outlet']; ?></td>
                    <td><?= $row['in_to_engine']; ?></td>
                    <td><?= $row['air_control']; ?></td>
                    <td><?= $row['inlet_flow1']; ?></td>
                    <td><?= $row['inlet_flow2']; ?></td>
                    <td><?= $row['mixing_tank9']; ?></td>
                    <td><?= $row['inlet_heater']; ?></td>
                    <td><?= $row['outlet_heater']; ?></td>
                    <td><?= $row['viscosensor']; ?></td>
                    <td><?= $row['return_line']; ?></td>
                    <td><?= $row['fuel_oil']; ?></td>
                    <td><?= $row['viscositas']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>