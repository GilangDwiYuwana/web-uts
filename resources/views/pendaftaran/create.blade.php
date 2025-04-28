<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Kursus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .form-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2em;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1em;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .form-actions button {
            padding: 12px 24px;
            font-size: 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-actions .btn-submit {
            background-color: #28a745;
            color: #ffffff;
        }

        .form-actions .btn-cancel {
            background-color: #dc3545;
            color: #ffffff;
        }

        @media (max-width: 600px) {
            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Form Pendaftaran Kursus</h1>
        <form action="/pendaftaran" method="POST">
            <div class="form-group">
                <label for="nama_peserta">Nama Peserta</label>
                <input type="text" id="nama_peserta" name="nama_peserta" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="nama_kursus">Nama Kursus</label>
                <input type="text" id="nama_kursus" name="nama_kursus" required>
            </div>
            <div class="form-group">
                <label for="kategori_kursus">Kategori Kursus</label>
                <input type="text" id="kategori_kursus" name="kategori_kursus" required>
            </div>
            <div class="form-group">
                <label for="tanggal_mulai">Tanggal Mulai</label>
                <input type="date" id="tanggal_mulai" name="tanggal_mulai" required>
            </div>
            <div class="form-group">
                <label for="tanggal_selesai">Tanggal Selesai</label>
                <input type="date" id="tanggal_selesai" name="tanggal_selesai" required>
            </div>
            <div class="form-group">
                <label for="status_pendaftaran">Status Pendaftaran</label>
                <select id="status_pendaftaran" name="status_pendaftaran" required>
                    <option value="terdaftar">Terdaftar</option>
                    <option value="aktif">Aktif</option>
                    <option value="selesai">Selesai</option>
                    <option value="dibatalkan">Dibatalkan</option>
                </select>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-submit">Simpan</button>
                <button type="reset" class="btn-cancel">Batal</button>
            </div>
        </form>
    </div>

</body>
</html>
