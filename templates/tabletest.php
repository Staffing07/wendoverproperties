<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table php test</title>
</head>
<body>
    <table>
    <?php
// MySQLi or PDO - can use either MySQLi is an easier procedural method.  Should learn PDO when I can
$conn = mysqli_connect('localhost', 'un4h9q4cq4qq9', 'bQ5~R3d#5|^2', 'dbvxpegdk288uk');

// Check connection working
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

// Query to view all properties
$sql = 'SELECT * FROM tenant ORDER BY tenantname';

$result = mysqli_query($conn, $sql);

if($result-> num_rows > 0) {
    while ($row =$result-> fetch_assoc()) {
        echo "<tr><td>". $row["tenantname"] ."</td><td>". $row["tenantemail"] ."</td><td>". $row["tenantphone"] ."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 result";
}

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
    </table>
</body>
</html>