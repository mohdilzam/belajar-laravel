<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0a192f;
            background-image: radial-gradient(circle, #192d50 0%, #0a192f 100%);
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            position: relative;
        }

        .container {
            padding-bottom: 100px; 
        }

        .btn {
            background-color: #34D399;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #58fd25;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            overflow-x: auto;
        }

        .table th, .table td {
            border: 1px solid #718096;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #1f2937;
            color: #ffffff;
        }

        .table td {
            background-color: #1a202c;
            color: #ffffff;
        }

        .table a {
            color: #64ffda;
            transition: color 0.3s ease;
        }

        .table a:hover {
            color: #58fd25;
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
        <h2 class="text-2xl font-bold mb-4">Data Pegawai</h2>
        
        <div class="mt-8">
            <table class="table">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Jabatan</th>
                        <th class="px-4 py-2">Umur</th>
                        <th class="px-4 py-2">Alamat</th>
                        <th class="px-4 py-2">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $p)
                    <tr>
                        <td class="px-4 py-2">{{ $p->pegawai_nama }}</td>
                        <td class="px-4 py-2">{{ $p->pegawai_jabatan }}</td>
                        <td class="px-4 py-2">{{ $p->pegawai_umur }}</td>
                        <td class="px-4 py-2">{{ $p->pegawai_alamat }}</td>
                        <td class="px-4 py-2">
                            <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a> |
                            <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="flex justify-end mt-4">
            <a href="/pegawai/tambah" class="btn">+ Tambah Pegawai Baru</a>
        </div>
    </div>

    <footer class="footer">
        &copy; 2024 <a href="https://www.malasngoding.com" class="text-blue-500 hover:text-blue-700">www.malasngoding.com</a>. All rights reserved. Edited by Muhammad Ilzam.
    </footer>
</body>
</html>
