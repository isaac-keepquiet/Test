<?php

// declare(strict_types=1); // strict requirement

echo "<h1>hello!</h1>";
echo "<br>";

$a = 11.33;
$b = 113;
var_dump($a);
var_dump(is_int($a));
echo "<br>";

var_dump($b);
var_dump(is_int($b));
echo "<br>";

echo ($a <=> $b);
echo "<br>";

echo ++$a;
echo "<br>";

echo $b++;
echo "<br>";
echo $b;
echo "<br>";

echo(pi());
echo "<br>";

define("cars", [
    "Alfa",
    "BMW",
    "Toyota"
]);
echo cars[1];
echo "<br>";

$t = date("H");
if($t > "11"){
    echo "Have a good day!";
}
else{
    echo "Good afternoon";
}
echo "<br>";

echo $a;
echo "<br>";
echo $b;
echo "<br>";
function addition() {
  $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];

}
 
addition();
echo $c;
echo "<br>";


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
// 搞问清楚63-73行这些有什么用？

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $val) {
    echo "$x = $val<br>";
}
echo "<br>";
// "=>"的含义？















// declare(strict_types=1); // strict requirement

// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days"); 
// since strict is enabled and "5 days" is not an integer, an error will be thrown

?>