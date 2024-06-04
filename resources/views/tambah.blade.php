<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0a192f;
            background-image: radial-gradient(circle, #192d50 0%, #0a192f 100%);
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh; /* Set minimum height to full viewport height */
            position: relative; /* Set position to relative for proper positioning of footer */
        }

        .container {
            padding-bottom: 100px; /* Add padding to the bottom of container to accommodate footer */
        }

        .btn {
            background-color: #34D399;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #22c88d;
        }

        .form-input {
            background-color: #1a202c;
            color: #ffffff;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #718096;
            width: 100%;
            margin-bottom: 10px;
        }

        .form-textarea {
            background-color: #1a202c;
            color: #ffffff;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #718096;
            width: 100%;
            margin-bottom: 10px;
            resize: none;
            height: 100px;
        }

        .form-submit {
            background-color: #34D399;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-submit:hover {
            background-color: #58fd25;
        }

        .footer {
            color: #ffffff;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">Tambah Pegawai</h2>
        
        <a href="/pegawai" class="flex items-center text-blue-500 hover:text-blue-700"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>

        <br/><br/>

        <form action="/pegawai/store" method="post">
            {{ csrf_field() }}

            <label for="nama">Nama</label><br/>
            <input type="text" name="nama" class="form-input" required><br/>

            <label for="jabatan">Jabatan</label><br/>
            <input type="text" name="jabatan" class="form-input" required><br/>

            <label for="umur">Umur</label><br/>
            <input type="number" name="umur" class="form-input" required><br/>

            <label for="alamat">Alamat</label><br/>
            <textarea name="alamat" class="form-textarea" required></textarea><br/>

            <input type="submit" value="Simpan Data" class="form-submit">
        </form>
    </div>

    <footer class="footer">
        &copy; 2024 <a href="https://www.malasngoding.com" class="text-blue-500 hover:text-blue-700">www.malasngoding.com</a>. All rights reserved. Edited by Muhammad Ilzam.
    </footer>
</body>
</html>
