<?php 
  include('db_connect.php');
  /* if(isset($_GET['Succ'])){
    echo "<script>alert('Data inserted succesfully !!!')</script>";
  }else{
    echo "<script>alert('Data wasn't inserted succesfully !!!')</script>";
  } */
  /* for($i=0;i< strlen($Products);$i++ ){

  } */
  $id = 3/* rand(1,3) */;
  $sql = "SELECT Id_Product,Marque,Price,Photo  FROM newproduct /* WHERE Id_Product=$id */";
  $result = mysqli_query($conn,$sql);
  $Products = mysqli_fetch_all($result);
  mysqli_free_result($result);
  mysqli_close($conn);
  /* print_r($Products); */
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style><?php include('home.css') ?></style>
    <title>Home</title>
  </head>
  <body>
    <?php include('Header.php');?>
    <?php include('ThemeChanger.php');?>
    
    <h3 class="CategoriePlace" >Chose By Categorie:</h3>
    <div class="Chercher"  >
      
      <div class="firstInput">
      <label for="Phone">Chose Price :</label>
      <input list="Phone" name="Phone" id="first" placeholder="Price" />
      <datalist id="Phone">
        <option value="200"> </option><option value="400"> </option>
        <option value="600"></option><option value="800"> </option>
      </datalist>
      </div>

      <div class="secondeInput">
        <label for="Model">Chose Model :</label>
      <input list="Model" name="Model" id="second" placeholder="Model" />
      <datalist id="Model">
        <option value="Iphone"> </option><option value="Samsung"> </option>
        <option value="Huawie"> </option><option value="TEL"> </option>
      </datalist>
      </div>

      <div class="thirdInput">
        <label for="disponibilite">Chose disponibilite:</label>
      <input list="disponibilite" name="disponibilite" id="third" placeholder="disponibilite" />
      <datalist id="disponibilite">
        <option value="Yes"> </option><option value="No"> </option>
      </datalist>
      </div>

  </div>
    <div class="Container" id="bodye">
      
      <?php foreach($Products as $product){
      ?>
      
      <div class="Container10">
        <img
          src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product[3]); ?>"
          alt="this"
          class="ImgProduct"
        />
        
        <p> <?php echo htmlspecialchars($product[1]) ?>  </p>
        <p><?php echo htmlspecialchars($product[2]) ?> $</p>
        <div class="LinkForMoreInfo">
          <a class="button_more" href="Detail Du Produit.php?id=<?php echo $product[0] ?>" >
          <p id="Links">More</p>
          <img class="img_href" src="Icons/angles-right-solid.svg" alt=""></a> 
        </div>
        
        
      </div>
       
      <?php } ?>
      <!-- 
        <div class="Container10">
        <img
          src="DK.PNG"
          alt="this"
          class="bou"
        />
        <p>  </p>
      </div>-->

      </div>
      
      <?php include('Footer.php'); ?>
    <!-- //////////////////////////////////////////////////////////////////////// -->
    <!-- Lower Section -->
    <script>   <?php include("home.js"); ?>  </script>
    <script>   <?php include("ThemeChanger.js"); ?>  </script>
  </body>
</html>
