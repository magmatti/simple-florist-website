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

    <!-- Kontakt -->
    <h1 class="flexbox2" style="margin-top: 50px; margin-bottom: 50px;">Kontakt</h1>
    <div class="contact-wrapper flexbox" style="margin-bottom: 50px;">
        <div class="flexbox2">
            <div class="contact-text">
                <h2><img src="img/icons/email.png" alt="" style="max-height: 50px; max-width: 50px;"> kontakt@example.com</h2>
                <h2><img src="img/icons/phone-call.png" alt="" style="max-height: 50px; max-width: 50px;"> +48 609 609 609</h2>
                <h2><img src="img/icons/pin.png" alt="" style="max-height: 50px; max-width: 50px;"> ul. Podchorążych 2, Kraków<h2>
                <h2>Poniedziałek - Piątek: 8:00 do 17:00</h2>
                <h2>Sobota: 8:00 do 16:00</h2>
                <div class="flexbox2">
                    <canvas id="canvas" width="200" height="200" style="backgorund-color: #333;"></canvas>
                    <script>
                        var canvas = document.getElementById("canvas");
                        var ctx = canvas.getContext("2d");
                        var radius = canvas.height / 2;
                        ctx.translate(radius, radius);
                        radius = radius*0.90;
                        setInterval(drawClock, 1000);

                        function drawClock() {
                            drawFace(ctx, radius);
                            drawNumbers(ctx, radius);
                            drawTime(ctx, radius);
                        }

                        function drawFace(ctx, radius) {
                            var grad;
                            ctx.beginPath();
                            ctx.arc(0, 0, radius, 0, 2*Math.PI);
                            ctx.fillStyle = 'white';
                            ctx.fill();
                            grad = ctx.createRadialGradient(0, 0, radius*0.95, 0, 0, radius*1.05);
                            grad.addColorStop(0, '#333');
                            grad.addColorStop(0.5, 'white');
                            grad.addColorStop(1, '#333');
                            ctx.strokeStyle = grad;
                            ctx.lineWidth = radius*0.1;
                            ctx.stroke();
                            ctx.beginPath();
                            ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
                            ctx.fillStyle = '#333';
                            ctx.fill();
                        }

                        function drawNumbers(ctx, radius) {
                            var ang;
                            var num;
                            ctx.font = radius*0.15 + "px arial";
                            ctx.textBaseline = "middle";
                            ctx.textAlign = "center";

                            for(num = 1; num < 13;  num++) {
                                ang = num * Math.PI / 6;
                                ctx.rotate(ang);
                                ctx.translate(0, -radius*0.85);
                                ctx.rotate(-ang);
                                ctx.fillText(num.toString(), 0, 0);
                                ctx.rotate(ang);
                                ctx.translate(0, radius*0.85);
                                ctx.rotate(-ang);
                            }
                        }

                        function drawTime(ctx, radius) {
                            var now = new Date();
                            var hour = now.getHours();
                            var minute = now.getMinutes();
                            var second = now.getSeconds();

                            hour = hour % 12;
                            hour = (hour*Math.PI/6) + (minute*Math.PI/(6*60)) + (second*Math.PI/(360*60));
                            drawHand(ctx, hour, radius*0.5, radius*0.07);

                            minute = (minute*Math.PI/30) + (second*Math.PI/(30*60));
                            drawHand(ctx, minute, radius*0.8, radius*0.07);

                            second = (second*Math.PI/30);
                            drawHand(ctx, second, radius*0.9, radius*0.02);
                        }

                        function drawHand(ctx, pos, lenght, width) {
                            ctx.beginPath();
                            ctx.lineWidth = width;
                            ctx.lineCap = "round";
                            ctx.moveTo(0, 0);
                            ctx.rotate(pos);
                            ctx.lineTo(0, -lenght);
                            ctx.stroke();
                            ctx.rotate(-pos);
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="contact-img">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Podchor%C4%85%C5%BCych%202,%20Krak%C3%B3w&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi discount</a><br>
                        <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                        <a href="https://www.embedgooglemap.net">google embed</a>
                        <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                    </div>
                </div>
            </div>
        </div>   
    </div>

    <!-- Email-form -->
    <h2 class="flexbox2" style="margin-bottom: 50px;">Masz pytanie? Napisz do nas!</h2>                        

    <div class="php-form flexbox2">
        <div class="" style="margin-bottom: 50px;">
            <form method="post">
                <div class="flexbox" style=>
                    <div>
                        <h3>E-mail: </h3><input type="text" name="senderMail"><br>
                        <h3>Imie: </h3><input type="text" name="name"><br>
                        <h3>Nazwisko: </h3><input type="text" name="lastName"><br>
                        <h3>Tytul: </h3><input type="text" name="subject"><br><br>
                    </div>
                </div>
                <h3>Wiadomosc:</h3><br><textarea rows="5" name="message" cols="30"></textarea><br>
                <div class="flexbox2">
                    <input style="width:200px; height: 50px; background-color: #198754; border: none; border-radius: 0px; color: #fff; margin-top: 50px;" type="submit" name="submit" value="Wyślij">
                </div>
            </form>
        </div>
    </div>
    
    <div class="flexbox2">
        <?php
            error_reporting(0);
            include 'php/sendMail.php';
        ?>
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