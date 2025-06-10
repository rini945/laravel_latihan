<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        a.button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a.button:hover {
            background-color: #218838;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 3px solid #eee;
        }
        th {
            background-color:rgb(55, 52, 52);
            padding: 12px;
            color: white;
        }
        td {
            padding: 10px;
            text-align: center;
        }
        .action-buttons a {
            display: inline-block;
            margin: 2px;
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid #333;
            background-color: gray;
            color: white;
            cursor: pointer;
            border-radius: 3px;
        }
        .action-buttons button {
            display: inline-block;
            margin: 2px;
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid #333;
            background-color: red;
            color: white;
            cursor: pointer;
            border-radius: 3px;
        }
        .action-buttons a:hover {
            background-color: blue;
        }
        .action-buttons button:hover {
            background-color: green;
        }
    </style>
</head>
<body>

    <h1>Data Barang</h1>

    <a href="{{ route('barangs.create') }}" class="button">Tambah Barang</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($barangs as $barang)
                <tr>
                    <td>{{ $barang->kode}}</td>
                    <td>{{ $barang->nama }}</td>
                    <td>Rp {{ number_format($barang->harga, 0, ',', '.') }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('barangs.edit', $barang->id) }}">Edit</a>
                        <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data barang.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
