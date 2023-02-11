<?php
require("db_connection.php");
try {
    $queryGetAllAccounts = "SELECT * FROM student_tbl";
    $result = mysqli_query($connect, $queryGetAllAccounts);
   
} catch (\Throwable $th) {
    echo $th;
}
?>