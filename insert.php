<?php

   require "config/db.php";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $restaurant_name = $_POST['restaurant_name'];
    $restaurant_zip = $_POST['restaurant_zip'];

    if (!empty($username) || !empty($email) || !empty($phone) || !empty($restaurant_name) || !empty($restaurant_zip) ) {
         $SELECT = "SELECT email From users Where email = ? Limit 1";
         $INSERT = "INSERT Into users (username, email, phone, restaurant_name, restaurant_zip) values(?, ?, ?, ?, ?)";
         //Prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $stmt->bind_result($email);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssiss", $username, $email, $phone, $restaurant_name, $restaurant_zip);
          $stmt->execute();

          header ("Location: zahvala.html");
          
        } else {


            $mail_message = "S tem emailom se je nekdo že prijavil";
            echo "<script type='text/javascript'>alert('$mail_message');</script>";
        
        }
        $stmt->close();
        $conn->close();
    
} else {
  
 die();
}


?>

