<?php
$qw=$_REQUEST['q'];
echo $qw;
$server="localhost";
$name="id12220651_root";
$dbname="id12220651_projtrial";
$pswd="password";

$con=mysqli_connect($server,$name,$pswd,$dbname);

if(!$con){
    die("Cant connect".mysqli_connect_error());
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
    $ret="<tr><th>Name</th><th>College</h><th>Branch</th><th>Trainer</th><th>Course</th><th>Year</th><th>Amount</th>";
while($stt=mysqli_fetch_assoc($res)){
    // echo $r
//     // echo 123."<br>";
    $ret.="<tr><td>".$stt['names']."</td><td>".$stt['college']."</td><td>".$stt['branch']."</td><td>".$stt['trainer']."</td><td>".$stt['course']."</td><td>".$stt['years']."</td><td>".$stt['amount']." </tr>";
// echo $ret;
}
echo $ret."";

    
}
else 
echo "Unsuccessful".mysqli_error($con);

mysqli_close($con);


?>
