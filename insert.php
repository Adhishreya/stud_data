<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    span{
        display:block;
    }
    .earth{
            width: 5vw;
            display:inline-block;
            position: relative;
            height: 10vh;
            top: 50px;
            left: 20px;
            
            animation-duration: 9s;
            animation-iteration-count: infinite;
            background: darkgrey;
            /* background:linear-gradient(45deg,green 25%,blue 75%); */
            border-radius: 50%;
        }
        .earth:nth-child(even){
            animation-name: revolve;
        }
        .earth:nth-child(odd){
            animation-name: rot;
        }
        @keyframes rot {
            0%{
    background: transparent;}
    20%
    {
        background: gray;

    }
    40%
    {
        background: transparent;

    }

    60%
    {
        background: gray;

    }

    80%
    {
        background:transparent;

    }



    50%
    {background:gray;
       

    }


    100%{
        background: transparent
    }}
@keyframes revolve {

0%{
    background: gray;}
    20%
    {
        background: transparent;

    }
    40%
    {
        background: gray;

    }

    60%
    {
        background: transparent;

    }

    80%
    {
        background:gray;

    }



    50%
    {background: transparent;
       

    }


    100%{
        background: gray
    }
    
}






    
    h1{
        /*background:red;*/
        left:5vw;
        position:relative;
        box-shadow: 2px 3px dimgray;
    }

    </style>
    
    
    
    
    <script type="text/javascript">
    function abc(){
var i=10;
var clr=setInterval(inter,1000);


function inter(){

    document.getElementById("one").innerHTML=i;
    i=i-1;
    if(i<0){
        clearInterval(clr);

        window.location.href = 'index.html';
    }
}
return;
    
}

 
    </script>
</head>

<body>


<!--<center><h1>Successfully Added</h1></center>-->
<?php
$servername = "localhost";
$username = "id12220651_root";
$password = "password";
$dbname = "id12220651_projtrial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST"){


    $query=$conn->prepare("INSERT IGNORE INTO details(names,course,college,amount,trainer,branch,phone,years) VALUES(?,?,?,?,?,?,?,?)");
    if(false===$query)
    {
        die("unsuccessful".htmlspecialchars($conn->error));
    }
    $query->bind_param("ssssssss",$n,$cr,$cl,$a,$t,$b,$p,$y);
    // echo $query;
    // $b,$p,$y,$a,$t);  ,board,phone,years
    if(false===$query)
    {
        die("unsuccessful".htmlspecialchars($query->error));
    }
    $n=$_POST['name'];
    $cr=$_POST['course'];
    $cl=$_POST['college'];
    $b=$_POST['branch'];
    $y=$_POST['year'];
    $p=$_POST['phone'];
    $a=$_POST['amount'];
    $t=$_POST['trainer'];
    // echo $conn->error_list;
    $query->execute();
    if(false===$query)
    {
        die("unsuccessful".htmlspecialchars($query->error));
    }
    else{
        echo "<h1>Successfully added</h1><br>";
            echo "<center><div style='display:inline'>Redirecting in....<span id='one'></span></div><center>
    <div class='earth'></div>
        <div class='earth'></div>
        <div class='earth'></div>
        <div class='earth'></div>";
        
        echo  "<script> abc() </script>";
        
        
        
        
        
    }
    // echo $y;
}




$query->close();
$conn->close();
// echo "successful";
// header('Location:register.html');
?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
