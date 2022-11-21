<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .biodata {

            font-family: sans-serif;
            color: #030708;
            width: 50px;
        }

        h2 {
            text-align: center;
        }

        table {
            margin: 0 auto;
        }
    </style>
    <title>biodata pasien</title>
</head>

<body>
    <table class="biodata">
        <h2>Data Pasien</h2>
        <hr width="500">
        <tr>
            <td>Nama Ibu</td>
            <td>: {{ $pasienbio->nama_ibu }}</td>
        </tr>
        <tr>
            <td>Nama Anak</td>
            <td>: {{ $pasienbio->nama_anak }}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{ $pasienbio->umur }}</td>
        </tr>
        <tr>
            <td>Berat Bdan</td>
            <td>: {{ $pasienbio->berat_badan }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{ $pasienbio->alamat }}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:
                {{ \Carbon\Carbon::createFromTimestamp(strtotime($pasienbio->tanggal_lahir))->format('d M Y') }}
            </td>
        </tr>
        <tr>
            <td>Tanggal Daftar</td>
            <td>:
                {{ \Carbon\Carbon::createFromTimestamp(strtotime($pasienbio->tanggal_daftar))->format('d M Y') }}
            </td>
        </tr>
        <tr>
            <td>Keluhan</td>
            <td>: {{ $pasienbio->keluhan }}</td>
        </tr>
    </table>
</body>

</html>
