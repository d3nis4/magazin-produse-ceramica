<?php 
session_start(); 

if(isset($_SESSION['auth'])){
    $_SESSION['message']="Esti deja conectat";
    header('Location: index.php');
    exit();
}


?>


<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceramica</title>
   
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
                     <li><a class="active" href="login.html"><i class="far fa-user"></i>Conectează-te</a></li>
                    <li><a  href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>


    <?php if(isset($_SESSION['message'])) 
                { ?>
                
                <div class="alert alert-warning alert-dismissible fade show" role="alert" style=" color: #F0F0F0; position: center; margin: auto">
                        <strong>Ups!</strong> <?php echo $_SESSION['message']; ?>
                        <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>-->
                    </div>
                <?php
                    unset($_SESSION['message']);
                }
                ?>

    <!---LOGIN-->
   
    <section id="formular">
        <div class="form-box">
            <!--LOGIN-->
            <div class="login-container" id="login" style="width: 99%;">
                <div class="top">
                    <span>Nu ai cont?<a href="register.php" onclick="register()">Înregistreză-te</a></span>
                    <header>Conectează-te</header>
                </div>
                <form action="functions/authcode.php" method="POST">
                    <div class="input-box">
                        <input type="text"  name="email" required class="form-control" placeholder="E-mail">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" required class="form-control" placeholder="Parola">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" name="login_btn" class="submit" value="Conectează-te">
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="login-check">
                            <label for="login-check">Aminteste datele de conectare</label>
                        </div>
                        <div class="two">
                            <label><a href="#">Ai uitat parola?</a></label>
                        </div>
                    </div>
                </form>
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

