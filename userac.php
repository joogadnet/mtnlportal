<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
    <body>

  <div><?php
if (isset($_POST['create'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

      $sql = "INSERT INTO ftthuser (name, mobile, username, password) Values(?,?,?,?)";
      $stmtinsert = $db->prepare($sql);
      $result = $stmtinsert->execute([$name, $username, $mobile, $password]);
      if($result){
          echo 'Successfully saved.';
      } else{
          echo 'Something went wrong.';
      }
}
?>
</div>
        <div>
            <form action="userac.php" method="post">
                <div class="container">
                    <div class="row">
                    
                <h1> MTNL FTTH Users</h1>
                <div class="col-sm-3">
                    <div class="mb-3">
                <label for="name">Customer Name</label>
                <input class="form-control" type="text" name="name" required/>
                
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" required/>

                <label for="mobile">Phone Number</label>
                <input class="form-control" type="text" name="mobile" required/>

                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" required/>
                
                    </div>
            </div>
               </div>
                <input 
               class="btn btn-primary" type="submit" name="create" value="submit"/>
                <hr class="mb-3">
            </div>
            
            <h2>MTNL FTTH Users List</h2>
                
            </div>
            </div>
            </div>
        </form>   
               
        </div>
    </body>
</head>
</html>