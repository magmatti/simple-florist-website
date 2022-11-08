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

    <h1 class="flexbox2" style="margin-top: 50px; margin-bottom: 50px;">O nas</h1>
    <h2 class="flexbox2">Kwiaciarnia Stokrotka</h2>
    <h6 class="flexbox2">W branży od ponad 20 lat</h6><br>
    <div class="flexbox2" style="padding-right: 60px; padding-left: 60px;">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus earum sit est, unde dolore aliquam quibusdam ipsam, sed facilis adipisci architecto cumque iure nobis temporibus, non fuga inventore reprehenderit. Laboriosam?
        Illo deleniti doloremque est, deserunt quas accusantium, aliquam quibusdam libero ex consectetur veniam accusamus nihil a itaque esse vel, perspiciatis atque similique aliquid recusandae? Aliquam iure amet in neque dolor.
        Soluta eaque adipisci quidem hic sed, inventore perspiciatis? Quisquam ea ullam iste officiis, quae quis aperiam, in labore commodi sequi eligendi minima voluptatum illo maiores perferendis delectus? Pariatur, eum facere.
        Consequuntur tempore commodi sapiente natus laborum iste velit, animi assumenda nostrum. Veniam sunt vel facere vitae expedita quidem culpa natus necessitatibus sit, architecto assumenda ad, quo itaque iste excepturi quisquam!
        </p>
    </div>

    <h2 class="flexbox2" style="margin-top: 50px; margin-bottom: 50px;">Opinie klientów</h2>
    <!-- Wyswietl opinie -->
    <div class="opinie flexbox">
        <div class="php-wrapper">
            <?php 
                $servername = "localhost";
                $username = "mateusz.wojtowicz4";
                $password = "myBKIVFsql";
                $dbname = "mateusz.wojtowicz4";
              
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }
              
                $sql = "SELECT id, imie, nazwisko, ocena, komentarz, data FROM komentarze2";
                $result = mysqli_query($conn, $sql);
                
                echo '<table class="table">';
              
                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo  "<td>" . $row["imie"] . "</td>" . "<td>" . " " . $row["ocena"] . "/5" . "</td>" . "<td>" . " " . $row["komentarz"] .  "</td>" . "<td>" . "        Dodano: " . $row["data"] . "</td>" ;
                    echo "</tr>";
                  }
                } else {
                  echo "0 results";
                }
              
                echo "</table>";
              
                mysqli_close($conn);
            ?>
        </div>
        <div class="php-form ">
            <h2 class="flexbox2" style="margin-bottom: 50px;">Dodaj komentarz</h2>
            <form method="post">
            <div class="" style="margin-bottom: 50px;">
            <form action="php/insert_opinia.php" method="post">
                <div class="flexbox" style=>
                    <div>
                        <input type="text" name="imie" placeholder="Imie" required><br><br>
                        <input type="text" name="nazwisko" placeholder="Nazwisko" required><br><br>
                        <textarea placeholder="Komentarz" rows="5" name="message" cols="30" required></textarea><br><br>
                        <input placeholder="Ocena" list="oceny" id="ocena" name="ocena" required><br><br>
                        <datalist id="oceny">
                            <option value=1>
                            <option value=2>
                            <option value=3>
                            <option value=4>
                            <option value=5>
                        </datalist>
                    </div>
                </div>
                <div class="flexbox2">
                    <input style="width:200px; height: 50px; background-color: #198754; border: none; border-radius: 0px; color: #fff; margin-top: 50px;" type="submit" name="submit" value="Dodaj">
                </div>
            </form>
            <?php
                error_reporting(0);

                if(isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["message"]) && isset($_POST["ocena"])) {
                    $servername = "localhost";
                    $username = "mateusz.wojtowicz4";
                    $password = "myBKIVFsql";
                    $dbname = "mateusz.wojtowicz4";
    
                    $imie = $_POST["imie"];
                    $nazwisko = $_POST["nazwisko"];
                    $message = $_POST["message"];
                    $ocena = $_POST["ocena"];
                    $data = date("Y-m-d H:i:s");
    
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
    
                    $sql = "INSERT INTO komentarze2 (imie, nazwisko, komentarz, ocena, data)
                            VALUES ('$imie', '$nazwisko', '$message', $ocena, '$data');";
    
                    if (mysqli_query($conn, $sql)) {
                        echo "Dziękujemy za opinie!\n";
                        // echo "<br>" . "Edytowano: " . date(DATE_RFC2822);
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
    
                    mysqli_close($conn);
                } 
            ?>
        </div>
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