<?php
include_once('db.php');

session_start(); 

    $username=$_POST["name"];
    $useremail=$_POST["email"];
    $userphonenumber=$_POST["phnumber"];
    $userclass=$_POST["class"];
    $useraddress=$_POST["address"];
    $usercountry=$_POST["country"];

    //Insert The Data Into The Database
   $datas= "INSERT INTO crul_function (name, email, phnumber, class, address, country)VALUES ('$username','$useremail','$userphonenumber',' $userclass','$useraddress','$usercountry')";
      $_SESSION['success']="New Student Has Been Created";
      $_SESSION['success']="sucess";


    if ($conn->query($datas) === TRUE) {
        // mysqli_close($conn);
        // header('Location:http://localhost/learn/curl-function/curlfunction.php'); //If book.php is your main page where you list your all records

      } else {
        echo "Error: " . $datas . "<br>" . $conn->error;
      }

   
  
?>
