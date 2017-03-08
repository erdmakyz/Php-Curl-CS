<?php
  $var = $_POST['value'];

  echo $var."?<br/><br/>";

  if(strlen($var)>0&strlen($var)<5){
    $data = ['response' => 'Your wish has been granted!'];
  }
  elseif (strlen($var)>5&strlen($var)<10){
    $data = ['response' => 'Calm down!'];
  }
  elseif (strlen($var)>10||strlen($var)==0){
    $data = ['response' => 'This is beyond my existence...'];
  }
  else {
    echo "You can't go further.";
    exit();
  }

  header('Content-type: application/json');
  echo json_encode($data);

?>
