

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Pastelco by FCT</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_new";
    $connection =  mysqli_connect($host,$username,$password,$dbname);
   
    if($_POST){
       
         $a = $_POST['txt1'];
          $b = $_POST['txt2'];
         

        $q = mysqli_query($connection,"insert into tbl_clint(clint_name,clint_pass) value('{$a}','{$b}')") 
        or die("Eroor".mysqli_error($connection));
    if($q){
        echo"<script>alert('Record Added in Database')</script>";
    }
    }
    ?>
    <div id="header">
        <div id="logo">
            <h1><a href="#">nmr ltd</a></h1>
            <h2><span>Managed by NMR LTD.</span></h2>
        </div>
        <div id="menu">
            <ul>
                <li class="active"><a href="index.html" title="">Homepage</a></li>
                <li><a href="about.php" title="">About Us</a></li>

                <li><a href="contact.php" title="">Contact detail</a></li>
                <li><a href="pass.php" title="">Register</a></li>

            </ul>
        </div>
    </div>
    <div id="content">
        <div id="sidebar">
            <div id="support">
                <h2>Custemer care NO.</h2>
                <h3>6354879658</h3>
            </div>
            <div id="login" class="boxed">
                <h2 class="title">Client Account</h2>
                <div class="content">
                    <form id="form1" method="post" action="#">
                        <fieldset>
                            <legend>Sign-In</legend>
                           
                            <label for="inputtext2">Clint Name</label>
                            <input id="inputtext2" type="text" name="txt1" value="" required/>
                            <label for="inputtext2">Password:</label>
                            <input id="inputtext2" type="password" name="txt2" value="" required/>
                            <input type="submit" value="Sign In" />
                            
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
        <div id="main">
            <div id="welcome" class="post">
                <p><img src="111.jpg" alt="" width="472" height="232" class="portrait" /></p>
                <h2 class="title">Welcome to NMR LTD.</h2>
                <h3 class="date"><span class="month">Mar.</span> <span class="day">8</span><span class="year">, 2007</span></h3>
                <div class="meta">
                    <p>Posted by Jane Anderson under <a href="#">Uncategorized</a>, <a href="#">Daily Journal</a><br />
                        <a href="#">Trackback URI</a> | <a href="#">No Comments</a> | <a href="#">Permalink</a></p>
                </div>

            </div>

        </div>
    </div>
    <div id="footer">
        <p id="legal">Copyright &copy; 2020 NMR LTD. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
        <p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
    </div>
  
</body>
</html>