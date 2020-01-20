<?php

include('../config/db_connect.php');


// MySQLi or PDO - can use either MySQLi is an easier procedural method.  Should learn PDO when I can
$conn = mysqli_connect('localhost', 'un4h9q4cq4qq9', 'bQ5~R3d#5|^2', 'dbvxpegdk288uk');

// Check connection working
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

$sql = 'SELECT * FROM properties';

// make query & POST result
$result = mysqli_query($conn, $sql);

// initialise variables on page load
$address = $startdate = $enddate = $rentamount = $duedate = $frequency = '';


// form validation errors array

$errors = array('address' => '', 'startdate' => '', 'enddate' => '', 'renatamount' => '', 'duedate' => '', 'frequency' => '');

// check whether data has been sent via the POST method if submit button clicked
if (isset($_POST['submit'])) { // creates an array to store the data from the form

    // check whether fields are empty
    // check property selected
    if (empty($_POST['address'])) {
        $errors['address'] = 'Please select the address for the tenancy <br>';
    } else {
        $address = $_POST['address'];
    }

    // check start date selected
    if (empty($_POST['startdate'])) {
        $errors['startdate'] = 'Please choose the start date of the tenancy <br>';
    } else {
        $startdate = $_POST['startdate'];
    }

    // check end date selected
    if (empty($_POST['enddate'])) {
        $errors['enddate'] = 'Please choose the end date of the tenancy <br>';
    } else {
        $enddate = $_POST['enddate'];
    }

    // check rent amount entered
    if (empty($_POST['rentamount'])) {
        $errors['rentamount'] = 'Please enter the rent amount <br>';
    } else {
        $rentamount = $_POST['rentamount'];
    }

    // check due date selected
    if (empty($_POST['duedate'])) {
        $errors['duedate'] = 'Please select the date the rent is due <br>';
    } else {
        $duedate = $_POST['duedate'];
    }

    // check frequency selected
    if (empty($_POST['frequency'])) {
        $errors['frequency'] = 'Please select how often the rent should be paid <br>';
    } else {
        $frequency = $_POST['frequency'];
    }

    // Check whether errors - if no errors redirect user to homepage
    if(array_filter($errors)){
        //echo 'errors in the form';

    }
    else {
                
        // escape malicious characters to prevent sql injection
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        

        // create sql query
        $sql = "INSERT INTO tenancy(address,tenancystartdate,tenancyenddate,tenancyamount,tenancyrentdueon,tenancypaymentfreq ) VALUES('$address', '$startdate', '$enddate', '$rentamount', '$duedate', '$frequency')";

        // save to db & check
        if(mysqli_query($conn, $sql)){
            // success
            header('Location: /index.php');
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }


        
        

    }

}   //  end of the POST check





?>

<?php include('header.php'); ?>


<section class="container grey-text">
    <h4 class="center">Add tenancy</h4>
    <form action="addtenancy.php" method="POST" class="white">
        <label for="property_select">Select property</label>
        <div class="input-field col s12">
            <select name="address" id="property_select" value="<?php echo htmlspecialchars($address) ?>">
                <option disabled selected hidden>Please choose one</option>
                <?php while ($rows = mysqli_fetch_array($result)) :; ?>
                    <!-- <option><?php echo $rows[1]; ?></option> -->

                    <?php
                    if (isset($_POST['address']) && $rows['address'] == $_POST['address']) {
                        echo "<option selected value='" . $rows['address'] . "'>" . $rows['address'] . "</option>";
                    } else {
                        echo "<option value='" . $rows['address'] . "'>" . $rows['address'] . "</option>";
                    } ?>

                <?php endwhile; ?>

            </select>
            <div class="red-text"><?php echo $errors['address']; ?></div>
        </div>


        <label for="tenancy_start_date">Tenancy start date</label>
        <input name="startdate" id="tenancy_start_date" type="text" class="datepicker" value="<?php echo htmlspecialchars($startdate) ?>">
        <div class="red-text"><?php echo $errors['startdate']; ?></div>
        <label for="tenancy_end_date">Tenancy end date</label>
        <input name="enddate" id="tenancy_end_date" type="text" class="datepicker" value="<?php echo htmlspecialchars($enddate) ?>">
        <div class="red-text"><?php echo $errors['enddate']; ?></div>
        <label for="rent_amount">Rent amount</label>
        <input name="rentamount" id="rent_amount" type="text" value="<?php echo htmlspecialchars($rentamount) ?>">
        <div class="red-text"><?php echo $errors['rentamount']; ?></div>
        <label for="tenancy_due_date">Rent due date</label>
        <input name="duedate" id="tenancy_due_date" type="text" class="datepicker" value="<?php echo htmlspecialchars($duedate) ?>">
        <div class="red-text"><?php echo $errors['duedate']; ?></div>
        <label for="rent_frequency">Rent frequency</label>
        <div class="input-field col s12">
            <select name="frequency" id="rent_frequency" value="<?php echo htmlspecialchars($frequency) ?>">
                <option disabled selected hidden>Please choose one</option>
                <option <?php if (isset($frequency) && $frequency == "Calendar monthly") echo "selected"; ?>>Calendar monthly</option>
                <option <?php if (isset($frequency) && $frequency == "Four weekly") echo "selected"; ?>>Four weekly</option>
                <option <?php if (isset($frequency) && $frequency == "Fortnightly") echo "selected"; ?>>Fortnightly</option>
                <option <?php if (isset($frequency) && $frequency == "Weekly") echo "selected"; ?>>Weekly</option>

            </select>
            <div class="red-text"><?php echo $errors['frequency']; ?></div>
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

<!-- <script>window.location = "http://www.thenetninja.co.uk"</script> Useful test to see whether form protected from XSS - if form sends you to the web address on submit then form is vulnerable-->


<?php include('footer.php'); ?>