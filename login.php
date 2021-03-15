<?php
    session_start();
?>
<?php
    require "header.php"
?>
    <div class="register-photo" style="background-image: url(&quot;assets/images/login.jpeg&quot;);background-size: cover;height: 900px;">
        <div class="form-container" style="margin-top: 120px;">
            <div class="image-holder" style="background-image: url(&quot;assets/images/img-1.jpeg&quot;);"></div>
            <form action="login_submit.php" method="POST" style="background-color: #f7f7f7;">
                <h1 class="text-center" style="font-family: Gugi, cursive;">ATN Toys Kingdom</h1>
                <div class="text-center"><img src="./assets/images/logo.png" style="width: 35px"/></div>
                <p class="text-center" style="font-size: 20px;font-family: Gugi, cursive;">Login</p>
                <p class="text-center">
                <?php
                if(isset($_SESSION['notice'])){
                    echo $_SESSION['notice'];
                    session_unset();
                }
                ?>
                </p>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Account name"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" name="submit" type="submit" style="background-color: rgb(57,57,57);">Log in</button></div><a class="already" href="register.php">Create a new one if you are a new member</a>
            </form>
        </div>
    </div>
   <?php
    require "footer.php"
   ?>
</body>

</html>