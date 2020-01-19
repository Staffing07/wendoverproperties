<?php
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


<h4 class="center grey-text">Add tenancy</h4>


<div class="container">

    <div class="row">
        <form action="" class="col s12">
            <div class="row">
                <div class="col s12">

                    <label>For which property?</label>

                    <select>
                        <option>Please choose one</option>
                        <?php while ($rows = mysqli_fetch_array($result)) :; ?>
                            <option><?php echo $rows[1]; ?></option>

                        <?php endwhile; ?>

                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col s6">
                    <div class="input-field">
                        <i class="material-icons prefix">date_range</i>
                        <input id="tenancy_start_date" type="text" class="datepicker">
                        <label for="tenancy_start_date">Tenancy start date</label>

                    </div>

                </div>
                <div class="col s6">
                    <div class="input-field">
                        <i class="material-icons prefix">date_range</i>
                        <input id="tenancy_end_date" type="text" class="datepicker">
                        <label for="tenancy_end_date">Tenancy end date</label>
                    </div>


                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <i class="material-icons prefix">account_balance_wallet</i>
                    <input id="rent_amount" type="text">
                    <label for="rent_amount">Rent amount</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">date_range</i>
                    <input id="tenancy_due_date" type="text" class="datepicker">
                    <label for="tenancy_due_date">Rent due date</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">update</i>
                    <select id="rent_frequency">
                        <option>Please choose one</option>
                        <option>Calendar monthly</option>
                        <option>Four weekly</option>
                        <option>Fortnightly</option>
                        <option>Weekly</option>
                    </select>
                    <label for="rent_frequency">Rent frequency</label>
                </div>
            </div>
            <div class="row">
                <a href="#" class="btn-floating right"><i class="material-icons">add</i></a>
            </div>




        </form>
    </div>

</div>

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