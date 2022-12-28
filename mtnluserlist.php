
<?php
require_once('config.php');
?>

<?php

$sql = " SELECT * FROM ftthusers ORDER BY id ASC ";
$result = $link->query($sql);
$link->close();

?>


<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Mtnl Users</title>
    <link rel="stylesheet" type="text/css" href="css/userliststyle.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>


    <h1 class="text-center">MTNL User List</h1><br>
    <div class="container-1">
    <div class="row">
        <div class="col-md-12">
            <div class="table-b">
              <table class="table">
                <tr class="table-header">
                    <th class="cell">Sr.No.</th>
                    <th class="cell">Customer Name</th>
                    <th class="cell">Mobile</th>
                    <th class="cell">Address</th>
                    <th class="cell">Type</th>
                    <th class="cell">WO. No.</th>
                    <th class="cell">Landline</th>
                    <th class="cell">CA. No.</th>
                    <th class="cell">Vlan</th>                    
                    <th class="cell">Voice Static IP</th>                    
                    <th class="cell">ONT Type</th>
                    <th class="cell">ONT By</th>
                    <th class="cell">ONT Series/Mac</th>
                    
                    
                    
                </tr>
                
                <?php
                  // LOOP TILL END OF DATA
                  while($rows=$result->fetch_assoc())
                  {
                ?>
                <tr class="active">
                      <!-- FETCHING DATA FROM EACH
                          ROW OF EVERY COLUMN -->
                      <td><?php echo $rows['id'];?></td>
                      <td><?php echo $rows['custname'];?></td>
                      <td><?php echo $rows['mobno'];?></td>
                      <td><?php echo $rows['address'];?></td>
                      <td><?php echo $rows['ctype'];?></td>
                      <td><?php echo $rows['wono'];?></td>
                      <td><?php echo $rows['landline'];?></td>
                      <td><?php echo $rows['cano'];?></td>
                      <td><?php echo $rows['voice'];?></td>
                      <td><?php echo $rows['voicesip'];?></td>
                      <td><?php echo $rows['onttype'];?></td>
                      <td><?php echo $rows['ontby'];?></td>
                      <td><?php echo $rows['ontmac'];?></td>
                </tr>
        
                <?php
                  }
                ?>
                </tr>
                
              </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

