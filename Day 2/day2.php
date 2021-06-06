<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table border='1'>";
for($i=0;$i<10;$i++)
{   

    
    echo "<tr>";
    if($i%2==0){
        echo "<td bgcolor='yellow'>$i</td>";
    }else{
echo "<td bgcolor='red'>$i</td>";
    }
echo "</tr>";
}
echo "</table>";

?>
</body>
</html>