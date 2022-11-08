<?php
    session_start();

    if(!isset($_SESSION['user'])) {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/icons/daisy.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-gallery.css">
    <title>Kwiaciarnia Stokrotka</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand"><img class="logo-img" src="img/icons/daisy.png" alt="daisy">Kwiaciarnia Stokrotka</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a href="opinie.php" class="nav-link">O nas</a>
                    </li>
                    <li class="nav-item">
                        <a href="produkty.php" class="nav-link">Produkty</a>
                    </li>
                    <li class="nav-item">
                        <a href="galeria.php" class="nav-link">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a href="kontakt.php" class="nav-link">Kontakt</a>
                    </li>
                </ul>
                <a href="logout.php" class="btn btn-primary bg-dark">Wyloguj się</a>
            </div>
        </div>
    </nav>

    <!-- Panel Administratora -->
    <h1 class="flexbox2" style="margin-top:50px; margin-bottom: 50px;">Witaj w panelu Administratora</h1>

    <h2 class="flexbox2" style="margin-top:50px; margin-bottom: 50px;">Wybierz co chcesz zrobić</h2>
    
    <!-- Wybor -->

    <div class="flexbox2">
        <a href="administratorDodaj.php">
            <button style="width:200px; height: 50px; background-color: #198754; border: none; border-radius: 0px; color: #fff; margin-top: 50px; margin-right: 35px;">Dodaj produkt</button>
        </a>
        <a href="administratorUsun.php">
            <button style="width:200px; height: 50px; background-color: #198754; border: none; border-radius: 0px; color: #fff; margin-top: 50px;">Usuń komentarz</button>
        </a>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-light" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
              <div class="col">
                Zaobserwuj nas<br>
                <a href="https://www.facebook.com" style="margin-left: 10px;"><img src="img/icons/facebook.png" alt="facebook" class="socials-icon"></a>
                <a href="https://www.instagram.com"><img src="img/icons/instagram.png" alt="instagram" class="socials-icon"></a>
                <a href="https://www.pinterest.com"><img src="img/icons/pinterest.png" alt="pinterest" class="socials-icon"></a>
              </div>
              <div class="col">
                &copy; 2022 Kwiaciarnia Stokrotka<br>
                ul. Podchorążych 2, Kraków
              </div>
              <div class="col">
                Poniedziałek - Piątek: 8:00 do 17:00<br>
                Sobota: 8:00 do 16:00
              </div>
            </div>
          </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>