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
    <p class="title">Log Paok Motong Beban Penyulang</p>
    <p class="subtitle">Dicetak Tanggal </p>
    <p>Dicetak oleh : </p>
    <br>
    <table autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <td rowspan="2">No</td>
                <td rowspan="2">Tanggal Input</td>
                <td rowspan="2">Beban Penyulang / Jam</td>
                <td colspan="6">Lokasi / Nama Penyulang</td>
                <td colspan="2">Kopel Express GI PMT</td>
                <td colspan="2">Kopel Express GI PMY</td>
                <td rowspan="2">Keterangan</td>
            </tr>
            <tr class="heading">
                <!-- Lokasi Penyulang -->
                <td>Sikur</td>
                <td>Masbagik</td>
                <td>Sakra</td>
                <td>Keruak</td>
                <td>Pancor</td>
                <td>Rempung</td>

                <!-- Kopel Express PMT -->
                <td>Ekspor</td>
                <td>Impor</td>

                <!-- Kopel Express PMY-->
                <td>Ekspor</td>
                <td>Impor</td>
            </tr>

        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['tanggal_input']; ?></td>
                    <td><?= $row['beban_penyulang']; ?></td>
                    <td><?= $row['sikur']; ?></td>
                    <td><?= $row['masbagik']; ?></td>
                    <td><?= $row['keruak']; ?></td>
                    <td><?= $row['pancor']; ?></td>
                    <td><?= $row['rempung']; ?></td>
                    <td><?= $row['kopel_pmt_ekspor']; ?></td>
                    <td><?= $row['kopel_pmt_impor']; ?></td>
                    <td><?= $row['kopel_pry_ekspor']; ?></td>
                    <td><?= $row['kopel_pry_impor']; ?></td>
                    <td><?= $row['kopel_pry_impor']; ?></td>
                    <td><?= $row['keterangan']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>