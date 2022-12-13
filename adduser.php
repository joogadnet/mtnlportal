<?php
require_once('config.php');
?>
<?php
    if (isset($_POST['create'])){
    $username    = $_POST['username'];
    $firstname   = $_POST['firstname']; 
    $lastname    = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $address     = $_POST['address'];

    echo $username, "", $firstname, "", $lastname, "", $phonenumber, "", $address;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add New User</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div>
                <form action="adduser.php" method="POST">
                    <div class="row">
                        <h2>Ftth User</h2>
                        <div class="col-sm-3">

                        <div class="mb-3">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" required/>
                            </div>

                            <div class="mb-3">
                                <label for="firstname">First Name</label>
                                <input class="form-control" type="text" name="firstname" required/>
                            </div>

                            <div class="mb-3">
                                <label for="lastname">Last Name</label>
                                <input class="form-control" type="text" name="lastname" required/>
                            </div>

                            <div class="mb-3">
                                <label for="phonenumber">Mobile</label>
                                <input class="form-control" type="text" maxlength="10" name="phonenumber" required/>
                            </div>

                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input class="form-control" type="textarea" name="address" required/>
                            </div>

                            <div class="mb-3">
                            <input 
               class="btn btn-primary" type="submit" name="create" value="submit"/>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </body>
</html>