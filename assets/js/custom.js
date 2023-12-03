$(document).ready(function () {
     
    $('.increment-btn').click(function (e) { 
        e.preventDefault();

        var parent = $(this).closest('.product_data');
        var qty = parseInt(parent.find('.databaseQty').val(), 10);
        var inputQty = parent.find('.input-qty');
        var value = parseInt(inputQty.val(), 10);

        value = isNaN(value) ? 0 : value;
        if (value < qty) {
            value++;
            inputQty.val(value);
        }
    });
    
    
   
     $('.decrement-btn').click(function (e) { 
            e.preventDefault();

            var qty=$(this).closest('.product_data').find('.input-qty').val();
            
            var value= parseInt(qty,10);

            value= isNaN(value)? 0:value;
            if(value > 1){
                value--;
                
                $(this).closest('.product_data').find('.input-qty').val(value);
            }

     });

     $('.addToCartBtn').click(function (e) { 
            e.preventDefault();

            var qty=$(this).closest('.product_data').find('.input-qty').val();
            var prod_id= $(this).val();
            
            $.ajax({
                method: "POST",
                url: "functions/handlecart.php",
                data: {
                    "prod_id": prod_id,
                    "prod_qty": qty,
                    "scope": "add"
                },
                success: function (response) {
                    
                    if(response==201){
                       
                        alertify.success("Produs adaugat cu succes!");
                    }
                    else if(response=="exist"){
                        alertify.success("Produsul se afla deja in cosul de cumparaturi!");
                    }
                    else if(response==401){
                        alertify.success("Conecteaza-te pentru a continua");
                    }
                    else if(response==500){
                        alertify.success("Ceva nu a functionat");
                    }
                }
            });


    });

    $(document).on('click','.updateQty', function () {

            var qty=$(this).closest('.product_data').find('.input-qty').val();
            var prod_id= $(this).closest('.product_data').find('.prodId').val();
           
            $.ajax({
                method: "POST",
                url: "functions/handlecart.php",
                data: {
                    "prod_id": prod_id,
                    "prod_qty": qty,
                    "scope": "update"
                },
                success: function (response) {
                    
                }
            });
     });

    $(document).on('click','.deleteItem', function () {

        var cart_id = $(this).val();
        
        $.ajax({
            method: "POST",
            url: "functions/handlecart.php",
            data: {
                "cart_id": cart_id,
                "scope": "delete"
            },
            success: function (response) {
                if(response == 200){
                    alertify.success("Produs sters cu succes!");
                    $('#mycart').load(location.href + " #mycart");
                }
                else{
                    alertify.success(response);
                }
            }
        });
        
    });    

});


