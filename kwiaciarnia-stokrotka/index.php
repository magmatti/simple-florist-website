<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/icons/daisy.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
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

    <!-- Slider -->
    <section class="slider-background">
        <div id="mslider">
            <div id="slideholder">
                <img class="img-slider" src="img/slider/img(1).jpg" alt="">
                <img class="img-slider" src="img/slider/img(2).jpg" alt="">
                <img class="img-slider" src="img/slider/img(3).jpg" alt="">
                <img class="img-slider" src="img/slider/img(4).jpg" alt="">
            </div>
            <div id="sliderpicker">
                <input type="radio" name="slideradio" id="slide-1" class="slideradio">
                <label for="slide-1"></label>
                <input type="radio" name="slideradio" id="slide-2" class="slideradio">
                <label for="slide-2"></label>
                <input type="radio" name="slideradio" id="slide-3" class="slideradio">
                <label for="slide-3"></label>
                <input type="radio" name="slideradio" id="slide-4" class="slideradio">
                <label for="slide-4"></label>
            </div>
            <div id="slidercounter"></div>
            </div>
    </section>

    <!-- Our services -->
    <section class="our-services">
        <h2 class="flexbox services-header">Nasze usługi</h2>
        <div class="flexbox">
            <div class="column">
                <div class="card" style="width: 18rem;">
                    <img src="./img/etykiety/bouquet.jpg" class="card-img-top" alt="bouquet">
                    <div class="card-body">
                        <h5 class="card-title">Bukiety</h5>
                        <p class="card-text">Zrobimy twój wymarzony bukiet.</p>
                        <a href="galeria.php" class="btn btn-primary bg-success">Sprawdź</a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card" style="width: 18rem;">
                    <img src="./img/etykiety/wieniec.jpg" class="card-img-top" alt="wieniec">
                    <div class="card-body">
                        <h5 class="card-title">Wieńce pogrzebowe</h5>
                        <p class="card-text">Duży wybór wieńcy pogrzebowych, zarówno sztucznych jak i żywych.</p>
                        <a href="galeria.php" class="btn btn-primary bg-success">Sprawdź</a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card" style="width: 18rem;">
                    <img src="./img/etykiety/wedding-table.jpg" class="card-img-top" alt="wedding-table">
                    <div class="card-body">
                        <h5 class="card-title">Sale weselne</h5>
                        <p class="card-text">Ubierzemy salę weselną wedle Twojego uznania.</p>
                        <a href="galeria.php" class="btn btn-primary bg-success">Sprawdź</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dlaczego nasza kwiaciarnia -->
    <section class="why-us">
        <h2 class="flexbox services-header">Dlaczego Kwiaciarnia Stokrotka?</h2>
        <div class="box-holder flexbox">
            <div class="why-us-box flexbox2">Zawsze świeże kwiaty</div>
            <div class="why-us-box flexbox2">Zamówisz dzisiaj, dostarczymy jutro</div>
            <div class="why-us-box flexbox2">Kwiaty dobrane na każdą okazję</div>
        </div> 
    </section>

    <!-- Pomoc/kontakt -->
    <section class="help">
        <div class="flexbox3 help-div2">
            <div class="help-text flexbox2">
                <div class="help-text-2">
                    <h2>Odwiedź nas</h2><br>
                    <h3>Adres:</h3>
                    ul. Podchorążych 2, Kraków<br>
                    <h3>Godziny otwarcia:</h3>
                    Poniedziałek - Piątek: 8:00 do 17:00<br>
                    Sobota: 8:00 do 16:00<br><br>
                    <div class="flexbox2">
                        <div class="help-button flexbox2">
                            <a class="help-button-link" href="https://www.google.com/maps/place/Pedagogical+University+of+Krakow/@50.0737662,19.9062493,17z/data=!3m1!4b1!4m5!3m4!1s0x47165bb0c172b203:0x15a71d3ed97809d2!8m2!3d50.0737662!4d19.908438" target="_blank">Prowadź</a>
                        </div>
                        <div class="help-button flexbox2">
                            <a class="help-button-link" href="kontakt.php">Kontakt</a>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="help-img">
                <img src="img/contact/sprzedawca.jpg" alt="">
            </div>
        </div>
    </section>

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

    <script src="scripts/sliderScript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>