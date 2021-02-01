<?php 

include_once("db.php");

if(isset($_POST["name"])){

    $name=$_POST["name"];
    $phnumber=$_POST["phnumber"];
    $class=$_POST["class"];
    $address=$_POST["address"];
    $country=$_POST["country"];


    $save= "INSERT INTO crul_post (name, phone_number, class, address, country)VALUES ('$name','$phnumber',' $class','$address','$country')";

    if($conn->query($save)===TRUE){

        $last_id = $conn->insert_id;
         //Select The Data Into The Database

      $var = "SELECT * FROM crul_post WHERE id=$last_id";
      $despacito = $conn->query($var);
    
      if ( $despacito->num_rows > 0) {
        // var_dump($despacito);

        $line=$despacito->fetch_array(MYSQLI_ASSOC);

           $arr[]=array(

              'id'=>$line["id"],
              'name'=>$line["name"],
              'phonenumber'=>$line["phone_number"],
              'class'=>$line["class"],
              'address'=>$line["address"],
              'country'=>$line["country"],

           );
          
          
         
        
        $despacito=array('status'=>true, 'msg'=>"Sucess", 'data'=>$arr);

        }

        else { 
          $despacito=array('status'=>false, 'msg'=>"No Record", 'data'=>"");
          

        } 

        

    }
     else{

        $despacito=array('status'=>false, 'msg'=>"Insert Unsucessfully", 'data'=>"");

     }

     $res=json_encode($despacito);

          print_r($res);
    
}

?>