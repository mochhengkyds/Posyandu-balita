<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pdf</title>
    <style>
        <style>.table {
            font-family: sans-serif;
            color: #030708;
            width: 60%;
            border: 1px solid #FFFFFF;
        }

        .table tr th {
            background: #43B8EC;
            color: #030708;
            font-weight: normal;
            border: 1px solid #030708;

        }

        .table,
        th,
        td {
            padding: 8px 20px;
            text-align: start;
        }

        .table td {
            border: 1px solid #030708;
        }
    </style>
    </style>
</head>

<body>
    <h1>Data Pasien</h1>
    <table class="table">
        <tr>
            <th>Nama Ibu</th>
            <th>Nama anak</th>
            <th>Umur</th>
            <th>Berat Badan</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Tanggal Daftar</th>
        </tr>
        @foreach ($pasien as $item)
            <tr>
                <td>{{ $item->nama_ibu }}</td>
                <td>{{ $item->nama_anak }}</td>
                <td>{{ $item->umur }}</td>
                <td>{{ $item->berat_badan }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ \Carbon\Carbon::createFromTimestamp(strtotime($item->tanggal_lahir))->format('d M Y') }}</td>
                <td>{{ \Carbon\Carbon::createFromTimestamp(strtotime($item->tanggal_daftar))->format('d M Y') }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
