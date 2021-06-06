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
   $a = array(34,67,89,"Welcome","Have good day",56.35);
   foreach($a as $value){
       echo "</br>Value is : ".$value;
       
   }
   // count function
   echo "</br>Total element im array is : ".count($a);
   // array_sum() function for sum of element in array 
   echo"</br>Sum of array element :";
  echo "</br>Sum of array in list is :".array_sum($a);
  //product of element im array
  echo"</br>PRODUCT";
  echo "</br>".array_product($a);
  // print element of array in reverse
  echo"</br>reverse of array";
   $b = array_reverse($a);
   echo"<pre>";
  print_r($b);
  //Use of in_array function
 
  $temp = in_array('Welcome',$a);
  echo"</br>check whether given element is in the array or not 1=>YES";
  echo"</br>".$temp;
  //array_unique functon
  echo"</br>array_unique functon</br>";
  $temp = array(34,67,89,34,89,"Welcome","Have good day",56.35);
  print_r(array_unique($temp));
  //array_merge() function to merge to array
  echo"</br>array_merge() function to merge to array";
  $c = array_merge($a,$temp);
  print_r($c);
 // array_search() function to search element in array
 echo"</br> array_search() function to search element in array";
 $temp1 = array_search("Welcome",$a);
 echo"</br>".$temp1;
 //sort() function for sort elment of an array
  echo"</br>sort() function for sort elment of an array</br>";
  $d = array(16,48,87,78,46,76,94,85);
  sort($d);
  print_r($d);
  //rsort() function for sort elment of an array
  echo"</br>rsort() function for reverse sort elment of an array</br>";
  rsort($d);
  print_r($d);
  //asort() function for sort elment of an array
  echo"</br>asort() function for sort elment of an array based on index no</br>";
  asort($d);
  print_r($d);
  //ksort() function for sort an array according to key value
  $temp3 = array(
      "A" => "Apple",
      "B" => "Banana",
      "C" => "Cat",
      "D" => "Dog", 
    
    );
    echo"</br>ksort() function for sort an array according to key value";
    ksort($temp3);
    print_r($temp3);
    //krsort() function for sort an array according to reverse of key value
    echo"</br>krsort() function for sort an array according to reverse of key value";
    ksort($temp3);
  krsort($temp3);
  print_r($temp3);
  //shuffle() function for randomaly shuffle the order 
  echo"</br>shuffle() function for randomaly shuffle the order </br>";
  shuffle($temp3);
  foreach($temp3 as $v)
{
    echo"</br>$v";
}
//array_key_exists function to check whether given key is awailable or not
echo"</br></br>array_key_exists function to check whether given key is awailable or not";
$temp3 = array(
    "A" => "Apple",
    "B" => "Banana",
    "C" => "Cat",
    "D" => "Dog", 
  
  );
echo "</br>OUTPUT :  ".array_key_exists('D',$temp3);


  ?>
</body>
</html>