<?php 
include('functions/userfunctions.php'); 
include('config/dbcon.php');

if(isset($_GET['product'])){

    $product_slug = $_GET['product'];
    $product_data = getSlugActive("products",$product_slug);
    $product = mysqli_fetch_array($product_data);

    
    if($product){
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
                <li><a class="active" href="index.php">Acasă</a></li>
                <li><a href="products.php">Magazin</a></li>
                <li><a href="about.html">Despre noi</a></li>
                <?php
                if(isset($_SESSION['auth'])){
                    ?>

                    <?= $_SESSION['auth_user']['name']; ?>
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
            
        <section id="prodetails" class="section-p1 product_data">
            <input type="hidden" class="databaseQty" value="<?= $product['qty'];?>">
                <div class="single-pro-image">
                    <img src="uploads/<?= $product['image'];?>" width="100%" id="MainImg" alt="">
                </div>
                <div class="single-pro-details">
                    <h6>  
                        <a href="index.php">
                            Acasa/  
                        </a>
                        <a href="index.php">
                            Categorii 
                        </a>
                        / <?= $product['name'] ?>
                    </h6>
                    <h6><span class="float-end text-danger"><?php if($product['trending']){echo "Produs Popular";}?></span></h6>
                    <h4><?= $product['name'] ?></h4>
                    <div class="row mt-3">
                        <div class="col-md-6">   
                            <div class="input-group mb-3" style="width:130px">   
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" class="form-control text-center input-qty bg-white" value="1"  >
                                <button class="input-group-text increment-btn">+</button> 
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <h2><?= $product['selling_price'] ?> lei</h2>
                         </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">      
                            <button class="btn btn-danger px-4"><i class="fa fa-heart me-2"></i>Adaugă în lista de dorințe</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary px-4 me-2 mb-2 mb-sm-0 addToCartBtn" value="<?= $product['id']; ?>"><i class="fa fa-shopping-cart me-2"></i>Adaugă în coș</button>
                        </div>
                    </div>
                    <h4>Descrierea produsului</h4>
                    <span><?= $product['description'] ?></span>

                </div>
        </section>





            <!--Newsletter-->
            <section id="newsletter" class="section-p1 section-m1"> 
                <form action="functions/user-code.php" method="POST">
                    <div class="newstext">
                        <h4 style="text-align: center;">Lasa-ne un review</h4>
                        <p>Suntem nerabdatori sa auzim ce parere ai desrpe micul nostru magazin.</p>
                    </div>
                    <div class="form-group">
                        <label style="color: white;">Nume</label>
                        <textarea class="form-control" name="nume_parere" placeholder="Nume" rows="1"></textarea>
                    </div>
                    <div class="form-group">
                        <label style="color: white;">Example textarea</label>
                        <textarea class="form-control" name="parere" placeholder="Scrie-ne aici parerea ta..." rows="3"></textarea>
                    </div>             
                        <button type="submit" name="parereBtn"  class="normal" >Trimite</button>
                    </form>
            </section>

            <footer class="section-p1">
                <div class="col">
                    <img class="logo" src="img/logo.png" alt="">
                    <h4>Contact</h4>
                    <p><strong>Adresa: </strong> 2201 Hotel Cir S, San Diego, CA 92108</p>
                    <p><strong>Phone: </strong> +01 2222 365</p>
                    <p><strong>Hours: </strong>10:00 - 18:00, Luni - Vineri</p>
                    <div class="follow">
                        <h4>Retele de socializare</h4>
                        <div class="icon">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-pinterest-p"></i>
                            <i class="fab fa-youtube"></i>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h4>Informatii utile</h4>
                    <a href="#">Despre noi</a>
                    <a href="#">Informatii despre transport</a>
                    <a href="#">Politica de confidentialitate</a>
                    <a href="#">Termeni si conditii</a>
                    <a href="#">Contact</a>
                </div>

                <div class="col">
                    <h4>Contul meu</h4>
                    <a href="#">Conecteaza-te</a>
                    <a href="#">Cosul de cumparaturi</a>
                    <a href="#">Lista de dorinte</a>
                    <a href="#">Urmareste comanda</a>
                    <a href="#">Ajutor</a>
                </div>
            </footer>

           
            
            <!--Footer-->
             <!--Alertify Js JavaScript -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
                <script src="assets/js/custom.js"></script>
                <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
                <Script>   
                    alertify.set('notifier','position', 'top-right');
                <?php 
                    if(isset($_SESSION['message']))
                    { 
                        ?>
                        alertify.success('<?= $_SESSION['message']; ?>');
                        <?php 
                        unset($_SESSION['message']);

                    } 
                ?>
                </script>
            
        <?php
    }      
    else{
        echo "Produsul nu a fost gasit";
    }
}
    else{
        echo "Ceva nu a functionat";
        }
?>
