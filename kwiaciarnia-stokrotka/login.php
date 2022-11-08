<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/icons/daisy.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
                <a href="login.php" class="btn btn-primary bg-dark">Zaloguj się</a>
            </div>
        </div>
    </nav>
    
    <h2 class="flexbox2" style="margin-top: 50px; margin-bottom: 50px;">Logowanie do panelu Administratora</h2>

    <div class="flexbox2">
        <div class="formularz" style="margin-bottom: 50px;">
            <form action="" method="post">
                <input type="text" name="username" placeholder="Nazwa użytkownika"><br><br>
                <input type="password" name="password" id="password" placeholder="Hasło"><br><br>
                <input style="width:200px; height: 50px; background-color: #198754; border: none; border-radius: 0px; color: #fff; margin-top: 50px;" type="submit" name="submit" value="Zaloguj"><br><br>
            </form>
            <?php 
                if(isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    session_start();

                    if($username == 'admin' && $password == 'admin') {
                        $_SESSION['user'] = $_POST['username'];
                        header("location:panelAdministratora.php");
                        exit();
                    } else {
                        header("location:login.php");
                        echo 'Nieprawidłowe hasło lub nazwa użytkownika';
                    }
                }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-light">
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