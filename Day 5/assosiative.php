<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  //Method 1
   $a[0] = 55;
   $a[1] = 79;
   $a['a'] = "Apple";
   $a['b'] = "Banana";
   $a['h'] = "Hello";
   $a['har'] = "How Are You";
   $a[4] = 21.90;
   //To print only one element 
     echo"Method 1 :</br>";
   echo "a for ".$a['a'];
   foreach($a as $value)
{
   echo "</br>values are ".$value;
}   
echo"<pre>";
print_r($a);
//MEthod 2
//Usefull method
$a = array(
   0 => 55,
   1 => 79,
    "a" => "Apple",
    'b' => "Banana",
    4 => 45.56
);
echo"</br></br>Method 2 :";  
echo "</br>a for ".$a['a'];
   foreach($a as $value)
{
    
    
   echo "</br>values are ".$value;
   
}   
echo"<pre>";
print_r($a);
?>
</body>
</html>