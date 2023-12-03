<?php 

include('functions/userfunctions.php'); 
include('config/dbcon.php');

include('authenticate.php');
?>


<!DOCTYPE html>
<html>
<head><!DOCTYPE html>
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
    
      
        <div class="py-5">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-md-12">
                           <table class="table table-borderd table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Numar Comanda/Tracking no</th>
                                        <th>Pret</th>
                                        <th>Data</th>
                                        <th>Vizualizeaza comanda</th>
                                    </tr>
                                <tbody>
                                    <?php
                                    $orders = getOrders();
                                    if(mysqli_num_rows($orders) > 0){
                                        
                                        foreach($orders as $item){
                                        ?>
                                            <tr>
                                               <td><?=$item['id']?></td>
                                               <td><?=$item['tracking_no']?></td>
                                               <td><?=$item['total_price']?></td>
                                               <td><?=$item['created_at']?></td>
                                               <td>
                                                    <a href="view-order.php?t=<?=$item['tracking_no']?>" class="btn btn-primary">Detalii</a>
                                               </td>
                                            </tr>

                                        <?php
                                        
                                        }
                                    }
                                    else{
                                       ?>
                                            <tr>
                                               <td colspan="5">Nu a fost plasata nicio comanda.</td>
                                            </tr>


                                       <?php
                                    }
                                
                                    ?>
                                    
                                </tbody>

                                </thead>
                           </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

        <!---footer---->
        <footer class="section-p1">
        <script src="assets/js/custom.js"></script>
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
    
    
        <script src="script.js"></script>
    
    </body>
    
    </html>
    <meta charset="UTF-8" />
    <title>title</title>
</head>
<body>
    
</body>
</html>