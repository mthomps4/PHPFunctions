<?php
function hello($arr){
  if(is_array($arr)){
      foreach($arr as $name){
        echo "Hello, $name. <br>\n";
      }
  }else{
    echo "Hello, Friend! <br>\n";
  }
}// hello($arr)

$names = [
  'Matt',
  'Mike',
  'Robert'
];

hello($names);

$current_user = 'Matt';

function isMatt(){
  global $current_user;
  if($current_user =='Matt'){
    echo "It's Matt!<br>\n";
  }else{
    echo "Nope, not Matt... <br>\n";
  }
}

isMatt();

?>
