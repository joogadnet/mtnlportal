<?php
if(isset($_POST['submit'])){
    
}
?>

<!DOCTYPE html>
<html>
    <head><title>Mtnl Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
       <div class="container">
        <h3>Login</h3>
        <div class="">
            <form action="login.php"  class="login-form">
            <div class="col-sm-1">
                <label for="username">Username</label>
                <input type="text" name="username" required/><br><br>
            </div>
            <div class="col-sm-1">
                <label for="password">Password</label>
                <input type="password" name="password" required/><br><br>

                <button name="submit">login</button>
            </div>     
        </form>
        </div>
        <footer><hr><p>By Hashcode Team</footer>
        </div>
    </body>
</html>