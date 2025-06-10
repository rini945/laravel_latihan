<!-- Simpan sebagai resources/views/barangs/edit.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --success-color: #4caf50;
            --danger-color: #f44336;
            --warning-color: #ff9800;
            --info-color: #2196f3;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --gray-color: #6c757d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f8fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 15px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            padding: 20px 30px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .card-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.25);
            outline: none;
        }

        .invalid-feedback {
            color: var(--danger-color);
            font-size: 14px;
            margin-top: 5px;
        }

        .is-invalid {
            border-color: var(--danger-color);
        }

        .is-invalid:focus {
            box-shadow: 0 0 0 3px rgba(244, 67, 54, 0.25);
        }

        .alert {
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid transparent;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .btn {
            display: inline-block;
            font-weight: 500;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 6px;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary {
            color: #fff;
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .btn-secondary {
            color: #fff;
            background-color: var(--gray-color);
            border-color: var(--gray-color);
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #5a6268;
        }

        .btn-success {
            color: #fff;
            background-color: var(--success-color);
            border-color: var(--success-color);
        }

        .btn-success:hover {
            background-color: #3d8b40;
            border-color: #3d8b40;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .form-group-inline {
            display: flex;
            gap: 15px;
        }

        .form-group-inline .form-group {
            flex: 1;
        }

        @media (max-width: 768px) {
            .form-group-inline {
                flex-direction: column;
                gap: 0;
            }
            
            .form-actions {
                flex-direction: column;
                gap: 15px;
            }
            
            .form-actions .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Data Barang
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- METODE 1: POST dengan _method=PUT (cara Laravel standar) -->
                <form action="/barangs/{{ $barang->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    
                    <div class="form-group">
                        <label for="kode" class="form-label">Kode Barang</label>
                        <input 
                            type="text" 
                            id="kode" 
                            name="kode" 
                            class="form-control @error('kode') is-invalid @enderror" 
                            value="{{ old('kode', $barang->kode) }}"
                        >
                        @error('kode')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <input 
                            type="text" 
                            id="nama" 
                            name="nama" 
                            class="form-control @error('nama') is-invalid @enderror" 
                            value="{{ old('nama', $barang->nama) }}"
                        >
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group-inline">
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input 
                                type="text" 
                                id="harga" 
                                name="harga" 
                                class="form-control @error('harga') is-invalid @enderror" 
                                value="{{ old('harga', $barang->harga) }}"
                            >
                            @error('harga')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="stok" class="form-label">Stok</label>
                            <input 
                                type="text" 
                                id="stok" 
                                name="stok" 
                                class="form-control @error('stok') is-invalid @enderror" 
                                value="{{ old('stok', $barang->stok) }}"
                            >
                            @error('stok')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-actions">
                        <a href="/barangs" class="btn btn-secondary">Kembali ke Daftar</a>
                        <button type="submit" class="btn btn-success">Update Barang</button>
                    </div>
                </form>
                
                <!-- METODE 2: Alternatif menggunakan rute POST khusus -->
                <!--
                <form action="/barangs/{{ $barang->id }}/update" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="kode" class="form-label">Kode Barang</label>
                        <input 
                            type="text" 
                            id="kode" 
                            name="kode" 
                            class="form-control @error('kode') is-invalid @enderror" 
                            value="{{ old('kode', $barang->kode) }}"
                        >
                        @error('kode')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <input 
                            type="text" 
                            id="nama" 
                            name="nama" 
                            class="form-control @error('nama') is-invalid @enderror" 
                            value="{{ old('nama', $barang->nama) }}"
                        >
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group-inline">
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input 
                                type="text" 
                                id="harga" 
                                name="harga" 
                                class="form-control @error('harga') is-invalid @enderror" 
                                value="{{ old('harga', $barang->harga) }}"
                            >
                            @error('harga')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="stok" class="form-label">Stok</label>
                            <input 
                                type="text" 
                                id="stok" 
                                name="stok" 
                                class="form-control @error('stok') is-invalid @enderror" 
                                value="{{ old('stok', $barang->stok) }}"
                            >
                            @error('stok')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-actions">
                        <a href="/barangs" class="btn btn-secondary">Kembali ke Daftar</a>
                        <button type="submit" class="btn btn-success">Update Barang</button>
                    </div>
                </form>
                -->
            </div>
        </div>
    </div>
</body>
</html>