<?php
    session_start();
    include 'admin/connectDB.php';
    $conn = connectDB();
    if( isset( $_POST['submit'] ) && $_POST["username"] != '' && $_POST["password"] != '' ) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' AND level='0' ";
        $user = mysqli_query($conn, $sql);
        if(mysqli_num_rows($user) > 0){
            $_SESSION['user'] = $username;
            header("location:index.php");
        }else{
            header("location:login.php");
            $_SESSION['notice'] = 'Wrong username or password';
            die();
        }
    }else{
        header("location:login.php");
        $_SESSION['notice'] = 'Please fill all information!';
        die();
    }
?>