<?php session_start();
require("db_connection.php");

if(isset($_POST['email'])&&$_POST['password']){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['error']= array();
    try {
        $res = mysqli_query($connect, "SELECT*FROM users WHERE EMAIL='$email' AND PASSWORD='$password';");
        $row = mysqli_fetch_assoc($res);
        if(!empty($row)){
            $_SESSION['email'] = $row['EMAIL'];
            $_SESSION['full_name'] = $row['FULL_NAME'];
            header("location: ../index.php");
        }
        else{
            $_SESSION['error'][] = "Wrong Username or Password";
            echo '<script language = "javascript">';
            echo 'alert("Wrong username or password")';
            echo '</script>';
            //header('location: ../index.php');
            
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}

?>
