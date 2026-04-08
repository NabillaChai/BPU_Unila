<?php
session_start();

// USER STATIS
$valid_email = "admin@gmail.com";
$valid_password = "12345";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == $valid_email && $password == $valid_password) {
        $_SESSION['login'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - BPU Unila</title>

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

        /* WRAPPER (BIAR CENTER) */
        .wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* CARD LOGIN */
        .container {
            width: 380px;
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

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
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
        @media (max-width: 420px) {
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
        <h2>Selamat Datang Kembali</h2>
        <p class="subtitle">Masuk untuk mengakses akun Anda</p>

        <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>

        <form method="POST">
            <label>Email</label>
            <input type="email" name="email" placeholder="email@example.com" required>

            <label>Kata Sandi</label>
            <input type="password" name="password" placeholder="Masukkan kata sandi" required>

            <button class="btn" name="login">Masuk</button>
        </form>

        <div class="footer">
            Belum punya akun? <a href="register.php">Daftar di sini</a>
        </div>
    </div>
</div>

</body>
</html>