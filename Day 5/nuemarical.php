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
  $a[0] = 34;
  $a[1] = 89;
  $a[2] = "Hello";
  $a[3] = "How Are You";
  $a[4] = 21.90;
  //To print only one element 
  echo $a[1];
  //To print whole element of an array
  for($i=0;$i<count($a);$i++){
  echo "<br/>".$a[$i];
}
echo"<pre>";
print_r($a);
//Method 2
  $a[] = 34;
  $a[] = 89;
  $a[] = "Hello";
  $a[] = 21.90;
   //To print only one element 
   echo $a[1];
   //To print whole element of an array
   for($i=0;$i<count($a);$i++){
   echo "<br/>".$a[$i];
 }
 //Method 3
 // Very importanrt method....
  $a = array(23,45,67,"Have a good day","Veyy very good morning",34);
 //Toprint only one element
 echo "</br>".$a[5];
 for($i=0;$i<count($a);$i++){
  echo "<br/>".$a[$i];
}
  // Inbuilt fumction for DiBugg
  echo "<pre>";
print_r($a);
  ?> </body>
</html>