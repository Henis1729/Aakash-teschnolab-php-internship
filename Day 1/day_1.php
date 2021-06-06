<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> REGISTATION FORM </h1>
    <div id="login" class="boxed">
        <h2 class="title">Registration detail</h2>
        <div class="content">
            <form id="form1" method="post" action="#">
                <fieldset>


                    <label for="inputtext1">FIRS NAME :  </label>
                    <input id="inputtext1" type="text" name="txt1" value="" required /></br>
                    <label for="inputtext2">LAST NAME :  </label>
                    <input id="inputtext2" type="text" name="txt2" value="" required/></br>
                    <label for="inputtext3">CONTACT NO. :</label>
                    <input id="inputtext3" type="number" name="txt3" value="" required /></br>
                    <label for="inputtext4">COLLEGE NAME :</label>
                    <input id="inputtext4" type="text" name="txt4" value="" required/></br>
                    <label for="inputtext5">EMAIL ID :</label>
                    <input id="inputtext5" type="email" name="txt5" value="" required /></br>
                    </br> <input id="submit" type="submit" />
                    </br>
                  
                </fieldset>
            </form>
        </div>
    </div>

    <?php 
    $a = $_POST['txt1'];
    $b = $_POST['txt2'];
    $c = $_POST['txt3'];
    $d = $_POST['txt4'];
    $e = $_POST['txt5'];
 echo"<table border = '1'>";
 echo"<tr>";
    echo "<td>FIRSTNAME : $a</td>" ;
    echo"</tr>";
    echo"<tr>";
    echo"<td> LASTNAME : $b</td>" ;
    echo"<tr>";
    echo"</tr>";
    echo"<td>MOBILE NO. :  $c</td>" ;
    echo"</tr>";
    echo"<tr>";
    echo"<td> COLLEGE NAME IS : $d</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>EMAIL ID is : $e </td>";
    
    echo"</tr>";  
    echo"</table>";
      ?>

</body>
</html>