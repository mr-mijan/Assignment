<?php

$str_1 = "Hello";
$vowels = array("a", "e", "i", "o", "u", "A", "U", "I", "O", "U");
$count = 0;
for ($i = 0; $i < strlen($str_1); $i++) {
  if (in_array(strtolower($str_1[$i]), $vowels)) {
    $count++;
  }
}
echo "Number of vowels in $str_1 is: $count";
echo "\n";


$str_2 = "World";
$vowels = array("a", "e", "i", "o", "u");
$count = 0;
for ($i = 0; $i < strlen($str_2); $i++) {
  if (in_array(strtolower($str_2[$i]), $vowels)) {
    $count++;
  }
}
echo "Number of vowels in $str_2 is: $count";
echo "\n";

$str_3 = "PHP";
$vowels = array("a", "e", "i", "o", "u");
$count = 0;
for ($i = 0; $i < strlen($str_3); $i++) {
  if (in_array(strtolower($str_3[$i]), $vowels)) {
    $count++;
  }
}
echo "Number of vowels in $str_3 is: $count";
echo "\n";

$str_4 = "Programming";
$vowels = array("a", "e", "i", "o", "u");
$count = 0;
for ($i = 0; $i < strlen($str_4); $i++) {
  if (in_array(strtolower($str_4[$i]), $vowels)) {
    $count++;
  }
}
echo "Number of vowels in $str_4 is: $count";
echo "\n";


echo strrev("Hello", );
echo "\n";
echo strrev("World", );
echo "\n";
echo strrev("PHP", );
echo "\n";
echo strrev("Programming", );
echo "\n";