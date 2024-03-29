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
    <h1 class="flexbox2" style="margin-top:50px; margin-bottom: 50px;">Usun wybrany komentarz</h1>
    
    <!-- Wybor -->
    <div class="flexbox2">
        <form action="" method="POST">
            Usun według ID: <input name="number" type="number" placeholder="ID" required><br><br>
            <input style="width:200px; height: 50px; background-color: #198754; border: none; border-radius: 0px; color: #fff; margin-top: 50px; margin-bottom: 50px;" type="submit" name="submit" value="Usuń">
        </form>
        <?php 
            //  error_reporting(0);

             if(isset($_POST["number"])) {
                require __DIR__.'/php/db_connection.php';

                $ID = $_POST["number"];
                $sql = "DELETE FROM comments WHERE id = $ID;";

                if (mysqli_query($conn, $sql)) {
                    echo "Usunieto komentarz!\n";
                    // echo "<br>" . "Edytowano: " . date(DATE_RFC2822);
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            
                mysqli_close($conn);
            }
        ?>
    </div>

    <div class="flexbox2">
        <!-- Wyswietlanie tabeli z komentarzami -->
        <?php 
            require __DIR__.'/php/db_connection.php';
        
            $sql = "SELECT id, imie, nazwisko, ocena, komentarz, data FROM comments";
            $result = mysqli_query($conn, $sql);
            
            echo '<table class="table">';
        
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo  "<td>" . $row["id"] . "</td>" . "<td>" . $row["imie"] . "</td>" . "<td>" . " " . $row["ocena"] . "/5" . "</td>" . "<td>" . " " . $row["komentarz"] .  "</td>" . "<td>" . "        Dodano: " . $row["data"] . "</td>" ;
                echo "</tr>";
            }
            } else {
            echo "0 results";
            }
        
            echo "</table>";
        
            mysqli_close($conn);
        ?>
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