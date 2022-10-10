
<?php

// Answer 6 

for($i=0,$i<5,$i++){
    echo("$i");
}

for($i=5,$i>0,$i--){
    echo("$i");
}

while($i=0){
    $i>0;
    echo("Hi");
    $i++
}

do($i=0){
    echo("Hello");
}while{
    $i<5;
    echo("Hi");
    $i++; 
}

// Answer 7

$a = 10
$b = 5 

switch($a){
    case addition:
        echo($a - $b);
        break;
    case multiplication:
        echo($a * $b);
        break; 
    default:
        echo(" you can only write addition, subtraction and multiplication");
        break;
}

///////////////////////////////// or Answer 6 /////////////////////////////

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer 6</title>
</head>
<body>
    <form action="" method="POST">
    
       <input type ="text" name="calculator" >
       <button type ="submit" name="btnsubmit">

    </form>
</body>
</html>

if(isset("btnsubmit")){
    
    if($_POST["calculator"] = "Addition"){

    echo ("Value of the a is 5 and value of the b is 10 so addition of this two numbers is 15");

}
}

//line number 47 to 63 is html code so it's write in outer side the php script parts 

?>


