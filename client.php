<?php

//$dbconnection = mysqli_connect("localhost","root","","db");

//if(mysqli_connect_errno()){
//  echo "YOU CANNOT PASS!!!";
//  exit();
//}

if (isset($_POST['value'])){
  $value = $_POST['value'];
  $post = 'value='.$value;

  $url = "localhost/server.php";
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  echo $response;
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
</head>

<body>

<form name="form" method="post" action="client.php">
  <p><input type="text" name="value" id="value"></p>
  <p><input type="submit" name="submit" id="submit" value="Make A Wish!"></p>
</form>

</body>

</html>
