<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Teman Terbaikku</title>
  <link rel="icon" type="image/png" href="bear3.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body class="swipe-page home-page">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-transparent">
  <div class="container">
    <a class="navbar-brand" href="index.php">BestFriend 💙</a>

    <button class="navbar-toggler" type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    
  </div>
</nav>

<!-- CONTENT -->
<section class="temen-section">
  <div class="container text-center">
    <h1 class="mb-5">Teman Terbaikku</h1>

    <div class="row g-4">
      <!-- TEMAN 1 -->
      <div class="col-md-6">
        <div class="card temen-card">
          <img src="dika.jpeg" class="card-img-top" alt="Teman dika">
          <div class="card-body">
            <h5 class="card-title">Temanku Muhammad Dika Kurniawan</h5>
            <p class="card-text">
              Teman yang selalu ada di saat aku butuh.
            </p>
            <a href="login.php" class="btn btn-primary">Lihat</a>
          </div>
        </div>
      </div>

      <!-- TEMAN 2 -->
      <div class="col-md-6">
        <div class="card temen-card">
          <img src="khalid.jpeg" class="card-img-top" alt="Teman khalid">
          <div class="card-body">
            <h5 class="card-title">Temanku Khalid</h5>
            <p class="card-text">
              Teman yang selalu ngerti tanpa banyak kata.
            </p>

            <a href="login.php" class="btn btn-primary">Lihat</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="js/script.js"></script>

</body>
</html>

