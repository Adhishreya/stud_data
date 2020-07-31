<?php
error_reporting(0);
$qw=$_REQUEST['q'];
// echo $qw;
$server="localhost";
$name="id12220651_root";
$dbname="id12220651_projtrial";
$pswd="password";
try{
$con=mysqli_connect($server,$name,$pswd,$dbname);
if (mysqli_connect_errno()) {
    die("<center><h1>Sorry!!We are unable to process requests right now: </h1></center" );
}
if(!$con){
    die("Cant connect to database");
}
// $op="course";
$op=$qw;
if($qw==='Year of study'){
    $op="years";
}

$inser="SELECT names,college,branch,trainer,course,years,amount,SUM(amount) as d FROM details GROUP BY {$op},names WITH ROLLUP HAVING names IS NOT null";


$res=mysqli_query($con,$inser);
if(mysqli_num_rows($res)>0){
    // echo "Successfully added";
    // echo mysqli_fetch_assoc($res)['names'];
    $ret="<tr><th>Name</th><th>College</h><th>Branch</th><th>Trainer</th><th>Course</th><th>Year of study</th><th>Amount</th>";
while($stt=mysqli_fetch_assoc($res)){
    // echo $r
//     // echo 123."<br>";
if($stt['years']=="I")
{
    $stt['years']=1;
}
if($stt['years']=="II")
{
    $stt['years']=2;
}
if($stt['years']=="III")
{
    $stt['years']=3;
}
if($stt['years']=="IV")
{
    $stt['years']=4;
}
    $ret.="<tr><td>".$stt['names']."</td><td>".$stt['college']."</td><td>".$stt['branch']."</td><td>".$stt['trainer']."</td><td>".$stt['course']."</td><td>".$stt['years']."</td><td>".$stt['amount']." </tr>";
// echo $ret;
}
echo $ret."";

    
}
else 
echo "<h1>Enter a valid entry</h1>";

mysqli_close($con);

}
catch(Exception $k){
    echo "We are unable to process requests rignt now";
}
?>
