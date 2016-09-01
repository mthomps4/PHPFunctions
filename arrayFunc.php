<?php
$names = [
  'Mike'=> 'Teacher',
  'Chris' => 'Prof',
  'Alan' => 'Designer'
];
//array_keys()
var_dump(array_keys($names));//returns keys as value string

foreach (array_keys($names) as $name){
  echo "<br> Hello, $name";
}

//array-walk()
function printInfo($value, $key){
  echo "<br> $key is a $value.";
}
array_walk($names, 'printInfo');


?>
