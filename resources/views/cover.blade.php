<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>{{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            color: #333;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero-section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #fff;
            text-align: center;
            padding: 0 20px;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }

        .hero-section p {
            font-size: 1.25rem;
            margin: 20px 0;
        }

        .btn-custom {
            padding: 10px 20px;
            font-size: 1.25rem;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
        }

        .img-fluid {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">SPK ISP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section" id="home">
        <div class="container">
            <h1 class="display-5 fw-bold lh-1 mb-3">SPK Pemilihan ISP</h1>
            <p class="lead">Sistem Pendukung Keputusan (SPK) menggunakan metode Weighted Product untuk membantu pengguna dalam memilih ISP yang paling sesuai dengan preferensi dan kriteria yang telah ditetapkan.</p>
            <a href="{{ route('register') }}" class="btn btn-light btn-custom me-2">Register</a>
            <a href="{{ route('login') }}" class="btn btn-dark btn-custom">Log in</a>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="img/undraw_proud_coder_re_exuy.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    @auth
                    <h1 class="display-5 fw-bold lh-1 mb-3">Welcome Back, {{ auth()->user()->name }}</h1>
                    <p class="lead">Sistem Pendukung Keputusan (SPK) menggunakan metode Weighted Product untuk membantu pengguna dalam memilih ISP yang paling sesuai dengan preferensi dan kriteria yang telah ditetapkan. Sistem ini membantu pengguna untuk membuat keputusan yang lebih informasional dan sesuai dengan preferensi pribadi mereka dalam memilih penyedia layanan internet. Dengan menggunakan metode Weighted Product, pengguna dapat memperoleh rekomendasi ISP terbaik yang memenuhi kebutuhan mereka, seperti kecepatan koneksi yang diinginkan, stabilitas yang diharapkan, harga yang terjangkau, dan pelayanan yang baik.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('dashboard') }}" class="btn btn-dark btn-lg px-4 me-md-2">Dashboard</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-secondary btn-lg px-4 me-md-2">Log out</button>
                        </form>
                    </div>
                    @else
                    <h1 class="display-5 fw-bold lh-1 mb-3">SPK Pemilihan ISP</h1>
                    <p class="lead">Sistem Pendukung Keputusan (SPK) menggunakan metode Weighted Product untuk membantu pengguna dalam memilih ISP yang paling sesuai dengan preferensi dan kriteria yang telah ditetapkan. Sistem ini membantu pengguna untuk membuat keputusan yang lebih informasional dan sesuai dengan preferensi pribadi mereka dalam memilih penyedia layanan internet. Dengan menggunakan metode Weighted Product, pengguna dapat memperoleh rekomendasi ISP terbaik yang memenuhi kebutuhan mereka, seperti kecepatan koneksi yang diinginkan, stabilitas yang diharapkan, harga yang terjangkau, dan pelayanan yang baik.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('register') }}" class="btn btn-dark btn-lg px-4 me-md-2">Register</a>
                        <a href="{{ route('login') }}" class="btn btn-secondary btn-lg px-4 me-md-2">Log in</a>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 SPK ISP. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+L6ZC4vfnA1RvKjUr4L5R8Z5Kk+Nf" crossorigin="anonymous"></script>
</body>

</html>
