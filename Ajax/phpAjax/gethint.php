<?php
// Array with names
$name[] = "Anna";
$name[] = "Brittany";
$name[] = "Cinderella";
$name[] = "Diana";
$name[] = "Eva";
$name[] = "Fiona";
$name[] = "Gunda";
$name[] = "Hege";
$name[] = "Inga";
$name[] = "Johanna";
$name[] = "Kitty";
$name[] = "Linda";
$name[] = "Nina";
$name[] = "Ophelia";
$name[] = "Petunia";
$name[] = "Amanda";
$name[] = "Raquel";
$name[] = "Cindy";
$name[] = "Doris";
$name[] = "Eve";
$name[] = "Evita";
$name[] = "Sunniva";
$name[] = "Tove";
$name[] = "Unni";
$name[] = "Violet";
$name[] = "Liza";
$name[] = "Elizabeth";
$name[] = "Ellen";
$name[] = "Wenche";
$name[] = "Vicky";

// get the q parameter from URL
$show = $_REQUEST["show"];

$hint = "";

// lookup all hints from array if $show is different from ""
if ($show !== "") {
  $show = strtolower($show);
  $len=strlen($show);
  foreach($name as $name) {
    if (stristr($show, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>