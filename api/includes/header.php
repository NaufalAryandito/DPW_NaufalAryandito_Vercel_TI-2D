<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Booking Hotel</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Custom CSS Lokal -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/"><i class="fa-solid fa-hotel me-2"></i>Hotel Booking</a>
      
      <!-- Tombol Hamburger Menu dengan ID nav-toggle-btn -->
      <button class="navbar-toggler" type="button" id="nav-toggle-btn" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="/kamar/list.php"><i class="fa-solid fa-bed me-1"></i>Data Kamar</a></li>
          <li class="nav-item"><a class="nav-link" href="/tamu/list.php"><i class="fa-solid fa-users me-1"></i>Data Tamu</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="container">