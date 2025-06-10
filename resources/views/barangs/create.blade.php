<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tambah Barang</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 500px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .form {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
    }

    .btn {
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #218838;
    }

    .back-btn {
        background-color:rgb(34, 121, 214);
        display: inline-block;
        text-align: center;
        margin-top: 10px;
    }

    .back-btn:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Barang</h1>

        <form action="{{ route('barangs.store') }}" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="kode">Kode:</label>
                <input type="text" id="kode" name="kode" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" id="stok" name="stok" required>
            </div>

            <button type="submit" class="btn">Simpan</button>
        </form>

        <a href="{{ route('barangs.index') }}" class="btn back-btn">Kembali</a>
    </div>
</body>
</html>