<?php 
 echo "<center>"."Dariela Ursulo"."</center>"."<br/>";
 echo "<center>"."ACT-2"."</center>"."<br/>";

//constant 
define ('Message','Constant');
echo "<br/>";
echo Message;
echo "<br/>";
define('integer',9);
echo integer;
echo "<br/>";


//array
$array1 =['white','bwk','orange'];
$array2 =array('white','bwk','orange');
echo $array1[1];
echo "<br/>";
echo $array2[2];

$num1= 100;
$num2 = 100;
echo "<center>"."First number: $num1"."</center>"."<br>";
echo "<center>"."Second number: $num2"."</center>"."<br>";

 // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   
 echo("<br>");
//Function 
function showmessage ($message){
	return "Name: $message";
}
echo showmessage("Dariela Ursulo");

echo "<br/>";
$g = 27;

if ($g >=1 && $g <=10)
echo "y";
elseif ($g >=11 && $g <= 20)
echo ("n");
else 
{
	echo "false";
}
echo "<br/>";
//switch 

switch ($g){
	case 1: 
	echo"n"; break;
	case 27: 
	echo"x"; break;
	case 28: 
	echo"i"; break;
	default: 
	echo "wrong input";
	}
	