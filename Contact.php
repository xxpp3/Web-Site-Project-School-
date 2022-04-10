<?php     
    include("db_connect.php");

    if(isset($_POST["submit"])){

        $FirstName = $_POST["first_name"];
        $LastName = $_POST["last_name"];
        $Email = $_POST["email"];
        $Phone = $_POST["phone"];
        $Message = $_POST["message"];

        $sql = "INSERT INTO client VALUES('','$FirstName','$LastName','$Email','$Phone','$Message')";
        mysqli_query($conn,$sql);
        header("location: Home.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include('Contact.css') ?></style>
    <title>Contact us</title>
    
</head>
<body>
    <?php include('Header.php'); ?>
    <?php include('ThemeChanger.php');?>
    <div class="Body" id="Theme1" >
        <div class="Container"  >
            <div class="Container1" id="Theme2">
                <div class="Intro">
                    <h1>Contact Us!</h1>
                    <p>juste fill the form and we will contact you in no time</p>
                </div>
                
                <div class="Box">
                <img src="Icons/envelope-solid.svg" /> <p class="Info" >e-mail@email.com</p>
                </div>

                <div class="Box">
                <img src="Icons/phone-solid.svg" /> <p class="Info" >+758 848 841</p>
                </div>

                <div class="Box">
                <img src="Icons/location-dot-solid.svg" /> <p class="Info" >Universite badji mokhtar ?</p>
                </div>
                <div class="Media">
                    <img src="Icons/facebook-brands.svg" />
                    <img src="Icons/instagram-brands.svg" />
                    <img src="Icons/twitter-brands.svg" />
                </div>
                

            </div>
            <div class="Container2" id="Theme3">
                <form method="POST" action="Contact.php" class="FellingForm" enctype="multipart/form-data">
                    <div class="FullName">
                        <div class="First">
                            <label>First name :</label>
                            <input type="text" name="first_name" placeholder="First Name" />
                        </div>
                        <div class="last">
                            <label>Last name :</label>` 
                            <input type="text" name="last_name" placeholder="Last Name" />
                        </div>
                    </div>
                    
                    <label>E-mail:</label>
                    <input type="text" name="email" placeholder="Your Email" />
                    <label>Phone :</label>
                    <input type="text" name="phone" placeholder="Your Phone Number" />
                    <label>Message :</label>
                    <textarea class="TextArea" name="message" placeholder="A Message You Would Give to us"></textarea>
                    <div class="button_direction">
                        <button type="submit" class="submit_button" name="submit">Send message</button>
                    </div>
                    
                </div>
            </form>
        </div>
        <br>
        <p class="Rights"><?php echo "Copyright &copy ".date("Y") . " Phone Store, all right reserved" ?></p>
        
    </div>
    <script>   <?php include("ThemeChanger.js"); ?>  </script>
</body>
</html>