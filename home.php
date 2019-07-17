<?php

session_start();
?>
<html>
<head>
<title>Home page</title>
</head>
<body background color=red>


     <h1>   welcome  
 <?php
   echo $_SESSION['username'];
?>

    </h1>

</body>
</html>