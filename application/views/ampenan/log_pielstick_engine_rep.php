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
    <p class="title">Log Ampenan Pielstick Engine</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0pky" rowspan="4">No</th>
                <th class="tg-0pky" rowspan="4">Tanggal Input</th>
                <th class="tg-0pky" rowspan="4">WAKTU</th>
                <th class="tg-0pky" colspan="30">SUHU ( °C )</th>
            </tr>
            <tr class="heading">
                <td class="tg-0pky" colspan="2">UDARA MASUK</td>
                <td class="tg-0pky" colspan="2">MINYAK PELUMAS</td>
                <td class="tg-0pky" colspan="20">AIR PENDINGIN</td>
                <td class="tg-0pky" colspan="6">GAS BUANG</td>
            </tr>
            <tr class="heading">
                <td class="tg-0pky" rowspan="2">SISI A</td>
                <td class="tg-0pky" rowspan="2">SISI B</td>
                <td class="tg-0pky" rowspan="2">MASUK</td>
                <td class="tg-0pky" rowspan="2">KELUAR</td>
                <td class="tg-0pky">MASUK MESIN</td>
                <td class="tg-0pky">KELUAR MESIN</td>
                <td class="tg-0pky" colspan="2">MASUK COOLER</td>
                <td class="tg-0pky" colspan="2">KELUAR COOLER</td>
                <td class="tg-0pky" colspan="2">INJECTOR</td>
                <td class="tg-0pky" colspan="6">KELUAR SILINDER A</td>
                <td class="tg-0pky" colspan="6">KELUAR SILINDER B</td>
                <td class="tg-0pky" colspan="6">KELUAR SILINDER A</td>
            </tr>
            <tr class="heading">
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky">SISI A</td>
                <td class="tg-0pky">SISI B</td>
                <td class="tg-0pky">SISI A</td>
                <td class="tg-0pky">SISI B</td>
                <td class="tg-0pky">MASUK</td>
                <td class="tg-0pky">KELUAR</td>
                <td class="tg-0pky">1</td>
                <td class="tg-0pky">2</td>
                <td class="tg-0pky">3</td>
                <td class="tg-0pky">4</td>
                <td class="tg-0pky">5</td>
                <td class="tg-0pky">6</td>
                <td class="tg-0pky">1</td>
                <td class="tg-0pky">2</td>
                <td class="tg-0pky">3</td>
                <td class="tg-0pky">4</td>
                <td class="tg-0pky">5</td>
                <td class="tg-0pky">6</td>
                <td class="tg-0pky">1</td>
                <td class="tg-0pky">2</td>
                <td class="tg-0pky">3</td>
                <td class="tg-0pky">4</td>
                <td class="tg-0pky">5</td>
                <td class="tg-0pky">6</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['udara_masuk_sisi_a']; ?></td>
                    <td><?= $row['udara_masuk_sisi_b']; ?></td>
                    <td><?= $row['minyak_pelumas_masuk']; ?></td>
                    <td><?= $row['minyak_pelumas_keluar']; ?></td>
                    <td><?= $row['air_pendingin_masuk_mesin']; ?></td>
                    <td><?= $row['air_pendingin_keluar_mesin']; ?></td>
                    <td><?= $row['masuk_cooler_sisi_a']; ?></td>
                    <td><?= $row['masuk_cooler_sisi_b']; ?></td>
                    <td><?= $row['keluar_cooler_sisi_a']; ?></td>
                    <td><?= $row['keluar_cooler_sisi_b']; ?></td>
                    <td><?= $row['injector_masuk']; ?></td>
                    <td><?= $row['injector_keluar']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a1']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a2']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a3']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a4']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a5']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_a6']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b1']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b2']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b3']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b4']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b5']; ?></td>
                    <td><?= $row['air_pendingin_keluar_silinder_sisi_b6']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_1']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_2']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_3']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_4']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_5']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_a_6']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
    <pagebreak>
    </pagebreak>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0pky" rowspan="3">No</th>
                <th class="tg-0pky" rowspan="3">Tanggal Input</th>
                <th class="tg-0pky" rowspan="3">WAKTU</th>
                <th class="tg-0pky" colspan="6">GAS BUANG</th>
                <th class="tg-0pky" colspan="7" rowspan="2">MAIN BEARING</th>
                <th class="tg-0pky" rowspan="3">SUHU RUANGAN ( °C )</th>
                <th class="tg-0pky" rowspan="3">RACK BAHAN BAKAR</th>
                <th class="tg-0pky" rowspan="3">GOVERNOR LOAD LIMIT</th>
                <th class="tg-0pky" colspan="10">TEKANAN (Kg / Cm2 )</th>
                <th class="tg-0pky" colspan="2">PUTARAN TURBO</th>
            </tr>
            <tr class="heading">
                <td class="tg-0pky" colspan="6">KELUAR SILINDER B</td>
                <td class="tg-0pky" colspan="2">MINYAK PELUMAS DISARINGAN</td>
                <td class="tg-0pky" colspan="2">UDAR MASUK DISALURKAN</td>
                <td class="tg-0pky" rowspan="2">PELUMAS ROCKER ARM</td>
                <td class="tg-0pky" colspan="2">BAHAN BAKAR</td>
                <td class="tg-0pky" colspan="3">AIR PENDINGIN</td>
                <td class="tg-0pky" rowspan="2">SISI A</td>
                <td class="tg-0pky" rowspan="2">SISI B</td>
            </tr>
            <tr class="heading">
                <td class="tg-0pky">1</td>
                <td class="tg-0pky">2</td>
                <td class="tg-0pky">3</td>
                <td class="tg-0pky">4</td>
                <td class="tg-0pky">5</td>
                <td class="tg-0pky">6</td>
                <td class="tg-0pky">1</td>
                <td class="tg-0pky">2</td>
                <td class="tg-0pky">3</td>
                <td class="tg-0pky">4</td>
                <td class="tg-0pky">5</td>
                <td class="tg-0pky">6</td>
                <td class="tg-0pky">7</td>
                <td class="tg-0pky">MASUK</td>
                <td class="tg-0pky">KELUAR</td>
                <td class="tg-0pky">SISI A</td>
                <td class="tg-0pky">SISI B</td>
                <td class="tg-0pky">I</td>
                <td class="tg-0pky">II</td>
                <td class="tg-0pky">CW</td>
                <td class="tg-0pky">JW</td>
                <td class="tg-0pky">RW</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_1']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_2']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_3']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_4']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_5']; ?></td>
                    <td><?= $row['gas_buang_keluar_silinder_sisi_b_6']; ?></td>
                    <td><?= $row['main_bearing1']; ?></td>
                    <td><?= $row['main_bearing2']; ?></td>
                    <td><?= $row['main_bearing3']; ?></td>
                    <td><?= $row['main_bearing4']; ?></td>
                    <td><?= $row['main_bearing5']; ?></td>
                    <td><?= $row['main_bearing6']; ?></td>
                    <td><?= $row['main_bearing7']; ?></td>
                    <td><?= $row['suhu_ruangan']; ?></td>
                    <td><?= $row['rack_bahan_bakar']; ?></td>
                    <td><?= $row['governor_load_limit']; ?></td>
                    <td><?= $row['tekanan_minyak_pelumas_masuk']; ?></td>
                    <td><?= $row['tekanan_minyak_pelumas_keluar']; ?></td>
                    <td><?= $row['udara_masuk_disalurkan_sisi_a']; ?></td>
                    <td><?= $row['udara_masuk_disalurkan_sisi_b']; ?></td>
                    <td><?= $row['pelumas_rocker_arm']; ?></td>
                    <td><?= $row['bahan_bakar1']; ?></td>
                    <td><?= $row['bahan_bakar2']; ?></td>
                    <td><?= $row['air_pendingin_cw']; ?></td>
                    <td><?= $row['air_pendingin_jw']; ?></td>
                    <td><?= $row['air_pendingin_rw']; ?></td>
                    <td><?= $row['putaran_turbo_sisi_a']; ?></td>
                    <td><?= $row['putaran_turbo_sisi_b']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>

</body>

</html>