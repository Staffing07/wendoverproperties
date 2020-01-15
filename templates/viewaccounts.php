<?php
// MySQLi or PDO - can use either MySQLi is an easier procedural method.  Should learn PDO when I can
$conn = mysqli_connect('localhost', 'un4h9q4cq4qq9', 'bQ5~R3d#5|^2', 'dbvxpegdk288uk');

// Check connection working
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

// Query to view all properties
$sql = 'SELECT accounts.itemdate, accounts.itemamount, accounts.itemdetails, properties.address, accounts.itemvatable
FROM accounts
         INNER JOIN properties ON properties.propertyid = accounts.itemid';




$result = mysqli_query($conn, $sql);

?>

<?php include('header.php'); ?>

<style>
   .table-row-highlight>tbody>tr:hover {
    background-color: #b2dfdb !important;
}

.accounts-table thead {
        font-size: 0.6em;
    }

    .accounts-table td {
        font-size: 0.5em;
    }

    @media only screen and (min-width: 600px) {
        .accounts-table td {
            font-size: 0.7em;
        }
    }

    @media only screen and (min-width: 900px) {

        .accounts-table thead {
            font-size: initial;
        }

        .accounts-table td {
            font-size: initial;
        }
    }
</style>

<h4 class="center grey-text">Accounts</h4>

<div class="container">
    <div class="row">


        <table class="highlight table-row-highlight accounts-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Details</th>
                    <th>Property</th>
                    <th>Vatable?</th>
                </tr>
            </thead>

            <?php


            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo htmlspecialchars($row['itemdate']); ?></td>
                        <td><?php echo htmlspecialchars($row['itemamount']); ?></td>
                        <td><?php echo htmlspecialchars($row['itemdetails']); ?></td>
                        <td><?php echo htmlspecialchars($row['address']); ?></td>
                        <td><?php echo htmlspecialchars($row['itemvatable']); ?></td>
                        <td><a href="#" class="waves-effect waves-light btn-small right"><i class="material-icons left">edit</i>Edit</a></td>
                    </tr>

                </tbody>
            <?php
            }
            ?>

        </table>

    </div>
    <div class="row">
        <a href="#" class="btn-floating right"><i class="material-icons">add</i></a>
    </div>
</div>

<?php include('footer.php'); ?>