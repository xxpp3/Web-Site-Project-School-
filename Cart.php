<?php     
    
    include("db_connect.php");
    if(isset($_POST['submit'])){
        $id_product = $_POST['id'];
        $quantity = $_POST['Quantity'];
        $sql = "INSERT INTO panier VALUES('','$id_product','$quantity')";
        mysqli_query($conn,$sql);
        $sql3 = "UPDATE newproduct SET  Quantity = Quantity - $quantity WHERE Id_Product=$id_product ";
        mysqli_query($conn,$sql3);
    }
    $sql1 = "SELECT Quanitiy,Model,Price,Photo,id_panier  from panier inner join newproduct on panier.id_product = newproduct.Id_Product ";
    $result = mysqli_query($conn,$sql1);
    $Products = mysqli_fetch_all($result);

    if(isset($_POST['submit_Delete'])){
        $ed = $_POST['ide'];
        $sql2 = "DELETE from panier WHERE id_panier = $ed ";
        mysqli_query($conn,$sql2);
        header("location: Cart.php");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include("Cart.css"); ?></style>
    <title>Cart-Shop</title>
</head>
<body >
    <?php 
        include("Header.php");
    ?>
    <?php include('ThemeChanger.php');?>
    <div class="Contaier" >
        <div class="Box_left" id="Theme1" >
        <!--   #7826d5    
            input #d291f2
            button #a825de    
        -->
            <p class="title">Product Title</p>
            <?php foreach($Products as $product){
            ?>
            <div class="InfoProduct"  >
                            <!-- <form class="delete" action="Cart.php" method="POST">
                            <input type="text" hidden name="ide" value="<?php echo $product[4] ?>">
                            <button class="button_delete" type="submit" name="submit_Delete" > <img class="img_delete" src="Icons/trash-can-solid.svg" alt="Add icon"></button>
                            </form> -->
                <img class="Img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product[3]); ?>" 
                alt="">
                <p class="nameProd"><?php echo htmlspecialchars($product[1]) ?></p>
            </div>
            <?php } ?>
            
            <a href="Home.php" class="href" ><img class="angle_left" src="Icons/angle-left-solid.svg" alt=""> Continue Shoping</a>
        </div>

        <div class="Box_right" id="Theme2">
        <!--    #c480fb  
            button1,2   #7a27db
        -->
            <div>
                <table>
                    <tr class="TBL1">
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>SubTotal</th>
                        <th>Delete</th>
                    </tr>
                    <?php foreach($Products as $product){
            ?>
                    <tr class="Table">
                        <td ><?php echo htmlspecialchars($product[2])." $" ?></td>
                        <td ><?php echo htmlspecialchars($product[0]) ?></td>
                        <td ><?php echo $product[2]*$product[0]." $" ; ?></td>
                        <td>
                            <form class="delete" action="Cart.php" method="POST">
                            <input type="text" hidden name="ide" value="<?php echo $product[4] ?>">
                            <button class="button_delete" type="submit" name="submit_Delete" > <img class="img_delete" src="Icons/trash-can-solid.svg" alt="Add icon"></button>
                            </form>
                        </td>
                    </tr>

                <?php } ?>
                </table>
            </div>
            <div class="Box_To_right" id="Theme3">
                <table class="Check_Pay_Out">
                    <tr class="Payment_list">
                        <td>SubTotal</td>
                        <td id="subPrice">0</td>
                        
                    </tr>
                    <tr class="Payment_list">
                        <td>Shipping</td>
                        <td id="shipping">10 $</td>
                        
                    </tr>
                    <tr class="Payment_list">
                        <td>Total</td>
                        <td id="Total">0</td>
                        
                    </tr>
                    
                
                </table>
            
                <button  type="submit" class="Button_buy">minde buying ?</button>
               
                
            </div>
        </div>

    </div>
    <script>   <?php include("Cart.js"); ?>  </script>
    <script>   <?php include("ThemeChanger.js"); ?>  </script>
</body>
</html>