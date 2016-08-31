<?php
function hello($name){
  if($name == 'Matt'){
    return "Hello, $name <br>\n";
  }else {
    return "Hello, friend <br>\n";
  }
}

$greeting = hello('Matt');

echo $greeting;


function addUp($a, $b){
  $arr = [
    $a,
    $b,
    $a + $b
  ];
  return $arr;
}

$value = addUp(2,4);
print_r($value);
echo "\n<br>" . $value[2];

function random(){
  return 42;
}
$func = 'random';
$num = $func();
echo "<br> \n" . $num;

$name = "Matt";
$great = function() use($name){
  echo "<br>\n Hi $name!";
};

$great();

?>
