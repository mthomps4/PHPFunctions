<?php
function getInfo($name, $title = Null){
  if($title){
  echo "$name has arrived, they are here with us as a $title.";
  }else{
    echo "$name has arrived.";
  }
}

getInfo('Matt', 'Mentor');

?>
