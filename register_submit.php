<?php
    session_start();
    include 'admin/connectDB.php'; 
    $conn = connectDB();
    if( isset( $_POST['submit'] ) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '' ) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $level = 0;
        if( $password != $repassword ){  
            header("location:register.php");
            $_SESSION['notice'] = 'Password does not match!';
            die();
        }
        $sql = "SELECT * FROM user WHERE username='$username' ";
        $old = mysqli_query($conn, $sql);
        $password = md5($password);
        if( mysqli_num_rows($old) > 0 ) {
            header("location:register.php");
            $_SESSION['notice'] = 'Username has been existed!';
            die();
        }
        $sql = "INSERT INTO user (username,password,level) VALUES ('$username','$password','$level') ";
        mysqli_query($conn,$sql);
        header("location:login.php");
        $_SESSION['notice'] = 'Sign up Successfully!';
    }else{
        header("location:register.php");
        $_SESSION['notice'] = 'Please fill all information!';
        die();
    }
?>