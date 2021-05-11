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
    <p class="title">Log Ampenan Ruston</p>
    <p class="subtitle">Data Pada periode tanggal <?= content_date($awal); ?></p>
    <p class="subtitle">Dicetak Pada tanggal <?= date('d-m-Y'); ?></p>
    <p>Dicetak oleh : <?= $user['name']; ?></p>
    <br>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0lax" rowspan="5">No</th>
                <th class="tg-0lax" rowspan="5">Tanggal Input</th>
                <th class="tg-0lax" rowspan="5">WAKTU</th>
                <th class="tg-0lax" colspan="25">MESIN</th>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="25">SUHU (°C)</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="4">AIR PENDINGIN</td>
                <td class="tg-0lax" colspan="2">MINYAK PELUMAS</td>
                <td class="tg-0lax" rowspan="3">UDARA MASUK</td>
                <td class="tg-0lax" colspan="16">GAS BUANG</td>
                <td class="tg-0lax" colspan="2">MINYAK DISARINGAN</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="2">JACKET WATER</td>
                <td class="tg-0lax" colspan="2">RAW WATER</td>
                <td class="tg-0lax" rowspan="2">MASUK</td>
                <td class="tg-0lax" rowspan="2">KELUAR</td>
                <td class="tg-0lax" colspan="4">SILINDER SISI A</td>
                <td class="tg-0lax" colspan="4">SILINDER SISI B</td>
                <td class="tg-0lax" colspan="8">SEBELUM TURBO</td>
                <td class="tg-0lax" rowspan="2">MASUK</td>
                <td class="tg-0lax" rowspan="2">KELUAR</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax">MASUK</td>
                <td class="tg-0lax">KELUAR</td>
                <td class="tg-0lax">MASUK</td>
                <td class="tg-0lax">KELUAR</td>
                <td class="tg-0lax">1</td>
                <td class="tg-0lax">2</td>
                <td class="tg-0lax">3</td>
                <td class="tg-0lax">4</td>
                <td class="tg-0lax">1</td>
                <td class="tg-0lax">2</td>
                <td class="tg-0lax">3</td>
                <td class="tg-0lax">4</td>
                <td class="tg-0lax">1A</td>
                <td class="tg-0lax">2A</td>
                <td class="tg-0lax">3A</td>
                <td class="tg-0lax">4A</td>
                <td class="tg-0lax">1B</td>
                <td class="tg-0lax">2B</td>
                <td class="tg-0lax">3B</td>
                <td class="tg-0lax">4B</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['air_pendingin_jacket_water_masuk']; ?></td>
                    <td><?= $row['air_pendingin_jacket_water_keluar']; ?></td>
                    <td><?= $row['air_pendingin_raw_water_masuk']; ?></td>
                    <td><?= $row['air_pendingin_raw_water_keluar']; ?></td>
                    <td><?= $row['minyak_pelumas_masuk']; ?></td>
                    <td><?= $row['minyak_pelumas_keluar']; ?></td>
                    <td><?= $row['suhu_udara_masuk']; ?></td>
                    <td><?= $row['gas_buang_silinder_sisi_a_1']; ?></td>
                    <td><?= $row['gas_buang_silinder_sisi_a_2']; ?></td>
                    <td><?= $row['gas_buang_silinder_sisi_a_3']; ?></td>
                    <td><?= $row['gas_buang_silinder_sisi_a_4']; ?></td>
                    <td><?= $row['gas_buang_silinder_sisi_b_1']; ?></td>
                    <td><?= $row['gas_buang_silinder_sisi_b_2']; ?></td>
                    <td><?= $row['gas_buang_silinder_sisi_b_3']; ?></td>
                    <td><?= $row['gas_buang_silinder_sisi_b_4']; ?></td>
                    <td><?= $row['sebelum_turbo_a1']; ?></td>
                    <td><?= $row['sebelum_turbo_a2']; ?></td>
                    <td><?= $row['sebelum_turbo_a3']; ?></td>
                    <td><?= $row['sebelum_turbo_a4']; ?></td>
                    <td><?= $row['sebelum_turbo_b1']; ?></td>
                    <td><?= $row['sebelum_turbo_b2']; ?></td>
                    <td><?= $row['sebelum_turbo_b3']; ?></td>
                    <td><?= $row['sebelum_turbo_b4']; ?></td>
                    <td><?= $row['minyak_disaringan_masuk']; ?></td>
                    <td><?= $row['minyak_disaringan_keluar']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
    <pagebreak></pagebreak>
    <table class="tg" autosize="1" border="1" cellspacing="0" cellpadding="10" style="font-family: sans-serif, Courier, monospace;">
        <thead>
            <tr class="heading title">
                <th class="tg-0lax" rowspan="4">No</th>
                <th class="tg-0lax" rowspan="4">Tanggal Input</th>
                <th class="tg-0lax" rowspan="4">WAKTU</th>
                <th class="tg-0lax" colspan="7">MESIN</th>
                <th class="tg-0lax" rowspan="4">LOAD LIMIT GOVERNOR</th>
                <th class="tg-0lax" colspan="8">GENERATOR</th>
                <th class="tg-0lax" rowspan="4">BEBAN ( KW )</th>
                <th class="tg-0lax" rowspan="4">KWH PRODUKSI</th>
                <th class="tg-0lax" rowspan="4">FLOW METER BAHAN BAKAR</th>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="7">TEKANAN ( Kg / Cm2 )</td>
                <td class="tg-0lax" rowspan="3">FREKWENSI (Hz)</td>
                <td class="tg-0lax" rowspan="3">FAKTOR DAYA ( COS? )</td>
                <td class="tg-0lax" rowspan="3">TEGANGAN ( KV )</td>
                <td class="tg-0lax" colspan="3">ARUS</td>
                <td class="tg-0lax" colspan="2">PENGUAT MEDAN ( EXCITER )</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax" colspan="2">PELUMAS</td>
                <td class="tg-0lax" colspan="2">BAHAN BAKAR DISARINGAN</td>
                <td class="tg-0lax" colspan="2">PENDINGINAN</td>
                <td class="tg-0lax" rowspan="2">UDARA MASUK</td>
                <td class="tg-0lax" rowspan="2">R</td>
                <td class="tg-0lax" rowspan="2">S</td>
                <td class="tg-0lax" rowspan="2">T</td>
                <td class="tg-0lax" rowspan="2">TEGANGAN (V)</td>
                <td class="tg-0lax" rowspan="2">ARUS ( A )</td>
            </tr>
            <tr class="heading">
                <td class="tg-0lax">DIPANEL</td>
                <td class="tg-0lax">DIMESIN</td>
                <td class="tg-0lax">MASUK</td>
                <td class="tg-0lax">KELUAR</td>
                <td class="tg-0lax">JACKET WATER MASUK</td>
                <td class="tg-0lax">RAW WATER MASUK</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= content_date($row['tanggal_input']); ?></td>
                    <td><?= $row['waktu']; ?></td>
                    <td><?= $row['pelumas_dipanel']; ?></td>
                    <td><?= $row['pelumas_dimesin']; ?></td>
                    <td><?= $row['bahan_bakar_disaringan_masuk']; ?></td>
                    <td><?= $row['bahan_bakar_disaringan_keluar']; ?></td>
                    <td><?= $row['pendinginan_jacket_water_masuk']; ?></td>
                    <td><?= $row['pendinginan_raw_water_masuk']; ?></td>
                    <td><?= $row['tekanan_udara_masuk']; ?></td>
                    <td><?= $row['load_limit_governor']; ?></td>
                    <td><?= $row['frekwensi']; ?></td>
                    <td><?= $row['faktor_daya']; ?></td>
                    <td><?= $row['tegangan']; ?></td>
                    <td><?= $row['arus_r']; ?></td>
                    <td><?= $row['arus_s']; ?></td>
                    <td><?= $row['arus_t']; ?></td>
                    <td><?= $row['penguat_medan_tegangan']; ?></td>
                    <td><?= $row['penguat_medan_arus']; ?></td>
                    <td><?= $row['beban']; ?></td>
                    <td><?= $row['kwh_produksi']; ?></td>
                    <td><?= $row['flow_meter_bahan_bakar']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>


</body>

</html>