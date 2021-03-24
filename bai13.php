<?php
include ('mysql.php');
session_start();
var_dump($_SESSION['cartTotal']);
 function getProduct()
{	  
    
// Kết nối database
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('{error:"bad_request"}');   	    
    $sql = "SELECT * FROM product " ;
    $query = mysqli_query($conn, $sql);
    if ($query->num_rows >0){
        $row = $query -> fetch_all(MYSQLI_ASSOC);
        // var_dump($row);exit;
        return $row;
    }
    
    return false;    
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>
    <body>
        <form method="POST" action="/">
            <div>
                <?php if($data = getProduct()): ?>
                    <table border="0" cellpadding="10" cellspacing="0">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Product Name</td>
                                <td>Qty</td>
                                <td>Price</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $dt): ?>
                                <?php //var_dump($dt); exit;?>
                                <tr>
                                    <td><input type="hidden" id="id" value="<?php echo $dt['id']; ?>"><?php echo $dt['id']; ?></td>
                                    <td><?php echo $dt['productname']; ?></td>
                                    <td><input type="text" id="qty" value="<?php echo $dt['qty']; ?>"></td>
                                    <td><input type="text" id="price" value="<?php echo $dt['price']; ?>"></td>
                                    <td>
                                        <button type="button" class="add-to-cart"> Add to cart</button>
                                        <button type="button" class="remove">Remove</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>                   
                    </table>
                <?php endif; ?>
            </div>    
            <div>
                <select name="product">
                    <option value="p1">Product 1</option>
                    <option value="p2">Product 2</option>
                    <option value="p3">Product 3</option>
                </select>
                <button type="button" id="add-product">Add Product</button>
            </div>    
        </form>
        <div id="cart">
            <p >Total: <span id="total"><?php echo isset($_SESSION['cartTotal']['total']) ? $_SESSION['cartTotal']['total'] : '' ?></span></p>
            <p >Tax: <span id="tax"><?php echo isset($_SESSION['cartTotal']['total']) ? $_SESSION['cartTotal']['tax'] : '' ?></span></p>
            <p >Total included Tax: <span id="total-incl-tax"><?php echo isset($_SESSION['cartTotal']['total']) ? $_SESSION['cartTotal']['totalInclTax'] : '' ?></span> </p>
        </div>
        <div id="old-cart">
            <input type="hidden" id="old-total" value="<?php echo isset($_SESSION['cartTotal']['total']) ? $_SESSION['cartTotal']['total'] : '' ?>"></input>
            <input type="hidden" id="old-tax" value="<?php echo isset($_SESSION['cartTotal']['total']) ? $_SESSION['cartTotal']['tax'] : '' ?>"></input>
            <input type="hidden" id="old-total-incl-tax" value="<?php echo isset($_SESSION['cartTotal']['total']) ? $_SESSION['cartTotal']['totalInclTax'] : '' ?>"></input>
        </div>
        <script>
        jQuery('#add-product').on('click', function(){
            var value = $('select[name="product"]').val();
            var name = $('select[name="product"] option:selected').text();
            $.ajax({
                url : 'product.php',
                type : 'post',
                dataType : 'json',
                data : {
                    value: value, name: name
                },
                success : function (result){                   
                }
            });
        });
        $(".add-to-cart").click(function() {
            var oldTotal = $('#old-total').val();
            var oldTax = $('#old-tax').val();
            var oldTotalInclTax = $('#old-total-incl-tax').val();

            var qty = $(this).closest("tr").find("#qty").val();
            var price = $(this).closest("tr").find("#price").val();
            $.ajax({
                url : 'product.php?add=1',
                type : 'post',
                dataType : 'json',
                data : {
                    qty: qty, 
                    price: price,
                    oldTotal: oldTotal,
                    oldTax: oldTax,
                    oldTotalInclTax: oldTotalInclTax
                },
                success : function (result){
                    if(result){
                        $('#total').html(result.total);
                        $('#tax').html(result.tax);
                        $('#total-incl-tax').html(result.totalInclTax);

                        $('#old-total').val(result.total);
                        $('#old-tax').val(result.tax);
                        $('#old-total-incl-tax').val(result.totalInclTax);
                    }
                }
            });
        });

        $(".remove").click(function() {
            var productId = $(this).closest("tr").find("#id").val();
            var oldTotal = $('#old-total').val();
            var oldTax = $('#old-tax').val();
            var oldTotalInclTax = $('#old-total-incl-tax').val();

            var qty = $(this).closest("tr").find("#qty").val();
            var price = $(this).closest("tr").find("#price").val();
            $.ajax({
                url : 'product.php?remove=1',
                type : 'post',
                dataType : 'json',
                data : {
                    value : productId,
                    qty: qty, 
                    price: price,
                    oldTotal: oldTotal,
                    oldTax: oldTax,
                    oldTotalInclTax: oldTotalInclTax
                },
                success : function (result){
                    if(result){
                        $('#total').html(result.total);
                        $('#tax').html(result.tax);
                        $('#total-incl-tax').html(result.totalInclTax);

                        $('#old-total').val(result.total);
                        $('#old-tax').val(result.tax);
                        $('#old-total-incl-tax').val(result.totalInclTax);
                    }
                }

            });
        });
                   
        </script>
        
    </body>
</html>