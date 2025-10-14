<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-3" style="background-color: #f2e5d5;">
            <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/logo.png') }}" alt="Logo" height="40">
            </a>
        
            <!-- Tombol Toggle untuk mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-3">
                <li class="nav-item"><a class="nav-link" href="#">SHOP</a></li>
                <li class="nav-item"><a class="nav-link" href="#">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link" href="#">STORES</a></li>
                <li class="nav-item"><a class="nav-link" href="#">REWARDS</a></li>
        
                <!-- Ikon (gunakan Bootstrap Icons) -->
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-search"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-bag"></i></a></li>
                </ul>
            </div>
            </div>
        </nav>
        
</body>