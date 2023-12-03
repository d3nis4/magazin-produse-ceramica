<?php 
include('functions/userfunctions.php'); 
include('config/dbcon.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UFT-8">
            <link rel="stylesheet" href="style.css">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ceramica</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="style.css">
           <link rel="stylesheet" href="style.css">
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                <script src="assets/js/jquery-3.7.1.min.js"></script>
                <script src="script.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <!--     Fonts and icons     -->
                <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
                <!-- Font Awesome Icons -->
                <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
                <!-- Material Icons -->
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

                <!--- Alertify-Js --->
                <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
                <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

</head>

<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" height="75"></a>
        <div>
            <ul id="nvbar">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 mt-10" type="search" placeholder="Search" aria-label="Search" style="background-color: #192655;">
                    <button class="normal float-end" type="submit">Search</button>
                </form>
                <li><a class="active" href="index.php">Acasă</a></li>
                <li><a href="categorii.php">Categorii produse</a></li>
                <li><a href="about.html">Despre noi</a></li>
                <?php
                if(isset($_SESSION['auth'])){
                    ?>
                    
                    
                    <li><a  href="myaccount.php"><i class="far fa-user"></i>
                    <?= $_SESSION['auth_user']['name']; ?></li>
                    <li><a href="logout.php">Deconectează-te</a></li>
                    <?php
                }
                else{
                    ?>
                    <li><a  href="login.php"><i class="far fa-user"></i>Conectează-te</a></li> 
                    <?php
                }
                
                ?>

                 <li><a href="contact.php">Contact</a></li>
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
                
                        <!---<div class="alert alert-warning alert-dismissible fade show" role="alert" style=" color: #F0F0F0; position: center; margin: auto">
                        <strong>Ups!</strong> //<?php echo $_SESSION['message']; ?> -->
                        <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>-->
                    </div>
                <?php
                    unset($_SESSION['message']);
                }
                ?>

    <section id="hero">
        <div>
            <h1>Descopera eleganta vintage!</h1>
            <h2>Adauga farmecul vintage</h2>
            <h2>in casa ta!</h2>
            <p>La comenzi de minim 150 de lei, transportul este gratuit!</p>
            <button id="buton-cumparaturi">Cumpara</button>
        </div>
    </section>

    
 <!--catgorii prod-->
    <section id="product1" class="section-p1">
        <h1>Categorii de produse</h1 >
        <div class="pro-container" >
            <?php 
                $categories = getAllActive("categories");
                if(mysqli_num_rows($categories) > 0){
                    foreach($categories as $item){
                        ?>
                            <div class="pro-container">
                                <a href="products.php?category=<?= $item['slug']; ?>" >
                                    <div class="pro">
                                            <img src="uploads/<?= $item['image']; ?>"  >
                                            <div class="des">
                                                <h5><?= $item['name'] ?> </h5>
                                            </div>
                                            
                                    </div>
                                </a>
                            </div>
                        <?php
                    }
                }
                else{
                    echo "Nicio categorie disponibila";
                }
            ?>
            </div>
    </section>

    <section id="banner" class="section-m1">
        <h2>Cine suntem?</h2>
        <h4>Cei din spatele site-ului 'Ceramica' suntem o echipă pasionată de decorul vintage, dedicați aducerii farmecului și eleganței clasice în casele oamenilor. Ne străduim să oferim produse autentice, îndrăgite de clienții noștri, și suntem aici pentru a împărtăși această pasiune cu voi.</h4>
        <button class="normal"  onclick="window.location.href='contact.php';">Contact</button>
    </section>
    
 
    <section id="product1" class="section-p1">
    <h1>Produse recomandate</h1>
    <p>Noua colectie de iarna</p>
        <div class="pro-container" >
            <?php 
                $products = getAllActiveAndPopular("products");
                if(mysqli_num_rows($products) > 0){
                    foreach($products as $item){
                        ?>
                            <div class="pro-container">
                                <a href="product-view.php?product=<?= $item['slug']; ?>" >
                                    <div class="pro">
                                            <img src="uploads/<?= $item['image']; ?>"  >
                                            <div class="des">
                                                <h5><?= $item['name'] ?> </h5>
                                                <h4><?= $item['selling_price'] ?> de lei</h4>
                                                <a href="#"><i class="fa fa-shopping-cart bag" ></i></a>
                                            </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                    }
                }
                else{
                    echo "Niciun produs disponibil";
                }
            ?>
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

    <!---Cod pentru butonul de Cumpara-->
    <script>
        document.getElementById('buton-cumparaturi').addEventListener('click', function() {
        const sectiuneDorita = document.getElementById('product1');
        if (sectiuneDorita) {
                const offset = 50; 
                window.scrollTo({
                top: sectiuneDorita.offsetTop - offset,
                behavior: 'smooth',
                });
            }
        });
    </script>



    <script src="script.js"></script>

</body>

</html>