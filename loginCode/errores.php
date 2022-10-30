<?php  
if (count($errors) > 0){
  echo "<div class='error'>";
  foreach ($errors as $error){
    echo "<p>$error</p>";
  }
  echo "</div>";
}

function writeMessage($a, $b=100) {
    echo "You are really a nice person";
    return "You are really a nice person, Have a nice time!";
}

 ?>