<?php
//redirect if not logged in
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

    //database connection
    require_once(__DIR__.'/db_connection.php');




?>




</body>
</html>

