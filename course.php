<?php
$c[]="Virtual and Augmented Reality";
$c[]="Image processing";
$c[]="Digital Marketing";
$c[]="Data Science";
$c[]="Internet of Things";
$c[]="Machine Learning";
$c[]="Cyber Security";
$c[]="Full Stack Web Development";
$c[]="Artificial Intelligence & Machine Learning";
$c[]="Android Application Development";
$c[]="Electric Vehicle Technology";
$c[]="Automotive Designing and 3D Printing";
$c[]="Python Programming";
// $c[]="";


$arr=array();
$q = $_REQUEST["q"];
$hint = "";
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($c as $name) {
      // $name=strtolower($name);
    if (stristr($q, substr(strtolower($name), 0, $len))) {
        // echo 
      if ($hint === "") {
        $hint = $name;
        array_push($arr,$hint);
      } else {
        $hint .= ", $name";
        array_push($arr,$name);
      }
    }
  }
}
$jsn=json_encode($arr);
echo $hint === "" ? "no suggestion" : $jsn;

?>
