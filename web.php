<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Kelompok 4</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: linear-gradient(to right, #e3f2fd, #bbdefb);
        }

        /* Navbar */
        nav {
            background-color: #1976d2;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        nav h1 {
            font-size: 20px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 50px 20px;
            color: #0d47a1;
        }

        .hero h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
        }

        /* Card */
        .card {
            background: white;
            max-width: 600px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            text-align: center;
        }

        .card img {
            width: 100%;
            border-radius: 15px;
            margin-top: 15px;
        }

        .card h3 {
            color: #1976d2;
            margin-bottom: 10px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 15px;
            background: #1976d2;
            color: white;
            margin-top: 40px;
        }

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav>
        <h1>Kelompok 4</h1>
        <ul>
            <li>Home</li>
            <li>Tentang</li>
            <li>Kontak</li>
        </ul>
    </nav>

    <!-- Hero -->
    <div class="hero">
        <h2>Selamat Datang 👋</h2>
        <p>Website sederhana dengan tampilan modern dan menarik</p>
    </div>

    <!-- Card -->
    <div class="card">
        <h3>Foto Kelompok</h3>
        <p>Ini adalah dokumentasi kegiatan kami</p>
        <img src="https://res.cloudinary.com/mokletorg/image/upload/v1720667149/app_media/file_kapsos.jpg" alt="Foto Kelompok">
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2026 Kelompok 4 | Dibuat dengan ❤️</p>
    </footer>

</body>
</html>
