<?php
    session_start();
?>
<?php
    require "header.php"
?>
    <div class="register-photo" style="background-image: url(&quot;assets/register.jpeg&quot;);background-size: cover;height: 900px;">
        <div class="form-container" style="margin-top: 90px;">
            <div class="image-holder" style="background-image: url(&quot;assets/img-2.jpeg&quot;);"></div>
            <form action="register_submit.php" method="POST" style="background-color: #f7f7f7;">
                <h1 class="text-center" style="font-family: Gugi, cursive;">ATN Toys Kingdom</h1>
                <div class="text-center"><img src="./assets/logo.png" style="width: 35px"/></div>
                <p class="text-center" style="font-size: 20px;font-family: Gugi, cursive;">Create an Account</p>
                <p class="text-center">
                <?php
                if(isset($_SESSION['notice'])){
                    echo $_SESSION['notice'];
                    session_unset();
                }
                ?>
                </p>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Account name" ></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="repassword" placeholder="Password (confirm)"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox"><a href="EULA.php">I agree to the license terms.</a></label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" name="submit" type="submit" style="background-color: rgb(57,57,57);">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
    <?php
        require "footer.php"
    ?>
</body>

</html>