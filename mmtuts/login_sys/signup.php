<?php

require "header.php";
?>

<main>
   <h1>Signup</h1>
   <?php
      if(isset($_GET['error'])){
         if($_GET['error'] == "emptyfields"){
               echo '<p>FIll in all fields</p>';
         }else if($_GET['error'] == "invalidmailuid"){
               echo '<p>Wrog user and email</p>'; 
         }else if($_GET['error'] == "invalidmail"){
            echo '<p>Wrog email</p>'; 
            }else if($_GET['error'] == "invaliduid"){
               echo '<p>Wrog userName</p>'; 
               }else if($_GET['error'] == "passwordcheck"){
                  echo '<p>Your password do not match</p>'; 
            }else if($_GET['error'] == "usertaken"){
               echo '<p>User is already taken!</p>'; 
         }
      }elseif($_GET['signup']=="success"){
         echo '<p>Sign up Success</p>';
      }
   ?>
   <form action="includes/signup_inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="repeat password">
        <button type="submit" name="signup-submit">Signup</button>
   </form>
</main>

<?php

require "footer.php";

?>