<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - BPU Unila</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #2c5cc5, #4a7de0);
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* HEADER */
        .header {
            text-align: center;
            color: white;
            padding: 30px 20px 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .header p {
            margin-top: 5px;
            font-size: 14px;
            opacity: 0.95;
        }

        /* WRAPPER */
        .wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* CARD */
        .container {
            width: 420px;
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .container h2 {
            margin-bottom: 5px;
        }

        .subtitle {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0 15px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        input:focus {
            border-color: #2c5cc5;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            background: #2c5cc5;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background: #244fa8;
        }

        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        a {
            color: #2c5cc5;
            text-decoration: none;
            font-weight: 600;
        }

        a:hover {
            text-decoration: underline;
        }

        /* RESPONSIVE */
        @media (max-width: 450px) {
            .container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="header">
    <h1>BPU Unila</h1>
    <p>Sistem Pemesanan Fasilitas</p>
</div>

<!-- WRAPPER -->
<div class="wrapper">
    <div class="container">
        <h2>Buat Akun Baru</h2>
        <p class="subtitle">Lengkapi data Anda untuk memulai</p>

        <form onsubmit="alert('Registrasi hanya demo (tidak disimpan)')">
            
            <label>Nama Lengkap</label>
            <input type="text" placeholder="Masukkan nama lengkap" required>

            <label>Email</label>
            <input type="email" placeholder="email@example.com" required>

            <label>Nomor Telepon</label>
            <input type="text" placeholder="+62 812 3456 7890" required>

            <label>Kata Sandi</label>
            <input type="password" placeholder="Masukkan kata sandi" required>

            <label>Konfirmasi Kata Sandi</label>
            <input type="password" placeholder="Masukkan ulang kata sandi" required>

            <button class="btn" type="submit">Daftar</button>
        </form>

        <div class="footer">
            Sudah punya akun? <a href="login.php">Masuk di sini</a>
        </div>
    </div>
</div>

</body>
</html>