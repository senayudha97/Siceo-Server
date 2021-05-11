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
    <p class="title">Log Ampenan Penyulang Ampenan</p>
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
                <th class="tg-0lax" colspan="2">LCC</th>
                <th class="tg-0lax" colspan="2">PS 9</th>
                <th class="tg-0lax" colspan="2">PRAYA</th>
                <th class="tg-0lax" colspan="2">SENGGIGI</th>
                <th class="tg-0lax" colspan="2">KOPANG</th>
                <th class="tg-0lax" colspan="2">GOMONG</th>
                <th class="tg-0lax" colspan="2">KEDIRI</th>
                <th class="tg-0lax" colspan="4">KOPEL TAMAN A</th>
                <th class="tg-0lax" colspan="4">KPEL AMPENAN - BIAU</th>
                <th class="tg-0lax" colspan="2">SEWATAMA 1</th>
                <th class="tg-0lax" colspan="2">SEWATAMA 2</th>
                <th class="tg-0lax" colspan="2">KOPEL GI 1</th>
                <th class="tg-0lax" colspan="2">KOPEL GI 2</th>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" rowspan="2">ANALOG</td>
                <td class="tg-0lax" rowspan="2">DIGITAL</td>
                <td class="tg-0lax" rowspan="2">ANALOG</td>
                <td class="tg-0lax" rowspan="2">DIGITAL</td>
                <td class="tg-0lax" rowspan="2">ANALOG</td>
                <td class="tg-0lax" rowspan="2">DIGITAL</td>
                <td class="tg-0lax" rowspan="2">ANALOG</td>
                <td class="tg-0lax" rowspan="2">DIGITAL</td>
                <td class="tg-0lax" rowspan="2">ANALOG</td>
                <td class="tg-0lax" rowspan="2">DIGITAL</td>
                <td class="tg-0lax" rowspan="2">ANALOG</td>
                <td class="tg-0lax" rowspan="2">DIGITAL</td>
                <td class="tg-0lax" rowspan="2">ANALOG</td>
                <td class="tg-0lax" rowspan="2">DIGITAL</td>
                <td class="tg-0lax" colspan="2">ANALOG</td>
                <td class="tg-0lax" colspan="2">DIGITAL</td>
                <td class="tg-0lax" colspan="2">ANALOG</td>
                <td class="tg-0lax" colspan="2">DIGITAL</td>
                <td class="tg-0lax" rowspan="2">IMPORT</td>
                <td class="tg-0lax" rowspan="2">EXPORT</td>
                <td class="tg-0lax" rowspan="2">IMPORT</td>
                <td class="tg-0lax" rowspan="2">EXPORT</td>
                <td class="tg-0lax" rowspan="2">IMPORT</td>
                <td class="tg-0lax" rowspan="2">EXPORT</td>
                <td class="tg-0lax" rowspan="2">IMPORT</td>
                <td class="tg-0lax" rowspan="2">EXPORT</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax">IMPORT</td>
                <td class="tg-0lax">EXPORT</td>
                <td class="tg-0lax">IMPORT</td>
                <td class="tg-0lax">EXPORT</td>
                <td class="tg-0lax">IMPORT</td>
                <td class="tg-0lax">EXPORT</td>
                <td class="tg-0lax">IMPORT</td>
                <td class="tg-0lax">EXPORT</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['lcc_analog']; ?></td>
                    <td><?= $row['lcc_digital']; ?></td>
                    <td><?= $row['ps9_analog']; ?></td>
                    <td><?= $row['ps9_digital']; ?></td>
                    <td><?= $row['praya_analog']; ?></td>
                    <td><?= $row['praya_digital']; ?></td>
                    <td><?= $row['senggigi_analog']; ?></td>
                    <td><?= $row['senggigi_digital']; ?></td>
                    <td><?= $row['kopang_analog']; ?></td>
                    <td><?= $row['kopang_digital']; ?></td>
                    <td><?= $row['gomong_analog']; ?></td>
                    <td><?= $row['gomong_digital']; ?></td>
                    <td><?= $row['kediri_analog']; ?></td>
                    <td><?= $row['kediri_digital']; ?></td>
                    <td><?= $row['kopel_taman_a_analog_import']; ?></td>
                    <td><?= $row['kopel_taman_a_analog_export']; ?></td>
                    <td><?= $row['kopel_taman_a_digital_import']; ?></td>
                    <td><?= $row['kopel_taman_a_digital_export']; ?></td>
                    <td><?= $row['kopel_ampenan_biau_analog_import']; ?></td>
                    <td><?= $row['kopel_ampenan_biau_analog_export']; ?></td>
                    <td><?= $row['kopel_ampenan_biau_digital_import']; ?></td>
                    <td><?= $row['kopel_ampenan_biau_digital_export']; ?></td>
                    <td><?= $row['sewatama1_import']; ?></td>
                    <td><?= $row['sewatama1_export']; ?></td>
                    <td><?= $row['sewatama2_import']; ?></td>
                    <td><?= $row['sewatama2_export']; ?></td>
                    <td><?= $row['kopel_gi1_import']; ?></td>
                    <td><?= $row['kopel_gi2_export']; ?></td>
                    <td><?= $row['kopel_gi2_import']; ?></td>
                    <td><?= $row['kopel_gi2_export']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>

</body>

</html>