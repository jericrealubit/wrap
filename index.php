<?php

$str = $_REQUEST['string'];
$len = $_REQUEST['length'];

$res = wrap($str, $len);

echo "<pre>";
print_r($res);

function wrap($string, $length) {

  $error = false;

  // input required check
  if (empty($string) || empty($length)) {
    echo "<br>NOTICE: 2 arguments required, string and length";
    $error = true;
  }

  // input type check
  if (!is_string($string)){
    echo "<br>NOTICE: First argument must be of type 'string'";
    $error = true;
  }

  if (!is_string($string)){
    echo "<br>NOTICE: First argument must be of type 'string'";
    $error = true;
  }

  if (!is_numeric($length)) {
    echo "<br>NOTICE: Second argument must be of type 'numeric'";
    $error = true;
  }

  if ($error) die;

  // logic
  echo "<br>string: ".$string;
  echo "<br>length: ".$length;
  echo "<hr>";

  $cnt = 0;
  $result = '';
  foreach (str_split($string) as $chr) {
    $result .= $chr;
    $cnt++;
    if ($cnt == $length) {
        $result .= "<br>"; // \n
        $cnt = 0;
    }
  }

  return $result;

}
