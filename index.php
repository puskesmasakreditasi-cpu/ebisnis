<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Akademik</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f5f9;
            margin: 0;
        }

        .navbar {
            background: #6366F1;
            padding: 18px 30px;
            color: white;
            font-size: 22px;
            font-weight: bold;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        .container {
            width: 90%;
            margin: 30px auto;
        }

        .welcome-box {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            margin-bottom: 28px;
        }

        .welcome-box h2 {
            margin: 0;
        }

        /* GRID MENU */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        /* CARD MENU WARNA-WARNI */
        .card-menu {
            border-radius: 18px;
            padding: 30px;
            color: white;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 6px 14px rgba(0,0,0,0.12);
            transition: 0.25s;
        }

        .card-menu:hover {
            transform: translateY(-7px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.25);
            opacity: 0.95;
        }

        .menu-icon {
            font-size: 48px;
            margin-bottom: 10px;
        }

        /* LOGOUT BUTTON */
        .logout {
            margin-top: 30px;
            display: inline-block;
            background: #ef4444;
            padding: 12px 18px;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
            transition: 0.2s;
        }
        .logout:hover {
            background: #dc2626;
        }
    </style>

</head>
<body>

    <div class="navbar">
        SISTEM AKADEMIK – Dashboard
    </div>

    <div class="container">

        <div class="welcome-box">
            <h2>Selamat Datang, <?= $_SESSION['username'] ?> 👋</h2>
            <p>Role Anda: <b><?= $_SESSION['role'] ?></b></p>
        </div>

        <!-- MENU COLORFUL -->
        <div class="menu-grid">

            <a href="mahasiswa.php" class="card-menu" style="background:#3B82F6;">
                <div class="menu-icon">📚</div>
                Data Mahasiswa
            </a>

            <a href="dosen.php" class="card-menu" style="background:#10B981;">
                <div class="menu-icon">👨‍🏫</div>
                Data Dosen
            </a>

            <a href="matkul.php" class="card-menu" style="background:#F59E0B;">
                <div class="menu-icon">📘</div>
                Data Mata Kuliah
            </a>

        </div>

        <a class="logout" href="logout.php">Logout</a>

    </div>

</body>
</html>
