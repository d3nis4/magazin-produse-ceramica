<?php 
include('functions/userfunctions.php'); 
include('config/dbcon.php');
?>


<!DOCTYPE html>
<html>
<head><!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UFT-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ceramica</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
    
        <section id="header">
            <a href="#"><img src="img/logo.png" height="75"></a>
       
            <div>
                <ul id="nvbar">
                    <li><a href="index.php">Acasă</a></li>
                    <li><a href="shop.html">Magazin</a></li>
                     <li><a href="about.html">Despre noi</a></li>
                     <li><a  href="login.html"><i class="far fa-user"></i>Conectează-te</a></li>
                    <li><a class="active" href="contact.php">Contact</a></li>
                    <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                    <a href="#" id="close"><i class="fas fa-times"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>
    
        <section id="page-header" class="about-header">
            <h2>Hai sa ne cunoastem :)</h2>
            <p>Suntem mai mult decat bucurosi sa auzim ce parere ai despre noi ♥</p>
        </section>
    
        <section id="contact-details" class="section-p1">
            <div class="details">
                <span>Contacteaza-ne</span>
                <h2>Hai sa ne vedem in magazinul nostru</h2>
                <div>
                    <li>
                        <i class="far fa-map"></i>
                        <p>2201 Hotel Circ South, San Diego</p>
                    </li>
                    <li>
                        <i class="far fa-envelope"></i>
                        <p>contact@example.com</p>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <p>+456 8965 325</p>
                    </li>
                    <li>
                        <i class="far fa-clock"></i>
                        <p>Luni - Vineri : 9:00 - 16:00</p>
                    </li>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.2652745503806!2d-117.18557162517381!3d32.75869498492352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80deaad0eff06b53%3A0xb42db18658f8fb1a!2s2201%20Hotel%20Cir%20S%2C%20San%20Diego%2C%20CA%2092108%2C%20Statele%20Unite%20ale%20Americii!5e0!3m2!1sro!2sro!4v1698242138512!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section id="form-details">
        
            <form action="https://formsubmit.co/17b211199c991b2250df25c0cf12e3eb" method="POST">
                <span>Lasa un mesaj</span>
                <h2>Nu ezita sa ne scrii daca ai nevoie de ajutor</h2>
                <input type="text" name="name" placeholder="Numele tau">
                <input type="text" name="email"placeholder="E-mail">
                <input type="text" name="subject" placeholder="Subiect">
                 <textarea name="message"  cols="30" rows="10" placeholder="Mesajul tau pentru noi">Mesajul tau pentru noi
                </textarea>
                <button type="submit"class="normal">Trimite</button> 
            </form>
            
            <div class="people">
                <div>
                    <img src="img/persoane/1.png" alt="">
                    <p><span>Maria Popescu</span>Proprietar și Manager<br> Telefon: +000 2659 325
                        <br>Email: contact@example.com
                    </p>
                </div>
                <div>
                    <img src="img/persoane/2.png" alt="">
                    <p><span>Andrei Mihai</span>Anticar și Designer de Interior<br> Telefon: +000 2659 325
                        <br>Email: contact@example.com
                    </p>
                </div>
                <div>
                    <img src="img/persoane/3.png" alt="">
                    <p><span>Elena Stoica</span> Restaurator de Obiecte Vechi și Colectionar de Farfurii<br> Telefon: +000 2659 325
                        <br>Email: contact@example.com
                    </p>
                </div>

            </div>

        </section>
    
         <!--Newsletter-->
         <section id="newsletter" class="section-p1 section-m1"> 
            <div class="newstext">
                <h4 style="text-align: center;">Inscrie-te pentru newsletter</h4>
                <p>Daca doriti sa primiti informatii in legatura cu cele mai recente noutati si <span>oferte</span>, va rugam sa completati adresa dumneavoastra de email.</p>
            </div>
            <div class="form">
                <input type="text" placeholder="Scrie aici adresa ta de email">
                <button class="normal">Inscrie-te</button>
            </div>
    
        </section>
    
         <!--Footer-->
        <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Adresa: </strong> 2201 Hotel Cir S, San Diego, CA 92108</p>
            <p><strong>Telefon: </strong> +01 2222 365</p>
            <p><strong>Program: </strong>Luni - Vineri: 10:00 - 16:00</p>
            <div class="follow">
                <h4>Retele de socializare</h4>
                <div class="icon">
                   <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a> 
                   <a href="https://twitter.com/?lang=ro" target="_blank"><i class="fab fa-twitter"></i></a>
                   <a href="https://www.instagram.com/vintage.newhome/?hl=ro" target="_blank"><i class="fab fa-instagram"></i></a> 
                   <a href="https://ro.pinterest.com/search/pins/?q=ceramics&rs=typed" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                   <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>Informatii utile</h4>
            <a href="#"  onclick="window.location.href='about.html';">Despre noi</a>
            <a href="#">Informatii despre transport</a>
            <a href="#">Politica de confidentialitate</a>
            <a href="#">Termeni si conditii</a>
            <a href="#"  onclick="window.location.href='contact.php';">Contact</a>
        </div>

        <div class="col">
            <h4>Contul meu</h4>
            <a href="login.html" target="_blank" >Conecteaza-te</a>
            <a href="#">Cosul de cumparaturi</a>
            <a href="#">Lista de dorinte</a>
            <a href="#">Urmareste comanda</a>
            <a href="#">Ajutor</a>
        </div>
        </footer>
    
    
        <script src="script.js"></script>
    
    </body>
    
    </html>
    <meta charset="UTF-8" />
    <title>title</title>
</head>
<body>
    
</body>
</html>