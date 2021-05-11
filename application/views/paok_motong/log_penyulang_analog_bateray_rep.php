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
    <p class="title">Log Paok Motong Penyulang Analog & Bateray</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0lax" rowspan="4">No</th>
                <th class="tg-0lax" rowspan="4">Tanggal Input</th>
                <th class="tg-0lax" rowspan="4">Waktu</th>
                <th class="tg-0lax" colspan="6">LAPORAN KWH PENYULANG KOPEL &amp; SEWA ( KWH ) ANALOG</th>
                <th class="tg-0lax" colspan="12">MONITORING BATERAI</th>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" rowspan="3">REMPUNG</td>
                <td class="tg-0lax" rowspan="3">PANCOR</td>
                <td class="tg-0lax" rowspan="3">KERUAK</td>
                <td class="tg-0lax" rowspan="3">SAKRA</td>
                <td class="tg-0lax" rowspan="3">MASBAGIK</td>
                <td class="tg-0lax" rowspan="3">SIKUR</td>
                <td class="tg-0lax" colspan="4">UNIT 2 &amp; 3</td>
                <td class="tg-0lax" colspan="4">UNIT 4 &amp; 5</td>
                <td class="tg-0lax" colspan="4">PENYULANG</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="2">110 VDC</td>
                <td class="tg-0lax" colspan="2">24 VDC</td>
                <td class="tg-0lax" colspan="2">110 VDC</td>
                <td class="tg-0lax" colspan="2">24 VDC</td>
                <td class="tg-0lax" colspan="2">110 VDC</td>
                <td class="tg-0lax" colspan="2">24 VDC</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax">V</td>
                <td class="tg-0lax">I</td>
                <td class="tg-0lax">V</td>
                <td class="tg-0lax">I</td>
                <td class="tg-0lax">V</td>
                <td class="tg-0lax">I</td>
                <td class="tg-0lax">V</td>
                <td class="tg-0lax">I</td>
                <td class="tg-0lax">V</td>
                <td class="tg-0lax">I</td>
                <td class="tg-0lax">V</td>
                <td class="tg-0lax">I</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['rempung']; ?></td>
                    <td><?= $row['pancor']; ?></td>
                    <td><?= $row['keruak']; ?></td>
                    <td><?= $row['sakra']; ?></td>
                    <td><?= $row['masbagik']; ?></td>
                    <td><?= $row['sikur']; ?></td>
                    <td><?= $row['unit23_110vdc_v']; ?></td>
                    <td><?= $row['unit23_110vdc_i']; ?></td>
                    <td><?= $row['unit23_24vdc_v']; ?></td>
                    <td><?= $row['unit23_110vdc_i']; ?></td>
                    <td><?= $row['unit45_110vdc_v']; ?></td>
                    <td><?= $row['unit45_110vdc_i']; ?></td>
                    <td><?= $row['unit45_24vdc_v']; ?></td>
                    <td><?= $row['unit45_110vdc_i']; ?></td>
                    <td><?= $row['penyulang_110vdc_v']; ?></td>
                    <td><?= $row['penyulang_110vdc_i']; ?></td>
                    <td><?= $row['penyulang_24vdc_v']; ?></td>
                    <td><?= $row['penyulang_110vdc_i']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>