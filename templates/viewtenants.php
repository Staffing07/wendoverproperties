<?php
// MySQLi or PDO - can use either MySQLi is an easier procedural method.  Should learn PDO when I can
$conn = mysqli_connect('localhost', 'un4h9q4cq4qq9', 'bQ5~R3d#5|^2', 'dbvxpegdk288uk');

// Check connection working
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

// Query to view all properties
$sql = 'SELECT * FROM tenant ORDER BY tenantname';

// Example select sql
// $sql = 'SELECT propertyid, address, town, city, postcode, id FROM properties

// fetch the resulting rows as an array
// $tenants = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Check there is content in the table
$count = 1;

// make query & get result
$result = mysqli_query($conn, $sql);

// Fetch the resulting info into rows
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {


        //while($row = mysqli_fetch_all($result, MYSQLI_ASSOC));

        // good practice to free the result from memory
        mysqli_free_result($result);

        // close connection
        mysqli_close($conn);

        // print the array to screen (useful to check result working)
        print_r($row);

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

        <h4 class="center grey-text">Tenants</h4>

        <div class="container">
            <div class="row">


                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact number</th>
                        </tr>
                    </thead>



                    <tbody>
                        <tr>



                            <td><?php echo htmlspecialchars($row['tenantname']); ?></td>
                            <td><?php echo htmlspecialchars($row['tenantemail']); ?></td>
                            <td><?php echo htmlspecialchars($row['tenantphone']); ?></td>
                        </tr>
                        <tr>
                            <td>Alan</td>
                            <td>Jellybean</td>
                            <td>$3.76</td>
                        </tr>
                        <tr>
                            <td>Jonathan</td>
                            <td>Lollipop</td>
                            <td>$7.00</td>
                        </tr>
                    </tbody>
            <?php
            $count++;
        }
    } else {
        echo "0 results";
    }
            ?>
                </table>


            </div>
        </div>


        <div class="container">
            <div class="row">

                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($property['address']); ?></h6>
                            <div><?php echo htmlspecialchars($property['town']); ?></div>
                            <div><?php echo htmlspecialchars($property['city']); ?></div>
                            <div><?php echo htmlspecialchars($property['postcode']); ?></div>
                            <hr>
                            <div>
                                <p>Property id - <?php echo htmlspecialchars($property['propertyid']); ?></p>
                            </div>
                        </div>
                        <div class="card-action right-align">
                            <a href="" class="brand-text" href="#">more info</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>







        <?php include('footer.php'); ?>