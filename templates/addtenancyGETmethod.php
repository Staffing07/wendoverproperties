<?php

// check whether data has been sent via the GET method if submit button clicked
if(isset($_GET['submit'])){ // creates an array to store the data from the form
    $property_selected = $_GET['address']; //stores select as variable
    echo $_GET['address'];
    echo $_GET['startdate'];
    echo $_GET['enddate'];
    echo $_GET['rentamount'];
    echo $_GET['duedate'];
    $rent_frequency = $_GET['frequency']; //stores select as variable
}    



// MySQLi or PDO - can use either MySQLi is an easier procedural method.  Should learn PDO when I can
$conn = mysqli_connect('localhost', 'un4h9q4cq4qq9', 'bQ5~R3d#5|^2', 'dbvxpegdk288uk');

// Check connection working
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

$sql = 'SELECT * FROM properties';

// make query & get result
$result = mysqli_query($conn, $sql);



// print the array to screen (useful to check result working)
print_r($properties);
?>

<?php include('header.php'); ?>


<section class="container grey-text">
    <h4 class="center">Add tenancy</h4>
    <form action="addtenancy.php" method="GET" class="white">
        <label for="property_select">Select property</label>
        <div class="input-field col s12">
            <select name="address" id="property_select">
                <option>Please choose one</option>
                <?php while ($rows = mysqli_fetch_array($result)) :; ?>
                    <option><?php echo $rows[1]; ?></option>

                <?php endwhile; ?>

            </select>
        </div>


        <label for="tenancy_start_date">Tenancy start date</label>
        <input name="startdate" id="tenancy_start_date" type="text" class="datepicker">
        <label for="tenancy_end_date">Tenancy end date</label>
        <input name="enddate" id="tenancy_end_date" type="text" class="datepicker">
        <label for="rent_amount">Rent amount</label>
        <input name="rentamount" id="rent_amount" type="text">
        <label for="tenancy_due_date">Rent due date</label>
        <input name="duedate" id="tenancy_due_date" type="text" class="datepicker">
        <label for="rent_frequency">Rent frequency</label>
        <div class="input-field col s12">
            <select name="frequency" id="rent_frequency">
                <option>Please choose one</option>
                <option>Calendar monthly</option>
                <option>Four weekly</option>
                <option>Fortnightly</option>
                <option>Weekly</option>
            </select>
        </div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<script>
    // jQuery

    $(document).ready(function() {
        $('select').formSelect();
    });




    //jQuery

    $(document).ready(function() {
        $('.datepicker').datepicker();
    });
</script>


<?php include('footer.php'); ?>