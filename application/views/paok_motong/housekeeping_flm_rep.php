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
    <p class="title">Log Paok Motong Hosekeeping & FLM</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <td rowspan="2">No</td>
                <td rowspan="2">Tanggal Input</td>
                <td rowspan="2">Location</td>
                <td rowspan="2">Description</td>
                <td colspan="2">Eviden</td>
                <td rowspan="2">Checked by</td>
            </tr>
            <tr>
                <td>Eviden 1</td>
                <td>Eviden 2</td>
            </tr>

        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['location']; ?></td>
                    <td><?= $row['description']; ?></td>
                    <td><img src="<?= $row['eviden_1']; ?>" alt=""></td>
                    <td><img src="<?= $row['eviden_2']; ?>" alt=""></td>
                    <td><?= $row['checked_by']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>