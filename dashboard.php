<html>
<?php
   session_start();
   if (!isset($_SESSION["username"]))
   {
       header("Location: index.php");
       
   }
   ?>
    <body>
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php"><button>log out</button></a>
    </body>
</html>