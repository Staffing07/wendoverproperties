<?php 
    // MySQLi or PDO - can use either MySQLi is an easier procedural method.  Should learn PDO when I can
  $conn = mysqli_connect('localhost', 'un4h9q4cq4qq9', 'bQ5~R3d#5|^2', 'dbvxpegdk288uk' );

  // Check connection working
  if(!$conn){
   echo 'Connection error: ' . mysqli_connect_error();
  }

  // Query to view all properties
  $sql = 'SELECT * FROM properties ORDER BY propertyid';

  // Example select sql
  // $sql = 'SELECT propertyid, address, town, city, postcode, id FROM properties

  // make query & get result
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $properties = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // good practice to free the result from memory
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);

  // print the array to screen (useful to check result working)
  // print_r($properties);

  // How to split a string into a list - in this example it is comma separated (explode function)
  // explode(',', $properties)[0]['column to be separated goes here']);
  // print_r(explode(',', $properties)[0]['column to be separated goes here']));

  // Then in the html you would show the list like this
  // <ul>
  //    <?php foreach(explode(',', $property['column to be separated goes here']) as $list){ question mark>
  //        <li><?php echo htmlspecialchars($list); question mark> </li>
  //    <?php } questionmark>

  // </ul>




  // TO DO
  // Add image of property above address
  // More info to show current tenant, tenancy and spending on the property
?>

<?php include('header.php'); ?>

<h4 class="center grey-text">Properties</h4>

<div class="container">
    <div class="row">
        <?php foreach($properties as $property){ ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($property['address']); ?></h6>
                        <div><?php echo htmlspecialchars($property['town']); ?></div>
                        <div><?php echo htmlspecialchars($property['city']); ?></div>
                        <div><?php echo htmlspecialchars($property['postcode']); ?></div>
                        <hr>
                        <div><p>Property id - <?php echo htmlspecialchars($property['propertyid']); ?></p></div>
                    </div>
                    <div class="card-action right-align">
                        <a href="" class="brand-text" href="#">more info</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>







<?php include('footer.php'); ?>