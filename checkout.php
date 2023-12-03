<?php 

include('functions/userfunctions.php'); 
include('config/dbcon.php');
include('authenticate.php');

$cartItems = getCartItems();
if(mysqli_num_rows($cartItems) == 0){
    header('Location: index.php');
}

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
    
        <section id="page-header" class="about-header">
            <h2>Hai sa ne cunoastem :)</h2>
            <p>Suntem mai mult decat bucurosi sa auzim ce parere ai despre noi ♥</p>
        </section>
    
<div class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body shadow">
                <form action="functions/placeorder.php" method="POST">
                <div class="row">
                    <div class="col-md-7">
                        <h5>Detalii comanda</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <lable class="fw-bold">Nume</lable>
                                <input type="text" name="name" id="name" required placeholder="Introdu tot numele" class="form-control">
                                <small class="name-error text-danger name"></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable class="fw-bold">Email</lable>
                                <input type="email" name="email" id="email"  required placeholder="Introdu adresa de email" class="form-control">
                                <small class="text-danger email"></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable class="fw-bold">Telefon</lable>
                                <input type="text" name="phone" id="phone"  required placeholder="Introdu numarul de telefon" class="form-control">
                                <small class="text-danger phone"></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable class="fw-bold">Cod postal</lable>
                                <input type="text" name="pincod" id="pincode" required placeholder="Introdu codul postal" class="form-control">
                                <small class="text-danger pincode"></small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <lable class="fw-bold">Adresa</lable>
                                <textarea name="adress" id="adress" rows="3" class="form-control"></textarea>
                                <small class="text-danger adress"></small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <lable class="fw-bold">Comentarii</lable>
                                <textarea name="comments" id="comments" rows="2" class="form-control"></textarea>
                                <small class="text-danger comments"></small>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <h6>Produs</h6>
                            </div>
                            <div class="col-md-3">
                                <h6>Pret</h6>
                            </div>
                            <div class="col-md-2">
                                <h6>Cantitatea</h6>
                            </div>
                        </div>
                        <div id="mycart">
                            <?php 
                                $items= getCartItems();
                                $totalPrice = 0;
                                foreach($items as $citem){
                            ?>
                                    <div class="card product_data shadow-sm mb-3">
                                        <div class="row align-items-center">
                                            <div class="col-md-2 ">
                                                <img src="uploads/<?= $citem['image'] ?>" alt="Image" width="80px">
                                            </div>
                                            <div class="col-md-3">
                                                <h5>    <?= $citem['name'] ?></h5>
                                            </div>
                                            <div class="col-md-3">
                                                <h5><?= $citem['selling_price'] ?></h5>
                                            </div>
                                            <div class="col-md-3">
                                                <h5><?= $citem['prod_qty'] ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                                } ?>
                                <hr>
                                <h5>Cost total: <span class="text-end fw-bold" style="text-align: end;"><?= $totalPrice ?></span></h5>
                                <div class="" style="text-align: center;">
                                    <input type="hidden" name="payment_mode" value="COD">
                                    <button type="submit" name="palceOrderBtn" class="btn btn-primary">Plaseaza comanda</button>
                                </div>
                                <div id="paypal-button-container" class="mt-3"></div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>



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

<!-- Replace the "test" client-id value with your client-id -->
<script src="https://www.paypal.com/sdk/js?client-id=ARrhiboHlMRN6APyBOA786x8ahN2Blr-3ixREgqaoBOd3nyQY_Iyx_CDedGcfEKoV6BcQ_6NOsrVVD2F&currency=USD"></script>
       
<script>
    
    paypal.Buttons({
        onClick(){

            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var pincode = $('#pincode').val();
            var adress = $('#adress').val();

            if(name.length == 0)
            {   
                $('.name').text("Campul trebuie completat.");
            }
            else{
                $('.name').text("");
            }
            if(email.length == 0)
            {   
                $('.email').text("Campul trebuie completat.");
            }
            else{
                $('.email').text("");
            }
            if(phone.length == 0)
            {   
                $('.phone').text("Campul trebuie completat.");
            }
            else{
                $('.phone').text("");
            }
            if(pincode.length == 0)
            {   
                $('.pincode').text("Campul trebuie completat.");
            
            }
            else{
                $('.pincode').text("");
            }
            if(adress.length == 0)
            {   
                $('.adress').text("Campul trebuie completat.");
            
            }
            else{
                $('.adress').text("");
            }

            if(name.length == 0 || email.length == 0|| phone.length == 0 || pincode.length == 0 || adress.length == 0 )
            {
                return false;
            }

        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '36' 
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                const transaction = orderData.purchase_units[0].payments.captures[0];
                 
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var pincode = $('#pincode').val();
                var adress = $('#adress').val();

                var data = {
                    'name' :name,
                    'email' :email,
                    'phone':phone,
                    'pincode':pincode,
                    'adress':adress,
                    'payment_mode':"Paid by PayPal",
                    'payment_id':transaction.id,
                    'placeOrderBtn':true,
                }
                
                $.ajax({
                    method: "POST",
                    url: "functions/placeorder.php",
                    data: data,
                   
                    success: function (response) {
                        if(response==201){
                            alertify.succes("Comanda plasta cu succes!");
                            redirect("my-orders.php","");
                        }
                    }
                });
            });
        }
    }).render('#paypal-button-container');


</script>