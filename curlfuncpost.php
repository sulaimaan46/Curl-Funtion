<?php 

$form_data=array(

    'name'=>""
);

// print_r($form_data);

$req=http_build_query($form_data);

$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, "http://localhost/learn/curl-function/curlfuncpostphp.php"); 
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$req);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($ch);

curl_close($ch);

$res=json_encode($result);




?>

<html>
<head>
<title>Curl Post</title>
</head>
<body>
<form action="curlfuncpostphp.php" method="post" >
Name:<input type="text" name="name" id="name"><br><br>
Phone Number:<input type="text" name="phnumber" id="phnumber"><br><br>
Class:<input type="text" name="class" id="class"><br><br>
Address:<input type="text" name="address" id="address"><br><br>
Country:<input type="text" name="country" id="country"><br><br>

<input type="submit" name="submit" value="Save">

</form>
</body>
</html>
