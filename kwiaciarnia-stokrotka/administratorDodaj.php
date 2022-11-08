<?php
    session_start();

    if(!isset($_SESSION['user']))
    {
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
    <h1 class="flexbox2" style="margin-top:50px; margin-bottom: 50px;">Dodaj produkt do bazy danych</h1>
    
    <!-- Wybor -->

    <div class="flexbox2">
        <form action="" method="post">
            <div class="flexbox" style=>
                <div>
                    <input type="text" name="nazwa" placeholder="Nazwa produktu" required><br><br>
                    <input type="number" min="1" max="500" name="ilosc" placeholder="ilosc" required><br><br>
                    <input type="number" min="5" max="1000" name="cena" placeholder="cena" required><br><br>
                </div>
            </div>
            <div class="flexbox2">
                <input style="width:200px; height: 50px; background-color: #198754; border: none; border-radius: 0px; color: #fff; margin-top: 50px; margin-bottom: 50px;" type="submit" name="submit" value="Dodaj">
            </div>
        </form>
            <?php
                error_reporting(0);

                if(isset($_POST["nazwa"]) && isset($_POST["ilosc"]) && isset($_POST["cena"])) {
                    $servername = "localhost";
                    $username = "mateusz.wojtowicz4";
                    $password = "myBKIVFsql";
                    $dbname = "mateusz.wojtowicz4";

                    $nazwa = $_POST["nazwa"];
                    $ilosc = $_POST["ilosc"];
                    $cena = $_POST["cena"];

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "INSERT INTO Produkty (nazwa, ilosc, cena)
                            VALUES ('$nazwa', $ilosc, $cena);";

                    if (mysqli_query($conn, $sql)) {
                        echo "Dodano produkt!\n";
                        // echo "<br>" . "Edytowano: " . date(DATE_RFC2822);
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                } 
            ?>
        </div>
    </div>

    <div class="flexbox2">
        <!-- Wyswietl Produkty -->
        <div class="php-wrapper flexbox2">
            <?php include 'php/select_data.php'?>
        </div>
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