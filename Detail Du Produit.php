<?php 
  include('db_connect.php');
  
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "SELECT * from newproduct WHERE Id_Product = $id";
    $result = mysqli_query($conn,$sql);
    $Products = mysqli_fetch_assoc($result);
    
    /* $_SESSION['photo'] = $Products['Photo'] ; */
    mysqli_free_result($result);
    mysqli_close($conn);
  }
  
 /*  if(isset($_POST["submit"])){
    $ide = $th ;
    $sql = "SELECT * from newproduct WHERE Id_Product = $ide";
    $result = mysqli_query($conn,$sql);
    $Products = mysqli_fetch_assoc($result);
    $Photo =$Products["Photo"];
    $Price = $Products["Price"];
    $id_pro = $id ;
    $Quantity = $_POST["Quantity"];
    $sql = "INSERT INTO panier VALUES('','$id_pro','$Quantity','$Photo','$Price')";
  } */
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <style><?php include('Detail Du Produit.css') ?></style>
    <title>Detail Du Produit</title>
  </head>
  <body >
  
  <?php include('Header.php');?>
  <?php include('ThemeChanger.php');?>
  <div class="Body_Container">
    <!-- <div class="Detail">
      <h1  >Detail de mon site</h1>
    </div> -->
    <div class="Container" id="Theme1">
      <div class="Box_left">
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($Products["Photo"]); ?>"
         alt="Logo" 
         class="IMG_Product"/>
         <form method="post" action="Cart.php">
    <div class="Input">                                                                       
      <label class="QuantityLabel" >Quantity</label> <input name="Quantity" type="number" placeholder="pick a nunber" ></input>
      <input type="text" hidden name="id" value="<?php echo $id ?>">
      <button class="button_submit" name="submit">
        <img src="Icons/cart-plus-solid.svg" alt="Add icon" class="icon_add"/>
        <p class="Button_submit_innerText" >panier</p>
      </button>
      </div>
      </form>
      </div>
      <div class="Box_right" id="Theme2">
        <?php if($Products): ?>
            <table>
              <tr class="TBL1">
                  <th>Categorie</th>
                  <th>refrence</th>
              </tr>
              <tr class="Table">
                  <td>Price:</td>
                  <td  class="column_2_table"><?php echo htmlspecialchars($Products["Price"]); ?> $</td>
              </tr>
              <tr class="Table">
                  <td> Marque: </td>
                  <td class="column_2_table" > <?php echo htmlspecialchars($Products["Marque"]); ?> </td>
              </tr>
              <tr class="Table">
                  <td>Model:</td>
                  <td class="column_2_table" ><?php echo htmlspecialchars($Products["Model"]); ?></td>
              </tr>
              
              <tr class="Table">
                  <td>Stockage:</td>
                  <td class="column_2_table"><?php echo htmlspecialchars($Products["Memoir"]); ?> GB</td>
              </tr>
              <tr class="Table">
                  <td>Os: </td>
                  <td class="column_2_table"><?php echo htmlspecialchars($Products["Os"]); ?></td>
              </tr>
              <tr class="Table">
                  <td>Camera avant:</td>
                  <td class="column_2_table"><?php echo htmlspecialchars($Products["Camera avant"]); ?> </td>
              </tr>
              <tr class="Table">
                  <td>Camera arrier:</td>
                  <td class="column_2_table"><?php echo htmlspecialchars($Products["Camera arrier"]); ?></td>
              </tr>
              <tr class="Table">
                  <td>Dimension(L x H x P):</td>
                  <td class="column_2_table"><?php echo htmlspecialchars($Products["Dimension (L x H x P)"]); ?></td>
              </tr>
              <tr class="Table">
                  <td>RAM:</td>
                  <td class="column_2_table"><?php echo htmlspecialchars($Products["RAM"]); ?> Gb</td>
              </tr>
              <tr class="Table">
                  <td>FingerPrint:</td>
                  <td class="column_2_table"><?php if($Products["FINGERPRINT"]==1){
                    echo "Yes";
                  }else{
                    echo "No";
                  } ?></td>
              </tr>
              <tr class="Table">
                  <td>Double puce:</td>
                  <td class="column_2_table"><?php
                  if($Products["Double puce"]==1){
                    echo "Yes";
                  }else{
                    echo "No";
                  }
                 ?></td>
              </tr>
              <tr class="Table">
                  <td>FaceId:</td>
                  <td class="column_2_table"><?php
                  if($Products["FaceId"]==1){
                    echo "Yes";
                  }else{
                    echo "No";
                  }
                   ?></td>
              </tr>
              <tr class="Table">
                  <td>Etanch:</td>
                  <td class="column_2_table"><?php
                  if($Products["Etanch"]==1){
                    echo "Yes";
                  }else{
                    echo "No";
                  }
                   ?></td>
              </tr>
              <tr class="Table">
                  <td>Battery power:</td>
                  <td class="column_2_table"><?php echo htmlspecialchars($Products["Battery_power"]); ?></td>
              </tr>
              <tr class="Table">
                  <td>CPU:</td>
                  <td class="column_2_table"><?php echo htmlspecialchars($Products["CPU"]); ?></td>
              </tr>
              
              <tr class="Table">
                  <td>USB:</td>
                  <td class="column_2_table"><?php echo htmlspecialchars($Products["USB"]); ?></td>
              </tr>
              <tr class="Table">
                  <td>Quantity:</td>
                  <td class="column_2_table"><?php echo htmlspecialchars($Products["Quantity"]); ?></td>
              </tr>
              
            
          </table>
        <?php else: ?>
          <h2>Sorry No Product With This Id Exist</h2>
        <?php endif; ?>
      </div>
    </div>
  </div>
  
    <?php include('Footer.php'); ?>
    <script>   <?php include("ThemeChanger.js"); ?>  </script>
  </body>
</html>
