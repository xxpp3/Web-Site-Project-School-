<?php 
  include('db_connect.php');
  if(isset($_POST["submit"])){
      if(isset($_POST["FaceId"])){
        $FaceId  = 1 ;
      }else{
        $FaceId  = 0;
      }
      if(isset($_POST["Etanch"])){
        $Etanch = 1 ;
      }else{
        $Etanch = 0;
      }
      if(isset($_POST["Double_puce"])){
        $Double_puce = 1 ;
      }else{
        $Double_puce = 0;
      }
      if(isset($_POST["FINGERPRINT"])){
        $FINGERPRINT = 1 ;
      }else{
        $FINGERPRINT = 0;
      }
    $Marque = $_POST["Marque"];
    $Model = $_POST["Model"];
    $Memoir = $_POST["Memoir"];
    $Os = $_POST["Os"];
    $Camera_avant = $_POST["Camera_avant"];
    $Dimension = $_POST["Dimension"];
    $RAM = $_POST["RAM"];
    $Battery_power = $_POST["Battery_power"];
    $CPU = $_POST["CPU"];
    $Camera_arrier = $_POST["Camera_arrier"];
    $USB = $_POST["USB"];
    $Quantity = $_POST["Quantity"];
    $Price = $_POST["Price"];
    $image = $_FILES["Photo"]["tmp_name"];
    $Photo = addslashes(file_get_contents($image));
    
    $sql = "INSERT INTO newproduct VALUES('','$Marque','$Model','$Memoir','$Os','$Camera_avant','$Dimension','$RAM','$FINGERPRINT','$Double_puce','$FaceId','$Battery_power','$CPU','$Etanch','$Camera_arrier','$USB','$Quantity','$Price','$Photo')";
    mysqli_query($conn,$sql);
    header("location: Home.php");
  }
  ?>
        
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Products</title>
    
    <style><?php include('New Products.css') ?></style>
  </head>
  <body id="Theme1">
   
  <?php include('Header.php');?>
  <?php include('ThemeChanger.php');?>
    <!-- Uper Section -->
    <!-- //////////////////////////////////////////////////////////////////////// -->
    <div class="NewProductContainer">
      <form method="POST" action="New Products.php" enctype="multipart/form-data" id="Theme2" >  
        <div class="NewProdInput" id="Theme3">

                <div class="Input">
                    <label>Marque:</label>
                    <input type="text" name="Marque" placeholder="Marque" />
                </div>

                <div class="Input">
                    <label>Model:</label>
                    <input type="text" name="Model" placeholder="Model" />
                </div>
                
                <div class="Input">
                    <label>Price:</label>
                    <input type="text" name="Price" placeholder="Price" />
                </div>
                
                <br />

                <div class="Input">
                    <label>Os:</label>
                    <input type="text" name="Os" placeholder="Os" />
                </div>

                <div class="Input">
                    <label>Stockage:</label>
                    <input type="text" name="Memoir" placeholder="Memoir" />
                </div>

                <div class="Input">
                    <label>RAM:</label>
                    <input type="text" name="RAM" placeholder="RAM" />
                </div>

                <div class="Input">
                    <label>Camera_avant:</label>
                    <input type="text" name="Camera_avant" placeholder="Camera_avant" />
                </div>

                <div class="Input">
                    <label>Camera_arrier:</label>
                    <input type="text" name="Camera_arrier" placeholder="Camera arrier" />
                </div>

                <div class="Input">
                    <label>Dimension:</label>
                    <input type="text" name="Dimension" placeholder="Dimension" />
                </div>


                <div class="Input">
                    <label>Battery_power:</label>
                    <input type="text" name="Battery_power" placeholder="Battery_power" />
                </div>

                <div class="Input">
                    <label>CPU:</label>
                    <input type="text" name="CPU" placeholder="CPU" />
                </div>

                <div class="Input">
                    <label>USB:</label>
                    <input type="text" name="USB" placeholder="USB" />
                </div>

                <div class="Input">
                    <label>Quantity:</label>
                    <input type="text" name="Quantity" placeholder="Quantity" />
                </div>
              <div class="TrueFalse">
                <div class="Input">
                      <label>FINGERPRINT:</label>
                      <input type="checkbox" name="FINGERPRINT" placeholder="FINGERPRINT" />
                  </div>

                  <div class="Input">
                      <label>Double_puce:</label>
                      <input type="checkbox" name="Double_puce" placeholder="Double puce" />
                  </div>

                  <div class="Input">
                      <label>FaceId:</label>
                      <input type="checkbox" name="FaceId" placeholder="FaceId" />
                  </div>
                  
                  <div class="Input">
                      <label>Etanch:</label>
                      <input type="checkbox" name="Etanch" placeholder="Etanch" />
                  </div>
              </div>
                
                <div class="InputPhoto">
                    <label for="Photo" class="LabelPhoto"><img class="SvgPhotoInput" src="Icons/folder-plus-solid.svg" />Chose A Photo</label>
                    <input type="file" name="Photo" id="Photo" accept="image/*" />
                </div>
        </div>
        <button type="submit" name="submit" class="submit_button" > 
          <img src="Icons/ks.svg" class="submit_Icon" /> 
          <p class="submit_label" >Add Item To Sell</p>
        </button>
      </form>
    </div>

    <!-- //////////////////////////////////////////////////////////////////////// -->
    <!-- Lower Section -->
    <?php include('Footer.php'); ?>
    <script>   <?php include("ThemeChanger.js"); ?>  </script>
  </body>

</html>
